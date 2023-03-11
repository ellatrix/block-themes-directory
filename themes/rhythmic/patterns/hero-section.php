<?php
 /**
  * Title: Hero Section
  * Slug: Rhythmic/hero-section	
  * Categories: Rhythmic, featured
  */
?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/hero-content.jpg' ); ?>","id":696,"dimRatio":0,"isDark":false,"align":"full","className":"hero-section wp-block-section"} -->
<div class="wp-block-cover alignfull is-light hero-section wp-block-section">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-696" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/hero-content.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:media-text {"mediaPosition":"right","className":"hero-content"} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile hero-content">
				<figure class="wp-block-media-text__media"></figure>
				<div class="wp-block-media-text__content">
					<!-- wp:heading -->
					<h2><?php esc_html_e('Artist Bio','rhythmic');?></h2>
					<!-- /wp:heading -->
					<!-- wp:heading {"level":4} -->
					<h4><?php esc_html_e('If I can play one note and make you cry, then that’s better than those fancy dancers playing twenty notes.','rhythmic');?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna erat, suscipit sed laoreet nec, viverra id leo. Curabitur sit amet posuere velit, et sodales nibh. Quisque nec leo facilisis, ornare ante id, fringilla turpis. Vestibulum iaculis erat eu nisi euismod porttitor.','rhythmic');?></p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button">
							<a class="wp-block-button__link"><?php esc_html_e('View more','rhythmic');?></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
			</div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->