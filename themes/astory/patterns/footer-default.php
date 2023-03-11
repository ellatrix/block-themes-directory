<?php
/**
 * Title: Footer with text, links.
 * Slug: astory/footer-default
 * Categories: astory-footer
 * Viewport Width: 1280
 */

?>
<!-- wp:group {"align":"full","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="font-size:18px;margin-top:0px">
	<!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}},"spacing":{"padding":{"top":"100px","bottom":"100px"},"blockGap":"100px"}}} -->
	<div class="wp-block-columns alignwide has-link-color" style="padding-top:100px;padding-bottom:100px">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":4} -->
			<h4 id="our-company">Our Company</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">Learn More</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"33%"} -->
				<div class="wp-block-column" style="flex-basis:33%">
					<!-- wp:heading {"level":4} -->
					<h4 id="about-us">About Us</h4>
					<!-- /wp:heading -->

					<!-- wp:list {"fontSize":"small"} -->
					<ul class="has-small-font-size">
						<li><a href="#">Start Here</a></li>
						<li><a href="#">Our Mission</a></li>
						<li><a href="#">Brand Guide</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#">Accessibility</a></li>
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33%"} -->
				<div class="wp-block-column" style="flex-basis:33%">
					<!-- wp:heading {"level":4} -->
					<h4 id="services">Services</h4>
					<!-- /wp:heading -->

					<!-- wp:list {"fontSize":"small"} -->
					<ul class="has-small-font-size">
						<li><a href="#">Web Design</a></li>
						<li><a href="#">Development</a></li>
						<li><a href="#">Copywriting</a></li>
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Social Media</a></li>
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33%"} -->
				<div class="wp-block-column" style="flex-basis:33%">
					<!-- wp:heading {"level":4} -->
					<h4 id="connect">Connect</h4>
					<!-- /wp:heading -->

					<!-- wp:list {"fontSize":"small"} -->
					<ul class="has-small-font-size">
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">LinkedIn</a></li>
						<li><a href="#">Dribbble</a></li>
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" />
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"0px"}}},"layout":{"inherit":true},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:0px;padding-top:40px;padding-bottom:40px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph -->
		<p>Copyright © <?php echo gmdate( 'Y' ); ?> - WordPress Theme by <a href="https://codeclove.com/">CODECLOVE</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><a href="#">Privacy Policy</a> · <a href="#">Terms of Service</a> · <a href="#">Contact Us</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"main","iconBackgroundColorValue":"#000","className":"is-style-default","style":{"spacing":{"blockGap":"10px"}}} -->
		<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
