<?php
/**
 *
 * Adds custom Block Styles to the editor.
 *
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 *
 * @package Categorical
 */

/**
 * Array of block styles.
 */
if ( ! function_exists( 'categorical_block_styles' ) ) {
	function categorical_block_styles() {
		return array(
			'links-plain' => array(
				'label' => __( 'Links - plain', 'categorical' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,latest-posts,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'links-underline-on-hover' => array(
				'label' => __( 'Links - underline on hover', 'categorical' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,latest-posts,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'line-after' => array(
				'label' => __( 'Line after', 'categorical' ),
				'blocks' => 'query-title,post-title,heading'
			),
			'boxed' => array(
				'label' => __( 'Boxed', 'categorical' ),
				'blocks' => 'latest-posts,latest-comments'
			),
			'bordered' => array(
				'label' => __( 'Bordered', 'categorical' ),
				'blocks' => 'latest-posts,latest-comments'
			),
			'separated' => array(
				'label' => __( 'Separated', 'categorical' ),
				'blocks' => 'latest-posts,latest-comments'
			),
			'buttons' => array(
				'label' => __( 'Buttons style', 'categorical' ),
				'blocks' => 'post-terms'
			),
			'buttons-outline' => array(
				'label' => __( 'Outline style', 'categorical' ),
				'blocks' => 'post-terms'
			),
			'zero-top-margin' => array(
				'label' => __( 'Zero top margin', 'categorical' ),
				'blocks' => 'paragraph,image,cover,media-text,post-date'
			),
			'outer-frame' => array(
				'label' => __( 'Outer frame', 'categorical' ),
				'blocks' => 'image,post-featured-image,cover,media-text'
			),
			'inner-frame' => array(
				'label' => __( 'Inner frame', 'categorical' ),
				'blocks' => 'image,post-featured-image,cover,media-text'
			),
			'quotation-marks' => array(
				'label' => __( 'Quotation marks', 'categorical' ),
				'blocks' => 'quote'
			),
			'quotation-start' => array(
				'label' => __( 'Quotation start', 'categorical' ),
				'blocks' => 'quote'
			),
			'circle' => array(
				'label' => __( 'Circle', 'categorical' ),
				'blocks' => 'list'
			),
			'disc' => array(
				'label' => __( 'Disc', 'categorical' ),
				'blocks' => 'list'
			),
			'square' => array(
				'label' => __( 'Square', 'categorical' ),
				'blocks' => 'list'
			),
			'line' => array(
				'label' => __( 'Line', 'categorical' ),
				'blocks' => 'list'
			),
			'check' => array(
				'label' => __( 'Check', 'categorical' ),
				'blocks' => 'list'
			),
			'cross' => array(
				'label' => __( 'Cross', 'categorical' ),
				'blocks' => 'list'
			),
			'star' => array(
				'label' => __( 'Star', 'categorical' ),
				'blocks' => 'list'
			),
			'star-outline' => array(
				'label' => __( 'Star Outline', 'categorical' ),
				'blocks' => 'list'
			),
			'heart' => array(
				'label' => __( 'Heart', 'categorical' ),
				'blocks' => 'list'
			),
			'arrow' => array(
				'label' => __( 'Arrow', 'categorical' ),
				'blocks' => 'list'
			),
			'chevron' => array(
				'label' => __( 'Chevron', 'categorical' ),
				'blocks' => 'list'
			),
			'asterisk' => array(
				'label' => __( 'Asterisk', 'categorical' ),
				'blocks' => 'list'
			),
			'none' => array(
				'label' => __( 'No Style', 'categorical' ),
				'blocks' => 'list'
			),
		);
	}
}


/**
 * Register the block styles.
 */
function categorical_register_block_styles() {
	$block_styles = categorical_block_styles();
	foreach ( $block_styles as $block_style => $attrs ) {
		if ( isset($attrs['label']) && $attrs['label'] !== '' ) {
			$label = $attrs['label'];
		} else {
			$label = $block_style;
		}
		if ( isset($attrs['handle']) && $attrs['handle'] !== '' ) {
			$handle = $attrs['handle'];
		} else {
			$handle = 'categorical-style';
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
add_action( 'init', 'categorical_register_block_styles' );
