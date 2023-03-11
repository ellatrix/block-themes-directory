<?php
return array(
			'title'         => __( 'Footer (light)', 'sampler' ),
			'categories'    => array( 'sampler-footers' ),
			'blockTypes'    => array( 'core/template-part/footer' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4em","bottom":"4em"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"backgroundColor":"very-light-gray","textColor":"very-dark-gray","className":"site-footer","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull site-footer has-very-dark-gray-color has-very-light-gray-background-color has-text-color has-background has-link-color" style="padding-top:4em;padding-bottom:4em"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:site-logo {"width":200} /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":5,"textColor":"black"} -->
<h5 class="has-black-color has-text-color">Info</h5>
<!-- /wp:heading -->

<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"}} -->

	<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->

	<!-- wp:navigation-link {"label":"Gallery","url":"#","kind":"custom","isTopLevelLink":true} /-->

	<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

	<!-- wp:navigation-link {"label":"News","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:social-links {"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3em"},"padding":{"top":"1px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"vivid-cyan-blue-to-vivid-purple-alt"} -->
<div class="wp-block-group alignwide has-vivid-cyan-blue-to-vivid-purple-alt-gradient-background has-background" style="margin-top:3em;padding-top:1px;padding-right:0px;padding-bottom:0px;padding-left:0px"></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"2em"}}},"layout":{"type":"flex","justifyContent":"space-between"},"fontSize":"normal"} -->
<div class="wp-block-group alignwide has-normal-font-size" style="margin-top:2em"><!-- wp:paragraph {"align":"center","className":"is-style-links-underline-on-hover"} -->
<p class="has-text-align-center is-style-links-underline-on-hover">Unit 42, The Avenue, Anytown, Some State</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"sampler/site-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
',
);
