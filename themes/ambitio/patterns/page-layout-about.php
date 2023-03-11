<?php
/**
 * Title: About Page
 * Slug: ambitio/page-layout-about
 * Block Types: core/post-content
 * Categories: ambitio_page_layouts
*/
?>

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"},"margin":{"top":"0px"}}},"backgroundColor":"white","layout":{"contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="margin-top:0px;padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"3vw"}}}} -->
	<h2 class="has-text-align-center" style="margin-bottom:3vw"><?php _e( 'Our Team', 'ambitio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph -->
			<p><strong>John Doe</strong><br>Founder &amp; CEO</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"5px","left":"5px"},"margin":{"top":"8px"}}}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:8px">
				<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph -->
			<p><strong>Jane Smith</strong><br>Web Developer</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"5px","left":"5px"},"margin":{"top":"8px"}}}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:8px">
				<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph -->
			<p><strong>Mark Miller</strong><br>Online Marketing</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"5px","left":"5px"},"margin":{"top":"8px"}}}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:8px">
				<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"},"margin":{"top":"0px"}}},"backgroundColor":"secondary","textColor":"white","layout":{"contentSize":"800px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-color has-secondary-background-color has-text-color has-background" style="margin-top:0px;padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="has-text-align-center has-xx-large-font-size"><?php _e( 'Open positions', 'ambitio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color"><?php _e( 'Apply now', 'ambitio' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"},"margin":{"top":"0px"}}},"backgroundColor":"white","layout":{"contentSize":"800px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="margin-top:0px;padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"3vw"}}}} -->
	<h2 style="margin-bottom:3vw"><?php _e( 'What we offer', 'ambitio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"35%"} -->
		<div class="wp-block-column" style="flex-basis:35%">

			<!-- wp:heading {"level":3} -->
			<h3><?php _e( 'Perk One', 'ambitio' ); ?></h3>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"65%"} -->
		<div class="wp-block-column" style="flex-basis:65%">

		<!-- wp:paragraph -->
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
		<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"35%"} -->
		<div class="wp-block-column" style="flex-basis:35%">

			<!-- wp:heading {"level":3} -->
			<h3><?php _e( 'Perk Two', 'ambitio' ); ?></h3>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"65%"} -->
		<div class="wp-block-column" style="flex-basis:65%">

		<!-- wp:paragraph -->
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
		<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"35%"} -->
		<div class="wp-block-column" style="flex-basis:35%">

			<!-- wp:heading {"level":3} -->
			<h3><?php _e( 'Perk Three', 'ambitio' ); ?></h3>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"65%"} -->
		<div class="wp-block-column" style="flex-basis:65%">

		<!-- wp:paragraph -->
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
		<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

</div>
<!-- /wp:group -->
