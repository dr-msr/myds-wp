<?php
/**
 * Title: Header
 * Slug: myds-wp/header
 * Categories: header, myds
 * Block Types: core/template-part/header
 * Description: Navbar with logo, site title, menu and the light and dark switch.
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"align":"full","className":"myds-navbar","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull myds-navbar"><!-- wp:group {"align":"wide","className":"myds-navbar__inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide myds-navbar__inner"><!-- wp:group {"className":"myds-navbar__brand","layout":{"type":"default"}} -->
<div class="wp-block-group myds-navbar__brand"><!-- wp:site-logo {"width":32,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:group {"className":"myds-navbar__actions","layout":{"type":"default"}} -->
<div class="wp-block-group myds-navbar__actions"><!-- wp:html -->
<button type="button" class="myds-theme-switch" aria-pressed="false" aria-label="<?php esc_attr_e( 'Dark mode', 'myds-wp' ); ?><svg class="myds-theme-switch__sun" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="10" cy="10" r="4"/><path d="M10 1.5v2M10 16.5v2M1.5 10h2M16.5 10h2M4 4l1.4 1.4M14.6 14.6L16 16M4 16l1.4-1.4M14.6 5.4L16 4"/></svg><svg class="myds-theme-switch__moon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M16.5 11.5A7 7 0 1 1 8.5 3.5a5.5 5.5 0 0 0 8 8z"/></svg></button>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
