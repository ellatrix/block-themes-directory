<?php
/**
 * Newsletter
 */
return array(
	'title'      => esc_html__( 'Newsletter', 'catch-fse' ),
	'categories' => array( 'catch-fse', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:cover {"url":"' . get_parent_theme_file_uri( '/assets/images/subscribe-bg.jpg' ) . '","dimRatio":20,"align":"full","className":"wp-block-section"} -->
<div class="wp-block-cover alignfull wp-block-section"><span aria-hidden="true" class="has-background-dim-20 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . get_parent_theme_file_uri( '/assets/images/subscribe-bg.jpg' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
    <!-- wp:group -->
<div class="wp-block-group">

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase"}},"className":"has-text-link-color has-text-color"} -->
<h6 class="has-text-link-color has-text-align-center has-text-color" style="text-transform:uppercase">' . esc_html__( 'Subscribe Now', 'catch-fse' ) . '</h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<h2 class="has-text-align-center" style="font-style:normal;font-weight:400">' . esc_html__( 'Stay up to date with our newsletter', 'catch-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:tnp/minimal {"padding":0,"className":"site-newsletter"} -->
	<div style="padding:0" class="wp-block-tnp-minimal site-newsletter"><p></p><div>[newsletter_form type="minimal"]</div></div>
<!-- /wp:tnp/minimal -->

</div>
<!-- /wp:group -->
</div><!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);
