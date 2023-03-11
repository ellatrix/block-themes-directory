<?php
/**
 * Title: Home Hero
 * Slug: kaneshon/home-hero
 * Categories: kaneshon
 * Block Types: core/cover, core/buttons
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>hero.jpg","id":503,"dimRatio":50,"customOverlayColor":"var(--wp--preset--color--overlay)","focalPoint":{"x":0.52,"y":1},"minHeight":650,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="padding-top:50px;padding-bottom:50px;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:var(--wp--preset--color--overlay)"></span><img class="wp-block-cover__image-background  wp-image-503" alt="" src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>hero.jpg" style="object-position:52% 100%" data-object-fit="cover" data-object-position="52% 100%" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"24px"}},"textColor":"white"} -->
		<h1 class="has-text-align-center has-white-color has-text-color" style="font-size:24px"><?php
		echo wp_kses_post( __( 'Alicia is a blogger, writer, photographer, and mother <br> based in Barcelona, Spain.', 'kaneshon' ) );
		?></h1>
		<!-- /wp:heading -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textColor":"white","align":"center","style":{"border":{"radius":"0px"}},"className":"is-style-outline","fontSize":"medium"} -->
			<div class="wp-block-button aligncenter has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" style="border-radius:0px"><?php esc_html_e( 'Learn more', 'kaneshon' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
</div>
<!-- /wp:cover -->
