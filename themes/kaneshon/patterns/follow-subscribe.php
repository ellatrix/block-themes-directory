<?php
/**
 * Title: Follow me / Subscribe
 * Slug: kaneshon/follow-subscribe
 * Categories: kaneshon
 * Block Types: core/columns, core/social-links, core/buttons
 */
?>

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:cover {"customOverlayColor":"#e0dbd3","minHeight":300,"isDark":false} -->
		<div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#e0dbd3"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"0.3em"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"text-light"} -->
			<p class="has-text-align-center has-text-light-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:14px;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'Stay connected', 'kaneshon' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"bottom":"25px"}}}} -->
			<h3 class="has-text-align-center" style="margin-bottom:25px;font-size:24px"><?php esc_html_e( 'Follow me', 'kaneshon' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:social-links {"iconColor":"heading","iconColorValue":"#242424","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

				<!-- wp:social-link {"url":"#","service":"youtube"} /-->

				<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
			<!-- /wp:social-links --></div></div>
		<!-- /wp:cover --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:cover {"customOverlayColor":"#CFCAC1","minHeight":300,"isDark":false} -->
		<div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#CFCAC1"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"0.3em"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"text-light"} -->
			<p class="has-text-align-center has-text-light-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:14px;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'Subscribe', 'kaneshon' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"bottom":"25px"}}}} -->
			<h3 class="has-text-align-center" style="margin-bottom:25px;font-size:24px"><?php esc_html_e( 'Goodies straight into your inbox', 'kaneshon' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'kaneshon' ); ?></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
		<!-- /wp:cover --></div>
	<!-- /wp:column --></div>
<!-- /wp:columns -->
