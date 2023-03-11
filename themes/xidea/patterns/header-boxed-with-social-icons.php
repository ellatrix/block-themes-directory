<?php
/**
 * Title: Boxed Header With Social Icons
 * Slug: xidea/header-boxed-with-social-icons
 * Categories: header
 * Block Types: 'core/template-part/header'
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"20px","bottom":"20px"}}},"backgroundColor":"foreground","textColor":"text-regular","layout":{"inherit":false}} -->
<div id="header"
     class="wp-block-group has-text-regular-color has-foreground-background-color has-text-color has-background"
     style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}}},"backgroundColor":"background","className":"container"} -->
    <div class="wp-block-group container has-background-background-color has-background"
         style="padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
        <!-- wp:group {"className":"row"} -->
        <div class="wp-block-group row"><!-- wp:group {"className":"col-10 col-sm-3 align-self-center mt-0"} -->
            <div class="wp-block-group col-10 col-sm-3 align-self-center mt-0">
                <!-- wp:site-title {"level":4,"textAlign":"left"} /--></div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"col-2 col-sm-9 col-lg-7 mt-0  align-self-center","layout":{"inherit":true}} -->
            <div class="wp-block-group col-2 col-sm-9 col-lg-7 mt-0  align-self-center">
                <!-- wp:navigation {"textColor":"foreground","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"}}} /--></div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"d-none d-lg-block mt-0 col-lg-2 align-self-center","layout":{"inherit":true}} -->
            <div class="wp-block-group d-none d-lg-block mt-0 col-lg-2 align-self-center">
                <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","customIconBackgroundColor":"#30180d","iconBackgroundColorValue":"#30180d","openInNewTab":true,"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"10px"}}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color">
                    <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
                <!-- /wp:social-links --></div>
            <!-- /wp:group --></div>
        <!-- /wp:group --></div>
    <!-- /wp:group --></div>
<!-- /wp:group -->