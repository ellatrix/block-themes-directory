<?php
/**
 *
 * Adds custom Block Styles to the editor.
 *
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 *
 * @package Sampler
 */

/**
 * Array of block styles.
 */
if ( ! function_exists( 'sampler_block_styles' ) ) {
	function sampler_block_styles() {
		return array(
			'posts-equal-height' => array(
				'label' => __( 'Posts equal height', 'sampler' ),
				'blocks' => 'query'
			),
			'hover-zoom' => array(
				'label' => __( 'Zoom on hover', 'sampler' ),
				'blocks' => 'post-featured-image,image,cover'
			),
			'hover-zoom-img' => array(
				'label' => __( 'Zoom on image hover', 'sampler' ),
				'blocks' => 'media-text'
			),
			'hover-zoom-block' => array(
				'label' => __( 'Zoom on block hover', 'sampler' ),
				'blocks' => 'media-text'
			),
			'no-overflow' => array(
				'label' => __( 'No overflow', 'sampler' ),
				'blocks' => 'group'
			),
			'shadow' => array(
				'label' => __( 'Shadow', 'sampler' ),
				'blocks' => 'group'
			),
			'shadow-hover' => array(
				'label' => __( 'Shadow on hover', 'sampler' ),
				'blocks' => 'group'
			),
			'hover-effect-light' => array(
				'label' => __( 'Hover effect (light)', 'sampler' ),
				'blocks' => 'button'
			),
			'hover-effect-dark' => array(
				'label' => __( 'Hover effect (dark)', 'sampler' ),
				'blocks' => 'button'
			),
			'gradient-text-1' => array(
				'label' => __( 'Gradient text 1', 'sampler' ),
				'blocks' => 'paragraph,heading,site-tagline,site-title,post-title,query-title'
			),
			'gradient-text-2' => array(
				'label' => __( 'Gradient text 2', 'sampler' ),
				'blocks' => 'paragraph,heading,site-tagline,site-title,post-title,query-title'
			),
			'gradient-text-3' => array(
				'label' => __( 'Gradient text 3', 'sampler' ),
				'blocks' => 'paragraph,heading,site-tagline,site-title,post-title,query-title'
			),
			'gradient-text-4' => array(
				'label' => __( 'Gradient text 4', 'sampler' ),
				'blocks' => 'paragraph,heading,site-tagline,site-title,post-title,query-title'
			),
			'font-poppins' => array(
				'label' => __( 'Font - Poppins', 'sampler' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'font-roboto' => array(
				'label' => __( 'Font - Roboto', 'sampler' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'font-merriweather' => array(
				'label' => __( 'Font - Merriweather', 'sampler' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'font-system' => array(
				'label' => __( 'Font - System', 'sampler' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'font-ms-madi' => array(
				'label' => __( 'Font - Ms Madi', 'sampler' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'links-plain' => array(
				'label' => __( 'Links - plain', 'sampler' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'links-underline-on-hover' => array(
				'label' => __( 'Links - underline on hover', 'sampler' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title,post-author,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'zero-top-margin' => array(
				'label' => __( 'Zero top margin', 'sampler' ),
				'blocks' => 'paragraph,heading,site-tagline,site-title,post-title,query-title,group,image,media-text,cover'
			),
			'zero-bottom-margin' => array(
				'label' => __( 'Zero bottom margin', 'sampler' ),
				'blocks' => 'image'
			),
			'no-block-gap-row' => array(
				'label' => __( 'No block gap (horizontal gap in Row/Flex variation)', 'sampler' ),
				'blocks' => 'group'
			),
			'no-column-gap' => array(
				'label' => __( 'No column gap', 'sampler' ),
				'blocks' => 'columns'
			),
			'circle' => array(
				'label' => __( 'Circle', 'sampler' ),
				'blocks' => 'list'
			),
			'disc' => array(
				'label' => __( 'Disc', 'sampler' ),
				'blocks' => 'list'
			),
			'square' => array(
				'label' => __( 'Square', 'sampler' ),
				'blocks' => 'list'
			),
			'line' => array(
				'label' => __( 'Line', 'sampler' ),
				'blocks' => 'list'
			),
			'check' => array(
				'label' => __( 'Check', 'sampler' ),
				'blocks' => 'list'
			),
			'cross' => array(
				'label' => __( 'Cross', 'sampler' ),
				'blocks' => 'list'
			),
			'star' => array(
				'label' => __( 'Star', 'sampler' ),
				'blocks' => 'list'
			),
			'star-outline' => array(
				'label' => __( 'Star Outline', 'sampler' ),
				'blocks' => 'list'
			),
			'heart' => array(
				'label' => __( 'Heart', 'sampler' ),
				'blocks' => 'list'
			),
			'arrow' => array(
				'label' => __( 'Arrow', 'sampler' ),
				'blocks' => 'list'
			),
			'chevron' => array(
				'label' => __( 'Chevron', 'sampler' ),
				'blocks' => 'list'
			),
			'asterisk' => array(
				'label' => __( 'Asterisk', 'sampler' ),
				'blocks' => 'list'
			),
			'none' => array(
				'label' => __( 'No Style', 'sampler' ),
				'blocks' => 'list'
			),
		);
	}
}

/**
 * Register the block styles.
 */
function sampler_register_block_styles() {
	$block_styles = sampler_block_styles();
	foreach ( $block_styles as $block_style => $attrs ) {
		if ( isset($attrs['label']) && $attrs['label'] !== '' ) {
			$label = $attrs['label'];
		} else {
			$label = $block_style;
		}
		if ( isset($attrs['handle']) && $attrs['handle'] !== '' ) {
			$handle = $attrs['handle'];
		} else {
			$handle = 'sampler-style';
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
add_action( 'init', 'sampler_register_block_styles' );
