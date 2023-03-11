<?php
/**
 * Panel_Plugins_Data
 *
 * @package Kemet
 */

if ( ! class_exists( 'Kemet_Plugins_Manager' ) ) {

	/**
	 * Kemet Panel
	 *
	 * @since 1.0.0
	 */
	class Kemet_Plugins_Manager {

		/**
		 * Member Variable
		 *
		 * @var object instance
		 */
		private static $instance;

		/**
		 * Instance
		 *
		 * @return object
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 *  Constructor
		 */
		public function __construct() {
			add_action( 'wp_ajax_kemet-install-plugin', array( $this, 'ajax_install_plugin' ) );
			add_action( 'wp_ajax_kemet-activate-plugin', array( $this, 'activate_plugin' ) );
			add_action( 'wp_ajax_kemet-deactivate-plugin', array( $this, 'deactivate_plugin' ) );
		}

		/**
		 * Check if Kemet is installed
		 *
		 * @param string $plugin_path plugin path.
		 * @return boolean
		 */
		public function is_plugin_installed( $plugin_path ) {
			$plugins = get_plugins();

			return isset( $plugins[ $plugin_path ] );
		}

		/**
		 * deactivate_plugin
		 */
		public function deactivate_plugin() {
			check_ajax_referer( 'kemet-plugins-manager', 'nonce' );

			$path = isset( $_POST['path'] ) ? sanitize_text_field( wp_unslash( $_POST['path'] ) ) : '';

			if ( $path ) {
				if ( is_plugin_active( $path ) ) {
					deactivate_plugins( $path );
					wp_send_json_success();
				}
			}

			wp_send_json_error();
		}

		/**
		 * activate_plugin
		 */
		public function activate_plugin() {
			check_ajax_referer( 'kemet-plugins-manager', 'nonce' );

			$path = isset( $_POST['path'] ) ? sanitize_text_field( wp_unslash( $_POST['path'] ) ) : '';

			if ( $path ) {
				if ( ! is_plugin_active( $path ) ) {
					activate_plugin( $path );
					wp_send_json_success( $path );
				}
			}

			wp_send_json_error();
		}

		/**
		 * install_plugin
		 */
		public function ajax_install_plugin() {
			check_ajax_referer( 'kemet-plugins-manager', 'nonce' );

			$slug = isset( $_POST['slug'] ) ? sanitize_text_field( wp_unslash( $_POST['slug'] ) ) : '';

			if ( $slug ) {
				if ( ! is_plugin_active( $slug ) ) {
					$install = $this->install_plugin( $slug );
					if ( $install ) {
						wp_send_json_success();
					}
				}
			}

			wp_send_json_error();
		}

		/**
		 * install_plugin
		 *
		 * @param  string $plugin_slug
		 */
		public function install_plugin( $plugin_slug ) {
			include_once ABSPATH . 'wp-admin/includes/plugin-install.php';
			$api = plugins_api(
				'plugin_information',
				array(
					'slug'   => $plugin_slug,
					'fields' => array( 'sections' => false ),
				)
			);

			if ( is_wp_error( $api ) ) {
				return false;
			}
			if ( ! class_exists( 'Plugin_Upgrader' ) ) {
				require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
			}
			if ( ! class_exists( 'Kemet_Plugin_Installer_Skin' ) ) {
				require_once KEMET_THEME_DIR . 'functions/classes/plugins-manager/class-kemet-plugin-installer-skin.php';
			}
			$upgrader       = new Plugin_Upgrader(
				new Kemet_Plugin_Installer_Skin(
					array(
						'nonce'  => 'install-plugin_' . $plugin_slug,
						'plugin' => $plugin_slug,
						'api'    => $api,
					)
				)
			);
			$install_result = $upgrader->install( $api->download_link );
			if ( ! $install_result || is_wp_error( $install_result ) ) {
				// $install_result can be false if the file system isn't writeable.
				return false;
			}
			return true;
		}
	}
}

new Kemet_Plugins_Manager();
