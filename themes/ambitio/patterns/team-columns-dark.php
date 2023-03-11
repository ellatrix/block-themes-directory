<?php
/**
 * Title: Team Columns Dark
 * Slug: ambitio/team-columns-dark
 * Categories: ambitio_team
*/
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"},"blockGap":"3vw"}},"backgroundColor":"dark-background","textColor":"white","layout":{"contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-color has-dark-background-background-color has-text-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="has-text-align-center"><?php _e( 'Our Team', 'ambitio' ); ?></h2>
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

			<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"5px","left":"5px"},"margin":{"top":"8px"}}}} -->
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

			<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"5px","left":"5px"},"margin":{"top":"8px"}}}} -->
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

			<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"5px","left":"5px"},"margin":{"top":"8px"}}}} -->
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
