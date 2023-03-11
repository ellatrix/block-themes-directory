<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Armando
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'ARMANDO_VERSION', wp_get_theme()->get( 'Version' ) );

/*
 * Check if the WordPress version is 6.0 or higher, and if the PHP version is at least 7.2.
 * If not, do not activate.
 */
if ( version_compare( $GLOBALS['wp_version'], '6.0', '<' ) || version_compare( PHP_VERSION_ID, '70200', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Adds theme-supports.
 *
 * @since 1.2.4
 * @return void
 */
function armando_setup() {
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );
	// Enqueue editor styles.
	add_theme_support( 'editor-styles' );
	add_editor_style(
		array(
			'./assets/css/style-shared.css',
		)
	);
}
add_action( 'after_setup_theme', 'armando_setup' );

// Block styles.
require_once 'inc/block-styles.php';

// Block categories.
require_once 'inc/block-pattern-categories.php';

/**
 * Enqueue the style.css file.
 *
 * @return void
 * @since 1.0.0
 */
function armando_styles() {
	wp_enqueue_style(
		'armando-style',
		get_stylesheet_uri(),
		[],
		ARMANDO_VERSION
	);

	wp_enqueue_style(
		'armando-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.css' ),
		[],
		ARMANDO_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'armando_styles' );

/**
 * Show '(No title)' if post has no title.
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = __( '(No title)', 'armando' );
		}

		return $title;
	}
);
