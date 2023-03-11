<?php
 /**
  * Title: Default Header
  * Slug: exo/header-default
  * Categories: exo
  */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"12px","bottom":"12px","left":"12px"},"blockGap":"0px"},"color":{"background":"#221f3c"}},"textColor":"white","layout":{"inherit":true}} -->
<div class="wp-block-group has-white-color has-text-color has-background" style="background-color:#221f3c;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px"><!-- wp:group {"align":"wide","className":"mobile-aligncenter","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide mobile-aligncenter"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"className":"mobile-aligncenter","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group mobile-aligncenter"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":84,"width":18,"height":18,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/icon-phone.png" alt="" class="wp-image-84" width="18" height="18"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html__( '+123 456 789', 'exo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":93,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/icon-envelope.png" alt="" class="wp-image-93"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><a href="mailto:support@example.com"><?php echo esc_html__( 'support@example.com', 'exo' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mobile-aligncenter"} -->
<div class="wp-block-group mobile-aligncenter"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"20px","left":"20px"}}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:0px;margin-bottom:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","right":"10px","left":"10px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"5px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:site-title {"style":{"typography":{"fontSize":"1.7rem","fontStyle":"normal","fontWeight":"700"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"customTextColor":"#696969","overlayBackgroundColor":"white","overlayTextColor":"text-link","align":"wide","className":"has-left-submenu wp-block-navigation-animation","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","flexWrap":"wrap","orientation":"horizontal"},"style":{"typography":{"textTransform":"capitalize"},"spacing":{"blockGap":"15px"}},"fontSize":"small"} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"0px"}}}} -->
<div class="wp-block-buttons" style="margin-top:0px"><!-- wp:button {"style":{"spacing":{"padding":{"right":"25px","left":"25px"}}},"className":"is-style-fill","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-small-font-size"><a class="wp-block-button__link" href="#" style="padding-right:25px;padding-left:25px"><?php echo esc_html__( 'Get A Quote', 'exo' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->