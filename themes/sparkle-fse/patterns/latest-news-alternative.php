<?php
 /**
  * Title: Latest News Alternative
  * Slug: sparkle-fse/latest-news-alternative
  * Categories: sparkle-fse
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","right":"0px","bottom":"80px","left":"0px"},"blockGap":"0px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-right:0px;padding-bottom:80px;padding-left:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide" style="padding-bottom:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":" animated animated-fadeInUp","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group animated animated-fadeInUp"><!-- wp:group {"layout":{"wideSize":"34px"}} -->
<div class="wp-block-group"><!-- wp:separator {"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"letterSpacing":"1px"}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-text-align-left has-primary-color has-text-color has-medium-font-size" style="letter-spacing:1px"><?php echo esc_html__('From Our Blog', 'sparkle-fse'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.3"}},"className":" animated animated-fadeInUp","fontSize":"slider-title"} -->
<h2 class="has-text-align-left animated animated-fadeInUp has-slider-title-font-size" style="line-height:1.3"><?php echo esc_html__('Recent News', 'sparkle-fse'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":" animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"10px","margin":{"top":"20px","bottom":"20px"}}}} -->
<div class="wp-block-buttons animated animated-fadeInUp" style="margin-top:20px;margin-bottom:20px"><!-- wp:button {"style":{"spacing":{"padding":{"right":"35px","left":"35px"}},"border":{"radius":"5px"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" href="#" style="border-radius:5px;padding-right:35px;padding-left:35px"><?php echo esc_html__('Explore More', 'sparkle-fse'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":2,"pages":"","offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","className":"alternative-layout"} -->
<!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:45%"><!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"border":{"radius":"5px"}},"className":"no-padding"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"has-shadow-dark content-block"} -->
<div class="wp-block-column is-vertically-aligned-center has-shadow-dark content-block" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"},"blockGap":"10px"}},"backgroundColor":"background"} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="margin-top:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} /-->

<!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"moreText":"Know More\u003ca role=\u0022textbox\u0022 aria-multiline=\u0022true\u0022 aria-label=\u0022\u0026quot;Read more\u0026quot; link text\u0022 class=\u0022block-editor-rich-text__editable wp-block-post-excerpt__more-link rich-text\u0022 style=\u0022font-size: revert; font-family: var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dpoppins); min-width: 1px; display: inline !important;\u0022\u003e\u003c/a\u003e","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->