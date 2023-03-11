<?php
/**
 * Posts: grid 3 columns travel style 2
 */
return array(
	'title'      => __( 'Posts grid 3 columns travel style 2', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"110px","bottom":"110px","right":"1.5rem","left":"1.5rem"}}},"className":"ona-container","layout":{"contentSize":"1170px"}} -->
		<div class="wp-block-group ona-container" style="padding-top:110px;padding-right:1.5rem;padding-bottom:110px;padding-left:1.5rem"><!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"ona-post is-style-ona-post-arc-style is-style-default"} -->
		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"32px"}}} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","className":"hover-scale"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}}} -->
		<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->',
);



