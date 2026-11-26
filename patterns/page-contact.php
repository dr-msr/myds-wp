<?php
/**
 * Title: Contact
 * Slug: myds-wp/page-contact
 * Categories: myds-pages
 * Description: Contact page: office address, call centre, counter hours table and other channels.
 * Keywords: contact, contact us, address, hours, phone, email, location
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"align":"wide","className":"myds-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide myds-grid"><!-- wp:group {"className":"myds-col-md-4 myds-col-lg-6","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-md-4 myds-col-lg-6"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Head office', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Level 1, Block A, Federal Government Administrative Centre, 62000 Putrajaya', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php esc_html_e( 'Open in maps', 'myds-wp' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"myds-col-md-4 myds-col-lg-6","layout":{"type":"default"}} -->
<div class="wp-block-group myds-col-md-4 myds-col-lg-6"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Call centre', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '03-8000 8000', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"txt-black-500","fontSize":"body-sm"} -->
<p class="has-txt-black-500-color has-text-color has-body-sm-font-size"><?php esc_html_e( 'Monday to Friday, 8am to 10pm', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Counter hours', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th><?php esc_html_e( 'Day', 'myds-wp' ); ?></th><th><?php esc_html_e( 'Hours', 'myds-wp' ); ?></th></tr></thead><tbody><tr><td><?php esc_html_e( 'Monday to Thursday', 'myds-wp' ); ?></td><td><?php esc_html_e( '8am to 5pm', 'myds-wp' ); ?></td></tr><tr><td><?php esc_html_e( 'Friday', 'myds-wp' ); ?></td><td><?php esc_html_e( '8am to 12.15pm, 2.45pm to 5pm', 'myds-wp' ); ?></td></tr><tr><td><?php esc_html_e( 'Saturday, Sunday and public holidays', 'myds-wp' ); ?></td><td><?php esc_html_e( 'Closed', 'myds-wp' ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Other ways to reach us', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'Email: enquiry@example.gov.my', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Feedback form: within two working days', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Social media: replies during office hours', 'myds-wp' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:pattern {"slug":"myds-wp/callout-info"} /-->
