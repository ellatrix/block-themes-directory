<?php
/**
 * Startupzy functions and definitions
 *
 * @author Jegstudio
 * @package startupzy
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'STARTUPZY_VERSION' ) || define( 'STARTUPZY_VERSION', '1.1.0' );
defined( 'STARTUPZY_DIR' ) || define( 'STARTUPZY_DIR', trailingslashit( get_template_directory() ) );
defined( 'STARTUPZY_URI' ) || define( 'STARTUPZY_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Startupzy\Init::instance();
