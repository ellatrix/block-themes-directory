<?php
/**
 * Title: Magazine Horizontal
 * Slug: smartcube/magazine-horizontal
 * Categories: smartcube_magazine
*/
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5vw"}}} -->
<div class="wp-block-group">

	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"2vw","bottom":"1.5vw"}}},"backgroundColor":"primary","textColor":"white","className":"is-style-sidebar-title","fontSize":"small"} -->
	<h2 class="is-style-sidebar-title has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400;margin-top:2vw;margin-bottom:1.5vw">
		<?php _e( 'Category Title', 'smartcube' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

			<!-- wp:columns -->
			<div class="wp-block-columns">

				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">

					<!-- wp:post-featured-image {"isLink":true,"className":"is-style-full-height","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"}}}} /-->

				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">

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

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

	<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"1","offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

			<!-- wp:group -->
			<div class="wp-block-group">

				<!-- wp:post-featured-image {"isLink":true,"height":"20vh"} /-->

				<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em","margin":{"top":"0.5rem"}}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"},"fontSize":"small"} -->
				<div class="wp-block-group has-gray-color has-text-color has-small-font-size" style="margin-top:0.5rem">

					<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}}} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
