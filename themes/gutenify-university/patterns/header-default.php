<?php
 /**
  * Title: Header Default
  * Slug: gutenify-university/header-default
  * Categories: gutenify-university
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"15px","bottom":"10px","left":"15px"},"blockGap":"0px"},"color":{"background":"#f79d2b"}},"textColor":"foreground","layout":{"inherit":true}} -->
<div class="wp-block-group has-foreground-color has-text-color has-background"
        style="background-color:#f79d2b;padding-top:10px;padding-right:15px;padding-bottom:10px;padding-left:15px">
        <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"mobile-aligncenter","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"wrap"}} -->
        <div class="wp-block-group alignwide mobile-aligncenter">
                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} -->
                <p class="has-text-align-center has-link-color"><?php echo esc_html__( 'Welcome to our University.', 'gutenify-university' ); ?>  <a href="#"><?php echo esc_html__( 'Need Any Helps?', 'gutenify-university' ); ?></a></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                        <!-- wp:group {"style":{"spacing":{"padding":{"right":"15px","left":"15px","top":"0px","bottom":"0px"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"2px"}}} -->
                        <div class="wp-block-group has-link-color"
                                style="border-radius:2px;padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:15px">
                                <!-- wp:loginout /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
                        <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
                                <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                                <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"25px","top":"25px"}}},"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
        <div class="wp-block-group alignwide" style="padding-top:25px;padding-bottom:25px">
                <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} -->
                <div class="wp-block-group">
                        <!-- wp:site-logo {"width":44,"shouldSyncIcon":false,"className":"is-style-default"} /-->

                        <!-- wp:group -->
                        <div class="wp-block-group">
                                <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"medium"} /-->
                        </div>
                        <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:navigation { "textColor":"foreground","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","flexWrap":"wrap"}} /-->
        </div>
        <!-- /wp:group -->
</div>
<!-- /wp:group -->
