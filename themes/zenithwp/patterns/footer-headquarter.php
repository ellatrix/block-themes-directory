<?php

/**
 * Title: HeadQuarter Footer
 * Slug: zenithwp/footer-headquarter
 * Categories: footer
 * Block Types: core/template-part/footer-headquarter
 */
?>

<!-- wp:group {"className":"zenithheadquarter","layout":{"type":"flex","flexWrap":"wrap","orientation":"vertical"}} -->
<div class="wp-block-group zenithheadquarter">
    <!-- wp:heading {"style":{"typography":{"fontSize":"21px"},"spacing":{"margin":{"bottom":"24px"}}},"textColor":"contrast"} -->
    <h2 class="has-contrast-color has-text-color" style="margin-bottom:24px;font-size:21px"><?php echo esc_html_x('Zenith Headquarter', 'Label', 'zenithwp'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group">
        <!-- wp:image {"id":1863,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/map-marker.png" alt="" class="wp-image-1863" /></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}},"textColor":"contrast"} -->
        <p class="has-contrast-color has-text-color" style="font-size:16px"><?php echo esc_html_x(' 1428 Callison Lane Building 201 Virginia, VA 22902 United States', 'Label', 'zenithwp'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group">
        <!-- wp:image {"id":1865,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/phone.png" alt="" class="wp-image-1865" /></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}},"textColor":"contrast"} -->
        <p class="has-contrast-color has-text-color" style="font-size:16px"><?php echo esc_html_x(' (+1)672.342.1198', 'Label', 'zenithwp'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group">
        <!-- wp:image {"id":1867,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/fax.png" alt="" class="wp-image-1867" /></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}},"textColor":"contrast"} -->
        <p class="has-contrast-color has-text-color" style="font-size:16px"><?php echo esc_html_x('(+1)498.341.032', 'Label', 'zenithwp'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group">
        <!-- wp:image {"id":1868,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/comment.png" alt="" class="wp-image-1868" /></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}},"textColor":"contrast"} -->
        <p class="has-contrast-color has-text-color" style="font-size:16px"><?php echo esc_html_x('hello@zenithwp.com', 'Label', 'zenithwp'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->