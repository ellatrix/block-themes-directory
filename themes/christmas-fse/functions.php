<?php
/**
 * Christmas FSE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Christmas FSE
 */

if ( ! defined( 'christmas_fse_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'christmas_fse_VERSION', wp_get_theme()->get( 'Version' ) );
	
}

if ( ! function_exists( 'christmas_fse_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function christmas_fse_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Christmas FSE, use a find and replace
		 * to change 'christmas-fse' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'christmas-fse', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		// add_editor_style( 'style.css' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Register nav menus.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'christmas-fse' ),
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'christmas_fse_setup' );

/**
 * Theme default options.
 *
 * @return array
 */
function christmas_fse_default_options() {
	return array(
		'site_primary_color'     => '#ce9e51',
		'global_primary_font'    => 'Oswald',
	);
}

if ( ! function_exists( 'christmas_fse_fonts_url' ) ) :
	/**
	 * Register Google fonts for Christmas FSE
	 *
	 * Create your own christmas_fse_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function christmas_fse_fonts_url() {
		$fonts_url = '';

		/* Translators: If there are characters in your language that are not
		* supported by Poppins, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$font_families = array( 'Oswald:wght@200;300;400;500;600;700&display=swap' );

		if ( ! empty( $font_families ) ) {

			$query_args = array(
				'family' => implode( '&family=', $font_families ), 
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		if ( ! class_exists( 'WPTT_WebFont_Loader' ) ) {
			// Load Google fonts from Local.
			require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
		}

		return esc_url( wptt_get_webfont_url( $fonts_url ) );
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function christmas_fse_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );


	// FontAwesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );
	wp_enqueue_style( 'christmas-fse-animate', get_template_directory_uri() . '/css/animate.css', array(), filemtime( get_theme_file_path( '/css/animate.css' ) ), 'all' );
	wp_enqueue_style( 'christmas-fse-fonts', christmas_fse_fonts_url(), array(), null );

	$deps = array( 'font-awesome', 'christmas-fse-animate' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	wp_enqueue_style( 'christmas-fse-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	wp_style_add_data( 'christmas-fse-style', 'rtl', 'replace' );

	$deps = array( 'jquery' );
	wp_enqueue_script( 'christmas-fse-animate', get_template_directory_uri() . '/js/animate' . $min . '.js', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

	if ( file_exists( get_template_directory() . '/css/theme-style.css' ) ) {
		wp_enqueue_style( 'christmas-fse-theme-style', get_template_directory_uri() . '/css/theme-style.css',  array(), date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	}

}
add_action( 'wp_enqueue_scripts', 'christmas_fse_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function christmas_fse_admin_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array();

	// FontAwesome.
	wp_enqueue_style( 'christmas-fse-admin-style', get_stylesheet_directory_uri() . '/css/admin-style.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

}
add_action( 'admin_enqueue_scripts', 'christmas_fse_admin_scripts' );

function christmas_fse_block_assets() {
	$min = '';
	// FontAwesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );
}
add_action( 'enqueue_block_assets', 'christmas_fse_block_assets' );

/**
 *
 * Enqueue scripts and styles.
 */
function christmas_fse_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			christmas_fse_fonts_url(),
		)
	);
}
add_action( 'admin_init', 'christmas_fse_editor_styles' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';