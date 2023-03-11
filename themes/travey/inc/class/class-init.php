<?php
/**
 * Init Configuration
 *
 * @author Jegstudio
 * @package travey
 * @since 1.0.0
 */

namespace Travey;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Travey\Block_Patterns;
use Travey\Block_Styles;
use Travey\Upgrader;

/**
 * Init Class
 *
 * @package travey
 */
class Init {

	/**
	 * Instance variable
	 *
	 * @var $instance
	 */
	private static $instance;

	/**
	 * Class instance.
	 *
	 * @return Init
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Class constructor.
	 */
	private function __construct() {
		$this->load_hooks();
        $this->register_upgrader();
	}

	/**
	 * Load initial hooks.
	 */
	private function load_hooks() {
		// actions.
		add_action( 'init', array( $this, 'add_theme_templates' ) );
		add_action( 'after_setup_theme', array( $this, 'theme_setup' ) );
		add_action( 'after_theme_setup', array( $this, 'content_width' ), 0 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_notices', array( $this, 'notice_install_plugin' ) );
		add_action( 'wp_ajax_travey_set_admin_notice_viewed', array( $this, 'notice_closed' ) );
		add_action( 'admin_init', array( $this, 'load_editor_styles' ) );
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
		add_action( 'init', array( $this, 'register_block_patterns' ), 9 );
		add_action( 'init', array( $this, 'register_block_styles' ), 9 );

		add_action( 'admin_enqueue_scripts', array( $this, 'dashboard_scripts' ) );

		// filters.
		add_filter( 'the_category', array( $this, 'render_categories' ) );
		add_filter( 'excerpt_length', array( $this, 'excerpt_length' ) );
		add_filter( 'excerpt_more', array( $this, 'excerpt_elipsis' ) );
		add_filter( 'gutenverse_template_path', array( $this, 'template_path' ), null, 3 );
		add_filter( 'gutenverse_themes_template', array( $this, 'add_template' ), 10, 2 );

		// Default Font.
		add_filter( 'gutenverse_block_config', array( $this, 'default_font' ), 10 );
		add_filter( 'gutenverse_font_header', array( $this, 'default_header_font' ) );
		add_filter( 'gutenverse_global_css', array( $this, 'global_header_style' ) );
	}

	/**
	 * Generate Global Font
	 *
	 * @param string $value  Value of the option.
	 *
	 * @return string
	 */
	public function global_header_style( $value ) {
		$theme_name      = get_stylesheet();
		$global_variable = get_option( 'gutenverse-global-variable-font-' . $theme_name );

		if ( empty( $global_variable ) && function_exists( 'gutenverse_global_font_style_generator' ) ) {
			$font_variable = $this->default_font_variable();
			$value        .= \gutenverse_global_font_style_generator( $font_variable );
		}

		return $value;
	}

	/**
	 * Header Font.
	 *
	 * @param mixed $value  Value of the option.
	 *
	 * @return mixed Value of the option.
	 */
	public function default_header_font( $value ) {
		if ( ! $value ) {
			$value = array(
				array(
					'value'  => 'Alfa Slab One',
					'type'   => 'google',
					'weight' => 'bold',
				),
			);
		}

		return $value;
	}

	/**
	 * Alter Default Font.
	 *
	 * @param array $config Array of Config.
	 *
	 * @return array
	 */
	public function default_font( $config ) {
		if ( empty( $config['globalVariable']['fonts'] ) ) {
			$config['globalVariable']['fonts'] = $this->default_font_variable();

			return $config;
		}

		if ( ! empty( $config['globalVariable']['fonts'] ) ) {
			// Handle existing fonts.
			$theme_name   = get_stylesheet();
			$initial_font = get_option( 'gutenverse-font-init-' . $theme_name );

			if ( ! $initial_font ) {
				$config['globalVariable']['fonts'] = array_merge( $config['globalVariable']['fonts'], $this->default_font_variable() );
				update_option( 'gutenverse-font-init-' . $theme_name, true );
			}
		}

		return $config;
	}

	/**
	 * Default Font Variable.
	 *
	 * @return array
	 */
	public function default_font_variable() {
		return array(
			array(
				'id'   => 'h1-style-1',
				'name' => 'H1 Style 1',
				'font' => array(
					'font'       => array(
						'label' => 'Oswald',
						'value' => 'Oswald',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '200',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '152',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '76',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '200',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '152',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '76',
						),
					),
					'spacing'    => array(
						'Desktop' => '0.125',
					),
					'transform'  => 'uppercase',
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'h1-style-2',
				'name' => 'H1 Style 2',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '48',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '24',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '56',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '32',
						),
					),
					'spacing'    => array(
						'Desktop' => '0.125',
					),
					'transform'  => 'uppercase',
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'h1-style-3',
				'name' => 'H1 Style 3',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '96',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '24',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '96',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '32',
						),
					),
					'spacing'    => array(
						'Desktop' => '0.031',
					),
					'transform'  => 'uppercase',
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'h2-style-1',
				'name' => 'H2 Style 1',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '48',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '38',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '28',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '52',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '42',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '32',
						),
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'h2-style-2',
				'name' => 'H2 Style 2',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '42',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '32',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '20',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '42',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '32',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '20',
						),
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'h2-style-3',
				'name' => 'H2 Style 3',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '32',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '30',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '20',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '32',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '30',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '20',
						),
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'h3-style-1',
				'name' => 'H3 Style 1',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '36',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '24',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '36',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '24',
						),
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'h3-style-2',
				'name' => 'H3 Style 2',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '24',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '16',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '24',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '24',
						),
					),
					'weight'     => '600',
					'spacing'    => array(
						'Desktop' => '0.075',
					),
					'transform'  => 'uppercase',
				),
			),
			array(
				'id'   => 'h4-style-1',
				'name' => 'H4 Style 1',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '20',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '20',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '18',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '24',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '24',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '22',
						),
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'h4-style-2',
				'name' => 'H4 Style 2',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '20',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '20',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '16',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '24',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '24',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '22',
						),
					),
					'weight'     => '300',
				),
			),
			array(
				'id'   => 'h5-font',
				'name' => 'H5 Font',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '18',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '18',
						),
					),
					'weight'     => '500',
				),
			),
			array(
				'id'   => 'h6-font',
				'name' => 'H6 Font',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '12',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '12',
						),
					),
					'transform'  => 'uppercase',
					'spacing'    => array(
						'Desktop' => '0.081',
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => '404-font',
				'name' => '404 Font',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '192',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '128',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '86',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '192',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '128',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '86',
						),
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'iconlist-font',
				'name' => 'Icon List Font',
				'font' => array(
					'font'       => array(
						'label' => 'Heebo',
						'value' => 'Heebo',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '13',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '19.2',
						),
					),
					'weight'     => '300',
				),
			),
			array(
				'id'   => 'nav-font',
				'name' => 'Nav Menu Font',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '12',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '18',
						),
					),
					'transform'  => 'uppercase',
					'spacing'    => array(
						'Desktop' => '0.0625',
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'button-style-1',
				'name' => 'Button Style 1',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '16',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '14',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '16',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '14',
						),
					),
					'transform'  => 'uppercase',
					'spacing'    => array(
						'Desktop' => '0.075',
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'button-style-2',
				'name' => 'Button Style 2',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '14',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '12',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '14',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '12',
						),
					),
					'transform'  => 'uppercase',
					'spacing'    => array(
						'Desktop' => '0.075',
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'button-style-3',
				'name' => 'Button Style 3',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '12',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '12',
						),
					),
					'transform'  => 'uppercase',
					'spacing'    => array(
						'Desktop' => '0.1',
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'text-editor-font',
				'name' => 'Text Editor Font',
				'font' => array(
					'font'       => array(
						'label' => 'Heebo',
						'value' => 'Heebo',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '16',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '14',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '24',
						),
					),
					'weight'     => '300',
				),
			),
			array(
				'id'   => 'testimonial-name-font',
				'name' => 'Testimonial Name',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '18',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '27',
						),
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'testimonial-desg-font',
				'name' => 'Testimonial Designation',
				'font' => array(
					'font'       => array(
						'label' => 'Heebo',
						'value' => 'Heebo',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '14',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '22',
						),
					),
					'weight'     => '300',
				),
			),
			array(
				'id'   => 'testimonial-desc-font',
				'name' => 'Testimonial Description',
				'font' => array(
					'font'       => array(
						'label' => 'Heebo',
						'value' => 'Heebo',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '15',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '27.2',
						),
					),
					'weight'     => '300',
				),
			),
			array(
				'id'   => 'blog-title-one-font',
				'name' => 'Blog Title Style 1',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '24',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '20',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '28',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '22',
						),
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'blog-title-two-font',
				'name' => 'Blog Title Style 2',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '14',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '24',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '18',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '21',
						),
						'Tablet'  => array(
							'unit'  => 'px',
							'point' => '30',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '20',
						),
					),
					'weight'     => '400',
				),
			),
			array(
				'id'   => 'blog-category-font',
				'name' => 'Blog Category',
				'font' => array(
					'font'       => array(
						'label' => 'Heebo',
						'value' => 'Heebo',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '16',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '14',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '16',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '14',
						),
					),
					'weight'     => '600',
				),
			),
			array(
				'id'   => 'iconlist-two-font',
				'name' => 'Icon List Two Font',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '16',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '14',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '24',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '21.6',
						),
					),
					'weight'     => '400',
				),
			),
			array(
				'id'   => 'accordion-title-font',
				'name' => 'Accordion Title Font',
				'font' => array(
					'font'       => array(
						'label' => 'Lato',
						'value' => 'Lato',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '16',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '14',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '24',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '21.6',
						),
					),
					'weight'     => '500',
				),
			),
			array(
				'id'   => 'fun-fact-number-font',
				'name' => 'Fun Fact Number Font',
				'font' => array(
					'font'       => array(
						'label' => 'Heebo',
						'value' => 'Heebo',
						'type'  => 'google',
					),
					'size'       => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '32',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '24',
						),
					),
					'lineHeight' => array(
						'Desktop' => array(
							'unit'  => 'px',
							'point' => '32',
						),
						'Mobile'  => array(
							'unit'  => 'px',
							'point' => '24',
						),
					),
					'weight'     => '600',
				),
			),
		);
	}

	/**
	 * Add Template to Editor.
	 *
	 * @param array $template_files Path to Template File.
	 * @param array $template_type Template Type.
	 *
	 * @return array
	 */
	public function add_template( $template_files, $template_type ) {
		$directory = get_template_directory();

		if ( 'wp_template' === $template_type ) {
			$new_templates = array(
				'about',
				'blog',
				'contact',
				'destination',
				'faq',
				'packages-detail',
				'packages',
				'single-post',
			);

			foreach ( $new_templates as $template ) {
				$template_files[] = array(
					'slug'  => $template,
					'path'  => $directory . "/gutenverse-templates/templates/{$template}.html",
					'theme' => get_template(),
					'type'  => 'wp_template',
				);
			}
		}

		return $template_files;
	}

	/**
	 * Use gutenverse template file instead.
	 *
	 * @param string $template_file Path to Template File.
	 * @param string $theme_slug Theme Slug.
	 * @param string $template_slug Template Slug.
	 *
	 * @return string
	 */
	public function template_path( $template_file, $theme_slug, $template_slug ) {
		$directory = get_template_directory();

		switch ( $template_slug ) {
			case '404':
				return $directory . '/gutenverse-templates/templates/404.html';
			case 'archive':
				return $directory . '/gutenverse-templates/templates/archive.html';
			case 'index':
				return $directory . '/gutenverse-templates/templates/index.html';
			case 'page':
				return $directory . '/gutenverse-templates/templates/page.html';
			case 'search':
				return $directory . '/gutenverse-templates/templates/search.html';
			case 'front-page':
				return $directory . '/gutenverse-templates/templates/front-page.html';
			case 'header':
				return $directory . '/gutenverse-templates/parts/header.html';
			case 'footer':
				return $directory . '/gutenverse-templates/parts/footer.html';
			case 'about':
				return $directory . '/gutenverse-templates/templates/about.html';
			case 'blog':
				return $directory . '/gutenverse-templates/templates/blog.html';
			case 'contact':
				return $directory . '/gutenverse-templates/templates/contact.html';
			case 'destination':
				return $directory . '/gutenverse-templates/templates/destination.html';
			case 'faq':
				return $directory . '/gutenverse-templates/templates/faq.html';
			case 'packages-detail':
				return $directory . '/gutenverse-templates/templates/packages-detail.html';
			case 'packages':
				return $directory . '/gutenverse-templates/templates/packages.html';
			case 'single-post':
				return $directory . '/gutenverse-templates/templates/single-post.html';
		}

		return $template_file;
	}

	/**
	 * Register Block Pattern.
	 */
	public function register_block_patterns() {
		new Block_Patterns();
	}

	/**
	 * Register Block Style.
	 */
	public function register_block_styles() {
		new Block_Styles();
	}

	/**
	 * Register Upgrader.
	 */
	public function register_upgrader() {
		new Upgrader();
	}

	/**
	 * Excerpt Elipsis.
	 *
	 * @param string $more .
	 *
	 * @return string
	 */
	public function excerpt_elipsis( $more ) {
		if ( is_admin() ) {
			return $more;
		}

		return '';
	}

	/**
	 * Excerpt Length.
	 *
	 * @param int $length .
	 *
	 * @return int
	 */
	public function excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		return 100;
	}

	/**
	 * Render Categories.
	 *
	 * @param String $thelist String rendered.
	 *
	 * @return string
	 */
	public function render_categories( $thelist ) {
		return "<div>{$thelist}</div>";
	}

	/**
	 * Notice Closed
	 */
	public function notice_closed() {
		update_user_meta( get_current_user_id(), 'gutenverse_install_notice', 'true' );
		die;
	}

	/**
	 * Show notification to install Gutenverse Plugin.
	 */
	public function notice_install_plugin() {
		// Skip if gutenverse block activated.
		if ( defined( 'GUTENVERSE' ) ) {
			return;
		}

		// Skip if gutenverse pro activated.
		if ( defined( 'GUTENVERSE_PRO' ) ) {
			return;
		}

		$screen = get_current_screen();
		if ( isset( $screen->parent_file ) && 'plugins.php' === $screen->parent_file && 'update' === $screen->id ) {
			return;
		}

		if ( 'true' === get_user_meta( get_current_user_id(), 'gutenverse_install_notice', true ) ) {
			return;
		}

		$button_text = __( 'Check it Now!', 'travey' );
		$button_link = wp_nonce_url( self_admin_url( 'themes.php?page=travey-dashboard' ), 'install-plugin_gutenverse' );
		?>
		<style>
			.install-gutenverse-plugin-notice {
				border: 1px solid #E6E6EF;
				border-radius: 5px;
				padding: 20px;
				position: relative;
				overflow: hidden;
				background-image: url(<?php echo esc_url( TRAVEY_URI . '/assets/images/mockup-2x.png' ); ?>);
				background-position: right top;
				background-repeat: no-repeat;
				border-left: 4px solid #3B57F7;
			}

			.install-gutenverse-plugin-notice .notice-dismiss {
				top: 20px;
				right: 20px;
				padding: 0;
			}

			.install-gutenverse-plugin-notice .notice-dismiss:before {
				content: "\f335";
				font-size: 17px;
				width: 25px;
				height: 25px;
				line-height: 25px;
				border: 1px solid #E6E6EF;
				border-radius: 3px;
			}

			.install-gutenverse-plugin-notice h3 {
				margin-top: 5px;
				font-weight: 700;
				font-size: 18px;
			}

			.install-gutenverse-plugin-notice p {
				font-size: 14px;
				font-weight: 300;
			}

			.install-gutenverse-plugin-notice .gutenverse-bottom {
				display: flex;
				align-items: center;
				margin-top: 20px;
			}

			.install-gutenverse-plugin-notice a {
				text-decoration: none;
				margin-right: 20px;
			}

			.install-gutenverse-plugin-notice a.gutenverse-button {
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
				text-decoration: none;
				cursor: pointer;
				font-size: 12px;
				line-height: 18px;
				border-radius: 17px;
				background: #3B57F7;
				color: #fff;
				padding: 8px 30px;
				font-weight: 300;
			}
		</style>
		<script>
		jQuery( function( $ ) {
			$( 'div.notice.install-gutenverse-plugin-notice' ).on( 'click', 'button.notice-dismiss', function( event ) {
				event.preventDefault();

				$.post( ajaxurl, {
					action: 'travey_set_admin_notice_viewed'
				} );
			} );
		} );
		</script>
		<div class="notice is-dismissible install-gutenverse-plugin-notice">
			<div class="gutenverse-notice-inner">
				<div class="gutenverse-notice-content">
					<h3><?php esc_html_e( 'Thank you for installing Travey!', 'travey' ); ?></h3>
					<p><?php esc_html_e( 'Travey theme work best with Gutenverse plugin. By installing Gutenverse plugin you may access Travey templates built with Gutenverse and get access to more than 40 free blocks.', 'travey' ); ?></p>
					<div class="gutenverse-bottom">
						<a class="gutenverse-button" href="<?php echo esc_url( $button_link ); ?>">
							<?php echo esc_html( $button_text ); ?>
						</a>
						<a target="__blank" href="https://gutenverse.com/">
							<?php esc_html_e( 'More Info', 'travey' ); ?>
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Add Menu
	 */
	public function admin_menu() {
		add_theme_page(
			'Travey Template',
			'Travey Template',
			'manage_options',
			'travey-dashboard',
			array( $this, 'load_travey_dashboard' ),
			1
		);
	}

	/**
	 * Travey Template page
	 */
	public function load_travey_dashboard() {
		?>
			<?php if ( defined( 'GUTENVERSE_VERSION' ) && version_compare( GUTENVERSE_VERSION, '1.1.1', '<=' ) ) { ?>
			<div class="notice is-dismissible">
				<span>
				<?php echo esc_html_e( 'Please install newer version of Gutenverse plugin! (v1.1.2 and above)', 'travey' ); ?>
				</span>
			</div>
			<?php } ?>
			<?php do_action( 'gutenverse_after_install_notice' ); ?>
			<div id="gutenverse-theme-dashboard"></div>
		<?php
	}

	/**
	 * Add theme template
	 */
	public function add_theme_templates() {
		add_editor_style( 'block-style.css' );
	}

	/**
	 * Custom Logo Parameter
	 */
	public function custom_logo() {
		return array(
			'height'               => 40,
			'width'                => 200,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'site-title', 'site-description' ),
			'unlink-homepage-logo' => true,
		);
	}

	/**
	 * Theme setup.
	 */
	public function theme_setup() {
		load_theme_textdomain( 'travey', TRAVEY_DIR . '/languages' );

		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', $this->custom_logo() );
		add_theme_support( 'editor-styles' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'travey' ),
			)
		);

		add_editor_style(
			array(
				'./assets/css/core-add.css',
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );
	}

	/**
	 * Set the content width.
	 */
	public function content_width() {
		$GLOBALS['content_width'] = apply_filters( 'gutenverse_content_width', 960 );
	}

	/**
	 * Enqueue scripts and styles.
	 */
	public function enqueue_scripts() {
		wp_enqueue_style( 'travey-style', get_stylesheet_uri(), array(), TRAVEY_VERSION );
		wp_add_inline_style( 'travey-style', $this->load_font_styles() );

		// enqueue additional core css.
		wp_enqueue_style( 'travey-core-add', TRAVEY_URI . '/assets/css/core-add.css', array(), TRAVEY_VERSION );

		// enqueue core animation.
		wp_enqueue_script( 'travey-animate', TRAVEY_URI . '/assets/js/index.js', array(), TRAVEY_VERSION, true );
		wp_enqueue_style( 'travey-animate', TRAVEY_URI . '/assets/css/animation.css', array(), TRAVEY_VERSION );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	/**
	 * Enqueue scripts and styles.
	 */
	public function dashboard_scripts() {
		$screen = get_current_screen();

		wp_enqueue_style(
			'travey-notice',
			TRAVEY_URI . '/assets/css/notice.css',
			array(),
			TRAVEY_URI
		);

		if ( $screen->id === 'appearance_page_travey-dashboard' ) {
			// enqueue css.
			wp_enqueue_style(
				'travey-dashboard',
				TRAVEY_URI . '/assets/css/dashboard.css',
				array(),
				TRAVEY_VERSION
			);

			// enqueue js.
			wp_enqueue_script(
				'travey-dashboard',
				TRAVEY_URI . '/assets/js/dashboard.js',
				array( 'wp-api-fetch' ),
				TRAVEY_VERSION,
				true
			);

			wp_localize_script( 'travey-dashboard', 'GutenThemeConfig', $this->theme_config() );
		}
	}

	/**
	 * Register static data to be used in theme's js file
	 */
	public function theme_config() {
		return array(
			'images'       => TRAVEY_URI . '/assets/img/',
			'title'        => esc_html__( 'Get Advanced Templates for Free!', 'travey' ),
			'description'  => esc_html__( 'By just installing and activate Gutenverse plugin you will be able to use this theme\'s advanced templates. With Gutenverse plugin installed, you gain access to both advance version of templates and block patterns for free which all built using Gutenverse blocks.', 'travey' ),
			'title2'       => esc_html__( 'Comparison using Gutenverse vs WordPress Core', 'travey' ),
			'title3'       => esc_html__( 'Benefits for Installing Travey\'s Gutenverse Version', 'travey' ),
			'description3' => esc_html__( 'You can customize your website instantly with powerful and lightweight add-ons plugin for Gutenberg/FSE.', 'travey' ),
			'note'         => esc_html__( 'Note: Clicking the button will both install and activate Gutenverse plugin and templates for this theme. Please first backup your current templates if you have any changes to it.', 'travey' ),
			'note2'        => esc_html__( 'Note 2: (Gutenverse version 1.6.0 & above required!)', 'travey' ),
			'demo'         => esc_html__( 'View Live Demo →', 'travey' ),
			'demoUrl'      => esc_url( 'https:/gutenverse.com/demo?name=travey' ),
			'install'      => '',
			'installText'  => esc_html__( 'Install Gutenverse Plugin', 'travey' ),
			'activateText' => esc_html__( 'Activate Gutenverse Plugin', 'travey' ),
			'doneText'     => esc_html__( 'Gutenverse Plugin Installed', 'travey' ),
			'pages'        => array(
				'home'        => TRAVEY_URI . '/assets/img/page-home.webp',
				'about'       => TRAVEY_URI . '/assets/img/page-about.webp',
				'destination' => TRAVEY_URI . '/assets/img/page-destination.webp',
				'package'     => TRAVEY_URI . '/assets/img/page-package.webp',
				'blog'        => TRAVEY_URI . '/assets/img/page-blog.webp',
			),
			'table'        => array(
				'titles'   => array(
					null,
					esc_html__( 'Gutenverse (FREE)', 'travey' ),
					esc_html__( 'WordPress Core', 'travey' ),
				),
				'features' => array(
					esc_html__( 'Advanced Templates', 'travey' ),
					esc_html__( 'Responsive Styling', 'travey' ),
					esc_html__( 'Variety of Fonts', 'travey' ),
					esc_html__( 'Icon Library', 'travey' ),
					esc_html__( 'Animation Effects', 'travey' ),
					esc_html__( 'Form Builder', 'travey' ),
				),
			),
			'benefits'     => array(
				'title'    => esc_html__( 'Features', 'travey' ),
				'features' => array(
					esc_html__( 'Modern and clean design', 'travey' ),
					esc_html__( '5+ Ready to use templates', 'travey' ),
					esc_html__( '15+ template parts', 'travey' ),
					esc_html__( 'Fully responsive layout', 'travey' ),
					esc_html__( 'Fully customizable', 'travey' ),
				),
			),
		);
	}

	/**
	 * Load Font Styles
	 */
	public function load_font_styles() {
		$font_families = array(
			'Lato:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600',
			'Heebo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600',
		);

		$fonts_url = add_query_arg(
			array(
				'family'  => implode( '&family=', $font_families ),
				'display' => 'swap',
			),
			'https://fonts.googleapis.com/css2'
		);

		$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ), 'woff' );

		return "@import url({$contents});";
	}

	/**
	 * Load Editor Styles
	 */
	public function load_editor_styles() {
		wp_add_inline_style( 'wp-block-library', $this->load_font_styles() );
	}
}
