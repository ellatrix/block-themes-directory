<?php
/**
 * Title: 404
 * Slug: elevated-lite/not-found
 * Categories: elevated-lite, not-found
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri().'/assets/img/video-bg.jpg' ); ?>","id":86,"dimRatio":80,"minHeight":100,"minHeightUnit":"vh","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-86" alt="" src="<?php echo esc_url( get_template_directory_uri().'/assets/img/video-bg.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"160px","letterSpacing":"15px","lineHeight":"1"}},"textColor":"primary"} -->
<h2 class="has-text-align-center has-primary-color has-text-color" style="font-size:160px;letter-spacing:15px;line-height:1"><?php esc_html_e('404','elevated-lite'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"letterSpacing":"2px"}},"fontSize":"gigantic"} -->
<h4 class="has-text-align-center has-gigantic-font-size" style="letter-spacing:2px"><?php esc_html_e('Page not found!','elevated-lite'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Sorry, the page you are looking for does not exist or has been moved.','elevated-lite'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"60px"}}}} -->
<div class="wp-block-buttons" style="margin-top:60px"><!-- wp:button {"style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/" style="border-radius:0px"><?php esc_html_e('Return Home','elevated-lite'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->