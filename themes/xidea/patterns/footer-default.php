<?php
/**
 * Title: Default Footer With Columns
 * Slug: xidea/footer-default
 * Categories: footer
 * Block Types: 'core/template-part/footer'
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"}}},"backgroundColor":"black","className":"tp-site-footer","layout":{"inherit":false,"contentSize":"1170px"}} -->
<div id="footer" class="wp-block-group tp-site-footer has-black-background-color has-background"
     style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
    <!-- wp:group {"className":"tp-upper-footer"} -->
    <div id="upper-footer" class="wp-block-group tp-upper-footer"><!-- wp:group {"className":"container"} -->
        <div class="wp-block-group container"><!-- wp:group {"className":"row"} -->
            <div class="wp-block-group row"><!-- wp:group {"className":"col col-lg-3 col-md-6 col-sm-12 col-12"} -->
                <div class="wp-block-group col col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- wp:site-title {"style":{"spacing":{"margin":{"top":"20px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"large"} /-->

                    <!-- wp:paragraph {"align":"left","textColor":"light"} -->
                    <p class="has-text-align-left has-light-color has-text-color">Xidea Blocks is a block based
                        Wordpress
                        Theme.</p>
                    <!-- /wp:paragraph --></div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"col col-lg-4  col-md-6 col-sm-12 col-12"} -->
                <div class="wp-block-group col col-lg-4  col-md-6 col-sm-12 col-12">
                    <!-- wp:query {"queryId":44,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                        <!-- wp:post-title {"level":6,"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"5px","left":"0px"}}}} /-->

                        <!-- wp:post-date {"fontSize":"small"} /-->
                        <!-- /wp:post-template --></div>
                    <!-- /wp:query --></div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"col col-lg-3 col-md-6 col-sm-12 col-12"} -->
                <div class="wp-block-group col col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- wp:archives {"showPostCounts":true} /--></div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"col col-lg-2 col-md-6 col-sm-12 col-12"} -->
                <div class="wp-block-group col col-lg-2 col-md-6 col-sm-12 col-12"><!-- wp:page-list /--></div>
                <!-- /wp:group --></div>
            <!-- /wp:group --></div>
        <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:group {"backgroundColor":"black","className":"tp-lower-footer"} -->
    <div id="lower-footer" class="wp-block-group tp-lower-footer has-black-background-color has-background">
        <!-- wp:group {"className":"container"} -->
        <div class="wp-block-group container"><!-- wp:group {"className":"row"} -->
            <div class="wp-block-group row"><!-- wp:group {"className":"col col-xs-12"} -->
                <div class="wp-block-group col col-xs-12">
                    <!-- wp:paragraph {"align":"center","textColor":"white","className":"copyright","fontSize":"small"} -->
                    <p class="has-text-align-center copyright has-white-color has-text-color has-small-font-size">
                        Copyright © 2022 Xidea Themes</p>
                    <!-- /wp:paragraph --></div>
                <!-- /wp:group --></div>
            <!-- /wp:group --></div>
        <!-- /wp:group --></div>
    <!-- /wp:group --></div>
<!-- /wp:group -->
