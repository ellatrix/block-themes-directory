<?php
/**
 * Title: Featured Services Section
 * Slug: marenda/featured-services-section
 * Categories: featured
 */
?>

<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"0","left":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<section id="featured-services-section" class="wp-block-group has-primary-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","right":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%"><!-- wp:image {"align":"center","id":2585,"width":504,"height":759,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topRight":"50px","bottomRight":"50px"}}}} -->
			<figure class="wp-block-image aligncenter size-large is-resized has-custom-border"><img src="<?php echo esc_url(MARENDA_URI.'/assets/img/featured-1.jpg'); ?>" alt="" class="wp-image-2585" style="border-top-right-radius:50px;border-bottom-right-radius:50px" width="504" height="759"/></figure>
			<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group"><!-- wp:outermost/icon-block {"iconName":"wordpress-flipHorizontal","width":150} -->
				<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:150px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6v12c0 1.1.9 2 2 2h3v-1.5H6c-.3 0-.5-.2-.5-.5V6c0-.3.2-.5.5-.5h3V4H6c-1.1 0-2 .9-2 2zm7.2 16h1.5V2h-1.5v20zM15 5.5h1.5V4H15v1.5zm3.5.5H20c0-1.1-.9-2-2-2v1.5c.3 0 .5.2.5.5zm0 10.5H20v-2h-1.5v2zm0-3.5H20v-2h-1.5v2zm-.5 5.5V20c1.1 0 2-.9 2-2h-1.5c0 .3-.2.5-.5.5zM15 20h1.5v-1.5H15V20zm3.5-10.5H20v-2h-1.5v2z"></path></svg></div></div>
				<!-- /wp:outermost/icon-block -->

				<!-- wp:heading {"textAlign":"center","level":4} -->
				<h4 class="has-text-align-center">Gutenberg Blocks</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}},"textColor":"light"} -->
				<p class="has-text-align-center has-light-color has-text-color" style="font-size:14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar massa sed turpis dapibus sollicitudin. </p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group"><!-- wp:outermost/icon-block {"iconName":"wordpress-dropbox","width":150} -->
				<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:150px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M12,6.134L6.069,9.797L2,6.54l5.883-3.843L12,6.134z M2,13.054l5.883,3.843L12,13.459L6.069,9.797L2,13.054z M12,13.459 l4.116,3.439L22,13.054l-4.069-3.257L12,13.459z M22,6.54l-5.884-3.843L12,6.134l5.931,3.663L22,6.54z M12.011,14.2l-4.129,3.426 l-1.767-1.153v1.291l5.896,3.539l5.897-3.539v-1.291l-1.769,1.153L12.011,14.2z"></path></svg></div></div>
				<!-- /wp:outermost/icon-block -->

				<!-- wp:heading {"textAlign":"center","level":4} -->
				<h4 class="has-text-align-center">Easy Customization</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}},"textColor":"light"} -->
				<p class="has-text-align-center has-light-color has-text-color" style="font-size:14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar massa sed turpis dapibus sollicitudin. </p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></section>
<!-- /wp:group -->