<?php

/**
 * Title: Blog Default
 * Slug: zenithwp/blog-default
 * Categories: zenithwp
 * Keywords: Blog Default
 * Block Types: core/buttons
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"64px","right":"0px","bottom":"128px","left":"0px"}}},"className":"zenithwp-blog-post-default blog-post-default","layout":{"type":"constrained","justifyContent":"center","contentSize":"1280px"}} -->
<main class="wp-block-group zenithwp-blog-post-default blog-post-default" style="margin-top:0;margin-bottom:0;padding-top:64px;padding-right:0px;padding-bottom:128px;padding-left:0px">
    <!-- wp:columns {"style":{"border":{"radius":"0px","width":"0px","style":"none"}}} -->
    <div class="wp-block-columns" style="border-style:none;border-width:0px;border-radius:0px">
        <!-- wp:column {"width":"67%","style":{"border":{"width":"0px","style":"none"}}} -->
        <div class="wp-block-column" style="border-style:none;border-width:0px;flex-basis:67%">
            <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"12px"}},"color":{"text":"#ffffff"},"border":{"radius":"3px","width":"0px","style":"none"}},"backgroundColor":"white3"} -->
            <div class="wp-block-group alignfull has-white-3-background-color has-text-color has-background" style="border-style:none;border-width:0px;border-radius:3px;color:#ffffff;margin-top:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                <!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
                <div class="wp-block-query">
                    <!-- wp:post-template -->
                    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"border":{"radius":"3px","color":"#dedede","width":"1px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px"},"margin":{"bottom":"65px"}}}} -->
                    <div class="wp-block-columns alignwide are-vertically-aligned-center has-border-color" style="border-color:#dedede;border-width:1px;border-radius:3px;margin-bottom:65px;padding-top:0px;padding-right:0px;padding-left:0px">
                        <!-- wp:column {"verticalAlignment":"center","width":""} -->
                        <div class="wp-block-column is-vertically-aligned-center">
                            <!-- wp:group {"className":"mycol-top","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group mycol-top">
                                <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"433px","dimRatio":30,"style":{"spacing":{"margin":{"bottom":"20px"}}}} /-->

                                <!-- wp:post-terms {"term":"category","style":{"typography":{"textDecoration":"none","fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"primary","textColor":"contrast","className":"mycat"} /-->

                                <!-- wp:avatar {"size":60,"style":{"border":{"radius":"100%"},"spacing":{"margin":{"bottom":"0px","top":"0px"}}},"className":"myauthor"} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","textDecoration":"none","lineHeight":"1.2"},"color":{"link":"#ffffff"},"spacing":{"padding":{"top":"12px","right":"30px","bottom":"0px","left":"30px"},"margin":{"bottom":"0px","top":"0px","right":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"#160d28"}}}},"fontSize":"large","fontFamily":"red-hat-text"} /-->

                            <!-- wp:post-excerpt {"moreText":"","style":{"typography":{"textDecoration":"none","fontSize":"16px"},"spacing":{"padding":{"bottom":"0px","right":"30px","left":"30px","top":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"base"} /-->

                            <!-- wp:read-more {"content":"Read More","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0px","right":"30px","bottom":"20px","left":"30px"},"margin":{"top":"25px","bottom":"0px"}}},"textColor":"primary"} /-->

                            <!-- wp:group {"style":{"border":{"top":{"color":"#dedede","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"30px","right":"30px","top":"15px","bottom":"15px"},"margin":{"top":"0px","bottom":"0px"}}},"className":"mycol-bottom","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
                            <div class="wp-block-group mycol-bottom" style="border-top-color:#dedede;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0px;margin-bottom:0px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px">
                                <!-- wp:post-author {"showAvatar":false,"style":{"elements":{"link":{"color":{"text":"#999999"}}},"typography":{"fontSize":"13px","textTransform":"capitalize"},"color":{"text":"#999999"}}} /-->

                                <!-- wp:post-date {"style":{"typography":{"fontSize":"13px"},"color":{"text":"#999999"},"elements":{"link":{"color":{"text":"#999999"}}}}} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                    <!-- /wp:post-template -->

                    <!-- wp:query-pagination {"paginationArrow":"chevron","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"16px"}},"textColor":"base","layout":{"type":"flex","justifyContent":"center"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->

                    <!-- wp:query-no-results -->
                    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","textColor":"base"} -->
                    <p class="has-base-color has-text-color"><?php esc_html_e('Post not found!', 'zenithwp'); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- /wp:query-no-results -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"left":"64px"}}},"backgroundColor":"white3","className":"sidebar-default"} -->
        <div class="wp-block-column sidebar-default has-white-3-background-color has-background" style="padding-left:64px;flex-basis:33.33%">
            <!-- wp:heading {"level":5,"style":{"color":{"text":"#160d28"},"elements":{"link":{"color":{"text":"#160d28"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"none"},"spacing":{"margin":{"top":"8px","bottom":"16px","right":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"white3","fontSize":"small"} -->
            <h5 class="has-white-3-background-color has-text-color has-background has-link-color has-small-font-size" style="color:#160d28;margin-top:8px;margin-right:0px;margin-bottom:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-style:normal;font-weight:700;text-transform:none"><?php esc_html_e('Categories', 'zenithwp'); ?></h5>
            <!-- /wp:heading -->

            <!-- wp:categories {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"48px","left":"0px"},"padding":{"bottom":"0em","left":"16px","right":"0em","top":"0em"}},"typography":{"fontSize":"16px","textDecoration":"none"}}} /-->

            <!-- wp:heading {"level":5,"style":{"color":{"text":"#160d28"},"elements":{"link":{"color":{"text":"#160d28"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"none"},"spacing":{"margin":{"top":"8px","bottom":"16px","right":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"white3","fontSize":"small"} -->
            <h5 class="has-white-3-background-color has-text-color has-background has-link-color has-small-font-size" style="color:#160d28;margin-top:8px;margin-right:0px;margin-bottom:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-style:normal;font-weight:700;text-transform:none">
                <?php esc_html_e('Recent Posts', 'zenithwp'); ?></h5>
            <!-- /wp:heading -->

            <!-- wp:latest-posts {"style":{"typography":{"textDecoration":"none"}}} /-->

            <!-- wp:heading {"level":5,"style":{"color":{"text":"#160d28"},"elements":{"link":{"color":{"text":"#160d28"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"none"},"spacing":{"margin":{"top":"48px","bottom":"16px","right":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"white3","fontSize":"small"} -->
            <h5 class="has-white-3-background-color has-text-color has-background has-link-color has-small-font-size" style="color:#160d28;margin-top:48px;margin-right:0px;margin-bottom:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-style:normal;font-weight:700;text-transform:none">
                <?php esc_html_e('Recent Comments', 'zenithwp'); ?></h5>
            <!-- /wp:heading -->

            <!-- wp:latest-comments {"displayAvatar":false,"displayDate":false,"displayExcerpt":false} /-->

            <!-- wp:heading {"level":5,"style":{"color":{"text":"#160d28"},"elements":{"link":{"color":{"text":"#160d28"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"none"},"spacing":{"margin":{"top":"48px","bottom":"16px","right":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"white3","fontSize":"small"} -->
            <h5 class="has-white-3-background-color has-text-color has-background has-link-color has-small-font-size" style="color:#160d28;margin-top:48px;margin-right:0px;margin-bottom:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-style:normal;font-weight:700;text-transform:none">
                <?php esc_html_e('Tags', 'zenithwp'); ?></h5>
            <!-- /wp:heading -->

            <!-- wp:tag-cloud /-->

            <!-- wp:search {"label":"","buttonText":"Search","query":[]} /-->

            <!-- wp:heading {"level":5,"style":{"color":{"text":"#160d28"},"elements":{"link":{"color":{"text":"#160d28"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"none"},"spacing":{"margin":{"top":"48px","bottom":"16px","right":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"white3","fontSize":"small"} -->
            <h5 class="has-white-3-background-color has-text-color has-background has-link-color has-small-font-size" style="color:#160d28;margin-top:48px;margin-right:0px;margin-bottom:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-style:normal;font-weight:700;text-transform:none"><?php esc_html_e('Archive', 'zenithwp'); ?></h5>
            <!-- /wp:heading -->

            <!-- wp:archives /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->