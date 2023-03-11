<?php
/**
 * Theme functions and definitions.
 * @author     xideathemes
 * @copyright  (c) Copyright by Xidea Themes
 * @link       https://xideathemes.com
 * @package     Marenda Block Theme
 * @since         1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

// Definitions
define( 'MARENDA_VERSION', '1.0.0' );
define( 'MARENDA_DIR', get_template_directory() );
define( 'MARENDA_URI', get_template_directory_uri() );


/*--------------------------------------------------------------
# Enqueue Styles
--------------------------------------------------------------*/
if ( ! function_exists( 'marenda_enqueue_styles' ) ) :

	function marenda_enqueue_styles() {

		wp_register_style( 'marenda-custom', MARENDA_URI . '/assets/css/marenda_custom.css', [], MARENDA_VERSION);
		wp_enqueue_style( 'marenda-custom' );

	}

	add_action( 'wp_enqueue_scripts', 'marenda_enqueue_styles' );

endif;

/*--------------------------------------------------------------
# Add TGMPA
--------------------------------------------------------------*/
require get_template_directory() . '/inc/tgmpa.php';