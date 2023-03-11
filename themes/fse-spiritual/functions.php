<?php
/**
 * FSE Spiritual functions and definitions
 *
 * @package FSE Spiritual
 */

if ( ! function_exists( 'fse_spiritual_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function fse_spiritual_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'fse-spiritual', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fse-spiritual' ),
		'secondary' => __( 'Top Header Menu', 'fse-spiritual' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
	
	add_filter('use_widgets_block_editor', '__return_false');
	
	/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);
	
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
	
}
endif; // fse_spiritual_setup
add_action( 'after_setup_theme', 'fse_spiritual_setup' );

function fse_spiritual_scripts() {
	wp_enqueue_style( 'fse-spiritual-basic-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'fse_spiritual_scripts' );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function fse_spiritual_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'fse_spiritual_front_page_template' );

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

// Theme About Page
require get_template_directory() . '/inc/about.php';

/* Redirect on theme activation */
add_action( 'admin_init', 'fse_spiritual_theme_activation_redirect' );

/**
 * Redirect to "Install Plugins" page on activation
 */
function fse_spiritual_theme_activation_redirect() {
	global $pagenow;
	if ( "themes.php" == $pagenow && is_admin() && isset( $_GET['activated'] ) ) {
		wp_redirect( esc_url_raw( add_query_arg( 'page', 'fse-spiritual-theme', admin_url( 'themes.php' ) ) ) );
	}
}


add_filter('use_widgets_block_editor', '__return_false');

function fes_study_light_custom_excerpt_length( $length ){
	return 28;
}
add_filter('excerpt_length','fes_study_light_custom_excerpt_length');