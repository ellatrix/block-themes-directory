<?php
/**
 *
 * Adds pattern categories.
 *
 * @package Categorical
 */

function categorical_register_pattern_categories() {

	register_block_pattern_category( 'categorical-general', array( 'label' => esc_html__( 'General', 'categorical' ) ) );

	register_block_pattern_category( 'categorical-navigation', array( 'label' => esc_html__( 'Navigation Menus', 'categorical' ) ) );

	register_block_pattern_category( 'categorical-headers', array( 'label' => esc_html__( 'Headers', 'categorical' ) ) );

	register_block_pattern_category( 'categorical-sidebars', array( 'label' => esc_html__( 'Sidebars', 'categorical' ) ) );

}
add_action( 'init', 'categorical_register_pattern_categories' );


require CATEGORICAL_TEMPLATE_DIR . '/inc/patterns-site.php';
require CATEGORICAL_TEMPLATE_DIR . '/inc/patterns-page.php';
require CATEGORICAL_TEMPLATE_DIR . '/inc/patterns-general.php';


/**
 * Returns an array of post categories.
 */
function categorical_post_categories( $top_level = true, $parent = '0', $number = '0' , $sort = 'name' ) {

	if ( $sort === 'popular' ) {
		$orderby = 'count';
		$order = 'DESC';
	} else {
		$orderby = 'name';
		$order = 'ASC';
	}

	if ( $top_level === true ) {
		$args = array(
			'parent' => '0',
			'number' => $number, 
			'orderby' => $orderby, 
			'order' => $order
		);
	} else {
		if ( $parent !== '0' ) {
			$args = array(
				'parent' => $parent,
				'number' => $number, 
				'orderby' => $orderby, 
				'order' => $order
			);	
		} else {
			$args = array(
				'number' => $number, 
				'orderby' => $orderby, 
				'order' => $order
			);
		}		
	}

	$squeeze = array();

	$categories = get_categories( $args );

	foreach ( $categories as $category ) {
		$category_id = $category->term_id;
		$category_name = $category->name;
		$category_slug = $category->slug;
		$category_count = $category->count;
		$category_link = get_category_link( $category_id );

		$squeeze[$category_id] = array(
			'name' => $category_name,
			'slug' => $category_slug,
			'link' => $category_link,
			'count' => $category_count
		);
	}

	return $squeeze;
}


function categorical_user_can( $cap ) {

	if ( $cap === '' ) {
		$result = true;
	} else {
		if ( current_user_can( $cap ) ) {
			$result = true;
		} else {
			$result = false;
		}
	}

	return $result;
}


/**
 * Returns the categorized patterns labels.
 * 
 * See the relevant pattern function for filtering options.
 */
function categorical_patterns_label( $number ) {

	switch ( $number ) {
		case 1:
			$label = esc_html__( '1 medium + 6 small', 'categorical' );
			break;

		case 2:
			$label = esc_html__( '2 medium + 1 large', 'categorical' );
			break;
		
		default:
			$label = sprintf(
				/* translators: %d: The numbered order of the pattern e.g. 1, 2, 3 etc. */
				esc_html__( 'Pattern #%d', 'categorical' ),
				$number
			);
			break;
	}

	return $label;

}


/**
 * Returns the categorized patterns templates.
 */
function categorical_patterns_template( $number, $category_name, $category_link, $category_id, $has_link = true, $is_cat = true, $sticky = '' ) {

	/**
	 * Filters the default "View All" read more link text.
	 *
	 * @param string The read more text.
	 */
	$category_read_more = apply_filters( 'categorical_cat_read_more_text', __( 'View All', 'categorical' ) );

	if ( $has_link ) {
		$link_content = '
<!-- wp:paragraph {"className":"is-style-links-underline-on-hover"} -->
<p class="is-style-links-underline-on-hover"><a href="' . esc_url( $category_link ) . '" data-type="category" data-id="' . esc_attr( $category_id ) . '">' . esc_html( $category_read_more ) . '</a></p>
<!-- /wp:paragraph -->';
	} else {
		$link_content = '';
	}

	if ( $is_cat ) {
		$tax_query = ',"taxQuery":{"category":[' . esc_attr( $category_id ) . ']}';
		$block_terms = '';
	} else {
		$tax_query = '';
		$block_terms = '<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-links-plain","fontSize":"tiny"} /-->';
	}

	switch ( $number ) {
		case 1:
			$content = '
<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide" id="' . esc_attr( $category_name ) . '"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide"} -->
<h2 class="alignwide">' . esc_html( $category_name ) . '</h2>
<!-- /wp:heading -->' . $link_content . '</div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:query {"queryId":0,"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"' . $sticky . '","inherit":false' . $tax_query . '}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true} /-->
' . $block_terms . '
<!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:post-date /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":0,"query":{"perPage":"6","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"' . $sticky . '","inherit":false' . $tax_query . '},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true} /-->
' . $block_terms . '
<!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover","fontSize":"normal"} /-->

<!-- wp:post-date /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
';
			break;

		case 2:
			$content = '
<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide" id="' . esc_attr( $category_name ) . '"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide"} -->
<h2 class="alignwide">' . esc_html( $category_name ) . '</h2>
<!-- /wp:heading -->' . $link_content . '</div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:query {"queryId":0,"query":{"perPage":"2","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"' . $sticky . '","inherit":false' . $tax_query . '}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true} /-->
' . $block_terms . '
<!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover","fontSize":"normal"} /-->

<!-- wp:post-date /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"' . $sticky . '","inherit":false' . $tax_query . '}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true} /-->
' . $block_terms . '
<!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:post-date /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
';
			break;
		
		default:
			$content = '
<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide" id="' . esc_attr( $category_name ) . '">
<!-- wp:heading {"align":"wide"} -->
<h2 class="alignwide">' . esc_html( $category_name ) . '</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
';
			break;
	}

	return $content;

}
