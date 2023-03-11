<?php
 /**
  * Title: Latest News  
  * Slug: approach/latest-news
  * Categories:approach-front-page-sections
  */
?>
<!-- wp:query {"queryId":77,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"approach-blog"} -->
<div class="wp-block-query approach-blog"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"50px"}}}} -->
<div class="wp-block-group" style="margin-bottom:50px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"color":{"text":"#333333"}},"fontSize":"small"} -->
<h2 class="has-text-align-center has-text-color has-small-font-size" style="color:#333333;font-style:normal;font-weight:700;line-height:1;text-transform:uppercase;letter-spacing:0.2em;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">Our Blogs</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php echo (esc_html__('All News &amp; Article','approach'));?></h2>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:post-template -->
<!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-date /-->

<!-- wp:post-title {"level":4} /-->

<!-- wp:paragraph -->
<p><?php echo (esc_html__('Norem ipsum dolor sitna amet, no ectetur adipiscing elit. Curabitur laoreet cursus volutpat. Em iquam sat amet ligula eta justo tincidunt lam sreet nome vitae lorem. Aliquam porttitor tellus enim,…','approach'));?></p>
<!-- /wp:paragraph -->

<!-- wp:read-more {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"6px","bottom":"6px","right":"15px","left":"15px"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group -->

<!-- wp:query-no-results /--></div>
<!-- /wp:query -->


