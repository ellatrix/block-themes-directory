<?php
 /**
  * Title: Latest Posts
  * Slug: evit-fse/latest-posts
  * Categories: evit-fse
  */
?>
<!-- wp:group {"style":{"color":{"background":"#f9f9f9"},"spacing":{"padding":{"top":"100px","bottom":"100px","right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background" style="background-color:#f9f9f9;margin-top:0;margin-bottom:0;padding-top:100px;padding-right:0;padding-bottom:100px;padding-left:0"><!-- wp:group {"align":"full","style":{"color":{"background":"#f9f9f9"},"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"bottom":"0","top":"0","right":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f9f9f9;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":5,"textColor":"primary"} -->
<h5 class="has-text-align-center has-primary-color has-text-color"><strong><?php echo esc_html__( 'RECENT ARTICLES', 'evit-fse' ); ?></strong></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php echo esc_html__( 'Our latest articles', 'evit-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","top":"var:preset|spacing|60","right":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"100%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"87%"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:100%"><!-- wp:query {"queryId":15,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":4}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"35px","right":"35px","bottom":"35px","left":"35px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","className":"evit-latest-post","layout":{"inherit":false}} -->
<div class="wp-block-group evit-latest-post has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px"><!-- wp:post-featured-image {"width":"100%","height":"200px","align":"center"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"1.2em"}}} /-->

<!-- wp:post-date {"textColor":"tertiary"} /-->

<!-- wp:post-excerpt {"textAlign":"left","moreText":"","style":{"typography":{"lineHeight":"1.6"}},"textColor":"body-text","fontSize":"normal"} /-->

<!-- wp:read-more {"textColor":"primary"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'More Posts', 'evit-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->