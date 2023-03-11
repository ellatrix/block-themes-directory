<?php
/**
 * General: gallery 5 columns
 */
return array(
	'title'      => __( 'Gallery 5 columns', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"20px"}}},"className":"ona-container","layout":{"inherit":false}} -->
			<div class="wp-block-group ona-container" style="padding-top:100px;padding-bottom:20px"><!-- wp:heading {"textAlign":"center","className":"is-style-ona-alt-font"} -->
			<h2 class="has-text-align-center is-style-ona-alt-font" id="my-art">' . __( 'My Art', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
			<h3 class="has-text-align-center has-medium-font-size" id="check-my-latest-photos">' . __( 'Check my latest photos', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:gallery {"ids":[194,195,196,197,198],"columns":5,"linkTo":"none"} -->
			<figure class="wp-block-gallery columns-5 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_gallery_1.jpg' ) ) . '" alt="ona_minimal_gallery_1" data-id="194" data-full-url="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_gallery_1.jpg' ) ) . '" data-link="#" class="wp-image-194"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_gallery_2.jpg' ) ) . '" alt="ona_minimal_gallery_2" data-id="195" data-full-url="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_gallery_2.jpg' ) ) . '" data-link="#" class="wp-image-195"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_gallery_3.jpg' ) ) . '" alt="ona_minimal_gallery_3" data-id="196" data-full-url="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_gallery_3.jpg' ) ) . '" data-link="#" class="wp-image-196"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_gallery_4.jpg' ) ) . '" alt="ona_minimal_gallery_4" data-id="197" data-full-url="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_gallery_4.jpg' ) ) . '" data-link="#" class="wp-image-197"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_gallery_5.jpg' ) ) . '" alt="ona_minimal_gallery_5" data-id="198" data-full-url="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_gallery_5.jpg' ) ) . '" data-link="#" class="wp-image-198"/></figure></li></ul></figure>
			<!-- /wp:gallery --></div>
			<!-- /wp:group -->',
);



