<?php
/**
 * Mongoose functions and definitions
 */

if ( ! function_exists( 'mongoose_support' ) ) {

	// Sets up theme defaults and registers support for various WordPress features.
	function mongoose_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'mongoose_support' );

if ( ! function_exists( 'mongoose_styles' ) ) {
	// Enqueue styles.
	function mongoose_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'mongoose-style',
			get_template_directory_uri() . '/assets/css/theme.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Add styles inline.
		wp_add_inline_style( 'mongoose-style', mongoose_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'mongoose-style' );

	}
}
add_action( 'wp_enqueue_scripts', 'mongoose_styles' );

if ( ! function_exists( 'mongoose_editor_styles' ) ) {
	// Enqueue editor styles.
	function mongoose_editor_styles() {
		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', mongoose_get_font_face_styles() );

		add_editor_style(
			get_template_directory_uri() . '/assets/css/theme.min.css'
		);
	}
}
add_action( 'admin_init', 'mongoose_editor_styles' );

// Get font face styles.
if ( ! function_exists( 'mongoose_get_font_face_styles' ) ) {
	function mongoose_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Work Sans';
			font-weight: 100;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/WorkSans-Thin.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Work Sans';
			font-weight: 200;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/WorkSans-ExtraLight.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Work Sans';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/WorkSans-Light.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Work Sans';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/WorkSans-Regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Work Sans';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/WorkSans-Medium.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Work Sans';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/WorkSans-SemiBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Work Sans';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/WorkSans-Bold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Work Sans';
			font-weight: 800;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/WorkSans-ExtraBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Work Sans';
			font-weight: 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/WorkSans-Black.woff2' ) . "') format('woff2');
		}
		";
	}
}

// Add script to Editor
if ( ! function_exists( 'mongoose_admin_add_scripts' ) ) {
	add_action( 'admin_enqueue_scripts', 'mongoose_admin_add_scripts');
	function mongoose_admin_add_scripts(){
		
		wp_register_style( 'mongoose-settings-css',  get_template_directory_uri() . '/assets/css/admin.min.css' , '1.0.0' );
		wp_enqueue_style( 'mongoose-settings-css');
	
	}
}

// Add admin page content
get_template_part( 'inc/theme' );

// Add admin page
if ( ! function_exists( 'mongoose_create_menu' ) ) {
	add_action( 'admin_menu', 'mongoose_create_menu' );
	// Adds our dashboard menu item
	function mongoose_create_menu() {
		add_theme_page( 'Mongoose WordPress Theme', 'Mongoose', 'manage_options', 'mongoose', 'mongoose_admin_theme_page' );
	}
}