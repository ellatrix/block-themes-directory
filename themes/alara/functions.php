<?php

define( 'ALARA_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'ALARA_THEME_NAME', wp_get_theme()->get( 'Name' ) );
define( 'ALARA_THEME_URI', wp_get_theme()->get( 'ThemeURI' ) );
define( 'ALARA_TEMPLATE_DIR', get_template_directory() );
define( 'ALARA_TEMPLATE_DIR_URI', get_template_directory_uri() );

if ( ! function_exists( 'alara_support' ) ) {
	function alara_support()  {

		// Make theme available for translation.
		load_theme_textdomain( 'alara', ALARA_TEMPLATE_DIR . '/languages' );

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
add_action( 'after_setup_theme', 'alara_support' );


/**
 * Enqueue scripts and styles.
 */
function alara_scripts_styles() {

	wp_enqueue_style( 'alara-fonts', alara_google_fonts(), array(), null );
	wp_enqueue_style( 'alara-style', ALARA_TEMPLATE_DIR_URI . '/style.css', array(), ALARA_VERSION );

}
add_action( 'wp_enqueue_scripts', 'alara_scripts_styles' );


/**
 * Enqueue editor styles.
 */
function alara_editor_styles() {

	add_editor_style( array( 'style.css', alara_google_fonts() ) );

}
add_action( 'admin_init', 'alara_editor_styles' );


/**
 * Block patterns.
 */
require ALARA_TEMPLATE_DIR . '/inc/patterns.php';


/**
 * Block styles.
 */
require ALARA_TEMPLATE_DIR . '/inc/styles.php';


/**
 * Google fonts.
 */
function alara_google_fonts() {

	/**
	 * Note: although Alara requires 5.9, child themes could still be 5.8 with Gutenberg
	 */
	if ( version_compare( get_bloginfo( 'version' ), '5.9', '<' ) ) {
		$resolver_class = 'WP_Theme_JSON_Resolver_Gutenberg';
	} else {
		$resolver_class = 'WP_Theme_JSON_Resolver';
	}

	if ( !class_exists( $resolver_class ) ) {
		return '';
	}

	$global_styles = $resolver_class::get_merged_data()->get_settings();

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
 * Filter allowed CSS to allow min() and max() properties.
 * See core ticket: https://core.trac.wordpress.org/ticket/55966
 */
function alara_safe_css( $allow_css ) {

	$allow_css = 1;
	return $allow_css;

}
add_filter( 'safecss_filter_attr_allow_css', 'alara_safe_css' );
