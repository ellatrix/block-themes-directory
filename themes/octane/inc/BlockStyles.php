<?php

namespace Codemanas\Themes\Octane;

class BlockStyles {
	public static $instance = null;

	public static function get_instance() {
		return is_null( self::$instance ) ? new self() : self::$instance;
	}

	public function __construct() {
		$this->register_styles();
	}

	private function register_styles() {
		$this->register_column_styles();
		$this->register_heading_styles();

		//image
		register_block_style(
			'core/image',
			[
				'name'       => 'highlighted-frame',
				'label'      => 'Highlighted Frame',
				'is_default' => false
			]
		);
	}

	public function register_heading_styles() {
		register_block_style(
			'core/heading',
			[
				'name'       => 'heading-underlined',
				'label'      => __( 'Heading - Underlined', 'octane' ),
				'is_default' => false,
			]
		);

		register_block_style(
			'core/heading',
			[
				'name'       => 'heading-dashed',
				'label'      => __( 'Heading - Dashed', 'octane' ),
				'is_default' => false,
			]
		);

		register_block_style(
			'core/heading',
			[
				'name'       => 'heading-dotted',
				'label'      => __( 'Heading - Dotted', 'octane' ),
				'is_default' => false,
			]
		);
	}

	public function register_column_styles() {
		register_block_style(
			'core/columns',
			[
				'name'       => 'no-space-between',
				'label'      => __( 'No Space Between', 'octane' ),
				'is_default' => false,
			]
		);

		register_block_style(
			'core/columns',
			[
				'name'       => 'column-with-shadow',
				'label'      => __( 'Column with Shadow', 'octane' ),
				'is_default' => false,
			]
		);

		register_block_style(
			'core/column',
			[
				'name'       => 'column-with-shadow',
				'label'      => __( 'Column with Shadow', 'octane' ),
				'is_default' => false,
			]
		);
	}

}