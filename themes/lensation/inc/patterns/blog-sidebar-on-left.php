<?php
/**
 * Header with Buttons
 */
return array(
	'title'      => esc_html__( 'Blog - Sidebar On Left', 'lensation' ),
	'categories' => array( 'lensation', 'featured' ),
	'content'    => '<!-- wp:group {"tagName":"main"} -->
	<main class="wp-block-group"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:columns {"align":"wide","className":"wp-block-sidebar-on-left"} -->
	<div class="wp-block-columns alignwide wp-block-sidebar-on-left"><!-- wp:column {"width":"30%","className":"wp-block-column-sidebar"} -->
	<div class="wp-block-column wp-block-column-sidebar" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"lensation","tagName":"div"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"70%"} -->
	<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"},"layout":{"inherit":true}} -->
	<div class="wp-block-query"><!-- wp:post-template {"align":"full"} -->
	<!-- wp:group {"layout":{"inherit":false}} -->
	<div class="wp-block-group"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:post-featured-image {"isLink":true} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"align":"full","className":"alignfull wp-block-post-container"} -->
	<div class="wp-block-group alignfull wp-block-post-container"><!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group wp-block-post-meta"><!-- wp:post-terms {"term":"category"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:post-title {"isLink":true} /-->
	
	<!-- wp:post-excerpt {"moreText":"Continue Reading"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next {"fontSize":"small"} /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></main>
	<!-- /wp:group -->',
);



