<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Pentatonic
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
	function pentatonic_register_block_styles() {

		//Wp Block Group Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'padding-0',
				'label' => esc_html__( 'No Padding', 'pentatonic' ),
			)
		);

		//Wp Block Columns Padding Zero
		register_block_style(
			'core/columns',
			array(
				'name'  => 'have-gap-0',
				'label' => esc_html__( 'Gap Zero', 'pentatonic' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'post-author-card',
				'label' => esc_html__( 'Theme Style', 'pentatonic' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'button',
				'label'        => esc_html__( 'Plain', 'pentatonic' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'post-comments',
				'label'        => esc_html__( 'Theme Style', 'pentatonic' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'latest-comments',
				'label'        => esc_html__( 'Theme Style', 'pentatonic' ),
			)
		);

		//Wp Block Quote Style
		register_block_style(
			'core/quote',
			array(
				'name'         => 'block-quote',
				'label'        => esc_html__( 'Theme Style', 'pentatonic' ),
			)
		);

		//Wp Block Pullquote style
		register_block_style(
			'core/pullquote',
			array(
				'name'         => 'pullquote',
				'label'        => esc_html__( 'Theme Style', 'pentatonic' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'wp-table',
				'label'        => esc_html__( 'Theme Style', 'pentatonic' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'pentatonic' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'wp-verse',
				'label'        => esc_html__( 'Theme Style', 'pentatonic' ),
			)
		);
	}
	add_action( 'init', 'pentatonic_register_block_styles' );
}
