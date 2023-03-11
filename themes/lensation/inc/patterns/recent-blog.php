<?php
/**
 * Recent Blog
 */
return array(
	'title'      => esc_html__( 'Recent Blog', 'lensation' ),
	'categories' => array( 'lensation', 'query' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section wp-article-section","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-section wp-article-section"><!-- wp:group {"align":"wide","className":"wp-block-group-heading","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide wp-block-group-heading"><!-- wp:heading {"level":6,"align":"wide","className":"section-tagline"} -->
	<h6 class="alignwide section-tagline">' . esc_html__( 'Tagline', 'lensation' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}}} -->
	<h2 class="alignwide" style="font-style:normal;font-weight:900">' . esc_html__( 'Interesting Articles', 'lensation' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->
	
	<!-- wp:query {"queryId":17,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"false","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
	<!-- wp:post-featured-image {"isLink":true} /-->
	
	<!-- wp:group {"className":"wp-block-post-container"} -->
	<div class="wp-block-group  wp-block-post-container"><!-- wp:post-title {"isLink":true} /-->
	
	<!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group wp-block-post-meta"><!-- wp:post-terms {"term":"category"} /-->
	
	<!-- wp:post-date /--></div>
	<!-- /wp:group -->
	
	<!-- wp:post-excerpt {"moreText":"Read More"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
);


