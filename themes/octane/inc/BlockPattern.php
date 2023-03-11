<?php

namespace Codemanas\Themes\Octane;

class BlockPattern {
	public static $instance = null;
	public $directory = '';

	public static function get_instance() {
		return is_null( self::$instance ) ? new self() : self::$instance;
	}

	public function __construct() {
		$this->directory = get_theme_file_path();
		$this->register_pattern_categories();
		add_action( 'init', [ $this, 'register_patterns' ] );
		add_action( 'init', [ $this, 'register_full_page_patterns' ] );
	}

	/**
	 * Function to get pattern html
	 *
	 * @param $template_file
	 */
	public function get_pattern_part( $template_file ) {
		$content = 'Pattern Not Found';
		if ( file_exists( $this->directory . '/block-patterns/' . esc_html( $template_file ) ) ) {
			ob_start();
			include $this->directory . '/block-patterns/' . esc_html( $template_file );
			$content = ob_get_clean();
		}

		return $content;
	}

	public function register_patterns() {

		register_block_pattern(
			'codemanas-octane/cta-header-main',
			[
				'title' => __('CTA - Main Header', 'octane'),
				'descriptions' => _x('Call to Action main header section ','Block Pattern description','octane'),
				'content' => $this->get_pattern_part('cta-header-main.php'),
				'categories' => ['codemanas-octane']
			]
		);
		
		register_block_pattern(
			'codemanas-octane/pricing-table',
			array(
				'title'       => __( 'Pricing Table', 'octane' ),
				'description' => _x( 'Pricing table.', 'Block pattern description', 'octane' ),
				'content'     => $this->get_pattern_part('pricing-table.php'),
				'categories'  => [ 'codemanas-octane' ]
			)
		);

		register_block_pattern(
			'codemanas-octane/pricing-table-rounded-border',
			array(
				'title'       => __( 'Pricing Table - Rounder Border', 'octane' ),
				'description' => _x( 'Pricing table with Rounder Borders.', 'Block pattern description', 'octane' ),
				'content'     => $this->get_pattern_part('pricing-table-rounded-border.php'),
				'categories'  => [ 'codemanas-octane' ]
			)
		);

		register_block_pattern(
			'codemanas-octane/cta',
			array(
				'title'       => __( 'Call To Action', 'octane' ),
				'description' => _x( 'Call To Action.', 'Block pattern description', 'octane' ),
				'content'     => $this->get_pattern_part('cta.php'),
				'categories'  => [ 'codemanas-octane' ]
			)
		);
		
		register_block_pattern(
			'codemanas-octane/testimonials',
			[
				'title' => __('Testimonials - Rounded Design','octane'),
				'descriptions' => _x('Testimonials Section','Block Pattern description','octane'),
				'content' => $this->get_pattern_part('testimonials.php'),
				'categories' => ['codemanas-octane']
			]
		);

		register_block_pattern(
			'codemanas-octane/two-column-image-with-text',
			[
				'title' => __('Intro section Image and Text Columns','octane'),
				'descriptions' => _x('Intro section Image and Text ','Block Pattern description','octane'),
				'content' => $this->get_pattern_part('image-with-text.php'),
				'categories' => ['codemanas-octane']
			]
		);
		
		register_block_pattern(
			'codemanas-octane/two-columns-full-width-background',
			[
				'title' => __('Two Columns with full width background ', 'octane'),
				'descriptions' => _x('Two Columns with full width background','Block Pattern description','octane'),
				'content' => $this->get_pattern_part('two-columns-with-full-width-background.php'),
				'categories' => ['codemanas-octane']
			]
		);

		register_block_pattern(
			'codemanas-octane/teams',
			[
				'title' => __('Teams', 'octane'),
				'descriptions' => _x('Team Section','Block Pattern description','octane'),
				'content' => $this->get_pattern_part('team.php'),
				'categories' => ['codemanas-octane']
			]
		);

		register_block_pattern(
			'codemanas-octane/cta-with-search-form',
			[
				'title' => __('CTA - Search Form', 'octane'),
				'descriptions' => _x('Call to Action with Search Form','Block Pattern description','octane'),
				'content' => $this->get_pattern_part('cta-search-form.php'),
				'categories' => ['codemanas-octane']
			]
		);
		
		
	}
	
	public function register_full_page_patterns(){
		register_block_pattern(
			'codemanas-octane-full-page-layouts/home-page-1',
			array(
				'title'       => __( 'Home Page - Design 1', 'octane' ),
				'description' => _x( 'Home Page Design 1', 'Block pattern description', 'octane' ),
				'content'     => $this->get_pattern_part('full-page/home-page.php'),
				'categories'  => [ 'codemanas-octane-full-page-layouts' ]
			)
		);

		register_block_pattern(
			'codemanas-octane-full-page-layouts/contact',
			array(
				'title'       => __( 'Contact', 'octane' ),
				'description' => _x( 'Contact Us - layout', 'Block pattern description', 'octane' ),
				'content'     => $this->get_pattern_part('full-page/contact.php'),
				'categories'  => [ 'codemanas-octane-full-page-layouts' ]
			)
		);

		register_block_pattern(
			'codemanas-octane-full-page-layouts/about',
			array(
				'title'       => __( 'About', 'octane' ),
				'description' => _x( 'Full Page About', 'Block pattern description', 'octane' ),
				'content'     => $this->get_pattern_part('full-page/about.php'),
				'categories'  => [ 'codemanas-octane-full-page-layouts' ]
			)
		);
	}

	public function register_pattern_categories() {
		register_block_pattern_category(
			'codemanas-octane',
			[ 'label' => __( 'Octane', 'octane' ) ]
		);
		
		register_block_pattern_category(
			'codemanas-octane-full-page-layouts',
			[ 'label' => __( 'Octane - Full Page Layouts', 'octane' ) ]
		);
	}
	
}