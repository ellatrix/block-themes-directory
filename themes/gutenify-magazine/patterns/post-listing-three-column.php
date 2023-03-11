<?php
 /**
  * Title: Post Listing Column Three
  * Slug: gutenify-magazine/post-listing-three-column
  * Categories: gutenify-magazine
  */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":"8","pages":"","offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"main","displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} -->
<main class="wp-block-query alignwide">
	<!-- wp:post-template {"align":"wide"} -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"has-shadow-dark animated animated-fadeInUp","layout":{"inherit":true}} -->
	<div
		class="wp-block-group has-shadow-dark animated animated-fadeInUp"
		style="
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		"
	>
		<!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"no-padding"} /-->

		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"}}}} -->
		<div
			class="wp-block-group alignwide"
			style="
				margin-top: 0px;
				padding-top: 40px;
				padding-right: 40px;
				padding-bottom: 40px;
				padding-left: 40px;
			"
		>
			<!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4","fontSize":"1.3rem"}}} /-->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:post-author {"avatarSize":24,"showBio":false,"fontSize":"small"} /-->

				<!-- wp:post-date {"format":"M j, Y","isLink":true,"fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-excerpt {"moreText":"Know More","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"20px"} -->
	<div style="height: 20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"center","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

	<!-- wp:query-pagination-numbers /-->

	<!-- wp:query-pagination-next {"fontSize":"small"} /-->
	<!-- /wp:query-pagination -->
</main>
<!-- /wp:query -->