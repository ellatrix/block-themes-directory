<?php
/**
 * Title: Latest Posts Section
 * Slug: societas/section-latest-posts
 * Categories: featured
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"0px","bottom":"50px","left":"0px"}}},"backgroundColor":"light","className":"container-fluid","layout":{"inherit":true}} -->
<div id="latest-posts-section" class="wp-block-group container-fluid has-light-background-color has-background"
     style="padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px">
    <!-- wp:group {"className":"container"} -->
    <div class="wp-block-group container"><!-- wp:heading {"textAlign":"center","textColor":"secondary"} -->
        <h2 class="has-text-align-center has-secondary-color has-text-color">Latest Posts</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">Neque volutpat ac tincidunt vitae semper quis lectus nulla at. </p>
        <!-- /wp:paragraph -->

        <!-- wp:query {"queryId":18,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
            <!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"mb-0"} /-->

            <!-- wp:group {"backgroundColor":"background"} -->
            <div class="wp-block-group has-background-background-color has-background">
                <!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"12px"}},"className":"fw-bold text-uppercase"} /-->

                <!-- wp:post-title {"level":6,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"fontSize":"small"} /-->

                    <!-- wp:post-date {"style":{"typography":{"fontSize":"12px"}}} /--></div>
                <!-- /wp:group --></div>
            <!-- /wp:group -->
            <!-- /wp:post-template --></div>
        <!-- /wp:query --></div>
    <!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->




