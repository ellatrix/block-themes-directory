<?php
/**
 * Posts: list travel
 */
return array(
	'title'      => __( 'Posts list travel', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"110px","bottom":"110px","right":"1.5rem","left":"1.5rem"},"blockGap":"48px"}},"layout":{"contentSize":"1170px"}} -->
		<div class="wp-block-group" style="padding-top:110px;padding-right:1.5rem;padding-bottom:110px;padding-left:1.5rem"><!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":"0","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-30"} -->
		<!-- wp:group {"tagName":"article"} -->
		<article class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"68px"}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group -->
		<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"654px","className":"hover-scale is-style-ona-image-arc-style"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"24px"}}}} -->
		<div class="wp-block-group" style="padding-top:24px"><!-- wp:post-terms {"term":"category","className":"ona-text-letter-spacing"} /-->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"16px"}}}} -->
		<div class="wp-block-group" style="margin-bottom:16px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.75rem","fontStyle":"normal","fontWeight":"500"}}} /--></div>
		<!-- /wp:group -->

		<!-- wp:post-date /-->

		<!-- wp:post-excerpt /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query -->

		<!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-30"} -->
		<!-- wp:group {"tagName":"article"} -->
		<article class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"68px"}}} -->
		<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"24px"}}}} -->
		<div class="wp-block-group" style="padding-top:24px"><!-- wp:post-terms {"term":"category","className":"ona-text-letter-spacing"} /-->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"16px"}}}} -->
		<div class="wp-block-group" style="margin-bottom:16px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.75rem","fontStyle":"normal","fontWeight":"500"}}} /--></div>
		<!-- /wp:group -->

		<!-- wp:post-date /-->

		<!-- wp:post-excerpt /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group -->
		<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"654px","className":"hover-scale is-style-ona-image-arc-style"} /--></div>

		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->',
);



