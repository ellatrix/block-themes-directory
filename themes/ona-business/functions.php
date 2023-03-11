<?php
/**
 * Theme functions and definitions.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Ona Business
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! function_exists( 'ona_business_excerpt_length' ) ) :
	/**
	 * Reduce excerpt length
	 */
	function ona_business_excerpt_length( $length ) {
		$excerpt_length = 30;
		if ( is_admin() && ! wp_doing_ajax() ) return $length;
		return $excerpt_length;
	}
	add_filter( 'excerpt_length', 'ona_business_excerpt_length', 999 );
endif;