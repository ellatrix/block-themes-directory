<?php
/**
 * Title: List of posts in one column.
 * Slug: design-mode/query
 * Categories: design-mode-query
 * Viewport Width: 1280
 */
?>
<!-- wp:query {"queryId":3,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":6},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide">
<!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":400,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
<div class="wp-block-cover__inner-container">
<!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"textColor":"base","fontSize":"x-small"} /-->
<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"textColor":"base","fontSize":"large"} /-->
</div>
</div>
<!-- /wp:cover -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
