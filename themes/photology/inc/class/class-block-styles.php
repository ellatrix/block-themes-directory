<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package photology
 * @since 1.0.0
 */

namespace Photology;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package photology
 */
class Block_Styles {
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
				'name'  => 'custombuttonfill',
				'label' => __( 'Button Fill Hover White', 'photology' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonfill2',
				'label' => __( 'Button Fill Hover Black', 'photology' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonfill3',
				'label' => __( 'Button White Hover Black', 'photology' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'photology' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'photology' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'photology' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'photology' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'photology' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'photology' ),
			)
		);
	}
}
