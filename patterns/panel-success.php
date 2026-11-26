<?php
/**
 * Title: Panel: success
 * Slug: myds-wp/panel-success
 * Categories: myds
 * Description: A success panel for the top of a confirmation or results page.
 * Keywords: panel, confirmation, result
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"className":"is-style-panel-success","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-panel-success"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Application complete', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Keep this reference number for your records.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Reference number', 'myds-wp' ); ?><br><strong><?php esc_html_e( 'HDJ2123F', 'myds-wp' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
