<?php
/**
 * Serval functions and definitions
 */

if ( ! function_exists( 'serval_support' ) ) {

	// Sets up theme defaults and registers support for various WordPress features.
	function serval_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'serval_support' );

if ( ! function_exists( 'serval_styles' ) ) {
	// Enqueue styles.
	function serval_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'serval-style',
			get_template_directory_uri() . '/assets/css/theme.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Add styles inline.
		wp_add_inline_style( 'serval-style', serval_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'serval-style' );

	}
}
add_action( 'wp_enqueue_scripts', 'serval_styles' );

if ( ! function_exists( 'serval_editor_styles' ) ) {
	// Enqueue editor styles.
	function serval_editor_styles() {
		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', serval_get_font_face_styles() );

		add_editor_style(
			get_template_directory_uri() . '/assets/css/theme.min.css'
		);
	}
}
add_action( 'admin_init', 'serval_editor_styles' );

// Get font face styles.
if ( ! function_exists( 'serval_get_font_face_styles' ) ) {
	function serval_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Quicksand';
			font-weight: 100;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Quicksand-Light.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Quicksand';
			font-weight: 200;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Quicksand-Light.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Quicksand';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Quicksand-Light.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Quicksand';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Quicksand-Regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Quicksand';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Quicksand-Medium.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Quicksand';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Quicksand-SemiBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Quicksand';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Quicksand-Bold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Quicksand';
			font-weight: 800;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Quicksand-Bold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Quicksand';
			font-weight: 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Quicksand-Bold.woff2' ) . "') format('woff2');
		}
		";
	}
}

// Add script to Editor
if ( ! function_exists( 'serval_admin_add_scripts' ) ) {
	function serval_admin_add_scripts( $hook ){
		if ( 'appearance_page_serval' != $hook ) {
			return;
		}
		
		wp_register_style( 'serval-settings-css',  get_template_directory_uri() . '/assets/css/admin.min.css' , '1.0.0' );
		wp_enqueue_style( 'serval-settings-css');
	
	}
}
add_action( 'admin_enqueue_scripts', 'serval_admin_add_scripts');

// Add admin page content
get_template_part( 'inc/theme' );

// Add admin page
if ( ! function_exists( 'serval_create_menu' ) ) {
	add_action( 'admin_menu', 'serval_create_menu' );
	// Adds our dashboard menu item
	function serval_create_menu() {
		add_theme_page( 'Serval WordPress Theme', 'Serval', 'edit_theme_options', 'serval', 'serval_admin_theme_page' );
	}
}