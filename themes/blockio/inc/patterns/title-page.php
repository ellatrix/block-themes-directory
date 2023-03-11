<?php
/**
 * Title Page
 */
return array(
	'title'      => __( 'Title Page', 'blockio' ),
	'categories' => ['blockio-patterns'] ,
	'content'    => '<!-- wp:group {"className":"page-container-head"} -->
        <div class="wp-block-group page-container-head">
                <!-- wp:post-featured-image {"width":"100%","height":"480px"} /-->
                <!-- wp:post-title {"level":1,"fontSize":"bigger"} /-->
        </div>
        <!-- /wp:group -->',
);
