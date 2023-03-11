<?php
/**
* Title: Latest Blog Pattern 3
* Slug: spice-fse/latest-blog-pattern-3
* Categories: spice-fse
* Block Types: core/latest-blog-pattern-3
*/
?>
<!-- wp:group {"style":{"color":{"background":"#F5F7FD"},"spacing":{"padding":{"top":"80px","bottom":"90px"}}},"className":"block-news-3","layout":{"type":"default","contentSize":"1200px"}} -->
<div class="wp-block-group block-news-3 has-background" style="background-color:#F5F7FD;padding-top:80px;padding-bottom:90px"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"60px"}}} -->
<h2 class="has-text-align-center" style="font-size:60px"><?php echo esc_html__('Latest News ', 'spice-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#707070"}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-small-font-size" style="color:#707070"><?php echo esc_html__('Lorem ipsum dolor sit amet elit aene commodo ligula ru eget eu dolor aenean dis', 'spice-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:query {"queryId":52,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"20px"}}}} -->
<div class="wp-block-group" style="padding-top:5px;padding-bottom:20px"><!-- wp:post-date {"style":{"color":{"text":"#707070"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"extra-small"} /--></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:separator {"style":{"color":{"background":"#D7D7D7"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#D7D7D7;color:#D7D7D7"/>
<!-- /wp:separator -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1.875rem"},"spacing":{"margin":{"top":"15px"}}},"textColor":"secondary"} /-->

<!-- wp:post-excerpt {"moreText":"Read More"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->