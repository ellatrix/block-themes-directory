<?php
/**
 * Hyakutake functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Hyakutake
 * @since Hyakutake 1.0
 */


if ( ! function_exists( 'hyakutake_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Hyakutake 1.0
	 *
	 * @return void
	 */
	function hyakutake_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Register nav menus.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'hyakutake' ),
			)
		);

	}

endif;

add_action( 'after_setup_theme', 'hyakutake_support' );

if ( ! function_exists( 'hyakutake_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Hyakutake 1.0
	 *
	 * @return void
	 */
	function hyakutake_styles() {
		
        wp_register_style(
			'hyakutake-style',
			get_template_directory_uri() . '/style.css',
			array(),
			hyakutake_file_version( '/style.css' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'hyakutake-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'hyakutake_styles' );

/**
 * Get file version with respect to file modified date.
 */
function hyakutake_file_version( $file_path ) {
    return date("ymd-Gis", filemtime( get_theme_file_path( $file_path ) ) );
}

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Load Theme About Page
 */
require get_parent_theme_file_path( '/inc/about-admin/theme-info.php' );
