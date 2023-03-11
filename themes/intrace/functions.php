<?php
/**
 * Intrace functions and definitions
 *
 * @author Jegstudio
 * @package intrace
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'INTRACE_VERSION' ) || define( 'INTRACE_VERSION', '1.0.9' );
defined( 'INTRACE_DIR' ) || define( 'INTRACE_DIR', trailingslashit( get_template_directory() ) );
defined( 'INTRACE_URI' ) || define( 'INTRACE_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Intrace\Init::instance();
