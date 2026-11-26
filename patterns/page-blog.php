<?php
/**
 * Title: Blog
 * Slug: myds-wp/page-blog
 * Categories: myds-pages
 * Description: Blog page: a single-column list of posts with date, title and excerpt, and pagination.
 * Keywords: blog, articles, posts, writing, journal
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 *
 * @package myds-wp
 */

?>
<!-- wp:paragraph {"textColor":"txt-black-700","fontSize":"body-lg"} -->
<p class="has-txt-black-700-color has-text-color has-body-lg-font-size"><?php esc_html_e( 'Notes from the team on how we design and run our services.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"myds-post-list","layout":{"type":"default"}} -->
<div class="wp-block-group myds-post-list"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|24"}},"layout":{"type":"default"}} -->
<!-- wp:group {"className":"myds-post-card","layout":{"type":"default"}} -->
<div class="wp-block-group myds-post-card"><!-- wp:post-date /-->

<!-- wp:post-title {"level":2,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":30} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|48"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
