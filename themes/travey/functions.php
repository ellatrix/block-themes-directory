<?php
/**
 * Travey functions and definitions
 *
 * @author Jegstudio
 * @package travey
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'TRAVEY_VERSION' ) || define( 'TRAVEY_VERSION', '1.0.3' );
defined( 'TRAVEY_DIR' ) || define( 'TRAVEY_DIR', trailingslashit( get_template_directory() ) );
defined( 'TRAVEY_URI' ) || define( 'TRAVEY_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Travey\Init::instance();
