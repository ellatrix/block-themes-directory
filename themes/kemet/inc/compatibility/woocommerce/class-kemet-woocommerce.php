<?php
/**
 * WooCommerce Compatibility File.
 *
 * @link https://woocommerce.com/
 *
 * @package Kemet
 */

// If plugin - 'WooCommerce' not exist then return.
if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

/**
 * Kemet WooCommerce Compatibility
 */
if ( ! class_exists( 'Kemet_Woocommerce' ) ) :

	/**
	 * Kemet WooCommerce Compatibility
	 *
	 * @since 1.0.0
	 */
	class Kemet_Woocommerce {


		/**
		 * Member Variable
		 *
		 * @var object instance
		 */
		private static $instance;

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
		 * Constructor
		 */
		public function __construct() {
			add_filter( 'woocommerce_enqueue_styles', array( $this, 'woo_filter_style' ) );
		}

		/**
		 * Subcategory Count Markup
		 *
		 * @param  array $styles  Css files.
		 *
		 * @return array
		 */
		public function woo_filter_style( $styles ) {
			/* Directory and Extension */
			$file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
			$dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';

			$css_uri = KEMET_THEME_URI . 'assets/css/' . $dir_name . '/compatibility/woocommerce/';

			// Register & Enqueue Styles.
			// Generate CSS URL.
			$css_file = $css_uri . '' . $file_prefix . '.css';

			$styles['kemet-woocommerce-general'] = array(
				'src'     => $css_uri . 'woocommerce' . $file_prefix . '.css',
				'deps'    => '',
				'version' => KEMET_THEME_VERSION,
				'media'   => 'all',
				'has_rtl' => true,
			);

			return $styles;
		}
	}

endif;

if ( apply_filters( 'kemet_enable_woocommerce_integration', true ) ) {
	Kemet_Woocommerce::get_instance();
}
