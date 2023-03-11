<?php
/**
 * Sidebar
 */
return array(
	'title'      => esc_html__( 'Sidebar', 'photobrust' ),
	'categories' => array( 'photobrust', 'featured', 'pages' ),
	'content'    => '<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
	<div class="wp-block-group wp-block-widget-area wp-block-sidebar">
		<!-- wp:group {"className":"wp-block-widget"} -->
		<div class="wp-block-group wp-block-widget"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="search" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'Search A Keyword', 'photobrust' ) . '</h2>
		<!-- /wp:heading -->
		
		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"wp-block-widget"} -->
		<div class="wp-block-group wp-block-widget">
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
			<h2 id="about" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'About', 'photobrust' ) . '</h2>
			<!-- /wp:heading -->
	
			  <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			  <figure class="wp-block-image size-large"><img src="' . get_parent_theme_file_uri( '/assets/images/about-img.jpg' ) . '" alt="" /></figure>
			  <!-- /wp:image -->
	
			<!-- wp:paragraph -->
			<p>' . esc_html__( 'Through our best-in-class techniques and bespoke growth plans we assess digital problems and put in place strategies that lead to commercial success. This means achieving what matters most to you.', 'photobrust' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'photobrust' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	
		<!-- wp:group {"className":"wp-block-widget"} -->
		<div class="wp-block-group wp-block-widget">
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
			<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'Recent Post', 'photobrust' ) . '</h2>
			<!-- /wp:heading -->
	
			<!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"wp-block-widget"} -->
		<div class="wp-block-group wp-block-widget"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="instagram" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'Instagram', 'photobrust' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:catch-instagram-block/catch-instagram-block /--></div>
		<!-- /wp:group -->
	
		<!-- wp:group {"className":"wp-block-widget"} -->
		<div class="wp-block-group wp-block-widget">
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
			<h2 id="tags" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'Tags', 'photobrust' ) . '</h2>
			<!-- /wp:heading -->
	
			<!-- wp:tag-cloud {"numberOfTags":15} /-->
		</div>
		<!-- /wp:group -->
	
		<!-- wp:group {"className":"wp-block-widget"} -->
		<div class="wp-block-group wp-block-widget">
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
			<h2 id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'Categories', 'photobrust' ) . '</h2>
			<!-- /wp:heading -->
	
			<!-- wp:categories /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	',
);
