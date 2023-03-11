<?php

/**
 * Title: Hero Banner 
 * Slug: travel-init/hero-banner-1
 * Categories: wensolutions 
 * Description: A description of the pattern
 * Keywords: full site editing,
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
    <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/temple1.jpeg","id":1296,"dimRatio":60,"focalPoint":{"x":"0.50","y":"0.24"},"minHeight":45,"minHeightUnit":"vw","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-cover" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:45vw"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1296" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/temple1.jpeg" style="object-position:50% 24%" data-object-fit="cover" data-object-position="50% 24%" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                <!-- wp:spacer {"height":"2vw"} -->
                <div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"background","layout":{"inherit":false},"fontSize":"hero_banner"} -->
                <div class="wp-block-group has-background-color has-text-color has-hero-banner-font-size" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                    <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"5.1vw"}},"backgroundColor":"transparent","textColor":"background"} -->
                    <h1 class="has-text-align-center has-background-color has-transparent-background-color has-text-color has-background" style="font-size:5.1vw;font-style:normal;font-weight:700"><?php echo esc_html__( 'Explore beautiful', 'travel-init' ); ?> <br><?php echo esc_html__( 'nature of Nepal', 'travel-init' ); ?></h1>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","align":"center","style":{"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"border":{"radius":"100px"},"color":{"background":"#f83531"}},"fontSize":"paragraph"} -->
<div class="wp-block-button aligncenter has-custom-font-size has-paragraph-font-size"><a class="wp-block-button__link has-white-color has-text-color has-background wp-element-button" href="<?php echo get_site_url(); ?>/blog" style="border-radius:100px;background-color:#f83531;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Explore', 'travel-init' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

                <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","style":{"spacing":{"margin":{"top":"30px","bottom":"30px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","orientation":"horizontal"}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:30px;margin-bottom:30px">
                    <!-- wp:social-link {"url":"twitter.com","service":"twitter","label":"visitLumbini"} /-->

                    <!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->