<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aarambha_Block
 * @since 1.0.0
 */


 /**
  * Theme Supports.
  */
if ( ! function_exists( 'block_aarambha_support' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function block_aarambha_support() {

		// Languages
		load_theme_textdomain( 'block-aarambha', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_theme_support( 'editor-styles' );
		add_editor_style(
			array(
				'./assets/css/developer.css',
			)
		);

		// HTML5
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );

		// Thumbnail
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1180, 650, true );
		add_image_size( 'block_aarambha_blog', 500, 281, true );

		// Responisve video
		add_theme_support( 'responsive-embeds' );

		// Register menu
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'block-aarambha' ),
			)
		);

		// Enable the WordPress Customizer.
		add_action( 'customize_register', '__return_true' );

	}
}
add_action( 'after_setup_theme', 'block_aarambha_support' );

/**
 * Theme Enqueue Styles.
 */
if ( ! function_exists( 'block_aarambha_styles' ) ) {

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function block_aarambha_styles() {

		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'block-aarambha-developer-style',
			get_theme_file_uri( '/assets/css/developer.css' ),
			array(),
			filemtime( get_theme_file_path( '/assets/css/developer.css' ) )
		);

		wp_enqueue_script(
			'block-aarambha-main-js',
			get_theme_file_uri( '/assets/js/index.js' ),
			array(),
			filemtime( get_theme_file_path( '/assets/js/index.js' ) ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'block_aarambha_styles' );

/**
 * Theme includes.
 */
require_once get_theme_file_path( '/inc/inc.php' );
