<?php
/**
 * Posts: list creative
 */
return array(
	'title'      => __( 'Posts list creative', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"backgroundColor":"background-light","className":"ona-container is-style-no-spacing","layout":{"contentSize":"1170px"}} -->
		<div class="wp-block-group ona-container is-style-no-spacing has-background-light-background-color has-background" style="padding-top:100px;padding-bottom:100px"><!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template {"className":"ona-post-list"} -->
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"collapse-md-down"} -->
		<div class="wp-block-columns alignwide collapse-md-down"><!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"height":"100%","className":"hover-scale","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","backgroundColor":"background","className":"is-style-no-spacing"} -->
		<div class="wp-block-column is-style-no-spacing has-background-background-color has-background" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10%","right":"10%","bottom":"10%","left":"10%"}}}} -->
		<div class="wp-block-group" style="padding-top:10%;padding-right:10%;padding-bottom:10%;padding-left:10%"><!-- wp:post-terms {"term":"category","className":"ona-text-letter-spacing"} /-->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem","bottom":"0.81rem"}}}} /-->

		<!-- wp:post-date /-->

		<!-- wp:post-excerpt /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->',
);



