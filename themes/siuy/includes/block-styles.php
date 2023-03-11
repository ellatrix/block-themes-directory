<?php
/**
 * Block styles.
 *
 * @link          https://mypreview.github.io/siuy
 * @author        MyPreview (Github: @mahdiyazdani, @gooklani, @mypreview)
 * @since         2.0.0
 *
 * @package       siuy
 * @subpackage    siuy/includes
 * @phpcs:disable WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
 */

namespace Siuy\Includes\Block_Styles;

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

/**
 * Register block styles
 *
 * @since     2.0.0
 * @return    void
 */
function styles(): void {
	$styles = apply_filters(
		'siuy_block_styles',
		array(
			array(
				'block' => 'core/categories',
				'name'  => 'two-columns',
				'label' => _x( 'Two columns', 'block style', 'siuy' ),
			),
			array(
				'block' => 'core/navigation',
				'name'  => 'main-navigation',
				'label' => _x( 'Main navigation', 'block style', 'siuy' ),
			),
			array(
				'block' => 'core/columns',
				'name'  => 'stacked-on-tablet',
				'label' => _x( 'Stacked on tabet', 'block style', 'siuy' ),
			),
			array(
				'block' => 'core/heading',
				'name'  => 'vertical-on-mobile',
				'label' => _x( 'Vertical on mobile', 'block style', 'siuy' ),
			),
			array(
				'block' => 'core/latest-posts',
				'name'  => 'separator-between',
				'label' => _x( 'Separator between', 'block style', 'siuy' ),
			),
		)
	);

	foreach ( $styles as $properties ) {
		if ( ! \WP_Block_Styles_Registry::get_instance()->is_registered( $properties['block'], $properties['name'] ) ) {
			\register_block_style( $properties['block'], $properties );
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\styles' );
