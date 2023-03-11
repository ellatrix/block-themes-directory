<?php
/**
 * Title: Flat Header With Top Bar
 * Slug: xidea/header-flat-with-top-bar
 * Categories: header
 * Block Types: 'core/template-part/header'
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"20px"}}},"backgroundColor":"bglight","textColor":"text-regular","className":"border-bottom","layout":{"inherit":false}} -->
<div id="header"
     class="wp-block-group border-bottom has-text-regular-color has-bglight-background-color has-text-color has-background"
     style="padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px">
    <!-- wp:group {"style":{"color":{"background":"#f7f7f7"},"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
    <div id="header-top-area" class="wp-block-group has-background"
         style="background-color:#f7f7f7;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
        <!-- wp:group {"className":"container"} -->
        <div class="wp-block-group container"><!-- wp:group {"className":"row"} -->
            <div class="wp-block-group row"><!-- wp:group {"className":"col-6"} -->
                <div class="wp-block-group col-6">
                    <!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"tertiary","className":"list-inline d-flex justify-content-start"} -->
                    <ul class="list-inline d-flex justify-content-start has-tertiary-color has-text-color has-link-color"
                        style="font-size:13px;font-style:normal;font-weight:500">
                        <li><a href="#">Home </a>| About Us | Contact</li>
                        <li></li>
                    </ul>
                    <!-- /wp:list --></div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"col-6 mt-0"} -->
                <div class="wp-block-group col-6 mt-0">
                    <!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontSize":"13px"}},"textColor":"tertiary","className":"d-flex list-inline justify-content-end"} -->
                    <ul class="d-flex list-inline justify-content-end has-tertiary-color has-text-color has-link-color"
                        style="font-size:13px">
                        <li><a href="#">mail@domain.com | </a></li>
                        <li><a href="tel:123-456-7890">123-456-7890</a></li>
                    </ul>
                    <!-- /wp:list --></div>
                <!-- /wp:group --></div>
            <!-- /wp:group --></div>
        <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"container"} -->
    <div id="header-bottom-area" class="wp-block-group container"><!-- wp:group {"className":"row"} -->
        <div class="wp-block-group row"><!-- wp:group {"className":"col-10 col-sm-3 align-self-center mt-0"} -->
            <div class="wp-block-group col-10 col-sm-3 align-self-center mt-0">
                <!-- wp:site-title {"level":4,"textAlign":"left"} /--></div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"col-2 col-sm-9 mt-0  align-self-center","layout":{"inherit":true}} -->
            <div class="wp-block-group col-2 col-sm-9 mt-0  align-self-center">
                <!-- wp:navigation {"textColor":"foreground","align":"full","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"},"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"}}} /--></div>
            <!-- /wp:group --></div>
        <!-- /wp:group --></div>
    <!-- /wp:group --></div>
<!-- /wp:group -->