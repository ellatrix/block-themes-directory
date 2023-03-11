<?php
/**
 * Smartcube functions and definitions
 *
 * @package Smartcube
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function smartcube_setup() {

	// Set default Post Thumbnail size.
	set_post_thumbnail_size( 1800, 1000 );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Remove Core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'smartcube_setup' );


/**
 * Enqueue scripts and styles.
 */
function smartcube_scripts() {

	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'smartcube-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'smartcube_scripts' );


/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function smartcube_block_scripts() {

	// Enqueue Editor Styling.
	wp_enqueue_style( 'smartcube-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

	// Get current screen.
	$current_screen = get_current_screen();

	// Enqueue Page Template Switcher Editor plugin.
	if ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) {
		wp_enqueue_script( 'smartcube-page-template-switcher', get_theme_file_uri( '/assets/js/page-template-switcher.js' ), array( 'wp-blocks', 'wp-element', 'wp-edit-post' ), '2022-06-01' );
	}
}
add_action( 'enqueue_block_editor_assets', 'smartcube_block_scripts' );


/**
* Enqueue theme fonts.
*/
function smartcube_theme_fonts() {
	$fonts_url = smartcube_get_fonts_url();

	// Load Fonts if necessary.
	if ( $fonts_url ) {
		require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
		wp_enqueue_style( 'smartcube-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), '20201110' );
	}
}
add_action( 'wp_enqueue_scripts', 'smartcube_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'smartcube_theme_fonts', 1 );


/**
 * Retrieve webfont URL to load fonts locally.
 */
function smartcube_get_fonts_url() {
	$font_families = array(
		'Raleway:400,400italic,700,700italic',
		'Bitter:400,400italic,700,700italic',
	);

	$query_args = array(
		'family'  => urlencode( implode( '|', $font_families ) ),
		'subset'  => urlencode( 'latin,latin-ext' ),
		'display' => urlencode( 'swap' ),
	);

	return apply_filters( 'smartcube_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}


/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function smartcube_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return apply_filters( 'smartcube_excerpt_length', 23 );
}
add_filter( 'excerpt_length', 'smartcube_excerpt_length' );


/**
 * Add body classes in Gutenberg Editor.
 */
function smartcube_block_editor_body_classes( $classes ) {
	global $post;
	$current_screen = get_current_screen();

	// Return early if we are not in the Gutenberg Editor.
	if ( ! ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) ) {
		return $classes;
	}

	// Fullwidth Page Template?
	if ( 'page-fullwidth' === get_page_template_slug( $post->ID ) or 'page-no-title-fullwidth' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' smartcube-fullwidth-page';
	}

	// No Title Page Template?
	if ( 'page-no-title' === get_page_template_slug( $post->ID ) or 'page-no-title-fullwidth' === get_page_template_slug( $post->ID ) or 'blank' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' smartcube-no-title-page';
	}

	return $classes;
}
add_filter( 'admin_body_class', 'smartcube_block_editor_body_classes' );


/**
 * Registers block pattern categories.
 *
 * @return void
 */
function smartcube_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'smartcube_authors'   => array( 'label' => __( 'Smartcube: Authors', 'smartcube' ) ),
		'smartcube_blog'      => array( 'label' => __( 'Smartcube: Blog Loop', 'smartcube' ) ),
		'smartcube_cta'       => array( 'label' => __( 'Smartcube: Call to Action', 'smartcube' ) ),
		'smartcube_homepage'  => array( 'label' => __( 'Smartcube: Homepage', 'smartcube' ) ),
		'smartcube_magazine'  => array( 'label' => __( 'Smartcube: Magazine', 'smartcube' ) ),
		'smartcube_portfolio' => array( 'label' => __( 'Smartcube: Portfolio', 'smartcube' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'smartcube_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'smartcube_register_block_pattern_categories', 9 );


/**
 * Registers block styles.
 *
 * @return void
 */
function smartcube_register_block_styles() {

	// Register Main Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'main-navigation',
		'label'        => esc_html__( 'Main Navigation', 'smartcube' ),
		'style_handle' => 'smartcube-stylesheet',
	) );

	// Register Top Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'top-navigation',
		'label'        => esc_html__( 'Top Navigation', 'smartcube' ),
		'style_handle' => 'smartcube-stylesheet',
	) );

	// Register Footer Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'footer-navigation',
		'label'        => esc_html__( 'Footer Navigation', 'smartcube' ),
		'style_handle' => 'smartcube-stylesheet',
	) );

	// Register Sidebar Title block style.
	register_block_style( 'core/heading', array(
		'name'         => 'sidebar-title',
		'label'        => esc_html__( 'Sidebar Title', 'smartcube' ),
		'style_handle' => 'smartcube-stylesheet',
	) );

	// Register Thick Line separator block style.
	register_block_style( 'core/separator', array(
		'name'         => 'thick-line',
		'label'        => esc_html__( 'Thick Line', 'smartcube' ),
		'style_handle' => 'smartcube-stylesheet',
	) );

	// Register Read More button block style.
	register_block_style( 'core/post-excerpt', array(
		'name'         => 'read-more-button',
		'label'        => esc_html__( 'Read More Button', 'smartcube' ),
		'style_handle' => 'smartcube-stylesheet',
	) );

	// Register Full Height block style.
	register_block_style( 'core/post-featured-image', array(
		'name'         => 'full-height',
		'label'        => esc_html__( 'Full Height', 'smartcube' ),
		'style_handle' => 'smartcube-stylesheet',
	) );

	// Register Small Search block style.
	register_block_style( 'core/search', array(
		'name'         => 'small-search',
		'label'        => esc_html__( 'Small', 'smartcube' ),
		'style_handle' => 'smartcube-stylesheet',
	) );

	// Register Square Shape Social links block style.
	register_block_style( 'core/social-links', array(
		'name'         => 'square-shape',
		'label'        => esc_html__( 'Square Shape', 'smartcube' ),
		'style_handle' => 'smartcube-stylesheet',
	) );
}
add_action( 'init', 'smartcube_register_block_styles', 9 );
