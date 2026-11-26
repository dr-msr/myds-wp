=== MYDS WP ===
Contributors: drmsr
Requires at least: 7.1
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A block theme that implements MYDS, the Malaysia Government Design System, with light and dark modes, the MYDS components and starter pages.

== Description ==

MYDS WP brings MYDS, the Malaysia Government Design System, to the WordPress block editor. It needs no plugin.

* Colour tokens from MYDS in light and dark. The site follows the visitor's device setting, and a switch in the header remembers their choice.
* Poppins for headings and Inter for text, bundled with the theme.
* The MYDS type scale, spacing, radius and shadow presets, and the 12-8-4 grid.
* MYDS components as block styles and patterns: eight button variants, callout, panel, accordion, details, table, tag and pill, breadcrumb, pagination, skip link, phase banner, navbar and footer.
* Nine starter pages in the pattern picker for new pages: agency home, organisation home, service, news, blog, portfolio, about, contact and frequently asked questions.
* An optional "Official Malaysian Government Website" masthead, for sites of the Government of Malaysia only.
* A brand colour through a style variation, without editing the theme. Red and green variations are included as examples.

MYDS WP is an independent community project based on the public govtechmy/myds repository. It is not affiliated with or endorsed by the Government of Malaysia.

Source code, issues and documentation: https://github.com/dr-msr/myds-wp
Demo: https://myds-wp.drmsr.dev

== Frequently Asked Questions ==

= How do I use my own brand colour? =

Add a style variation that sets the primary scale under settings.custom.myds.primary, then choose it in Appearance, Editor, Styles. The README on GitHub has a complete example.

= Can a site that is not a government site use this theme? =

Yes. Leave out the government masthead pattern, which is meant for sites of the Government of Malaysia only.

= How do I lay out columns on the 12-8-4 grid? =

Add the class myds-grid to a Group block, and classes such as myds-col-md-4 and myds-col-lg-6 to the blocks inside it.

== Changelog ==

= 0.1.0 =
* First release.

== Copyright ==

MYDS WP, Copyright 2026 DRMSR Digital & Health Solutions.
MYDS WP is distributed under the terms of the GNU GPL, version 2 or later.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

== Resources ==

* Inter, Copyright 2016 The Inter Project Authors, SIL Open Font License 1.1, https://github.com/rsms/inter
* Poppins, Copyright 2020 The Poppins Project Authors, SIL Open Font License 1.1, https://github.com/itfoundry/Poppins
* Icons and the Malaysian flag in the masthead pattern, drawn for this theme, Copyright 2026 DRMSR Digital & Health Solutions, GPLv2 or later.
* Screenshot, taken from the theme's demo site, Copyright 2026 DRMSR Digital & Health Solutions, GPLv2 or later.
* Colour token values, type scale and component specifications follow MYDS by Unit Nukleus GovTech, https://github.com/govtechmy/myds. See NOTICE.md.
