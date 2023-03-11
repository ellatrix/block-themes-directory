<?php
/**
* BlockMe functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package BlockMe WordPress Theme
* @copyright Copyright (C) 2023 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'blockme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blockme_setup() {

    // Make theme available for translation.
    load_theme_textdomain( 'blockme', get_template_directory() . '/languages' );

    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'blockme-720w-540h-image', 720, 540, true );
    }
    
    // Enqueue editor styles.
    add_editor_style( 'assets/css/editor-style.css' );

}
endif;
add_action( 'after_setup_theme', 'blockme_setup' );


// Enqueue styles
function blockme_scripts() {
    wp_enqueue_style('blockme-maincss', get_stylesheet_uri(), array(), NULL);
}
add_action( 'wp_enqueue_scripts', 'blockme_scripts' );


// Register a Block Pattern Category.
if ( function_exists( 'register_block_pattern_category' ) ) {
    function blockme_register_block_pattern_category() {
        register_block_pattern_category( 'blockme', array( 'label' => esc_html__( 'BlockMe', 'blockme' ) ) ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
    }
    add_action( 'init', 'blockme_register_block_pattern_category' );
}


// Make custom sizes selectable from WordPress admin.
function blockme_custom_image_sizes( $size_names ) {
    $new_sizes = array(
        'blockme-720w-540h-image' => esc_html__( 'Featured Image', 'blockme' )
    );
    return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'blockme_custom_image_sizes' );


// Change excerpt length
function blockme_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 25;
    return apply_filters( 'blockme_excerpt_length', $read_more_length );
}
add_filter('excerpt_length', 'blockme_excerpt_length');


// Change excerpt more word
function blockme_excerpt_more($more) {
    if ( is_admin() ) {
        return $more;
    }
    return '...';
}
add_filter('excerpt_more', 'blockme_excerpt_more');