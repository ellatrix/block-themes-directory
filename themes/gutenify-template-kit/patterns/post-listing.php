<?php
 /**
  * Title: Post Listing
  * Slug: gutenify-template-kit/post-listing
  * Categories: gutenify-template-kit
  */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"","offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"main","displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} -->
<main class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide"} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"has-shadow-dark","layout":{"inherit":true}} -->
        <div class="wp-block-group has-shadow-dark"
                style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                <!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"no-padding"} /-->

                <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"}}}} -->
                <div class="wp-block-group alignwide"
                        style="margin-top:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
                        <!-- wp:post-title {"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} /-->

                        <!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /-->

                        <!-- wp:post-excerpt /-->
                </div>
                <!-- /wp:group -->
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
