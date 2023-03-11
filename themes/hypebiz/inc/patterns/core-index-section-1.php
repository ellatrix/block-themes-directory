<?php
/**
 * Core Index Section 1 content.
 */
return array(
	'title'      => __( 'Core Index Section 1', 'hypebiz' ),
	'categories' => array( 'hypebiz-basic' ),
	'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"80px","bottom":"100px"}}},"backgroundColor":"seventh","textColor":"third","layout":{"inherit":true}} -->
			<main class="wp-block-group has-third-color has-seventh-background-color has-text-color has-background" style="padding-top:80px;padding-bottom:100px"><!-- wp:group -->
			<div class="wp-block-group"><!-- wp:query {"queryId":24,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"hypebiz-post-template-gap"} -->
			<div class="wp-block-query hypebiz-post-template-gap"><!-- wp:post-template -->
			<!-- wp:post-featured-image {"isLink":true,"height":"220px","align":"wide","style":{"spacing":{"margin":{"bottom":"20px","right":"0px"}}}} /-->

			<!-- wp:post-date {"style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|third"}}}},"backgroundColor":"white","textColor":"third"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px","lineHeight":"1.7"},"spacing":{"margin":{"right":"0px"}}},"textColor":"fourth"} /-->

			<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"20px","bottom":"20px","right":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|third"}}}},"textColor":"fourth"} /-->
			<!-- /wp:post-template -->

			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:query --></div>
			<!-- /wp:group -->

			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:query {"queryId":21,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"hypebiz-post-template-gap"} -->
			<div class="wp-block-query hypebiz-post-template-gap"><!-- wp:post-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"radius":"0px"}},"backgroundColor":"white","className":"is-style-customboxshadowtwo","layout":{"inherit":false}} -->
			<div class="wp-block-group is-style-customboxshadowtwo has-white-background-color has-background" style="border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px"}},"textColor":"fourth"} /-->

			<!-- wp:post-excerpt {"moreText":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|third"}}}},"textColor":"fifth"} /-->

			<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|third"}}}},"textColor":"third"} /--></div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|third"}}}},"textColor":"fifth","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination --></div>
			<!-- /wp:query --></div>
			<!-- /wp:group --></main>
			<!-- /wp:group -->',
);
