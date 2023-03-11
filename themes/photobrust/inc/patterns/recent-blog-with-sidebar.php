<?php
/**
 * Recent Blog With Sidebar
 */
return array(
	'title'      => esc_html__( 'Recent Blog With Sidebar', 'photobrust' ),
	'categories' => array( 'photobrust', 'query' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","className":"wp-block-sidebar-on-right"} -->
	<div class="wp-block-columns alignwide wp-block-sidebar-on-right"><!-- wp:column {"width":"68.572%"} -->
	<div class="wp-block-column" style="flex-basis:68.572%"><!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"inherit":true}} -->
	<div class="wp-block-query"><!-- wp:post-template {"align":"full"} -->
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"align":"full"} /-->
	
	<!-- wp:group {"align":"full","className":"alignfull wp-block-post-container"} -->
	<div class="wp-block-group alignfull wp-block-post-container">

	<!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group wp-block-post-meta">
	<!-- wp:post-date {"isLink":true} /-->
	<!-- wp:post-terms {"term":"category"} /-->
	</div>
	<!-- /wp:group -->
	
	<!-- wp:post-title {"isLink":true} /-->
	
	<!-- wp:post-excerpt {"moreText":"Continue Reading"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<!-- wp:query-pagination-previous  {"style":{"typography":{"fontSize":"0px"}}} /-->

	<!-- wp:query-pagination-numbers /-->

	<!-- wp:query-pagination-next  {"style":{"typography":{"fontSize":"0px"}}} /-->
	<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"28.572%","className":"wp-block-column-sidebar"} -->
	<div class="wp-block-column wp-block-column-sidebar" style="flex-basis:28.572%">
		<!-- wp:template-part {"slug":"sidebar","theme":"photobrust","tagName":"div"} /-->
	</div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
