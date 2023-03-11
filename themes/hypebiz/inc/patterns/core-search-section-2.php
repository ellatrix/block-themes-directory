<?php
/**
 * Core Search Section 2 content.
 */
return array(
	'title'      => __( 'Core Search Section 2', 'hypebiz' ),
	'categories' => array( 'hypebiz-basic' ),
	'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"80px","bottom":"100px"}}},"backgroundColor":"seventh","textColor":"third","layout":{"wideSize":"1140px","contentSize":"1140px"}} -->
			<main class="wp-block-group has-third-color has-seventh-background-color has-text-color has-background" style="padding-top:80px;padding-bottom:100px"><!-- wp:group -->
			<div class="wp-block-group"><!-- wp:query {"queryId":24,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"className":"hypebiz-post-template-gap"} -->
			<div class="wp-block-query hypebiz-post-template-gap"><!-- wp:post-template -->
			<!-- wp:post-featured-image {"isLink":true,"height":"220px","align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} /-->

			<!-- wp:post-date {"style":{"typography":{"fontSize":"14px"}},"textColor":"third"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px","lineHeight":"1.7"}},"textColor":"primary"} /-->

			<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|third"}}}},"textColor":"fourth"} /-->
			<!-- /wp:post-template -->

			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
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
