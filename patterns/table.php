<?php
/**
 * Title: Table
 * Slug: myds-wp/table
 * Categories: myds
 * Description: A data table with a header row and a caption.
 * Keywords: table, data
 *
 * @package myds-wp
 */

?>
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th><?php esc_html_e( 'State', 'myds-wp' ); ?></th><th><?php esc_html_e( 'Population', 'myds-wp' ); ?></th><th><?php esc_html_e( 'Area (km²)', 'myds-wp' ); ?></th></tr></thead><tbody><tr><td>Kuala Lumpur</td><td>1,982,112</td><td>243</td></tr><tr><td>Selangor</td><td>7,205,600</td><td>7,951</td></tr><tr><td>Johor</td><td>4,100,900</td><td>19,166</td></tr><tr><td>Sabah</td><td>3,591,400</td><td>73,904</td></tr></tbody></table><figcaption class="wp-element-caption"><?php esc_html_e( 'Population and area by state', 'myds-wp' ); ?></figcaption></figure>
<!-- /wp:table -->
