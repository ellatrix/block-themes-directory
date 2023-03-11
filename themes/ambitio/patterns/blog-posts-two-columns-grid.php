<?php
/**
 * Title: Two Columns Grid
 * Slug: ambitio/blog-posts-two-columns-grid
 * Block Types: core/query
 * Categories: ambitio_blog
*/
?>

<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":2},"className":"blog-posts-grid"} -->
<div class="wp-block-query blog-posts-grid">

	<!-- wp:post-template -->

		<!-- wp:group -->
		<div class="wp-block-group">

			<!-- wp:post-featured-image {"isLink":true,"height":"30vw","style":{"spacing":{"margin":{"top":"0px"}}}} /-->

			<!-- wp:post-title {"isLink":true,"fontSize":"xx-large"} /-->

			<!-- wp:pattern {"slug":"ambitio/postmeta"} /-->

			<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eContinue reading\u003c/strong\u003e","style":{"spacing":{"margin":{"bottom":"0px"}}}} /-->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<!-- wp:query-pagination-numbers /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
