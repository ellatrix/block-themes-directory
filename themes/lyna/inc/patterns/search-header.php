<?php
/**
 * Search Header
 */
return array(
	'title'      => esc_html__( 'Search Header', 'lyna' ),
	'categories' => array( 'lyna', 'header' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}, "className":"no-margin-top banner"} -->
<div class="wp-block-group alignfull banner no-margin-top">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
        <!-- wp:cover {"url":"' . get_parent_theme_file_uri( '/assets/images/banner.jpg' ) . '","dimRatio":0,"overlayColor":"body-text"} -->
        <div class="wp-block-cover"><span aria-hidden="true" class="has-body-text-background-color has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . get_parent_theme_file_uri( '/assets/images/banner.jpg' ) . '" data-object-fit="cover"/>
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"layout":{"inherit":true}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group">
                        <!-- wp:search {"label":"' . esc_html__( 'Search', 'lyna' ) . '","showLabel":false,"placeholder":"' . esc_html__( 'Search....', 'lyna' ) . '","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true} /-->
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
