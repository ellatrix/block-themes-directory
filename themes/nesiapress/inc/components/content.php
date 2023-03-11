<?php
/**
 * NesiaPress Content Hook.
 * 
 * @since 2.1.0
 *
 * @package nesiapress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( !function_exists( 'nesiapress_content_hook' ) ) {
   add_action( 'nesiapress_content', 'nesiapress_content_hook' );

   function nesiapress_content_hook() { ?>

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
			if ( have_posts() ) : ?>
				<div class="np-grid-entries">
					<?php
					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

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

   <?php }
}