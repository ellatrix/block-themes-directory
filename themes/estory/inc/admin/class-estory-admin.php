<?php
/**
 * eStory main admin class.
 *
 * @package eStory
 */

defined( 'ABSPATH' ) || exit;

/**
 * Class eStory_Admin
 */
class eStory_Admin {

	/**
	 * eStory_Admin constructor.
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Localize array for import button AJAX request.
	 */
	public function enqueue_scripts() {
		wp_enqueue_style( 'estory-admin-style', get_template_directory_uri() . '/inc/admin/css/admin.css', array(), ESTORY_VERSION );

        wp_enqueue_script( 'estory-plugin-install-helper', ESTORY_PARENT_INC_URI . '/admin/js/plugin-handle.js', array( 'jquery' ), ESTORY_VERSION, true );

		$welcome_data = array(
			'uri'      => esc_url( admin_url( '/themes.php?page=demo-importer&browse=all&estory-hide-notice=welcome' ) ),
			// Check if TDI is installed but not activated or not installed at all or installed and activated.
			'btn_text' => ! file_exists( WP_PLUGIN_DIR . '/themegrill-demo-importer/themegrill-demo-importer.php' ) ? esc_html__( 'Processing...', 'estory' ) : ( file_exists( WP_PLUGIN_DIR . '/themegrill-demo-importer/themegrill-demo-importer.php' ) && is_plugin_inactive( 'themegrill-demo-importer/themegrill-demo-importer.php' ) ? esc_html__( 'Activating...', 'estory' ) : esc_html__( 'Redirecting...', 'estory' ) ),
			'nonce'    => wp_create_nonce( 'estory_demo_import_nonce' ),
		);

		wp_localize_script( 'estory-plugin-install-helper', 'estoryRedirectDemoPage', $welcome_data );
	}
}

new eStory_Admin();
