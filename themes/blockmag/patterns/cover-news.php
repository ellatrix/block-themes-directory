<?php
 /**
  * Title: Cover News
  * Slug: blockmag/cover-news
  * Categories: blockmag, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-cover-news","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-cover-news">
    <!-- wp:query {"queryId":7,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"full","className":"cover-news-query"} -->
    <div class="wp-block-query alignfull cover-news-query">
        <!-- wp:post-template -->
        <!-- wp:group {"className":"cover-news-img-wrapper"} -->
        <div class="wp-block-group cover-news-img-wrapper">
            <!-- wp:post-featured-image {"isLink":true} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"wp-block-post-container-wrapper","layout":{"inherit":true}} -->
        <div class="wp-block-group wp-block-post-container-wrapper">
            <!-- wp:group {"align":"full","layout":{"inherit":true}} -->
            <div class="wp-block-group alignfull">
                <!-- wp:group {"align":"wide","className":"wp-block-post-container","layout":{"inherit":false}} -->
                <div class="wp-block-group alignwide wp-block-post-container">
                    <!-- wp:post-title {"isLink":true} /-->

                    <!-- wp:group {"className":"wp-block-post-content-wrapper"} -->
                    <div class="wp-block-group wp-block-post-content-wrapper">
                        <!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group wp-block-post-meta">
                            <!-- wp:post-author {"showAvatar":false,"className":"is-style-default"} /-->

                            <!-- wp:post-date {"isLink":true} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
        <p></p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->