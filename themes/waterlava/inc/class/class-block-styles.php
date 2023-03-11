<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package waterlava
 * @since 1.0.0
 */

namespace Waterlava;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package waterlava
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
	 * @return BlockPatterns
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
	}

	/**
	 * Register Block Patterns
	 */
	private function register_block_styles() {
		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonborder',
				'label' => __( 'Button with Border & Hover Fill', 'waterlava' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonborder2',
				'label' => __( 'Button with Border & Hover Fill 2', 'waterlava' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonborder3',
				'label' => __( 'Button with Border & Hover Fill 3', 'waterlava' ),
			)
		);

		register_block_style(
			'core/heading',
			array(
				'name'  => 'lineseparator',
				'label' => __( 'Line Separator', 'waterlava' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'waterlava' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'waterlava' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'waterlava' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'waterlava' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'waterlava' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'waterlava' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'waterlava' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'waterlava' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'waterlava' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'waterlava' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'waterlava' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'waterlava' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'waterlava' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'waterlava' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'waterlava' ),
			)
		);

		register_block_style(
			'core/social-links',
			array(
				'name'  => 'iconsborderhover',
				'label' => __( 'Border Hover', 'waterlava' ),
			)
		);
	}
}
