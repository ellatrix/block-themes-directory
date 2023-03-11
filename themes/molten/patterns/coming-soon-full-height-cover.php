<?php

/**
 * Title: Cover with coming soon text in the middle and accompanying text on the side
 * Slug: molten/coming-soon-full-height-cover
 * Categories: molten-coming-soon
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/pastries.jpg' ?>","id":133,"dimRatio":80,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-133" alt="" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/pastries.jpg' ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"textColor":"background","layout":{"inherit":false}} -->
        <div class="wp-block-group has-background-color has-text-color">
            <!-- wp:site-logo {"align":"center"} /-->

            <!-- wp:site-title {"textAlign":"center","isLink":false,"align":"full","textColor":"background"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"96px"} -->
        <div style="height:96px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"layout":{"inherit":false}} -->
        <div class="wp-block-group">
            <!-- wp:columns {"verticalAlignment":"center","align":"full"} -->
            <div class="wp-block-columns alignfull are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center","width":"25%","layout":{"inherit":true}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
                    <!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
                    <h3 class="has-text-align-center has-medium-font-size"><?php esc_html_e('Opening on:', 'molten') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('01.01.2023', 'molten') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"inherit":true}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                    <!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
                    <h2 class="has-text-align-center has-xx-large-font-size"><?php esc_html_e('Coming soon', 'molten') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                    <p class="has-text-align-center has-medium-font-size"><?php esc_html_e('A new Australian dining experience coming soon to', 'molten') ?><br><?php esc_html_e('the heart of the city', 'molten') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"25%","layout":{"inherit":true}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
                    <!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
                    <h3 class="has-text-align-center has-medium-font-size"><?php esc_html_e('Location:', 'molten') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('123 Test Street', 'molten') ?><br><?php esc_html_e('Braddon, 2612, ACT', 'molten') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"96px"} -->
        <div style="height:96px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"layout":{"inherit":true}} -->
        <div class="wp-block-group">
            <!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
            <ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only">
                <!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->

                <!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->

                <!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
