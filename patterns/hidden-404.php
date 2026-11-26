<?php
/**
 * Title: Page not found
 * Slug: myds-wp/hidden-404
 * Categories: myds
 * Description: Heading, message and search form for the 404 template.
 * Keywords: 404, not found, error
 * Inserter: no
 *
 * @package myds-wp
 */

?>
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Page not found', 'myds-wp' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'The page may have been moved or removed. Check the address, or search for it.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'myds-wp' ); ?>","showLabel":false,"buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'myds-wp' ); ?>"} /-->
