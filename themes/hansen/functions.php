<?php

if ( ! function_exists( 'hansen_support' ) ) {
	function hansen_support()  {

		// Make theme available for translation.
		load_theme_textdomain( 'hansen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 'style.css', hansen_fonts_url() ) );

    }
    add_action( 'after_setup_theme', 'hansen_support' );
}

/**
 * Enqueue scripts and styles.
 */
function hansen_scripts() {
	wp_enqueue_style( 'dashicons' );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'hansen-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue fonts stylesheet.
	wp_enqueue_style( 'hansen-fonts-style', hansen_fonts_url(), array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue navigation script.
	wp_enqueue_script( 'hansen-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), false );

	// Enqueue alignment script.
	wp_enqueue_script( 'hansen-alignment', get_template_directory_uri() . '/assets/js/alignment.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), false );

}
add_action( 'wp_enqueue_scripts', 'hansen_scripts' );

/**
 * Enqueue editor scripts and styles.
 * Required for Site Editor
 */
function hansen_editor_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'hansen-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue fonts stylesheet.
	wp_enqueue_style( 'hansen-fonts-style', hansen_fonts_url(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'enqueue_block_editor_assets', 'hansen_editor_scripts' );

/**
 * Get Google fonts and save locally with WPTT Webfont Loader.
 */
function hansen_fonts_url() {
	$font_families = array(
		'Quicksand:wght@300;400;500;600;700',
		'Work+Sans:wght@300;400;500;600;700',
		'Roboto:wght@100;300;400;500;700;900',
		'Roboto+Slab:wght@100;200;300;400;500;600;700;800;900',
		'Merriweather:wght@300;400;700;900'
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	return wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/**
 * Remove archive title prefix.
 */
function hansen_remove_archive_title_prefix( $prefix ) {
	$prefix = '';
	return $prefix;
}
add_filter( 'get_the_archive_title_prefix', 'hansen_remove_archive_title_prefix' );

/**
 * Block patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	require get_template_directory() . '/inc/block-patterns.php';
}

/**
 * Block styles.
 */
if ( function_exists( 'register_block_style' ) ) {
	require get_template_directory() . '/inc/block-styles.php';
}
