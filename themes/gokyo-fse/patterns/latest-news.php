<?php
 /**
  * Title: Latest News
  * Slug: gokyo-fse/latest-news
  * Categories: gokyo-fse
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","right":"20px","bottom":"80px","left":"20px"},"blockGap":"0px"}},"backgroundColor":"background-secondary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"50px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide" style="padding-bottom:50px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":" ","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary","fontSize":"medium"} -->
<p class="has-secondary-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Featured Content', 'gokyo-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.3","textTransform":"capitalize"}},"textColor":"foreground","className":" ","fontSize":"huge"} -->
<h2 class="has-text-align-center has-foreground-color has-text-color has-huge-font-size" style="line-height:1.3;text-transform:capitalize"><?php echo esc_html__( 'Creative Solutions', 'gokyo-fse' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":"3","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"className":"has-box-shadow ","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-box-shadow" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"overlayColor":"foreground","minHeight":314,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":" image-zoom-hover","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left image-zoom-hover" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:314px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"},"blockGap":"10px"}},"backgroundColor":"background-secondary"} -->
<div class="wp-block-group alignwide has-background-secondary-background-color has-background" style="margin-top:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|dark-blue"}}}}} /-->

<!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /-->

<!-- wp:post-excerpt {"moreText":"Know More","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":" ","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px","margin":{"top":"50px","bottom":"20px"}}}} -->
<div class="wp-block-buttons" style="margin-top:50px;margin-bottom:20px"><!-- wp:button {"style":{"spacing":{"padding":{"right":"35px","left":"35px"}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#" style="padding-right:35px;padding-left:35px"><?php echo esc_html__( 'Explore More', 'gokyo-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->