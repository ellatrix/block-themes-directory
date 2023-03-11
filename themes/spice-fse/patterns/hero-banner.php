<?php
/**
 * Title: Hero Banner
 * Slug: spice-fse/hero-banner
 * Categories: spice-fse
 * Block Types: core/hero-banner
 */
?>
<!-- wp:cover {"customGradient":"linear-gradient(135deg,rgb(84,52,255) 17%,rgb(109,119,255) 84%)","isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(135deg,rgb(84,52,255) 17%,rgb(109,119,255) 84%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"135px","bottom":"130px"}}},"className":"banner-1","layout":{"contentSize":"1200px","type":"constrained"}} -->
<div class="wp-block-group banner-1" style="padding-top:135px;padding-bottom:130px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"contentSize":""}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}}} -->
<div class="wp-block-group" style="margin-bottom:10px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"5.313rem","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}},"textColor":"white"} -->
<h2 class="has-text-align-left has-white-color has-text-color" style="font-size:5.313rem;font-style:normal;font-weight:700;line-height:1.2"><strong><?php echo esc_html__('Welcome to Spice', 'spice-fse' ); ?><br><?php echo esc_html__('FSE Theme', 'spice-fse' ); ?></strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}}} -->
<div class="wp-block-group" style="margin-bottom:40px"><!-- wp:paragraph {"align":"left","style":{"color":{"text":"#FFFFFF"}},"fontSize":"medium"} -->
<p class="has-text-align-left has-text-color has-medium-font-size" style="color:#FFFFFF"><?php echo esc_html__('Lorem ipsum dolor sit amet consectetuer adipiscing ', 'spice-fse' ); ?><br><?php echo esc_html__('elit quam felis ultricies nec pretium quis.', 'spice-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:buttons {"className":"banner-btn","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-buttons banner-btn"><!-- wp:button {"align":"center","style":{"color":{"text":"#FFFFFF","background":"#6ABE45"},"border":{"radius":"10px"},"spacing":{"padding":{"right":"38px","left":"38px","top":"15px","bottom":"15px"}}},"className":"is-style-fill eplus-wrapper","fontSize":"extra-small","fontFamily":"montserrat"} -->
<div class="wp-block-button aligncenter has-custom-font-size is-style-fill eplus-wrapper has-montserrat-font-family has-extra-small-font-size"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="border-radius:10px;color:#FFFFFF;background-color:#6ABE45;padding-top:15px;padding-right:38px;padding-bottom:15px;padding-left:38px"><?php echo esc_html__('READ MORE', 'spice-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":33,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-banner.png' ) ); ?>" alt="" class="wp-image-33"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->