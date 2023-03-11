<?php
 /**
  * Title: Search Cover
  * Slug: paloma-fse/search-cover
  * Categories: paloma-fse
  */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/cover-banner.jpg","id":1118,"dimRatio":40,"focalPoint":{"x":0.53,"y":0.27},"minHeight":538,"minHeightUnit":"px","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"10vw","right":"30px","bottom":"10vw","left":"30px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:10vw;padding-right:30px;padding-bottom:10vw;padding-left:30px;min-height:538px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1118" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/cover-banner.jpg" style="object-position:53% 27%" data-object-fit="cover" data-object-position="53% 27%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","textColor":"background"} -->
<h2 class="has-text-align-center has-background-color has-text-color"> <?php echo esc_html__( 'Search Now', 'paloma-fse' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"50px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:50px"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Now","width":100,"widthUnit":"%","buttonText":"Search","align":"center","style":{"border":{"radius":"100px"}},"backgroundColor":"primary","textColor":"background"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->