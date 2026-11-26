#!/usr/bin/env python3
"""Build the installable theme zip from an allowlist: dist/myds-wp.zip with a myds-wp/ root folder.

Repository-only files (tools, demo, skills, AGENTS.md, .github, dot files) stay out of the package.
Standard library only. Usage: python3 tools/package.py
"""

import zipfile
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
FILES = ["style.css", "functions.php", "theme.json", "readme.txt", "screenshot.png", "LICENSE", "NOTICE.md", "README.md", "docs/catalog.json", "docs/CATALOG.md"]
DIRS = ["assets", "parts", "patterns", "styles", "templates"]


def main() -> None:
    paths = [ROOT / f for f in FILES]
    for d in DIRS:
        paths += sorted(p for p in (ROOT / d).rglob("*") if p.is_file() and not any(part.startswith(".") for part in p.relative_to(ROOT).parts))
    missing = [str(p.relative_to(ROOT)) for p in paths if not p.exists()]
    if missing:
        raise SystemExit("Missing from the package: " + ", ".join(missing))
    out = ROOT / "dist" / "myds-wp.zip"
    out.parent.mkdir(exist_ok=True)
    with zipfile.ZipFile(out, "w", zipfile.ZIP_DEFLATED) as z:
        for p in paths:
            z.write(p, "myds-wp/" + str(p.relative_to(ROOT)))
    print(f"{out.relative_to(ROOT)}: {len(paths)} files")


if __name__ == "__main__":
    main()
