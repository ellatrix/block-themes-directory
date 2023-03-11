<?php
 /**
  * Title: Section Title
  * Slug: gutenify-magazine/section-title
  * Categories: gutenify-magazine
  */
?>
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foreground","className":"animated animated-fadeInUp"} -->
			<h3
				class="alignwide animated animated-fadeInUp has-foreground-color has-text-color"
				style="font-style: normal; font-weight: 600"
			>
				<?php echo esc_html__( 'Tending  News', 'gutenify-magazine' ); ?>
			</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"}}}},"textColor":"vivid-red"} -->
			<p class="has-vivid-red-color has-text-color has-link-color">
				<a href="#"
					><strong
						><?php echo esc_html__( 'View More', 'gutenify-magazine' ); ?></strong
					></a
				>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
