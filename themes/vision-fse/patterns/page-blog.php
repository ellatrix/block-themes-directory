<?php
 /**
  * Title: Blog Page
  * Slug: vision-fse/page-blog
  * Categories: vision-fse
  */
?>
<!-- wp:group {"tagName":"main","style":{"border":{"radius":{"topLeft":"5px","bottomLeft":"5px","topRight":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="border-top-left-radius:5px;border-top-right-radius:0px;border-bottom-left-radius:5px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/default-banner.jpg","id":8,"dimRatio":70,"overlayColor":"vision-base","minHeight":500,"align":"full","style":{"spacing":{"margin":{"bottom":"70px"}}}} -->
<div class="wp-block-cover alignfull" style="margin-bottom:70px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-vision-base-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-8" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/default-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="has-text-align-center"><?php echo esc_html__( 'Blogs', 'vision-fse' ); ?></h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:30px;padding-left:30px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":15,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"align":"wide","className":"vision-post-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide vision-post-card"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"30px","bottom":"30px","top":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"blog-post-date","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group blog-post-date"><!-- wp:image {"id":291,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/blog-date.png" alt="" class="wp-image-291"/></figure>
<!-- /wp:image -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read More"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","align":"left","layout":{"type":"flex","justifyContent":"center"},"fontSize":"semi-medium"} -->
<!-- wp:query-pagination-previous {"label":""} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true,"align":"center","style":{"border":{"radius":{"topLeft":"5px","topRight":"0px","bottomLeft":"5px","bottomRight":"0px"}}},"className":"sidebar-search"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"40px","top":"40px"},"blockGap":"0","margin":{"top":"50px"}}},"className":"vision-sidebar-user-detail","layout":{"type":"constrained"}} -->
<div class="wp-block-group vision-sidebar-user-detail" style="margin-top:50px;padding-top:40px;padding-right:0;padding-bottom:40px"><!-- wp:image {"align":"center","id":181,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/sidebar-img.png" alt="" class="wp-image-181"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"15px","bottom":"20px"}}},"textColor":"vision-base"} -->
<h3 class="has-text-align-center has-vision-base-color has-text-color" style="margin-top:15px;margin-bottom:20px"><?php echo esc_html__( 'Romania W Smith', 'vision-fse' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">We carry out any projects with our<br>hearts and are not afraid<br>of difficulties!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"10px"},"margin":{"top":"50px"}}},"textColor":"vision-hover","className":"sidebar-item","layout":{"type":"constrained","justifyContent":"center"},"fontSize":"normal"} -->
<div class="wp-block-group sidebar-item has-vision-hover-color has-text-color has-normal-font-size" style="margin-top:50px;padding-top:40px;padding-bottom:40px;padding-left:10px"><!-- wp:list {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"vision-base","fontSize":"medium"} -->
<ul class="has-vision-base-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:700"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Categories', 'vision-fse' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:categories {"className":"sidebar-cat-list","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"right":"40px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px"},"margin":{"top":"50px"}}},"className":"sidebar-item","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group sidebar-item" style="margin-top:50px;padding-top:40px;padding-bottom:40px;padding-left:30px"><!-- wp:list {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"20px"}}},"textColor":"vision-base","fontSize":"medium"} -->
<ul class="has-vision-base-color has-text-color has-medium-font-size" style="padding-left:20px;font-style:normal;font-weight:700"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Recent Posts', 'vision-fse' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:latest-posts {"categories":[],"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"className":"sidebar-latest-post-item"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"10px","bottom":"40px","top":"40px"},"margin":{"top":"50px"}}},"className":"sidebar-follow-icons","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-follow-icons" style="margin-top:50px;padding-top:40px;padding-bottom:40px;padding-left:10px"><!-- wp:list {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"40px"}}},"textColor":"vision-base","fontSize":"medium"} -->
<ul class="has-vision-base-color has-text-color has-medium-font-size" style="padding-left:40px;font-style:normal;font-weight:700"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Follow Us', 'vision-fse' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","iconBackgroundColor":"vision-hover","iconBackgroundColorValue":"#FF6600","size":"has-normal-icon-size","align":"center","style":{"spacing":{"padding":{"left":"20px"},"blockGap":{"top":"0.5em","left":"0.5em"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color has-icon-background-color" style="padding-left:20px"><!-- wp:social-link {"url":"facebook.com","service":"facebook","className":"social\u002d\u002dmedia\u002d\u002dicon"} /-->

<!-- wp:social-link {"url":"twitter.com","service":"twitter","className":"social\u002d\u002dmedia\u002d\u002dicon"} /-->

<!-- wp:social-link {"url":"pinterest.com","service":"pinterest","className":"social\u002d\u002dmedia\u002d\u002dicon"} /-->

<!-- wp:social-link {"url":"instagram.com","service":"instagram","className":"social\u002d\u002dmedia\u002d\u002dicon"} /-->

<!-- wp:social-link {"url":"linkden.com","service":"linkedin","className":"social\u002d\u002dmedia\u002d\u002dicon"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"10px"},"margin":{"top":"50px"}}},"className":"sidebar-popular-tags","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-popular-tags" style="margin-top:50px;padding-top:40px;padding-bottom:40px;padding-left:10px"><!-- wp:list {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"40px"}}},"textColor":"vision-base","fontSize":"medium"} -->
<ul class="has-vision-base-color has-text-color has-medium-font-size" style="padding-left:40px;font-style:normal;font-weight:700"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Popular Tag', 'vision-fse' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->