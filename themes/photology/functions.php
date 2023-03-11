<?php
/**
 * Photology functions and definitions
 *
 * @author Jegstudio
 * @package photology
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'PHOTOLOGY_VERSION' ) || define( 'PHOTOLOGY_VERSION', '1.1.2' );
defined( 'PHOTOLOGY_DIR' ) || define( 'PHOTOLOGY_DIR', trailingslashit( get_template_directory() ) );
defined( 'PHOTOLOGY_URI' ) || define( 'PHOTOLOGY_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Photology\Init::instance();
