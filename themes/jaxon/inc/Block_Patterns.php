<?php
/**
 * Patterns Handler.
 *
 * @author Themeisle
 * @package jaxon
 * @since 1.0.0
 */

namespace Jaxon;

use WP_Block_Pattern_Categories_Registry;

/**
 * Class Block_Patterns
 *
 * @package jaxon
 */
class Block_Patterns {

	/**
	 * Patterns categories.
	 *
	 * @var array
	 */
	private $categories = array();
	/**
	 * The patterns array.
	 *
	 * These use the file names without termination inside the `inc/patterns` directory.
	 *
	 * @var array
	 */
	private $patterns = array();

	/**
	 * Block_Patterns constructor.
	 */
	public function __construct() {
		$this->setup_properties();

		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->register_categories();
		$this->register_patterns();
	}

	/**
	 * Setup class properties.
	 *
	 * @return void
	 */
	private function setup_properties() {
		$categories = array(
			'jaxon' => array( 'label' => __( 'Jaxon Patterns', 'jaxon' ) ),
		);

		$patterns = array(
			'hero-cover-with-title-and-image',
			'row-with-logos',
			'call-to-action-inverted',
			'categories-with-description-and-images',
			'two-columns-with-images-and-text',
			'features-with-icons',
			'three-columns-with-testimonials',
			'posts-in-a-three-column-grid',
			'two-columns-with-testimonials',
			'alternating-layout-with-image-and-description',
			'call-to-action-boxed',
			'three-columns-with-products',
		);

		$this->categories = apply_filters( 'jaxon_block_patterns_categories', $categories );
		$this->patterns   = apply_filters( 'jaxon_block_patterns', $patterns );
	}

	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */
	private function register_categories() {
		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, $args );
		}
	}

	/**
	 * Register Patterns.
	 *
	 * @return void
	 */
	private function register_patterns() {
		foreach ( $this->patterns as $pattern ) {
			$file = JAXON_DIR . 'inc/patterns/' . $pattern . '.php';

			if ( ! is_file( $file ) ) {
				continue;
			}

			register_block_pattern( 'jaxon/' . $pattern, require $file );
		}
	}
}
