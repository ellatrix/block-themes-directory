<?php

/**
 * Title: Booknow 
 * Slug: travel-init/booknow-section
 * Categories: wensolutions 
 * Description: A description of the pattern
 * Keywords: full site editing,
 */
?>
<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group">
    <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/booknow.jpg","id":1081,"dimRatio":40,"customOverlayColor":"#c5c5c5","focalPoint":{"x":"0.66","y":"0.65"},"minHeight":12,"minHeightUnit":"vw","isDark":false} -->
    <div class="wp-block-cover is-light" style="min-height:12vw"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#c5c5c5"></span><img class="wp-block-cover__image-background wp-image-1081" alt="booknow image" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/booknow.jpg" style="object-position:66% 65%" data-object-fit="cover" data-object-position="66% 65%" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"className":"section-140px-top-margin","layout":{"inherit":true,"type":"constrained"}} -->
            <div class="wp-block-group section-140px-top-margin" style="padding-top:80px;padding-bottom:80px">
                <!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3vw"}}} -->
                    <h2 class="has-text-align-center" style="font-size:3vw"><?php echo esc_html__( 'Book Your Tour Now', 'travel-init' ); ?></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:spacer {"height":"1vw"} -->
                <div style="height:1vw" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:group {"layout":{"inherit":false,"contentSize":"400px","type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php echo esc_html__( 'Reserving a table beforehand means less waiting. Groups of 8 or more must reserve ahead of time.', 'travel-init' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:spacer {"height":"1vw"} -->
                <div style="height:1vw" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:group {"layout":{"inherit":false,"contentSize":"400px","type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"style":{"spacing":{"padding":{"top":"0.8vw","bottom":"0.8vw","left":"2vw","right":"2vw"}}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo get_site_url(); ?>/contact-us" style="padding-top:0.8vw;padding-right:2vw;padding-bottom:0.8vw;padding-left:2vw" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Book now', 'travel-init' ); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->