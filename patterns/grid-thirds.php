<?php
/**
 * Title: Grid: three columns
 * Slug: myds-wp/grid-thirds
 * Categories: myds
 * Description: Three equal columns on desktop, stacked below.
 * Keywords: grid, columns, 12-8-4
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"align":"wide","className":"myds-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide myds-grid"><!-- wp:group {"className":"myds-col-lg-4","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-lg-4"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Apply', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Fill in one form. Details already held by the government are filled in for you.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"myds-col-lg-4","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-lg-4"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Pay', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Pay by FPX, card or e-wallet, and receive a receipt by email.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"myds-col-lg-4","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-lg-4"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Receive', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Download the licence as soon as the application is approved.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
