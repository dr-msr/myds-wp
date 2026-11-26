<?php
/**
 * MYDS WP: a block theme that implements the Malaysia Government Design System.
 *
 * @package myds-wp
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Version string for an asset: the file's modification time, so a deploy busts caches.
 *
 * @param string $path Path relative to the theme root.
 */
function myds_wp_asset_version( $path ) {
	$file = get_theme_file_path( $path );
	return file_exists( $file ) ? (string) filemtime( $file ) : wp_get_theme()->get( 'Version' );
}

/**
 * Editor canvas loads the same two stylesheets as the front end.
 */
add_action(
	'after_setup_theme',
	function () {
		add_editor_style( array( 'assets/css/tokens.css', 'assets/css/myds.css' ) );
	}
);

/**
 * Front end styles.
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style( 'myds-wp-tokens', get_theme_file_uri( 'assets/css/tokens.css' ), array(), myds_wp_asset_version( 'assets/css/tokens.css' ) );
		wp_enqueue_style( 'myds-wp', get_theme_file_uri( 'assets/css/myds.css' ), array( 'myds-wp-tokens' ), myds_wp_asset_version( 'assets/css/myds.css' ) );
	}
);

/**
 * The palette values are var(--myds-*) references, so the editor's own screen
 * (colour swatches live outside the canvas) needs the token definitions too.
 */
add_action(
	'enqueue_block_editor_assets',
	function () {
		wp_enqueue_style( 'myds-wp-tokens', get_theme_file_uri( 'assets/css/tokens.css' ), array(), myds_wp_asset_version( 'assets/css/tokens.css' ) );
	}
);

/**
 * Light and dark.
 *
 * A visitor who has used the switch keeps that choice (localStorage "myds-theme").
 * A visitor who has not follows the device setting, live. The class on <html> is
 * "dark" or "light", the same convention MYDS uses. Printed first in <head> so the
 * page never flashes the wrong mode. Any element with class "myds-theme-switch"
 * toggles it.
 */
add_action(
	'wp_head',
	function () {
		wp_print_inline_script_tag(
			"(function(){var k='myds-theme',h=document.documentElement,q=window.matchMedia?window.matchMedia('(prefers-color-scheme: dark)'):null;" .
			"function stored(){try{var v=localStorage.getItem(k);return v==='dark'||v==='light'?v:null}catch(e){return null}}" .
			"function apply(){var s=stored(),dark=s?s==='dark':!!(q&&q.matches);h.classList.toggle('dark',dark);h.classList.toggle('light',!dark);" .
			"var b=document.querySelectorAll('.myds-theme-switch');for(var i=0;i<b.length;i++){b[i].setAttribute('aria-pressed',dark?'true':'false')}}" .
			"apply();" .
			"if(q){q.addEventListener?q.addEventListener('change',apply):q.addListener(apply)}" .
			"document.addEventListener('DOMContentLoaded',apply);" .
			"window.addEventListener('storage',apply);" .
			"document.addEventListener('click',function(e){var b=e.target.closest?e.target.closest('.myds-theme-switch'):null;if(!b){return}" .
			"var next=h.classList.contains('dark')?'light':'dark';try{localStorage.setItem(k,next)}catch(x){h.classList.toggle('dark',next==='dark');h.classList.toggle('light',next!=='dark')}apply()})})();",
			array( 'id' => 'myds-wp-theme-mode' )
		);
	},
	0
);

/**
 * Block styles for the MYDS components that map to core blocks.
 * The CSS for all of them is in assets/css/myds.css.
 */
add_action(
	'init',
	function () {
		$styles = array(
			'core/button'    => array(
				'primary-ghost'   => __( 'Primary ghost', 'myds-wp' ),
				'default-outline' => __( 'Default outline', 'myds-wp' ),
				'default-ghost'   => __( 'Default ghost', 'myds-wp' ),
				'danger-fill'     => __( 'Danger fill', 'myds-wp' ),
				'danger-outline'  => __( 'Danger outline', 'myds-wp' ),
				'danger-ghost'    => __( 'Danger ghost', 'myds-wp' ),
			),
			'core/group'     => array(
				'callout-info'    => __( 'Callout info', 'myds-wp' ),
				'callout-success' => __( 'Callout success', 'myds-wp' ),
				'callout-warning' => __( 'Callout warning', 'myds-wp' ),
				'callout-danger'  => __( 'Callout danger', 'myds-wp' ),
				'panel-info'      => __( 'Panel info', 'myds-wp' ),
				'panel-success'   => __( 'Panel success', 'myds-wp' ),
				'panel-warning'   => __( 'Panel warning', 'myds-wp' ),
				'panel-danger'    => __( 'Panel danger', 'myds-wp' ),
			),
			'core/paragraph' => array(
				'tag'         => __( 'Tag', 'myds-wp' ),
				'tag-primary' => __( 'Tag primary', 'myds-wp' ),
				'tag-success' => __( 'Tag success', 'myds-wp' ),
				'tag-warning' => __( 'Tag warning', 'myds-wp' ),
				'tag-danger'  => __( 'Tag danger', 'myds-wp' ),
				'pill'        => __( 'Pill', 'myds-wp' ),
			),
			'core/details'   => array(
				'details' => __( 'Details', 'myds-wp' ),
			),
		);

		foreach ( $styles as $block => $block_styles ) {
			foreach ( $block_styles as $name => $label ) {
				register_block_style(
					$block,
					array(
						'name'  => $name,
						'label' => $label,
					)
				);
			}
		}

		register_block_pattern_category(
			'myds',
			array(
				'label'       => __( 'MYDS', 'myds-wp' ),
				'description' => __( 'Components of the Malaysia Government Design System.', 'myds-wp' ),
			)
		);
	}
);
