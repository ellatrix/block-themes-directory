<?php
/**
 * Blockpress: Query grid with three columns
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'Grid of posts with excerpt', 'blockpress' ),
	'categories'    => array( 'blockpress-query' ),
 
	'blockTypes'    => array('core/query'),
	'content'       => '<!-- wp:query {"queryId":55,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"is-style-default"} -->
	<div class="wp-block-query alignwide is-style-default"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true,"height":"230px","className":"fr-hover-scale-img"} /-->
	
	<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}}} -->
	<div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":"  ","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-blockpress-tags-nounder","fontSize":"xsmall"} /-->
	
	<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"subheading"} /-->
	
	<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"1.1rem"},"spacing":{"margin":{"top":"5px"}}},"textColor":"lightgrey","className":"is-style-text-clamp-two"} /-->
	
	<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"xsmall"} /-->
	
	<!-- wp:paragraph {"fontSize":"xsmall"} -->
	<p class="has-xsmall-font-size">/</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:post-date {"textColor":"lightgrey","fontSize":"xsmall"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:spacer {"height":26} -->
	<div style="height:26px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
	<!-- wp:query-pagination-previous /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query -->',
);
