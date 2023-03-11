<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package VisionArt
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
	function visionart_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'VisionArt-padding-0',
				'label' => esc_html__( 'No Padding', 'visionart' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'VisionArt-post-author-card',
				'label' => esc_html__( 'Theme Style', 'visionart' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'VisionArt-button',
				'label'        => esc_html__( 'Plain', 'visionart' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'VisionArt-post-comments',
				'label'        => esc_html__( 'Theme Style', 'visionart' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'VisionArt-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'visionart' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'VisionArt-wp-table',
				'label'        => esc_html__( 'Theme Style', 'visionart' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'VisionArt-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'visionart' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'VisionArt-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'visionart' ),
			)
		);
	}
	add_action( 'init', 'visionart_register_block_styles' );
}
