<?php
/**
 * Simple blog posts block pattern
 */
return array(
	'title'	  => __( 'Simple blog posts', 'bricksy' ),
	'categories' => array( 'bricksy-query' ),
	'blockTypes' => array( 'core/query' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"2rem","left":"2rem"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull" style="padding-right:2rem;padding-left:2rem"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"inherit":false}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:post-title /-->
	
	<!-- wp:post-featured-image {"isLink":true} /-->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"3rem"}}}} -->
	<div class="wp-block-group" style="padding-bottom:3rem"><!-- wp:post-excerpt /-->
	
	<!-- wp:group {"layout":{"type":"flex"}} -->
	<div class="wp-block-group"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
	
	<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
	
	<!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next {"fontSize":"small"} /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
);
