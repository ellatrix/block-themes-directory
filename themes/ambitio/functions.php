<?php
/**
 * Ambitio functions and definitions
 *
 * @package Ambitio
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ambitio_setup() {

	// Set default Post Thumbnail size.
	set_post_thumbnail_size( 1530, 765 );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Remove Core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'ambitio_setup' );


/**
 * Enqueue scripts and styles.
 */
function ambitio_scripts() {

	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'ambitio-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'ambitio_scripts' );


/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function ambitio_block_scripts() {

	// Enqueue Editor Styling.
	wp_enqueue_style( 'ambitio-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

	// Get current screen.
	$current_screen = get_current_screen();

	// Enqueue Page Template Switcher Editor plugin.
	if ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) {
		wp_enqueue_script( 'ambitio-page-template-switcher', get_theme_file_uri( '/assets/js/page-template-switcher.js' ), array( 'wp-blocks', 'wp-element', 'wp-edit-post' ), '2022-06-01' );
	}
}
add_action( 'enqueue_block_editor_assets', 'ambitio_block_scripts' );


/**
* Enqueue theme fonts.
*/
function ambitio_theme_fonts() {
	$fonts_url = ambitio_get_fonts_url();

	// Load Fonts if necessary.
	if ( $fonts_url ) {
		require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
		wp_enqueue_style( 'ambitio-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), '20201110' );
	}
}
add_action( 'wp_enqueue_scripts', 'ambitio_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'ambitio_theme_fonts', 1 );


/**
 * Retrieve webfont URL to load fonts locally.
 */
function ambitio_get_fonts_url() {
	$font_families = array(
		'Manrope:400,400italic,700,700italic',
		'Libre Franklin:400,400italic,700,700italic',
	);

	$query_args = array(
		'family'  => urlencode( implode( '|', $font_families ) ),
		'subset'  => urlencode( 'latin,latin-ext' ),
		'display' => urlencode( 'swap' ),
	);

	return apply_filters( 'ambitio_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}


/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function ambitio_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return apply_filters( 'ambitio_excerpt_length', 42 );
}
add_filter( 'excerpt_length', 'ambitio_excerpt_length' );


/**
 * Add body classes in Gutenberg Editor.
 */
function ambitio_block_editor_body_classes( $classes ) {
	global $post;
	$current_screen = get_current_screen();

	// Return early if we are not in the Gutenberg Editor.
	if ( ! ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) ) {
		return $classes;
	}

	// Fullwidth Page Template?
	if ( 'page-fullwidth' === get_page_template_slug( $post->ID ) or 'page-no-title-fullwidth' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' ambitio-fullwidth-page';
	}

	// No Title Page Template?
	if ( 'page-no-title' === get_page_template_slug( $post->ID ) or 'page-no-title-fullwidth' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' ambitio-no-title-page';
	}

	return $classes;
}
add_filter( 'admin_body_class', 'ambitio_block_editor_body_classes' );


/**
 * Registers block pattern categories.
 *
 * @return void
 */
function ambitio_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'ambitio_hero'         => array( 'label' => __( 'Ambitio: Hero', 'ambitio' ) ),
		'ambitio_cta'          => array( 'label' => __( 'Ambitio: Call to Action', 'ambitio' ) ),
		'ambitio_features'     => array( 'label' => __( 'Ambitio: Features', 'ambitio' ) ),
		'ambitio_portfolio'    => array( 'label' => __( 'Ambitio: Portfolio', 'ambitio' ) ),
		'ambitio_services'     => array( 'label' => __( 'Ambitio: Services', 'ambitio' ) ),
		'ambitio_testimonials' => array( 'label' => __( 'Ambitio: Testimonials', 'ambitio' ) ),
		'ambitio_team'         => array( 'label' => __( 'Ambitio: Team', 'ambitio' ) ),
		'ambitio_page_layouts' => array( 'label' => __( 'Ambitio: Full Page Layouts', 'ambitio' ) ),
		'ambitio_blog'         => array( 'label' => __( 'Ambitio: Blog Posts', 'ambitio' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'ambitio_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'ambitio_register_block_pattern_categories', 9 );


/**
 * Registers block styles.
 *
 * @return void
 */
function ambitio_register_block_styles() {

	// Register Main Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'main-navigation',
		'label'        => esc_html__( 'Main Navigation', 'ambitio' ),
		'style_handle' => 'ambitio-stylesheet',
	) );
}
add_action( 'init', 'ambitio_register_block_styles', 9 );
