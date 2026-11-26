<?php
/**
 * Title: Service
 * Slug: myds-wp/page-service
 * Categories: myds-pages
 * Description: Service page: summary, start button, eligibility, documents, steps, a fees table, a notice and questions.
 * Keywords: service, apply, application, how to, eligibility, fees, guide
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 *
 * @package myds-wp
 */

?>
<!-- wp:paragraph {"textColor":"txt-black-700","fontSize":"body-lg"} -->
<p class="has-txt-black-700-color has-text-color has-body-lg-font-size"><?php esc_html_e( 'Renew a business licence online and download the new licence as soon as payment is confirmed.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"body-lg"} -->
<div class="wp-block-button has-custom-font-size has-body-lg-font-size"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Start renewal', 'myds-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Who can apply', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'Businesses registered in Malaysia', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Licences that expire within 90 days, or expired less than 30 days ago', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Applicants who are the owner, a partner or an appointed representative', 'myds-wp' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'What you need', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'Business registration number', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'The current licence number', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'A debit card, credit card, FPX or e-wallet for the fee', 'myds-wp' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'How it works', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'Sign in and enter the business registration number.', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Check the details already on record and update what has changed.', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Pay the fee.', 'myds-wp' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Download the new licence.', 'myds-wp' ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Fees', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th><?php esc_html_e( 'Licence', 'myds-wp' ); ?></th><th><?php esc_html_e( 'Period', 'myds-wp' ); ?></th><th><?php esc_html_e( 'Fee (RM)', 'myds-wp' ); ?></th></tr></thead><tbody><tr><td><?php esc_html_e( 'Business premises', 'myds-wp' ); ?></td><td><?php esc_html_e( '1 year', 'myds-wp' ); ?></td><td><?php esc_html_e( '100.00', 'myds-wp' ); ?></td></tr><tr><td><?php esc_html_e( 'Business premises', 'myds-wp' ); ?></td><td><?php esc_html_e( '3 years', 'myds-wp' ); ?></td><td><?php esc_html_e( '270.00', 'myds-wp' ); ?></td></tr><tr><td><?php esc_html_e( 'Signboard', 'myds-wp' ); ?></td><td><?php esc_html_e( '1 year', 'myds-wp' ); ?></td><td><?php esc_html_e( '50.00', 'myds-wp' ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:pattern {"slug":"myds-wp/callout-info"} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Questions', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'How long does it take?', 'myds-wp' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Most renewals are approved within one working day.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Can I renew an expired licence?', 'myds-wp' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Yes, within 30 days of expiry. After that, book a counter visit.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Do I need to print the licence?', 'myds-wp' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'No. Officers can scan the QR code on the digital licence.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->
