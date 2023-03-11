<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dablam
 * @subpackage dablam
 * @since 1.0.0
 */


if ( ! function_exists( 'dablam_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since 1.0.0
     *
     * @return void
     */
    function dablam_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * to change 'dablam' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'dablam' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );
        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );
        // Add support for editor styles.
        add_theme_support( 'editor-styles' );
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
        // Add support for experimental link color control.
        add_theme_support( 'experimental-link-color' );
        // Add support for custom units.
        add_theme_support( 'custom-units' );
    }
}
add_action( 'after_setup_theme', 'dablam_setup' );
if ( ! function_exists( 'dablam_styles' ) ) :
    /**
     * Enqueue styles.
     *
     * @since dablam 1.0
     *
     * @return void
     */
    function dablam_styles() {
        // Register theme stylesheet.
        wp_register_style(
            'dablam-style',
            get_template_directory_uri() . '/style.css',
            array(),
            wp_get_theme()->get( 'Version' )
        );
        
        // Add styles inline.
        wp_add_inline_style( 'dablam-style', dablam_get_font_face_styles() );
        // Enqueue theme stylesheet.
        wp_enqueue_style( 'dablam-style' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'dablam_styles' );
if ( ! function_exists( 'dablam_editor_styles' ) ) :
    /**
     * Enqueue editor styles.
     *
     * @since dablam 1.0
     *
     * @return void
     */
    function dablam_editor_styles() {
        // Add styles inline.
        wp_add_inline_style( 'wp-block-library', dablam_get_font_face_styles() );
    }
endif;
add_action( 'admin_init', 'dablam_editor_styles' );


if ( ! function_exists( 'dablam_get_font_face_styles' ) ) :
    /**
     * Get font face styles.
     * Called by functions dablam_styles() and dablam_editor_styles() above.
     *
     * @since dablam 1.0
     *
     * @return string
     */
    function dablam_get_font_face_styles() {
        return "
        @font-face{
            font-family: 'Source Serif Pro';
            font-weight: 200 900;
            font-style: normal;
            font-stretch: normal;
            font-display: swap;
            src: url('" . get_theme_file_uri( 'assets/fonts/source-serif/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
        }
        @font-face{
            font-family: 'Source Serif Pro';
            font-weight: 200 900;
            font-style: italic;
            font-stretch: normal;
            font-display: swap;
            src: url('" . get_theme_file_uri( 'assets/fonts/source-serif/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
        }
        @font-face{
            font-family: 'Gilda Display';
            font-weight: regular;
            font-style: normal;
            font-stretch: normal;
            font-display: swap;
            src: url('" . get_theme_file_uri( 'assets/fonts/gilda-display/GildaDisplay-Regular.woff' ) . "') format('woff');
        }
        @font-face{
            font-family: 'Nunito Sans';
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            src: url('" . get_theme_file_uri( 'assets/fonts/nunito-sans/NunitoSans-Regular.woff' ) . "') format('woff');
        }
        @font-face{
            font-family: 'Nunito Sans';
            font-weight: normal;
            font-style: italic;
            font-stretch: normal;
            src: url('" . get_theme_file_uri( 'assets/fonts/nunito-sans/NunitoSans-Italic.woff' ) . "') format('woff');
        }
        @font-face{
            font-family: 'Nunito Sans';
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            src: url('" . get_theme_file_uri( 'assets/fonts/nunito-sans/NunitoSans-SemiBold.woff' ) . "') format('woff');
        }
        @font-face{
            font-family: 'Nunito Sans';
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            src: url('" . get_theme_file_uri( 'assets/fonts/nunito-sans/NunitoSans-Bold.woff' ) . "') format('woff');
        }
        @font-face{
            font-family: 'Kristi';
            font-weight: regular;
            font-style: normal;
            font-stretch: normal;
            font-display: swap;
            src: url('" . get_theme_file_uri( 'assets/fonts/kristi/kristi-regular.woff' ) . "') format('woff');
        }
        @font-face{
            font-family: 'Inconsolata';
            font-weight: regular;
            font-style: normal;
            font-stretch: normal;
            font-display: swap;
            src: url('" . get_theme_file_uri( 'assets/fonts/inconsolata/Inconsolata-Regular.woff' ) . "') format('woff');
        }
        @font-face{
            font-family: 'Inconsolata';
            font-weight: bold;
            font-style: normal;
            font-stretch: normal;
            font-display: swap;
            src: url('" . get_theme_file_uri( 'assets/fonts/inconsolata/Inconsolata-Bold.woff' ) . "') format('woff');
        }
        @font-face{
            font-family: 'Bestermind';
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            src: url('" . get_theme_file_uri( 'assets/fonts/bestermind/BestermindRegular.woff' ) . "') format('woff');
        }
        ";
    } 
endif;

// Enqueue fonts.
add_action( 'wp_enqueue_scripts', 'dablam_enqueue_fonts' );
function dablam_enqueue_fonts() {
	wp_enqueue_style( 'dablam-fonts', dablam_fonts_url(), array(), null );

}

// Define fonts.
function dablam_fonts_url() {

	$fonts = array(
		'family=Outfit:wght@100;200;300;400;500;600;700;800;900',
        'family=Caveat:wght@400;700'
	);

	// Make a single request for all Google Fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $fonts ) ) . '&display=swap' );

}
/**
 * Show '(no title)' in frontend if post has no title to make it selectable
 */
add_filter(
    'the_title',
    function( $title ) {
        if ( ! is_admin() && empty( $title ) ) {
            $title = __( '(no title)', 'dablam' );
        }
        return $title;
    }
);

// Add block patterns
require get_template_directory() . '/block-patterns.php';