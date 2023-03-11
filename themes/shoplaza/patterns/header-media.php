<?php
 /**
  * Title: Header Media
  * Slug: shoplaza/header-media
  * Categories: shoplaza, header
  */
?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/header-media-bg.jpg' ); ?>","dimRatio":20,"isDark":false,"align":"full","className":"wp-block-custom-header-media wp-block-section wp-block-no-padding"} -->
<div class="wp-block-cover alignfull is-light wp-block-custom-header-media wp-block-section wp-block-no-padding">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/header-media-bg.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:media-text {"mediaPosition":"right","mediaType":"image"} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
				<div class="wp-block-media-text__content">
					<!-- wp:heading {"textColor":"background"} -->
					<h2 class="has-background-color has-text-color"><?php esc_html_e ( 'fall-winter Clearance Sales', 'shoplaza' ) ?></h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"background"} -->
					<p class="has-background-color has-text-color"><?php esc_html_e ( 'All Sale Items are Final Sale / Free Shipping on All Orders', 'shoplaza' ) ?>  </p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
					<div class="wp-block-buttons" style="margin-top:14px">
						<!-- wp:button -->
						<div class="wp-block-button">
							<a class="wp-block-button__link wp-element-button"><?php esc_html_e ( 'Shop Now', 'shoplaza' ) ?></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<figure class="wp-block-media-text__media">
					<img src="" alt=""/>
				</figure>
			</div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->