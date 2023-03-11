<?php
/**
 * Title: Swyambhu
 * Slug: travel-init/swyambhunath
 * Categories: wensolutions
 * Description: A description of the pattern
 * Keywords: full site editing,
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"8vw"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:8vw">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","orientation":"horizontal"}} -->
    <div class="wp-block-group">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"right":"40px","left":"40px"}}}} -->
            <div class="wp-block-column" style="padding-right:40px;padding-left:40px;flex-basis:50%">
                <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/swyambhu.jpg","id":1330,"dimRatio":0,"focalPoint":{"x":"0.53","y":"0.47"},"minHeight":35,"minHeightUnit":"vw","contentPosition":"center center","align":"center"} -->
                <div class="wp-block-cover aligncenter" style="min-height:35vw"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1330" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/swyambhu.jpg" style="object-position:53% 47%" data-object-fit="cover" data-object-position="53% 47%" />
                    <div class="wp-block-cover__inner-container">
                        <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"40px","left":"40px"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-right:40px;padding-left:40px;flex-basis:50%">
                <!-- wp:heading -->
                <h2><?php echo esc_html__( 'Swyambhunath Stupa', 'travel-init' ); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:spacer {"height":"1vw"} -->
                <div style="height:1vw" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:quote {"className":"has-black-color has-text-color","fontSize":"paragraph"} -->
                <blockquote class="wp-block-quote has-black-color has-text-color has-paragraph-font-size">
                    <!-- wp:paragraph -->
                    <p><?php echo esc_html__( 'Pashupatinath Temple is a Hindu temple dedicated to Lord Shiva, and is located in Kathmandu, Nepal. This temple was classified as a World Heritage Site in 1979.', 'travel-init' ); ?></p>
                    <!-- /wp:paragraph -->
                </blockquote>
                <!-- /wp:quote -->

                <!-- wp:spacer {"height":"1vw"} -->
                <div style="height:1vw" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"style":{"color":{"text":"#030303"},"border":{"radius":"1px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}},"className":"is-style-outline","fontSize":"paragraph"} -->
                    <div class="wp-block-button has-custom-font-size is-style-outline has-paragraph-font-size"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo get_site_url(); ?>/blog/" style="border-radius:1px;color:#030303;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px"><?php echo esc_html__( 'Learn more', 'travel-init' ); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->