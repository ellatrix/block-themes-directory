<?php
/**
 * Kemet functions and definitions.
 *
 * @see https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kemet
 */

/**
 * Define Constants.
 */
define( 'KEMET_THEME_VERSION', wp_get_theme( 'Kemet' )->get( 'Version' ) );
define( 'KEMET_THEME_DIR', get_template_directory() . '/' );
define( 'KEMET_THEME_URI', get_template_directory_uri() . '/' );
define( 'KEMET_THEME_SETTINGS', 'kemet-settings' );

/**
 * Functions.
 */
require_once KEMET_THEME_DIR . 'inc/blocks/class-kemet-blocks-settings.php';
require_once KEMET_THEME_DIR . 'functions/classes/class-kemet-enqueue-scripts.php';
require_once KEMET_THEME_DIR . 'inc/class-kemet-after-setup-theme.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings.
	 */
	require_once KEMET_THEME_DIR . 'functions/classes/class-kemet-admin-settings.php';
	// Fonts Data.
	require_once KEMET_THEME_DIR . 'inc/class-kemet-font-families.php';
}

// Required files.
require_once KEMET_THEME_DIR . 'functions/classes/plugins-manager/class-kemet-plugins-manager.php';
require_once KEMET_THEME_DIR . 'inc/kemet-panel/class-kemet-panel.php';
require_once KEMET_THEME_DIR . 'inc/blocks-styles.php';

// Add Kemet block patterns
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Compatibility.
 */
require_once KEMET_THEME_DIR . 'inc/compatibility/woocommerce/class-kemet-woocommerce.php';
