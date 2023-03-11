<?php
 /**
  * Title: 404 Header With Background
  * Slug: VisionArt/404-header-with-background
  * Categories: VisionArt, header
  */
?>
<!-- wp:group {"align":"full","className":"no-margin-top banner","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull no-margin-top banner">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:cover {"gradient":"diagonal-top-to-bottom","contentPosition":"center center","isDark":false} -->
		<div class="wp-block-cover is-light">
			<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-diagonal-top-to-bottom-gradient-background"></span>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"className":"alignwide"} -->
					<div class="wp-block-group alignwide">
						<!-- wp:heading {"level":1,"textColor":"foreground","className":"has-text-color-foreground"} -->
						<h1 class="has-text-color-foreground has-foreground-color has-text-color"><?php esc_html_e( '404 Nothing Found', 'visionart' ); ?></h1>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e( "Oops! That page can't be found", 'visionart' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->