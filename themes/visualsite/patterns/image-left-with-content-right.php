<?php
 /**
  * Title: Image Left With Content Right
  * Slug: visualsite/image-left-with-content-right
  * Categories: visualsite
  */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","right":"0px","bottom":"3rem","left":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:3rem;padding-right:0px;padding-bottom:3rem;padding-left:0px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":962,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/image-1.jpeg" alt="" class="wp-image-962"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"15px","padding":{"left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-left:20px"><!-- wp:heading {"level":3,"textColor":"vivid-green-cyan"} -->
<h3 class="has-vivid-green-cyan-color has-text-color"><?php esc_html_e('Who We Are', 'visualsite'); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2><?php esc_html_e('We\'re passionate in helping your project grow.', 'visualsite'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Etiam eleifend velit mollis venenatis ultricies. Sed pretium in turpis sed fringilla. Etiam rutrum arcu, quis ullamcorper sem sodales ac.', 'visualsite'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php esc_html_e('Unlimited websites usage', 'visualsite'); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Amazing photo &amp; video galleries', 'visualsite'); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Huge color scheme selection', 'visualsite'); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-cyan-blue","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-vivid-cyan-blue-background-color has-background wp-element-button" ref="#"><?php esc_html_e('Explore More', 'visualsite'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->