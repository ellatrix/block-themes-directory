<?php

/**
 * Title: Text above three columns of images
 * Slug: molten/coming-soon-three-column-images
 * Categories: molten-coming-soon
 */
?>
<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
    <!-- wp:spacer {"height":"16px"} -->
    <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:site-logo {"align":"center"} /-->

    <!-- wp:site-title {"textAlign":"center"} /-->

    <!-- wp:spacer {"height":"16px"} -->
    <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
    <h2 class="has-text-align-center has-huge-font-size"><?php esc_html_e('Opening soon:', 'molten') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}}} -->
    <p class="has-text-align-center" style="text-transform:uppercase"><?php esc_html_e('A new Australian dining experience.', 'molten') ?><br><?php esc_html_e('Opening in the heart of the city on 01.01.2023', 'molten') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:spacer {"height":"8px"} -->
    <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"id":23,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/egg.jpg' ?>" alt="" class="wp-image-23" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"id":23,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/seasoning.jpg' ?>" alt="" class="wp-image-23" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"id":23,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/gin-and-tonic.jpg' ?>" alt="" class="wp-image-23" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"16px"} -->
    <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
    <ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only">
        <!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->

        <!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->

        <!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->
    </ul>
    <!-- /wp:social-links -->

    <!-- wp:spacer {"height":"32px"} -->
    <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->
