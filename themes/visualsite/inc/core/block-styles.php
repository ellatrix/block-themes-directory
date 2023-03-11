<?php
/**
 * Block Styles
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	function visualsite_register_block_styles() {
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'visualsite-border',
				'label' => esc_html__( 'Borders', 'visualsite' ),
			)
		);
	}
	add_action( 'init', 'visualsite_register_block_styles' );
}
