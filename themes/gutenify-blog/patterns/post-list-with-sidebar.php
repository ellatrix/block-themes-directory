<?php
 /**
  * Title: Post List With Sidebar
  * Slug: gutenify-blog/post-list-with-sidebar
  * Categories: gutenify-blog
  */
?>
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"80px","left":"30px","right":"30px"}}},"className":"no-margin no-padding","layout":{"inherit":true}} -->
<main class="wp-block-group alignfull no-margin no-padding" style="padding-top:60px;padding-right:30px;padding-bottom:80px;padding-left:30px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"50px"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"gutenify-blog","tagName":"div"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:70%"><!-- wp:group {"tagName":"main","layout":{"inherit":false}} -->
<main class="wp-block-group"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":"4","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":"60px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"bottom":"50px"}}},"backgroundColor":"background-secondary"} -->
<div class="wp-block-columns has-background-secondary-background-color has-background" style="margin-bottom:50px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":449,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 56%,rgba(0,0,0,0.61) 100%)","contentPosition":"bottom left","isDark":false,"align":"wide","className":"image-zoom-hover","style":{"spacing":{"padding":{"left":"40px","bottom":"40px","top":"40px","right":"40px"}}}} -->
<div class="wp-block-cover alignwide is-light has-custom-content-position is-position-bottom-left image-zoom-hover" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;min-height:449px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 56%,rgba(0,0,0,0.61) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"has-multiple-color"} /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0px","bottom":"0px","left":"0px","top":"0px"},"margin":{"top":"0px"},"blockGap":"10px"}}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"large"} /-->

<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:post-excerpt {"moreText":"Know More\u003ca role=\u0022textbox\u0022 aria-multiline=\u0022true\u0022 aria-label=\u0022\u0026quot;Read more\u0026quot; link text\u0022 class=\u0022block-editor-rich-text__editable wp-block-post-excerpt__more-link rich-text\u0022 style=\u0022font-size: revert; font-family: var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dpoppins); min-width: 1px; display: inline !important;\u0022\u003e\u003c/a\u003e","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->