<?php
/**
 * Title: Panel: danger
 * Slug: myds-wp/panel-danger
 * Categories: myds
 * Description: A danger panel for the top of a confirmation or results page.
 * Keywords: panel, confirmation, result
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"className":"is-style-panel-danger","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-panel-danger"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Application rejected', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'The supporting documents could not be verified.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Error code', 'myds-wp' ); ?><br><strong><?php esc_html_e( 'E-1042', 'myds-wp' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
