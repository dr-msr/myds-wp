<?php
/**
 * Seeds a demo site for the theme. Not part of the theme itself.
 * Run on a fresh WordPress: wp eval-file wp-content/themes/myds-wp/demo/seed.php
 * Safe to run again: it updates the pages and posts it created before.
 *
 * @package myds-wp
 */

$dir = __DIR__;

$upsert = function ( $type, $slug, $title, $content, $extra = array() ) {
	$existing = get_page_by_path( $slug, OBJECT, $type );
	$data     = array_merge(
		array(
			'post_type'    => $type,
			'post_name'    => $slug,
			'post_title'   => $title,
			'post_content' => $content,
			'post_status'  => 'publish',
		),
		$extra
	);
	if ( $existing ) {
		$data['ID'] = $existing->ID;
	}
	return wp_insert_post( wp_slash( $data ) );
};

foreach ( array( 1, 2, 3 ) as $default_id ) {
	$p = get_post( $default_id );
	if ( $p && in_array( $p->post_name, array( 'hello-world', 'sample-page', 'privacy-policy' ), true ) ) {
		wp_delete_post( $default_id, true );
	}
}

$home       = $upsert( 'page', 'home', 'Home', file_get_contents( "$dir/home.html" ), array( 'menu_order' => 0 ) );
$components = $upsert( 'page', 'components', 'Components', file_get_contents( "$dir/components.html" ), array( 'menu_order' => 1 ) );
$news       = $upsert( 'page', 'news', 'News', '', array( 'menu_order' => 2 ) );
$about      = $upsert( 'page', 'about', 'About', "<!-- wp:paragraph -->\n<p>This site demonstrates MYDS WP, a WordPress block theme that implements the Malaysia Government Design System. It is an independent community project.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Pages like this one use the article width: text runs to 640px, the measure MYDS sets for comfortable reading.</p>\n<!-- /wp:paragraph -->", array( 'menu_order' => 3 ) );
$upsert( 'page', 'contact', 'Contact', "<!-- wp:paragraph -->\n<p>Counter hours are 8am to 5pm, Monday to Friday.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:pattern {\"slug\":\"myds-wp/callout-info\"} /-->", array( 'menu_order' => 0, 'post_parent' => $about ) );

update_post_meta( $home, '_wp_page_template', 'page-wide' );
update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $home );
update_option( 'page_for_posts', $news );
update_option( 'posts_per_page', 6 );
update_option( 'blogname', 'Jabatan Contoh' );
update_option( 'blogdescription', '' );
update_option( 'date_format', 'j F Y' );
global $wp_rewrite;
$wp_rewrite->set_permalink_structure( '/%postname%/' );
foreach ( get_users( array( 'role' => 'administrator', 'fields' => 'ID' ) ) as $admin_id ) {
	update_user_meta( $admin_id, 'show_admin_bar_front', 'false' );
}

$cats = array();
foreach ( array( 'Announcements', 'Services', 'Guides' ) as $name ) {
	$term          = term_exists( $name, 'category' );
	$term          = $term ? $term : wp_insert_term( $name, 'category' );
	$cats[ $name ] = (int) $term['term_id'];
}

$article = file_get_contents( "$dir/article.html" );
$posts   = array(
	array( 'licence-renewal-moves-online', 'Licence renewal moves online', 'Services', $article, 'The licensing portal now lets a business renew, pay and download its licence in a single visit.' ),
	array( 'counter-hours-during-ramadan', 'Counter hours during Ramadan', 'Announcements', '', 'Counters open from 8am to 4pm on weekdays throughout Ramadan. Online services are not affected.' ),
	array( 'how-to-check-an-application', 'How to check an application', 'Guides', '', 'Enter the reference number from your acknowledgement slip to see each step your application has passed.' ),
	array( 'new-branch-opens-in-kuantan', 'New branch opens in Kuantan', 'Announcements', '', 'The Kuantan branch opens on 2 March with six counters and a self-service kiosk.' ),
	array( 'paying-fees-by-e-wallet', 'Paying fees by e-wallet', 'Services', '', 'Fees for renewals and new applications can now be paid with the major e-wallets as well as FPX and cards.' ),
	array( 'documents-you-no-longer-need', 'Documents you no longer need', 'Guides', '', 'Photocopies of your identity card and business registration are no longer required for renewals.' ),
	array( 'scheduled-maintenance-in-april', 'Scheduled maintenance in April', 'Announcements', '', 'The portal will be unavailable from 10pm on 11 April to 2am on 12 April for a database upgrade.' ),
	array( 'annual-report-published', 'Annual report published', 'Announcements', '', 'The annual report covers applications received, processing times and complaints resolved.' ),
);

$day = 0;
foreach ( $posts as $row ) {
	list( $slug, $title, $cat, $content, $excerpt ) = $row;
	if ( '' === $content ) {
		$content = "<!-- wp:paragraph -->\n<p>$excerpt</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For help, visit any branch during counter hours or use the contact form.</p>\n<!-- /wp:paragraph -->";
	}
	$id = $upsert(
		'post',
		$slug,
		$title,
		$content,
		array(
			'post_excerpt'  => $excerpt,
			'post_category' => array( $cats[ $cat ] ),
			'tags_input'    => array( 'licensing', 'online services' ),
			'post_date'     => gmdate( 'Y-m-d 09:00:00', strtotime( "2026-03-20 -$day days" ) ),
		)
	);
	$day += 6;
}

$wp_rewrite->flush_rules( false );
echo "seeded\n";
