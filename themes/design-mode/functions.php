<?php
/**
 * This file adds functions to the Design Mode WordPress theme.
 *
 * @package Design Mode
 * @author  Brian Gardner
 * @license GNU General Public License v2 or later
 * @link    https://briangardner.com/
 */

if ( ! function_exists( 'design_mode_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function design_mode_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'design-mode', get_template_directory() . '/languages' );

	    // Enqueue editor styles.
	    add_editor_style( get_template_directory_uri() . '/style.css' );

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'design_mode_setup' );

/**
 * Enqueues theme style sheet.
 *
 * @since 1.0
 */
function design_mode_enqueue_style_sheet() {

	wp_enqueue_style( 'design-mode', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'design_mode_enqueue_style_sheet' );

/**
 * Register block styles.
 *
 * @since 1.0
 */
function design_mode_register_block_styles() {

	$block_styles = array(
		'core/separator' => array(
			'mini' => __( 'Mini', 'design-mode' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'design_mode_register_block_styles' );

/**
 * Registers block categories, and type.
 *
 * @since 1.0
 */
function design_mode_register_block_pattern_categories() {

	$block_pattern_categories = array(
		'design-mode-footer'  => array(
			'label'         => __( 'Footer', 'design-mode' ),
			'categoryTypes' => array( 'design-mode' ),
		),
		'design-mode-general' => array(
			'label'         => __( 'General', 'design-mode' ),
			'categoryTypes' => array( 'design-mode' ),
		),
		'design-mode-header'  => array(
			'label'         => __( 'Header', 'design-mode' ),
			'categoryTypes' => array( 'design-mode' ),
		),
		'design-mode-page'    => array(
			'label'         => __( 'Page', 'design-mode' ),
			'categoryTypes' => array( 'design-mode' ),
		),
		'design-mode-query'   => array(
			'label'         => __( 'Query', 'design-mode' ),
			'categoryTypes' => array( 'design-mode' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'design_mode_register_block_pattern_categories', 9 );
