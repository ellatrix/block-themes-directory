<?php

if ( function_exists( 'register_block_style' ) ) {

  function mebae_register_block_styles() {

		// Image: Round corners
		register_block_style(
			'core/image',
			array(
				'name'  => 'mebae-border-radius',
				'label' => esc_html__( 'Rounded Corners', 'mebae' ),
			)
		);
  }

  add_action( 'init', 'mebae_register_block_styles' );
}