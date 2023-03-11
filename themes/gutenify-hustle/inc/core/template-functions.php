<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Gutenify Hustle
 */

/**
 * Add customizer default values.
 *
 * @param array $default_options
 * @return array
 */
function gutenify_hustle_customizer_add_defaults( $default_options) {
	$defaults = array(
		// Excerpt Options
		'gutenify_hustle_excerpt_length'    => 15,
	);


	$updated_defaults = wp_parse_args( $defaults, $default_options );

	return $updated_defaults;
}
add_filter( 'gutenify_hustle_customizer_defaults', 'gutenify_hustle_customizer_add_defaults' );

/**
 * Returns theme mod value saved for option merging with default option if available.
 * @since 1.0
 */
function gutenify_hustle_gtm( $option ) {
	// Get our Customizer defaults
	$defaults = apply_filters( 'gutenify_hustle_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

if ( ! function_exists( 'gutenify_hustle_excerpt_length' ) ) :
	/**
	 * Sets the post excerpt length to n words.
	 *
	 * function tied to the excerpt_length filter hook.
	 * @uses filter excerpt_length
	 */
	function gutenify_hustle_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		// Getting data from Theme Options
		$length	= gutenify_hustle_gtm( 'gutenify_hustle_excerpt_length' );

		return absint( $length );
	} // gutenify_hustle_excerpt_length.
endif;
add_filter( 'excerpt_length', 'gutenify_hustle_excerpt_length', 999 );
