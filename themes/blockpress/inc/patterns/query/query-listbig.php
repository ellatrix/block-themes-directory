<?php
/**
 * Blockpress: Query list with three columns
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'List with big images', 'blockpress' ),
	'categories'    => array( 'blockpress-query' ),
	'blockTypes'    => array('core/query'),
	'content'       => '<!-- wp:group {"align":"wide","className":" ","layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide"><!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"fr-animate fr-move-up"} -->
	<div class="wp-block-columns alignwide fr-animate fr-move-up"><!-- wp:column {"width":"55%"} -->
	<div class="wp-block-column" style="flex-basis:55%"><!-- wp:post-featured-image {"isLink":true,"height":"300px","className":"fr-hover-scale-img","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"45%","backgroundColor":"background","className":"is-style-no-gap"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-no-gap has-background-background-color has-background" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10%","right":"10%","bottom":"10%","left":"10%"}}},"className":"fr-mobile-paddingdisable", "frMobPaddingDisable":true} -->
	<div class="wp-block-group fr-mobile-paddingdisable" style="padding-top:10%;padding-right:10%;padding-bottom:10%;padding-left:10%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":"  ","style":{"elements":{"link":{"color":{"text":"var:preset|color|lightgrey"}}},"typography":{"textTransform":"uppercase","fontSize":"0.8rem"}},"className":"is-style-blockpress-tags-nounder"} /-->
	
	<!-- wp:paragraph {"textColor":"lightgrey","fontSize":"xsmall"} -->
	<p class="has-lightgrey-color has-text-color has-xsmall-font-size">|</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontSize":"0.8rem"}}} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem","bottom":"0.81rem"}}}} /-->
	
	<!-- wp:post-date {"style":{"color":{"text":"#bfbfbf"}},"fontSize":"small"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<!-- wp:query-pagination-previous /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
);
