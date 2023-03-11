<?php
/**
 *
 * Adds custom Block Styles to the editor.
 *
 * @link https://developer.wordpress.org/block-editor/developers/filters/block-filters/
 *
 * @package Pria
 */

/**
 * Array of block styles.
 */
if ( ! function_exists( 'pria_block_styles' ) ) {
	function pria_block_styles() {
		return array(
			'rounded-corners' => array(
				'label'	=> __( 'Rounded Corners', 'pria' ),
				'blocks' => 'group,image,post-featured-image,media-text,cover,post-author,post-title,navigation'
			),
			'no-spacing' => array(
				'label'	=> __( 'No Spacing', 'pria' ),
				'blocks' => 'columns,gallery'
			),
			'no-margin' => array(
				'label'	=> __( 'No Margin', 'pria' ),
				'blocks' => 'heading,site-title,post-title,query-title,paragraph,site-tagline'
			),
			'offset' => array(
				'label'	=> __( 'Offset', 'pria' ),
				'blocks' => 'query'
			),
			'term-button' => array(
				'label'	=> __( 'Button', 'pria' ),
				'blocks' => 'post-terms'
			),
			'read-more-button' => array(
				'label' => __( 'Read More Button', 'pria' ),
				'blocks' => 'post-excerpt'
			),
			'read-more-button-outline' => array(
				'label' => __( 'Read More Button (Outline)', 'pria' ),
				'blocks' => 'post-excerpt'
			),
			'read-more-arrow' => array(
				'label' => __( 'Read More Arrow', 'pria' ),
				'blocks' => 'post-excerpt'
			),
			'read-more-arrow-2' => array(
				'label' => __( 'Read More Arrow 2', 'pria' ),
				'blocks' => 'post-excerpt'
			),
			'pagination-arrow' => array(
				'label' => __( 'Arrow', 'pria' ),
				'blocks' => 'query-pagination-previous,query-pagination-next'
			),
			'pagination-arrow-2' => array(
				'label' => __( 'Arrow 2', 'pria' ),
				'blocks' => 'query-pagination-previous,query-pagination-next'
			),
			'rounded' => array(
				'label' => __( 'Rounded', 'pria' ),
				'blocks' => 'query-pagination-numbers'
			),
			'no-block-gap' => array(
				'label' => __( 'No Block Gap (zero top margin)', 'pria' ),
				'blocks' => 'group'
			)
		);
	}
}

/**
 * Register the block styles.
 */
function pria_register_block_styles() {
	$block_styles = pria_block_styles();
	foreach ( $block_styles as $block_style => $attrs ) {
		if ( isset($attrs['label']) && $attrs['label'] !== '' ) {
			$label = $attrs['label'];
		} else {
			$label = $block_style;
		}
		if ( isset($attrs['handle']) && $attrs['handle'] !== '' ) {
			$handle = $attrs['handle'];
		} else {
			$handle = 'pria-style';
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

add_action( 'init', 'pria_register_block_styles' );
