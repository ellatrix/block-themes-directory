<?php
 /**
  * Title: Featured News
  * Slug: blockmag/featured-news
  * Categories: blockmag, header
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-featured-news","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-featured-news">
    <!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","className":"featured-news-query"} -->
    <div class="wp-block-query alignwide featured-news-query">
        <!-- wp:post-template -->
        <!-- wp:post-terms {"term":"category"} /-->

        <!-- wp:post-featured-image {"isLink":true} /-->

        <!-- wp:group {"className":"wp-block-post-container"} -->
        <div class="wp-block-group wp-block-post-container">
            <!-- wp:post-title {"isLink":true} /-->

            <!-- wp:group {"className":"wp-block-post-content-wrapper"} -->
            <div class="wp-block-group wp-block-post-content-wrapper">
                <!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group wp-block-post-meta">
                    <!-- wp:post-author {"showAvatar":false,"className":"is-style-default"} /-->

                    <!-- wp:post-date {"isLink":true} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"moreText":"Continue Reading"} /-->
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