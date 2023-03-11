<?php
/**
 * Title: Quote
 * Slug: droplet/quote
 * Categories: droplet, quote
 */
?>

<!-- wp:group {"style":{"color":{"background":"#f7f7f7"},"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f7f7f7;margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"94%"} -->
<div class="wp-block-column" style="flex-basis:94%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3em","right":"3em","bottom":"3em","left":"3em"}}},"backgroundColor":"white","className":"has-lite-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-lite-shadow has-white-background-color has-background" style="padding-top:3em;padding-right:3em;padding-bottom:3em;padding-left:3em"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"39%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:39%"><!-- wp:image {"id":180,"sizeSlug":"full","linkDestination":"none","className":"over-border"} -->
<figure class="wp-block-image size-full over-border"><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/quote.jpg' ); ?>" alt="" class="wp-image-180"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"2%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"61%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:61%"><!-- wp:heading {"level":3} -->
<h3><?php esc_html_e('Request A Quote','droplet'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Mauris pulvinar sodales nisl et porttitor. Quisque malesuada a ipsum vel finibus. Ut hendrerit efficitur ipsum vitae mollis. Nunc semper congue est in aliquet.','droplet'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:shortcode -->
[contact-form-7 id="198" title="quote form"]
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->