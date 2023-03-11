<?php
/**
 *
 * Adds custom Block Styles to the editor.
 *
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 *
 * @package Alara
 */

/**
 * Array of block styles.
 */
if ( ! function_exists( 'alara_block_styles' ) ) {
	function alara_block_styles() {
		return array(
			'links-plain' => array(
				'label' => __( 'Links - plain', 'alara' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers',
				'style' => '.is-style-links-plain a, a.is-style-links-plain{text-decoration: none;}'
			),
			'links-underline-on-hover' => array(
				'label' => __( 'Links - underline on hover', 'alara' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers',
				'style' => '.is-style-links-underline-on-hover a:not(:hover), a.is-style-links-underline-on-hover:not(:hover){text-decoration: none;}'
			),
			'script' => array(
				'label' => __( 'Script', 'alara' ),
				'blocks' => 'paragraph',
				'style' => '.is-style-script{font-family: var(--wp--preset--font-family--script);}'
			),
			'no-block-gap' => array(
				'label' => __( 'No Block Gap (zero top margin)', 'alara' ),
				'blocks' => 'paragraph,heading,site-tagline,site-title,post-title,query-title,group,image,media-text,cover',
				'style' => '.is-style-no-block-gap{margin-top: 0 !important;}'
			),
			'no-block-gap-row' => array(
				'label' => __( 'No Block Gap (horizontal gap in Row/Flex variation)', 'alara' ),
				'blocks' => 'group',
				'style' => '.is-style-no-block-gap-row{gap: 0 !important;}'
			),
			'zero-gap' => array(
				'label' => __( 'No Gaps', 'alara' ),
				'blocks' => 'columns',
				'style' => '.wp-block-columns.is-style-zero-gap{margin-bottom: 0;gap: 0;} .wp-block-columns.is-style-zero-gap > .wp-block-column{margin-left: 0 !important;}'
			),
			'no-bottom-margin' => array(
				'label' => __( 'No Bottom Margin', 'alara' ),
				'blocks' => 'image',
				'style' => '.wp-block-image.is-style-no-bottom-margin{margin-bottom: 0;}'
			),
			'circle' => array(
				'label' => __( 'Circle', 'alara' ),
				'blocks' => 'list',
				'style' => '.is-style-circle{list-style: circle;}'
			),
			'disc' => array(
				'label' => __( 'Disc', 'alara' ),
				'blocks' => 'list',
				'style' => '.is-style-disc{list-style: disc;}'
			),
			'square' => array(
				'label' => __( 'Square', 'alara' ),
				'blocks' => 'list',
				'style' => '.is-style-square{list-style: square;}'
			),
			'line' => array(
				'label' => __( 'Line', 'alara' ),
				'blocks' => 'list',
				'style' => '.is-style-line{list-style: "- ";}'
			),
			'check' => array(
				'label' => __( 'Check', 'alara' ),
				'blocks' => 'list',
				'style' => '.is-style-check{list-style: "✓ ";}'
			),
			'cross' => array(
				'label' => __( 'Cross', 'alara' ),
				'blocks' => 'list',
				'style' => '.is-style-cross{list-style: "✗ ";}'
			),
			'star' => array(
				'label' => __( 'Star', 'alara' ),
				'blocks' => 'list',
				'style' => '.is-style-star{list-style: "★ ";}'
			),
			'arrow' => array(
				'label' => __( 'Arrow', 'alara' ),
				'blocks' => 'list',
				'style' => '.is-style-arrow{list-style: "→ ";}'
			),
			'chevron' => array(
				'label' => __( 'Chevron', 'alara' ),
				'blocks' => 'list',
				'style' => '.is-style-chevron{list-style: "› ";}'
			),
			'none' => array(
				'label' => __( 'No Style', 'alara' ),
				'blocks' => 'list',
				'style' => '.is-style-none{list-style: none;}'
			),
			'hide-nocomments' => array(
				'label' => __( 'Hide if comments closed', 'alara' ),
				'blocks' => 'post-comments',
				'style' => '.is-style-hide-nocomments .nocomments{display: none;}'
			),
			'reading-width' => array(
				'label' => __( 'Reading Width', 'alara' ),
				'blocks' => 'post-content,group',
				'style' => '.is-style-reading-width > *:not(.alignfull){max-width: min( calc(100vw - 2rem), 40rem) !important;margin-left:auto;margin-right:auto}.is-style-reading-width > .alignwide{max-width: min( calc(100vw - 2rem), 90rem) !important;}'
			),
		);
	}
}

/**
 * Register the block styles.
 */
function alara_register_block_styles() {
	$block_styles = alara_block_styles();
	foreach ( $block_styles as $block_style => $attrs ) {
		if ( isset($attrs['label']) && $attrs['label'] !== '' ) {
			$label = $attrs['label'];
		} else {
			$label = $block_style;
		}
		if ( isset($attrs['handle']) && $attrs['handle'] !== '' ) {
			$handle = $attrs['handle'];
		} else {
			$handle = 'alara-style';
		}
		if ( isset($attrs['style']) && $attrs['style'] !== '' ) {
			$style = $attrs['style'];
		} else {
			$style = '';
		}
		$blocks = explode( ',', $attrs['blocks'] );
		$block_count = 0;
		foreach ( $blocks as $block ) {
			$block_count++;
			if ( strpos( $block, '/' ) !== false ) {
				$block = $block;
			} else {
				$block = 'core/' . $block;
			}
			if ( $block_count > 1 ) {
				$style = '';
			}
			register_block_style(
				$block,
				array(
					'name' => $block_style,
					'label'	=> $label,
					'style_handle' => $handle,
					'inline_style' => $style
				)
			);
		}
	}
}

add_action( 'init', 'alara_register_block_styles' );
