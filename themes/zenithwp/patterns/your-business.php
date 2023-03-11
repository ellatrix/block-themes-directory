<?php

/**
 * Title: Your Business
 * Slug: zenithwp/your-business
 * Categories: zenithwp
 * Keywords: Your Business
 * Block Types: core/buttons
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"128px","bottom":"128px"}}},"className":"zenithwp-your-business","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group zenithwp-your-business" style="margin-top:128px;margin-bottom:128px">
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"500px"}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#da9f00"},"typography":{"fontSize":"28px","fontStyle":"italic","fontWeight":"600"},"spacing":{"margin":{"bottom":"16px"}}}} -->
        <p class="has-text-align-center has-text-color" style="color:#da9f00;margin-bottom:16px;font-size:28px;font-style:italic;font-weight:600"><?php esc_html_e('Lorem ipsum dolor', 'zenithwp'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
        <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"24px","left":"0px"}},"typography":{"lineHeight":"1.1"}}} -->
        <h2 class="has-text-align-center" style="margin-top:0px;margin-right:0px;margin-bottom:24px;margin-left:0px;line-height:1.1"><?php esc_html_e('Testimonials from all clients around the world for your business', 'zenithwp'); ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"500px"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:48px">
        <!-- wp:paragraph {"align":"center","textColor":"base"} -->
        <p class="has-text-align-center has-base-color has-text-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'zenithwp'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri() . '/assets/image/pattern/your-business/map.jpg'); ?>","id":2280,"dimRatio":20,"minHeight":750,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"color":{}}} -->
    <div class="wp-block-cover alignfull" style="min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2280" alt="" src="<?php echo esc_url(get_template_directory_uri() . '/assets/image/pattern/your-business/map.jpg'); ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:paragraph {"align":"center","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->