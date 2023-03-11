<?php
 /**
  * Title: Archives
  * Slug: fse-blogstory/archives
  * Categories: fse-blogstory, archives
  */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"className":"banner","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull banner" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri( ).'/images/best-wordpress-theme-free.jpg','fse-blogstory'); ?>","id":71,"dimRatio":30,"overlayColor":"base","focalPoint":{"x":0.59,"y":0.66},"minHeight":200} -->
<div class="wp-block-cover" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-71" alt="" src="<?php echo esc_url( get_template_directory_uri( ).'/images/best-wordpress-theme-free.jpg','fse-blogstory'); ?>" style="object-position:59% 66%" data-object-fit="cover" data-object-position="59% 66%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"alignwide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive","textAlign":"left","style":{"typography":{"fontSize":"48px"}},"textColor":"white"} /-->

<!-- wp:term-description {"textAlign":"left","textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"15px","bottom":"0px","left":"15px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:15px"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px","bottom":"0px"},"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="margin-top:25px;margin-bottom:0px;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:post-date {"style":{"typography":{"fontSize":"14px"}},"textColor":"fse-blogstory-DarkPink"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"10px","right":"0px","bottom":"20px","left":"0px"}}}} /-->

<!-- wp:separator {"style":{"color":{"background":"#ededed"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ededed;color:#ededed"/>
<!-- /wp:separator -->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"Read More","style":{"spacing":{"padding":{"top":"12px","right":"24px","bottom":"12px","left":"24px"}},"border":{"radius":"30px"}},"backgroundColor":"fse-blogstory-DarkPink","textColor":"white"} /--></div>
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
<!-- /wp:group -->