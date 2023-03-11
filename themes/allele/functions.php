<?php
/**
 * Allele functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

if ( ! function_exists( 'allele_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Allele 1.0.0
	 *
	 * @return void
	 */
	function allele_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

    // Add Editor Style
    add_editor_style( '/build/editor-style.css' );

    // Theme Image Sizes
    set_post_thumbnail_size( 1600, 800 );

	}

endif;

add_action( 'after_setup_theme', 'allele_support' );

if ( ! function_exists( 'allele_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Allele 1.0.0
	 *
	 * @return void
	 */
	function allele_styles() {

		// Register theme stylesheet.
    $theme_version = wp_get_theme()->get( 'Version' );

    $version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'allele-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'allele-style' );
    wp_enqueue_style( 'allele-theme-style', get_template_directory_uri() . '/build/theme-style.css', array( 'allele-style' ), $version_string );

	}

endif;

add_action( 'wp_enqueue_scripts', 'allele_styles' );

/**
 * Filter 'excerpt_length'
 * This filter is meant to be a precursor to
 * a global solution provided by the Block Editor.
 *
 * https://github.com/WordPress/gutenberg/issues/34757
 *
 * @param int $length
 * @return int
 */
function allele_excerpt_length( $length ) {
  if ( is_admin() ) {
		return $length;
	}

	// Custom Excerpt Length
	$length = 18;

	/**
	 * Filters the Excerpt length.
	 *
	 * @param int $length Excerpt Length.
	 */
	return apply_filters( 'allele_excerpt_length', $length );
}
add_filter( 'excerpt_length', 'allele_excerpt_length' );

/**
 * Block Patterns
 */
require get_template_directory() . '/inc/block-patterns.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

/**
 * Block Styles
 */
require get_template_directory() . '/inc/block-styles.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
