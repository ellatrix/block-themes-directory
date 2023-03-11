<?php
/**
 * Bioxlog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

if ( ! function_exists( 'Bioxlog_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 */
	function bioxlog_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'bioxlog_support' );

if ( ! function_exists( 'bioxlog_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function bioxlog_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'Bioxlog-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'Bioxlog-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bioxlog_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';