<?php
return array(
			'title'         => __( 'Page Not found 404 ', 'approach' ),
			'categories'    => array( 'approach_layout' ),
			'content'       => '
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","right":"30px","left":"30px"}}},"backgroundColor":"sidebar"} -->
<main class="wp-block-group alignfull has-sidebar-background-color has-background" style="padding-top:80px;padding-right:30px;padding-bottom:80px;padding-left:30px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"170px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"black"} -->
<h2 class="has-text-align-center has-black-color has-text-color" style="font-size:170px;font-style:normal;font-weight:700;line-height:1">' . esc_html__( '404', 'approach' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"fontSize":"medium"} -->
<h6 class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1">' . esc_html__( 'Sorry! the page you requested was not found.', 'approach' ) . '</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
<p class="has-text-align-center" style="font-size:16px">' . esc_html__( 'Check out our help center or head back home', 'approach' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"35px"}}}} -->
<div class="wp-block-buttons" style="margin-top:35px"><!-- wp:button {"backgroundColor":"pink","textColor":"white","style":{"typography":{"fontSize":"16px"},"border":{"radius":"50px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"45px","right":"45px"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:16px"><a href="' . esc_url(  home_url('/') ) . '" class="wp-block-button__link has-white-color has-pink-background-color has-text-color has-background" style="border-radius:50px;padding-top:13px;padding-right:45px;padding-bottom:13px;padding-left:45px">' . esc_html__( 'Back to Home', 'approach' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->
',
);
