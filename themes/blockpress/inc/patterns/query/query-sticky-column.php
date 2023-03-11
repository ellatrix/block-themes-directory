<?php
/**
 * Blockpress: Query list with three columns
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'Block with sticky column', 'blockpress' ),
	'categories'    => array( 'blockpress-query' ),
 
	'blockTypes'    => array('core/query'),
	'content'       => '<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":"5%"}},"className":"fr-tablet-collapse"} -->
	<div class="wp-block-columns fr-tablet-collapse"><!-- wp:column {"frsetSticky":true} -->
	<div class="wp-block-column fr-position-sticky"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:query {"queryId":25,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"className":"is-style-fr-box-on-image"} -->
	<div class="wp-block-query is-style-fr-box-on-image"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"fr-hover-scale-img"} /-->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"white"} -->
	<div class="wp-block-group has-white-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-terms {"term":"category","textAlign":"center","className":"is-style-blockpress-tags-secondary"} /-->
	
	<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}},"typography":{"lineHeight":"1.5"}},"fontSize":"large"} /-->
	
	<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"xsmall"} /-->
	
	<!-- wp:paragraph {"fontSize":"xsmall"} -->
	<p class="has-xsmall-font-size">/</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:post-date {"textColor":"lightgrey","fontSize":"xsmall"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:query {"queryId":25,"query":{"perPage":"6","pages":0,"offset":"1","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2},"className":"is-style-fr-box-creative"} -->
	<div class="wp-block-query is-style-fr-box-creative"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true,"height":"150px","align":"wide","className":"fr-hover-scale-img"} /-->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"}}},"backgroundColor":"white"} -->
	<div class="wp-block-group has-white-background-color has-background" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:post-terms {"term":"category","separator":"  ","style":{"elements":{"link":{"color":{"text":"#697b86"}}}},"textColor":"lightgrey","className":"is-style-blockpress-tags-nounder","fontSize":"xsmall"} /-->
	
	<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0.5rem"}}},"className":"is-style-text-clamp-three","fontSize":"medium"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
