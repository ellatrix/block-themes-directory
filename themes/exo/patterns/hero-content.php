<?php
 /**
  * Title: Hero Content
  * Slug: exo/hero-content
  * Categories: exo
  */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","right":"30px","left":"30px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:80px;padding-right:30px;padding-bottom:80px;padding-left:30px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":" animated animated-fadeInUp"} -->
<div class="wp-block-group animated animated-fadeInUp"><!-- wp:image {"id":288,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":" no-margin"} -->
<figure class="wp-block-image size-full  no-margin" style="border-radius:0px"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/hero-1.jpg" alt="" class="wp-image-288"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"20px"}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":" animated animated-fadeInUp","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group animated animated-fadeInUp"><!-- wp:group {"layout":{"wideSize":"34px"}} -->
<div class="wp-block-group"><!-- wp:separator {"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px"}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="letter-spacing:1px"><?php echo esc_html__( 'About Us', 'exo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"fontSize":"slider-title"} -->
<h2 class="has-slider-title-font-size"><?php echo esc_html__( 'Know More About Us', 'exo' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"animated animated-fadeInUp"} -->
<p class="animated animated-fadeInUp"><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac lorem pretium, laoreet enim at, malesuada elit. Class aptent taciti sociosqu. Duis congue turpis risus, ac dapibus mi malesuada ut. Duis feugiat nisi orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'exo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":" animated animated-fadeInUp"} -->
<p class="has-text-align-left animated animated-fadeInUp"><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac lorem pretium, laoreet enim at, malesuada elit.', 'exo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":" animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
<div class="wp-block-buttons  animated animated-fadeInUp" style="margin-top:20px;margin-bottom:20px"><!-- wp:button {"style":{"spacing":{"padding":{"right":"35px","left":"35px","top":"10px","bottom":"10px"}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" href="#" style="padding-top:10px;padding-right:35px;padding-bottom:10px;padding-left:35px"><?php echo esc_html__( 'Explore Us', 'exo' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->