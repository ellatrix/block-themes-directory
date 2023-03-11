<?php
 /**
  * Title: Latest News
  * Slug: gutenify-photoshot/latest-news
  * Categories: gutenify-photoshot
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","right":"30px","bottom":"80px","left":"30px"},"blockGap":"0px"}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:80px;padding-right:30px;padding-bottom:80px;padding-left:30px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide" style="padding-bottom:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":" animated animated-fadeInUp","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group animated animated-fadeInUp"><!-- wp:group {"layout":{"wideSize":"34px"}} -->
<div class="wp-block-group"><!-- wp:separator {"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"letterSpacing":"1px"}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-text-align-left has-primary-color has-text-color has-medium-font-size" style="letter-spacing:1px"><?php echo esc_html__( 'From Our Blog', 'gutenify-photoshot' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.3"}},"className":" animated animated-fadeInUp","fontSize":"slider-title"} -->
<h2 class="has-text-align-left animated animated-fadeInUp has-slider-title-font-size" style="line-height:1.3"><?php echo esc_html__( 'Recent News', 'gutenify-photoshot' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":" animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"10px","margin":{"top":"20px","bottom":"20px"}}}} -->
<div class="wp-block-buttons  animated animated-fadeInUp" style="margin-top:20px;margin-bottom:20px"><!-- wp:button {"style":{"spacing":{"padding":{"right":"35px","left":"35px"}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" href="#" style="padding-right:35px;padding-left:35px"><?php echo esc_html__( 'Explore More', 'gutenify-photoshot' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":2,"pages":"3","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"background-secondary","className":"has-shadow-dark  animated animated-fadeInUp","layout":{"inherit":true}} -->
<div class="wp-block-group has-shadow-dark animated animated-fadeInUp has-background-secondary-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"minHeight":270,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 56%,rgba(0,0,0,0.61) 100%)","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"left":"40px","bottom":"20px"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="padding-bottom:20px;padding-left:40px;min-height:270px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 56%,rgba(0,0,0,0.61) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"},"blockGap":"10px"}},"backgroundColor":"background-secondary"} -->
<div class="wp-block-group alignwide has-background-secondary-background-color has-background" style="margin-top:0px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->

<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:post-excerpt {"moreText":"Know More","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->