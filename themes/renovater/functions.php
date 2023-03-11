<?php
/**
 * Renovater functions and definitions
 *
 * @author Jegstudio
 * @package renovater
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'RENOVATER_VERSION' ) || define( 'RENOVATER_VERSION', '1.0.4' );
defined( 'RENOVATER_DIR' ) || define( 'RENOVATER_DIR', trailingslashit( get_template_directory() ) );
defined( 'RENOVATER_URI' ) || define( 'RENOVATER_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Renovater\Init::instance();
