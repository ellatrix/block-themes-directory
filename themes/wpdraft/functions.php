<?php

namespace DraftTheme;

define( 'DRAFT_THEME_SLUG', 'wpdraft' );

if ( ! class_exists( 'Theme' ) ) {
	/**
	 * Theme Class.
	 *
	 * @since 1.0.0
	 */
	class Theme {

		/**
		 * Class instance.
		 *
		 * @var Theme
		 */
		private static $instance = null;

		/**
		 * Theme constructor.
		 */
		private function __construct() {

		}

		/**
		 * Return Theme Instance.
		 *
		 * @return object\Theme
		 */
		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Load the Theme.
		 *
		 * @return void
		 */
		public static function load() {
			require get_template_directory() . '/includes/AfterSetupTheme.php';
			require get_template_directory() . '/includes/EnqueueAssets.php';

			// Find these classes in the includes/ directory.
			AfterSetupTheme::register();
			EnqueueAssets::register();
		}
	}
}

Theme::load();
