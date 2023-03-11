<?php
/**
 * Posts: grid 2 columns sticky on scroll
 */
return array(
	'title'      => __( 'Posts grid 2 columns sticky on scroll', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"ona-container","layout":{"contentSize":"1170px"}} -->
		<div class="wp-block-group ona-container" style="padding-top:100px;padding-bottom:100px"><!-- wp:columns {"style":{"spacing":{"blockGap":"5%"}}} -->
		<div class="wp-block-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"className":"ona-sticky-element"} -->
		<div class="wp-block-group ona-sticky-element"><!-- wp:query {"queryId":25,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template -->
		<!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"hover-scale"} /-->

		<!-- wp:group {"className":"ona-post-body-overlap"} -->
		<div class="wp-block-group ona-post-body-overlap"><!-- wp:post-terms {"term":"category","textAlign":"center","className":"ona-text-letter-spacing"} /-->

		<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}}}} /-->

		<!-- wp:post-date {"textAlign":"center"} /--></div>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:query {"queryId":25,"query":{"perPage":"6","pages":0,"offset":"1","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
		<div class="wp-block-query"><!-- wp:post-template -->
		<!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"hover-scale"} /-->

		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"ona-text-letter-spacing"} /-->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}}},"fontSize":"base"} /-->

		<!-- wp:post-date /--></div>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);



