<?php

define( 'SAMPLER_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'SAMPLER_THEME_NAME', wp_get_theme()->get( 'Name' ) );
define( 'SAMPLER_TEMPLATE_DIR', get_template_directory() );
define( 'SAMPLER_TEMPLATE_DIR_URI', get_template_directory_uri() );

if ( ! function_exists( 'sampler_support' ) ) {
	function sampler_support()  {

		// Make theme available for translation.
		load_theme_textdomain( 'sampler', SAMPLER_TEMPLATE_DIR . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

	}
}
add_action( 'after_setup_theme', 'sampler_support' );


/**
 * Enqueue scripts and styles.
 */
function sampler_scripts_styles() {

	wp_enqueue_style( 'sampler-fonts', sampler_google_fonts(), array(), null );
	wp_enqueue_style( 'sampler-style', SAMPLER_TEMPLATE_DIR_URI . '/style.css', array(), SAMPLER_VERSION );

}
add_action( 'wp_enqueue_scripts', 'sampler_scripts_styles' );


/**
 * Enqueue editor styles.
 */
function sampler_editor_styles() {

	add_editor_style( array( 'style.css', sampler_google_fonts() ) );

}
add_action( 'admin_init', 'sampler_editor_styles' );


/**
 * Block patterns.
 */
require SAMPLER_TEMPLATE_DIR . '/inc/patterns.php';


/**
 * Block styles.
 */
require SAMPLER_TEMPLATE_DIR . '/inc/styles.php';


/**
 * Google fonts.
 */
function sampler_google_fonts() {

	if ( !class_exists( 'WP_Theme_JSON_Resolver' ) ) {
		return '';
	}

	$global_styles = WP_Theme_JSON_Resolver::get_merged_data()->get_settings();

	if ( empty( $global_styles['typography']['fontFamilies'] ) ) {
		return '';
	}

	$theme_fonts = ! empty( $global_styles['typography']['fontFamilies']['theme'] ) ? $global_styles['typography']['fontFamilies']['theme'] : array();

	$user_fonts = ! empty( $global_styles['typography']['fontFamilies']['user'] ) ? $global_styles['typography']['fontFamilies']['user'] : array();

	$fonts = array_merge( $theme_fonts, $user_fonts );

	if ( !$fonts ) {
		return '';
	}

	$font_vars = array();

	foreach ( $fonts as $font ) {
		if ( !empty( $font['google'] ) ) {
			$font_vars[] = $font['google'];
		}
	}

	if ( !$font_vars ) {
		return '';
	}

	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', $font_vars ) . '&display=swap' );

}


/**
 * Filter allowed CSS to allow min() property.
 * See core ticket: https://core.trac.wordpress.org/ticket/55966
 */
function sampler_safe_css( $allow_css ) {

	$allow_css = 1;
	return $allow_css;

}
add_filter( 'safecss_filter_attr_allow_css', 'sampler_safe_css' );
