<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package zeever
 * @since 1.0.0
 */

namespace Zeever;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package zeever
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
				'label' => __( 'Button with Border', 'zeever' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonborder2',
				'label' => __( 'Button with Hover Border', 'zeever' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonborder3',
				'label' => __( 'Button with Border & HoverBorder', 'zeever' ),
			)
		);

		register_block_style(
			'core/heading',
			array(
				'name'  => 'lineseparator',
				'label' => __( 'Line Separator', 'zeever' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'zeever' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'zeever' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadow',
				'label' => __( 'Box Shadow', 'zeever' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'zeever' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'zeever' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'zeever' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'zeever' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'zeever' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderhover',
				'label' => __( 'Border Hover', 'zeever' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'zeever' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'zeever' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderbottom',
				'label' => __( 'Border Bottom', 'zeever' ),
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'zeever' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'zeever' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'customborderbottomhover',
				'label' => __( 'Border Bottom Hover', 'zeever' ),
			)
		);

		register_block_style(
			'core/social-links',
			array(
				'name'  => 'iconsborderhover',
				'label' => __( 'Border Hover', 'zeever' ),
			)
		);

		register_block_style(
			'core/navigation',
			array(
				'name'  => 'customnav',
				'label' => __( 'Navigation Padding', 'zeever' ),
			)
		);
	}
}
