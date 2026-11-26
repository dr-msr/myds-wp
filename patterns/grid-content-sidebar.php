<?php
/**
 * Title: Grid: content and sidebar
 * Slug: myds-wp/grid-content-sidebar
 * Categories: myds
 * Description: Eight columns of content beside a four column sidebar on desktop.
 * Keywords: grid, sidebar, 12-8-4
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"align":"wide","className":"myds-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide myds-grid"><!-- wp:group {"className":"myds-col-md-5 myds-col-lg-8","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-md-5 myds-col-lg-8"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Licence renewal', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Renewals open 90 days before a licence expires and close 30 days after it.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"myds-col-md-3 myds-col-lg-4","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-md-3 myds-col-lg-4"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Related', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Book a counter visit, check an application, fees.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
