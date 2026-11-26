<?php
/**
 * Title: About
 * Slug: myds-wp/page-about
 * Categories: myds-pages
 * Description: About page: introduction, vision and mission, functions, leadership table and a link to the organisation chart.
 * Keywords: about, about us, organisation, vision, mission, leadership, profile
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 *
 * @package myds-wp
 */

?>
<!-- wp:paragraph {"textColor":"txt-black-700","fontSize":"body-lg"} -->
<p class="has-txt-black-700-color has-text-color has-body-lg-font-size"><?php esc_html_e( 'We license and support businesses across the country, so that starting and running one takes less time and fewer visits.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","className":"myds-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide myds-grid"><!-- wp:group {"className":"myds-col-md-4 myds-col-lg-6","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-md-4 myds-col-lg-6"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Vision', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Every business service available online, end to end.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"myds-col-md-4 myds-col-lg-6","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-md-4 myds-col-lg-6"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Mission', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Design services around the people who use them, and measure whether they work.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'What we do', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'Issue and renew business licences', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Inspect premises and advise on compliance', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Publish statistics on applications and processing times', 'myds-wp' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Leadership', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th><?php esc_html_e( 'Position', 'myds-wp' ); ?></th><th><?php esc_html_e( 'Responsibility', 'myds-wp' ); ?></th></tr></thead><tbody><tr><td><?php esc_html_e( 'Director General', 'myds-wp' ); ?></td><td><?php esc_html_e( 'Head of department', 'myds-wp' ); ?></td></tr><tr><td><?php esc_html_e( 'Deputy Director General (Services)', 'myds-wp' ); ?></td><td><?php esc_html_e( 'Licensing and counters', 'myds-wp' ); ?></td></tr><tr><td><?php esc_html_e( 'Deputy Director General (Policy)', 'myds-wp' ); ?></td><td><?php esc_html_e( 'Policy and compliance', 'myds-wp' ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Organisation chart', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="#"><?php esc_html_e( 'Download the organisation chart (PDF)', 'myds-wp' ); ?></a></p>
<!-- /wp:paragraph -->
