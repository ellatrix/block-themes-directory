<?php
/**
* Title: Latest Blog Pattern 4
* Slug: spice-fse/latest-blog-pattern-4
* Categories: spice-fse
* Block Types: core/latest-blog-pattern-4
*/
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"90px"}}},"backgroundColor":"quinary","className":"block-news-4","layout":{"type":"default","contentSize":"1200px"}} -->
<div class="wp-block-group block-news-4 has-quinary-background-color has-background" style="padding-top:80px;padding-bottom:90px"><!-- wp:group -->
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

<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"12px"}}}} -->
<div class="wp-block-group" style="padding-top:25px;padding-bottom:12px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"10px","left":"10px"}}},"className":"meta-box"} -->
<div class="wp-block-columns are-vertically-aligned-center meta-box" style="padding-right:10px;padding-left:10px"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-author {"textAlign":"center","showAvatar":false,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"primary","fontSize":"extra-small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-date {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"extra-small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"30px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:30px"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary","fontSize":"large"} /-->

<!-- wp:read-more {"content":"Read More","style":{"spacing":{"padding":{"right":"20px","bottom":"6px","left":"20px","top":"6px"},"margin":{"top":"20px"}},"typography":{"fontSize":"0.875rem","fontStyle":"normal","fontWeight":"700"},"border":{"radius":"5px","width":"1px","color":"#D7D7D7"}},"textColor":"secondary","className":"blog-btn-center","fontFamily":"montserrat"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->