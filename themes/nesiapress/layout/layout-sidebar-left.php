<?php
/**
 * Template Name: Layout Sidebar Left Template
 * 
 * Template Post Type: Post, Page
 * 
 * Template part for displaying narrow contene layout in single.php and page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @since 2.0.0
 *
 * @package nesiapress
 */

get_header();
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<main id="primary" class="site-main">

	<div class="np-container">
		<div class="np-layout-entries">
			<section class="np-layout-content-left">
				<?php
				/**
				 * nesiapress_before_content hook.
				 *
				 * @since 2.1.0
				 *
				 */
				do_action( 'nesiapress_before_content' );
				
				while ( have_posts() ) :
					the_post();

					get_template_part( 'inc/template-parts/content', 'sidebar-left' );

				/**
				 * nesiapress_after_content hook.
				 *
				 * @since 2.1.0
				 *
				 */
				do_action( 'nesiapress_after_content' );

				if (get_post_type() === 'post') {
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" /></svg>' . esc_html__( 'Previous Post', 'nesiapress' ) . '</span>',
							'next_text' => '<span class="nav-subtitle"> ' . esc_html__( 'Next Post', 'nesiapress' ) . '<svg class="ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg></span>',
						)
					);

					/**
					 * nesiapress_before_related_post hook.
					 *
					 * @since 2.1.0
					 *
					 */
					do_action( 'nesiapress_before_related_post' );

					$tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
					$args = [
						'post__not_in'        => array( get_queried_object_id() ),
						'posts_per_page'      => 4,
						'ignore_sticky_posts' => 1,
						'orderby'             => 'rand',
						'tax_query' => [
							[
								'taxonomy' => 'post_tag',
								'terms'    => $tags
							]
						]
					];
					$my_query = new wp_query( $args );
						if( $my_query->have_posts() ) {
							echo '<div class="np-related-sidebar">';
						while( $my_query->have_posts() ) {
						$my_query->the_post(); ?>
						<div class="entry-card">
							<figure class="np-related-thumbnail">
								<?php nesiapress_post_thumbnail(); ?>
							</figure>
							<article class="np-entry-content">
								<header class="np-entry-header">
									<h3 class="np-related-title">
										<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</h3>
								</header>
								<footer class="np-entry-meta">
									<div class="meta-gravatar">
										<span class="sr-only"><?php the_author(); ?></span>
										<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
									</div> <!-- .meta-gravatar -->
									
									<div class="np-entry-info">
										<?php nesiapress_meta_author(); ?>
										<div class="meta-info">
											<?php nesiapress_post_update(); ?>
										</div> <!-- .meta-info -->
									</div> <!-- .np-entry-info -->
								</footer> <!-- .np-entry-meta -->
							</article> <!-- .np-entry-content -->
						</div> <!-- .entry-card -->
					<?php }
						wp_reset_postdata();
							echo '</div>';
						}
					}

					/**
					 * nesiapress_after_related_post hook.
					 *
					 * @since 2.1.0
					 *
					 */
					do_action( 'nesiapress_after_related_post' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</section>
			
			<aside id="secondary" aria-labelledby="secondary" class="np-layout-aside-left">
				<?php
				/**
				 * nesiapress_before_widget hook.
				 *
				 * @since 2.1.0
				 *
				 */
				do_action( 'nesiapress_before_widget' );
				
				get_sidebar();

				/**
				 * nesiapress_after_widget hook.
				 *
				 * @since 2.1.0
				 *
				 */
				do_action( 'nesiapress_after_widget' ); ?>
			</aside><!-- #secondary -->
		</div>
	</div>

</main><!-- #main -->

<?php get_footer();
