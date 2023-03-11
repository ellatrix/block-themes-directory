<?php
 /**
  * Title: Search Page
  * Slug: fse-study-lite/search
  * Categories: fse-study-lite, search
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"15px","bottom":"50px","left":"15px"}},"color":{"background":"#f5f5f5"}}} -->
<div class="wp-block-group has-background" style="background-color:#f5f5f5;padding-top:50px;padding-right:15px;padding-bottom:50px;padding-left:15px"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":50,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->

<!-- wp:query {"queryId":32,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"30px","bottom":"30px"}}},"backgroundColor":"white"} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:30px;margin-bottom:30px"><!-- wp:post-date {"style":{"typography":{"fontSize":"14px"}}} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:separator {"style":{"color":{"background":"#ededed"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ededed;color:#ededed"/>
<!-- /wp:separator -->

<!-- wp:post-excerpt {"moreText":"Read More"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->