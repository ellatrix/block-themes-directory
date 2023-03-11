<?php
/**
 * Standard Customizer Sections and Settings
 *
 * @since 1.0.0
 */

add_action( 'customize_register', 'kaneshon_customize_register' );
/**
 * Registers Customizer panels, sections, and controls.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Reference to the customizer's manager object.
 */
function kaneshon_customize_register( $wp_customize ) {

	$wp_customize->add_section(
		'developer_styles',
		array(
			'title' => __( 'Developer Styles', 'kaneshon' ),
			'priority' => 40,
		)
	);

	$wp_customize->add_setting(
		'developer_stylesheet',
		array(
			'default'           => 1,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'developer_stylesheet',
		array(
			'label'    => __( 'Enable Developer Stylesheet', 'kaneshon' ),
			'section'  => 'developer_styles',
			'settings' => 'developer_stylesheet',
			'type'     => 'checkbox',
		)
	);

}
