<?php
 /**
  * Title: Search Page
  * Slug: fse-spiritual/search
  * Categories: fse-spiritual, search
  */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri().'/images/inner-banner.jpg','fse-spiritual'); ?>","id":422,"dimRatio":50,"focalPoint":{"x":0.51,"y":0.87},"minHeight":300,"isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-422" alt="" src="<?php echo esc_url( get_template_directory_uri().'/images/inner-banner.jpg','fse-spiritual'); ?>" style="object-position:51% 87%" data-object-fit="cover" data-object-position="51% 87%"/><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"search","textAlign":"center","level":3,"textColor":"base","fontSize":"extra-large"} /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"15px","bottom":"50px","left":"15px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:50px;padding-right:15px;padding-bottom:50px;padding-left:15px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":50,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->

<!-- wp:query {"queryId":32,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"30px","bottom":"30px"}},"color":{"background":"#f7f7f7"}}} -->
<div class="wp-block-group has-background" style="background-color:#f7f7f7;margin-top:30px;margin-bottom:30px"><!-- wp:post-date {"style":{"typography":{"fontSize":"14px"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"big"} /-->

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