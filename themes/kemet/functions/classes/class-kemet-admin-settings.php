<?php
/**
 * Admin settings helper
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package     Kemet
 * @author      Kemet
 * @copyright   Copyright (c) 2019, Kemet
 * @link        https://kemet.io/
 * @since       Kemet 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Kemet_Admin_Settings' ) ) {

	/**
	 * Kemet Admin Settings
	 */
	class Kemet_Admin_Settings {


		/**
		 * View all actions
		 *
		 * @var array $view_actions
		 */
		public static $view_actions = array();

		/**
		 * Menu page title
		 *
		 * @var array $menu_page_title
		 */
		public static $menu_page_title = 'Kemet Theme';

		/**
		 * Page title
		 *
		 * @var array $page_title
		 */
		public static $page_title = 'kemet';

		/**
		 * Plugin slug
		 *
		 * @var array $plugin_slug
		 */
		public static $plugin_slug = 'kemet';

		/**
		 * Constructor
		 */
		public function __construct() {
			if ( ! is_admin() ) {
				return;
			}
			add_action( 'admin_menu', array( $this, 'register_kemet_custom_menu_page' ), 1 );
			add_action( 'admin_menu', array( $this, 'remove_kemet_submenu_menu' ), 99 );
		}

		/**
		 * Rwmove Kemet submenu Item
		 *
		 * @return void
		 */
		public function remove_kemet_submenu_menu() {
			if ( apply_filters( 'enable_kemet_admin_menu_item', false ) ) {
				remove_submenu_page( 'kemet_panel', 'kemet_panel' );
			}
		}

		/**
		 * Add Kemet menu Item
		 *
		 * @return void
		 */
		public function register_kemet_custom_menu_page() {
			if ( apply_filters( 'enable_kemet_admin_menu_item', false ) ) {
				$icon = 'data:image/svg+xml;base64,PHN2ZyBjbGFzc05hbWU9ImttdC1zdmctaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMyA1OC4wNCI+PHN0eWxlPi5jbHMtMXtmaWxsOiNmZmZmZmY7fTwvc3R5bGU+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMSwyOFY0NEgyLjU5YzcuNDYsMCwxMi43MS03LjE2LDE0Ljc5LTIwLjE1bC4zLTEuODVIMXYzSDEzLjE1QzEyLDMwLjY4LDkuNTQsMzguMzcsNCwzOS41NVYyOFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xIDAuMDQpIiAvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTQsMTIuMzZBOC4zMiw4LjMyLDAsMCwxLDUuNzksNy4ybDUuMTEsNS4zMmEyLjU2LDIuNTYsMCwwLDAsMS42NSwxLDEuNSwxLjUsMCwwLDAsMS0uMzlsLjE0LS4xM0wxOS4yMSw3LjJBOC4zMiw4LjMyLDAsMCwxLDIxLDEyLjM2VjEzaDN2LS42NEExMS41OSwxMS41OSwwLDAsMCwyMS4yOCw0LjlMMjMuOSwyLjEzLDIxLjY0LDAsMTksMi44QTExLjQzLDExLjQzLDAsMCwwLDYsMi44QzQuNTQsMS4yLDMuNCwwLDMuMzYsMEwxLjEsMi4xMywzLjcyLDQuOUExMS41OSwxMS41OSwwLDAsMCwxLDEyLjM2VjEzSDRabTguODEtOC43MUE4LjM0LDguMzQsMCwwLDEsMTcuMSw0LjgzTDEyLjgxLDkuMzQsOC41Myw0LjgzQTguMzEsOC4zMSwwLDAsMSwxMi44MSwzLjY1WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEgMC4wNCkiIC8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTgsNTUsMTQuNjQsNDQuOTJhMjkuMSwyOS4xLDAsMCwwLDYuNTMtMTEuNDRBNjAuNSw2MC41LDAsMCwwLDI0LDE3LjU5TDI0LDE2SDF2M0gyMC45MmMtLjQ1LDYuMTctMy4xMywyOC0xOC4zNSwyOEgxdjNIMi41NWExOCwxOCwwLDAsMCwzLjc4LS40TDguMTQsNTVIMXYzSDI0VjU1Wk05LjY0LDQ4LjU2QTE2LjM4LDE2LjM4LDAsMCwwLDEyLjQxLDQ3bDIuNjcsOEgxMS44WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEgMC4wNCkiIC8+PC9zdmc+';
				add_menu_page( __( 'Settings', 'kemet' ), __( 'Kemet', 'kemet' ), 'manage_options', 'kemet_panel', null, $icon );
			}
		}
	}

	new Kemet_Admin_Settings();
}
