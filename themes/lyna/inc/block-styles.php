<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package lyna
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
	function lyna_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'lyna-padding-0',
				'label' => esc_html__( 'No Padding', 'lyna' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'lyna-post-author-card',
				'label' => esc_html__( 'Theme Style', 'lyna' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'lyna-button',
				'label'        => esc_html__( 'Plain', 'lyna' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'lyna-post-comments',
				'label'        => esc_html__( 'Theme Style', 'lyna' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'lyna-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'lyna' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'lyna-wp-table',
				'label'        => esc_html__( 'Theme Style', 'lyna' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'lyna-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'lyna' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'lyna-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'lyna' ),
			)
		);
	}
	add_action( 'init', 'lyna_register_block_styles' );
}
