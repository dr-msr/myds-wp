<?php
/**
 * Title: Frequently asked questions
 * Slug: myds-wp/page-faq
 * Categories: myds-pages
 * Description: FAQ page: questions grouped under headings, each answer in an accordion item.
 * Keywords: faq, questions, help, answers, support
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 *
 * @package myds-wp
 */

?>
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Applications', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Who can apply?', 'myds-wp' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Any business registered in Malaysia, through its owner, a partner or an appointed representative.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'How long does it take?', 'myds-wp' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Most applications are decided within five working days.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'How do I check the status?', 'myds-wp' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Enter the reference number from your acknowledgement on the status page.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Payment', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Which payment methods are accepted?', 'myds-wp' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'FPX, debit and credit cards, and the major e-wallets.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Can I get a refund?', 'myds-wp' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Fees are refunded in full if an application is rejected.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Accounts', 'myds-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'I forgot my password', 'myds-wp' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Use the reset link on the sign-in page. The link expires after 30 minutes.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Can more than one person manage a business?', 'myds-wp' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Yes. The owner can add representatives from the account page.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->
