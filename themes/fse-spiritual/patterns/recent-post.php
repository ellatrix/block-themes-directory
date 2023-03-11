<?php
 /**
  * Title: Recent Posts
  * Slug: fse-spiritual/recent-post
  * Categories: fse-spiritual, recent-post
  */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:20px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"50px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-bottom:50px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"2px"}},"fontSize":"small"} -->
<h5 class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:2px"><?php esc_html_e('Church Blog','fse-spiritual'); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"1.2","letterSpacing":"2px"},"spacing":{"margin":{"bottom":"20px","top":"10px"}}},"textColor":"secondary","fontSize":"extra-large"} -->
<h3 class="has-text-align-center has-secondary-color has-text-color has-extra-large-font-size" style="margin-top:10px;margin-bottom:20px;letter-spacing:2px;line-height:1.2"><?php esc_html_e('Recent News','fse-spiritual'); ?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" style="margin-top:0px;margin-bottom:0px"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat<br>non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','fse-spiritual'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":29,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"latest-posts"} -->
<!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"style":{"spacing":{"padding":{"top":"5px","right":"16px","bottom":"5px","left":"16px"}}},"backgroundColor":"primary","textColor":"base"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} /-->

<!-- wp:post-excerpt {"moreText":"Read More"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->