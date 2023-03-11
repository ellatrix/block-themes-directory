<?php
/**
 * Block Filters
 *
 * @package Pentatonic
 * @since 1.0
 */

function pentatonic_block_wrapper( $block_content, $block ) {

	if ( 'core/button' === $block['blockName'] ) {
		
		if( isset( $block['attrs']['className'] ) && strpos( $block['attrs']['className'], 'has-arrow' ) ) {
			$block_content = str_replace( '</a>', pentatonic_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $block_content );
			return $block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( $block['blockName'] === 'core/post-terms' ) {
			if( 'post_tag' === $block['attrs']['term'] ) {
				$block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . pentatonic_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $block_content );
			}

			if( 'category' ===  $block['attrs']['term'] ) {
				$block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . pentatonic_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $block_content );
			}
			return $block_content;
		}
		if ( 'core/post-date' === $block['blockName'] ) {
			$block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . pentatonic_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $block_content );
			return $block_content;
		}
		if ( 'core/post-author' === $block['blockName'] ) {
			$block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . pentatonic_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $block_content );
			return $block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $block['blockName'] ) {
			if( isset( $block['attrs']['type'] ) && 'previous' === $block['attrs']['type'] ) {
				$block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . pentatonic_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $block_content );
			}
			else {
				$block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . pentatonic_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $block_content );
			}
			return $block_content;
		}

	}
    return $block_content;
}
	
add_filter( 'render_block', 'pentatonic_block_wrapper', 10, 2 );
