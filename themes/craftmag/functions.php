<?php

/**
 * Enqueue and styles.
 *
 * @since CraftMag 1.0
 *
 * @return void
 */
if ( ! function_exists( 'craftmag_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since CraftMag 1.0
	 *
	 * @return void
	 */
	function craftmag_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'craftmag-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'craftmag-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'craftmag_styles' );

/**
 * Enqueue supplemental block editor styles.
 *
 * @since CraftMag 1.0
 */
function craftmag_block_editor_styles() {

	// Enqueue the editor styles.
	wp_enqueue_style( 'craftmag-block-editor-styles', get_theme_file_uri( '/assets/css/block-editor.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );
	wp_style_add_data( 'craftmag-block-editor-styles', 'rtl', 'replace' );

}
add_action( 'enqueue_block_editor_assets', 'craftmag_block_editor_styles', 1, 1 );

/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function craftmag_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return apply_filters( 'craftmag_excerpt_length', 20 );
}
add_filter( 'excerpt_length', 'craftmag_excerpt_length' );