---
name: myds-wp
description: |
  Build and edit pages on a WordPress site that uses the MYDS WP block theme, the WordPress
  implementation of MYDS (Malaysia Government Design System). Use when asked to create a page,
  section or layout on such a site, to apply MYDS components (callout, panel, tag, accordion,
  button variants, phase banner, government masthead), to set a brand colour, or to check that
  block markup follows MYDS.
license: GPL-2.0-or-later
---

# MYDS WP

The theme turns MYDS into WordPress presets, block styles and patterns. Work with those; do not write raw colours, sizes or one-off CSS.

## Before you start

1. Confirm the site runs the theme: `wp theme list --status=active` shows `myds-wp`, or the page source loads `themes/myds-wp/assets/css/myds.css`.
2. Read the catalogue for the installed version: `wp-content/themes/myds-wp/docs/catalog.json`. It lists every pattern slug, block style class, template, template part, colour, font size and spacing preset.

## Building a page

- Start from a page starter when one fits. Insert it as `<!-- wp:pattern {"slug":"myds-wp/page-service"} /-->`, or paste the starter's block markup from `patterns/page-*.php` so the content can be edited.
- Starters: `page-agency-home`, `page-organisation-home`, `page-service`, `page-news`, `page-blog`, `page-portfolio`, `page-about`, `page-contact`, `page-faq`.
- Components are block styles on core blocks:

| Component | Block | Class |
| --- | --- | --- |
| Button variants | `core/button` | `is-style-outline`, `is-style-primary-ghost`, `is-style-default-outline`, `is-style-default-ghost`, `is-style-danger-fill`, `is-style-danger-outline`, `is-style-danger-ghost` |
| Callout | `core/group` | `is-style-callout-info`, `-success`, `-warning`, `-danger` |
| Panel | `core/group` | `is-style-panel-info`, `-success`, `-warning`, `-danger` |
| Tag and pill | `core/paragraph` | `is-style-tag`, `is-style-tag-primary`, `-success`, `-warning`, `-danger`, `is-style-pill` |
| Accordion and details | `core/details` | default, or `is-style-details` |

- In a callout, the first block is the title and the blocks after it are the body.
- Button size follows its font size: `body-sm` is small, no size is medium, `body-lg` is large.
- Lay out columns with the 12-8-4 grid: a Group with class `myds-grid`; children take `myds-col-{1-4}` (mobile), `myds-col-md-{1-8}` (768px and up) and `myds-col-lg-{1-12}` (1024px and up). A child without a column class spans the row.

## Values

- Colour: palette slugs only, for example `txt-black-700`, `bg-washed`, `primary-600`, `bg-danger-50`. They switch for dark mode by themselves.
- Font size: `body-xs`, `body-sm`, `body-md`, `body-lg`, `body-xl`, `heading-2xs`, `heading-xs`, `heading-sm`, `heading-md`, `heading-lg`, `heading-xl`.
- Spacing: `var:preset|spacing|N` with N in 4, 8, 12, 16, 20, 24, 32, 40, 48, 64.
- Radius: `xs` 4px, `sm` 6px, `md` 8px, `lg` 12px, `xl` 14px. Shadows: `button`, `card`, `context-menu`.

## Brand colour

Create a style variation, in a child theme or under `styles/`, that sets only the primary scale:

```json
{ "version": 3, "title": "Brand", "settings": { "custom": { "myds": { "primary": { "50": "#...", "100": "#...", "200": "#...", "300": "#...", "400": "#...", "500": "#...", "600": "#...", "700": "#...", "800": "#...", "900": "#...", "950": "#..." } } } } }
```

Activate it in Appearance, Editor, Styles. Buttons, links, focus rings, tags and info callouts follow in both modes.

## Rules

- The government masthead (`myds-wp/masthead`, template part `header-masthead`) belongs on sites of the Government of Malaysia only.
- Keep one `h1` per page. The two home starters carry their own `h1`, so use them on the front page or with the "Full width, no title" template. The other starters expect the page template's title as the `h1`.
- Check the result at 390px and 1440px wide, in light and dark mode.
