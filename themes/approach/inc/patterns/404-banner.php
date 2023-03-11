<?php
return array(
			'title'         => __( '404 Page Banner', 'approach' ),
			'categories'    => array( 'approach_layout' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:cover {"overlayColor":"pink","minHeight":50,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"50px","bottom":"20px"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:50px;padding-bottom:20px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-pink-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"42px"}},"textColor":"sidebar"} -->
<h2 class="has-text-align-center has-sidebar-color has-text-color" style="font-size:42px">' . esc_html__( 'Page Not Found', 'approach' ) . '</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->
',
);
