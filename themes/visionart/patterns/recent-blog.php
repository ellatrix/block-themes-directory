<?php
 /**
  * Title: Recent Blog
  * Slug: VisionArt/recent-blog
  * Categories: VisionArt, query
  */
?>
<!-- wp:group {"align":"full","className":"blog-section","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull blog-section">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"68.6%"} -->
		<div class="wp-block-column" style="flex-basis:68.6%">
			<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"inherit":true}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"align":"full"} -->
				<!-- wp:group {"layout":{"inherit":true}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true,"align":"full"} /-->
					<!-- wp:group {"align":"full","className":"alignfull wp-block-post-container"} -->
					<div class="wp-block-group alignfull wp-block-post-container">
						<!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
							<div class="wp-block-group wp-block-post-meta">
								<!-- wp:post-date {"isLink":true} /-->
							</div>
						<!-- /wp:group -->
						<!-- wp:post-title {"isLink":true} /-->
						<!-- wp:post-excerpt {"moreText":"Continue Reading"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- /wp:post-template -->
				<!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next {"fontSize":"small"} /-->
				<!-- /wp:query-pagination -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"26.8%"} -->
		<div class="wp-block-column" style="flex-basis:26.8%">
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
		<h2 id="about" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('About','visionart');?></h2>
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
				<a class="wp-block-button__link wp-element-button"><?php esc_html_e('Read More','visionart');?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Recent Post','visionart');?></h2>
		<!-- /wp:heading -->
		<!-- wp:latest-posts {"excerptLength":10,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="tags" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Tags','visionart');?></h2>
		<!-- /wp:heading -->
		<!-- wp:tag-cloud {"numberOfTags":15} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Categories','visionart');?></h2>
		<!-- /wp:heading -->
		<!-- wp:categories /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->