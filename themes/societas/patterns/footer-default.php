<?php
/**
 * Title: Default Footer With Columns
 * Slug: societas/footer-default
 * Categories: footer
 * Block Types: 'core/template-part/footer'
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"0px","bottom":"50px","left":"0px"}}},"backgroundColor":"background","className":"border-top","layout":{"inherit":true}} -->
<div id="upper-footer" class="wp-block-group border-top has-background-background-color has-background"
     style="padding-top:30px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:group {"className":"container"} -->
        <div class="wp-block-group container"><!-- wp:group {"className":"row"} -->
            <div class="wp-block-group row"><!-- wp:group {"className":"col-lg-2  col-md-6 col-12"} -->
                <div class="wp-block-group col-lg-2 col-md-6 col-12">
                    <!-- wp:site-title {"level":6,"style":{"spacing":{"margin":{"top":"20px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

                    <!-- wp:paragraph {"align":"left","textColor":"tertiary"} -->
                    <p class="has-text-align-left has-tertiary-color has-text-color">Societas is a block based Wordpress
                        Theme.</p>
                    <!-- /wp:paragraph --></div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"col-lg-4 col-md-6 col-12"} -->
                <div class="wp-block-group col-lg-4 col-md-6 col-12">
                    <!-- wp:query {"queryId":44,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[2]}},"displayLayout":{"type":"list"}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                        <!-- wp:post-title {"level":6,"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"5px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} /-->

                        <!-- wp:post-date {"style":{"typography":{"fontSize":"10px"}}} /-->
                        <!-- /wp:post-template --></div>
                    <!-- /wp:query --></div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","className":"col-lg-4 col-md-6 col-12"} -->
                <div class="wp-block-group col-lg-4 col-md-6 col-12 has-tertiary-color has-text-color has-link-color">
                    <!-- wp:query {"queryId":44,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[16]}},"displayLayout":{"type":"list"}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                        <!-- wp:post-title {"level":6,"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"5px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} /-->

                        <!-- wp:post-date {"style":{"typography":{"fontSize":"10px"}}} /-->
                        <!-- /wp:post-template --></div>
                    <!-- /wp:query --></div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"className":"col-lg-2 col-md-6 col-12"} -->
                <div class="wp-block-group col-lg-2 col-md-6 col-12"
                     style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px">
                    <!-- wp:navigation {"ref":208,"textColor":"secondary","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"},"style":{"typography":{"lineHeight":"0","fontSize":"14px","fontStyle":"normal","fontWeight":"700"}}} /--></div>
                <!-- /wp:group --></div>
            <!-- /wp:group --></div>
        <!-- /wp:group --></div>
    <!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"tertiary"} -->
<div id="lower-footer" class="wp-block-group has-tertiary-background-color has-background">
    <!-- wp:group {"className":"container-fluid p-0 m-0"} -->
    <div class="wp-block-group container-fluid p-0 m-0"><!-- wp:group {"className":"row"} -->
        <div class="wp-block-group row"><!-- wp:group {"className":"col col-xs-12"} -->
            <div class="wp-block-group col col-xs-12">
                <!-- wp:paragraph {"align":"center","textColor":"background","className":"copyright","fontSize":"small"} -->
                <p class="has-text-align-center copyright has-background-color has-text-color has-small-font-size">
                    Copyright © 2022 <a href="https://xideathemes.com" target="_blank" rel="noreferrer noopener">Xidea
                        Themes</a></p>
                <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
        <!-- /wp:group --></div>
    <!-- /wp:group --></div>
<!-- /wp:group -->
