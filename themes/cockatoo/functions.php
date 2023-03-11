<?php
/**
 * Cockatoo functions and definitions
 */

if ( ! function_exists( 'cockatoo_support' ) ) {

	// Sets up theme defaults and registers support for various WordPress features.
	function cockatoo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'cockatoo_support' );

if ( ! function_exists( 'cockatoo_styles' ) ) {
	// Enqueue styles.
	function cockatoo_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'cockatoo-style',
			get_template_directory_uri() . '/assets/css/theme.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Add styles inline.
		wp_add_inline_style( 'cockatoo-style', cockatoo_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'cockatoo-style' );

	}
}
add_action( 'wp_enqueue_scripts', 'cockatoo_styles' );

if ( ! function_exists( 'cockatoo_editor_styles' ) ) {
	// Enqueue editor styles.
	function cockatoo_editor_styles() {
		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', cockatoo_get_font_face_styles() );

		add_editor_style(
			get_template_directory_uri() . '/assets/css/theme.min.css'
		);
	}
}
add_action( 'admin_init', 'cockatoo_editor_styles' );

// Get font face styles.
if ( ! function_exists( 'cockatoo_get_font_face_styles' ) ) {
	function cockatoo_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Inter';
			font-weight: 100;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Inter-Thin.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Inter';
			font-weight: 200;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Inter-ExtraLight.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Inter';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Inter-Light.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Inter';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Inter-Regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Inter';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Inter-Medium.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Inter';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Inter-SemiBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Inter';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Inter-Bold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Inter';
			font-weight: 800;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Inter-ExtraBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Inter';
			font-weight: 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Inter-Black.woff2' ) . "') format('woff2');
		}
		";
	}
}

// Add script to Editor
if ( ! function_exists( 'cockatoo_admin_add_scripts' ) ) {
	add_action( 'admin_enqueue_scripts', 'cockatoo_admin_add_scripts');
	function cockatoo_admin_add_scripts(){
		
		wp_register_style( 'cockatoo-settings-css',  get_template_directory_uri() . '/assets/css/admin.min.css' , '1.0.0' );
		wp_enqueue_style( 'cockatoo-settings-css');
	
	}
}

// Add admin page content
get_template_part( 'inc/theme' );

// Add admin page
if ( ! function_exists( 'cockatoo_create_menu' ) ) {
	add_action( 'admin_menu', 'cockatoo_create_menu' );
	// Adds our dashboard menu item
	function cockatoo_create_menu() {
		add_theme_page( 'Cockatoo WordPress Theme', 'Cockatoo', 'manage_options', 'cockatoo', 'cockatoo_admin_theme_page' );
	}
}