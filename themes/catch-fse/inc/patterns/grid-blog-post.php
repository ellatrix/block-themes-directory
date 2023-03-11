<?php
/**
 * Grid Blog Post
 */
return array(
	'title'      => esc_html__( 'Grid Blog Post', 'catch-fse' ),
	'categories' => array( 'catch-fse', 'query' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"isLink":true,"align":"full"} /-->

<!-- wp:group {"align":"full","className":"alignfull wp-block-post-container"} -->
<div class="wp-block-group alignfull wp-block-post-container"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group wp-block-post-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"isLink":true} /-->

<!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Continue Reading"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"fontSize":"small"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->',
);
