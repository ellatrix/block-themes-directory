<?php
 /**
  * Title: Min Banner
  * Slug: medicity/home-banner
  * Categories: medicity
  */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"5vw","bottom":"5vw","right":"30px","left":"30px"}}},"backgroundColor":"background-secondary","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide has-background-secondary-background-color has-background" style="padding-top:5vw;padding-right:30px;padding-bottom:5vw;padding-left:30px"><!-- wp:media-text {"mediaPosition":"right","mediaId":1046,"mediaLink":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/main-hero.png","mediaType":"image","verticalAlignment":"center"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/main-hero.png" alt="" class="wp-image-1046 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"},"blockGap":"10px"}},"textColor":"background","layout":{"inherit":false}} -->
<div class="wp-block-group alignwide has-background-color has-text-color" style="padding-top:40px;padding-bottom:40px"><!-- wp:paragraph {"align":"left","textColor":"primary","className":" animated animated-fadeInUp","fontSize":"large"} -->
<p class="has-text-align-left animated animated-fadeInUp has-primary-color has-text-color has-large-font-size"><?php echo esc_html__( 'Improving the quality of your life', 'medicity' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":" animated animated-fadeInUp","fontSize":"huge"} -->
<h2 class="alignwide has-text-align-left animated animated-fadeInUp has-huge-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'Stay Healthy With Us', 'medicity' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","textColor":"body-text","className":" animated animated-fadeInUp","fontSize":"medium"} -->
<p class="has-text-align-left animated animated-fadeInUp has-body-text-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac lorem pretium, laoreet enim at, malesuada elit. Class aptent taciti sociosqu. Duis congue turpis risus.', 'medicity' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"animated fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"10px","margin":{"top":"40px","bottom":"20px"}}}} -->
<div class="wp-block-buttons animated fadeInUp" style="margin-top:40px;margin-bottom:20px"><!-- wp:button {"style":{"spacing":{"padding":{"right":"35px","left":"35px"}}},"className":"is-style-fill  animated animated-fadeInUp"} -->
<div class="wp-block-button is-style-fill animated animated-fadeInUp"><a class="wp-block-button__link" href="#" style="padding-right:35px;padding-left:35px"><?php echo esc_html__( 'Book an Appointment', 'medicity' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->