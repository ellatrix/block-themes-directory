<?php
 /**
  * Title: Featured Content
  * Slug: artsylens/featured-content
  * Categories: artsylens, featured
  */
?>
<!-- wp:group {"align":"full","className":"wp-block-section featured-content-section"} -->
<div class="wp-block-group alignfull wp-block-section featured-content-section">
	<!-- wp:group {"align":"wide","className":"section-heading","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide section-heading">
		<!-- wp:heading {"align":"wide"} -->
		<h2 class="alignwide"><?php esc_html_e('Featured Post','artsylens');?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group">
		<!-- wp:query {"queryId":78,"query":{"perPage":"3","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[]}},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
		<div class="wp-block-query alignwide ">
			<!-- wp:post-template -->
			<!-- wp:group {"layout":{"inherit":false}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image /-->
				<!-- wp:group {"className":"entry-meta","layout":{"type":"flex","className":"entry-meta","flexWrap":"nowrap"}} -->
				<div class="wp-block-group entry-meta">
					<!-- wp:post-date {"format":"F j, Y"} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:post-title {"isLink":true} /-->
				<!-- wp:post-excerpt {"moreText":"read more"} /-->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->