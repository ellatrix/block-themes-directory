<?php
 /**
  * Title: Cover With Post title
  * Slug: gutenify-news/cover-with-post-title
  * Categories: gutenify-news
  */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/images/cta-banner.jpg","id":588,"dimRatio":80,"overlayColor":"background","minHeight":234,"minHeightUnit":"px"} -->
<div class="wp-block-cover" style="min-height:234px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-588" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/images/cta-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-title {"textAlign":"center","level":1,"align":"wide","textColor":"foreground","fontSize":"large"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->