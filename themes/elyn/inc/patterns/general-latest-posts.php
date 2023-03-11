<?php
return [
	'title' => __('General: Latest Posts', 'elyn'),
	'categories' => ['elyn-general'],
	'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"6rem"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-bottom: 6rem">
	<!-- wp:query {"queryId":20,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
		<h3 class="has-text-align-center" id="from-the-blog" style="margin-bottom: 3rem">From the blog</h3>
		<!-- /wp:heading -->

		<!-- wp:post-template -->
		<!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group"><!-- wp:post-date {"fontSize":"small"} /--></div>
		<!-- /wp:group -->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"1rem","top":"0.5rem"}}},"fontSize":"lg"} /-->

		<!-- wp:post-excerpt {"fontSize":"small"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->',
];

