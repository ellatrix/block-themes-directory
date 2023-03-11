<?php
/**
 * Title: Blog (Search List)
 * Slug: smartcube/blog-search-list
 * Block Types: core/query
 * Categories: smartcube_blog
 * Inserter: no
*/
?>

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":2}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"1.25vw"},"padding":{"top":"0.5rem","right":"0.5rem","left":"0.5rem"},"blockGap":"1.25vw"}}} -->
		<div class="wp-block-group" style="margin-bottom:1.25vw;padding-top:0.5rem;padding-right:0.5rem;padding-left:0.5rem">

			<!-- wp:post-title {"isLink":true} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em","margin":{"top":"0.75rem"}}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"}} -->
			<div class="wp-block-group has-gray-color has-text-color" style="margin-top:0.75rem">

				<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}}} /-->

				<!-- wp:paragraph -->
				<p>–</p>
				<!-- /wp:paragraph -->

				<!-- wp:post-author {"showAvatar":false} /-->

			</div>
			<!-- /wp:group -->

			<!-- wp:post-excerpt {"moreText":"Read more","showMoreOnNewLine":false} /-->

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
