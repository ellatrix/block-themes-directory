<?php
/**
 * Albacore functions and definitions
 */

if ( ! function_exists( 'albacore_support' ) ) {

	// Sets up theme defaults and registers support for various WordPress features.
	function albacore_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'albacore_support' );

if ( ! function_exists( 'albacore_background_setup' ) ) {
	// Albacore background functions
	add_action( 'after_setup_theme', 'albacore_background_setup' );
	function albacore_background_setup() {
		add_theme_support( "custom-background",
			array(
				'default-color' 		 => 'ffffff',
				'default-image'          => get_template_directory_uri().'/assets/images/albacore-noise.gif',
				'default-repeat'         => 'repeat',
				'default-position-x'     => 'left',
				'default-position-y'     => 'top',
				'default-size'           => 'auto',
				'default-attachment'     => '',
			)
		);
	}
}

if ( ! function_exists( 'albacore_styles' ) ) {
	// Enqueue styles.
	function albacore_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'albacore-style',
			get_template_directory_uri() . '/assets/css/theme.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Add styles inline.
		wp_add_inline_style( 'albacore-style', albacore_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'albacore-style' );

	}
}
add_action( 'wp_enqueue_scripts', 'albacore_styles' );

if ( ! function_exists( 'albacore_editor_styles' ) ) {
	// Enqueue editor styles.
	function albacore_editor_styles() {
		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', albacore_get_font_face_styles() );
		wp_add_inline_style( 'wp-block-library', albacore_background_to_editor() );

		add_editor_style(
			get_template_directory_uri() . '/assets/css/theme.min.css'
		);
	}
}
add_action( 'admin_init', 'albacore_editor_styles' );

// Get background image in the editor.
if ( ! function_exists( 'albacore_background_to_editor' ) ) {
	function albacore_background_to_editor() {
		return ".editor-styles-wrapper {background-image: url(" . esc_url( get_theme_mod( 'background_image', get_theme_support( 'custom-background', 'default-image' ) ) ) . ")}";
	}
}

// Get font face styles.
if ( ! function_exists( 'albacore_get_font_face_styles' ) ) {
	function albacore_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Rubik Glitch';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/RubikGlitch-Regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Rubik';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Rubik-Light.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Rubik';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Rubik-Regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Rubik';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Rubik-Medium.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Rubik';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Rubik-SemiBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Rubik';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Rubik-Bold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Rubik';
			font-weight: 800;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Rubik-ExtraBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Rubik';
			font-weight: 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Rubik-Black.woff2' ) . "') format('woff2');
		}
		";
	}
}

// Enqueue footer credit scripts
if ( ! function_exists( 'albacore_register_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'albacore_register_scripts' );
	function albacore_register_scripts() {
		wp_enqueue_script(
			'albacore-credit',
			get_theme_file_uri( 'assets/js/credit.min.js', __FILE__ ),
			'',
			'1.0.0', 
			true
		);
	}
}

// Enqueue editor notice scripts
if ( ! function_exists( 'albacore_register_editor_scripts' ) ) {
	add_action( 'enqueue_block_editor_assets', 'albacore_register_editor_scripts' );
	function albacore_register_editor_scripts() {
		wp_enqueue_script(
			'albacore-editor-notice',
			get_theme_file_uri( 'assets/js/editor.min.js', __FILE__ ),
			'',
			'1.0.0', 
			true
		);
	}
}

// Add script to Editor
if ( ! function_exists( 'albacore_admin_add_scripts' ) ) {
	add_action( 'admin_enqueue_scripts', 'albacore_admin_add_scripts');
	function albacore_admin_add_scripts(){
		
		wp_register_style( 'albacore-settings-css',  get_template_directory_uri() . '/assets/css/admin.min.css' , '1.0.0' );
		wp_enqueue_style( 'albacore-settings-css');
	
	}
}

// Add admin page content
get_template_part( 'inc/theme' );

// Add admin page
if ( ! function_exists( 'albacore_create_menu' ) ) {
	add_action( 'admin_menu', 'albacore_create_menu' );
	// Adds our dashboard menu item
	function albacore_create_menu() {
		add_menu_page( 'Albacore WordPress Theme', 'Albacore', 'manage_options', 'albacore', 'albacore_admin_theme_page', '', 58 );
	}
}