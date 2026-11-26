<?php
/**
 * Title: News
 * Slug: myds-wp/page-news
 * Categories: myds-pages
 * Description: News page: a short introduction followed by a three-column grid of the latest posts with pagination.
 * Keywords: news, press, media, announcements, updates, posts
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 *
 * @package myds-wp
 */

?>
<!-- wp:paragraph {"textColor":"txt-black-700","fontSize":"body-lg"} -->
<p class="has-txt-black-700-color has-text-color has-body-lg-font-size"><?php esc_html_e( 'Announcements, media statements and updates on our services.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|32"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"18rem"}} -->
<!-- wp:group {"className":"myds-post-card","layout":{"type":"default"}} -->
<div class="wp-block-group myds-post-card"><!-- wp:post-date /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":30} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|48"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
