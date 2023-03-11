<?php
/**
 * Next Blog: Block Patterns
 *
 * @since Next Blog 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function next_blog_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/inc/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since Next Blog 1.0
 *
 * @return void
 */
function next_blog_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'next-blog' ),
			'categories' => array( 'next-blog-headers' ),
			'blockTypes' => array( 'core/template-part/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'next-blog' ),
			'categories' => array( 'next-blog-footers' ),
			'blockTypes' => array( 'core/template-part/footer' ),
		),
		'blog-section' => array(
			'title'      => __( 'Blog Section', 'next-blog' ),
			'categories' => array( 'next-blog-blog' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'next-blog' ),
			'categories' => array( 'next-blog-sidebars' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'next-blog' ),
			'categories' => array( 'next-blog-pages' ),
		),
		'comment-section-1' => array(
			'title'    => __( 'Comment Section 1', 'next-blog' ),
			'categories' => array( 'next-blog-comment-sections' ),
		),
	);

	$block_pattern_categories = array(
		'next-blog-footers' => array( 'label' => __( 'Footers', 'next-blog' ) ),
		'next-blog-headers' => array( 'label' => __( 'Headers', 'next-blog' ) ),
		'next-blog-pages'   => array( 'label' => __( 'Pages', 'next-blog' ) ),
		'next-blog-query'   => array( 'label' => __( 'Query', 'next-blog' ) ),
		'next-blog-sidebars'   => array( 'label' => __( 'Sidebars', 'next-blog' ) ),
		'next-blog-blog'   => array( 'label' => __( 'Blog Section', 'next-blog' ) ),
		'next-blog-comment-section'   => array( 'label' => __( 'Comment Sections', 'next-blog' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Next Blog 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'next_blog_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Next Blog 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'next_blog_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = next_blog_get_pattern_content( $block_pattern );
		register_block_pattern(
			'next-blog/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'next_blog_register_block_patterns', 9 );
