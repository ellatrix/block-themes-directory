<?php
register_block_pattern(
    'carlina/newsletter-cover',
    array(
        'title'       => 'Newsletter subscription',
        'description' => 'Newsletter subscription with use of forminator plugin',
        'content'     => '<!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/newsletter_flower.jpg","id":228,"dimRatio":0,"minHeight":50,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full"} -->
                    <div class="wp-block-cover alignfull is-light" style="min-height:50vh"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-228" alt="flower background" src="' . get_template_directory_uri() . '/assets/images/newsletter_flower.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"wp-block-columns","layout":{"inherit":false,"wideSize":"420px"}} -->
                    <div class="wp-block-group wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"1em"}}}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-right:1em;flex-basis:50%"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"textColor":"foreground","fontSize":"large"} -->
                    <p class="has-text-align-right has-foreground-color has-text-color has-large-font-size" style="font-style:normal;font-weight:200"><em>Signup Our Newsletter</em></p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"2em"}}}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-right:2em;flex-basis:50%"><!-- wp:shortcode -->
                    Add your form here
                    <!-- /wp:shortcode --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:group --></div></div>
                    <!-- /wp:cover -->',
        'categories'  => array( 'newsletter' ),
        'keywords'    => array( 'newsletter', 'subscription' ),
    )
);


