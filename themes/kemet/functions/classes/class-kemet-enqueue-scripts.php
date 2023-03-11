<?php
/**
 * Loader Functions
 *
 * @package     Kemet
 * @author      Kemet
 * @copyright   Copyright (c) 2019, Kemet
 * @link        https://kemet.io/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Enqueue Scripts
 */
if ( ! class_exists( 'Kemet_Enqueue_Scripts' ) ) {

	/**
	 * Theme Enqueue Scripts
	 */
	class Kemet_Enqueue_Scripts {


		/**
		 * Class styles.
		 *
		 * @access public
		 * @var $styles Enqueued styles.
		 */
		public static $styles;

		/**
		 * Class scripts.
		 *
		 * @access public
		 * @var $scripts Enqueued scripts.
		 */
		public static $scripts;

		/**
		 * Constructor
		 */
		public function __construct() {
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 1 );
			add_action( 'admin_init', array( $this, 'editor_styles' ), 1 );
			add_filter( 'block_editor_settings_all', array( $this, 'filter_global_styles_settings' ) );
			add_action( 'rest_api_init', array( $this, 'register_global_styles_rest_route' ), 20 );
			add_action( 'wp_enqueue_scripts', array( $this, 'add_fonts_enqueue_scripts' ) );
		}

		/**
		 * Enqueue Editor styles.
		 */
		public function editor_styles() {
			/* Directory and Extension */
			
			$dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';
			$file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
if ( is_rtl() ) {
				$file_prefix = '-rtl.min';
				if ( SCRIPT_DEBUG ) {
					$file_prefix = '-rtl';
				}
			}
			// Generate CSS URL.
			$css_file = './assets/css/' . $dir_name . '/editor' . $file_prefix . '.css';

			//add_editor_style( './assets/css/' . $dir_name . '/editor' . $file_prefix . '.css' );

			add_editor_style(
				array(
					$css_file,
					$this->get_google_fonts_url(),
				)
			);
		}

		/**
		 * Updates the Global Styles controller route.
		 *
		 * @see WP_REST_Global_Styles_Controller.
		 */
		function register_global_styles_rest_route() {

			$controller = new WP_REST_Global_Styles_Controller();
			register_rest_route(
				'wp/v2',
				sprintf(
					'/%s/themes/(?P<stylesheet>%s)',
					'global-styles',
					'[^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?'
				),
				array(
					array(
						'methods'             => WP_REST_Server::READABLE,
						'callback'            => array( $this, 'get_theme_item_global_styles' ),
						'permission_callback' => array( $controller, 'get_theme_item_permissions_check' ),
						'args'                => array(
							'stylesheet' => array(
								'description'       => __( 'The theme identifier', 'kemet' ),
								'type'              => 'string',
								'sanitize_callback' => array( $controller, '_sanitize_global_styles_callback' ),
							),
						),
					),
				),
				true
			);
		}

		/**
		 * Returns the given theme global styles config.
		 *
		 * @param WP_REST_Request $request The request instance.
		 * @return WP_REST_Response|WP_Error
		 */
		function get_theme_item_global_styles( $request ) {

			$controller = new WP_REST_Global_Styles_Controller();
			$response   = $controller->get_theme_item( $request );

			if ( $response->data['settings'] ) {
				$settings = $response->data['settings'];
				$fonts    = $settings['typography']['fontFamilies']['theme'];
				$settings['typography']['fontFamilies']['theme'] = $this->merge_fonts_to_theme_fonts( $fonts );
				$response->data['settings']                      = $settings;
			}
			return $response;
		}

		/**
		 * Updates post editor settings to add fonts and width settings.
		 *
		 * @param array $settings Default editor settings.
		 *
		 * @return array Filtered editor settings.
		 */
		function filter_global_styles_settings( $settings ) {

			if ( isset( $settings['__experimentalFeatures'] ) ) {
				$fonts = $settings['__experimentalFeatures']['typography']['fontFamilies']['theme'];
				$settings['__experimentalFeatures']['typography']['fontFamilies']['theme'] = $this->merge_fonts_to_theme_fonts( $fonts );
			}

			return $settings;
		}


		/**
		 * createSlug
		 *
		 * @param  string $str
		 * @param  string $delimiter
		 * @return string
		 */
		public function create_slug( $str, $delimiter = '-' ) {

			$slug = strtolower( trim( preg_replace( '/[\s-]+/', $delimiter, preg_replace( '/[^A-Za-z0-9-]+/', $delimiter, preg_replace( '/[&]/', 'and', preg_replace( '/[\']/', '', iconv( 'UTF-8', 'ASCII//TRANSLIT', $str ) ) ) ) ), $delimiter ) );
			return $slug;

		}

		/**
		 * Google Font URL
		 * Combine multiple google font in one URL
		 *
		 * @link https://shellcreeper.com/?p=1476
		 * @param array $fonts      Google Fonts array.
		 * @param array $subsets    Font's Subsets array.
		 *
		 * @return string
		 */
		public static function google_fonts_url( $font_name, $variations = array() ) {

			$weights = array(
				'italic' => array(),
				'normal' => array(),
			);

			$weight_text = '';
			$font_name   = str_replace( ' ', '+', $font_name );
			$family      = "family={$font_name}";
			$weight_text = '';

			if ( ! empty( $variations ) && count( $variations ) > 1 ) {
				$weight_text = 'wght@';
				foreach ( $variations as  $variation ) {
					$variation_val = (int) $variation[1] * 100;
					if ( 'i' === $variation[0] ) {
						$weights['italic'][] = $variation_val;
					} else {
						$weights['normal'][] = $variation_val;
					}
				}
				sort( $weights['italic'] );
				sort( $weights['normal'] );

				if ( ! empty( $weights['normal'] ) ) {
					$weights['normal'] = array_unique( $weights['normal'] );
					foreach ( $weights['normal'] as $wght ) {
						$wghts[] = ! empty( $weights['italic'] ) ? '0,' . $wght : $wght;
					}
				}

				if ( ! empty( $weights['italic'] ) ) {
					$family           .= ':ital,';
					$weights['italic'] = array_unique( $weights['italic'] );
					foreach ( $weights['italic'] as $wght ) {
						$wghts[] = '1,' . $wght;
					}
				} else {
					$weight_text = ':wght@';
				}

				$weight_text .= implode( ';', $wghts );
			}

			return "{$family}{$weight_text}";
		}

		/**
		 * Returns additional fonts.
		 */
		function get_additional_fonts() {
			$google_fonts = get_option( 'kemet_google_fonts', array() );
			if ( ! $google_fonts ) {
				return;
			}
			$fonts = array();
			foreach ( $google_fonts as $font ) {
				$font_name       = $font['name'];
				$font_fallback   = $font['fallback'];
				$font_variations = $font['variations'];
				$slug            = $this->create_slug( $font_name );
				$url             = $this->google_fonts_url( $font_name, $font_variations );
				$fonts[]         = array(
					'fontFamily' => "{$font_name}, {$font_fallback}",
					'name'       => "{$font_name}",
					'slug'       => "{$slug}",
					'google'     => "{$url}",
				);
			}

			return $fonts;
		}

		/**
		 * Add_fonts_enqueue_scripts
		 *
		 * @return void
		 */
		public function add_fonts_enqueue_scripts() {
			global $template_html;

			$fonts = $this->get_additional_fonts();
			if ( ! $fonts ) {
				return;
			}

			$stylesheet   = wp_get_global_stylesheet();
			$content      = $stylesheet . $template_html;
			$font_vars    = '';
			$font_classes = '';

			foreach ( $fonts as $font ) {
				$family_slug = sanitize_title( $font['slug'] );
				$family      = $font['fontFamily'];
				if ( false !== strpos( $content, 'var(--wp--preset--font-family--' . $family_slug . ')' ) ||
					 false !== strpos( $content, 'has-' . $family_slug . '-font-family' ) ||
					 false !== strpos( $content, $family ) ) {
						$enqueue_fonts[] = $font['google'];
						$font_vars      .= "--wp--preset--font-family--{$family_slug}:{$family};";
						$font_classes   .= ".has-{$family_slug}-font-family{font-family:var(--wp--preset--font-family--{$family_slug})!important;}";
				}
			}

			if ( ! empty( $enqueue_fonts ) ) {
				wp_enqueue_style( // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
					'kemet-theme-fonts',
					esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( array_values( $enqueue_fonts ) ) ) . '&display=swap' ),
					array(),
					null
				);
				wp_add_inline_style( 'global-styles', 'body{' . $font_vars . '}' . $font_classes );
			}
		}

		/**
		 * Custom_google_fonts_url
		 *
		 * @param  string $default
		 * @return string
		 */
		public function custom_google_fonts_url() {

			$fonts = $this->get_additional_fonts();

			if ( ! $fonts ) {
				return;
			}
			foreach ( $fonts as $font ) {
				$enqueue_fonts[] = $font['google'];
			}

			return apply_filters( 'kemet_google_fonts_url', esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( array_values( $enqueue_fonts ) ) ) . '&display=swap' ) );
		}

		/**
		 * Merge our additional fonts with the theme fonts and make sure the values are unique.
		 *
		 * @param array $theme_fonts The theme fonts.
		 * @return array             The merged fonts.
		 */
		function merge_fonts_to_theme_fonts( $theme_fonts ) {
			$new_fonts = $this->get_additional_fonts();
			$fonts     = $theme_fonts ? $theme_fonts : array();

			if ( $new_fonts ) {
				foreach ( $new_fonts as $font ) {
					if ( in_array( $font['fontFamily'], array_column( $fonts, 'fontFamily' ) ) ) {
						continue;
					}
					$fonts[] = $font;
				}
			}

			return $fonts;
		}

		/**
		 * GET GOOGLE FONTS URL
		 *
		 * @return string
		 */
		public function get_google_fonts_url() {

			if ( ! class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
				return $this->custom_google_fonts_url();
			}

			$theme_data = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_settings();

			if ( empty( $theme_data['typography']['fontFamilies'] ) ) {
				return '';
			}
			$theme_data['typography']['fontFamilies']['theme'] = $this->merge_fonts_to_theme_fonts( $theme_data['typography']['fontFamilies']['theme'] );
			$theme_font_families                               = ! empty( $theme_data['typography']['fontFamilies']['theme'] ) ? $theme_data['typography']['fontFamilies']['theme'] : array();

			if ( ! $theme_font_families ) {
				return '';
			}

			$font_family_urls = array();

			foreach ( $theme_font_families as $font_family ) {
				if ( ! empty( $font_family['google'] ) ) {
					$font_family_urls[] = $font_family['google'];
				}
			}

			if ( ! $font_family_urls ) {
				return '';
			}

			// Return a single request URL for all of the font families.
			return apply_filters( 'kemet_google_fonts_url', esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', $font_family_urls ) . '&display=swap' ) );

		}

		/**
		 * List of all assets.
		 *
		 * @return array assets array.
		 */
		public static function theme_assets() {
			$default_assets = array(

				// handle => location ( in /assets/js/ ) ( without .js ext).
				'js'  => array(),

				// handle => location ( in /assets/css/ ) ( without .css ext).
				'css' => array(
					'kemet-theme-css' => 'style',
				),
			);

			return apply_filters( 'kemet_theme_assets', $default_assets );
		}

		/**
		 * Enqueue Scripts
		 */
		public function enqueue_scripts() {
			$kemet_enqueue = apply_filters( 'kemet_enqueue_theme_assets', true );

			if ( ! $kemet_enqueue ) {
				return;
			}

			/* Directory and Extension */
			$file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
			$dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';

			$js_uri  = KEMET_THEME_URI . 'assets/js/' . $dir_name . '/';
			$css_uri = KEMET_THEME_URI . 'assets/css/' . $dir_name . '/';

			// All assets.
			$all_assets = self::theme_assets();
			$styles     = $all_assets['css'];
			$scripts    = $all_assets['js'];

			if ( is_array( $styles ) && ! empty( $styles ) ) {
				// Register & Enqueue Styles.
				foreach ( $styles as $key => $style ) {

					// Generate CSS URL.
					$css_file = $css_uri . $style . $file_prefix . '.css';

					// Dependencies.
					$dependencies = apply_filters( 'kemet_style_dependencies', array( 'kemet-styles-google-fonts' ) );

					// Register.
					wp_register_style( $key, $css_file, $dependencies, KEMET_THEME_VERSION, 'all' );

					// Enqueue.
					wp_enqueue_style( $key );

					// RTL support.
					wp_style_add_data( $key, 'rtl', 'replace' );
				}
			}

			// Google Fonts support.
			wp_register_style( 'kemet-styles-google-fonts', $this->get_google_fonts_url(), array(), KEMET_THEME_VERSION );

			if ( is_array( $scripts ) && ! empty( $scripts ) ) {
				// Register & Enqueue Scripts.
				foreach ( $scripts as $key => $script ) {

					// Register.
					wp_register_script( $key, $js_uri . $script . '.js', array(), KEMET_THEME_VERSION, true );

					// Enqueue.
					wp_enqueue_script( $key );
				}
			}
		}
	}


	new Kemet_Enqueue_Scripts();
}
