<?php
/**
 * Kemet Blocks Settings
 *
 * @package     Kemet
 * @author      Kemet
 * @copyright   Copyright (c) 2019, Kemet
 * @link        https://kemet.io/
 * @since       Kemet 1.2.0
 */

/**
 * Blocks Settings Loader
 */
if ( ! class_exists( 'Kemet_Blocks_Settings' ) ) {

	/**
	 * Blocks Settings Loader
	 */
	class Kemet_Blocks_Settings {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Blocks Attrs.
		 *
		 * @access private
		 * @var array
		 */
		private static $blocks_attrs = array();

		/**
		 * Blocks Assets.
		 *
		 * @access private
		 * @var array
		 */
		private static $blocks_assets = array(
			'js'  => array(),
			'css' => array(),
		);

		/**
		 * Global Settings.
		 *
		 * @access private
		 * @var array
		 */
		private static $global_settings = array();

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
			add_action( 'enqueue_block_editor_assets', array( $this, 'script_enqueue' ) );
			add_filter( 'block_type_metadata', array( $this, 'add_blocks_attrs' ) );
			add_filter( 'pre_render_block', array( $this, 'edit_core_logo_block' ), 10, 2 );
			add_filter( 'render_block_core/template-part', array( $this, 'edit_header_template' ), 10, 2 );
			add_action( 'enqueue_block_assets', array( $this, 'block_assets' ), 99 );
			add_filter( 'render_block_core/group', array( $this, 'edit_group' ), 10, 2 );
		}

		/**
		 * Edit _header template
		 *
		 * @param  string $block_content content.
		 * @param  array  $source_block block.
		 * @return string
		 */
		public function edit_header_template( $block_content, $source_block ) {
			$sticky_footer  = isset( $source_block['attrs']['enableStickyFooter'] ) ? $source_block['attrs']['enableStickyFooter'] : false;
			$sticky_header  = isset( $source_block['attrs']['enableStickyHeader'] ) ? $source_block['attrs']['enableStickyHeader'] : false;
			$overlay_header = isset( $source_block['attrs']['enableOverlayHeader'] ) ? $source_block['attrs']['enableOverlayHeader'] : false;
			$classes        = array();
			if ( $sticky_header ) {
				$classes[]                                        = 'kmt-sticky-header';
				self::$blocks_assets['js']['kemet-sticky-header'] = 'sticky-header';
			}
			if ( $sticky_footer ) {
				$classes[]                                        = 'kmt-sticky-footer';
				self::$blocks_assets['js']['kemet-sticky-footer'] = 'sticky-footer';
			}
			if ( $overlay_header ) {
				$classes[] = 'kmt-overlay-header';
			}
			if ( ! empty( $classes ) ) {
				$block_content = '<div class="' . esc_attr( implode( ' ', $classes ) ) . '"> ' . $block_content . ' </div>';
			}
			return $block_content;
		}

		/**
		 * Edit group
		 *
		 * @param  string $block_content content.
		 * @param  array  $source_block block.
		 * @return string
		 */
		public function edit_group( $block_content, $source_block ) {
			if ( str_contains( $block_content, 'is-style-fit-to-screen' ) ) {
				self::$blocks_assets['js']['fit-screen'] = 'fit-screen';
			}
			return $block_content;
		}

		/**
		 * Block assets
		 */
		public function block_assets() {
			$scripts = self::$blocks_assets['js'];
			$css     = self::$blocks_assets['css'];

			/* Directory and Extension */
			$file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
			$dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';

			$js_uri  = KEMET_THEME_URI . 'assets/js/' . $dir_name . '/';

			if ( is_array( $scripts ) && ! empty( $scripts ) ) {
				// Register & Enqueue Scripts.
				foreach ( $scripts as $key => $script ) {

					// Register.
					wp_register_script( $key, $js_uri . $script . $file_prefix . '.js', array(), KEMET_THEME_VERSION, true );

					// Enqueue.
					wp_enqueue_script( $key );
				}
			}
		}

		/**
		 * Bdit core logo block
		 *
		 * @param  string $block_content content.
		 * @param  array  $block block.
		 * @return string
		 */
		public function edit_core_logo_block( $block_content, $block ) {
			if ( 'core/site-logo' === $block['blockName'] ) {
				$attrs = $block['attrs'];
				if ( isset( $attrs['mobileLogoId'] ) && 0 !== $attrs['mobileLogoId'] ) {
					self::$global_settings['mobile_logo'] = $attrs['mobileLogoId'];
					add_filter( 'kemet_has_custom_logo', '__return_true' );
					add_filter( 'get_custom_logo', array( $this, 'kemet_mobile_logo' ), 10, 2 );
				}
			}

			return $block_content;
		}

		/**
		 * Mobile header markup
		 *
		 * @param string $html logo html.
		 * @return string
		 */
		public function kemet_mobile_logo( $html ) {
			add_filter( 'wp_get_attachment_image_attributes', array( $this, 'replace_mobile_logo_attr' ), 10, 3 );
			$custom_logo_id = self::$global_settings['mobile_logo'];
			$size           = 'full';
			$html          .= sprintf(
				'<a href="%1$s" class="custom-logo-link custom-mobile-logo" rel="home" itemprop="url">%2$s</a>',
				esc_url( home_url( '/' ) ),
				wp_get_attachment_image(
					apply_filters( 'kemet_custom_mobile_logo_id', $custom_logo_id ), // Attachment id.
					'kmt-logo-size', // Attachment size.
					false, // Attachment icon.
					array(
						'class' => 'custom-logo',
					)
				)
			);
			return $html;
		}

		/**
		 * Replace mobile header attributes
		 *
		 * @param object $attr attributes.
		 * @param object $attachment attachment object.
		 * @param mixed  $size attachment size.
		 * @return object
		 */
		public function replace_mobile_logo_attr( $attr, $attachment, $size ) {
			$custom_logo_id = self::$global_settings['mobile_logo'];
			if ( $custom_logo_id === $attachment->ID ) {
				$attach_data = array();
				if ( ! is_customize_preview() ) {
					$attach_data = wp_get_attachment_image_src( $attachment->ID, 'full' );
					if ( isset( $attach_data[0] ) ) {
						$attr['src'] = $attach_data[0];
					}
				}
				$attr['srcset'] = '';

				if ( '' !== $custom_logo_id ) {
					$cutom_logo     = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					$cutom_logo_url = $cutom_logo[0];
					$attr['srcset'] = $cutom_logo_url;
				}
				$attr['srcset'] = $cutom_logo_url;
			}
			return $attr;
		}

		/**
		 * Add blocks attrs
		 *
		 * @param  array $block_data block.
		 * @return array
		 */
		public function add_blocks_attrs( $block_data ) {
			self::$blocks_attrs[ $block_data['name'] ] = $block_data;
			return $block_data;
		}

		/**
		 * Get default attrs values
		 *
		 * @param  array $attrs block attributes.
		 * @return array
		 */
		public function get_default_attrs_values( $attrs ) {
			$defaults = array();
			foreach ( $attrs as $attr => $value ) {
				if ( isset( $value['default'] ) ) {
					$defaults[ $attr ] = $value['default'];
				}
			}

			return $defaults;
		}

		/**
		 * Enqueue Script for Meta options
		 */
		public function script_enqueue() {
			$current_screen = get_current_screen();

			if ( 'site-editor' !== $current_screen->id && 'appearance_page_gutenberg-edit-site' !== $current_screen->id ) {
				return;
			}
			wp_enqueue_script(
				'kemet-blocks-settings',
				KEMET_THEME_URI . 'inc/blocks/react/build/index.js',
				array(
					'wp-edit-post',
					'wp-i18n',
					'wp-components',
					'wp-element',
					'wp-media-utils',
					'wp-block-editor',
					'lodash',
				),
				KEMET_THEME_VERSION,
				true
			);

			wp_localize_script(
				'kemet-blocks-settings',
				'KemetBlocksSettingsData',
				array(
					'ajax_url' => admin_url( 'admin-ajax.php' ),
					'nonce'    => wp_create_nonce( 'kemet-block-settings' ),
				)
			);
		}
	}
}

/**
 *  Kicking this off by calling 'get_instance()' method
 */
Kemet_Blocks_Settings::get_instance();
