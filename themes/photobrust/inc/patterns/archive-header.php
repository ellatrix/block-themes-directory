<?php
/**
 * Archive Header
 */
return array(
	'title'      => esc_html__( 'Archive Header', 'photobrust' ),
	'categories' => array( 'photobrust', 'header' ),
	'content'    => '<!-- wp:group {"class":"no-margin-top post-header","align":"full","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull no-margin-top post-header">
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
		<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		   <!-- wp:cover {"gradient":"horizontal-color-gradient-first-to-gradient-second","isDark":false} -->
				<div class="wp-block-cover is-light">
					<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-horizontal-color-gradient-first-to-gradient-second-gradient-background"></span>
					<div class="wp-block-cover__inner-container">
					<!-- wp:group {"layout":{"inherit":true}} -->
					<div class="wp-block-group">
						<!-- wp:group {"align":"wide} -->
						<div class="wp-block-group alignwide">
							<!-- wp:query-title {"type":"archive","textAlign":"center"} /-->
	
							<!-- wp:term-description {"textAlign":"center"} /-->
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
	<!-- /wp:group -->',
);
