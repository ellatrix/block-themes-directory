<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package startupzy
 * @since 1.0.0
 */

namespace Startupzy;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package startupzy
 */
class Block_Styles {
	/**
	 * Register Block Patterns
	 */
	private function register_block_styles() {
		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonfill',
				'label' => __( 'Button Fill Hover White', 'startupzy' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonfill2',
				'label' => __( 'Button Fill Hover Navy', 'startupzy' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonfill3',
				'label' => __( 'Button White Hover Navy', 'startupzy' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'startupzy' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'startupzy' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'startupzy' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'startupzy' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'startupzy' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'startupzy' ),
			)
		);
	}
}
