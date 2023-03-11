<?php
 /**
  * Title: Post Listing Hidden Content
  * Slug: gutenify-magazine/post-listing-hidden-content
  * Categories: gutenify-magazine
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"30px","left":"0px"},"blockGap":"0px"}},"layout":{"inherit":true}} -->
<div
	class="wp-block-group"
	style="
		padding-top: 0px;
		padding-right: 0px;
		padding-bottom: 30px;
		padding-left: 0px;
	"
>
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px"},"margin":{"bottom":"20px"}}},"backgroundColor":"background","className":"has-no-hover-shadow-dark animated animated-fadeInUp"} -->
	<div
		class="wp-block-group alignfull has-no-hover-shadow-dark animated animated-fadeInUp has-background-background-color has-background"
		style="
			margin-bottom: 20px;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 20px;
		"
	>
	<!-- wp:pattern {"slug":"gutenify-magazine/section-title"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":1,"query":{"perPage":"6","pages":3,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}},"tagName":"main","displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
	<main class="wp-block-query alignwide">
		<!-- wp:post-template {"align":"wide"} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px"},"margin":{"top":"10px"}}},"className":"has-shadow-dark animated animated-fadeInUp","layout":{"inherit":true}} -->
		<div
			class="wp-block-group has-shadow-dark animated animated-fadeInUp"
			style="
				margin-top: 10px;
				padding-top: 0px;
				padding-right: 0px;
				padding-left: 0px;
			"
		>
			<!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"no-padding"} /-->

			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"margin":{"top":"0px"},"blockGap":"5px"}},"backgroundColor":"background"} -->
			<div
				class="wp-block-group alignwide has-background-background-color has-background"
				style="
					margin-top: 0px;
					padding-top: 30px;
					padding-right: 30px;
					padding-bottom: 30px;
					padding-left: 30px;
				"
			>
				<!-- wp:post-title {"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"1.2rem"}}} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:post-author {"avatarSize":24,"showBio":false,"fontSize":"small"} /-->

					<!-- wp:post-date {"format":"M j, Y","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|boulder"}}}},"textColor":"boulder","fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</main>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- /wp:group -->
