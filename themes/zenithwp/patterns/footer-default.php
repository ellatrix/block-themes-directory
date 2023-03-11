<?php

/**
 * Title: Default Footer
 * Slug: zenithwp/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"color":{"background":"#160d28"},"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"100px","bottom":"40px"}}},"textColor":"contrast","className":"zenithfooter","layout":{"type":"constrained"}} -->
<div class="wp-block-group zenithfooter has-contrast-color has-text-color has-background has-link-color" style="background-color:#160d28;margin-top:0px;margin-bottom:0px;padding-top:100px;padding-bottom:40px">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal","flexWrap":"wrap","verticalAlignment":"top"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30)">
        <!-- wp:group {"style":{"spacing":{"blockGap":"10em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:image {"id":8,"width":171,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/logo.png" alt="" class="wp-image-8" width="171" /></figure>
            <!-- /wp:image -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"10px"}}} -->
            <p style="font-size:10px"><?php echo esc_html_x('WORK HARD PRAY HARDER.', 'Label', 'zenithwp'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

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

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"fontSize":"small"} -->
                <h2 class="has-small-font-size"><?php echo esc_html_x('Quick Links', 'Label', 'zenithwp'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"left":"20px"}}}} -->
                <ul style="padding-left:20px">
                    <!-- wp:list-item -->
                    <li><a href="#"><?php echo esc_html_x('Maintenance', 'Label', 'zenithwp'); ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php echo esc_html_x('CNC Services', 'Label', 'zenithwp'); ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php echo esc_html_x('Milling', 'Label', 'zenithwp'); ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php echo esc_html_x('Overhaul', 'Label', 'zenithwp'); ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php echo esc_html_x('Tune Up', 'Label', 'zenithwp'); ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php echo esc_html_x('Booking', 'Label', 'zenithwp'); ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/footer-image.jpg","id":1836,"dimRatio":50,"minHeight":200,"isDark":false,"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
        <div class="wp-block-cover is-light" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1836" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/footer-image.jpg" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"contrast","fontSize":"medium","fontFamily":"red-hat-text"} -->
                <p class="has-text-align-center has-contrast-color has-text-color has-red-hat-text-font-family has-medium-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-style:normal;font-weight:500;line-height:1"><?php echo esc_html_x('2023 Overseas', 'Label', 'zenithwp'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"50px","left":"0px"}}},"textColor":"contrast","fontSize":"medium","fontFamily":"red-hat-text"} -->
                <p class="has-contrast-color has-text-color has-red-hat-text-font-family has-medium-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:50px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-style:normal;font-weight:600;line-height:1.3"><?php echo esc_html_x('Travel Guide', 'Label', 'zenithwp'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"style":{"border":{"radius":"3px"}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:3px"><?php echo esc_html_x('Download', 'Label', 'zenithwp'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"wrap","verticalAlignment":"top"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30)">
        <!-- wp:separator {"style":{"color":{"background":"#2c2c2c"}},"className":"is-style-wide"} -->
        <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#2c2c2c;color:#2c2c2c" />
        <!-- /wp:separator -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0"}}},"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal","flexWrap":"wrap","verticalAlignment":"top"}} -->
    <div class="wp-block-group alignwide" style="padding-top:0">
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}}} -->
        <p style="font-size:13px"><?php echo esc_html_e('Proudly powered by WordPress', 'zenithwp'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"style":{"typography":{"fontSize":"13px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="font-size:13px">
            <!-- wp:paragraph -->
            <p><a href="#"><?php echo esc_html_x('Facebook', 'Label', 'zenithwp'); ?></a></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><a href="#"><?php echo esc_html_x('Twitter', 'Label', 'zenithwp'); ?></a></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><a href="#"><?php echo esc_html_x('Instagram', 'Label', 'zenithwp'); ?></a></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><a href="#"><?php echo esc_html_x('LinkedIn', 'Label', 'zenithwp'); ?></a></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><a href="#"><?php echo esc_html_x('Youtube', 'Label', 'zenithwp'); ?></a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->