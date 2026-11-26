<?php
/**
 * Title: Callout: warning
 * Slug: myds-wp/callout-warning
 * Categories: myds
 * Description: A short warning message with an icon, a title and a description.
 * Keywords: alert, notice, callout
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"className":"is-style-callout-warning","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-callout-warning"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Warning', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'This service will be unavailable on Saturday from 10pm to 2am.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
