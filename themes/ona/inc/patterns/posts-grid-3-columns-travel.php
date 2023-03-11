<?php
/**
 * Posts: grid 3 columns travel
 */
return array(
	'title'      => __( 'Posts grid 3 columns travel', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"110px"}}},"className":"ona-container","layout":{"contentSize":"1170px"}} -->
		<div class="wp-block-group ona-container" style="padding-top:0px;padding-bottom:110px"><!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"ona-post is-style-ona-post-grid-gap-30 is-style-ona-post-arc-style"} -->
		<!-- wp:group {"tagName":"article"} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"576px","className":"hover-scale"} /-->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"},"blockGap":"1rem"}},"className":"ona-post-body-overlap ona-post-body-overlap\u002d\u002dbottom"} -->
		<div class="wp-block-group ona-post-body-overlap ona-post-body-overlap--bottom" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} /-->

		<!-- wp:post-date {"textAlign":"center"} /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->',
);



