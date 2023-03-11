<?php
/**
 * Title: Two Columns Grid
 * Slug: driven/blog-posts-grid
 * Block Types: core/query
 * Categories: driven_blog
*/
?>

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3.5vw"}}}} -->
		<div class="wp-block-group" style="margin-bottom:3.5vw">

			<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em"}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"},"fontSize":"small"} -->
			<div class="wp-block-group has-gray-color has-text-color has-small-font-size">

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
				<p style="font-style:normal;font-weight:700"><?php _e( 'Posted on', 'driven' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em","margin":{"top":"0px"}}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"},"fontSize":"small"} -->
			<div class="wp-block-group has-gray-color has-text-color has-small-font-size" style="margin-top:0px">

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
				<p style="font-style:normal;font-weight:700"><?php _e( 'by', 'driven' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

			</div>
			<!-- /wp:group -->

			<!-- wp:post-title {"isLink":true,"className":"is-style-underlined-heading","fontSize":"x-large"} /-->

			<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eContinue reading\u003c/strong\u003e","style":{"spacing":{"margin":{"bottom":"0px"}}}} /-->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<!-- wp:query-pagination-numbers /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
