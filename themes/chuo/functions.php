<?php
/**
 * chuo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since chuo 1.0
 */

if ( ! function_exists( 'chuo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since chuo 1.0
	 *
	 * @return void
	 */
	function chuo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'chuo_support' );

if ( ! function_exists( 'chuo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since chuo 1.0
	 *
	 * @return void
	 */
	function chuo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'chuo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		wp_enqueue_style( 'chuo-fonts', chuo_fonts_url(), array(), null );
		
		wp_enqueue_style( 'chuo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'chuo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// *******************************************************************************

if ( ! function_exists( 'chuo_fonts_url' ) ) :
	/**
	 * Register Google fonts for theme
	 *
	 * Create your own chuo_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function chuo_fonts_url() {
		$fonts_url = '';

		$font_families = array( 
			'Raleway:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400;1,600;1,700',
			'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
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
