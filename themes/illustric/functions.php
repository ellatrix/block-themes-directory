<?php
/**
 * Illustric functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Illustric
 * @since Illustric 1.0
 */


if ( ! function_exists( 'illustric_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Illustric 1.0
	 *
	 * @return void
	 */
	function illustric_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'illustric_support' );

if ( ! function_exists( 'illustric_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Illustric 1.0
	 *
	 * @return void
	 */
	function illustric_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'illustric-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'illustric-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'illustric_styles' );
