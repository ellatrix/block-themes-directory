<?php
return array(
			'title'         => __( 'Heading with left separator', 'sampler' ),
			'categories'    => array( 'sampler-headlines', 'featured' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"color":"vivid-purple"} -->
<hr class="wp-block-separator has-text-color has-background has-vivid-purple-background-color has-vivid-purple-color"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":5} -->
<h5>THIS IS A HEADING</h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->
',
);
