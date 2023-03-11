<?php
return array(
			'title'         => __( 'Hero with Gradient and Media/Text', 'alara' ),
			'categories'    => array( 'alara-about' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"align":"full","gradient":"bronze","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-bronze-gradient-background has-background">
    <!-- wp:group {"layout":{"inherit":false}} -->
    <div class="wp-block-group">
        <!-- wp:media-text {"mediaPosition":"right","mediaLink":"' . alara_pattern_content( 'image-man-4-transparent' ) . '","mediaType":"image","imageFill":false} -->
        <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
            <figure class="wp-block-media-text__media"><img src="' . alara_pattern_content( 'image-man-4-transparent' ) . '" alt=""/></figure>
            <div class="wp-block-media-text__content">
                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">AWESOME SERVICE</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size">INTEGRATION MADE EASY</p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":32} -->
                <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"quaternary"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-quaternary-background-color has-background">Discover</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
        </div>
        <!-- /wp:media-text -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
