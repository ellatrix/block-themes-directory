<?php
/**
 * Title: About Us Section
 * Slug: marenda/about-us-section
 * Categories: featured
 */
?>

<!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignwide has-primary-background-color has-background" id="about-us-section" style="margin-top:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button"><strong>ABOUT</strong></a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons -->

		<!-- wp:heading {"textAlign":"center","level":3} -->
		<h3 class="has-text-align-center">We create block themes for your business</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":2592,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url(MARENDA_URI.'/assets/img/about-us.jpg'); ?>" alt="" class="wp-image-2592"/></figure>
			<!-- /wp:image --></div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"textColor":"background","fontSize":"medium"} -->
		<p class="has-text-align-center has-background-color has-text-color has-medium-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar massa sed turpis dapibus sollicitudin. Nullam sodales volutpat ligula, eget malesuada nibh condimentum sed. Curabitur dignissim vehicula arcu. Praesent porta nunc eget sollicitudin volutpat. Integer massa est, mollis ut ornare consectetur, semper eget odio.</p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group --></section>
<!-- /wp:group -->