<?php
 /**
  * Title: Post Listing Column Two
  * Slug: gutenify-university/post-listing-2
  * Categories: gutenify-university
  */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"","offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"flex","columns":2},"align":"wide","layout":{"inherit":true}} -->
<main class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide"} -->
        <!-- wp:group {"layout":{"inherit":true}} -->
        <div class="wp-block-group">

                <!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->
                <!-- wp:columns {"align":"wide"} -->
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
        <!-- wp:spacer {"height":20} -->
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
