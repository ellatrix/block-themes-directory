<?php

/**
 * Title: Header Media
 * Slug: catch-bells/header-media
 * Categories: catch-bells, featured
 */
?>

<!-- wp:group {"align":"full","className":"header-media","layout":{"inherit":false}} -->
<div class="wp-block-group alignfull header-media">
	<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/header-media.jpg' ); ?>","id":9,"dimRatio":40,"isDark":false,"className":"alignfull"} -->
	<div class="wp-block-cover is-light alignfull">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span>
		<img class="wp-block-cover__image-background wp-image-9" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/header-media.jpg' ); ?>" data-object-fit="cover"/>
		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","className":"is-style-outline"} -->
			<p class="has-text-align-center wp-site-date"><?php esc_html_e ( '02 . 08 . 2022', 'catch-bells' ) ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
			<h2 class="has-text-align-center has-huge-font-size"><?php esc_html_e ( 'Torrie & Jackson', 'catch-bells' ) ?></h2>
			<!-- /wp:heading -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link"><?php esc_html_e ( 'Read More', 'catch-bells' ) ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
