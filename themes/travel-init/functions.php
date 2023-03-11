<?php

/**
 * Functions and definitions
 * 
 * @package travel-Init
 * 
 * @since 1.0.0
 */
function travel_init_block_editor_styles() {

	// Block styles.
	wp_enqueue_style( 'travel-init-font-awesome', get_theme_file_uri( '/assets/fonts/font-awesome/css/fontawesome-all.min.css' ) );

}
add_action( 'enqueue_block_editor_assets', 'travel_init_block_editor_styles' );

if (!function_exists('travel_init_setup')) :

    /**
     * Add theme support.
     */
    function travel_init_setup()
    {
        // Add support for block styles.
        add_theme_support('wp-block-styles');

        add_theme_support('block-nav-menus');

        // Enqueue editor styles.
        add_theme_support('editor-styles');

        add_editor_style('./style.css');
    }

endif;
add_action('after_setup_theme', 'travel_init_setup');

function travel_init_register_block_pattern_categories(){
    register_block_pattern_category(
        'wensolutions',
        array( 'label' => __( 'Travel Init', 'travel-init' ) )
    );

    register_block_pattern_category(
        'travel-init-homepage',
        array( 'label' => __( 'Homepage Patterns', 'travel-init' ) )
    );

    register_block_pattern_category(
        'travel-init-headers',
        array( 'label' => __( 'Navigation Patterns', 'travel-init' ) )
    );
}
add_action('init', 'travel_init_register_block_pattern_categories');

if (!function_exists('travel_init_styles')) :

    /**
     * Enqueue the CSS files.
     *
     * @since 1.0.0
     *
     * @return void
     */

    function travel_init_styles()
    {
        wp_enqueue_style('travel-init-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_theme_file_path('style.css')));

        //contact-form style
        wp_enqueue_style('travel-init', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('/assets/css/style.css')), 'all');

        wp_enqueue_script( 'travel-init-script', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), '1.0.0', true );
    }

endif;

add_action('wp_enqueue_scripts', 'travel_init_styles');
// tgm-plugin
require get_template_directory() . '/tgm-plugin/tgmpa-hook.php';



