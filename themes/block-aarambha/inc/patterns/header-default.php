<?php
/**
 * Header Default
 */

return array(
	'title'      => esc_html__( 'Default Header', 'block-aarambha' ),
	'categories' => array( 'block-aarambha' ),
        'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
        <!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group has-white-background-color has-background">
        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"className":"is-not-stacked-on-mobile"} -->
        <div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0px;margin-bottom:0px">
        <!-- wp:column {"width":"","className":"is-vertically-aligned-center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-logo {"width":135} /--></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"","className":"is-vertically-aligned-center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:group {"style":{"spacing":{"blockGap":{"left":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
        <div class="wp-block-group">
        <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
        <!-- wp:page-list /-->
        <!-- /wp:navigation -->

        <!-- wp:social-links {"iconColor":"heading","iconColorValue":"#242424","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
        <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
        <!-- wp:social-link {"url":"#","service":"facebook"} /-->

        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

        <!-- wp:social-link {"url":"#","service":"twitter"} /-->
        </ul>
        <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->'
);
