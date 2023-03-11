<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package estory
 * @since 1.0.0
 */

/**
 * Define constants.
 */
define( 'ESTORY_PARENT_DIR', get_template_directory() );
define( 'ESTORY_PARENT_URI', get_template_directory_uri() );
define( 'ESTORY_PARENT_INC_DIR', ESTORY_PARENT_DIR . '/inc' );
define( 'ESTORY_PARENT_INC_URI', ESTORY_PARENT_URI . '/inc' );

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'ESTORY_VERSION', wp_get_theme()->get( 'Version' ) );

if( ! function_exists( 'estory_setup' ) ) :

    /**
     * Add theme support.
     */
    function estory_setup() {

        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_theme_support( 'editor-styles' );

        add_editor_style( './assets/css/editor-style.css' );

    }

endif;

add_action( 'after_setup_theme', 'estory_setup' );

if ( ! function_exists( 'estory_styles' ) ) :

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function estory_styles() {

	wp_enqueue_style(
		'estory-style',
		get_stylesheet_uri(),
		array(),
		ESTORY_VERSION
	);

    // Add styles inline.
    wp_add_inline_style( 'estory-style', estory_get_font_face_styles() );
}

endif;

add_action( 'wp_enqueue_scripts', 'estory_styles' );

if ( ! function_exists( 'estory_editor_styles' ) ) :

    /**
     * Enqueue editor styles.
     *
     * @since Twenty Twenty-Two 1.0
     *
     * @return void
     */
    function estory_editor_styles() {

        // Add styles inline.
        wp_add_inline_style( 'wp-block-library', estory_get_font_face_styles() );
    }

endif;

add_action( 'admin_init', 'estory_editor_styles' );

if ( ! function_exists( 'estory_get_font_face_styles' ) ) :

    function estory_get_font_face_styles() {

        return "
            @font-face {
                font-family: 'DM Sans';
                font-style: normal;
                font-weight: 400;
                src: url('" . get_theme_file_uri( 'assets/fonts/DMSans-Regular.woff') . "') format('woff');
            }
            
             @font-face {
                font-family: 'Marcellus';
                font-style: normal;
                font-weight: 400;
                src: url('" . get_theme_file_uri( 'assets/fonts/Marcellus-Regular.woff') . "') format('woff');
            }
            ";
    }

endif;

if( ! function_exists( 'estory_webfonts' ) ) :

    function estory_webfonts() {
        ?>
        <link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/DMSans-Regular.woff' ) ); ?>" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/Marcellus-Regular.woff' ) ); ?>" as="font" type="font/woff" crossorigin>
        <?php
    }

endif;

add_action( 'wp_head', 'estory_webfonts' );

// Add block patterns
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

// Admin screen.
if ( is_admin() ) {
    // Theme options page.
    require ESTORY_PARENT_INC_DIR . '/admin/class-estory-admin.php';
    require ESTORY_PARENT_INC_DIR . '/admin/class-estory-welcome-notice.php';
}
