<?php
 /**
  * Title: Archive Post Query
  * Slug: vision-fse/archive-post-query
  * Categories: vision-fse
  */
?>
            <!-- wp:query {"queryId":15,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3}} -->
            <div class="wp-block-query">
                <!-- wp:post-template -->
                <!-- wp:group {"align":"wide","className":"vision-post-card","layout":{"type":"constrained"}} -->
                <div class="wp-block-group alignwide vision-post-card">
                    <!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

                    <!-- wp:group {"style":{"spacing":{"padding":{"left":"30px","bottom":"30px","top":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"
                        style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
                        <!-- wp:post-title {"isLink":true} /-->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"blog-post-date","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group blog-post-date">
                            <!-- wp:image {"id":291,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"><img
                                    src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/blog-date.png"
                                    alt="" class="wp-image-291" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:post-date /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-excerpt {"moreText":"Read More"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-pagination {"paginationArrow":"chevron","align":"left","layout":{"type":"flex","justifyContent":"center"},"fontSize":"semi-medium"} -->
                <!-- wp:query-pagination-previous {"label":""} /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->
            </div>
            <!-- /wp:query -->