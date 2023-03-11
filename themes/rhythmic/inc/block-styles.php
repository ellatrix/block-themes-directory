<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Rhythmic
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
	function rhythmic_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'Rhythmic-padding-0',
				'label' => esc_html__( 'No Padding', 'rhythmic' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'Rhythmic-post-author-card',
				'label' => esc_html__( 'Theme Style', 'rhythmic' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'Rhythmic-button',
				'label'        => esc_html__( 'Plain', 'rhythmic' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'Rhythmic-post-comments',
				'label'        => esc_html__( 'Theme Style', 'rhythmic' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'Rhythmic-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'rhythmic' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'Rhythmic-wp-table',
				'label'        => esc_html__( 'Theme Style', 'rhythmic' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'Rhythmic-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'rhythmic' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'Rhythmic-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'rhythmic' ),
			)
		);
	}
	add_action( 'init', 'rhythmic_register_block_styles' );
}
