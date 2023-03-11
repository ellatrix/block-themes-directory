<?php
/**
 * Vorfolio functions and definitions
 *
 * @author Jegstudio
 * @package vorfolio
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'VORFOLIO_VERSION' ) || define( 'VORFOLIO_VERSION', '1.0.1' );
defined( 'VORFOLIO_DIR' ) || define( 'VORFOLIO_DIR', trailingslashit( get_template_directory() ) );
defined( 'VORFOLIO_URI' ) || define( 'VORFOLIO_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Vorfolio\Init::instance();
