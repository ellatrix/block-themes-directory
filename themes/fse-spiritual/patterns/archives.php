<?php
 /**
  * Title: Archives
  * Slug: fse-spiritual/archives
  * Categories: fse-spiritual, archives
  */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"className":"banner","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull banner" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri().'/images/inner-banner.jpg' ); ?>","id":422,"dimRatio":30,"overlayColor":"base","minHeight":300,"isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-422" alt="" src="<?php echo esc_url( get_template_directory_uri().'/images/inner-banner.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","className":"alignwide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive","textAlign":"left","style":{"typography":{"fontSize":"48px"}},"textColor":"white"} /-->

<!-- wp:term-description {"textAlign":"left","textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px","bottom":"0px"},"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}},"color":{"background":"#f7f7f7"}}} -->
<div class="wp-block-group has-background" style="background-color:#f7f7f7;margin-top:25px;margin-bottom:0px;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:post-date {"style":{"typography":{"fontSize":"14px"}},"textColor":"fse-spiritual-DarkPink"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"10px","right":"0px","bottom":"20px","left":"0px"}}}} /-->

<!-- wp:separator {"style":{"color":{"background":"#ededed"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ededed;color:#ededed"/>
<!-- /wp:separator -->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"Read More","style":{"spacing":{"padding":{"top":"12px","right":"24px","bottom":"12px","left":"24px"}},"border":{"radius":"30px"}},"backgroundColor":"fse-spiritual-DarkPink","textColor":"white"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->