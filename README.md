# MYDS WP

A WordPress block theme that implements [MYDS](https://design.digital.gov.my), the Malaysia Government Design System. It needs no plugin and no build step on the server. It requires WordPress 7.1 or later.

MYDS WP is an independent, community project based on the public [govtechmy/myds](https://github.com/govtechmy/myds) repository. It is not affiliated with or endorsed by the Government of Malaysia. The upstream repository carries no stated licence at present; `NOTICE.md` sets out what this theme takes from MYDS, and issues and discussion on that point are welcome.

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
| Phase banner, Masthead, Navbar, Footer | Patterns in the MYDS category. The masthead is optional and for government sites only. |

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

`theme.json`, `assets/css/tokens.css` and `styles/*.json` are generated. Edit `tools/build.py`, then:

```
uv run --no-project tools/build.py
```

To follow a newer MYDS release, update the values in `tools/tokens.json` and run it again.

`demo/seed.php` fills a fresh site with demo pages: `wp eval-file wp-content/themes/myds-wp/demo/seed.php`.

## Licence

GNU General Public License, version 2 or later. See `LICENSE` and `NOTICE.md`.
