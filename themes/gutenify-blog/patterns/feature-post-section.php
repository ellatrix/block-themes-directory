<?php
 /**
  * Title: Feature Post Section 
  * Slug: gutenify-blog/feature-post-section
  * Categories: gutenify-blog
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"30px","bottom":"0px","left":"30px"},"blockGap":"0px"}},"backgroundColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:40px;padding-right:30px;padding-bottom:0px;padding-left:30px"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"wide","style":{"color":{"gradient":"linear-gradient(60deg,rgb(252,185,0) 49%,rgb(255,242,235) 49%)"},"spacing":{"padding":{"top":"10px","right":"30px","bottom":"10px","left":"25px"}}}} -->
<div class="wp-block-group alignwide has-background" style="background:linear-gradient(60deg,rgb(252,185,0) 49%,rgb(255,242,235) 49%);padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:25px"><!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"1.1rem"}},"textColor":"foreground"} -->
<h3 class="alignwide has-foreground-color has-text-color" style="font-size:1.1rem;font-style:normal;font-weight:600"><?php echo esc_html__( 'Recent News', 'gutenify-blog' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"15px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"backgroundColor":"background","textColor":"foreground"} -->
<div class="wp-block-group has-foreground-color has-background-background-color has-text-color has-background has-link-color" style="padding-top:30px;padding-right:30px;padding-bottom:15px;padding-left:0px"><!-- wp:latest-posts {"excerptLength":10,"displayAuthor":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":100,"featuredImageSizeHeight":100,"addLinkToFeaturedImage":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
<div class="wp-block-column" style="padding-bottom:40px"><!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":"3","offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"list","columns":2},"align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"focalPoint":{"x":"0.18","y":"0.48"},"minHeight":683,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 37%,rgba(0,0,0,0.77) 90%)","contentPosition":"bottom left","isDark":false,"align":"wide","className":" image-zoom-hover","style":{"spacing":{"padding":{"left":"60px","bottom":"60px","top":"60px","right":"60px"}}}} -->
<div class="wp-block-cover alignwide is-light has-custom-content-position is-position-bottom-left  image-zoom-hover" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px;min-height:683px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 37%,rgba(0,0,0,0.77) 90%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-group alignwide"><!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"has-multiple-color"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"top":"25px","right":"50px","bottom":"25px","left":"50px"}}},"backgroundColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="padding-top:25px;padding-right:50px;padding-bottom:25px;padding-left:50px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->