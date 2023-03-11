<?php
/**
 * Search Header
 */
return array(
	'title'      => esc_html__( 'Search Header', 'photobrust' ),
	'categories' => array( 'photobrust', 'header' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}, "className":"no-margin-top"} -->
    <div class="wp-block-group alignfull no-margin-top">
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
        <div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
        <!-- wp:cover {"gradient":"horizontal-color-gradient-first-to-gradient-second","isDark":false} -->
        <div class="wp-block-cover is-light">
            <span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-horizontal-color-gradient-first-to-gradient-second-gradient-background"></span>
            <div class="wp-block-cover__inner-container">
                    <!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group">
                        <!-- wp:group {"layout":{"inherit":true}} -->
                        <div class="wp-block-group">
                            <!-- wp:search {"label":"' . esc_html__( 'Search', 'photobrust' ) . '","showLabel":false,"placeholder":"' . esc_html__( 'Search....', 'photobrust' ) . '","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->',
);
