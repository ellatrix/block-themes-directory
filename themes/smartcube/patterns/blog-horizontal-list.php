<?php
/**
 * Title: Blog (Horizontal List)
 * Slug: smartcube/blog-horizontal-list
 * Block Types: core/query
 * Categories: smartcube_blog
*/
?>

<!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"1.25vw"},"padding":{"top":"0.5rem","right":"0.5rem","left":"0.5rem"},"blockGap":"1.25vw"}}} -->
		<div class="wp-block-group" style="margin-bottom:1.25vw;padding-top:0.5rem;padding-right:0.5rem;padding-left:0.5rem">

			<!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0.5rem"}}}} -->
			<div class="wp-block-columns" style="padding-bottom:0.5rem">

				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">

					<!-- wp:post-featured-image {"isLink":true,"className":"is-style-full-height","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"}}}} /-->

				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">

					<!-- wp:post-title {"isLink":true} /-->

					<!-- wp:pattern {"slug":"smartcube/postmeta"} /-->

					<!-- wp:post-excerpt {"moreText":"Read more","className":"is-style-read-more-button"} /-->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

			<!-- wp:separator {"backgroundColor":"light-gray","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
			<!-- /wp:separator -->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"1.25vw","margin":{"top":"1.25vw"},"padding":{"right":"0.5rem","left":"0.5rem","bottom":"0.5rem"}}}} -->
	<div class="wp-block-group" style="margin-top:1.25vw;padding-right:0.5rem;padding-bottom:0.5rem;padding-left:0.5rem">

		<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<!-- wp:query-pagination-numbers /-->
		<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->
