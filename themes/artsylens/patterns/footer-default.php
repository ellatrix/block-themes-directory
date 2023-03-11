<?php
 /**
  * Title: Footer
  * Slug: artsylens/footer
  * Categories: artsylens, footer
  */
?>
<!-- wp:group {"align":"full","className":"footer","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull footer">
	<!-- wp:group {"align":"wide","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide wp-block-footer wp-block-site-generator">
		<!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide wp-block-site-info">
			<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /-->
			<!-- wp:paragraph -->
			<p><?php printf( 
				_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'artsylens' ), 
				esc_attr( date_i18n( __( 'Y', 'artsylens' ) ) ), 
				'<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a><span class="sep"> | </span>ArtsyLens  by <a target="_blank" href="https://catchthemes.com">Catch Themes</a>' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
