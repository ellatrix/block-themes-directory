<?php
/**
 * Title: Blog Post Grid Query - Black Backgrounds.
 * Slug: semplice-monospazio/grid-blog-query-black-backgrounds
 * Categories: semplice-monospazio-grid-query
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":"blog-query-grid black-backgrounds"} -->
<div class="wp-block-group blog-query-grid black-backgrounds"><!-- wp:query {"queryId":5,"query":{"perPage":"12","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"10px"}},"backgroundColor":"black","textColor":"white","className":"grid-blog-post"} -->
<div class="wp-block-group grid-blog-post has-white-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"10px","bottom":"10px","left":"10px"},"blockGap":"10px"}},"className":"post-info-lower"} -->
<div class="wp-block-group post-info-lower" style="padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-title {"fontSize":"large"} /-->

<!-- wp:post-terms {"term":"category","textAlign":"center"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"Read This Post","style":{"spacing":{"padding":{"top":"10px","right":"25px","bottom":"10px","left":"25px"}}},"backgroundColor":"white","textColor":"black"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
