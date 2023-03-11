<?php
 /**
  * Title: Default Header
  * Slug: gokyo-fse/header-default
  * Categories: gokyo-fse
  */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","right":"30px","left":"30px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"15px"}},"className":"mobile-aligncenter","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group mobile-aligncenter" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:site-logo {"width":40,"shouldSyncIcon":true,"style":{"color":{"duotone":["#2a3cb7","#2a3cb7"]}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","fontSize":"2rem"},"elements":{"link":{"color":{"text":"var:preset|color|dark-blue"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"25px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":471,"width":38,"height":38,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#2a3cb7","#2a3cb7"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/email.png" alt="" class="wp-image-471" width="38" height="38"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foreground","fontSize":"medium"} -->
<p class="has-foreground-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Email', 'gokyo-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px"><a href="#"></a><a href="mailto:support@example.com"><?php echo esc_html__( 'info@example.com', 'gokyo-fse' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"25px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":128,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#2a3cb7","#2a3cb7"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/call-icon.png" alt="" class="wp-image-128"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foreground","fontSize":"medium"} -->
<p class="has-foreground-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Quick Contact', 'gokyo-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px"><a href="#"><?php echo esc_html__( '+123 456 789', 'gokyo-fse' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"18px","bottom":"18px","right":"30px","left":"30px"}},"color":{"background":"#081da3"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#081da3;padding-top:18px;padding-right:30px;padding-bottom:18px;padding-left:30px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"textColor":"background","overlayBackgroundColor":"background","overlayTextColor":"foreground","align":"wide","className":"has-left-submenu wp-block-navigation-animation","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","flexWrap":"wrap","orientation":"horizontal"},"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"20px"}},"fontSize":"small"} -->
<!-- wp:page-list /-->
<!-- /wp:navigation -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":"mobile-aligncenter","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group mobile-aligncenter"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background"} -->
<p class="has-background-color has-text-color" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Follow Us :', 'gokyo-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"15px","left":"15px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:0px;margin-bottom:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->