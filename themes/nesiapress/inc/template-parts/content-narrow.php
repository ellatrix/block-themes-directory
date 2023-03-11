<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	if (get_post_type() === 'post') {
		?>
		<header class="entry-header-narrow">
			<?php nesiapress_entry_cat_links();?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="np-entry-meta-narrow">
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
			</div>
		</header>
	<?php }?>

	<?php if (get_post_type() === 'page') { ?>
		<header class="entry-header-narrow">
			<?php nesiapress_entry_cat_links();?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
	<?php }?>

	<div class="entry-content-narrow">
		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'nesiapress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'nesiapress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div>

	<footer class="entry-footer-narrow">
		<?php nesiapress_entry_footer(); ?>
	</footer>

</article>
