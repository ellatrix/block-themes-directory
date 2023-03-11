<?php
/**
* Title: Home Blog Section
* Slug: choyu/home-blog-section
* Categories: choyu-general
*/
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"10px","bottom":"40px","left":"10px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:40px;padding-right:10px;padding-bottom:40px;padding-left:10px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"30px","right":"10px","bottom":"30px","left":"10px"},"blockGap":"40px"}}} -->
<div class="wp-block-column" style="padding-top:30px;padding-right:10px;padding-bottom:30px;padding-left:10px;flex-basis:33.33%"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4"},"color":{"text":"#5abbc6"}},"fontSize":"max-48"} -->
<h2 class="has-text-color has-max-48-font-size" style="color:#5abbc6;line-height:1.4"><strong>Checkout our <br>Latest Releases</strong></h2>
<!-- /wp:heading -->

<!-- wp:image {"id":349,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/bridge-img.jpg'; ?>" alt="" class="wp-image-349"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":18,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"list","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->