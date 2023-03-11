<?php
if ( ! function_exists( 'evit_fse_theme_support' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since Evit Fse 1.0
     *
     * @return void
     */
    function evit_fse_theme_support() {

        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
        add_theme_support( 'editor-styles' );

        add_theme_support( 'block-nav-menus' );

        // Enqueue editor styles.
        add_editor_style( 'style.css' );

        register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'evit-fse' ) ) );

    }

endif;
add_action( 'after_setup_theme', 'evit_fse_theme_support' );

/**
 * Enqueue scripts and styles.
 */
function evit_fse_theme_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Register theme stylesheet.
  	$theme_version = wp_get_theme()->get( 'Version' );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'evit-fse-theme-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_script( 'evit-fse-theme-main-js', get_template_directory_uri() . '/assets/js/main.js', array( ), '1.0.0', true );

		wp_enqueue_style( 'evit-fse-theme-fonts', evit_fse_theme_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'evit_fse_theme_scripts' );

if ( ! function_exists( 'evit_fse_theme_fonts_url' ) ) :
	/**
	 * Register Google fonts for Evit FSE
	 *
	 * Create your own evit_fse_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function evit_fse_theme_fonts_url() {
		$fonts_url = '';

		/* Translators: If there are characters in your language that are not
		* supported by Kumbh Sans, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$font_families = array( 'Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap' );

		if ( ! empty( $font_families  ) ) {

			$query_args = array(
				'family' => implode( '&family=', $font_families ), //urlencode( implode( '|', $font_families ) ),
				// 'subset' => urlencode( 'latin,latin-ext' ),
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		if ( ! class_exists( 'WPTT_WebFont_Loader' ) ) {
			// Load Google fonts from Local.
			require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
		}

		return esc_url( wptt_get_webfont_url( $fonts_url ) );
	}
endif;
//limit excerpt length
function evit_fse_theme_excerpt_length( $length ){ 

	$excerpt_length = 30;
	if ( is_admin() ) return $length;
	return $excerpt_length;
} 
add_filter('excerpt_length', 'evit_fse_theme_excerpt_length');



function evit_fse_theme_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			evit_fse_theme_fonts_url(),
		)
	);
}
add_action( 'admin_init', 'evit_fse_theme_editor_styles' );

/**
 * Enqueue admin scripts and styles.
 */
function evit_fse_admin_scripts() {

  // Register theme stylesheet.

  $deps = array();


  wp_enqueue_style( 'evit-fse-admin-style', get_stylesheet_directory_uri() . '/assets/css/admin-style.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

}
add_action( 'admin_enqueue_scripts', 'evit_fse_admin_scripts' );


/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/pattern-category.php';
require_once get_template_directory() . '/inc/tgm-plugin/tgmpa-hook.php';

/**
 * Add theme page
 */
function evit_fse_add_menu() {
  add_theme_page( esc_html__( 'Evit FSE Theme', 'evit-fse' ), esc_html__( 'Evit FSE Theme', 'evit-fse' ), 'edit_theme_options', 'evit-fse', 'evit_fse_theme_page_display' );
}
add_action( 'admin_menu', 'evit_fse_add_menu' );
/**
 * Display About page
 */
function evit_fse_theme_page_display() {
  $theme = wp_get_theme();
  include_once 'inc/theme-info.php';
}
