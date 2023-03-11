<?php
 /**
  * Title: Search
  * Slug: evit-fse/search
  * Categories: evit-fse
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/port4.jpg","id":865,"dimRatio":40,"minHeight":538,"minHeightUnit":"px","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"10vw","right":"30px","bottom":"10vw","left":"30px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:10vw;padding-right:30px;padding-bottom:10vw;padding-left:30px;min-height:538px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-865" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/port4.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","textColor":"background"} -->
<h2 class="has-text-align-center has-background-color has-text-color"><?php echo esc_html__( 'Search Now', 'evit-fse' ); ?> </h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"50px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:50px"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Now","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","style":{"border":{"radius":"58px"},"typography":{"lineHeight":"1.5","letterSpacing":"1px"}},"textColor":"background","fontSize":"big"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","right":"20px","bottom":"80px","left":"20px"},"blockGap":"0px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"100%","style":{"typography":{"textDecoration":"none"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="text-decoration:none;flex-basis:100%"><!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list"},"align":"full","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"className":"evit-post-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group evit-post-box" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"400px"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:post-date {"textColor":"body-text"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read more","showMoreOnNewLine":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"}}}},"textColor":"body-text"} /-->

<!-- wp:separator {"style":{"color":{"background":"#a4a9ad"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:0;margin-bottom:0;background-color:#a4a9ad;color:#a4a9ad"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"chevron","style":{"elements":{"link":{"color":{"text":"var:preset|color|boulder"}}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->