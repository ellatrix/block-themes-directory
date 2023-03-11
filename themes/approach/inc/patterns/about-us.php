<?php
return array(
			'title'         => __( 'About us', 'approach' ),
			'categories'    => array( 'approach_layout' ),
			'content'       => '
<!-- wp:group {"tagName":"main","backgroundColor":"sidebar","layout":{"contentSize":"1170px"}} -->
<main class="wp-block-group has-sidebar-background-color has-background"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"15px","left":"15px","bottom":"15px","top":"15px"}},"color":{"background":"#f8f8f8"}},"layout":{"contentSize":"1170px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f8f8f8;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"id":2270,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default" style="border-radius:0px"><img src="' . esc_url( get_theme_file_uri( 'assets/images/about.png' ) ) . ' " alt="" class="wp-image-2270"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"padding":{"left":"30px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-left:30px;flex-basis:60%"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"30px"}}}} -->
<div class="wp-block-group" style="padding-bottom:30px"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#fe5566"}}} -->
<h6 class="has-text-color" style="color:#fe5566;font-size:16px;font-style:normal;font-weight:600"> ' . esc_html__( 'Read About Me', 'approach' ) . '</h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize","fontSize":"50px"}}} -->
<h2 style="font-size:50px;font-style:normal;font-weight:700;text-transform:capitalize">' . esc_html__( 'My About', 'approach' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#656565"}}} -->
<p class="has-text-color" style="color:#656565;font-size:16px">' . esc_html__( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you to use a passage of Lorem Ipsum.', 'approach' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"15px","left":"0px"}}}} -->
<div class="wp-block-columns alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:15px;padding-left:0px"><!-- wp:column {"width":"290px"} -->
<div class="wp-block-column" style="flex-basis:290px"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"color":{"text":"#333333"}},"fontSize":"large"} -->
<h4 class="has-text-color has-large-font-size" style="color:#333333;font-style:normal;font-weight:600">' . esc_html__( 'Educational Skill', 'approach' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#656565"}}} -->
<p class="has-text-color" style="color:#656565;font-size:16px">' . esc_html__( 'Lorem Ipsum is simply dummy text printing typesetting industry.', 'approach' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"290px"} -->
<div class="wp-block-column" style="flex-basis:290px"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#333333"}},"fontSize":"large"} -->
<h4 class="has-text-color has-large-font-size" style="color:#333333;font-style:normal;font-weight:600;text-transform:capitalize">' . esc_html__( 'My Strategy', 'approach' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#656565"}}} -->
<p class="has-text-color" style="color:#656565;font-size:16px">' . esc_html__( 'Lorem Ipsum is simply dummy text printing typesetting industry', 'approach' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"contentSize":""}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"290px"} -->
<div class="wp-block-column" style="flex-basis:290px"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#333333"}},"fontSize":"large"} -->
<h4 class="has-text-color has-large-font-size" style="color:#333333;font-style:normal;font-weight:600;text-transform:capitalize">' . esc_html__( 'Development Skill', 'approach' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#656565"}}} -->
<p class="has-text-color" style="color:#656565;font-size:16px">' . esc_html__( 'Lorem Ipsum is simply dummy text printing typesetting industry', 'approach' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"290px"} -->
<div class="wp-block-column" style="flex-basis:290px"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#333333"}},"fontSize":"large"} -->
<h4 class="has-text-color has-large-font-size" style="color:#333333;font-style:normal;font-weight:600;text-transform:capitalize">' . esc_html__( 'My Quality', 'approach' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#656565"}}} -->
<p class="has-text-color" style="color:#656565;font-size:16px">' . esc_html__( 'Lorem Ipsum is simply dummy text printing typesetting industry', 'approach' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
',
);
