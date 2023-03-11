<?php
/**
* Title: Footer Widgets
* Slug: spice-fse/footer-widgets
* Categories: spice-fse
* Block Types: core/footer-widgets
*/
?>
<!-- wp:group {"style":{"color":{"background":"#0e1626"},"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"footer-sidebar Footer-block","layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group footer-sidebar Footer-block has-background" style="background-color:#0e1626;padding-top:100px;padding-bottom:100px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
<h2 class="has-white-color has-text-color" style="font-size:40px;font-style:normal;font-weight:700"><?php echo esc_html__('Logo Here','spice-fse'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color"><?php echo esc_html__('Lorem ipsum dolor sit amet elit aene commodo ligula ru eget eu dolor aenean massa sociis dis quis magnis.','spice-fse'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","customIconBackgroundColor":"#2e3649","iconBackgroundColorValue":"#2e3649","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php echo esc_html__('Our Category','spice-fse'); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"textColor":"black"} -->
<div class="wp-block-column has-black-color has-text-color"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php echo esc_html__('Recent Post','spice-fse'); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostDate":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"textColor":"black"} -->
<div class="wp-block-column has-black-color has-text-color"><!-- wp:heading -->
<h2><?php echo esc_html__('Gallery','spice-fse'); ?></h2>
<!-- /wp:heading -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":13,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/1.jpg' ) ); ?>" alt="" class="wp-image-13"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":11,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/2.jpg' ) ); ?>" alt="" class="wp-image-11"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":12,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/3.jpg' ) ); ?>" alt="" class="wp-image-12"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":10,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/4.jpg' ) ); ?>" alt="" class="wp-image-10"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":8,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/5.jpg' ) ); ?>" alt="" class="wp-image-8"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":9,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/6.jpg' ) ); ?>" alt="" class="wp-image-9"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->