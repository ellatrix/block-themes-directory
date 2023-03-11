<?php
 /**
  * Title: Latest News
  * Slug: arc-fse/latest-news
  * Categories: arc-fse
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","right":"20px","bottom":"80px","left":"20px"},"blockGap":"0px"}},"backgroundColor":"background-secondary","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"50px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide" style="padding-bottom:50px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":" ","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group "><!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php echo esc_html__( 'Featured Content', 'arc-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.3","textTransform":"capitalize"}},"textColor":"foreground","className":" ","fontSize":"slider-title"} -->
<h2 class="has-text-align-center  has-foreground-color has-text-color has-slider-title-font-size" style="line-height:1.3;text-transform:capitalize"><?php echo esc_html__( 'Creative Solutions', 'arc-fse' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":"3","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"className":"has-box-shadow ","layout":{"inherit":true}} -->
<div class="wp-block-group has-box-shadow " style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"30px","left":"40px"},"margin":{"top":"0px"},"blockGap":"10px"}},"backgroundColor":"tertiary"} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="margin-top:0px;padding-top:30px;padding-right:40px;padding-bottom:30px;padding-left:40px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"no-padding grayscale image-zoom-hover"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"},"blockGap":"10px"}},"backgroundColor":"tertiary"} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="margin-top:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"}}}},"textColor":"primary","fontSize":"small"} /-->

<!-- wp:post-excerpt {"moreText":"Know More","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":" ","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px","margin":{"top":"50px","bottom":"20px"}}}} -->
<div class="wp-block-buttons  " style="margin-top:50px;margin-bottom:20px"><!-- wp:button {"style":{"spacing":{"padding":{"right":"35px","left":"35px"}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" href="#" style="padding-right:35px;padding-left:35px"><?php echo esc_html__( 'Explore More', 'arc-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->