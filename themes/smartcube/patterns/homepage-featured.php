<?php
/**
 * Title: Homepage Featured
 * Slug: smartcube/homepage-featured
 * Block Types: core/post-content
 * Categories: smartcube_homepage
*/
?>

<!-- wp:query {"queryId":0,"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

		<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem">
			<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
			<div class="wp-block-cover__inner-container">

				<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"0px"},"blockGap":"0px"}}} -->
				<div class="wp-block-columns" style="margin-bottom:0px">

					<!-- wp:column {"width":"80%"} -->
					<div class="wp-block-column" style="flex-basis:80%">

						<!-- wp:spacer -->
						<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:group {"backgroundColor":"white","textColor":"dark-gray"} -->
						<div class="wp-block-group has-dark-gray-color has-white-background-color has-text-color has-background">

							<!-- wp:post-title {"isLink":true} /-->
							<!-- wp:post-excerpt {"moreText":"Read More \u0026raquo;","showMoreOnNewLine":false,"className":"is-style-default"} /-->

						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"20%"} -->
					<div class="wp-block-column" style="flex-basis:20%"></div>
					<!-- /wp:column -->

				</div>
				<!-- /wp:columns -->

			</div>

		</div>
		<!-- /wp:cover -->

	<!-- /wp:post-template -->

</div>
<!-- /wp:query -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5vw"}}} -->
<div class="wp-block-group">

	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"2vw","bottom":"1.5vw"}}},"backgroundColor":"primary","textColor":"white","className":"is-style-sidebar-title","fontSize":"small"} -->
	<h2 class="is-style-sidebar-title has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400;margin-top:2vw;margin-bottom:1.5vw">
		<?php _e( 'Category Title', 'smartcube' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":"1.5vw"}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">

			<!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
			<div class="wp-block-query">

				<!-- wp:post-template -->

					<!-- wp:group -->
					<div class="wp-block-group">

						<!-- wp:post-featured-image {"isLink":true,"height":"25vh"} /-->

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

						<!-- wp:post-excerpt {"moreText":"Read more","showMoreOnNewLine":false,"className":"is-style-default"} /-->

					</div>
					<!-- /wp:group -->

				<!-- /wp:post-template -->

			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">

			<!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
			<div class="wp-block-query">

				<!-- wp:post-template -->

					<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"1.5vw"}}}} -->
					<div class="wp-block-columns" style="margin-bottom:1.5vw">

						<!-- wp:column {"width":"40%"} -->
						<div class="wp-block-column" style="flex-basis:40%">

							<!-- wp:post-featured-image {"isLink":true,"className":"is-style-default","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"}}}} /-->

						</div>
						<!-- /wp:column -->

						<!-- wp:column {"width":"60%"} -->
						<div class="wp-block-column" style="flex-basis:60%">

							<!-- wp:post-title {"isLink":true,"fontSize":"regular"} /-->

							<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em","margin":{"top":"0.25rem"}}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"},"fontSize":"x-small"} -->
							<div class="wp-block-group has-gray-color has-text-color has-x-small-font-size" style="margin-top:0.25rem">

								<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}}} /-->

							</div>
							<!-- /wp:group -->

						</div>
						<!-- /wp:column -->

					</div>
					<!-- /wp:columns -->

				<!-- /wp:post-template -->

			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5vw"}}} -->
<div class="wp-block-group">

	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"2vw","bottom":"1.5vw"}}},"backgroundColor":"primary","textColor":"white","className":"is-style-sidebar-title","fontSize":"small"} -->
	<h2 class="is-style-sidebar-title has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400;margin-top:2vw;margin-bottom:1.5vw">
		<?php _e( 'Category Title', 'smartcube' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
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

				<!-- wp:post-excerpt {"moreText":"Read more","showMoreOnNewLine":false} /-->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group">

	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"2vw","bottom":"1.5vw"}}},"backgroundColor":"primary","textColor":"white","className":"is-style-sidebar-title","fontSize":"small"} -->
	<h2 class="is-style-sidebar-title has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400;margin-top:2vw;margin-bottom:1.5vw">
		<?php _e( 'About the author', 'smartcube' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"2vw"}},"backgroundColor":"light-gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group has-light-gray-background-color has-background">

		<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image size-full is-style-rounded">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-avatar.png" alt=""/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:group -->
		<div class="wp-block-group">

			<!-- wp:paragraph -->
			<p><strong>John Doe</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
