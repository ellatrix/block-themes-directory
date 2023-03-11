<?php
/**
 * Plugin recommendation
 *
 * @package Blogin_Aarambha
 */

// Load TGM library.
require_once get_theme_file_path( 'inc/tgm/class-tgm-plugin-activation.php' );

if ( ! function_exists( 'block_aarambha_recommended_plugins' ) ) :

	/**
	 * Register recommended plugins.
	 *
	 * @since 1.0.0
	 */
	function block_aarambha_recommended_plugins() {
		$plugins = array(
			array(
				'name'     => esc_html__( 'Aarambha Demo Sites', 'block-aarambha' ),
				'slug'     => 'aarambha-demo-sites',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'Mailchimp for WordPress', 'block-aarambha' ),
				'slug'     => 'mailchimp-for-wp',
				'required' => false,
			),
		);

		$config = array();

		tgmpa( $plugins, $config );
	}

endif;

add_action( 'tgmpa_register', 'block_aarambha_recommended_plugins' );
