<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Lensation Pro
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
	function lensation_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'lensation-padding-0',
				'label' => esc_html__( 'No Padding', 'lensation' ),
			)
		);
		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'lensation-button',
				'label'        => esc_html__( 'Plain', 'lensation' ),
			)
		);
	}
	add_action( 'init', 'lensation_register_block_styles' );
}
