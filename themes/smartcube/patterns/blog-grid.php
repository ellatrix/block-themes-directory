<?php
/**
 * Title: Blog (Grid)
 * Slug: smartcube/blog-grid
 * Block Types: core/query
 * Categories: smartcube_blog
*/
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0.5rem","top":"0.5rem","bottom":"0.5rem","left":"0.5rem"}}}} -->
<div class="wp-block-group" style="padding-top:0.5rem;padding-right:0.5rem;padding-bottom:0.5rem;padding-left:0.5rem">

	<!-- wp:query {"queryId":1,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

			<!-- wp:group -->
			<div class="wp-block-group">

				<!-- wp:post-featured-image {"isLink":true,"height":"25vh"} /-->

				<!-- wp:post-title {"isLink":true} /-->

				<!-- wp:pattern {"slug":"smartcube/postmeta"} /-->

				<!-- wp:post-excerpt {"moreText":"Read more","className":"is-style-read-more-button"} /-->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"1.25vw","margin":{"top":"1.25vw"},"padding":{"top":"0.5rem"}}}} -->
		<div class="wp-block-group" style="margin-top:1.25vw;padding-top:0.5rem">

				<!-- wp:separator {"backgroundColor":"light-gray","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<!-- wp:query-pagination-numbers /-->
				<!-- /wp:query-pagination -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
