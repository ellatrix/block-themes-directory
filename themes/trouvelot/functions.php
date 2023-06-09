<?php
/**
 * Trouvelot functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Trouvelot
 * @since Trouvelot 1.0
 */


if ( ! function_exists( 'trouvelot_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Trouvelot 1.0
	 *
	 * @return void
	 */
	function trouvelot_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'trouvelot_support' );

if ( ! function_exists( 'trouvelot_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Trouvelot 1.0
	 *
	 * @return void
	 */
	function trouvelot_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'trouvelot-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'trouvelot-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'trouvelot_styles' );

/**
 * Registers block patterns and categories.
 *
 * @since Trouvelot 1.0
 *
 * @return void
 */
function trouvelot_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'images'   => array( 'label' => __( 'Images', 'trouvelot' ) ),
		'featured' => array( 'label' => __( 'Featured', 'trouvelot' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'trouvelot' ) ),
		'query'    => array( 'label' => __( 'Query', 'trouvelot' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since trouvelot 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'trouvelot_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

}
add_action( 'init', 'trouvelot_register_block_pattern_categories', 9 );
