<?php
/**
 * Approach Block Styles
 *
 * @since Approach 1.0
 */

/**
 * Registers block styles.
 *
 * @return void
 */
 function approach_register_block_styles() {


	// Register Flip Link Hover block style.
	$link_hover_style = array(
		'name'         => 'flip-link-hover',
		'label'        => esc_html__( 'Approach style ', 'approach' ),
		'style_handle' => 'approach-stylesheet',
	);
	
   // Register  navigation block style .
	$navigation_style = array(
		'name'         => 'approach_menu_style',
		'label'        => esc_html__( 'Approach_menu_style', 'approach' ),
		'style_handle' => 'approach-stylesheet',
	);

	register_block_style( 'core/site-title', $link_hover_style );
	register_block_style( 'core/navigation', $navigation_style );
} 
add_action('init', 'approach_register_block_styles',8 );
