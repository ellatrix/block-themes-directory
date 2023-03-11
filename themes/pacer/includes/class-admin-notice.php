<?php
/**
 * Admin notice class
 *
 * @package Enovetor/Pacer/Classes
 */

namespace Enovetor\Pacer;

defined( 'ABSPATH' ) || exit;

/**
 * The main class for displaying admin notice
 */
class Admin_Notice {
	/**
	 * Register class hooks
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function __construct() {
		// register action hooks.
		add_action( 'admin_notices', array( $this, 'admin_notices' ) );
	}

	/**
	 * Check if the plugin is installed
	 *
	 * @since 1.0.0
	 * @param string $plugin basename of a plugin.
	 * @return bool
	 */
	public function is_plugin_active( $plugin ) {
		// Make sure we have the plugin-checking functions we need.
		if ( ! function_exists( 'is_plugin_active' ) ) {
			include_once ABSPATH . 'wp-admin/includes/plugin.php';
		}
		return is_plugin_active( $plugin );
	}

	/**
	 * Display admin notices
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function admin_notices() {
		global $wp_version;

		if ( version_compare( $wp_version, '5.8.2' ) > 0 ) {
			return;
		}

		if ( ! $this->is_plugin_active( 'gutenberg/gutenberg.php' ) ) {
			printf(
				'<div class="%1$s"><p><strong>%2$s</strong> %3$s</p></div>',
				esc_attr( 'notice notice-error' ),
				esc_html__( 'Pacer', 'pacer' ),
				esc_html__( 'theme uses Full Site Editing, which requires the Gutenberg plugin to be activated.', 'pacer' )
			);
		}
	}
}
