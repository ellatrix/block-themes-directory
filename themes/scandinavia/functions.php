<?php
/**
 * Scandinavia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since Scandinavia 1.0
 */


if ( ! function_exists( 'scandinavia_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Scandinavia 1.0
	 *
	 * @return void
	 */
	function scandinavia_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'scandinavia_support' );

if ( ! function_exists( 'scandinavia_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Scandinavia 1.0
	 *
	 * @return void
	 */
	function scandinavia_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'scandinavia-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
		
		wp_enqueue_style( 'scandinavia-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'scandinavia_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
