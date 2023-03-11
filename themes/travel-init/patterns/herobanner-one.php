<?php
/**
 * Title: Herobanner Second
 * Slug: travel-init/hero-banner-two
 * Categories: wensolutions 
 * Description: A description of the pattern
 * Keywords: full site editing,
 */
?>



<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/scenes.jpg","id":1212,"dimRatio":60,"focalPoint":{"x":"0.38","y":"1.00"},"minHeight":40,"minHeightUnit":"vw","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:40vw"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1212" alt="banner-images" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/scenes.jpg" style="object-position:38% 100%" data-object-fit="cover" data-object-position="38% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"13.2vw","bottom":"7vw"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:13.2vw;margin-bottom:7vw"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"","layout":{"inherit":false,"contentSize":""}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"background","fontSize":"hero_banner"} -->
<h1 class="has-text-align-center has-background-color has-text-color has-hero-banner-font-size"><?php echo esc_html__( 'Collects Moments', 'travel-init' ); ?><br><?php echo esc_html__( 'Not Things', 'travel-init' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"3.2vw"} -->
<div style="height:3.2vw" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"contentSize":"400px","type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"1vw","right":"3.2vw","bottom":"1vw","left":"3.2vw"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo get_site_url(); ?>/contact-us/" style="padding-top:1vw;padding-right:3.2vw;padding-bottom:1vw;padding-left:3.2vw" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Call Us', 'travel-init' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"1vw","bottom":"1vw","left":"3.2vw","right":"3.2vw"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo get_site_url(); ?>/blog/" style="padding-top:1vw;padding-right:3.2vw;padding-bottom:1vw;padding-left:3.2vw"><?php echo esc_html__( 'Explore', 'travel-init' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->