<?php
 /**
  * Title: Featured Section One
  * Slug: gutenify-template-kit/featured-section-one
  * Categories: gutenify-template-kit
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}},"color":{"background":"#efefef"}},"layout":{"inherit":true}} -->
<div class="wp-block-group has-background" style="background-color:#efefef;padding-top:80px;padding-bottom:80px">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"id":206,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img
                    src="<?php echo esc_url( get_template_directory_uri() );?>/images/banner.png"
                    alt="" class="wp-image-206" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center"
            style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
            <!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><?php echo esc_html__( 'Meet Our Powerful', 'gutenify-template-kit' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"huge"} -->
                <h2 class="has-huge-font-size" style="line-height:1.4"><?php echo esc_html__( 'Gutenify Template Kits', 'gutenify-template-kit' ); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html__( 'Change the workflow for your WordPress site, control everything from Site editor
                    without using any extra plugins. Improved speed, web vitals score and SEO to get
                    better positions', 'gutenify-template-kit' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:20px">
                    <!-- wp:button {"backgroundColor":"luminous-vivid-amber","textColor":"foreground","style":{"border":{"radius":"0px"},"spacing":{"padding":{"right":"35px","left":"35px"}}},"className":"is-style-fill"} -->
                    <div class="wp-block-button is-style-fill"><a
                            class="wp-block-button__link has-foreground-color has-luminous-vivid-amber-background-color has-text-color has-background"
                            href="#" style="border-radius:0px;padding-right:35px;padding-left:35px"><?php echo esc_html__( 'More Demo', 'gutenify-template-kit' ); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
