<?php
/**
 * Title: Hero Cover Box
 * Slug: driven/hero-cover-box
 * Categories: driven_hero
*/
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png","dimRatio":30,"contentPosition":"center center","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" data-object-fit="cover"/>

	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"3.5vw","right":"3.5vw","bottom":"3.5vw","left":"3.5vw"}}},"layout":{"type":"default","contentSize":"1200px"}} -->
		<div class="wp-block-group" style="padding-top:3.5vw;padding-right:3.5vw;padding-bottom:3.5vw;padding-left:3.5vw">

			<!-- wp:columns {"style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-columns">

			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">

				<!-- wp:spacer {"height":"150px"} -->
				<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}},"backgroundColor":"white","textColor":"dark-background"} -->
				<div class="wp-block-group has-dark-background-color has-white-background-color has-text-color has-background" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem">

					<!-- wp:heading {"className":"is-style-underlined-heading"} -->
					<h2 class="is-style-underlined-heading"><?php _e( 'Hero Headline', 'driven' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Join now', 'driven' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%"></div>
			<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->

	</div>

</div>
<!-- /wp:cover -->
