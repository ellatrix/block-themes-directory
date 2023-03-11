<?php
 /**
  * Title: Post Listing
  * Slug: gutenify-store/post-listing
  * Categories: gutenify-store
  */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} -->
	<main class="wp-block-query alignwide">
			<!-- wp:post-template {"align":"wide"} -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"has-shadow-dark","layout":{"inherit":true}} -->
			<div class="wp-block-group has-shadow-dark"
					style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
					<!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

					<!-- wp:columns {"align":"wide","className":"gutenify-store-post-content"} -->
					<div class="wp-block-columns alignwide gutenify-store-post-content">
							<!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"0px","right":"40px","bottom":"40px","left":"40px"}}}} -->
							<div class="wp-block-column"
									style="padding-top:0px;padding-right:40px;padding-bottom:40px;padding-left:40px">
									<!-- wp:post-title {"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} /-->

									<!-- wp:post-excerpt /-->

									<!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /-->
							</div>
							<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->

			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- /wp:post-template -->

			<!-- wp:query-pagination {"paginationArrow":"arrow","align":"center","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next {"fontSize":"small"} /-->
			<!-- /wp:query-pagination -->
	</main>
<!-- /wp:query -->
