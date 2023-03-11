<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @since 2.1.0
 *
 * @package nesiapress
 */

if ( ! defined( 'ABSPATH' ) ) {
exit; // Exit if accessed directly.
}

get_header();

	/**
	 * nesiapress_content hook.
	 *
	 * @since 2.1.0
	 *
	 * @hooked nesiapress_content_hook
	 */
	do_action( 'nesiapress_content' );

get_footer();

