<?php
/**
 * Waterlava functions and definitions
 *
 * @author Jegstudio
 * @package waterlava
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'WATERLAVA_VERSION' ) || define( 'WATERLAVA_VERSION', '1.0.5' );
defined( 'WATERLAVA_DIR' ) || define( 'WATERLAVA_DIR', trailingslashit( get_template_directory() ) );
defined( 'WATERLAVA_URI' ) || define( 'WATERLAVA_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Waterlava\Init::instance();
