<?php
return [
	'title' => __('Page: Blog Centered', 'elyn'),
	'categories' => ['elyn-blog'],
	'content' => '
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"4rem","top":"4rem"}}}} -->
		<div class="wp-block-group" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0rem","right":"0rem","bottom":"1rem","left":"0rem"}}}} -->
		<h1 class="has-text-align-center" id="our-blog" style="margin-top:0rem;margin-right:0rem;margin-bottom:1rem;margin-left:0rem">Our Blog</h1>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->
				
		<!-- wp:query {"queryId":3,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"main","displayLayout":{"type":"list","columns":3},"layout":{"inherit":false,"contentSize":"781px"}} -->
		<main class="wp-block-query"><!-- wp:post-template -->
		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->
		
		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.5rem"}}},"fontSize":"medium-large"} /-->
		
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0rem"},"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group" style="margin-top:0rem;padding-top:0px;padding-bottom:0px"><!-- wp:post-date {"fontSize":"tiny"} /-->
		
		<!-- wp:post-terms {"term":"category","fontSize":"tiny"} /--></div>
		<!-- /wp:group -->
		
		<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"1rem"}}},"fontSize":"small"} /--></div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
		
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"inherit":true}} -->
		<div class="wp-block-group" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
		<!-- wp:query-pagination-numbers /-->
		<!-- /wp:query-pagination --></div>
		<!-- /wp:group --></main>
		<!-- /wp:query -->
	',
];
