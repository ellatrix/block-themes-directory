<?php
/**
 * Edunation: Block Patterns
 *
 * @since Edunation 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function edunation_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( 'patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block pattern categories.
 *
 * @return void
 */
function edunation_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'edunation_hero'         => array( 'label' => __( 'Edunation: Hero', 'edunation' ) ),
		'edunation_cta'          => array( 'label' => __( 'Edunation: Call to Action', 'edunation' ) ),
		'edunation_features'     => array( 'label' => __( 'Edunation: Features', 'edunation' ) ),
		'edunation_portfolio'    => array( 'label' => __( 'Edunation: Gallery', 'edunation' ) ),
		'edunation_services'     => array( 'label' => __( 'Edunation: Services', 'edunation' ) ),
		'edunation_testimonials' => array( 'label' => __( 'Edunation: Testimonials', 'edunation' ) ),
		'edunation_team'         => array( 'label' => __( 'Edunation: Team', 'edunation' ) ),
		'edunation_page_layouts' => array( 'label' => __( 'Edunation: Full Page Layouts', 'edunation' ) ),
		'edunation_blog'         => array( 'label' => __( 'Edunation: Blog Posts', 'edunation' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'edunation_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'edunation_register_block_pattern_categories', 9 );


/**
 * Registers block styles.
 *
 * @return void
 */
function edunation_register_block_styles() {

	// Register Main Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'main-navigation',
		'label'        => esc_html__( 'Main Navigation', 'edunation' ),
		'style_handle' => 'edunation-stylesheet',
	) );
}
add_action( 'init', 'edunation_register_block_styles', 9 );