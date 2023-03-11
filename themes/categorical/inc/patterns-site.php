<?php
/**
 *
 * Adds site patterns.
 *
 * @package Categorical
 */

function categorical_register_header_patterns() {

	if ( categorical_user_can( 'edit_themes' ) ) {
		$inserter = true;
	} else {
		$inserter = false;
	}

	register_block_pattern(
		'categorical/header-no-ad-space',
		array(
			'title'         => esc_html__( 'Header without Ad Space', 'categorical' ),
			'categories'    => array( 'categorical-headers' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'viewportWidth' => 1200,
			'content'       => '<!-- wp:group {"align":"full","layout":{"inherit":true},"style":{"spacing":{"padding":{"top":"1rem","right":"2rem","bottom":"1rem","left":"2rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"className":"is-style-links-plain"} /-->
		<!-- wp:site-tagline /-->
		<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull">

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"layout":{"inherit":true},"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"},"margin":{"top":"0px"}}}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-bottom:1rem;margin-top:0px">
		<!-- wp:group {"align":"wide"} -->
		<div class="wp-block-group alignwide">
			<!-- wp:pattern {"slug":"categorical/categories-menu"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:0px"/>
	<!-- /wp:separator -->

</div>
<!-- /wp:group -->',
			'inserter'      => $inserter
		)
	);

	register_block_pattern(
		'categorical/header-with-ad-space',
		array(
			'title'         => esc_html__( 'Header with Ad Space', 'categorical' ),
			'categories'    => array( 'categorical-headers' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'viewportWidth' => 1200,
			'content'       => '<!-- wp:group {"align":"full","layout":{"inherit":true},"style":{"spacing":{"padding":{"top":"1rem","right":"2rem","bottom":"1rem","left":"2rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:site-title {"className":"is-style-links-plain"} /-->
			<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0px"}}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:image {"linkDestination":"none"} -->
		<figure class="wp-block-image"><img src="' . esc_url( get_theme_file_uri( 'assets/images/example.png' ) ) . '" alt="" class=""/></figure>
		<!-- /wp:image -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull">

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"layout":{"inherit":true},"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"},"margin":{"top":"0px"}}}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-bottom:1rem;margin-top:0px">

		<!-- wp:pattern {"slug":"categorical/categories-menu-popular-top-level-search"} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:0px"/>
	<!-- /wp:separator -->

</div>
<!-- /wp:group -->',
			'inserter'      => $inserter
		)
	);

	register_block_pattern(
		'categorical/sidebar',
		array(
			'title'         => esc_html__( 'Sidebar', 'categorical' ),
			'categories'    => array( 'categorical-sidebars' ),
			'blockTypes'    => array( 'core/template-part/sidebar' ),
			'viewportWidth' => 300,
			'content'       => '<!-- wp:heading {"level":3} -->
<h3>Latest</h3>
<!-- /wp:heading -->
<!-- wp:latest-posts {"displayFeaturedImage":true,"className":"is-style-links-underline-on-hover is-style-boxed"} /-->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"linkDestination":"none"} -->
<figure class="wp-block-image"><img src="' . esc_url( get_theme_file_uri( 'assets/images/example-2.png' ) ) . '" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3} -->
<h3>Tags</h3>
<!-- /wp:heading -->
<!-- wp:tag-cloud {"smallestFontSize":"12px","largestFontSize":"24px"} /-->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3} -->
<h3>Recent Comments</h3>
<!-- /wp:heading -->
<!-- wp:latest-comments {"displayDate":false,"className":"is-style-links-underline-on-hover is-style-separated"} /-->',
			'inserter'      => $inserter
		)
	);

}
add_action( 'init', 'categorical_register_header_patterns' );


