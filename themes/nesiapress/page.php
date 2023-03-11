<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nesiapress
 */

get_header();

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<main id="primary" class="site-main">

	<?php
	/**
	 * nesiapress_before_content hook.
	 *
	 * @since 2.1.0
	 *
	 */
	do_action( 'nesiapress_before_content' ); ?>
		
	<div class="np-container">
		<?php 
		while ( have_posts() ) :
			the_post();

			get_template_part( 'inc/template-parts/content', 'page' ); ?>
	</div> <!-- .np-container -->

	<?php
	/**
	 * nesiapress_after_content hook.
	 *
	 * @since 2.1.0
	 *
	 */
	do_action( 'nesiapress_after_content' );?>

	<div class="np-container">
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div> <!-- .np-container -->
</main><!-- #primary -->

<?php
get_footer();
