<?php
/**
 * Blockpress: Query list with three columns
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'List of posts with creative style', 'blockpress' ),
	'categories'    => array( 'blockpress-query' ),
	'blockTypes'    => array('core/query'),
	'content'       => '<!-- wp:query {"queryId":56,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"is-style-fr-box-creative"} -->
	<div class="wp-block-query is-style-fr-box-creative"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"blockGap":"15px"}},"backgroundColor":"white","className":"fr-negative-top-40"} -->
	<div class="wp-block-group fr-negative-top-40 has-white-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-terms {"term":"category","className":"is-style-blockpress-tags-secondary"} /-->
	
	<!-- wp:post-title {"isLink":true} /-->
	
	<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"700"}},"fontSize":"xsmall"} /-->
	
	<!-- wp:paragraph {"fontSize":"xsmall"} -->
	<p class="has-xsmall-font-size">/</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:post-date {"style":{"typography":{"lineHeight":"1.5"},"color":{"text":"#929292"}},"fontSize":"xsmall"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
	<!-- wp:query-pagination-previous /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query -->',
);
