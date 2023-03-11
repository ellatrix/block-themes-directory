<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package intrace
 * @since 1.0.0
 */

namespace Intrace;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package intrace
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
				'name'  => 'custombuttonborder',
				'label' => __( 'Button with Border & Fill Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonborder2',
				'label' => __( 'Button with Fill & Border Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/heading',
			array(
				'name'  => 'lineseparator',
				'label' => __( 'Line Separator', 'intrace' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'intrace' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'intrace' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'intrace' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'intrace' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'intrace' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'intrace' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'intrace' ),
			)
		);

		register_block_style(
			'core/social-links',
			array(
				'name'  => 'iconsborderhover',
				'label' => __( 'Border Hover', 'intrace' ),
			)
		);
	}
}
