<?php
/**
 * Title: Grid: two columns
 * Slug: myds-wp/grid-halves
 * Categories: myds
 * Description: Two equal columns on tablet and desktop, stacked on mobile.
 * Keywords: grid, columns, 12-8-4
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"align":"wide","className":"myds-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide myds-grid"><!-- wp:group {"className":"myds-col-md-4 myds-col-lg-6","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-md-4 myds-col-lg-6"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Apply online', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Submit the form and the supporting documents in one session, from any device.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"myds-col-md-4 myds-col-lg-6","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-md-4 myds-col-lg-6"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Visit a counter', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Bring the original documents to any branch. No appointment is needed for renewals.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
