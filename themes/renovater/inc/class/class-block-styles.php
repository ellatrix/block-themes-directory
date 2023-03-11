<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package renovater
 * @since 1.0.0
 */

namespace Renovater;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package renovater
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
				'name'  => 'custombuttondesign',
				'label' => __( 'Button Fill with Hover', 'renovater' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttondesign2',
				'label' => __( 'Button Fill with Hover White', 'renovater' ),
			)
		);

		register_block_style(
			'core/heading',
			array(
				'name'  => 'lineseparator',
				'label' => __( 'Line Separator', 'renovater' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'renovater' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'renovater' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'renovater' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'renovater' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'renovater' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'renovater' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'renovater' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'renovater' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'renovater' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'renovater' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'renovater' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'renovater' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'renovater' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'renovater' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'renovater' ),
			)
		);

		register_block_style(
			'core/social-links',
			array(
				'name'  => 'iconsborderhover',
				'label' => __( 'Border Hover', 'renovater' ),
			)
		);
	}
}
