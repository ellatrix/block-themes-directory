<?php
/**
 * Hypebiz functions and definitions
 *
 * @author Jegstudio
 * @package hypebiz
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'HYPEBIZ_VERSION' ) || define( 'HYPEBIZ_VERSION', '1.0.3' );
defined( 'HYPEBIZ_DIR' ) || define( 'HYPEBIZ_DIR', trailingslashit( get_template_directory() ) );
defined( 'HYPEBIZ_URI' ) || define( 'HYPEBIZ_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Hypebiz\Init::instance();
