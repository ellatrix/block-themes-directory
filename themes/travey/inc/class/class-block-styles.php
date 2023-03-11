<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package travey
 * @since 1.0.0
 */

namespace Travey;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package travey
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
				'label' => __( 'Button Dark Hover Fill', 'travey' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttontwo',
				'label' => __( 'Button White Hover Fill', 'travey' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonthree',
				'label' => __( 'Button Dark Hover Fill 2', 'travey' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonfour',
				'label' => __( 'Button White Hover Fill 2', 'travey' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonfive',
				'label' => __( 'Button Dark Hover Fill 3', 'travey' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonsix',
				'label' => __( 'Button White Hover Fill 3', 'travey' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'travey' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'travey' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'travey' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'travey' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'travey' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'travey' ),
			)
		);
	}
}
