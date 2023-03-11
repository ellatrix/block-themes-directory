<?php

if ( ! function_exists( 'vision_fse_theme_support' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since My theme name 1.0
     *
     * @return void
     */
    function vision_fse_theme_support() {

        load_theme_textdomain( 'vision-fse', get_template_directory() . '/languages' );

        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_theme_support('editor-styles');

        add_theme_support('block-nav-menus');

        // Enqueue editor styles.
        add_editor_style('./style.css');

        register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'vision-fse' ) ) );

    }

endif;
add_action( 'after_setup_theme', 'vision_fse_theme_support' );


/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

/**
 * Enqueue scripts and styles.
 */
function vision_fse_enqueue_scripts() {

  // Register theme stylesheet.

  // FontAwesome.
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all.css', array(), '5.15.3', 'all' );

  wp_enqueue_style('vision-fse-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

   wp_enqueue_script( 'vision-fse-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'vision_fse_enqueue_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function vision_fse_admin_scripts() {

  // Register theme stylesheet.

  $deps = array();

  // FontAwesome.
  wp_enqueue_style( 'vision-fse-admin-style', get_stylesheet_directory_uri() . '/assets/css/admin-style.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

}
add_action( 'admin_enqueue_scripts', 'vision_fse_admin_scripts' );


function vision_fse_block_assets() {
  $min = '';
  // FontAwesome.
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );
}
add_action( 'enqueue_block_assets', 'vision_fse_block_assets' );


/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/pattern-category.php';

// tgm-plugin
require get_template_directory() . '/inc/tgm-plugin/tgmpa-hook.php';

/**
 * Add theme page
 */
function vision_fse_add_menu() {
  add_theme_page( esc_html__( 'Vision FSE Theme', 'vision-fse' ), esc_html__( 'Vision FSE Theme', 'vision-fse' ), 'edit_theme_options', 'vision-fse', 'vision_fse_theme_page_display' );
}
add_action( 'admin_menu', 'vision_fse_add_menu' );

/**
 * Display About page
 */
function vision_fse_theme_page_display() {
  $theme = wp_get_theme();
  include_once 'inc/theme-info.php';
}
