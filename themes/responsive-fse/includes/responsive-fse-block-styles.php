<?php
/**
 *
 * Adds custom Block Styles to the editor.
 *
 * @link https://developer.wordpress.org/block-editor/developers/filters/block-filters/
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @package Responsive_FSE
 */

register_block_style(
	'core/post-template',
	array(
		'name'         => 'post-box-shadow',
		'label'        => __( 'Post Box Shadow', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);

register_block_style(
	'core/post-template',
	array(
		'name'         => 'post-box-shadow-2',
		'label'        => __( 'Post Box Shadow 2', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);
register_block_style(
	'core/post-template',
	array(
		'name'         => 'post-border',
		'label'        => __( 'Post Border', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);
register_block_style(
	'core/post-template',
	array(
		'name'         => 'post-border-2',
		'label'        => __( 'Post Border 2', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);

register_block_style(
	'core/post-excerpt',
	array(
		'name'         => 'read-more-button',
		'label'        => __( 'Read More Button', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);

register_block_style(
	'core/post-excerpt',
	array(
		'name'         => 'read-more-button-outline',
		'label'        => __( 'Outlined Read More Button', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);

register_block_style(
	'core/post-excerpt',
	array(
		'name'         => 'read-more-arrow',
		'label'        => __( 'Read More With Arrow', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);

register_block_style(
	'core/paragraph',
	array(
		'name'         => 'text-indent',
		'label'        => __( 'Text Indent', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);


register_block_style(
	'core/post-author',
	array(
		'name'         => 'with-icon',
		'label'        => __( 'Post Author With Icon', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);

register_block_style(
	'core/post-date',
	array(
		'name'         => 'with-icon',
		'label'        => __( 'Date With Icon', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);

register_block_style(
	'core/post-terms',
	array(
		'name'         => 'with-icon',
		'label'        => __( 'Terms With Icon', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);

register_block_style(
	'core/post-comments-count',
	array(
		'name'         => 'with-icon',
		'label'        => __( 'Comments Count With Icon', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);

register_block_style(
	'core/template-part',
	array(
		'name'         => 'tranparent',
		'label'        => __( 'Transparent Template part', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);
register_block_style(
	'core/group',
	array(
		'name'         => 'align-full',
		'label'        => __( 'Full Width Group', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);
register_block_style(
	'core/button',
	array(
		'name'         => 'call-now',
		'label'        => __( 'Call Now', 'responsive-fse' ),
		'style_handle' => 'responsive-fse-custom-block-style',
	)
);
