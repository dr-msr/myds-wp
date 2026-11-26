#!/usr/bin/env python3
"""Follow MYDS upstream.

Downloads the published @govtechmy/myds-style package from npm, reads the colour
token values out of it, and writes them into tools/tokens.json. Only values are
recorded; no upstream file is copied into this repository.

    python3 tools/sync_upstream.py            # update tools/tokens.json if npm has changed
    python3 tools/sync_upstream.py --check    # report only, exit 1 if there is a difference
    python3 tools/sync_upstream.py --from DIR # read an unpacked package from DIR instead of npm

Prints a Markdown summary of the differences on stdout. Standard library only.
"""

import argparse
import io
import json
import re
import sys
import tarfile
import urllib.request
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
TOKENS = ROOT / "tools" / "tokens.json"
PACKAGE = "@govtechmy/myds-style"
REGISTRY = "https://registry.npmjs.org/"

DECL = re.compile(r"^\s*--([\w-]+)\s*:\s*([^;]+);", re.M)
REF = re.compile(r"^var\(--_([\w-]+)\)(?:\s*/\s*([\d.]+))?$")


def strip_comments(css: str) -> str:
    return re.sub(r"/\*.*?\*/", "", css, flags=re.S)


def parse_primitives(css: str) -> dict[str, str]:
    out = {}
    for name, value in DECL.findall(strip_comments(css)):
        parts = value.split()
        if len(parts) != 3:
            raise SystemExit(f"color.css: unexpected value for --{name}: {value}")
        r, g, b = (int(n) for n in parts)
        out[name.lstrip("_")] = f"#{r:02x}{g:02x}{b:02x}"
    return out


def parse_semantic(css: str, label: str) -> dict[str, list]:
    out = {}
    for name, value in DECL.findall(strip_comments(css)):
        m = REF.match(value.strip())
        if not m:
            raise SystemExit(f"{label}: cannot read --{name}: {value}")
        out[name] = [m.group(1), float(m.group(2)) if m.group(2) else None]
    return out


def fetch_package() -> tuple[str, dict[str, str]]:
    """Return (version, {relative path: text}) for the latest published package."""
    meta = json.load(urllib.request.urlopen(REGISTRY + PACKAGE.replace("/", "%2F"), timeout=60))
    version = meta["dist-tags"]["latest"]
    tarball = meta["versions"][version]["dist"]["tarball"]
    data = urllib.request.urlopen(tarball, timeout=60).read()
    files = {}
    with tarfile.open(fileobj=io.BytesIO(data), mode="r:gz") as tar:
        for member in tar.getmembers():
            if member.isfile() and member.name.startswith("package/styles/theme/") and member.name.endswith(".css"):
                files[member.name.removeprefix("package/")] = tar.extractfile(member).read().decode()
    return version, files


def read_dir(path: Path) -> tuple[str, dict[str, str]]:
    version = json.loads((path / "package.json").read_text()).get("version", "local")
    files = {f"styles/theme/{n}": (path / "styles" / "theme" / n).read_text() for n in ("color.css", "light.css", "dark.css")}
    return version, files


def diff(old: dict, new: dict) -> list[str]:
    lines = []
    for section in ("primitives", "light", "dark"):
        a, b = old.get(section, {}), new[section]
        for key in sorted(set(a) | set(b)):
            if key not in a:
                lines.append(f"| {section} | `{key}` | added | `{b[key]}` |")
            elif key not in b:
                lines.append(f"| {section} | `{key}` | `{a[key]}` | removed |")
            elif a[key] != b[key]:
                lines.append(f"| {section} | `{key}` | `{a[key]}` | `{b[key]}` |")
    return lines


def main() -> int:
    ap = argparse.ArgumentParser()
    ap.add_argument("--check", action="store_true")
    ap.add_argument("--from", dest="src", type=Path)
    args = ap.parse_args()

    version, files = read_dir(args.src) if args.src else fetch_package()
    try:
        new = {
            "primitives": parse_primitives(files["styles/theme/color.css"]),
            "light": parse_semantic(files["styles/theme/light.css"], "light.css"),
            "dark": parse_semantic(files["styles/theme/dark.css"], "dark.css"),
        }
    except KeyError as missing:
        raise SystemExit(f"{PACKAGE} {version} no longer ships {missing}; the sync needs updating")

    old = json.loads(TOKENS.read_text())
    changes = diff(old, new)
    previous = old.get("upstream", {}).get("version")

    if not changes and previous == version:
        print(f"No change: tokens match {PACKAGE} {version}.")
        return 0

    summary = [f"MYDS colour tokens compared with {PACKAGE} {version} (previously {previous or 'not recorded'}).", ""]
    if changes:
        summary += ["| Set | Token | Ours | npm |", "| --- | --- | --- | --- |", *changes]
    else:
        summary.append("The token values are unchanged; only the recorded version moves.")
    print("\n".join(summary))

    if args.check:
        return 1

    old.update(new)
    old["upstream"] = {"package": PACKAGE, "version": version}
    TOKENS.write_text(json.dumps(old, indent="\t") + "\n")
    return 0


if __name__ == "__main__":
    sys.exit(main())
