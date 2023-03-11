<?php
/**
 * This file adds functions to the Astory WordPress theme.
 *
 * @package Astory
 * @author  codeclove
 * @license GNU General Public License v2 or later
 * @link    https://codeclove.com/
 */

if ( ! function_exists( 'astory_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function astory_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'astory', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for menu.
		register_nav_menus( array( 'primary' => esc_html__( 'Primary', 'astory' ) ) );

		// Enqueue editor styles and fonts.
		add_editor_style( array( './style.css', astory_fonts_url() ) );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'astory_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'astory_enqueue_style_sheet' );
function astory_enqueue_style_sheet() {

	wp_enqueue_style( 'astory', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

// Enqueue fonts.
add_action( 'wp_enqueue_scripts', 'astory_enqueue_fonts' );
function astory_enqueue_fonts() {

	wp_enqueue_style( 'astory-fonts', astory_fonts_url(), array(), null );

}

// Define fonts.
function astory_fonts_url() {

	// Allow child themes to disable to the default Astory fonts.
	$dequeue_fonts = apply_filters( 'astory_dequeue_fonts', false );

	if ( $dequeue_fonts ) {
		return '';
	}

	$fonts = array(
		'family=Inter:wght@100;200;300;400;500;600;700;800;900',
	);

	// Make a single request for all Google Fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $fonts ) ) . '&display=swap' );

}

// Add block styles.
require get_template_directory() . '/inc/block-styles.php';

// theme page.
require get_template_directory() . '/inc/theme-page.php';

// Include Upgrade Button.
require get_template_directory() . '/inc/upgrade-button/class-customize.php';
