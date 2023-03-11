<?php
 /**
  * Title: Header Default
  * Slug: gutenify-store/header-default
  * Categories: gutenify-store
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"color":{"background":"#ffeeef"}},"textColor":"foreground","layout":{"inherit":true}} -->
<div class="wp-block-group has-foreground-color has-text-color has-background"
        style="background-color:#ffeeef;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px">
        <!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
        <div class="wp-block-group alignwide">
                <!-- wp:paragraph -->
                <p><?php echo esc_html__( 'Summer sale for all swim suits - off 50%!', 'gutenify-store' ); ?>&nbsp;<a href="#"><mark
                                        style="background-color:rgba(0, 0, 0, 0);color:#f22222"
                                        class="has-inline-color"><?php echo esc_html__( 'Shop Now', 'gutenify-store' ); ?></mark></a> </p>
                <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
        <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between","flexWrap":"wrap"}} -->
        <div class="wp-block-group alignwide">
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"5px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                        <!-- wp:site-logo {"width":34,"shouldSyncIcon":false,"className":"is-style-default"} /-->

                        <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:navigation {"textColor":"foreground","overlayTextColor":"foreground","align":"wide","className":"has-left-submenu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","flexWrap":"wrap"}} /-->

                <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
                <div class="wp-block-group">
                        <!-- wp:loginout /-->
                </div>
                <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
</div>
<!-- /wp:group -->
