<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package PhotoBrust_Pro
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
	function photobrust_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'photobrust-padding-0',
				'label' => esc_html__( 'No Padding', 'photobrust' ),
			)
		);

		//Wp Block Post Author Style
		/* register_block_style(
			'core/post-author',
			array(
				'name'  => 'photobrust-post-author-card',
				'label' => esc_html__( 'Theme Style', 'photobrust' ),
			)
		); */

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'photobrust-button',
				'label'        => esc_html__( 'Plain', 'photobrust' ),
			)
		);

		//Post Comments Style
		/* register_block_style(
			'core/post-comments',
			array(
				'name'         => 'photobrust-post-comments',
				'label'        => esc_html__( 'Theme Style', 'photobrust' ),
			)
		); */

		//Wp Block Quote Style
		/* register_block_style(
			'core/quote',
			array(
				'name'         => 'photobrust-block-quote',
				'label'        => esc_html__( 'Theme Style', 'photobrust' ),
			)
		); */

		//Wp Block Pullquote style
		/* register_block_style(
			'core/pullquote',
			array(
				'name'         => 'photobrust-pullquote',
				'label'        => esc_html__( 'Theme Style', 'photobrust' ),
			)
		); */


		//Wp Block Table Style
		/* register_block_style(
			'core/table',
			array(
				'name'         => 'photobrust-wp-table',
				'label'        => esc_html__( 'Theme Style', 'photobrust' ),
			)
		); */


		//Wp Block Pre Style
		/* register_block_style(
			'core/preformatted',
			array(
				'name'         => 'photobrust-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'photobrust' ),
			)
		); */

		//Wp Block Verse Style
		/* register_block_style(
			'core/verse',
			array(
				'name'         => 'photobrust-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'photobrust' ),
			)
		); */
	}
	add_action( 'init', 'photobrust_register_block_styles' );
}
