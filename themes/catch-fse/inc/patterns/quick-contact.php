<?php
/**
 * Quick Contact
 */
return array(
	'title'      => esc_html__( 'Quick Contact', 'catch-fse' ),
	'categories' => array( 'catch-fse', 'featured', 'pages' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section"><!-- wp:media-text {"mediaId":1841,"mediaLink":"' . get_parent_theme_file_uri( '/assets/images/quick-contact.png' ) . '","mediaType":"image"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . get_parent_theme_file_uri( '/assets/images/quick-contact.png' ) . '" alt="" class="wp-image-1841 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"className":"has-text-link-color has-text-color"} -->
<h6 class="has-text-link-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'Lets Talk', 'catch-fse' ) . '</h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
    <h2 style="font-style:normal;font-weight:400">' . esc_html__( 'Quick Contact', 'catch-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'An online quick contact form is a quick and easy way to collect information from website visitors.', 'catch-fse' ) . '</p>
<!-- /wp:paragraph -->
<!-- wp:contact-form-7/contact-form-selector {"id":20473,"title":"Quick Contact"} -->
<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="20473" title="Quick Contact"]</div>
<!-- /wp:contact-form-7/contact-form-selector -->
</div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->',
);
