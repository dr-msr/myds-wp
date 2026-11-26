<?php
/**
 * Title: Government masthead
 * Slug: myds-wp/masthead
 * Categories: header, myds
 * Description: The "Official Malaysian Government Website" bar. For government sites only; place it above the header.
 * Keywords: masthead, government, official
 *
 * @package myds-wp
 */

?>
<!-- wp:html -->
<div class="myds-masthead" data-nosnippet><details><summary><svg class="myds-masthead__flag" viewBox="0 0 32 16" aria-hidden="true" focusable="false"><rect width="32" height="16" fill="#fff"/><g fill="#cc0001"><rect y="0.000" width="32" height="1.143"/><rect y="2.286" width="32" height="1.143"/><rect y="4.571" width="32" height="1.143"/><rect y="6.857" width="32" height="1.143"/><rect y="9.143" width="32" height="1.143"/><rect y="11.429" width="32" height="1.143"/><rect y="13.714" width="32" height="1.143"/></g><rect width="16" height="9.143" fill="#010066"/><path fill="#fc0" d="M8.2 1.6a3.4 3.4 0 1 0 0 5.94 3.05 3.05 0 1 1 0-5.94z"/><polygon fill="#fc0" points="10.60,2.07 10.83,3.55 11.68,2.32 11.25,3.75 12.55,3.01 11.55,4.11 13.04,4.01 11.65,4.57 13.04,5.13 11.55,5.03 12.55,6.13 11.25,5.39 11.68,6.82 10.83,5.59 10.60,7.07 10.37,5.59 9.52,6.82 9.95,5.39 8.65,6.13 9.65,5.03 8.16,5.13 9.55,4.57 8.16,4.01 9.65,4.11 8.65,3.01 9.95,3.75 9.52,2.32 10.37,3.55"/></svg><span class="myds-masthead__title"><?php esc_html_e( 'Official Malaysian Government Website', 'myds-wp' ); ?></span><span class="myds-masthead__trigger"><span class="myds-masthead__trigger-label"><?php esc_html_e( "Here's how you know", 'myds-wp' ); ?></span><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 7.5l5 5 5-5"/></svg></span></summary><div class="myds-masthead__content"><div class="myds-masthead__section"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M2.5 17.5h15M4.5 15V9.5M8.25 15V9.5M11.75 15V9.5M15.5 15V9.5M3 9.5h14l-7-4.75zM10 4.75V2.25"/></svg><div><p class="myds-masthead__section-title"><?php esc_html_e( 'Official government websites end with .gov.my', 'myds-wp' ); ?></p><p><?php echo wp_kses( __( 'If the link does not end with <b>.gov.my</b>, exit the website immediately even if it looks similar.', 'myds-wp' ), array( 'b' => array() ) ); ?></p></div></div><div class="myds-masthead__section"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="8.75" width="12" height="8.5" rx="2"/><path d="M6.75 8.75V6.5a3.25 3.25 0 0 1 6.5 0v2.25"/></svg><div><p class="myds-masthead__section-title"><?php esc_html_e( 'Secure websites use HTTPS', 'myds-wp' ); ?></p><p><?php
/* translators: %s: a small lock icon. */
printf( esc_html__( 'Look for a lock (%s) or https:// as an added precaution. If not present, do not share any sensitive information.', 'myds-wp' ), '<svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" focusable="false"><path fill-rule="evenodd" d="M6 8V6.5a4 4 0 0 1 8 0V8h.5A1.5 1.5 0 0 1 16 9.5v6a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 4 15.5v-6A1.5 1.5 0 0 1 5.5 8zm1.5 0h5V6.5a2.5 2.5 0 0 0-5 0z"/></svg>' ); ?></p></div></div></div></details></div>
<!-- /wp:html -->
