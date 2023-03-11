<?php
/**
 * Kemet_After_Setup_Theme initial setup
 *
 * @package     Kemet
 * @author      Kemet
 * @copyright   Copyright (c) 2019, Kemet
 * @link        https://kemet.io/
 */

if ( ! class_exists( 'Kemet_After_Setup_Theme' ) ) {

	/**
	 * Kemet_After_Setup_Theme initial setup
	 */
	class Kemet_After_Setup_Theme {

		/**
		 * Instance
		 *
		 * @var $instance
		 */
		private static $instance;

		/**
		 * Initiator
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
		 * Constructor
		 */
		public function __construct() {
			add_action( 'after_setup_theme', array( $this, 'setup_theme' ), 2 );
		}

		/**
		 * Setup theme
		 */
		function setup_theme() {

			// Adding support for core block visual styles.
			add_theme_support( 'wp-block-styles' );

			// Adding support for responsive embedded content.
			add_theme_support( 'responsive-embeds' );

			// Adding support for nav menus
			add_theme_support( 'block-nav-menus' );

			// Add support for editor styles.
			add_theme_support( 'editor-styles' );

			// Language support
			load_theme_textdomain( 'kemet', KEMET_THEME_DIR . 'languages' );
		}
	}
}

Kemet_After_Setup_Theme::get_instance();
