<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Blockline
 * @since Blockline 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Blockline 1.0
	 *
	 * @return void
	 */
	function blockline_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'blockline-border',
				'label' => esc_html__( 'Borders', 'blockline' ),
			)
		);

		
	}
	add_action( 'init', 'blockline_register_block_styles' );
}