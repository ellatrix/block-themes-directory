<?php
/**
 * Block styles.
 *
 * @package kemet
 */

/**
 * Register block styles
 */
function register_block_styles() {
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'         => 'fit-to-screen',
			'label'        => __( 'Fit to Screen', 'kemet' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'         => 'kmt-sticky',
			'label'        => __( 'Sticky', 'kemet' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'         => 'full-height',
			'label'        => __( 'Full Height', 'kemet' )
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'         => 'kmt-rounded',
			'label'        => __( 'Rounded', 'kemet' )
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'         => 'kmt-has-shadow',
			'label'        => __( 'With Shadow', 'kemet' )
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'         => 'image-mask-flower',
			'label'        => __( 'Mask Flower', 'kemet' )
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'         => 'image-mask-sketch',
			'label'        => __( 'Mask Sketch', 'kemet' )
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'         => 'image-mask-blob',
			'label'        => __( 'Mask Blob', 'kemet' )
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'         => 'kmt-has-shadow',
			'label'        => __( 'Shadow', 'kemet' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/media-text',
		array(
			'name'         => 'kmt-has-shadow',
			'label'        => __( 'Shadow', 'kemet' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/media-text',
		array(
			'name'         => 'kmt-is-overlay',
			'label'        => __( 'Overlay', 'kemet' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'         => 'kmt-top-border',
			'label'        => __( 'Top Border', 'kemet' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'         => 'kmt-bottom-border',
			'label'        => __( 'Bottom Border', 'kemet' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'         => 'kmt-horizontal-border',
			'label'        => __( 'Horizontal Border', 'kemet' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'         => 'kmt-vertical-border',
			'label'        => __( 'Vertical Border', 'kemet' ),
		)
	);

	// List Styles

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'         => 'kmt-aligned-vertical-border',
			'label'        => __( 'Vertical Border', 'kemet' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'kmt-list-dash',
			'label' => esc_html__( 'Dash icon', 'kemet' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'kmt-checkmark',
			'label' => esc_html__( 'Checkmark icon', 'kemet' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'kmt-arrow',
			'label' => esc_html__( 'Arrow icon', 'kemet' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'kmt-border-bottom',
			'label' => esc_html__( 'Border Bottom', 'kemet' ),
		)
	);
	
}
add_action( 'init', 'register_block_styles' );