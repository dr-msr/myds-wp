<?php
/**
 * Title: Panel: warning
 * Slug: myds-wp/panel-warning
 * Categories: myds
 * Description: A warning panel for the top of a confirmation or results page.
 * Keywords: panel, confirmation, result
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"className":"is-style-panel-warning","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-panel-warning"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Action needed', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Upload the missing documents to continue.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Respond before', 'myds-wp' ); ?><br><strong><?php esc_html_e( '30 April 2026', 'myds-wp' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
