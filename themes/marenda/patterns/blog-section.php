<?php
/**
 * Title: Blog Section
 * Slug: marenda/blog-section
 * Categories: featured
 */
?>

<!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0"}},"color":{"gradient":"linear-gradient(135deg,rgb(9,9,9) 0%,rgb(51,57,65) 100%)"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignwide has-background" id="blog-section" style="background:linear-gradient(135deg,rgb(9,9,9) 0%,rgb(51,57,65) 100%);margin-top:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"10px","bottom":"0","left":"10px"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
	<div class="wp-block-group alignfull" style="padding-top:0;padding-right:10px;padding-bottom:0;padding-left:10px"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"background"} -->
		<h1 class="has-text-align-center has-background-color has-text-color">Blog</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":16,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
			<div class="wp-block-query"><!-- wp:post-template -->
				<!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

				<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

				<!-- wp:post-date {"textColor":"background"} /-->
				<!-- /wp:post-template --></div>
			<!-- /wp:query --></div>
		<!-- /wp:group --></div>
	<!-- /wp:group --></section>
<!-- /wp:group -->