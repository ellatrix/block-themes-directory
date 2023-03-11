<?php

define( 'PRIA_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'PRIA_TEMPLATE_DIR', get_template_directory() );
define( 'PRIA_TEMPLATE_DIR_URI', get_template_directory_uri() );

if ( ! function_exists( 'pria_support' ) ) {
	function pria_support()  {

		// Make theme available for translation.
		load_theme_textdomain( 'pria', PRIA_TEMPLATE_DIR . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'editor-styles' );
		add_editor_style( array( 'style.css', pria_fonts_url() ) );

    }
    add_action( 'after_setup_theme', 'pria_support' );
}

/**
 * Enqueue scripts and styles.
 */
function pria_scripts_styles() {
	wp_enqueue_style( 'dashicons' );

	// Enqueue theme stylesheets.
	wp_enqueue_style( 'pria-style', PRIA_TEMPLATE_DIR_URI . '/style.css', array(), PRIA_VERSION );
	wp_enqueue_style( 'pria-style-screen-medium', PRIA_TEMPLATE_DIR_URI . '/assets/css/screen-medium.css', '', PRIA_VERSION, pria_breakpoint( 'medium' ) );
	wp_enqueue_style( 'pria-style-screen-small', PRIA_TEMPLATE_DIR_URI . '/assets/css/screen-small.css', '', PRIA_VERSION, pria_breakpoint( 'small' ) );
	wp_enqueue_style( 'pria-style-screen-mobile', PRIA_TEMPLATE_DIR_URI . '/assets/css/screen-mobile.css', '', PRIA_VERSION, pria_breakpoint( 'mobile' ) );

	// Enqueue fonts stylesheet.
	wp_enqueue_style( 'pria-fonts-style', pria_fonts_url(), array(), PRIA_VERSION );
}
add_action( 'wp_enqueue_scripts', 'pria_scripts_styles' );
//add_action( 'enqueue_block_editor_assets', 'pria_scripts_styles' );

/**
 * Responsive breakpoints.
 */
function pria_breakpoint( $device = '' ) {
	if ( $device === 'mobile' ) {
		$breakpoint = apply_filters( 'pria_breakpoint_mobile', '599px', );
	} elseif ( $device === 'small' ) {
		$breakpoint = apply_filters( 'pria_breakpoint_small', '781px', );
	} else {
		$breakpoint = apply_filters( 'pria_breakpoint_medium', '1024px', );
	}
	$media = '(max-width: ' . esc_attr( $breakpoint ) . ')';
	return $media;
}

/**
 * Get Google fonts and save locally with WPTT Webfont Loader.
 */
function pria_fonts_url() {
	$font_families = array(
		'Lato:wght@100;300;400;700;900',
		'Georama:wght@100;200;300;400;500;600;700;800;900'
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	return wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/**
 * Block patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	require PRIA_TEMPLATE_DIR . '/inc/block-patterns.php';
}

/**
 * Block styles.
 */
if ( function_exists( 'register_block_style' ) ) {
	require PRIA_TEMPLATE_DIR . '/inc/block-styles.php';
}

/**
 * Remove archive title prefix.
 */
function pria_remove_archive_title_prefix( $prefix ) {
	$prefix = '';
	return $prefix;
}
add_filter( 'get_the_archive_title_prefix', 'pria_remove_archive_title_prefix' );

/**
 * Display archives placeholder post image if empty.
 */
function pria_post_thumbnail_placeholder( $html ) {
	if ( $html === '' && !is_single() ) {
		$html = '<img class="attachment-post-thumbnail wp-post-image placeholder" src="' . esc_url( PRIA_TEMPLATE_DIR_URI . '/assets/images/post-placeholder.jpg').'">';
	}

	return $html;
}
add_filter( 'post_thumbnail_html', 'pria_post_thumbnail_placeholder' );

/**
 * Add an Appearance sub-menu link to Additional CSS.
 */
function pria_add_custom_css_menu_item() {
	add_submenu_page(
		'themes.php',
		esc_html__( 'Additional CSS', 'pria' ),
		esc_html__( 'Additional CSS', 'pria' ),
		'edit_theme_options',
		admin_url( 'customize.php?autofocus[section]=custom_css' )
	);
}
add_action( 'admin_menu', 'pria_add_custom_css_menu_item' );
