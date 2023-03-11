<?php
/**
 * Lawson functions and definitions
 *
 * @package Lawson
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function lawson_setup() {

	// Set default Post Thumbnail size.
	set_post_thumbnail_size( 1530, 765 );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Remove Core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'lawson_setup' );


/**
 * Enqueue scripts and styles.
 */
function lawson_scripts() {

	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'lawson-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'lawson_scripts' );


/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function lawson_block_scripts() {

	// Enqueue Editor Styling.
	wp_enqueue_style( 'lawson-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

	// Get current screen.
	$current_screen = get_current_screen();

	// Enqueue Page Template Switcher Editor plugin.
	if ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) {
		wp_enqueue_script( 'lawson-page-template-switcher', get_theme_file_uri( '/assets/js/page-template-switcher.js' ), array( 'wp-blocks', 'wp-element', 'wp-edit-post' ), '2022-06-01' );
	}
}
add_action( 'enqueue_block_editor_assets', 'lawson_block_scripts' );


/**
* Enqueue theme fonts.
*/
function lawson_theme_fonts() {
	$fonts_url = lawson_get_fonts_url();

	// Load Fonts if necessary.
	if ( $fonts_url ) {
		require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
		wp_enqueue_style( 'lawson-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), '20201110' );
	}
}
add_action( 'wp_enqueue_scripts', 'lawson_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'lawson_theme_fonts', 1 );


/**
 * Retrieve webfont URL to load fonts locally.
 */
function lawson_get_fonts_url() {
	$font_families = array(
		'Barlow:400,400italic,700,700italic',
	);

	$query_args = array(
		'family'  => urlencode( implode( '|', $font_families ) ),
		'subset'  => urlencode( 'latin,latin-ext' ),
		'display' => urlencode( 'swap' ),
	);

	return apply_filters( 'lawson_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}


/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function lawson_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return apply_filters( 'lawson_excerpt_length', 20 );
}
add_filter( 'excerpt_length', 'lawson_excerpt_length' );


/**
 * Add body classes in Gutenberg Editor.
 */
function lawson_block_editor_body_classes( $classes ) {
	global $post;
	$current_screen = get_current_screen();

	// Return early if we are not in the Gutenberg Editor.
	if ( ! ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) ) {
		return $classes;
	}

	// Fullwidth Page Template?
	if ( 'page-fullwidth' === get_page_template_slug( $post->ID ) or 'page-no-title-fullwidth' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' lawson-fullwidth-page';
	}

	// No Title Page Template?
	if ( 'page-no-title' === get_page_template_slug( $post->ID ) or 'page-no-title-fullwidth' === get_page_template_slug( $post->ID ) or 'blank' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' lawson-no-title-page';
	}

	return $classes;
}
add_filter( 'admin_body_class', 'lawson_block_editor_body_classes' );


/**
 * Registers block pattern categories.
 *
 * @return void
 */
function lawson_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'lawson_hero'         => array( 'label' => __( 'Lawson: Hero', 'lawson' ) ),
		'lawson_cta'          => array( 'label' => __( 'Lawson: Call to Action', 'lawson' ) ),
		'lawson_features'     => array( 'label' => __( 'Lawson: Features', 'lawson' ) ),
		'lawson_portfolio'    => array( 'label' => __( 'Lawson: Portfolio', 'lawson' ) ),
		'lawson_services'     => array( 'label' => __( 'Lawson: Services', 'lawson' ) ),
		'lawson_testimonials' => array( 'label' => __( 'Lawson: Testimonials', 'lawson' ) ),
		'lawson_team'         => array( 'label' => __( 'Lawson: Team', 'lawson' ) ),
		'lawson_page_layouts' => array( 'label' => __( 'Lawson: Full Page Layouts', 'lawson' ) ),
		'lawson_blog'         => array( 'label' => __( 'Lawson: Blog Posts', 'lawson' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'lawson_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'lawson_register_block_pattern_categories', 9 );


/**
 * Registers block styles.
 *
 * @return void
 */
function lawson_register_block_styles() {

	// Register Main Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'main-navigation',
		'label'        => esc_html__( 'Main Navigation', 'lawson' ),
		'style_handle' => 'lawson-stylesheet',
	) );

	// Register Top Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'top-navigation',
		'label'        => esc_html__( 'Top Navigation', 'lawson' ),
		'style_handle' => 'lawson-stylesheet',
	) );

	// Register Flip Link Hover block style.
	$link_hover_style = array(
		'name'         => 'flip-link-hover',
		'label'        => esc_html__( 'Flip Link Hover', 'lawson' ),
		'style_handle' => 'lawson-stylesheet',
	);

	register_block_style( 'core/archives', $link_hover_style );
	register_block_style( 'core/categories', $link_hover_style );
	register_block_style( 'core/latest-posts', $link_hover_style );
	register_block_style( 'core/page-list', $link_hover_style );
	register_block_style( 'core/tag-cloud', $link_hover_style );
	register_block_style( 'core/site-title', $link_hover_style );
	register_block_style( 'core/post-date', $link_hover_style );
	register_block_style( 'core/post-terms', $link_hover_style );
}
add_action( 'init', 'lawson_register_block_styles', 9 );
