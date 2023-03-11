<?php
/**
 * Title: Post list
 * Slug: spice-fse/post-list
 * Categories: spice-fse
 * Block Types: core/post-list
 */
?>
<!-- wp:group {"tagName":"main","layout":{"inherit":true}} -->
<main class="wp-block-group blog-content"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group wp-block-post-meta">
<!-- wp:post-date {"isLink":true} /-->
</div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true} /-->


<!-- wp:post-excerpt {"moreText":"Read More"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
</main>
<!-- /wp:group -->