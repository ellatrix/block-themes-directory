<?php
register_block_pattern(
    'carlina/layout-features',
    array(
        'title'       => 'Highlight and Features in three columns',
        'description' => 'Display features in three columns',
        'content'     => '<!-- wp:columns {"align":"full"} -->
                        <div class="wp-block-columns alignfull">
                        <!-- wp:column {"width":"50%"} -->
                        <div class="wp-block-column" style="flex-basis:50%">

                        <!-- wp:image {"id":248,"width":375,"height":512,"sizeSlug":"large","linkDestination":"none"} -->
                        <figure class="wp-block-image size-large is-resized"><img src="' . get_template_directory_uri() . '/assets/images/bottle.jpg" alt="bottle of skincare" class="wp-image-248" width="375" height="512"/></figure>
                        <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"padding":{"right":"2em"}}}} -->

                        <div class="wp-block-column is-vertically-aligned-center" style="padding-right:2em;flex-basis:66.66%">

                        <!-- wp:heading {"textColor":"secondary"} -->
                        <h2 class="has-secondary-color has-text-color">We only use organic and local ingredients. </h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>Carlina is a local Canadian skincare brand, offering a wide range of skincare products made from fresh organic ingredients. You can find products that fit your different needs here, including anti-wrinkles, firming, brightening, anti-blemish and moisturising.  </p>
                        <!-- /wp:paragraph --></div>

                        <!-- /wp:column --></div>

                        <!-- /wp:columns -->
                        <!-- wp:cover {"dimRatio":70,"overlayColor":"secondary","minHeight":50,"minHeightUnit":"vh","align":"full"} -->
                        <div class="wp-block-cover alignfull" style="min-height:50vh"><span aria-hidden="true" class="has-secondary-background-color has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
                        <h2 class="has-text-align-center">What Carlina offers</h2>
                        <!-- /wp:heading -->

                        <!-- wp:columns -->
                        <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:image {"align":"center","id":258,"width":72,"height":72,"sizeSlug":"full","linkDestination":"none"} -->
                        <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/clock.png" alt="clock" class="wp-image-258" width="72" height="72"/></figure></div>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
                        <p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400">Fast Delivery</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"200"}}} -->
                        <p class="has-text-align-center" style="font-style:normal;font-weight:200">We use reliable DHL for delivery and promise to send out your orders in 2 business days.</p>
                        <!-- /wp:paragraph --></div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:image {"align":"center","id":260,"width":72,"height":72,"sizeSlug":"full","linkDestination":"none"} -->
                        <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/leaves.png" alt="leaves" class="wp-image-260" width="72" height="72"/></figure></div>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
                        <p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400">Non-animal Cruelty Products</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"200"}}} -->
                        <p class="has-text-align-center" style="font-style:normal;font-weight:200">We love animals. We ensure our suppliers and retailers are anti-animal cruelty. </p>
                        <!-- /wp:paragraph --></div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:image {"align":"center","id":259,"width":72,"height":72,"sizeSlug":"full","linkDestination":"none"} -->
                        <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/smile.png" alt="happy" class="wp-image-259" width="72" height="72"/></figure></div>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
                        <p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400">After-sales Service</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"200"}}} -->
                        <p class="has-text-align-center" style="font-style:normal;font-weight:200">We promise to respond to your messages in 2 business days and ensure you get the most satisfactory shopping experience.</p>
                        <!-- /wp:paragraph --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div></div>
                        <!-- /wp:cover -->',
        'categories'  => array( 'layout', 'featured'),
        'keywords'    => array( 'three-columns', 'layout', 'features' ),
    )
);
