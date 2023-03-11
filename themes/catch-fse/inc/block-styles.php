<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Catch_FSE
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
	function catch_fse_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'catch-fse-padding-0',
				'label' => esc_html__( 'No Padding', 'catch-fse' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'catch-fse-post-author-card',
				'label' => esc_html__( 'Theme Style', 'catch-fse' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'catch-fse-button',
				'label'        => esc_html__( 'Plain', 'catch-fse' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'catch-fse-post-comments',
				'label'        => esc_html__( 'Theme Style', 'catch-fse' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'catch-fse-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'catch-fse' ),
			)
		);

		//Wp Block Quote Style
		register_block_style(
			'core/quote',
			array(
				'name'         => 'catch-fse-block-quote',
				'label'        => esc_html__( 'Theme Style', 'catch-fse' ),
			)
		);

		//Wp Block Pullquote style
		register_block_style(
			'core/pullquote',
			array(
				'name'         => 'catch-fse-pullquote',
				'label'        => esc_html__( 'Theme Style', 'catch-fse' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'catch-fse-wp-table',
				'label'        => esc_html__( 'Theme Style', 'catch-fse' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'catch-fse-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'catch-fse' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'catch-fse-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'catch-fse' ),
			)
		);
	}
	add_action( 'init', 'catch_fse_register_block_styles' );
}
