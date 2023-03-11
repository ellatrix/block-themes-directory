<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nesiapress
 */

?>
<div class="entry-card">
	<?php nesiapress_post_thumbnail(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('np-entry-content '); ?>>
		<!-- default .entry-header -->
		<header class="np-entry-header">
			<?php
			if ( 'post' === get_post_type() ) :
				nesiapress_cat_links();
			endif;

			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="np-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>

		</header><!-- .entry-header -->

		<!-- default .entry-content -->
		<div class="np-entry-summary">
			<?php
			the_excerpt(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nesiapress' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
				);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nesiapress' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<footer class="np-entry-meta">
			<!-- .meta-gravatar -->
			<div class="meta-gravatar">
				<span class="sr-only"><?php the_author(); ?></span>
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
			</div>
			<!-- .np-entry-info -->
			<div class="np-entry-info">
				<!-- .meta-author -->
				<?php nesiapress_meta_author(); ?>
				<!-- .meta-info -->
				<div class="meta-info">
					<?php nesiapress_post_update(); ?>
					<span aria-hidden="true"> &middot; </span>
					<span><?php echo nesiapress_reading_time(); ?></span>
				</div>
			</div>
		</footer><!-- .np-entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div> <!-- .entry-card -->