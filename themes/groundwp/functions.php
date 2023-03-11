<?php
/**
 * This file adds functions to the GroundWP WordPress theme.
 *
 * @package GroundWP
 * @author  DotCamp
 * @license GNU General Public License v2 or later
 * @link    https://groundwp.com/
 */

if ( ! function_exists( 'groundwp_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function groundwp_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'groundwp', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
				groundwp_fonts_url(),
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'groundwp_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'groundwp_enqueue_style_sheet' );
function groundwp_enqueue_style_sheet() {

	wp_enqueue_style( 'groundwp', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

// Enqueue fonts.
add_action( 'wp_enqueue_scripts', 'groundwp_enqueue_fonts' );
function groundwp_enqueue_fonts() {

	wp_enqueue_style( 'groundwp-fonts', groundwp_fonts_url(), array(), null );

}

// Define fonts.
function groundwp_fonts_url() {

	// Allow child themes to disable to the default GroundWP fonts.
	$dequeue_fonts = apply_filters( 'groundwp_dequeue_fonts', false );

	if ( $dequeue_fonts ) {
		return '';
	}

	$fonts = array(
		'family=Open+Sans:wght@100;200;300;400;500;600;700;800;900',
		'family=Karla:wght@100;200;300;400;500;600;700;800;900',
	);

	// Make a single request for all Google Fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $fonts ) ) . '&display=swap' );

}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function groundwp_register_block_styles() {

	$block_styles = array(
		'core/button'          => array(
			'fill-base'    => __( 'Fill Base', 'groundwp' ),
			'outline-base' => __( 'Outline Base', 'groundwp' ),
		),
		'core/group'           => array(
			'boxshadow'   => __( 'Boxshadow', 'groundwp' ),
			'full-height' => __( 'Full-height', 'groundwp' ),
		),
		'core/image'           => array(
			'boxshadow' => __( 'Boxshadow', 'groundwp' ),
		),
		'core/media-text'      => array(
			'boxshadow-media' => __( 'Boxshadow', 'groundwp' ),
		),
		'core/navigation-link' => array(
			'fill'         => __( 'Fill', 'groundwp' ),
			'fill-base'    => __( 'Fill Base', 'groundwp' ),
			'outline'      => __( 'Outline', 'groundwp' ),
			'outline-base' => __( 'Outline Base', 'groundwp' ),
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
add_action( 'init', 'groundwp_register_block_styles' );

/**
 * Registers block categories, and type.
 *
 * @since 0.9.2
 */
function groundwp_register_block_pattern_categories() {

	/* Functionality specific to the Block Pattern Explorer plugin. */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'groundwp', array( 'label' => __( 'GroundWP', 'groundwp' ) ) );
	}

	$block_pattern_categories = array(
		'groundwp-general' => array(
			'label'         => __( 'General', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
		'groundwp-query'   => array(
			'label'         => __( 'Query', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
		'groundwp-header'  => array(
			'label'         => __( 'Header', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
		'groundwp-footer'  => array(
			'label'         => __( 'Footer', 'groundwp' ),
			'categoryTypes' => array( 'groundwp' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'groundwp_register_block_pattern_categories', 9 );
