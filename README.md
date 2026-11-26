# MYDS WP

A WordPress block theme that implements [MYDS](https://design.digital.gov.my), the Malaysia Government Design System. It needs no plugin and no build step on the server. It requires WordPress 7.1 or later.

MYDS WP is an independent, community project based on the public [govtechmy/myds](https://github.com/govtechmy/myds) repository. It is not affiliated with or endorsed by the Government of Malaysia. The upstream repository carries no stated licence at present; `NOTICE.md` sets out what this theme takes from MYDS, and issues and discussion on that point are welcome.

## Installation

1. Download [myds-wp.zip](https://github.com/dr-msr/myds-wp/releases/latest/download/myds-wp.zip) from the latest release.
2. In WordPress, go to Appearance, Themes, Add New Theme, then Upload Theme.
3. Choose `myds-wp.zip`, select Install Now, then Activate.

The theme requires WordPress 7.1 or later. Updates come as new releases: upload the new zip the same way and WordPress offers to replace the installed version.

A live demo runs at [myds-wp.drmsr.dev](https://myds-wp.drmsr.dev).

## What is in it

| MYDS | In WordPress |
| --- | --- |
| Colour tokens, light and dark | CSS custom properties `--myds-*` (59 primitives, 100 semantic tokens per mode), generated from `tools/tokens.json`. The editor palette uses them, so a colour picked in the editor follows dark mode. |
| Dark mode | Follows the device. The switch in the header stores the visitor's choice. Class `dark` or `light` on `<html>`, as in MYDS. |
| Poppins and Inter | Bundled woff2, declared in `theme.json`. No request to a font service. |
| Type scale | Font size presets Body XS to Heading XL, each with its MYDS line height. |
| Spacing, radius, shadow | Presets: spacing 4 to 64px, radius XS to XL, shadows button, card and context menu. |
| 12-8-4 grid | Class `myds-grid` on a Group, with `myds-col-{1-4}`, `myds-col-md-{1-8}`, `myds-col-lg-{1-12}` and `myds-start-md-*` / `myds-start-lg-*` on its children. Content width 1280px, article width 640px. |
| Button | Button block styles: fill (default), outline, primary ghost, default outline, default ghost, danger fill, danger outline, danger ghost. Font size Body SM or Body LG gives the small and large sizes. |
| Callout, Panel | Group block styles, four colours each. |
| Accordion, Details | Details block (default is the accordion; style "Details" is the MYDS details). |
| Table | Table block. |
| Tag, Pill | Paragraph block styles. Post categories and tags use the tag automatically. |
| Breadcrumb, Pagination, Skip link | Core Breadcrumbs, Query Pagination and the WordPress skip link, restyled. |
| Phase banner, Masthead, Navbar, Footer | Patterns in the MYDS category, and two header template parts (with and without the masthead). The masthead is optional and for government sites only. |

## Starter pages

Creating a new page offers nine starters in the "Choose a pattern" window, under the MYDS pages category:

| Starter | Contents |
| --- | --- |
| Agency home | Hero, popular services, a notice, latest news and a help band |
| Organisation home | Hero, key figures, programmes and a call to volunteer |
| Service | Summary, eligibility, documents, steps, fees, a notice and questions |
| News | Three-column grid of the latest posts with pagination |
| Blog | Single-column list of posts with pagination |
| Portfolio | Project cards with status, year and summary |
| About | Vision and mission, functions and leadership |
| Contact | Address, call centre, counter hours and other channels |
| Frequently asked questions | Questions grouped under headings in accordions |

The two home starters carry their own page heading, so use them on the front page or with the "Full width, no title" template. The theme also provides the standard templates: front page, blog home, index, page, single post, archive, search and 404.

## For AI agents

- `AGENTS.md` tells a coding agent how to build pages with the theme and how to work on this repository.
- `docs/catalog.json` and `docs/CATALOG.md` list every pattern, block style, template, template part, style variation and design token. Both are generated from the theme files.
- `skills/myds-wp/` is a skill that an agent can install. For Claude Code, copy the folder to `~/.claude/skills/myds-wp/`.

## Your own brand colour

Do not fork. Add a style variation that replaces the primary scale:

```json
{
	"$schema": "https://schemas.wp.org/trunk/theme.json",
	"version": 3,
	"title": "My brand",
	"settings": { "custom": { "myds": { "primary": {
		"50": "#fef2f2", "100": "#fee2e2", "200": "#fecaca", "300": "#fca5a5",
		"400": "#f87171", "500": "#ef4444", "600": "#dc2626", "700": "#b91c1c",
		"800": "#991b1b", "900": "#7f1d1d", "950": "#450a0a"
	} } } }
}
```

Save it as `styles/my-brand.json` in a child theme and choose it under Appearance, Editor, Styles. Buttons, links, focus rings, tags and callouts follow in light and dark. `styles/red.json` and `styles/green.json` are working examples.

## Development

`theme.json`, `assets/css/tokens.css`, `styles/*.json` and `docs/catalog.*` are generated. Edit `tools/build.py` or `tools/tokens.json`, then run:

```
python3 tools/build.py
```

The build uses the Python standard library only. It fails if a pattern has no description or keywords.

`python3 tools/package.py` builds `dist/myds-wp.zip`, the installable theme, from an allowlist of theme files. Pushing a tag such as `v0.1.1` runs `.github/workflows/release.yml`, which checks that the tag matches the version in `style.css` and `readme.txt`, builds the zip and publishes the release.

## Following MYDS

`tools/tokens.json` records which version of `@govtechmy/myds-style` its values come from. Every Monday, the workflow in `.github/workflows/upstream.yml` compares those values with the latest version on npm. When they differ, it regenerates the theme files and opens a pull request that lists each changed token. A maintainer reviews and merges it. To run the same comparison locally, use `python3 tools/sync_upstream.py --check`.

`demo/seed.php` fills a fresh site with demo pages: `wp eval-file wp-content/themes/myds-wp/demo/seed.php`.

## Licence

GNU General Public License, version 2 or later. See `LICENSE` and `NOTICE.md`.
