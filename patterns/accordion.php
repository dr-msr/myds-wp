<?php
/**
 * Title: Accordion
 * Slug: myds-wp/accordion
 * Categories: myds
 * Description: Stacked questions that open one answer at a time.
 * Keywords: accordion, faq, collapse
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group"><!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Who can apply?', 'myds-wp' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p><?php esc_html_e( 'Any Malaysian citizen aged 18 and above can apply.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'How long does it take?', 'myds-wp' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p><?php esc_html_e( 'Most applications are processed within five working days.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'What documents do I need?', 'myds-wp' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p><?php esc_html_e( 'A copy of your identity card and proof of address.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->
