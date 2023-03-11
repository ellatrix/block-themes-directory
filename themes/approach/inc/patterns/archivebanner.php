<?php
return array(
			'title'         => __( 'Archive Page Banner', 'approach' ),
			'categories'    => array( 'approach_layout' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:cover {"overlayColor":"pink","minHeight":50,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"50px","bottom":"20px"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:50px;padding-bottom:20px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-pink-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontSize":"42px"}},"textColor":"sidebar"} /--></div></div>
<!-- /wp:cover -->
',
);
