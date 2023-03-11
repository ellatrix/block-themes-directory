<?php
/**
 * PhotoBrust functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PhotoBrust_Pro
 * @since 1.0
 */

if ( ! function_exists( 'photobrust_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function photobrust_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'photobrust_support' );

if ( ! function_exists( 'photobrust_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function photobrust_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_style(
			'photobrust-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'photobrust-style' );

		wp_enqueue_script( 'photobrust-script', get_theme_file_uri( '/assets/js/scripts.js' ), array(), '1.0.0', true);

	}

endif;

add_action( 'wp_enqueue_scripts', 'photobrust_styles' );

if ( ! function_exists( 'photobrust_block_editor_styles' ) ) :
    
    /**
     * Enqueue rtl editor styles
     */
    
     function photobrust_block_editor_styles() {
        if( is_rtl() ){
            wp_enqueue_style(
                'photobrust-rtl',
                get_theme_file_uri( 'rtl.css' ),
                array(),
                filemtime( get_theme_file_path( 'rtl.css' ) ),
            );
        }
    }

endif;

add_action( 'enqueue_block_editor_assets', 'photobrust_block_editor_styles' );

if ( ! function_exists( 'photobrust_admin_editor_styles' ) ) :

	/**
	 * Enqueue admin editor styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function photobrust_admin_editor_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'photobrust-admin-style',
			get_template_directory_uri() . '/assets/css/editor.css',
			array(),
			$version_string
		);

	}

endif;

add_action( 'admin_enqueue_scripts', 'photobrust_admin_editor_styles' );

// Add block patterns
require get_theme_file_path() . '/inc/block-patterns.php';

// Add block styles
require get_theme_file_path() . '/inc/block-styles.php';

// Block Filters
require get_theme_file_path() . '/inc/block-filters.php';

// Svg icons
require get_theme_file_path() . '/inc/icon-function.php';

// Load Theme About Page
require get_theme_file_path() . '/inc/admin/admin.php';