function categorical_register_nav_patterns() {

	if ( categorical_user_can( 'edit_themes' ) ) {
		$inserter = true;
	} else {
		$inserter = false;
	}

	$nav_level_1 = '<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"}} -->';

	$nav_level_1_2 = '<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"}} -->';

	$nav_popular = '<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} -->';

	$nav_popular_search = '<!-- wp:navigation {"align":"wide","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"space-between"}} -->';

	$nav_popular_vertical = '<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.4em"}}} -->';

	$nav_end = '<!-- /wp:navigation -->';

	$search_block = '<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->';

	$categories = categorical_post_categories( true );

	foreach ( $categories as $category_id => $category ) {

		$nav_level_1 .= '<!-- wp:navigation-link {"label":"' . esc_html( $category['name'] ) . '","type":"category","id":' . esc_attr( $category_id ) . ',"url":"' . esc_url( $category['link'] ) . '","kind":"taxonomy","isTopLevelLink":true} /-->';

		$sub_cats = categorical_post_categories( false, $category_id );

		if ( $sub_cats ) {
			$nav_level_1_2 .= '<!-- wp:navigation-submenu {"label":"' . esc_html( $category['name'] ) . '","type":"category","id":' . esc_attr( $category_id ) . ',"url":"' . esc_url( $category['link'] ) . '","kind":"taxonomy","isTopLevelLink":true} -->';
			foreach ( $sub_cats as $sub_cat_id => $sub_cat ) {
				$nav_level_1_2 .= '<!-- wp:navigation-link {"label":"' . esc_html( $sub_cat['name'] ) . '","type":"category","id":' . esc_attr( $sub_cat_id ) . ',"url":"' . esc_url( $sub_cat['link'] ) . '","kind":"taxonomy","isTopLevelLink":false} /-->';
			}
			$nav_level_1_2 .= '<!-- /wp:navigation-submenu -->';
		} else {
			$nav_level_1_2 .= '<!-- wp:navigation-link {"label":"' . esc_html( $category['name'] ) . '","type":"category","id":' . esc_attr( $category_id ) . ',"url":"' . esc_url( $category['link'] ) . '","kind":"taxonomy","isTopLevelLink":true} /-->';
		}

	}

	$nav_level_1 .= $nav_end;

	$nav_level_1_2 .= $nav_end;

	/**
	 * Filters the number of Popular Categories to return in Navigation patterns.
	 *
	 * @param int $num_cats Number of categories. 0 will return ALL top level categories.
	 */
	$num_cats = apply_filters( 'categorical_nav_popular_categories_count', 7 );

	$categories_popular = categorical_post_categories( true, '', $num_cats, 'popular' );
	foreach ( $categories_popular as $category_popular_id => $category_popular ) {

		$nav_popular .= '<!-- wp:navigation-link {"label":"' . esc_html( $category_popular['name'] ) . '","type":"category","id":' . esc_attr( $category_popular_id ) . ',"url":"' . esc_url( $category_popular['link'] ) . '","kind":"taxonomy","isTopLevelLink":true} /-->';

		$nav_popular_search .= '<!-- wp:navigation-link {"label":"' . esc_html( $category_popular['name'] ) . '","type":"category","id":' . esc_attr( $category_popular_id ) . ',"url":"' . esc_url( $category_popular['link'] ) . '","kind":"taxonomy","isTopLevelLink":true} /-->';

		$nav_popular_vertical .= '<!-- wp:navigation-link {"label":"' . esc_html( $category_popular['name'] ) . '","type":"category","id":' . esc_attr( $category_popular_id ) . ',"url":"' . esc_url( $category_popular['link'] ) . '","kind":"taxonomy","isTopLevelLink":true} /-->';

	}

	$nav_popular .= $nav_end;

	$nav_popular_search .= $search_block . $nav_end;

	$nav_popular_vertical .= $nav_end;

	register_block_pattern(
		'categorical/categories-menu-top-level',
		array(
			'title'         => esc_html__( 'Categories (top level)', 'categorical' ),
			'categories'    => array( 'categorical-navigation' ),
			'blockTypes'    => array( 'core/navigation' ),
			'viewportWidth' => 1200,
			'content'       => $nav_level_1,
			'inserter'      => $inserter
		)
	);

	register_block_pattern(
		'categorical/categories-menu',
		array(
			'title'         => esc_html__( 'Categories (level 1 and 2)', 'categorical' ),
			'categories'    => array( 'categorical-navigation' ),
			'blockTypes'    => array( 'core/navigation' ),
			'viewportWidth' => 1200,
			'content'       => $nav_level_1_2,
			'inserter'      => $inserter
		)
	);

	register_block_pattern(
		'categorical/categories-menu-popular-top-level',
		array(
			'title'         => esc_html__( 'Categories (popular top level)', 'categorical' ),
			'categories'    => array( 'categorical-navigation' ),
			'blockTypes'    => array( 'core/navigation' ),
			'viewportWidth' => 1200,
			'content'       => $nav_popular,
			'inserter'      => $inserter
		)
	);

	register_block_pattern(
		'categorical/categories-menu-popular-top-level-search',
		array(
			'title'         => esc_html__( 'Categories (popular top level) and search', 'categorical' ),
			'categories'    => array( 'categorical-navigation' ),
			'blockTypes'    => array( 'core/navigation' ),
			'viewportWidth' => 1200,
			'content'       => $nav_popular_search,
			'inserter'      => $inserter
		)
	);

	register_block_pattern(
		'categorical/categories-menu-popular-top-level-vertical',
		array(
			'title'         => esc_html__( 'Categories (popular top level, vertical)', 'categorical' ),
			'categories'    => array( 'categorical-navigation' ),
			'blockTypes'    => array( 'core/navigation' ),
			'viewportWidth' => 1200,
			'content'       => $nav_popular_vertical,
			'inserter'      => $inserter
		)
	);

}
add_action( 'init', 'categorical_register_nav_patterns' );
