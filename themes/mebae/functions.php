<?php
if ( ! function_exists( 'mebae_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support for post thumbnails.
     */
    function mebae_theme_setup() {
        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );
 
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
 
        add_theme_support( 'editor-styles' );
 
        add_theme_support( 'wp-block-styles' );

        add_editor_style(
			array(
				'theme.css',
			)
		);

        // This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'mebae' ),
			)
		);

    }
endif;
add_action( 'after_setup_theme', 'mebae_theme_setup' );
 
/**
 * Enqueue theme scripts and styles.
 */
function mebae_theme_scripts() {

    $ver =  wp_get_theme( 'mebae' )->get( 'Version' );

    wp_enqueue_style( 
        'mebae-fonts', 
        mebae_fonts_url(), 
        array(), 
        null 
    );
	
    wp_enqueue_style(
		'mebae-shared-style',
		get_stylesheet_directory_uri() . '/theme.css',
		array(),
		$ver,
	);
}
add_action( 'wp_enqueue_scripts', 'mebae_theme_scripts' );

/**
 * Google webfonts
 *
 * @return $fonts_url
 */

function mebae_fonts_url() {
	if ( ! class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
		return '';
	}

	$theme_data = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_settings();
	if ( empty( $theme_data ) || empty( $theme_data['typography'] ) || empty( $theme_data['typography']['fontFamilies'] ) ) {
		return '';
	}

	$font_families = [];
	if ( ! empty( $theme_data['typography']['fontFamilies']['theme'] ) ) {
		foreach( $theme_data['typography']['fontFamilies']['theme'] as $font ) {
			if ( ! empty( $font['google'] ) ) {
				$font_families[] = $font['google'];
			}
		}
	}

	if ( ! empty( $theme_data['typography']['fontFamilies']['user'] ) ) {
		foreach( $theme_data['typography']['fontFamilies']['user'] as $font ) {
			if ( ! empty( $font['google'] ) ) {
				$font_families[] = $font['google'];
			}
		}
	}
	$font_families[] = 'display=swap';

	// Make a single request for the theme fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families ) );
}


/* Block Patterns */
require get_template_directory() . '/inc/block-patterns.php';
require get_template_directory() . '/inc/block-styles.php';