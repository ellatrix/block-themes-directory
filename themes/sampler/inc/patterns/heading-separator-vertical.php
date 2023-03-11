<?php
return array(
			'title'         => __( 'Heading with vertical separator', 'sampler' ),
			'categories'    => array( 'sampler-headlines', 'featured' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"5px","bottom":"40px","left":"5px"}}},"backgroundColor":"vivid-purple"} -->
<div class="wp-block-group has-vivid-purple-background-color has-background" style="padding-top:40px;padding-right:5px;padding-bottom:40px;padding-left:5px"></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2>This is a Heading</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
',
);
