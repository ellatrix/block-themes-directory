<?php
 /**
  * Title: Home Main Section
  * Slug: gutenify-news/home-main-section
  * Categories: gutenify-news
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","top":"var:preset|spacing|60","left":"40px","right":"40px"},"blockGap":"0"}},"backgroundColor":"background-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:40px;padding-bottom:var(--wp--preset--spacing--60);padding-left:40px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"10px"}},"backgroundColor":"background"} -->
<div class="wp-block-columns alignwide has-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"className":"has-no-hover-shadow-dark animated animated-fadeInUp"} -->
<div class="wp-block-group has-no-hover-shadow-dark animated animated-fadeInUp" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"10px","right":"75px","bottom":"10px","left":"25px"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;padding-top:10px;padding-right:75px;padding-bottom:10px;padding-left:25px"><!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"1.1rem"}},"textColor":"background","className":"animated animated-fadeInUp"} -->
<h3 class="alignwide animated animated-fadeInUp has-background-color has-text-color" id="hot-news" style="font-size:1.1rem;font-style:normal;font-weight:600"><?php echo esc_html__( 'Hot News', 'gutenify-news' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"0px","bottom":"15px","left":"0px"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"background","textColor":"tertiary"} -->
<div class="wp-block-group has-tertiary-color has-background-background-color has-text-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:30px;padding-right:0px;padding-bottom:15px;padding-left:0px"><!-- wp:latest-posts {"categories":[],"postsToShow":4,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":100,"featuredImageSizeHeight":100,"addLinkToFeaturedImage":true,"className":"border-radious-10"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"10px"}},"backgroundColor":"background","className":" animated animated-fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide animated animated-fadeInUp has-background-background-color has-background" style="border-radius:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":14,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"border-radious-10"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":30,"focalPoint":{"x":0.48,"y":1},"minHeight":546,"minHeightUnit":"px","customGradient":"linear-gradient(0deg,rgb(0,0,0) 28%,rgba(0,0,0,0) 100%)","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:546px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgb(0,0,0) 28%,rgba(0,0,0,0) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"textTransform":"capitalize","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"large"} /-->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-link-color"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"align":"wide","className":" animated animated-fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide animated animated-fadeInUp"><!-- wp:query {"queryId":14,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"border-radious-10"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"focalPoint":{"x":0.48,"y":0.15},"minHeight":175,"minHeightUnit":"px","contentPosition":"bottom left"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="min-height:175px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"textTransform":"capitalize","fontSize":"1.2rem","lineHeight":1.6},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->