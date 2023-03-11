<?php
/**
 * Title: Magazine Single Post
 * Slug: smartcube/magazine-single-post
 * Categories: smartcube_magazine
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
