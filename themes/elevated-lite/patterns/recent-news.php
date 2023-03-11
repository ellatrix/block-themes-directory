<?php
/**
 * Title: Recent News
 * Slug: elevated-lite/recent-news
 * Categories: elevated-lite, recent-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:50px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"primary","fontSize":"large","fontFamily":"allison"} -->
<h2 class="has-text-align-center has-primary-color has-text-color has-allison-font-family has-large-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-style:normal;font-weight:400"><?php esc_html_e('Our Blog','elevated-lite'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px","top":"0px"}}},"fontSize":"huge"} -->
<h2 class="has-text-align-center has-huge-font-size" style="margin-top:0px;margin-bottom:0px;letter-spacing:1px"><?php esc_html_e('Latest News','elevated-lite'); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"align":"center","id":39,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/equalizer.png' ); ?>" alt="" class="wp-image-39"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:15px"><!-- wp:post-date {"textColor":"primary"} /-->

<!-- wp:post-terms {"term":"category","prefix":"In ","textColor":"primary"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"15px"}}},"fontSize":"large"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:post-author {"avatarSize":24,"showBio":false,"textColor":"primary","className":"round-cls"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->