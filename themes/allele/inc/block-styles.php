<?php
/**
 * Allele: Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

/**
 * Registers block styles.
 *
 * @since Allele 1.0.0
 */
function allele_register_block_styles() {

  // Group Block: No Spacing
  register_block_style(
  'core/group',
    array(
      'name'  => 'allele-no-spacing',
      'label' => esc_html__( 'No Spacing', 'allele' ),
    )
  );

  // Group Block: Box Shadow
  register_block_style(
  'core/group',
    array(
      'name'  => 'allele-box-shadow',
      'label' => esc_html__( 'Box Shadow', 'allele' ),
    )
  );

  // List Block: Arrow
  register_block_style(
  'core/list',
    array(
      'name'  => 'allele-arrow',
      'label' => esc_html__( 'Arrow', 'allele' ),
    )
  );

  // List Block: Arrow Fill
  register_block_style(
  'core/list',
    array(
      'name'  => 'allele-arrow-fill',
      'label' => esc_html__( 'Arrow Fill', 'allele' ),
    )
  );

  // List Block: Check
  register_block_style(
  'core/list',
    array(
      'name'  => 'allele-check',
      'label' => esc_html__( 'Check', 'allele' ),
    )
  );

  // List Block: Check Fill
  register_block_style(
  'core/list',
    array(
      'name'  => 'allele-check-fill',
      'label' => esc_html__( 'Check Fill', 'allele' ),
    )
  );

  // Image Block: Fancy
  register_block_style(
  'core/image',
    array(
      'name'  => 'allele-fancy',
      'label' => esc_html__( 'Fancy', 'allele' ),
    )
  );

  // Image Block: Shadow
  register_block_style(
  'core/image',
    array(
      'name'  => 'allele-shadow',
      'label' => esc_html__( 'Shadow', 'allele' ),
    )
  );

  // Image Block: Comic
  register_block_style(
  'core/image',
    array(
      'name'  => 'allele-comic',
      'label' => esc_html__( 'Comic', 'allele' ),
    )
  );

  // Image Block: Comic Right
  register_block_style(
  'core/image',
    array(
      'name'  => 'allele-comic-right',
      'label' => esc_html__( 'Comic Right', 'allele' ),
    )
  );

  // Image Block: Comic Left
  register_block_style(
  'core/image',
    array(
      'name'  => 'allele-comic-left',
      'label' => esc_html__( 'Comic Left', 'allele' ),
    )
  );

  // Query Pagination Block: Box Pagination Alpha
  register_block_style(
  'core/query-pagination',
    array(
      'name'  => 'allele-box-pagination-alpha',
      'label' => esc_html__( 'Alpha', 'allele' ),
    )
  );

  // Post Template Block: Query Loop Alternate
  register_block_style(
    'core/post-template',
    array(
      'name'  => 'allele-query-loop-alternate',
      'label' => esc_html__( 'Alternate', 'allele' ),
    )
  );

  // Group Block: Box Shadow
  register_block_style(
    'core/navigation',
    array(
      'name'  => 'allele-navigation-alpha',
      'label' => esc_html__( 'Alpha', 'allele' ),
    )
  );
}
add_action( 'init', 'allele_register_block_styles' );
