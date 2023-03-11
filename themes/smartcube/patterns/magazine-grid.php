<?php
/**
 * Title: Magazine Grid
 * Slug: smartcube/magazine-grid
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

	<!-- wp:query {"queryId":1,"query":{"perPage":"6","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

			<!-- wp:group -->
			<div class="wp-block-group">

				<!-- wp:post-featured-image {"isLink":true,"height":"20vh"} /-->

				<!-- wp:post-title {"isLink":true,"fontSize":"regular"} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em","margin":{"top":"0.25rem"}}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"},"fontSize":"x-small"} -->
				<div class="wp-block-group has-gray-color has-text-color has-x-small-font-size" style="margin-top:0.25rem">

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
