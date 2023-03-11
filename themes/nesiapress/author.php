<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
       * nesiapress_before_main_content hook.
       *
       * @since 2.1.0
       *
       */
      do_action( 'nesiapress_before_main_content' ); ?>
		<div class="np-container">

			<?php
			/**
			 * nesiapress_before_archive_header hook.
			*
			* @since 2.1.0
			*
			*/
			do_action( 'nesiapress_before_archive_header' ); ?>
			
			<header class="page-header">
				
				<div class="np-page-gravatar">
					<span class="sr-only"><?php the_author(); ?></span>
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
				</div> <!-- .np-page-gravatar -->
				
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

				<div class="page-description">
					<p class="np-author-page-description"><?php the_author_meta('description') ?></p>
					<div class="np-author-page-info">
						<span class="np-hide">
							Join since: <?php echo the_author_meta('user_registered', 1 ); ?>
						</span>
						<span class="np-hide" aria-hidden="true"> &middot; </span>
						<span>
							<?php printf( 'Article Posted: %1$s ', count_user_posts( get_the_author_meta('ID') ) ); ?>
						</span>
					</div>
				</div> <!-- page-description -->
			</header><!-- .page-header -->

			<?php
			/**
			 * nesiapress_after_archive_header hook.
			 *
			 * @since 2.1.0
			 *
			 */
			do_action( 'nesiapress_after_archive_header' ); ?>

			<?php if ( have_posts() ) : ?>

			<div class="np-grid-entries">

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'inc/template-parts/content', get_post_type() );

				endwhile; ?>
			</div><!-- .np-grid-entries -->

			<?php else :

				get_template_part( 'inc/template-parts/content', 'none' );

			endif; ?>
		</div><!-- .np-container -->

		<?php
		/**
		 * nesiapress_after_main_content hook.
		 *
		 * @since 2.1.0
		 *
		 */
		do_action( 'nesiapress_after_main_content' ); ?>

		<?php the_np_posts_pagination(); ?>
		
	</main><!-- #primary -->

<?php
get_footer();
