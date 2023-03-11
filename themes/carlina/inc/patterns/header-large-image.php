<?php
register_block_pattern(
    'carlina/header-large-image',
    array(
        'title'       => 'Header with full size image and animation',
        'description' => 'Header with large image as background with animation',
        'content'     => '<!-- wp:cover {"url":"' .  get_template_directory_uri() . '/assets/images/carlina_background.jpg","hasParallax":true,"dimRatio":10,"minHeight":95,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
                    <div class="wp-block-cover alignfull is-light has-parallax" style="background-image:url(' . get_template_directory_uri() . '/assets/images/carlina_background.jpg);min-height:95vh"><span aria-hidden="true" class="has-background-dim-10 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container">
                    
                    <!-- wp:spacer -->
                    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:group {"className":"headerline"} -->
                    <div class="wp-block-group headerline"><!-- wp:site-title {"className":"moveleft"} /-->
        
                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"100", "className":"moveleft"}},"fontSize":"medium"} -->
                    <p class="has-medium-font-size moveleft" style="font-style:normal;font-weight:100" >Description for your website</p>
                    <!-- /wp:paragraph -->
        
                    <!-- wp:spacer {"height":"1em"} -->
                    <div style="height:1em" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:site-tagline {"style":{"typography":{"fontStyle":"italic","fontWeight":"200"}},"textColor":"foreground","className":"clipin vibrate"} /-->
        
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"textColor":"background","className":"is-style-fill","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size is-style-fill has-small-font-size"><a
                                class="wp-block-button__link has-background-color has-text-color" href="categories">Shop Now</a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"align":"center","id":8,"width":100,"sizeSlug":"full","linkDestination":"none","className":"arrow-down"} -->
<div class="wp-block-image arrow-down"><figure class="aligncenter size-full is-resized"><img src="' .  get_template_directory_uri() . '/assets/images/expand_more_FILL0_wght400_GRAD0_opsz100.svg" alt="" class="wp-image-8" width="100"/></figure></div>
<!-- /wp:image -->
            </div>
        </div>
        <!-- /wp:cover -->
        ',
        'categories'  => array( 'headers' ),
        'keywords'    => array( 'header', 'animation', 'image' ),
    )
);

