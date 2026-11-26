<?php
/**
 * Title: Footer
 * Slug: myds-wp/footer
 * Categories: footer, myds
 * Block Types: core/template-part/footer
 * Keywords: footer, links, copyright, social
 * Description: Site information, link groups, copyright and legal links.
 *
 * @package myds-wp
 */

?>
<!-- wp:group {"align":"full","className":"myds-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull myds-footer"><!-- wp:group {"align":"wide","className":"myds-grid myds-footer__section","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide myds-grid myds-footer__section"><!-- wp:group {"className":"myds-footer__info myds-col-lg-4","layout":{"type":"default"}} -->
<div class="wp-block-group myds-footer__info myds-col-lg-4"><!-- wp:group {"className":"myds-footer__brand","layout":{"type":"default"}} -->
<div class="wp-block-group myds-footer__brand"><!-- wp:site-logo {"width":32,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:site-tagline /-->

<!-- wp:social-links {"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"myds-footer__group myds-col-md-4 myds-col-lg-2 myds-start-lg-9","layout":{"type":"default"}} -->
<div class="wp-block-group myds-footer__group myds-col-md-4 myds-col-lg-2 myds-start-lg-9"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'About us', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"myds-footer__links"} -->
<ul class="wp-block-list myds-footer__links"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Corporate information', 'myds-wp' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Directory', 'myds-wp' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Achievements', 'myds-wp' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Policy', 'myds-wp' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"myds-footer__group myds-col-md-4 myds-col-lg-2","layout":{"type":"default"}} -->
<div class="wp-block-group myds-footer__group myds-col-md-4 myds-col-lg-2"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Quick links', 'myds-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"myds-footer__links"} -->
<ul class="wp-block-list myds-footer__links"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Media', 'myds-wp' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Publications', 'myds-wp' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Careers', 'myds-wp' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Contact us', 'myds-wp' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"myds-footer__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide myds-footer__bottom"><!-- wp:group {"className":"myds-footer__legal","layout":{"type":"default"}} -->
<div class="wp-block-group myds-footer__legal"><!-- wp:paragraph -->
<p><?php
/* translators: %s: the current year. */
printf( esc_html__( 'All Rights Reserved © %s', 'myds-wp' ), esc_html( wp_date( 'Y' ) ) );
?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php esc_html_e( 'Disclaimer', 'myds-wp' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php esc_html_e( 'Privacy policy', 'myds-wp' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php
/* translators: %s: the date the site was last changed. */
printf( esc_html__( 'Last updated: %s', 'myds-wp' ), esc_html( wp_date( get_option( 'date_format' ), (int) strtotime( (string) get_lastpostmodified( 'gmt' ) . ' UTC' ) ?: time() ) ) );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
