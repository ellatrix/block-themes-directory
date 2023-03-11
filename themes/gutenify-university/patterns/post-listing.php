<?php
 /**
  * Title: Post Listing
  * Slug: gutenify-university/post-listing
  * Categories: gutenify-university
  */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"main","displayLayout":{"type":"list","columns":3},"layout":{"inherit":true}} -->
<main class="wp-block-query">
        <!-- wp:post-template {"align":"wide"} -->
        <!-- wp:group {"layout":{"inherit":true}} -->
        <div class="wp-block-group">
                <!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

                <!-- wp:columns {"align":"wide","className":"gutenify-university-post-content"} -->
                <div class="wp-block-columns alignwide gutenify-university-post-content">
                        <!-- wp:column {"width":""} -->
                        <div class="wp-block-column">
                                <!-- wp:post-title {"isLink":true,"align":"wide","fontSize":"var(--wp--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /-->

                                <!-- wp:post-excerpt /-->

                                <!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /-->
                        </div>
                        <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"20px"} -->
        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- /wp:post-template -->

        <!-- wp:query-pagination {"paginationArrow":"arrow","align":"center","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous {"fontSize":"small"} /-->

        <!-- wp:query-pagination-numbers /-->

        <!-- wp:query-pagination-next {"fontSize":"small"} /-->
        <!-- /wp:query-pagination -->
</main>
<!-- /wp:query -->
