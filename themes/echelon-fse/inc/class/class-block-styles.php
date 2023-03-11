<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package echelon-fse
 * @since 1.0.0
 */

namespace Echelon_FSE;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package echelon-fse
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
				'label' => __( 'Button Fill 1', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttontwo',
				'label' => __( 'Button Fill 2', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowtwo',
				'label' => __( 'Box Shadow 2', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowtwo',
				'label' => __( 'Box Shadow 2', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowtwo',
				'label' => __( 'Box Shadow 2', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowtwohover',
				'label' => __( 'Box Shadow 2 on Hover', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowtwohover',
				'label' => __( 'Box Shadow 2 on Hover', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowtwohover',
				'label' => __( 'Box Shadow 2 on Hover', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborder',
				'label' => __( 'Border', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborder',
				'label' => __( 'Border', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborder',
				'label' => __( 'Border', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/social-links',
			array(
				'name'  => 'customsocial',
				'label' => __( 'Square Icons', 'echelon-fse' ),
			)
		);

		register_block_style(
			'core/navigation',
			array(
				'name'  => 'customnav',
				'label' => __( 'Navigation Padding', 'echelon-fse' ),
			)
		);
	}
}
