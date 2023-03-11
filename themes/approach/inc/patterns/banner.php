<?php
return array(
			'title'         => __( 'Main banner', 'approach' ),
			'categories'    => array( 'approach_layout' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:cover {"url":"' . approach_pattern_content( 'slider-banner' ) . '","id":2332,"dimRatio":50,"overlayColor":"black","focalPoint":{"x":"0.50","y":"0.55"},"isDark":false,"style":{"spacing":{"padding":{"top":"250px","bottom":"250px"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:250px;padding-bottom:250px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2332" alt="" src="' . approach_pattern_content( 'slider-banner' ) . '" style="object-position:50% 55%" data-object-fit="cover" data-object-position="50% 55%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0px","fontStyle":"normal","fontWeight":"400"}},"textColor":"sidebar","fontSize":"small"} -->
<p class="has-text-align-center has-sidebar-color has-text-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase;letter-spacing:0px">' . esc_html__( 'Lorem Ipsum&nbsp;is simply', 'approach' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"80px","lineHeight":"1.6"}},"textColor":"sidebar"} -->
<h2 class="has-text-align-center has-sidebar-color has-text-color" style="font-size:80px;line-height:1.6"><strong>' . esc_html__( 'AMAZINGLY CLEAN', 'approach' ) . '</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"sidebar","fontSize":"medium"} -->
<p class="has-text-align-center has-sidebar-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:300">' . esc_html__( 'From top-notch security to luxurious finishes, opting for exclusive condo living is a great way to up your quality of life.From top-notch security to luxurious finishes, opting for exclusive condo living is a great way to up your quality of life.', 'approach' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"30px"}}}} -->
<div class="wp-block-column" style="padding-top:30px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"sidebar","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"40px","right":"40px"}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-sidebar-color has-text-color" style="padding-top:12px;padding-right:40px;padding-bottom:12px;padding-left:40px">' . esc_html__( 'Learn More', 'approach' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
',
);
