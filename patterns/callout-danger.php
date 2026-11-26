<?php
/**
 * Title: Callout: danger
 * Slug: myds-wp/callout-danger
 * Categories: myds
 * Description: A short danger message with an icon, a title and a description.
 * Keywords: alert, notice, callout
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"className":"is-style-callout-danger","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-callout-danger"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Error', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'We could not process your payment. Check your card details and try again.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
