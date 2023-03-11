<?php
/**
 * Panel_Plugins_Data
 *
 * @package Kemet Addons
 */

if ( ! class_exists( 'Kemet_Panel_Plugins_Data' ) ) {

	/**
	 * Kemet Panel
	 *
	 * @since 1.0.0
	 */
	class Kemet_Panel_Plugins_Data {

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
			add_action( 'wp_ajax_kemet-plugins-status', array( $this, 'get_plugins_status' ) );
		}

		/**
		 * get_plugins
		 *
		 * @return array
		 */
		public static function get_recommended_plugins() {
			$plugins = array(
				'elementor',
				'premium-addons-for-elementor',
				'premium-blocks-for-gutenberg',
			);

			return $plugins;
		}

		/**
		 * get_plugins
		 *
		 * @return array
		 */
		public static function get_plugins() {
			$plugins = array(
				'elementor',
				'premium-addons-for-elementor',
				'premium-blocks-for-gutenberg',
			);

			return $plugins;
		}

		/**
		 * Call plugins api
		 *
		 * @param string $slug plugin slug.
		 * @return array
		 */
		public function call_plugin_api( $slug ) {
			include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

			$call_api = get_transient( 'about_plugin_info_' . $slug );

			if ( false === $call_api ) {
				$call_api = plugins_api(
					'plugin_information',
					array(
						'slug'   => $slug,
						'fields' => array(
							'downloaded'        => false,
							'rating'            => false,
							'description'       => true,
							'short_description' => true,
							'donate_link'       => false,
							'tags'              => false,
							'sections'          => true,
							'homepage'          => true,
							'added'             => false,
							'last_updated'      => false,
							'compatibility'     => false,
							'tested'            => false,
							'requires'          => false,
							'downloadlink'      => false,
							'icons'             => true,
							'banners'           => true,
							'name'              => true,
						),
					)
				);
				set_transient( 'about_plugin_info_' . $slug, $call_api, 30 * MINUTE_IN_SECONDS );
			}

			return $call_api;
		}

		/**
		 * get_plugins_data
		 *
		 * @return array
		 */
		public function get_plugins_data() {
			$plugins = self::get_plugins();
			$data    = array();
			foreach ( $plugins as $plugin ) {
				$plugin_data     = $this->call_plugin_api( $plugin );
				$plugin_banner   = isset( $plugin_data->banners ) ? $plugin_data->banners['high'] : '';
				$data[ $plugin ] = array(
					'name'        => isset( $plugin_data->name ) ? $plugin_data->name : '',
					'description' => isset( $plugin_data->short_description ) ? $plugin_data->short_description : '',
					'path'        => $plugin . '/' . $plugin . '.php',
					'banner'      => $plugin_banner,
				);
			}

			return $data;
		}

		/**
		 * get_plugins_status
		 */
		public function get_plugins_status() {
			check_ajax_referer( 'kemet-panel', 'nonce' );
			$status = $this->plugins_status();
			wp_send_json_success( $status );
		}

		/**
		 * get_plugins_status
		 */
		public function plugins_status() {
			$plugins = self::get_plugins();
			$status  = array();
			foreach ( $plugins as $plugin ) {
				$plugin_path = $plugin . '/' . $plugin . '.php';
				if ( Kemet_Plugins_Manager::get_instance()->is_plugin_installed( $plugin_path ) ) {
					if ( is_plugin_active( $plugin_path ) ) {
						$status[ $plugin ] = 'deactivate';
					} else {
						$status[ $plugin ] = 'activate';
					}
				} else {
					if ( current_user_can( 'install_plugins' ) ) {
						$status[ $plugin ] = 'install';
					}
				}
			}
			return $status;
		}
	}
}

new Kemet_Panel_Plugins_Data();
