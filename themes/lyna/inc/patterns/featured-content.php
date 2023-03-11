<?php
/**
 * Featured Content
 */
return array(
	'title'      => esc_html__( 'Featured Content', 'lyna' ),
	'categories' => array( 'lyna', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"wide","className":"wp-block-section"} -->
	<div class="wp-block-group alignwide wp-block-section"><!-- wp:group {"className":"section-heading"} -->
	<div class="wp-block-group section-heading"><!-- wp:heading -->
	<h2>' . esc_html__( 'Featured Post', 'lyna' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:separator -->
	<hr class="wp-block-separator has-alpha-channel-opacity"/>
	<!-- /wp:separator --></div>
	<!-- /wp:group -->
	
	<!-- wp:group -->
	<div class="wp-block-group"><!-- wp:query {"queryId":78,"query":{"perPage":"3","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[]}},"displayLayout":{"type":"flex","columns":3},"className":"feature-content-section"} -->
	<div class="wp-block-query feature-content-section"><!-- wp:post-template -->
	<!-- wp:group {"layout":{"inherit":false}} -->
	<div class="wp-block-group"><!-- wp:post-featured-image /-->
	
	<!-- wp:group {"layout":{"type":"flex","className":"entry-meta","flexWrap":"nowrap"}} -->
	<div class="wp-block-group entry-meta"><!-- wp:post-date {"format":"F j, Y"} /-->
	
	<!-- wp:post-terms {"term":"category"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:post-title {"isLink":true,"fontSize":"content-heading"} /-->
	
	<!-- wp:post-excerpt {"moreText":"read more"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
