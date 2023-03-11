<?php
/**
 * Header with background image block pattern
 */
return array(
	'title'      => __( 'Header with Background Image', 'scandinavia' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/home-header-background.jpg","id":1852,"dimRatio":0,"focalPoint":{"x":"0.51","y":"1.00"},"isDark":false} -->
                    <div id="header-with-background-image-block" class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1852" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/home-header-background.jpg" style="object-position:51% 100%" data-object-fit="cover" data-object-position="51% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":false}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"1em"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group" style="padding-top:1em"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:site-logo /-->
                    
                    <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"900","textTransform":"uppercase"}},"fontSize":"large"} /-->
                    
                    <!-- wp:site-tagline /--></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /--></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:spacer {"height":"500px"} -->
                    <div style="height:500px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div></div>
                    <!-- /wp:cover -->',
);
