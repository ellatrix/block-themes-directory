<?php
/**
 * Sicily functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since Sicily 1.0
 */

if ( ! function_exists( 'sicily_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Sicily 1.0
	 *
	 * @return void
	 */
	function sicily_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'sicily_support' );

if ( ! function_exists( 'sicily_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Sicily 1.0
	 *
	 * @return void
	 */
	function sicily_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'sicily-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		wp_enqueue_style( 'sicily-fonts', sicily_fonts_url(), array(), null );
		
		wp_enqueue_style( 'sicily-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'sicily_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// *******************************************************************************

if ( ! function_exists( 'sicily_fonts_url' ) ) :
	/**
	 * Register Google fonts for Sicily
	 *
	 * Create your own sicily_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function sicily_fonts_url() {
		$fonts_url = '';

		$font_families = array( 
			'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900', 
			'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
			'Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700',
			'Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		);

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
