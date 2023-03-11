<?php
/**
 * WeCodeArt Framework
 *
 * WARNING: This file is part of the core WeCodeArt Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package		WeCodeArt Framework
 * @subpackage  Gutenberg CSS Frontend
 * @copyright   Copyright (c) 2022, WeCodeArt Framework
 * @since		5.4.8
 * @version		5.7.1
 */

namespace WeCodeArt\Gutenberg\Modules\Styles\Blocks;

defined( 'ABSPATH' ) || exit();

use WeCodeArt\Singleton;
use WeCodeArt\Gutenberg\Modules\Styles\Blocks as Base;
use function WeCodeArt\Functions\get_prop;

/**
 * Block CSS Processor
 */
class Search extends Base {
	/**
	 * Parses an output and creates the styles array for it.
	 *
	 * @return 	null
	 */
	protected function process_extra() {		
		$this->output 		= []; // Reset output		
		$output 			= [];
		$output['element'] 	= [
			join( ' ', [ $this->element, '.wp-block-search__input' ] ),
			join( ' ', [ $this->element, '.wp-block-button__link' ] )
		];

		// Inline Style
		if( ! in_array( get_prop( $this->attrs, 'width' ), [ 25, 50, 75, 100 ] ) ) {
			$this->output[] = wp_parse_args( [
				'element'	=> join( ' ', [ $this->element, '.wp-block-search__fields' ] ),
				'property' 	=> 'width',
				'value'	  	=> get_prop( $this->attrs, 'width' ),
				'units'		=> get_prop( $this->attrs, 'widthUnit' )
			], $output );
		}

		if( $css_style = get_prop( $this->attrs, 'style' ) ) {
			// Border
			if( $border = get_prop( $css_style, 'border', [] ) ) {
				// Handle individual borders in upcoming WP 6.1
				$directions = wp_array_slice_assoc( $border, [ 'top', 'left', 'right', 'bottom' ] );

				foreach( $directions as $dir => $value ) {
					$color = get_prop( $value, 'color' );
					if ( strpos( $color, 'var:preset|color' ) !== false ) {
						$color = sprintf( 'var(--wp--preset--color--%s)', substr( $color, strrpos( $color, '|' ) + 1 ) );
					}

					$this->output[] = wp_parse_args( [
						'property' 	=> 'border-' . $dir,
						'value'	  	=> trim( sprintf(
							'%s %s %s',
							get_prop( $value, 'width' ),
							get_prop( $value, 'style', 'solid' ),
							$color
						) )
					], $output );
				}

				if ( $value = get_prop( $border, 'width' ) ) {
					$this->output[] = wp_parse_args( [
						'property' 	=> 'border-width',
						'value'	  	=> $value
					], $output );
				}

				if ( $value = get_prop( $border, 'color' ) ) {
					$this->output[] = wp_parse_args( [
						'property' 	=> 'border-color',
						'value'	  	=> $value
					], $output );
				}

				if ( $value = get_prop( $border, 'radius' ) ) {
					if ( is_array( $value ) ) {
						// We have individual border radius corner values.
						foreach ( $value as $key => $radius ) {
							// Convert CamelCase corner name to kebab-case.
							$corner   = strtolower( preg_replace( '/(?<!^)[A-Z]/', '-$0', $key ) );
							$this->output[] = wp_parse_args( [
								'property' 	=> sprintf( 'border-%s-radius', $corner ),
								'value'	  	=> $radius,
							], $output );
						}
					} else {
						$this->output[] = wp_parse_args( [
							'property' 	=> 'border-radius',
							'value'	  	=> $value,
							'units'		=> is_numeric( $value ) ? 'px' : null
						], $output );
					}
				}
			}

			// Colors
			if ( $color = get_prop( $css_style, 'color' ) ) {
				// Text
				if ( $value = get_prop( $color, 'text' ) ) {
					$this->output[] = wp_parse_args( [
						'element'	=> join( ' ', [ $this->element, '.wp-block-button__link' ] ),
						'property' 	=> 'color',
						'value'	  	=> $value
					], $output );
				}
				
				// Background
				if ( $value = get_prop( $color, 'background' ) ) {
					$this->output[] = wp_parse_args( [
						'element'	=> join( ' ', [ $this->element, '.wp-block-button__link' ] ),
						'property' 	=> 'background-color',
						'value'	  	=> $value
					], $output );
				}

				// Gradient
				if ( $value = get_prop( $color, 'gradient' ) ) {
					$this->output[] = wp_parse_args( [
						'element'	=> join( ' ', [ $this->element, '.wp-block-button__link' ] ),
						'property' 	=> 'background-image',
						'value'	  	=> $value
					], $output );
				}
			}
		}
	}
}