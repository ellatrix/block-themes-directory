<?php
return array(
			'title'         => __( 'Heading with vertical separator (dark)', 'sampler' ),
			'categories'    => array( 'sampler-headlines', 'featured' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"black","layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide has-black-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"5px","bottom":"40px","left":"5px"}}},"backgroundColor":"vivid-purple"} -->
<div class="wp-block-group has-vivid-purple-background-color has-background" style="padding-top:40px;padding-right:5px;padding-bottom:40px;padding-left:5px"></div>
<!-- /wp:group -->

<!-- wp:heading {"textColor":"white"} -->
<h2 class="has-white-color has-text-color">This is a Heading</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
',
);
