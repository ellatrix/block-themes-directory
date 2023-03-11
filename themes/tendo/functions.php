<?php
if ( ! function_exists( 'tendo_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function tendo_setup() {

		add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );
	}
endif;
add_action( 'after_setup_theme', 'tendo_setup' );

/**
 * Enqueue scripts and styles.
 */
function tendo_scripts() {
	wp_enqueue_style( 'tendo-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'tendo_scripts' );

if ( function_exists( 'register_block_style' ) ) {

	/**
	 * Register block styles.
	 */
	function tendo_register_block_styles() {
		// Separator: Striped.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'tendo-striped',
				'label' => esc_html__( 'Striped', 'tendo' ),
			)
		);
	}
	add_action( 'init', 'tendo_register_block_styles' );
}
