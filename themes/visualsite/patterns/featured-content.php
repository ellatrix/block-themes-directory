<?php
 /**
  * Title: Featured Content
  * Slug: visualsite/featured-content
  * Categories: visualsite
  */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bg-featured-content.jpeg","id":996,"dimRatio":50,"focalPoint":{"x":0.5,"y":0.4},"minHeight":500,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-996" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bg-featured-content.jpeg" style="object-position:50% 40%" data-object-fit="cover" data-object-position="50% 40%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-text-color"><!-- wp:heading -->
<h2><?php esc_html_e('Start Building A Great Company', 'visualsite'); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"750px"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('VisualSite is a WordPress theme built with the WordPress Site Editor, which allows you to create beautiful websites with drag and drop, no coding skills required.', 'visualsite'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-cyan-blue","textColor":"base","className":"is-style-fill","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-small-font-size"><a class="wp-block-button__link has-base-color has-vivid-cyan-blue-background-color has-text-color has-background wp-element-button" href="#"><strong><?php esc_html_e('Get Started', 'visualsite'); ?></strong></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"vivid-green-cyan","textColor":"base","className":"is-style-fill","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-small-font-size"><a class="wp-block-button__link has-base-color has-vivid-green-cyan-background-color has-text-color has-background wp-element-button" href="#"><strong><?php esc_html_e('Our Services', 'visualsite'); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->