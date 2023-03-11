<?php

if (!function_exists('elyn_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function elyn_setup(){

		require get_template_directory() . '/inc/block-patterns.php';

		load_theme_textdomain( 'elyn', get_template_directory() . '/languages' );

		add_editor_style( '/dist/styles.css' );

		// Post Thumbnails
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1170, 0 );
		
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
		add_theme_support( 'responsive-embeds' );

		// Add support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Add custom image sizes
		add_image_size('elyn-1:1', 800, 800, true);
		add_image_size('elyn-16:9', 800, 450, true);
		add_image_size('elyn-4:3', 800, 600, true);
	}
endif;
add_action('after_setup_theme', 'elyn_setup');

/*--------------------------------------------------------------
# Custom image sizes
--------------------------------------------------------------*/
function elyn_add_image_sizes_to_defaults($sizes)
{
	return array_merge($sizes, [
		'elyn-1:1' => __('elyn 1:1', 'elyn'),
		'elyn-16:9' => __('elyn 16:9', 'elyn'),
		'elyn-4:3' => __('elyn 4:3', 'elyn'),
	]);
}
add_filter('image_size_names_choose', 'elyn_add_image_sizes_to_defaults');

/*--------------------------------------------------------------
# Fonts
--------------------------------------------------------------*/
if (!function_exists('elyn_font_styles')):
	/**
	 * Font CSS
	 *
	 * @return string
	 */
	function elyn_font_styles()
	{
		return "
			@import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;1,400;1,500&display=swap');		
			@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap');
		";
	}
endif;

/*--------------------------------------------------------------
# Enqueue Styles
--------------------------------------------------------------*/
if (!function_exists('elyn_styles')):
	function elyn_styles()
	{
		wp_register_style('elyn-style', get_template_directory_uri() . '/dist/styles.css');
		wp_add_inline_style('elyn-style', elyn_font_styles());
		wp_enqueue_style('elyn-style');
	}
	add_action('wp_enqueue_scripts', 'elyn_styles');
endif;

/*--------------------------------------------------------------
# Enqueue Editor Styles
--------------------------------------------------------------*/
if (!function_exists('elyn_editor_styles')):
	function elyn_editor_styles()
	{
		wp_add_inline_style('wp-block-library', elyn_font_styles());
	}
	add_action('admin_init', 'elyn_editor_styles');
endif;

/*--------------------------------------------------------------
# Customize the Excerpt
--------------------------------------------------------------*/
function elyn_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'elyn_excerpt_length', 999 );

function elyn_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'elyn_excerpt_more');
