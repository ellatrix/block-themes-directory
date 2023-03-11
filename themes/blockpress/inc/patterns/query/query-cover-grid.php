<?php
/**
 * Blockpress: Query grid with cover image
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'Grid with cover images', 'blockpress' ),
	'categories'    => array( 'blockpress-query' ),
 
	'blockTypes'    => array('core/query'),
	'content'       => '<!-- wp:query {"queryId":22,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"is-style-fr-innerborderquery"} -->
	<div class="wp-block-query alignwide is-style-fr-innerborderquery"><!-- wp:post-template -->
	<!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"customOverlayColor":"#12112c","minHeight":250,"minHeightUnit":"px"} -->
	<div class="wp-block-cover" style="min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#12112c"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"8px","right":"8px","bottom":"8px","left":"8px"}}}} -->
	<div class="wp-block-group" style="padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:post-terms {"term":"category","separator":"  ","style":{"elements":{"link":{"color":{"text":"#eff2f9"}}},"typography":{"textTransform":"uppercase"}},"className":"is-style-blockpress-tags-nounder","fontSize":"xsmall"} /-->
	
	<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|textonprimary"}}}},"fontSize":"big"} /-->
	
	<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"color":{"text":"#fcfcfc"}},"fontSize":"xsmall"} /-->
	
	<!-- wp:paragraph {"fontSize":"xsmall"} -->
	<p class="has-xsmall-font-size">/</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:post-date {"style":{"color":{"text":"#c1cfdf"}},"fontSize":"xsmall"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->
	<!-- /wp:post-template -->
	
	<!-- wp:spacer {"height":"10px"} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
	<!-- wp:query-pagination-previous /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query -->',
);
