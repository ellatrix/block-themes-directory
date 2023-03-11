<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Bricksy
 * @since 0.1
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function bricksy_register_block_styles() {
		// Spacer: Negative Space
		register_block_style(
			'core/spacer',
			array(
				'name'  => 'bricksy-spacer',
				'label' => esc_html__( 'Negative Top Margin', 'bricksy' ),
			)
		);

		// Columns: Shadow.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'bricksy-shadow',
				'label' => esc_html__( 'Shadow', 'bricksy' ),
			)
		);
		
		// Cover: Shadow.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'bricksy-shadow',
				'label' => esc_html__( 'Shadow', 'bricksy' ),
			)
		);
		
		// Group: Shadow.
		register_block_style(
			'core/group',
			array(
				'name'  => 'bricksy-shadow',
				'label' => esc_html__( 'Shadow', 'bricksy' ),
			)
		);
		
		// Image: Shadow.
		register_block_style(
			'core/image',
			array(
				'name'  => 'bricksy-shadow',
				'label' => esc_html__( 'Shadow', 'bricksy' ),
			)
		);
	}
	add_action( 'init', 'bricksy_register_block_styles' );
}
