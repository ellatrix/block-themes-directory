<?php
/**
 * Kemet General Patter
 * Two Columns with Overlay Content and a Call to Action
 */
return array(
	'title'      => __( 'Two Columns with Overlay Content and a Call to Action', 'kemet' ),
    'categories' => array( 'kemet-patterns' ),
	'content'    => '<!-- wp:group -->
    <div class="wp-block-group"><!-- wp:media-text {"mediaPosition":"right","mediaType":"image","imageFill":false,"className":"is-style-kmt-is-overlay"} -->
        <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-style-kmt-is-overlay"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/man-with-pen.jpg" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":"30px"} -->
        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"backgroundColor":"tertiary","layout":{"contentSize":"500px","wideSize":"500px"}} -->
        <div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:60px;padding-bottom:60px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"2px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color" style="font-style:normal;font-weight:500;text-transform:uppercase;letter-spacing:2px">' . esc_html__( 'ABOUT US', 'kemet') . '</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"secondary"} -->
        <h2 class="has-text-align-left has-secondary-color has-text-color" style="font-style:normal;font-weight:700;line-height:1.2;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;text-transform:uppercase">' . esc_html__( 'IT Solutions for You Business', 'kemet') . '</h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"fontSize":"19px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}},"textColor":"background"} -->
        <p class="has-background-color has-text-color" style="font-size:19px;font-style:normal;font-weight:400;line-height:1.5">' . esc_html__( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'kemet') . '</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:spacer {"height":"20px"} -->
        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"13px","bottom":"13px","left":"30px","right":"30px"}},"typography":{"fontSize":"19px"}},"className":"is-style-fill"} -->
        <div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:19px"><a class="wp-block-button__link" style="padding-top:13px;padding-right:30px;padding-bottom:13px;padding-left:30px"><strong>' . esc_html__( 'More About Us', 'kemet') . '</strong></a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:group -->
        
        <!-- wp:spacer {"height":"30px"} -->
        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer --></div></div>
        <!-- /wp:media-text --></div>
        <!-- /wp:group -->',
);