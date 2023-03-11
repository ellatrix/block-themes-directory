<?php
/**
 * Accountra functions and definitions
 *
 * @author Jegstudio
 * @package accountra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'ACCOUNTRA_VERSION' ) || define( 'ACCOUNTRA_VERSION', '1.0.2' );
defined( 'ACCOUNTRA_DIR' ) || define( 'ACCOUNTRA_DIR', trailingslashit( get_template_directory() ) );
defined( 'ACCOUNTRA_URI' ) || define( 'ACCOUNTRA_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Accountra\Init::instance();
