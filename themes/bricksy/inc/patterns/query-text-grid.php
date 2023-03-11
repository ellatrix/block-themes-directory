<?php
/**
 * Text-based grid of posts block pattern
 */
return array(
	'title'	  => __( 'Text-based grid of posts', 'bricksy' ),
	'categories' => array( 'bricksy-query' ),
	'blockTypes' => array( 'core/query' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-group alignfull" style="padding-right:2rem;padding-left:2rem"><!-- wp:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":12},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
	<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
	
	<!-- wp:post-excerpt /-->
	
	<!-- wp:post-date {"format":"F j, Y","isLink":true,"fontSize":"small"} /-->
	<!-- /wp:post-template -->
	
	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next {"fontSize":"small"} /-->
	<!-- /wp:query-pagination -->
	
	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
);
