<?php
 /**
  * Title: Hero Section
  * Slug: gutenify-store/hero-section-1
  * Categories: gutenify-store
  */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
    <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/images/hero-section.jpg","dimRatio":0,"focalPoint":{"x":"0.69","y":"0.46"},"contentPosition":"center center","align":"full"} -->
    <div class="wp-block-cover alignfull"><span aria-hidden="true"
            class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img
            class="wp-block-cover__image-background wp-image-3297" alt=""
            src="<?php echo esc_url( get_template_directory_uri() );?>/images/hero-section.jpg"
            style="object-position:69% 46%" data-object-fit="cover" data-object-position="69% 46%" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"200px","bottom":"200px"}}},"layout":{"inherit":true}} -->
            <div class="wp-block-group" style="padding-top:200px;padding-bottom:200px">
                <!-- wp:columns {"align":"wide"} -->
                <div class="wp-block-columns alignwide">
                    <!-- wp:column {"verticalAlignment":"center","width":""} -->
                    <div class="wp-block-column is-vertically-aligned-center">
                        <!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
                        <div class="wp-block-group alignwide">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><?php echo esc_html__( 'Full Site Editing Theme ( FSE )
                                With Multiple Kits', 'gutenify-store' ); ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"fontSize":"huge"} -->
                            <h2 class="has-huge-font-size"><?php echo esc_html__( 'Meet Gutenify Store – Powerful
                                Block theme', 'gutenify-store' ); ?></h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php echo esc_html__( 'Change the workflow for your WordPress site, control
                                everything from Site editor without using any extra
                                plugins. Improved speed, web vitals score and SEO to get
                                better positions', 'gutenify-store' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"10px","margin":{"top":"20px","bottom":"20px"}}}} -->
                        <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:20px">
                            <!-- wp:button {"backgroundColor":"background","textColor":"foreground","style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
                            <div class="wp-block-button is-style-fill"><a
                                    class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background"
                                    href="#" style="border-radius:0px"><?php echo esc_html__( 'Get
                                    Started', 'gutenify-store' ); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":""} -->
                    <div class="wp-block-column is-vertically-aligned-center"></div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->
