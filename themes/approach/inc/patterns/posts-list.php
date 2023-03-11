<?php
/**
 * Postmeta block pattern for blog and archive pages
 */
return array(
	'title'      => __( 'Posts List', 'approach' ),
	'categories' => array( 'approach_posts' ),
	'content'    => '
<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"main","displayLayout":{"type":"list"},"layout":{"inherit":true}} -->
<main class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"is-style-default","layout":{"inherit":true}} -->
<div class="wp-block-group is-style-default"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"className":"wp-block-post-container"} -->
<div class="wp-block-group wp-block-post-container"><!-- wp:post-title {"isLink":true} /-->

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

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"fontSize":"small"} /-->
<!-- /wp:query-pagination --></main>
<!-- /wp:query -->',
);
