<?php
/**
* Title: 404
* Slug: spice-fse/404
* Categories: spice-fse
* Block Types: core/404
*/
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","right":"30px","left":"30px"}}},"backgroundColor":"white"} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:80px;padding-right:30px;padding-bottom:80px;padding-left:30px"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"10.625rem","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"color":{"text":"#6a7bff"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#6a7bff;font-size:10.625rem;font-style:normal;font-weight:700;line-height:1"><?php echo esc_html__('404','spice-fse'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"fontSize":"medium"} -->
<h6 class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1">
    <?php echo esc_html__('Sorry! the page you requested was not found','spice-fse'); ?>
</h6>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
<p class="has-text-align-center" style="font-size:16px">
    <?php echo esc_html__(' Check out our help center or head back home','spice-fse'); ?>
</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"35px"}}}} -->
<div class="wp-block-buttons" style="margin-top:35px"><!-- wp:button {"style":{"typography":{"fontSize":"16px"},"border":{"radius":"50px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"45px","right":"45px"}},"color":{"background":"#6a7bff"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:16px"><a class="wp-block-button__link has-background" href="<?php echo esc_url( home_url('/') ); ?>" style="border-radius:50px;background-color:#6a7bff;padding-top:13px;padding-right:45px;padding-bottom:13px;padding-left:45px"><?php echo esc_html__('Back to Home','spice-fse'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->