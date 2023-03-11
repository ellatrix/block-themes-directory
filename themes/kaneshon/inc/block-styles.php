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
	function kaneshon_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'kaneshon-frontpage-container',
				'label' => esc_html__( 'Frontpage Container', 'kaneshon' ),
			)
		);
	}
	add_action( 'init', 'kaneshon_register_block_styles' );
}
