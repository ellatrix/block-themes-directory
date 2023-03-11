<?php
/**
 * Charta Block Styles
 *
 * @since Charta 1.0
 */

/**
 * Registers block styles.
 *
 * @return void
 */
function charta_register_block_styles() {

	// Register Post Meta block style.
	register_block_style( 'core/group', array(
		'name'         => 'post-meta',
		'label'        => esc_html__( 'Post Meta', 'charta' ),
		'style_handle' => 'charta-stylesheet',
	) );

	// Register Widget Title block style.
	register_block_style( 'core/heading', array(
		'name'         => 'widget-title',
		'label'        => esc_html__( 'Widget Title', 'charta' ),
		'style_handle' => 'charta-stylesheet',
	) );

	// Register Flip Link Hover block style.
	$link_hover_style = array(
		'name'         => 'flip-link-hover',
		'label'        => esc_html__( 'Flip Link Hover', 'charta' ),
		'style_handle' => 'charta-stylesheet',
	);

	register_block_style( 'core/archives', $link_hover_style );
	register_block_style( 'core/categories', $link_hover_style );
	register_block_style( 'core/latest-posts', $link_hover_style );
	register_block_style( 'core/page-list', $link_hover_style );
	register_block_style( 'core/tag-cloud', $link_hover_style );
	register_block_style( 'core/site-title', $link_hover_style );
}
add_action( 'init', 'charta_register_block_styles', 9 );
