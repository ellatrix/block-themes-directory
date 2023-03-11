<?php
 /**
  * Title: Header With Social And Cart Dark
  * Slug: laventa/header-with-social-and-cart-dark
  * Categories: laventa, header
  */
?>

<!-- wp:group {"className":"wp-block-header-dark","align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group wp-block-header-dark alignfull">
    <!-- wp:group {"align":"wide","className":"wp-block-main-header","layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group alignwide wp-block-main-header">
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dtiny)","top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dtiny)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignfull" style="padding-top: var(--wp--custom--spacing--tiny); padding-bottom: var(--wp--custom--spacing--tiny);">
            <!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex"}} -->
            <div class="wp-block-group">
                <!-- wp:site-logo {"width":50,"shouldSyncIcon":true} /-->
                <!-- wp:group -->
                <div class="wp-block-group">
                    <!-- wp:site-title /-->
                    <!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"4px"}}}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /-->
            <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","allowOrientation":false}} -->
            <div class="wp-block-group">
                <!-- wp:social-links {"className":"is-style-logos-only"} -->
                <ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                <!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
                <!-- /wp:social-links -->
                <!-- wp:woocommerce/mini-cart {"hasHiddenPrice":true} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

