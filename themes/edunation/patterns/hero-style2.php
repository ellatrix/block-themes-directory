<?php
/**
 * Title: Hero Columns
 * Slug: edunation/hero-style2
 * Categories: edunation_hero
*/
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"},"margin":{"top":"0px","bottom":"0px"}},"color":{"background":"#27808c"}},"layout":{"contentSize":"800px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#27808c;margin-top:0px;margin-bottom:0px;padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0px"}}},"textColor":"white","fontSize":"huge"} -->
<h1 class="has-white-color has-text-color has-huge-font-size" style="margin-top:0px">Hero Headline</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"white","fontSize":"normal"} -->
<p class="has-white-color has-text-color has-normal-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-red","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-vivid-red-background-color has-text-color has-background">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-background-color has-background">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":288,"height":650,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/default-image.jpg" alt="" class="wp-image-288" height="650"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->