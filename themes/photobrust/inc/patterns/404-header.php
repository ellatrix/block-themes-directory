<?php
/**
 * 404 Header
 */
return array(
	'title'      => esc_html__( '404 Header', 'photobrust' ),
	'categories' => array( 'photobrust', 'header' ),
	'content'    => '<!-- wp:group {"className":"mo-margin-top","align":"full","layout":{"inherit":true}} -->
        <div class="wp-block-group alignfull no-margin-top"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
            <div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                <!-- wp:cover {"url":"' . get_parent_theme_file_uri( '/assets/images/header-background.jpg' ) . '","dimRatio":20,"focalPoint":{"x":"1.00","y":"1.00"}} -->
                    <div class="wp-block-cover">
                        <span aria-hidden="true" class="has-background-dim-20 wp-block-cover__gradient-background has-background-dim"></span>
                        <img src="' . get_parent_theme_file_uri( '/assets/images/header-background.jpg' ) . '" alt="" class="wp-block-cover__image-background" style="object-position:100% 100%" data-object-fit="cover" data-object-position="100% 100%" />
                        <div class="wp-block-cover__inner-container">
                            <!-- wp:group {"layout":{"inherit":true}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"align":"wide} -->
                                <div class="wp-block-group alignwide">
                                    <!-- wp:heading {"textAlign":"center","level":1} -->
                                        <h1 class="has-text-align-center">' . esc_html__( '404 Nothing Found', 'photobrust' ) . '</h1>
                                    <!-- /wp:heading -->
                                    <!-- wp:paragraph {"textAlign":"center"} -->
                                    <p class="has-text-align-center">' . esc_html__( 'Oops! That page can’t be found', 'photobrust' ) . '</p>
                                    <!-- /wp:paragraph -->
                                    
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
