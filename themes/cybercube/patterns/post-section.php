<?php
/**
  * Title: Post Section
  * Slug: cybercube/post-section
  * Categories: page
  */
?>
<?php

register_block_pattern(
	'cybercube/post-section',
	array(
	'title'         => __( 'Post Section', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"90px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group has-background" style="padding-top:0px;padding-bottom:90px">

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"query-content"} -->
<!-- wp:post-featured-image /-->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"20px","bottom":"0px","right":"25px","left":"25px"}}}} -->
<div class="wp-block-columns" style="padding-top:20px;padding-right:25px;padding-bottom:0px;padding-left:25px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-date {"style":{"color":{"text":"#fb7d58"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comments-query-loop -->
<div class="wp-block-comments-query-loop"><!-- wp:comments-title {"textAlign":"right","showPostTitle":false,"level":6,"style":{"color":{"text":"#fb7d58"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /--></div>
<!-- /wp:comments-query-loop --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"color":{"background":"#ccccccab"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ccccccab;color:#ccccccab"/>
<!-- /wp:separator -->

<!-- wp:post-title {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"left":"25px","top":"18px","right":"25px"}}}} /-->

<!-- wp:post-excerpt {"moreText":"Read More","fontSize":"normal"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p>No Post Found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->',
)
);
?>