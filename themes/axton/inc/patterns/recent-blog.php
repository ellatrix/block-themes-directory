<?php
/**
 * Recent Blog
 */
return array(
	'title'      => esc_html__( 'Recent Blog', 'axton' ),
	'categories' => array( 'axton', 'query' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-section"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide"><!-- wp:query {"queryId":17,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"false","inherit":false},"displayLayout":{"type":"list"},"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /--></div>
	<!-- /wp:group --></div>
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
	<!-- /wp:columns -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);


