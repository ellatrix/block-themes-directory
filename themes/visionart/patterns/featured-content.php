<?php
 /**
  * Title: Featured Content
  * Slug: VisionArt/featured-content
  * Categories: VisionArt, header
  */
?>
<!-- wp:group {"align":"full","className":"featured-section wp-block-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull featured-section wp-block-section">
	<!-- wp:group {"align":"wide","className":"section-heading","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section-heading">
		<!-- wp:paragraph {"className":"sub-heading"} -->
		<p class="sub-heading"><?php esc_html_e('Our Blog','visionart');?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"fontSize":"section-title"} -->
		<h2 class="has-section-title-font-size"><?php esc_html_e('Read Our Latest news','visionart');?></h2>
		<!-- /wp:heading -->
		<!-- wp:separator {"backgroundColor":"sep-color","className":"sep is-style-default"} -->
		<hr class="wp-block-separator has-text-color has-sep-color-color has-alpha-channel-opacity has-sep-color-background-color has-background sep is-style-default"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","className":"featured-row","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide featured-row">
		<!-- wp:query {"queryId":17,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
			<!-- wp:group {"layout":{"inherit":false}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image /-->
				<!-- wp:group {"className":"featured-content","layout":{"type":"constrained"}} -->
				<div class="wp-block-group featured-content">
					<!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group wp-block-post-meta">
						<!-- wp:post-date {"format":"F j, Y","isLink":true} /-->
						<!-- wp:post-author {"showAvatar":false} /-->
					</div>
					<!-- /wp:group -->
					<!-- wp:post-title {"level":4,"isLink":true} /-->
					<!-- wp:post-excerpt {"moreText":"Read More"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->