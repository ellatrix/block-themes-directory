<?php
/**
 * Kelsey functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kelsey
 * @since 1.0
 */

if ( ! function_exists( 'kelsey_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function kelsey_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'kelsey_support' );

if ( ! function_exists( 'kelsey_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function kelsey_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'kelsey-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'kelsey-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'kelsey_styles' );

if ( ! function_exists( 'kelsey_admin_editor_styles' ) ) :

	/**
	 * Enqueue admin editor styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function kelsey_admin_editor_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'kelsey-admin-style',
			get_template_directory_uri() . '/assets/css/editor.css',
			array(),
			$version_string
		);

	}

endif;

add_action( 'admin_enqueue_scripts', 'kelsey_admin_editor_styles' );


// Add block patterns
require get_theme_file_path() . '/inc/block-patterns.php';

// Add block styles
require get_theme_file_path() . '/inc/block-styles.php';

// Block Filters
require get_theme_file_path() . '/inc/block-filters.php';

// Svg icons
require get_theme_file_path() . '/inc/icon-function.php';

// Load Theme About Page
require get_theme_file_path() . '/inc/admin/admin.php';
