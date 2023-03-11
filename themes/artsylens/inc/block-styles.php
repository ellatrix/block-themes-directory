<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package artsylens
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
	function artsylens_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'artsylens-padding-0',
				'label' => esc_html__( 'No Padding', 'artsylens' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'artsylens-post-author-card',
				'label' => esc_html__( 'Theme Style', 'artsylens' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'artsylens-button',
				'label'        => esc_html__( 'Plain', 'artsylens' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'artsylens-post-comments',
				'label'        => esc_html__( 'Theme Style', 'artsylens' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'artsylens-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'artsylens' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'artsylens-wp-table',
				'label'        => esc_html__( 'Theme Style', 'artsylens' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'artsylens-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'artsylens' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'artsylens-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'artsylens' ),
			)
		);
	}
	add_action( 'init', 'artsylens_register_block_styles' );
}
