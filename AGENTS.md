# AGENTS.md

Instructions for AI coding agents working with MYDS WP, either on this repository or on a WordPress site that uses the theme.

## What this is

MYDS WP is a WordPress block theme (theme.json version 3, full site editing) that implements MYDS, the Malaysia Government Design System. It needs WordPress 7.1 or later and no plugin.

The full list of patterns, block styles, templates, template parts, style variations and design tokens is in `docs/catalog.json` (for programs) and `docs/CATALOG.md` (for people). Read one of them before building a page.

## Building pages on a site that uses the theme

- Start a new page from a starter in the `myds-pages` pattern category: `myds-wp/page-agency-home`, `page-organisation-home`, `page-service`, `page-news`, `page-blog`, `page-portfolio`, `page-about`, `page-contact` or `page-faq`.
- The two home starters carry their own `h1`. Use them on the front page or with the "Full width, no title" template (`page-wide`).
- Add components with the patterns in the `myds` category, or with block styles on core blocks. A block style is a class on the block, for example `is-style-callout-warning` on a Group or `is-style-danger-outline` on a Button.
- Use the 12-8-4 grid for multi-column layouts: a Group with class `myds-grid`, and children with `myds-col-*`, `myds-col-md-*` and `myds-col-lg-*`. A child with no column class spans the full row.
- Use preset values, never raw ones: colours as `var(--wp--preset--color--<slug>)`, font sizes as the `fontSize` attribute (`body-sm`, `heading-md` and so on), spacing as `var:preset|spacing|<px>` (4, 8, 12, 16, 20, 24, 32, 40, 48, 64).
- Colours follow light and dark mode on their own. Do not hard-code a hex value in block attributes or custom CSS.
- To use a brand colour, add a style variation that sets `settings.custom.myds.primary` (steps 50 to 950). Do not edit `theme.json` or fork the theme. `styles/red.json` is a working example.
- The government masthead (`myds-wp/masthead`, or the `header-masthead` template part) is for sites of the Government of Malaysia only.

## Working on this repository

- `theme.json`, `assets/css/tokens.css`, `styles/*.json` and `docs/catalog.*` are generated. Change `tools/build.py` or `tools/tokens.json`, then run `python3 tools/build.py`. It uses the Python standard library only.
- `tools/tokens.json` records the MYDS colour token values. `python3 tools/sync_upstream.py` compares it with the latest `@govtechmy/myds-style` on npm and updates it. The scheduled workflow in `.github/workflows/upstream.yml` does the same and opens a pull request when something changes.
- Every pattern in `patterns/` needs a Title, Slug, Categories, Description and Keywords header. The build fails without them. Page starters also need `Block Types: core/post-content` and `Post Types: page`.
- Component CSS is in `assets/css/myds.css` and takes colour only from `--myds-*` tokens, so each rule works in both modes.
- Do not copy files from the MYDS repository into this one. Express values in `tools/tokens.json` and write the CSS here. `NOTICE.md` explains why.
- `demo/seed.php` fills a fresh site with the demo content: `wp eval-file wp-content/themes/myds-wp/demo/seed.php`.

## Checks before a change is done

- Run `python3 tools/build.py` and commit the generated files with the source change.
- Look at every changed page at 390px and 1440px wide, in light and dark mode, with no horizontal scrolling.
- Hover and focus every changed control in both modes and confirm the text stays readable.
- After adding or renaming a pattern on a running site, clear the transients (`wp transient delete --all --network`). WordPress caches the theme's pattern list until the theme version changes.
