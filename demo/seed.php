<?php
/**
 * Seeds a demo site for the theme. Not part of the theme itself.
 * Run on a fresh WordPress: wp eval-file wp-content/themes/myds-wp/demo/seed.php
 * Safe to run again: it updates the pages and posts it created before and
 * removes duplicates of them.
 *
 * @package myds-wp
 */

$dir = __DIR__;

/**
 * Content of a registered pattern, so seeded pages are ordinary editable blocks.
 *
 * @param string $slug Pattern slug without the theme prefix.
 */
$pattern = function ( $slug ) {
	$file = get_theme_file_path( "patterns/$slug.php" );
	if ( ! file_exists( $file ) ) {
		WP_CLI::error( "Pattern file patterns/$slug.php not found." );
	}
	ob_start();
	include $file;
	return trim( ob_get_clean() );
};

$upsert = function ( $type, $slug, $title, $content, $extra = array() ) {
	$found = get_posts(
		array(
			'post_type'      => $type,
			'name'           => $slug,
			'post_status'    => 'any',
			'posts_per_page' => -1,
			'orderby'        => 'ID',
			'order'          => 'ASC',
		)
	);
	$data  = array_merge(
		array(
			'post_type'    => $type,
			'post_name'    => $slug,
			'post_title'   => $title,
			'post_content' => $content,
			'post_status'  => 'publish',
		),
		$extra
	);
	if ( $found ) {
		$data['ID'] = $found[0]->ID;
	}
	$id = wp_insert_post( wp_slash( $data ) );

	// Earlier seeds may have left copies with a numbered slug.
	foreach ( get_posts( array( 'post_type' => $type, 'post_status' => 'any', 'posts_per_page' => -1 ) ) as $other ) {
		if ( $other->ID !== $id && preg_match( '/^' . preg_quote( $slug, '/' ) . '-\d+$/', $other->post_name ) ) {
			wp_delete_post( $other->ID, true );
		}
	}
	return $id;
};

foreach ( array( 'hello-world', 'sample-page', 'privacy-policy' ) as $default_slug ) {
	foreach ( get_posts( array( 'name' => $default_slug, 'post_type' => array( 'post', 'page' ), 'post_status' => 'any' ) ) as $p ) {
		wp_delete_post( $p->ID, true );
	}
}

$phase = '<!-- wp:pattern {"slug":"myds-wp/phase-banner"} /-->';

$home       = $upsert( 'page', 'home', 'Home', $phase . "\n\n" . $pattern( 'page-agency-home' ), array( 'menu_order' => 0 ) );
$services   = $upsert( 'page', 'renew-a-licence', 'Renew a licence', $pattern( 'page-service' ), array( 'menu_order' => 1 ) );
$news       = $upsert( 'page', 'news', 'News', $pattern( 'page-news' ), array( 'menu_order' => 2 ) );
$blog       = $upsert( 'page', 'blog', 'Blog', $pattern( 'page-blog' ), array( 'menu_order' => 3 ) );
$portfolio  = $upsert( 'page', 'portfolio', 'Portfolio', $pattern( 'page-portfolio' ), array( 'menu_order' => 4 ) );
$about      = $upsert( 'page', 'about', 'About', $pattern( 'page-about' ), array( 'menu_order' => 5 ) );
$upsert( 'page', 'contact', 'Contact', $pattern( 'page-contact' ), array( 'menu_order' => 0, 'post_parent' => $about ) );
$upsert( 'page', 'faq', 'Frequently asked questions', $pattern( 'page-faq' ), array( 'menu_order' => 1, 'post_parent' => $about ) );
$upsert( 'page', 'organisation', 'Organisation home', $pattern( 'page-organisation-home' ), array( 'menu_order' => 2, 'post_parent' => $about ) );
$upsert( 'page', 'components', 'Components', file_get_contents( "$dir/components.html" ), array( 'menu_order' => 6 ) );

update_post_meta( $home, '_wp_page_template', '' );
update_post_meta( get_page_by_path( 'about/organisation' )->ID, '_wp_page_template', 'page-wide' );

// Settings: Malaysian defaults, read back after the seed.
update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $home );
update_option( 'page_for_posts', 0 );
update_option( 'posts_per_page', 6 );
update_option( 'blogname', 'Jabatan Contoh' );
update_option( 'blogdescription', 'Licences, permits and counter services' );
update_option( 'timezone_string', 'Asia/Kuala_Lumpur' );
update_option( 'gmt_offset', '' );
update_option( 'date_format', 'd/m/Y' );
update_option( 'time_format', 'g:i a' );
update_option( 'start_of_week', 1 );
update_option( 'WPLANG', '' );
update_option( 'default_comment_status', 'closed' );
update_option( 'default_ping_status', 'closed' );
update_option( 'default_pingback_flag', 0 );
update_option( 'users_can_register', 0 );
update_option( 'blog_public', 0 );

if ( ! get_option( 'site_icon' ) || ! get_post( (int) get_option( 'site_icon' ) ) ) {
	require_once ABSPATH . 'wp-admin/includes/image.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';
	$tmp = wp_tempnam( 'site-icon.png' );
	copy( "$dir/site-icon.png", $tmp );
	$icon = media_handle_sideload( array( 'name' => 'site-icon.png', 'tmp_name' => $tmp ), 0, 'Site icon' );
	if ( ! is_wp_error( $icon ) ) {
		update_option( 'site_icon', $icon );
	}
}

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
	$upsert(
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

foreach ( array( 'blogname', 'blogdescription', 'timezone_string', 'date_format', 'time_format', 'start_of_week', 'WPLANG', 'default_comment_status', 'default_ping_status', 'users_can_register', 'blog_public', 'site_icon', 'permalink_structure', 'show_on_front', 'page_on_front', 'admin_email' ) as $opt ) {
	echo $opt . '=' . wp_json_encode( get_option( $opt ) ) . "\n";
}
echo 'upload_max_filesize=' . ini_get( 'upload_max_filesize' ) . ' post_max_size=' . ini_get( 'post_max_size' ) . "\n";
echo "seeded\n";
