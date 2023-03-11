<?php
/**
* Title: Latest Blog
* Slug: spice-fse/latest-blog
* Categories: spice-fse
* Block Types: core/latest-blog
*/
?>
<!-- wp:group {"style":{"color":{"background":"#f5f7fd"},"spacing":{"padding":{"top":"80px","bottom":"90px"}}},"className":"block-news","layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group block-news has-background" style="background-color:#f5f7fd;padding-top:80px;padding-bottom:90px"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3.75rem"}}} -->
<h2 class="has-text-align-center" style="font-size:3.75rem"><?php echo esc_html__('Latest News ', 'spice-fse' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#707070"}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-small-font-size" style="color:#707070"><?php echo esc_html__('Lorem ipsum dolor sit amet elit aene commodo ligula ru eget eu dolor aenean dis', 'spice-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:query {"queryId":52,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-date {"isLink":true,"style":{"color":{"text":"#707070"}},"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.875rem","fontStyle":"normal","fontWeight":"700"}}} /-->
<!-- wp:post-excerpt {"moreText":"Read More","style":{"color":{"text":"#707070"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->