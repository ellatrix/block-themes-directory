<?php
register_block_pattern(
    'carlina/layout-2-columns-page',
    array(
        'title'       => 'Images and Text in Two Columns',
        'description' => 'Display images and text in two columns',
        'content'     => '<!-- wp:columns -->
                        <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
                        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/StockSnap_VEP8AYJMNI.jpg","id":136,"hasParallax":true,"dimRatio":10,"minHeight":460,"minHeightUnit":"px","contentPosition":"center left","isDark":false,"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
                        <div class="wp-block-cover is-light has-parallax has-custom-content-position is-position-center-left" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;background-image:url(' . get_template_directory_uri() . '/assets/images/StockSnap_VEP8AYJMNI.jpg);min-height:460px"><span aria-hidden="true" class="has-background-dim-10 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"textColor":"white","fontSize":"large"} -->
                        <p class="has-white-color has-text-color has-large-font-size">Local skincare brand </p>
                        <!-- /wp:paragraph --></div></div>
                        <!-- /wp:cover --></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"fontSize":"medium"} -->
                        <p class="has-medium-font-size"><strong><em>Carlina</em></strong> is a local Canadian brand of skin care and body care. </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p>Our products are all locally made in Canada, mainly in British Columbia and some raw materials are sourced from Alberta, Nova Scotia and Quebec.</p>
                        <!-- /wp:paragraph --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns -->

                        <!-- wp:spacer {"height":"40px"} -->
                        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:columns {"className":"reverse-columns"} -->
                        <div class="wp-block-columns reverse-columns"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"fontSize":"medium"} -->
                        <p class="has-medium-font-size"><strong><em>Carlina</em></strong> uses only organic and natural ingredients in our products. </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p>We aim at providing organic products in all natural ingredients and ensure no cruelty to animals during production and testing. </p>
                        <!-- /wp:paragraph --></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"66.66%"} -->
                        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/StockSnap_P79FXNDI5W.jpg","id":125,"hasParallax":true,"dimRatio":10,"minHeight":400,"minHeightUnit":"px","contentPosition":"center left","isDark":false,"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
                        <div class="wp-block-cover is-light has-parallax has-custom-content-position is-position-center-left" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;background-image:url(' . get_template_directory_uri() . '/assets/images/StockSnap_P79FXNDI5W.jpg);min-height:400px"><span aria-hidden="true" class="has-background-dim-10 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"right","textColor":"white","fontSize":"large"} -->
                        <p class="has-text-align-right has-white-color has-text-color has-large-font-size">Organic ingredients </p>
                        <!-- /wp:paragraph --></div></div>
                        <!-- /wp:cover --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns -->

                        <!-- wp:spacer {"height":"40px"} -->
                        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:columns -->
                        <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
                        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/StockSnap_HT0IEUFSBY.jpg","id":126,"hasParallax":true,"dimRatio":10,"minHeight":500,"minHeightUnit":"px","contentPosition":"center left","isDark":false,"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
                        <div class="wp-block-cover is-light has-parallax has-custom-content-position is-position-center-left" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;background-image:url(' . get_template_directory_uri() . '/assets/images/StockSnap_HT0IEUFSBY.jpg);min-height:500px"><span aria-hidden="true" class="has-background-dim-10 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"textColor":"white","fontSize":"large"} -->
                        <p class="has-white-color has-text-color has-large-font-size">Freshly made </p>
                        <!-- /wp:paragraph --></div></div>
                        <!-- /wp:cover --></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:paragraph {"fontSize":"medium"} -->
                        <p class="has-medium-font-size"><strong><em>Carlina</em></strong> uses the freshest ingredients and ensures it delivers the best effect.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p>We made our products with the freshest ingredients to ensure the best quality. Our products uses premium protective packaging to protect them from contamination from sun and air.</p>
                        <!-- /wp:paragraph --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns -->',
        'categories'  => array( 'layout', 'featured'),
        'keywords'    => array( 'two-columns', 'layout', 'images', 'text' ),
    )
);
