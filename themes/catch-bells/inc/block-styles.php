<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Catch_Bells
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
	function catch_bells_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'catch-bells-padding-0',
				'label' => esc_html__( 'No Padding', 'catch-bells' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'catch-bells-post-author-card',
				'label' => esc_html__( 'Theme Style', 'catch-bells' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'catch-bells-button',
				'label'        => esc_html__( 'Plain', 'catch-bells' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'catch-bells-post-comments',
				'label'        => esc_html__( 'Theme Style', 'catch-bells' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'catch-bells-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'catch-bells' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'catch-bells-wp-table',
				'label'        => esc_html__( 'Theme Style', 'catch-bells' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'catch-bells-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'catch-bells' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'catch-bells-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'catch-bells' ),
			)
		);
	}
	add_action( 'init', 'catch_bells_register_block_styles' );
}
