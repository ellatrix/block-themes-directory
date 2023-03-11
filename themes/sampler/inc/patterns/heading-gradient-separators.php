<?php
return array(
			'title'         => __( 'Gradient heading with separators', 'sampler' ),
			'categories'    => array( 'sampler-headlines' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"color":"vivid-cyan-blue"} -->
<hr class="wp-block-separator has-text-color has-background has-vivid-cyan-blue-background-color has-vivid-cyan-blue-color"/>
<!-- /wp:separator -->

<!-- wp:heading {"className":"is-style-gradient-text-2"} -->
<h2 class="is-style-gradient-text-2">This is a Heading</h2>
<!-- /wp:heading -->

<!-- wp:separator {"color":"luminous-vivid-amber"} -->
<hr class="wp-block-separator has-text-color has-background has-luminous-vivid-amber-background-color has-luminous-vivid-amber-color"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
',
);
