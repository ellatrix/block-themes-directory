<?php
/**
 * Bricksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Bricksy
 * @since Bricksy 1.0
 */


if ( ! function_exists( 'bricksy_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Bricksy 1.0
	 *
	 * @return void
	 */
	function bricksy_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'bricksy_support' );

if ( ! function_exists( 'bricksy_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bricksy 1.0
	 *
	 * @return void
	 */
	function bricksy_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bricksy-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
		
		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bricksy-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bricksy_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Theme Admin Page
require get_template_directory() . '/inc/admin/theme-admin.php';

/*--------------------------------------------------------------
# Enqueue Admin Scripts and Styles
--------------------------------------------------------------*/
if ( ! function_exists( 'bricksy_admin_scripts' ) ) :
	function bricksy_admin_scripts() {
		wp_enqueue_style( 'bricksy-admin-styles', get_template_directory_uri() . '/assets/admin/css/admin-styles.css' );
	}
	add_action( 'admin_enqueue_scripts', 'bricksy_admin_scripts' );
endif;