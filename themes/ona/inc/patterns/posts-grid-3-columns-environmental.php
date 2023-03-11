<?php
/**
 * Posts: grid 3 columns environmental
 */
return array(
	'title'      => __( 'Posts grid 3 columns environmental', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.5rem","left":"1.5rem","top":"100px","bottom":"80px"}}},"layout":{"contentSize":"1170px"}} -->
		<div class="wp-block-group" style="padding-top:100px;padding-right:1.5rem;padding-bottom:80px;padding-left:1.5rem"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"48px"}}},"fontSize":"large"} -->
		<h2 class="has-text-align-center has-large-font-size" style="margin-bottom:48px">' . __( 'Popular Posts', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"queryId":1,"query":{"perPage":"6","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-30"} -->
		<!-- wp:group {"tagName":"article"} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","className":"hover-scale is-style-ona-rounded"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /--></div>
		<!-- /wp:group -->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"18px"}}},"fontSize":"medium"} /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->',
);



