<?php
/**
 * Title: Two Columns List
 * Slug: lawson/blog-posts-columns
 * Block Types: core/query
 * Categories: lawson_blog
*/
?>

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":2}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

		<!-- wp:columns -->
		<div class="wp-block-columns">

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">

				<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}}} /-->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">

				<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"4vw"}}}} -->
				<div class="wp-block-group" style="margin-bottom:4vw">

					<!-- wp:post-terms {"term":"category","className":"is-style-flip-link-hover"} /-->

					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0.75rem"}}},"fontSize":"x-large"} /-->

					<!-- wp:pattern {"slug":"lawson/postmeta"} /-->

					<!-- wp:post-excerpt {"moreText":"Continue reading &raquo;","style":{"spacing":{"margin":{"bottom":"0px"}}}} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<!-- wp:query-pagination-numbers /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
