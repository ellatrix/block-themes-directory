<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blockette
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'BLOCKETTE_VERSION', wp_get_theme()->get( 'Version' ) );
/**
 * The theme directory.
 *
 * @since 1.0.0
 */
define( 'BLOCKETTE_DIR', trailingslashit( get_template_directory() ) );
/**
 * The theme uri.
 *
 * @since 1.0.0
 */
define( 'BLOCKETTE_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Blockette\Init::instance();
