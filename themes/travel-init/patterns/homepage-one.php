<?php

/**
 * Title: Homepage One 
 * Slug: travel-init/homepage-one
 * Categories: travel-init-homepage 
 * Description: A description of the pattern
 * Keywords: full site editing,
 */
?>
<!-- wp:group {"align":"full","className":"homepage-one","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull homepage-one"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/homepage-one-pattern.jpg","id":63,"dimRatio":20,"focalPoint":{"x":0.46,"y":0.02},"minHeight":696,"minHeightUnit":"px","isDark":false,"align":"full","className":"banner-section-one"} -->
<div class="wp-block-cover alignfull is-light banner-section-one" style="min-height:696px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-63" alt="trip-feature image" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/homepage-one-pattern.jpg" style="object-position:46% 2%" data-object-fit="cover" data-object-position="46% 2%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.4"}},"textColor":"white","className":"section-title"} -->
<h2 class="has-text-align-left section-title has-white-color has-text-color" style="line-height:1.4"><?php echo esc_html__( 'Travel to the most beautiful', 'travel-init' ); ?> <br><?php echo esc_html__( 'places in the world', 'travel-init' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"theme-btn"} -->
<div class="wp-block-buttons theme-btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Explore Tour', 'travel-init' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained","contentSize":"380px","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:wptravel/trip-search /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","bottom":"4vw"}}},"className":"about-section-one","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull about-section-one" style="padding-top:4vw;padding-bottom:4vw"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"200"}},"className":"section-subtitle","fontSize":"medium"} -->
<h3 class="section-subtitle has-medium-font-size" style="font-style:normal;font-weight:200;text-transform:uppercase"><?php echo esc_html__( 'About US', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"className":"section-title"} -->
<h3 class="section-title"><?php echo esc_html__( 'Explore All Corners of The World With Us', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'travel-init' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.', 'travel-init' ); ?><br></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"theme-btn"} -->
<div class="wp-block-buttons theme-btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Read More', 'travel-init' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":84,"sizeSlug":"full","style":{"color":{}},"className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg" alt="" class="wp-image-84"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","bottom":"4vw"}}},"className":"service-section-one","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull service-section-one" style="padding-top:4vw;padding-bottom:4vw"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"textColor":"black","className":"section-subtitle"} -->
<h3 class="has-text-align-center section-subtitle has-black-color has-text-color" style="font-style:normal;font-weight:200"><?php echo esc_html__( 'Our Services', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"className":"section-title"} -->
<h2 class="has-text-align-center section-title" style="font-style:normal;font-weight:100"><?php echo esc_html__( 'What We do', 'travel-init' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":84,"width":390,"height":377,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape2.jpg" alt="" class="wp-image-84" width="390" height="377"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"className":"post-title"} -->
<h3 class="post-title" style="font-style:normal;font-weight:100"><?php echo esc_html__( 'Easy', 'travel-init' ); ?> &amp; <?php echo esc_html__( 'Free Transport', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'travel-init' ); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"className":"post-title"} -->
<h3 class="post-title" style="font-style:normal;font-weight:100"><?php echo esc_html__( 'Easy', 'travel-init' ); ?> &amp; <?php echo esc_html__( 'Free Transport', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. ', 'travel-init' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"className":"post-title"} -->
<h3 class="post-title" style="font-style:normal;font-weight:100"><?php echo esc_html__( 'Easy', 'travel-init' ); ?> &amp; <?php echo esc_html__( 'Free Transport', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'travel-init' ); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}}} -->
<h3 style="font-style:normal;font-weight:100"><?php echo esc_html__( 'Easy', 'travel-init' ); ?> &amp; <?php echo esc_html__( 'Free Transport', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"post-title"} -->
<p class="post-title"><?php echo esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'travel-init' ); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","bottom":"4vw"}}},"className":"destination-section-one","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull destination-section-one" style="padding-top:4vw;padding-bottom:4vw"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"fontSize":"medium"} -->
<h3 class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:200"><?php echo esc_html__( 'Travel Around The World', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"32px"}}} -->
<h2 class="has-text-align-center" style="font-size:32px;font-style:normal;font-weight:100"><?php echo esc_html__( 'Popular Destination', 'travel-init' ); ?> </h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg","id":84,"dimRatio":50,"contentPosition":"bottom center","isDark":false} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-84" alt="" src="<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"24px"}},"textColor":"white","className":"post-title"} -->
<p class="has-text-align-center post-title has-white-color has-text-color" style="font-size:24px"><?php echo esc_html__( 'Italy', 'travel-init' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg","id":84,"dimRatio":50,"contentPosition":"bottom center","isDark":false} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-84" alt="" src="<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"24px"}},"textColor":"white","className":"post-title"} -->
<p class="has-text-align-center post-title has-white-color has-text-color" style="font-size:24px"><?php echo esc_html__( 'Italy', 'travel-init' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg","id":84,"dimRatio":50,"contentPosition":"bottom center","isDark":false} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-84" alt="" src="<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"23.85px"}},"textColor":"white","className":"post-title"} -->
<p class="has-text-align-center post-title has-white-color has-text-color" style="font-size:23.85px"><?php echo esc_html__( 'Italy', 'travel-init' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3.8vw","bottom":"4vw"}}},"className":"featured-trip-section-one","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull featured-trip-section-one" style="padding-top:3.8vw;padding-bottom:4vw"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"className":"section-subtitle","fontSize":"medium"} -->
<h3 class="has-text-align-center section-subtitle has-medium-font-size" style="font-style:normal;font-weight:200"><?php echo esc_html__( 'Travel Around The World', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"32px"}},"className":"section-title"} -->
<h2 class="has-text-align-center section-title" style="font-size:32px;font-style:normal;font-weight:100"><?php echo esc_html__( 'Popular Trip', 'travel-init' ); ?><br></h2>
<!-- /wp:heading -->

<!-- wp:wptravel/trips-list /--></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg","id":84,"hasParallax":true,"dimRatio":30,"contentPosition":"top center","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light has-parallax has-custom-content-position is-position-top-center"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><div role="img" class="wp-block-cover__image-background wp-image-84 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"textColor":"white","className":"section-subtitle"} -->
<h3 class="has-text-align-center section-subtitle has-white-color has-text-color" style="font-style:normal;font-weight:200"><?php echo esc_html__( 'Travel Story', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"textColor":"white","className":"section-title"} -->
<h2 class="has-text-align-center section-title has-white-color has-text-color" style="font-style:normal;font-weight:100"><?php echo esc_html__( 'Travel Video', 'travel-init' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"background"} -->
<p class="has-text-align-center has-background-color has-text-color"><?php echo esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'travel-init' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:embed {"url":"https://www.youtube.com/watch?v=zyfK9iMhal4","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
https://www.youtube.com/watch?v=zyfK9iMhal4
</div></figure>
<!-- /wp:embed --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","bottom":"4vw"}}},"className":"testimonial-section-one","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull testimonial-section-one" style="padding-top:4vw;padding-bottom:4vw"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"className":"section-subtitle"} -->
<h3 class="has-text-align-center section-subtitle" style="font-style:normal;font-weight:200"><?php echo esc_html__( 'Testimonials', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","className":"section-title"} -->
<h2 class="has-text-align-center section-title"><?php echo esc_html__( 'What People Tell About Us', 'travel-init' ); ?> </h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:image {"align":"center","id":14,"width":102,"height":102,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"65px"}},"className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg" alt="" class="wp-image-14" style="border-radius:65px" width="102" height="102"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"200"}}} -->
<h3 class="has-text-align-center" style="font-size:18px;font-style:normal;font-weight:200"><?php echo esc_html__( 'Jhon Denvar', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px"><em>"<?php echo esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'travel-init' ); ?>"</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:image {"align":"center","id":14,"width":102,"height":102,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"65px"}},"className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg" alt="" class="wp-image-14" style="border-radius:65px" width="102" height="102"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"200"}}} -->
<h3 class="has-text-align-center" style="font-size:18px;font-style:normal;font-weight:200"><?php echo esc_html__( 'Jhon Denvar', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px"><em>"<?php echo esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'travel-init' ); ?>"</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:image {"align":"center","id":14,"width":102,"height":102,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"65px"}},"className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() );?> /assets/images/landscape.jpg" alt="" class="wp-image-14" style="border-radius:65px" width="102" height="102"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"200"}}} -->
<h3 class="has-text-align-center" style="font-size:18px;font-style:normal;font-weight:200"><?php echo esc_html__( 'Jhon Denvar', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px"><em>"<?php echo esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'travel-init' ); ?>"</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"dimRatio":0,"customOverlayColor":"#d8d8d8","minHeight":577,"minHeightUnit":"px","isDark":false,"align":"full","className":"contact-section-one","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull is-light contact-section-one" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:577px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d8d8d8"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"className":"section-subtitle"} -->
<h3 class="section-subtitle" style="font-style:normal;font-weight:200"><?php echo esc_html__( 'Contact Us', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"textColor":"black","className":"section-title"} -->
<h2 class="has-text-align-left section-title has-black-color has-text-color" style="font-style:normal;font-weight:100"><?php echo esc_html__( 'Travel to the most beautiful', 'travel-init' ); ?> <br><?php echo esc_html__( 'places in the world', 'travel-init' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'travel-init' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Contact Us', 'travel-init' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained","contentSize":"380px","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:wptravel/trip-enquiry /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","bottom":"4vw"}}},"className":"latest-post-section-one","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull latest-post-section-one" style="padding-top:4vw;padding-bottom:4vw"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"className":"section-subtitle"} -->
<h3 class="has-text-align-center section-subtitle" style="font-style:normal;font-weight:200"><?php echo esc_html__( 'Latest Blog', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"className":"section-title"} -->
<h2 class="has-text-align-center section-title" style="font-style:normal;font-weight:100"><?php echo esc_html__( 'Travel Blogs', 'travel-init' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"height":"250px"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"typography":{"fontSize":"12px"}}} /-->

<!-- wp:post-title {"style":{"typography":{"fontSize":"24px"}},"className":"post-title"} /-->

<!-- wp:post-excerpt {"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->