<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function block_aarambha_register_block_styles() {

		// Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'block-aarambha-container',
				'label' => esc_html__( 'Front Page', 'block-aarambha' ),
			)
		);
	}
	add_action( 'init', 'block_aarambha_register_block_styles' );
}
