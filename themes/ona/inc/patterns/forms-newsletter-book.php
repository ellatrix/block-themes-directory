<?php
/**
 * Forms: Newsletter book
 */
$form = ona_get_mailchimp_forms();

return array(
	'title'      => __( 'Newsletter book', 'ona' ),
	'categories' => array( 'ona-forms' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"ona-container","layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group ona-container" style="padding-top:100px;padding-bottom:100px">
			
			
			<!-- wp:columns {"verticalAlignment":"center"} -->
			<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"width":"6%","className":"hide-md-down"} -->
			<div class="wp-block-column hide-md-down" style="flex-basis:6%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:image {"align":"center","id":407,"sizeSlug":"full","linkDestination":"none"} -->
			<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/img/creative/ona_creative_book_mockup.jpg' ) ) . '" alt="" class="wp-image-407"/></figure></div>
			<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"className":"ona-text-letter-spacing","fontSize":"tiny"} -->
			<p class="ona-text-letter-spacing has-tiny-font-size">' . __( 'LEARN MY BEST RECIPES FOR FREE', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"typography":{"fontSize":"1.75rem"}}} -->
			<h2 id="grab-my-free-guide-on-how-to-cook-fresh-and-healthy-meals" style="font-size:1.75rem">' . __( 'Grab my free guide on how to cook fresh and healthy meals', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . __( 'I share my best vegan recipes. Sed do eiusmod tempor incididu nt ut labore et dolore minim veniam, quism.', 'ona' ) . '</p>
			<!-- /wp:paragraph -->' . $form . '</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"6%","className":"hide-md-down"} -->
			<div class="wp-block-column hide-md-down" style="flex-basis:6%"></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			
			</div><!-- /wp:group -->',
);



