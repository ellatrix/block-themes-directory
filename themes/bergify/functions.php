<?php

if ( ! function_exists( 'bergify_support' ) ) :
	function bergify_support() {
		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Enqueue editor styles.
		add_editor_style( array( '/assets/ponyfill.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'bergify_support' );

/* Enqueue styles */
function bergify_scripts() {
	wp_enqueue_style( 'bergify-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'bergify_scripts' );

/* Block Styles */
require get_template_directory() . '/inc/block-styles.php';

/* Block Patterns */
require get_template_directory() . '/inc/block-patterns.php';

/* Contact Form 7 - Remove styles */
add_filter( 'wpcf7_load_css', '__return_false' );
