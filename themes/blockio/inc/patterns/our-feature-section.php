<?php
/**
 * Our Feature Section
 */
return array(
	'title'      => __( 'Our Feature Section', 'blockio' ),
	'categories' => ['blockio-patterns'],
	'content'    => '<!-- wp:group {"layout":{"inherit":true},"style":{"spacing":{"margin":{"top":"100px","right":"0","bottom":"100px","left":"0"}}}} -->
<div class="wp-block-group" style="margin-top:100px;margin-right:0;margin-bottom:100px;margin-left:0">

	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"80px","right":"0","bottom":"80px","left":"0"}}}} -->
	<h2 class="has-text-align-center" style="margin-top:80px;margin-right:0;margin-bottom:80px;margin-left:0">- ' . esc_html__( 'Our Feature Specials', 'blockio' ) . ' -</h2>
	<!-- /wp:heading -->

	<!-- wp:columns -->
	<div class="wp-block-columns">


            <!-- wp:column {"className":"our-ft-shadow"} -->
            <div class="wp-block-column our-ft-shadow">
            
            <!-- wp:image {"align":"center","width":84,"height":84,"sizeSlug":"full","linkDestination":"custom","className":"blockio-rounded-style is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized blockio-rounded-style is-style-default"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/icons.svg" alt="' . esc_attr__( 'Web App', 'blockio' ) . '" width="84" height="84"/></figure>
<!-- /wp:image -->
            
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"normal"} -->
                <h3 class="has-text-align-center has-normal-font-size" style="font-style:normal;font-weight:700">' . esc_html__( 'WEB APP', 'blockio' ) . '</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">' . esc_html__( 'Pellentesque sit amet justo ac nibh vulputate luctus a eu eros. Ut nisl ante, sagittis et porta sed, varius eu elit. Etiam ornare elit vitae porta molestie. Etiam ut bibendum nulla.', 'blockio' ) . '</p>
                <!-- /wp:paragraph --></div>
            <!-- /wp:column -->


            <!-- wp:column {"className":"our-ft-shadow"} -->
            <div class="wp-block-column our-ft-shadow">
            <!-- wp:image {"align":"center","width":84,"height":84,"sizeSlug":"full","linkDestination":"custom","className":"blockio-rounded-style is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized blockio-rounded-style is-style-default"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/icons.svg" alt="' . esc_attr__( 'Innovation', 'blockio' ) . '" width="84" height="84"/></figure>
<!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"normal"} -->
                <h3 class="has-text-align-center has-normal-font-size" style="font-style:normal;font-weight:700">' . esc_html__( 'INNOVATION', 'blockio' ) . '</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">' . esc_html__( 'Pellentesque sit amet justo ac nibh vulputate luctus a eu eros. Ut nisl ante, sagittis et porta sed, varius eu elit. Etiam ornare elit vitae porta molestie. Etiam ut bibendum nulla.', 'blockio' ) . '</p>
                <!-- /wp:paragraph --></div>
            <!-- /wp:column -->


            <!-- wp:column {"className":"our-ft-shadow"} -->
            <div class="wp-block-column our-ft-shadow"><!-- wp:image {"align":"center","width":84,"height":84,"sizeSlug":"full","linkDestination":"custom","className":"blockio-rounded-style is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized blockio-rounded-style is-style-default"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/icons.svg" alt="' . esc_attr__( 'Web Design', 'blockio' ) . '" width="84" height="84"/></figure>
<!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"normal"} -->
                <h3 class="has-text-align-center has-normal-font-size" style="font-style:normal;font-weight:700">' . esc_html__( 'WEB DESIGN', 'blockio' ) . '</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">' . esc_html__( 'Pellentesque sit amet justo ac nibh vulputate luctus a eu eros. Ut nisl ante, sagittis et porta sed, varius eu elit. Etiam ornare elit vitae porta molestie. Etiam ut bibendum nulla.', 'blockio' ) . '</p>
                <!-- /wp:paragraph --></div>
            <!-- /wp:column -->



	</div>
	<!-- /wp:columns -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Reading more...', 'blockio' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->',
);