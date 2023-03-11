<?php
/**
 * The theme update logic.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Ona
 * @since 		 1.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( 'Ona_Theme_Update' ) ) {

	/**
	 * Ona_Theme_Update initial setup
	 *
	 * @since 1.6.1
	 */
	class Ona_Theme_Update {

		/**
		 * Class instance.
		 *
		 * @access private
		 * @var $instance Class instance.
		 */
		private static $instance;

		/**
		 * Array of child themes version
		 */
		private static $child_themes_versions = array(
			'ona-creative' 			=> '1.0.6',
			'ona-minimal' 			=> '1.0.8',
			'ona-online-store' 	=> '1.0.3',
			'ona-recipes' 			=> '1.0.4',
			'ona-health' 				=> '1.0.4',
			'ona-coffee-shop' 	=> '1.0.3',
			'ona-travel' 				=> '1.0.3',
			'ona-magazine' 			=> '1.0.2',
			'ona-fashion' 			=> '1.0.4',
			'ona-environmental' => '1.0.2',
			'ona-agency' 				=> '1.0.1',
			'ona-business' 			=> '1.0.2',
			'ona-startup' 			=> '1.0.1',
		);

		/**
		 * If child themes requires update
		 */
		public static $requires_update = array();


		/**
		 * Initiator
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
			if ( is_admin() ) {				
				add_action( 'admin_init', __CLASS__ . '::init', 5 );				
				add_action( 'current_screen', __CLASS__ . '::save_child_themes_versions' );				
			}
		}

		/**
		 * Implement theme update logic.
		 *
		 * @since 1.6.1
		 */
		public static function init() {
			
			// Get auto saved version number.
			$saved_version = get_option( 'ona_theme_version', false );

			// If equals then return.
			if ( version_compare( $saved_version, ONA_VERSION, '=' ) ) {
				return;
			}

			// If updated to 1.2 update headings font setting from H1 customizer setting
			// if ( version_compare( $saved_version, '1.2', '<' ) ) {
			// 	self::v_1_2();
			// }

			// Update auto saved version number and save child themes versions
			update_option( 'ona_theme_version', ONA_VERSION );

		}


		/**
		 * Store the existing child themes versions into a DB
		 */
		public static function save_child_themes_versions() {
			global $current_screen;

			// Run only on Ona admin page
			if ( $current_screen->id !== 'appearance_page_ona-theme' ) {
				return;
			}
			
			$child_themes_versions = array();

			foreach ( self::$child_themes_versions as $child_theme => $new_version ) {
				$theme = wp_get_theme( $child_theme );

				if ( $theme->exists() ) {
					$version = $theme->get( 'Version' );

					if ( version_compare( $version, $new_version, '<' ) ) {
						self::$requires_update[] = $child_theme;
					}

					$child_themes_versions[$child_theme] = $version;
				}
			}
			
			update_option( 'ona_child_themes_versions', $child_themes_versions );			
		}


		/**
		* Updates headings font setting from H1 customizer setting.
		* 
		* @since 1.2
		*/
		public static function v_1_2() {	

		}
		
	}
}

/**
 * Kicking this off by calling 'get_instance()' method
 */
Ona_Theme_Update::get_instance();