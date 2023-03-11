<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nominal_Block
 * @since 1.0.0
 */

if ( ! function_exists( 'nominal_block_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function nominal_block_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TT1 Blocks, use a find and replace
		 * to change 'tt1-blocks' to the name of your theme in all the template files.
		 */

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}
}
add_action( 'after_setup_theme', 'nominal_block_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 0.1
 *
 * @return void
 */
function nominal_block_scripts() {
	wp_enqueue_style( 'nominal-block-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'nominal_block_scripts' );