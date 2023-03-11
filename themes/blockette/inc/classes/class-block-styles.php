<?php
/**
 * Block Style Class
 *
 * @package blockette
 * @since 1.0.0
 */

namespace Blockette;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package blockette
 */
class Block_Styles {

	/**
	 * Instance variable
	 *
	 * @var $instance
	 */
	private static $instance;

	/**
	 * Class instance.
	 *
	 * @return BlockStyles
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Class constructor.
	 */
	public function __construct() {
		$this->register_block_styles();
		add_action( 'enqueue_block_editor_assets', array( $this, 'block_styles' ) );
	}

	/**
	 * Register Block Styles
	 *
	 * @return void
	 */
	private function register_block_styles() {

		$block_styles = array(
			'core/template-part' => array(
				'no-shadow'        => __( 'No shadow', 'blockette' ),
				'sticky'           => __( 'Sticky', 'blockette' ),
				'sticky-no-shadow' => __( 'Sticky, no shadow', 'blockette' ),
			),
			'core/button'        => array(
				'flat-button' => __( 'Flat button', 'blockette' ),
				'pill-button' => __( 'Pill button', 'blockette' ),
				'soft-shadow' => __( 'Soft shadow', 'blockette' ),
			),
			'core/navigation'    => array(
				'button-style'      => __( 'Button', 'blockette' ),
				'nav-button-shadow' => __( 'Button shadow', 'blockette' ),
			),
			'core/quote'         => array(
				'inverted' => __( 'Inverted', 'blockette' ),
			),
			'core/group'         => array(
				'box-shadow' => __( 'Box shadow', 'blockette' ),
			),
			'core/column'        => array(
				'box-shadow' => __( 'Box shadow', 'blockette' ),
			),
			'core/columns'       => array(
				'box-shadow' => __( 'Box shadow', 'blockette' ),
			),
			'core/site-title'    => array(
				'text-shadow' => __( 'Text shadow', 'blockette' ),
			),
			'core/post-title'    => array(
				'text-shadow' => __( 'Text shadow', 'blockette' ),
			),
			'core/query-title'   => array(
				'text-shadow' => __( 'Text shadow', 'blockette' ),
			),
			'core/heading'       => array(
				'text-shadow' => __( 'Text shadow', 'blockette' ),
				'gradient-1'  => __( 'Gradient 1', 'blockette' ),
				'gradient-2'  => __( 'Gradient 2', 'blockette' ),
				'gradient-3'  => __( 'Gradient 3', 'blockette' ),
				'gradient-4'  => __( 'Gradient 4', 'blockette' ),
			),
			'core/separator'     => array(
				'dashed' => __( 'Dashed', 'blockette' ),
			),
		);

		foreach ( $block_styles as $block => $style_settings ) {
			foreach ( $style_settings as $style_name => $style_label ) {
				register_block_style(// phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
					$block,
					array(
						'name'  => 'blockette-' . $style_name,
						'label' => $style_label,
					)
				);
			}
		}

	}

	/**
	 * Block styles in JS.
	 *
	 * @return void
	 */
	public function block_styles() {
		wp_enqueue_script(
			'blockette-block-styles',
			get_stylesheet_directory_uri() . '/assets/js/block-styles.js',
			array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
			BLOCKETTE_VERSION,
			true
		);
	}
}
