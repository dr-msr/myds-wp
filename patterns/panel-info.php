<?php
/**
 * Title: Panel: info
 * Slug: myds-wp/panel-info
 * Categories: myds
 * Description: A info panel for the top of a confirmation or results page.
 * Keywords: panel, confirmation, result
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"className":"is-style-panel-info","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-panel-info"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Application received', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'We are reviewing your application.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Date submitted', 'myds-wp' ); ?><br><strong><?php esc_html_e( '12 March 2026', 'myds-wp' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
