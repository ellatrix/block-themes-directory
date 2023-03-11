<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package hypebiz
 * @since 1.0.0
 */

namespace Hypebiz;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package hypebiz
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
				'name'  => 'custombuttonone',
				'label' => __( 'Button Custom 1', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttontwo',
				'label' => __( 'Button Custom 2', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonthree',
				'label' => __( 'Button Custom 3', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonfour',
				'label' => __( 'Button Custom 4', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowtwo',
				'label' => __( 'Box Shadow', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowtwo',
				'label' => __( 'Box Shadow', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowtwo',
				'label' => __( 'Box Shadow', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowtwohover',
				'label' => __( 'Box Shadow on Hover', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowtwohover',
				'label' => __( 'Box Shadow on Hover', 'hypebiz' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowtwohover',
				'label' => __( 'Box Shadow on Hover', 'hypebiz' ),
			)
		);
	}
}
