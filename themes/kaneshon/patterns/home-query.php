<?php
/**
 * Title: Home Query
 * Slug: kaneshon/home-query
 * Categories: kaneshon
 * Block Types: core/cover, core/buttons
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query">
	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"25px"}}},"className":"is-not-stacked-on-mobile"} -->
	<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-bottom:25px">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px"}}},"className":"has-medium-font-size"} -->
			<h2 class="has-medium-font-size" style="margin-bottom:0px"><?php esc_html_e( 'Category name', 'kaneshon' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:paragraph {"align":"right","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"heading","fontSize":"medium"} -->
			<p class="has-text-align-right has-text-dark-color has-text-color has-medium-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><a href="#"><?php esc_html_e( 'View all articles', 'kaneshon' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:post-template {"style":{"spacing":{"margin":{"bottom":"35px"}}}} -->
	<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"kaneshon_listing_item","style":{"spacing":{"margin":{"bottom":"15px"}}}} /-->

	<!-- wp:post-date {"fontSize":"small"} /-->

	<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px"}}},"fontSize":"medium"} /-->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
