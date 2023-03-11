<?php
/**
 * Default posts block pattern
 */
return array(
	'title'	  => __( 'Default posts', 'bricksy' ),
	'categories' => array( 'bricksy-query' ),
	'blockTypes' => array( 'core/query' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-group alignfull" style="padding-right:2rem;padding-left:2rem"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true} /-->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"3rem"}}}} -->
	<div class="wp-block-group" style="padding-bottom:3rem"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtypography\u002d\u002dfont-size\u002d\u002dhuge, clamp(2.25rem, 4vw, 2.75rem))"} /-->
	
	<!-- wp:group {"layout":{"type":"flex"}} -->
	<div class="wp-block-group"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
	
	<!-- wp:post-terms {"term":"category","fontSize":"small"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:post-excerpt {"moreText":"Read More"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next {"fontSize":"small"} /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
