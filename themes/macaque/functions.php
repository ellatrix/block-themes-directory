<?php
/**
 * Macaque functions and definitions
 */

if ( ! function_exists( 'macaque_support' ) ) {

	// Sets up theme defaults and registers support for various WordPress features.
	function macaque_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'macaque_support' );

if ( ! function_exists( 'macaque_styles' ) ) {
	// Enqueue styles.
	function macaque_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'macaque-style',
			get_template_directory_uri() . '/assets/css/theme.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Add styles inline.
		wp_add_inline_style( 'macaque-style', macaque_get_font_face_styles() );
		wp_add_inline_style( 'macaque-style', macaque_background_noise_image() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'macaque-style' );

	}
}
add_action( 'wp_enqueue_scripts', 'macaque_styles' );

if ( ! function_exists( 'macaque_editor_styles' ) ) {
	// Enqueue editor styles.
	function macaque_editor_styles() {
		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', macaque_get_font_face_styles() );

		add_editor_style(
			get_template_directory_uri() . '/assets/css/theme.min.css'
		);
	}
}
add_action( 'admin_init', 'macaque_editor_styles' );

// Get font face styles.
if ( ! function_exists( 'macaque_get_font_face_styles' ) ) {
	function macaque_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Encode Sans';
			font-weight: 100;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/EncodeSans-Thin.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Encode Sans';
			font-weight: 200;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/EncodeSans-ExtraLight.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Encode Sans';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/EncodeSans-Light.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Encode Sans';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/EncodeSans-Regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Encode Sans';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/EncodeSans-Medium.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Encode Sans';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/EncodeSans-SemiBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Encode Sans';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/EncodeSans-Bold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Encode Sans';
			font-weight: 800;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/EncodeSans-ExtraBold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Encode Sans';
			font-weight: 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/EncodeSans-Black.woff2' ) . "') format('woff2');
		}
		";
	}
}

// Enqueue macaque scripts
if ( ! function_exists( 'macaque_register_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'macaque_register_scripts' );
	function macaque_register_scripts() {
		wp_enqueue_script(
			'macaque-noise',
			get_theme_file_uri( 'assets/js/noise.min.js', __FILE__ ),
			'',
			'1.0.0', 
			true
		);
	}
}

// Add script to Editor
if ( ! function_exists( 'macaque_admin_add_scripts' ) ) {
	add_action( 'admin_enqueue_scripts', 'macaque_admin_add_scripts');
	function macaque_admin_add_scripts(){
		
		wp_register_style( 'macaque-settings-css',  get_template_directory_uri() . '/assets/css/admin.min.css' , '1.0.0' );
		wp_enqueue_style( 'macaque-settings-css');
	
	}
}

// Extra cutomizer functions
if ( ! function_exists( 'macaque_customize_register' ) ) {
	add_action( 'customize_register', 'macaque_customize_register' );
	function macaque_customize_register( $wp_customize ) {
				
		// Add noise customizer section
		$wp_customize->add_section(
			'macaque_layout_effects',
			array(
				'title' => __( 'Noise image', 'macaque' ),
				'priority' => 24,
			)
		);
		
		$wp_customize->add_setting(
			'macaque_settings[noise_image]',
			array(
				'default' => get_template_directory_uri().'/assets/images/macaque-noise.webp',
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'macaque_settings[noise_image]',
				array(
					'label' => __( 'Background noise image', 'macaque' ),
					'section' => 'macaque_layout_effects',
					'priority' => 10,
					'settings' => 'macaque_settings[noise_image]',
					'description' => __( 'Recommended size: 100*100px.', 'macaque' )
				)
			)
		);
	}
}

// macaque effects colors css
if ( ! function_exists( 'macaque_background_noise_image' ) ) {
	function macaque_background_noise_image() {
		// Get Customizer settings
		$macaque_settings = get_option( 'macaque_settings' );
		
		$noise_image = get_template_directory_uri().'/assets/images/macaque-noise.webp';
		if ( isset( $macaque_settings['noise_image'] ) ) {
			$noise_image = $macaque_settings['noise_image'];
		}
		
		$macaque_navcolors = '.macaque-noise{background: transparent url(' . esc_url( $noise_image ) . ') repeat 0 0;}';
		
		return $macaque_navcolors;
	}
}

// Add admin page content
get_template_part( 'inc/theme' );

// Add admin page
if ( ! function_exists( 'macaque_create_menu' ) ) {
	add_action( 'admin_menu', 'macaque_create_menu' );
	// Adds our dashboard menu item
	function macaque_create_menu() {
		add_theme_page( 'Macaque WordPress Theme', 'Macaque', 'manage_options', 'macaque', 'macaque_admin_theme_page' );
	}
}