<?php
/**
 * Title: Sidebar Widgets
 * Slug: smartcube/sidebar-widgets
 * Inserter: no
*/
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"margin":{"bottom":"0.5rem"}}},"backgroundColor":"white","className":"widget"} -->
<div class="wp-block-group widget has-white-background-color has-background" style="margin-bottom:0.5rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"primary","textColor":"white","className":"is-style-sidebar-title","fontSize":"small"} -->
	<h2 class="is-style-sidebar-title has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400">
		<?php _e( 'Recent Posts', 'smartcube' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"1vw","bottom":"0vw"},"blockGap":"1vw"}}} -->
			<div class="wp-block-columns" style="margin-top:1vw;margin-bottom:0vw">

				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">

					<!-- wp:post-featured-image {"isLink":true,"className":"is-style-default","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"}}}} /-->

				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">

					<!-- wp:post-title {"isLink":true,"fontSize":"x-small"} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em","margin":{"top":"0.25rem"}}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"},"fontSize":"tiny"} -->
					<div class="wp-block-group has-gray-color has-text-color has-tiny-font-size" style="margin-top:0.25rem">

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
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"margin":{"bottom":"0.5rem"}}},"backgroundColor":"white","className":"widget"} -->
<div class="wp-block-group widget has-white-background-color has-background" style="margin-bottom:0.5rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"primary","textColor":"white","className":"is-style-sidebar-title","fontSize":"small"} -->
		<h2 class="is-style-sidebar-title has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400">
			<?php _e( 'Categories', 'smartcube' ); ?>
		</h2>
		<!-- /wp:heading -->

	<!-- wp:categories /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"margin":{"bottom":"0.5rem"}}},"backgroundColor":"white","className":"widget"} -->
<div class="wp-block-group widget has-white-background-color has-background" style="margin-bottom:0.5rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"primary","textColor":"white","className":"is-style-sidebar-title","fontSize":"small"} -->
		<h2 class="is-style-sidebar-title has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400">
			<?php _e( 'Archives', 'smartcube' ); ?>
		</h2>
		<!-- /wp:heading -->

	<!-- wp:archives /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"margin":{"bottom":"0.5rem"}}},"backgroundColor":"white","className":"widget"} -->
<div class="wp-block-group widget has-white-background-color has-background" style="margin-bottom:0.5rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"primary","textColor":"white","className":"is-style-sidebar-title","fontSize":"small"} -->
		<h2 class="is-style-sidebar-title has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400">
			<?php _e( 'Tags', 'smartcube' ); ?>
		</h2>
		<!-- /wp:heading -->

	<!-- wp:tag-cloud /-->

</div>
<!-- /wp:group -->
