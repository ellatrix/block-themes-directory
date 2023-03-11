<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FSE
 * @since 1.0.0
 */

add_action( 'wp_enqueue_scripts', 'kaneshon_register_styles' );
/**
 * Enqueue theme stles.
 *
 * @since 1.0.0
 */
function kaneshon_register_styles() {
	$suffix = kaneshon_scripts_styles_suffix();

	wp_enqueue_style(
		'kaneshon-style',
		get_stylesheet_uri(),
		array(),
		kaneshon_asset_version()
	);

	if ( 0 !== get_theme_mod( 'developer_stylesheet' ) ) {
		wp_enqueue_style(
			'kaneshon-developer-stylesheet',
			get_theme_file_uri( "/assets/css/developer{$suffix}.css" ),
			array(),
			kaneshon_asset_version()
		);
	}
}

add_action( 'after_setup_theme', 'kaneshon_setup' );
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kaneshon_setup() {
	$suffix = kaneshon_scripts_styles_suffix();

	// Image sizes
	set_post_thumbnail_size( 1180, 650, true );
	add_image_size( 'kaneshon_listing_item', 500, 281, true );

	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles and fonts.
	add_editor_style(
		array(
			"./assets/css/developer{$suffix}.css",
		)
	);

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );

	// Enable the WordPress Customizer.
	add_action( 'customize_register', '__return_true' );

	if ( function_exists( 'register_block_pattern_category' ) ) {
		/**
		 *  Register the theme's block pattern category.
		 *
		 * @since 1.0.0
		 */
		register_block_pattern_category(
		'kaneshon',
		array( 'label' => __( 'Kaneshon', 'kaneshon' ) )
	);
	}
}

add_filter( 'image_size_names_choose', 'kaneshon_custom_image_sizes' );
/**
 * Show custom image sizes in the editor image size dropdown.
 *
 * @since 1.0.0
 */
function kaneshon_custom_image_sizes( $sizes ) {
	return array_merge(
		$sizes,
		array(
			'kaneshon_listing_item' => __( 'Listing Item', 'kaneshon' ),
		)
	);
}

/**
 * Theme includes.
 */
require_once get_theme_file_path( '/inc/inc.php' );
