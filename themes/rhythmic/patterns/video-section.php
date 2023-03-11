<?php
 /**
  * Title: Video section
  * Slug: Rhythmic/video-section	
  * Categories: Rhythmic, featured
  */
?>
<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/video-bg.jpg' ); ?>","id":21902,"dimRatio":50,"align":"full","className":"video-section wp-block-section"} -->
<div class="wp-block-cover alignfull video-section wp-block-section">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-21902" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/video-bg.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:group {"align":"wide","className":"video-content"} -->
			<div class="wp-block-group alignwide video-content">
				<!-- wp:embed {"url":"https://www.youtube.com/watch?v=tYZOkUyiv-A","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
				<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
					<div class="wp-block-embed__wrapper">
https://www.youtube.com/watch?v=tYZOkUyiv-A
</div>
				</figure>
				<!-- /wp:embed -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->