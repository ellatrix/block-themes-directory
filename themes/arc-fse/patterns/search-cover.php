<?php
 /**
  * Title: Search Cover
  * Slug: arc-fse/search-cover
  * Categories: arc-fse
  */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/cover-banner.jpg","id":372,"dimRatio":70,"focalPoint":{"x":"0.35","y":"0.38"},"align":"full","style":{"spacing":{"padding":{"top":"10vw","right":"30px","bottom":"10vw","left":"30px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:10vw;padding-right:30px;padding-bottom:10vw;padding-left:30px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-372" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/cover-banner.jpg" style="object-position:35% 38%" data-object-fit="cover" data-object-position="35% 38%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","textColor":"foreground"} -->
<h2 class="has-text-align-center has-foreground-color has-text-color">  <?php echo esc_html__( 'Search Now', 'arc-fse' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"50px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-bottom:50px"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Now","width":100,"widthUnit":"%","buttonText":"Search","align":"center","style":{"border":{"radius":"100px"}},"backgroundColor":"primary","textColor":"black"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->