<?php
/**
 * Title: Details
 * Slug: myds-wp/details
 * Categories: myds
 * Description: Extra information a user can open without leaving the page.
 * Keywords: details, disclosure, more information
 *
 * @package myds-wp
 */

?>
<!-- wp:details {"className":"is-style-details"} -->
<details class="wp-block-details is-style-details"><summary><?php esc_html_e( 'Why we ask for your identity card number', 'myds-wp' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p><?php esc_html_e( 'We use it to check your details against the national registry. It is not shared with anyone else.', 'myds-wp' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
