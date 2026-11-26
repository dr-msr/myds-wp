<?php
/**
 * Title: Callout: success
 * Slug: myds-wp/callout-success
 * Categories: myds
 * Description: A short success message with an icon, a title and a description.
 * Keywords: alert, notice, callout
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"className":"is-style-callout-success","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-callout-success"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Success', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Your application has been submitted.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
