<?php
 /**
  * Title: Hero Content
  * Slug: artsylens/hero-content
  * Categories: artsylens, featured
  */
?>

<!-- wp:group {"align":"full","className":"hero-content wp-block-section","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull hero-content wp-block-section">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/hero-content.jpg' ); ?>","id":21853,"dimRatio":0,"minHeight":736,"minHeightUnit":"px"} -->
			<div class="wp-block-cover" style="min-height:736px">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
				<img class="wp-block-cover__image-background wp-image-21853" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/hero-content.jpg' ); ?>" data-object-fit="cover"/>
				<div class="wp-block-cover__inner-container">
					<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size"></p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"huge"} -->
			<h2 class="has-huge-font-size"><?php  esc_html_e( 'Discover', 'artsylens' );?></h2>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":3} -->
			<h3><?php  esc_html_e( 'Outstanding Photography WordPress Theme For Your Website.', 'artsylens' );?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php  esc_html_e( 'he word Photography literally means drawing with light, which derives from the Greek photo, meaning light and graph, meaning to draw.', 'artsylens' );?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill">
					<a class="wp-block-button__link"><?php  esc_html_e( 'View More', 'artsylens' );?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->