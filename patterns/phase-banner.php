<?php
/**
 * Title: Phase banner
 * Slug: myds-wp/phase-banner
 * Categories: myds
 * Description: Tells users the stage a service is in and links to feedback. Sits under the header and scrolls with the page.
 * Keywords: beta, alpha, announce bar
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"align":"full","className":"myds-phase-banner","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull myds-phase-banner"><!-- wp:group {"align":"wide","className":"myds-phase-banner__inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide myds-phase-banner__inner"><!-- wp:paragraph {"className":"is-style-tag-primary"} -->
<p class="is-style-tag-primary"><?php esc_html_e( 'Beta', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'This is a new service.', 'myds-wp' ); ?> <a href="#"><?php esc_html_e( 'Help us improve it by sending your feedback.', 'myds-wp' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
