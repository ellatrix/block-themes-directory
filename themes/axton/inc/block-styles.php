<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Axton
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function axton_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'axton-padding-0',
				'label' => esc_html__( 'No Padding', 'axton' ),
			)
		);
		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'axton-button',
				'label'        => esc_html__( 'Plain', 'axton' ),
			)
		);
	}
	add_action( 'init', 'axton_register_block_styles' );
}
