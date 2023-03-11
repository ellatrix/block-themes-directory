<?php
 /**
  * Title: latest News
  * Slug: blockmag/latest-news
  * Categories: blockmag, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-most-popular-news","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-most-popular-news">

    <!-- wp:group {"align":"wide","className":"wp-block-group-heading"} -->
    <div class="wp-block-group alignwide wp-block-group-heading">
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%">
                <!-- wp:group -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":6} -->
                    <h6><?php esc_html_e ( 'Latest News', 'blockmag' ) ?></h6>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
            <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%">
                <!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"bottom","justifyContent":"right"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"className":"is-style-button"} -->
                    <div class="wp-block-button is-style-button">
                        <a class="wp-block-button__link"><?php esc_html_e ( 'View All', 'blockmag' ) ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"most-popular-news-query"} -->
    <div class="wp-block-query alignwide most-popular-query">
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