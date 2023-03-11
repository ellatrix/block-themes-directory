<?php
/**
 * Search Header
 */
return array(
	'title'      => esc_html__( 'Search Header', 'lensation' ),
	'categories' => array( 'lensation', 'header' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":true}, "className":"no-margin-top wp-inner-post-header"} -->
<div class="wp-block-group  wp-inner-post-header">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
        <!-- wp:cover {"url":"' . get_parent_theme_file_uri( '/assets/images/header-background.jpg' ) . '","id":1853,"dimRatio":20,"focalPoint":{"x":"1.00","y":"1.00"}} -->
        <div class="wp-block-cover"><span aria-hidden="true" class="has-background-dim-20 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1853" alt="" src="' . get_parent_theme_file_uri( '/assets/images/header-background.jpg' ) . '" style="object-position:100% 100%" data-object-fit="cover" data-object-position="100% 100%"/>
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"layout":{"inherit":true}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"align":"wide} -->
                    <div class="wp-block-group alignwide">
                        <!-- wp:query-title {"type":"search","textAlign":"center"} /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group">

                        <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->
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


