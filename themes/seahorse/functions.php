<?php
/**
 * Seahorse functions and definitions
 */

if ( ! function_exists( 'seahorse_support' ) ) {

	// Sets up theme defaults and registers support for various WordPress features.
	function seahorse_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'seahorse_support' );

if ( ! function_exists( 'seahorse_styles' ) ) {
	// Enqueue styles.
	function seahorse_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'seahorse-style',
			get_template_directory_uri() . '/assets/css/theme.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Add styles inline.
		wp_add_inline_style( 'seahorse-style', seahorse_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'seahorse-style' );

	}
}
add_action( 'wp_enqueue_scripts', 'seahorse_styles' );

if ( ! function_exists( 'seahorse_editor_styles' ) ) {
	// Enqueue editor styles.
	function seahorse_editor_styles() {
		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', seahorse_get_font_face_styles() );

		add_editor_style(
			get_template_directory_uri() . '/assets/css/theme.min.css'
		);
	}
}
add_action( 'admin_init', 'seahorse_editor_styles' );

// Get font face styles.
if ( ! function_exists( 'seahorse_get_font_face_styles' ) ) {
	function seahorse_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Poppins';
			font-weight: 100;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Thin.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Poppins';
			font-weight: 200;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-ExtraLight.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Poppins';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Light.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Poppins';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Poppins';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Medium.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Poppins';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-SemiBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Poppins';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Bold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Poppins';
			font-weight: 800;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-ExtraBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Poppins';
			font-weight: 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Black.woff2' ) . "') format('woff2');
		}
		";
	}
}

// Add script to Editor
if ( ! function_exists( 'seahorse_admin_add_scripts' ) ) {
	add_action( 'admin_enqueue_scripts', 'seahorse_admin_add_scripts');
	function seahorse_admin_add_scripts(){
		
		wp_register_style( 'seahorse-settings-css',  get_template_directory_uri() . '/assets/css/admin.min.css' , '1.0.0' );
		wp_enqueue_style( 'seahorse-settings-css');
	
	}
}

// Add admin page content
get_template_part( 'inc/theme' );

// Add admin page
if ( ! function_exists( 'seahorse_create_menu' ) ) {
	add_action( 'admin_menu', 'seahorse_create_menu' );
	// Adds our dashboard menu item
	function seahorse_create_menu() {
		add_theme_page( 'Seahorse WordPress Theme', 'Seahorse', 'manage_options', 'seahorse', 'seahorse_admin_theme_page' );
	}
}