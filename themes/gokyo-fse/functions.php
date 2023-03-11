<?php
/**
 * Gokyo Fse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gokyo Fse
 */

if ( ! defined( 'GOKYO_FSE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'GOKYO_FSE_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'gokyo_fse_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gokyo_fse_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Gokyo Fse, use a find and replace
		 * to change 'gokyo-fse' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gokyo-fse', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

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
	}
endif;
add_action( 'after_setup_theme', 'gokyo_fse_setup' );

if ( ! function_exists( 'gokyo_fse_fonts_url' ) ) :
	/**
	 * Register Google fonts for Gokyo Fse
	 *
	 * Create your own gokyo_fse_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function gokyo_fse_fonts_url() {
		$fonts_url = '';

		/* Translators: If there are characters in your language that are not
		* supported by Poppins, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$font_families = array( 'Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800', 'Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900' );

		if ( ! empty( $font_families  ) ) {

			$query_args = array(
				'family' => implode( '&family=', $font_families ), //urlencode( implode( '|', $font_families ) ),
				// 'subset' => urlencode( 'latin,latin-ext' ),
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		if ( ! class_exists( 'WPTT_WebFont_Loader' ) ) {
			// Load Google fonts from Local.
			require_once get_theme_file_path( 'inc/lib/wptt-webfont-loader.php' );
		}

		return esc_url( wptt_get_webfont_url( $fonts_url ) );
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function gokyo_fse_enqueue_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );



	// FontAwesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );
	wp_enqueue_style( 'gokyo-fse-fonts', gokyo_fse_fonts_url(), array(), null );

	$deps = array( 'font-awesome' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	wp_enqueue_style( 'gokyo-fse-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	wp_style_add_data( 'gokyo-fse-style', 'rtl', 'replace' );

	if ( file_exists( get_template_directory() . '/assets/css/custom-style.css' ) ) {
		wp_enqueue_style( 'gokyo-fse-theme-style', get_template_directory_uri() . '/assets/css/custom-style.css',  array(), date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	}
}
add_action( 'wp_enqueue_scripts', 'gokyo_fse_enqueue_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function gokyo_fse_admin_scripts( $hook_suffix ) {

	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// $min = '.min';

	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array();

	// FontAwesome.
	wp_enqueue_style( 'gokyo-fse-admin-style', get_stylesheet_directory_uri() . '/assets/css/admin-style.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

	$deps = array( 'wp-api-fetch' );
	$handle = 'gokyo-fse-admin';
	wp_enqueue_script( $handle, get_template_directory_uri() . '/assets/js/admin' . $min . '.js', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'assets/js/admin.js' ) ) ), true );

	wp_localize_script( $handle, 'gokyo_fse',
        array(
            'gokyo_fse_nonce' => wp_create_nonce( "gokyo_fse-nonce" ),
            'gokyo_fse_demo_import_page' => esc_url( admin_url( 'themes.php?page=olive-one-click-demo-import' ) ),
        )
    );
}
add_action( 'admin_enqueue_scripts', 'gokyo_fse_admin_scripts' );

function gokyo_fse_block_assets() {
	$min = '';
	// FontAwesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );
}
add_action( 'enqueue_block_assets', 'gokyo_fse_block_assets' );

/**
 *
 * Enqueue scripts and styles.
 */
function gokyo_fse_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			gokyo_fse_fonts_url(),
		)
	);
}
add_action( 'admin_init', 'gokyo_fse_editor_styles' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/init.php';
