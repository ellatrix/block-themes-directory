<?php
/**
 * Restance functions and definitions
 *
 * @author Jegstudio
 * @package restance
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'RESTANCE_VERSION' ) || define( 'RESTANCE_VERSION', '1.0.3' );
defined( 'RESTANCE_DIR' ) || define( 'RESTANCE_DIR', trailingslashit( get_template_directory() ) );
defined( 'RESTANCE_URI' ) || define( 'RESTANCE_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Restance\Init::instance();
