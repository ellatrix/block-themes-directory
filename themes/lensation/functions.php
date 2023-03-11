<?php
/**
 * Lensation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lensation
 * @since 1.0
 */

if ( ! function_exists( 'lensation_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function lensation_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'lensation_support' );

if ( ! function_exists( 'lensation_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	
	function lensation_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'lensation-style',
			get_template_directory_uri() . '/style.css',
			array(),
			filemtime( get_theme_file_path( 'style.css' ) )
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'lensation_styles' );

if ( ! function_exists( 'lensation_block_editor_styles' ) ) :
    
    /**
     * Enqueue rtl editor styles
     */
    
     function lensation_block_editor_styles() {
        if( is_rtl() ){
            wp_enqueue_style(
                'lensation-rtl',
                get_theme_file_uri( 'rtl.css' ),
                array(),
                filemtime( get_theme_file_path( 'rtl.css' ) )
            );
        }
    }

endif;

add_action( 'enqueue_block_editor_assets', 'lensation_block_editor_styles');

function lensation_theme_updater() {
	require( get_template_directory() . '/inc/updater/theme-updater.php' );
}

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Theme About Page
require get_template_directory() . '/inc/about.php';
