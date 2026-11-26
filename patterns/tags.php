<?php
/**
 * Title: Tags and pill
 * Slug: myds-wp/tags
 * Categories: myds
 * Description: Status tags in each colour, and a pill.
 * Keywords: tag, pill, status, badge
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-tag"} -->
<p class="is-style-tag"><?php esc_html_e( 'Draft', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-tag-primary"} -->
<p class="is-style-tag-primary"><?php esc_html_e( 'In review', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-tag-success"} -->
<p class="is-style-tag-success"><?php esc_html_e( 'Approved', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-tag-warning"} -->
<p class="is-style-tag-warning"><?php esc_html_e( 'Pending', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-tag-danger"} -->
<p class="is-style-tag-danger"><?php esc_html_e( 'Rejected', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-pill"} -->
<p class="is-style-pill"><?php esc_html_e( 'Kuala Lumpur', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
