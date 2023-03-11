<?php
/**
 * Dark Pastel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Dark_Pastel
 * @since Dark Pastel 0.1
 */

if ( ! function_exists( 'dark_pastel_support' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Dark Pastel 0.1
	 *
	 * @return void
	 */
	function dark_pastel_support() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'dark-pastel', get_template_directory() . '/languages' );
	}
}

add_action( 'after_setup_theme', 'dark_pastel_support' );

if ( ! function_exists( 'dark_pastel_styles' ) ) {
	/**
	 * Enqueue styles.
	 *
	 * @since Dark Pastel 0.1
	 *
	 * @return void
	 */
	function dark_pastel_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'dark-pastel-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'dark-pastel-style' );
	}
}

add_action( 'wp_enqueue_scripts', 'dark_pastel_styles' );

// Add block styles.
require_once get_template_directory() . '/inc/block-styles.php';

// Add block patterns.
require_once get_template_directory() . '/inc/block-patterns.php';
