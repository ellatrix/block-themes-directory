<?php
 /**
  * Title: Header Media
  * Slug: Rhythmic/header-media	
  * Categories: Rhythmic, featured
  */
?>
<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider-one.jpg' ); ?>","id":655,"dimRatio":0,"isDark":false,"align":"full","className":"header-media wp-block-section"} -->
<div class="wp-block-cover alignfull is-light header-media wp-block-section">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-655" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider-one.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"className":"slider-content"} -->
				<div class="wp-block-column slider-content">
					<!-- wp:heading {"fontSize":"huge"} -->
					<h2 class="has-huge-font-size"><?php esc_html_e('Authentic','rhythmic');?></h2>
					<!-- /wp:heading -->
					<!-- wp:heading {"level":4,"fontSize":"content-heading"} -->
					<h4 class="has-content-heading-font-size"><?php esc_html_e('Now Available','rhythmic');?></h4>
					<!-- /wp:heading -->
					<!-- wp:group {"className":"icon-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
					<div class="wp-block-group icon-row">
						<!-- wp:image {"id":22476,"sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full">
							<a href="#">
								<img src="<?php echo get_parent_theme_file_uri( '/assets/images/google-play.png' ); ?>"/>
							</a>
						</figure>
						<!-- /wp:image -->
						<!-- wp:image {"id":22477,"sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full">
							<a href="#">
								<img src="<?php echo get_parent_theme_file_uri( '/assets/images/apple-music.png' ); ?>"/>
							</a>
						</figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->