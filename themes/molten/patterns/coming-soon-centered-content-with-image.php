<?php
/**
 * Title: Content centered with an image.
 * Slug: molten/coming-soon-centered-content-with-image
 * Categories: molten-coming-soon
 */
?>
<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-group alignwide">
    <!-- wp:spacer {"height":"16px"} -->
    <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:site-logo /-->

            <!-- wp:site-title {"textAlign":"left"} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","align":"right","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
            <ul class="wp-block-social-links alignright has-icon-color is-style-logos-only">
                <!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->

                <!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->

                <!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"16px"} -->
    <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="has-text-align-center"><?php esc_html_e('New restaurant', 'molten') ?><br><?php esc_html_e('opening soon', 'molten') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('01.01.2023', 'molten') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:image {"align":"center","id":126,"height":500,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image aligncenter size-large is-resized"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/table-with-food.jpg' ?>" alt="" class="wp-image-126" height="500" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"32px"} -->
    <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('© 2022 Molten Theme', 'molten') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:spacer {"height":"16px"} -->
    <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->
