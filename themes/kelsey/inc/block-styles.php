<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Kelsey
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
	function kelsey_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'kelsey-padding-0',
				'label' => esc_html__( 'No Padding', 'kelsey' ),
			)
		);

		//Wp Block Post Author Style
		/* register_block_style(
			'core/post-author',
			array(
				'name'  => 'kelsey-post-author-card',
				'label' => esc_html__( 'Theme Style', 'kelsey' ),
			)
		); */

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'kelsey-button',
				'label'        => esc_html__( 'Plain', 'kelsey' ),
			)
		);

		//Post Comments Style
		/* register_block_style(
			'core/post-comments',
			array(
				'name'         => 'kelsey-post-comments',
				'label'        => esc_html__( 'Theme Style', 'kelsey' ),
			)
		); */

		//Wp Block Quote Style
		/* register_block_style(
			'core/quote',
			array(
				'name'         => 'kelsey-block-quote',
				'label'        => esc_html__( 'Theme Style', 'kelsey' ),
			)
		); */

		//Wp Block Pullquote style
		/* register_block_style(
			'core/pullquote',
			array(
				'name'         => 'kelsey-pullquote',
				'label'        => esc_html__( 'Theme Style', 'kelsey' ),
			)
		); */


		//Wp Block Table Style
		/* register_block_style(
			'core/table',
			array(
				'name'         => 'kelsey-wp-table',
				'label'        => esc_html__( 'Theme Style', 'kelsey' ),
			)
		); */


		//Wp Block Pre Style
		/* register_block_style(
			'core/preformatted',
			array(
				'name'         => 'kelsey-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'kelsey' ),
			)
		); */

		//Wp Block Verse Style
		/* register_block_style(
			'core/verse',
			array(
				'name'         => 'kelsey-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'kelsey' ),
			)
		); */
	}
	add_action( 'init', 'kelsey_register_block_styles' );
}
