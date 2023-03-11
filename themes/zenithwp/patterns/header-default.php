<?php
/**
 * Title: Default Header
 * Slug: zenithwp/header-default
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"12px"}},"typography":{"fontSize":"13px"}},"className":"topbar","layout":{"type":"constrained"},"fontFamily":"red-hat-text"} -->
<div class="wp-block-group topbar has-red-hat-text-font-family" style="padding-top:0px;padding-bottom:12px;font-size:13px"><!-- wp:group {"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"13px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="font-size:13px;font-style:normal;font-weight:100"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"color":{"text":"#5f5c5c"},"typography":{"fontSize":"13px"}},"fontFamily":"red-hat-text"} -->
<p class="has-text-color has-red-hat-text-font-family" style="color:#5f5c5c;font-size:13px"><?php echo esc_html_x('Tel: (+1) 767-123-786', 'Label', 'zenithwp'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#5f5c5c"},"typography":{"fontSize":"13px"}}} -->
<p class="has-text-color" style="color:#5f5c5c;font-size:13px"><?php echo esc_html_x('Mon → Sat : 6am-10pm', 'Label', 'zenithwp'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#5f5c5c"},"typography":{"fontSize":"13px"}}} -->
<p class="has-text-color" style="color:#5f5c5c;font-size:13px"><?php echo esc_html_x('Email: hello@example.com', 'Label', 'zenithwp'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"typography":{"fontSize":"13px"}},"layout":{"type":"flex","flexWrap":"wrap","orientation":"horizontal"}} -->
<div class="wp-block-group" style="font-size:13px"><!-- wp:paragraph {"style":{"color":{"text":"#5f5c5c"},"typography":{"fontSize":"13px"}}} -->
<p class="has-text-color" style="color:#5f5c5c;font-size:13px"><?php echo esc_html_x('Facebook', 'Label', 'zenithwp'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#5f5c5c"},"typography":{"fontSize":"13px"}}} -->
<p class="has-text-color" style="color:#5f5c5c;font-size:13px"><?php echo esc_html_x('Twitter', 'Label', 'zenithwp'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#5f5c5c"},"typography":{"fontSize":"13px"}}} -->
<p class="has-text-color" style="color:#5f5c5c;font-size:13px"><?php echo esc_html_x('LinkedIn', 'Label', 'zenithwp'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#5f5c5c"},"typography":{"fontSize":"13px"}}} -->
<p class="has-text-color" style="color:#5f5c5c;font-size:13px"><?php echo esc_html_x('Youtube', 'Label', 'zenithwp'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#5f5c5c"},"typography":{"fontSize":"13px"}}} -->
<p class="has-text-color" style="color:#5f5c5c;font-size:13px"><?php echo esc_html_x('Instagram', 'Label', 'zenithwp'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"gradient":"cool-to-warm-spectrum","className":"separator is-style-pelangi"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-cool-to-warm-spectrum-gradient-background has-background separator is-style-pelangi" style="margin-top:0px;margin-bottom:0px"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px"}}},"backgroundColor":"secondary","className":"zenith-navigation","layout":{"type":"constrained"}} -->
<div class="wp-block-group zenith-navigation has-secondary-background-color has-background" style="padding-top:24px;padding-bottom:24px"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|black1"}}}},"backgroundColor":"white2","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"},"fontFamily":"redhat-text"} -->
<div class="wp-block-group alignwide has-white-2-background-color has-background has-link-color has-redhat-text-font-family" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":7408,"width":175,"height":24,"sizeSlug":"large","linkDestination":"media"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/logo.png" alt="" class="wp-image-7408" width="175" height="24"/></figure>
<!-- /wp:image -->

<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"16px"}}} -->
<!-- wp:page-list /-->
<!-- /wp:navigation -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->