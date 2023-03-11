<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package vorfolio
 * @since 1.0.0
 */

namespace Vorfolio;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package vorfolio
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
				'label' => __( 'Button With Border Style & Hover', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttontwo',
				'label' => __( 'Button With Hover Fill', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonthree',
				'label' => __( 'Button White With Hover', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonfour',
				'label' => __( 'Button Text White With Hover', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonfive',
				'label' => __( 'Button Text Blue With Hover', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'vorfolio' ),
			)
		);

		register_block_style(
			'core/social-links',
			array(
				'name'  => 'customsociallinks',
				'label' => __( 'Social Icon Custom', 'vorfolio' ),
			)
		);
	}
}
