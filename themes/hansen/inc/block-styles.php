<?php
/**
 *
 * Adds custom Block Styles to the editor.
 *
 * @link https://developer.wordpress.org/block-editor/developers/filters/block-filters/
 *
 * @package Hansen
 */

register_block_style(
	'core/query',
	array(
		'name'			=> 'box-shadow',
		'label'			=> __( 'Box Shadow', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/query',
	array(
		'name'			=> 'box-shadow-2',
		'label'			=> __( 'Box Shadow 2', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/query',
	array(
		'name'			=> 'border',
		'label'			=> __( 'Border', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/query',
	array(
		'name'			=> 'border-2',
		'label'			=> __( 'Border 2', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/post-author',
	array(
		'name'			=> 'with-icon',
		'label'			=> __( 'With Icon', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/post-date',
	array(
		'name'			=> 'with-icon',
		'label'			=> __( 'With Icon', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/post-terms',
	array(
		'name'			=> 'with-icon-tags',
		'label'			=> __( 'With Tag Icon', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/post-terms',
	array(
		'name'			=> 'with-icon-cats',
		'label'			=> __( 'With Category Icon', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/post-excerpt',
	array(
		'name'			=> 'read-more-button',
		'label'			=> __( 'Read More Button', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/post-excerpt',
	array(
		'name'			=> 'read-more-button-outline',
		'label'			=> __( 'Read More Button (Outline)', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/post-excerpt',
	array(
		'name'			=> 'read-more-arrow',
		'label'			=> __( 'Read More Arrow', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/columns',
	array(
		'name'			=> 'no-spacing',
		'label'			=> __( 'No Spacing', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/gallery',
	array(
		'name'			=> 'no-spacing',
		'label'			=> __( 'No Spacing', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/group',
	array(
		'name'			=> 'toggle-left',
		'label'			=> __( 'Toggle to Open (Left)', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/group',
	array(
		'name'			=> 'toggle-right',
		'label'			=> __( 'Toggle to Open (Right)', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/group',
	array(
		'name'			=> 'toggle-center',
		'label'			=> __( 'Toggle to Open (Center)', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/group',
	array(
		'name'			=> 'mobile-not-display',
		'label'			=> __( 'Hide on Mobile', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/group',
	array(
		'name'			=> 'mobile-only-display',
		'label'			=> __( 'Show Only on Mobile', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/group',
	array(
		'name'			=> 'toggle-mobile-left',
		'label'			=> __( 'Toggle to Open on Mobile (Left)', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/group',
	array(
		'name'			=> 'toggle-mobile-right',
		'label'			=> __( 'Toggle to Open on Mobile (Right)', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/group',
	array(
		'name'			=> 'toggle-mobile-center',
		'label'			=> __( 'Toggle to Open on Mobile (Center)', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/group',
	array(
		'name'			=> 'narrow-width',
		'label'			=> __( 'Narrow Width', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/group',
	array(
		'name'			=> 'text-columns-3',
		'label'			=> __( 'Text Columns', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/heading',
	array(
		'name'			=> 'no-margin',
		'label'			=> __( 'No Margin', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/site-title',
	array(
		'name'			=> 'no-margin',
		'label'			=> __( 'No Margin', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/post-title',
	array(
		'name'			=> 'no-margin',
		'label'			=> __( 'No Margin', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/query-title',
	array(
		'name'			=> 'no-margin',
		'label'			=> __( 'No Margin', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/paragraph',
	array(
		'name'			=> 'no-margin',
		'label'			=> __( 'No Margin', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/site-tagline',
	array(
		'name'			=> 'no-margin',
		'label'			=> __( 'No Margin', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/paragraph',
	array(
		'name'			=> 'text-indent',
		'label'			=> __( 'Text Indent', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/media-text',
	array(
		'name'			=> 'angled-divider',
		'label'			=> __( 'Angled Divider', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);

register_block_style(
	'core/media-text',
	array(
		'name'			=> 'media-text-overlap',
		'label'			=> __( 'Overlapping Content (requires image fill)', 'hansen' ),
		'style_handle'	=> 'hansen-style',
	)
);
