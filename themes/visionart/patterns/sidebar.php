<?php
 /**
  * Title: Sidebar
  * Slug: VisionArt/sidebar
  * Categories: VisionArt, featured,pages
  */
?>
<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar">
	<!-- wp:group {"className":"wp-block-widget about"} -->
	<div class="wp-block-group wp-block-widget about">
		<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget about"} -->
	<div class="wp-block-group wp-block-widget about">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="about" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e( 'About', 'visionart' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large">
			<img src="<?php echo get_parent_theme_file_uri( '/assets/images/team-3.jpg' ); ?>" alt=""/>
		</figure>
		<!-- /wp:image -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e('Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Maecenas odio lacus, dignissim sollicitudin finibus
            commodo, rhoncus et ante.','visionart');?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read More', 'visionart' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e( 'Recent Post', 'visionart' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:latest-posts {"excerptLength":10,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="tags" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e( 'Tags', 'visionart' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:tag-cloud {"numberOfTags":15} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e( 'Categories', 'visionart' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:categories /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->