<?php
/**
 * Posts: grid 2 columns no image
 */
return array(
	'title'      => __( 'Posts grid 2 columns no image', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.5rem","left":"1.5rem","top":"100px","bottom":"0px"}}},"layout":{"contentSize":"1170px"}} -->
		<div class="wp-block-group" style="padding-top:100px;padding-right:1.5rem;padding-bottom:0px;padding-left:1.5rem"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"48px"}}},"fontSize":"large"} -->
		<h2 class="has-large-font-size" style="margin-bottom:48px">' . __( 'Trending News', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"queryId":1,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-64"} -->
		<!-- wp:group {"tagName":"article"} -->
		<article class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /--></div>
		<!-- /wp:group -->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"18px"}}},"fontSize":"medium"} /-->

		<!-- wp:post-excerpt {"moreText":""} /-->

		<!-- wp:post-author {"avatarSize":24,"fontSize":"small"} /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px"}}}} -->
		<div class="wp-block-group" style="padding-top:80px"><!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);



