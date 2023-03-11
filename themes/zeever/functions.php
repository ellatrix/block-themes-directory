<?php
/**
 * Zeever functions and definitions
 *
 * @author Jegstudio
 * @package zeever
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'ZEEVER_VERSION' ) || define( 'ZEEVER_VERSION', '1.0.9' );
defined( 'ZEEVER_DIR' ) || define( 'ZEEVER_DIR', trailingslashit( get_template_directory() ) );
defined( 'ZEEVER_URI' ) || define( 'ZEEVER_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Zeever\Init::instance();
