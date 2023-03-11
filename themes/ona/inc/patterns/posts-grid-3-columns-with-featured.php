<?php
/**
 * Posts: grid 3 columns with featured
 */
return array(
	'title'      => __( 'Posts grid 3 columns with featured', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"100px","right":"1.5rem","left":"1.5rem","top":"68px"}}},"className":"is-style-no-spacing","layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group is-style-no-spacing" style="padding-top:68px;padding-right:1.5rem;padding-bottom:100px;padding-left:1.5rem"><!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"wide","layout":{"inherit":false}} -->
			<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-40"} -->
			<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
			<article class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"64px"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","className":"hover-scale is-style-ona-rounded","style":{"color":{}}} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
			<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /-->

			<!-- wp:post-date /--></div>
			<!-- /wp:group -->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"18px"}}},"fontSize":"x-large"} /-->

			<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"1.125rem"}}} /-->

			<!-- wp:post-author {"avatarSize":24,"fontSize":"small"} /--></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></article>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
			<!-- /wp:query -->

			<!-- wp:spacer {"height":"16px"} -->
			<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
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



