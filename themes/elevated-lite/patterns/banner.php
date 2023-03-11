<?php
/**
 * Title: Banner
 * Slug: elevated-lite/banner
 * Categories: elevated-lite, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri().'/assets/img/banner.jpg' ); ?>","id":6,"dimRatio":60,"overlayColor":"base","minHeight":90,"minHeightUnit":"vh","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6" alt="" src="<?php echo esc_url( get_template_directory_uri().'/assets/img/banner.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"primary","fontSize":"huge","fontFamily":"allison"} -->
<h4 class="has-text-align-center has-primary-color has-text-color has-allison-font-family has-huge-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-style:normal;font-weight:400"><?php esc_html_e('Join The Night','elevated-lite'); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"110px"}},"className":"banner-title"} -->
<h2 class="has-text-align-center banner-title" style="font-size:110px"><?php esc_html_e('Welcome to the Party','elevated-lite'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"12px","right":"15px","bottom":"12px","left":"15px"}},"typography":{"textTransform":"uppercase"}},"className":"is-style-outline","fontSize":"regular"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-regular-font-size" style="text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:12px;padding-right:15px;padding-bottom:12px;padding-left:15px"><?php esc_html_e('Get More Details','elevated-lite'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->