<?php
/**
 * WeCodeArt Framework
 *
 * WARNING: This file is part of the core WeCodeArt Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package		WeCodeArt Framework
 * @subpackage  Gutenberg Patterns
 * @copyright   Copyright (c) 2022, WeCodeArt Framework
 * @since		5.0.0
 * @version		5.4.5
 */

namespace WeCodeArt\Gutenberg\Modules;

defined( 'ABSPATH' ) || exit();

use WeCodeArt\Singleton;
use WeCodeArt\Integration;
use WeCodeArt\Config\Traits\Asset;
use function WeCodeArt\Functions\get_prop;

/**
 * Handles Gutenberg Theme Patterns Functionality.
 */
class Patterns implements Integration {

	use Singleton;
	use Asset;

	/**
	 * Folder.
	 *
	 * @var string
	 */
	const FOLDER = 'patterns';

	/**
	 * The indexed patterns.
	 *
	 * @var 	array
	 */
	private $patterns	= [];

	/**
	 * Get Conditionals
	 *
	 * @return void
	 */
	public static function get_conditionals() {
		wecodeart( 'conditionals' )->set( [
			'with_block_patterns' => Patterns\Condition::class,
		] );

		return [ 'with_block_patterns' ];
	}

	/**
	 * Register Hooks
	 *
	 * @since 	5.0.0
	 *
	 * @return 	void
	 */
	public function register_hooks() {
		// Register.
		$this->register_categories();
		$this->register_patterns();
	}

	/**
	 * Register block patterns categories.
	 *
	 * @return 	void
	 */
	public function register_categories() {
		$query = $this->get_categories();

		if( empty( $query ) ) return;

		( new Patterns\Categories( $query ) )->register();
	}

	/**
	 * Get Categories
	 *
	 * @return array
	 */
	public function get_categories() {
		$themes = [
			get_stylesheet() => get_prop( wecodeart_config( 'paths' ), 'child' ),
			get_template()   => get_prop( wecodeart_config( 'paths' ), 'directory' ),
		];

		$data = [];
		foreach ( $themes as $theme_slug => $theme_dir ) {
			$file_path = wp_normalize_path( $theme_dir . DIRECTORY_SEPARATOR . self::FOLDER . DIRECTORY_SEPARATOR . '_categories.json' );
			if ( file_exists( $file_path ) ) {
				$data = array_merge( $data, json_decode( file_get_contents( $file_path ), true ) );
			}
		}

		return $data;
	}

	/**
	 * Register block patterns.
	 *
	 * @return 	void
	 */
	public function register_patterns() {
		$query = $this->get_files();

		if( empty( $query ) ) return;

		$theme_dir 	= wecodeart_config( 'paths' )['directory'];
		$index_path = wp_normalize_path( $theme_dir . DIRECTORY_SEPARATOR . self::FOLDER . DIRECTORY_SEPARATOR . '_index.json' );

		if ( file_exists( $index_path ) ) {
			$this->patterns = json_decode( file_get_contents( $index_path ), true );
		}

		foreach( $query as $pattern ) $this->get_pattern_from_file( $pattern['slug'] );
	}

	/**
	 * Link Reusable blocks to Appearance
	 *
	 * @return void
	 */
	public function get_paths( $base_directory ) {
		$path_list = [];
		if ( file_exists( $base_directory ) ) {
			$nested_files      = new \RecursiveIteratorIterator( new \RecursiveDirectoryIterator( $base_directory ) );
			$nested_html_files = new \RegexIterator( $nested_files, '/^.+\.html$/i', \RecursiveRegexIterator::GET_MATCH );
			foreach ( $nested_html_files as $path => $file ) {
				$path_list[] = $path;
			}
		}
		return $path_list;
	}

	/**
	 * Retrieves the template files from  the theme.
	 *
	 * @return 	array 	Template.
	 */
	public function get_files() {
		$themes = [
			get_stylesheet() => get_prop( wecodeart_config( 'paths' ), 'child' ),
			get_template()   => get_prop( wecodeart_config( 'paths' ), 'directory' ),
		];

		$template_files = [];
		foreach ( $themes as $theme_slug => $theme_dir ) {
			$theme_files = $this->get_paths( $theme_dir . DIRECTORY_SEPARATOR . self::FOLDER );
			foreach ( $theme_files as $file ) {
				$template_slug      = substr(
					$file,
					// Starting position of slug.
					strpos( $file, self::FOLDER . DIRECTORY_SEPARATOR ) + 1 + strlen( self::FOLDER ),
					// Subtract ending '.html'.
					-5
				);

				$template_files[] = [
					'slug'  => $template_slug,
					'path'  => $file,
					'theme' => $theme_slug,
				];
			}
		}
		
		return $template_files;
	}

	/**
	 * Retrieves the template file from the theme for a given slug.
	 *
	 * @access 	private
	 *
	 * @param 	string 	$slug template slug.
	 *
	 * @return 	array 	Template.
	 */
	public function get_file( $slug ) {
		$themes = [
			get_stylesheet() => get_prop( wecodeart_config( 'paths' ), 'child' ),
			get_template()   => get_prop( wecodeart_config( 'paths' ), 'directory' ),
		];

		foreach ( $themes as $theme_slug => $theme_dir ) {
			$file_path = wp_normalize_path( $theme_dir . DIRECTORY_SEPARATOR . self::FOLDER . DIRECTORY_SEPARATOR . $slug . '.html' );
			
			if ( file_exists( $file_path ) ) {
				return [
					'slug'  => $slug,
					'path'  => $file_path,
					'theme' => $theme_slug
				];
			}
		}

		return null;
	}

	/**
	 * Build a unified template object based on a theme file.
	 *
	 * @param 	array 	$file 	Theme file.
	 *
	 * @return 	Patterns\Pattern Template.
	 */
	public function register_from_file( $file ) {
		$template	= file_get_contents( $file['path'] );

		$args = [
			'title' 	=> ucfirst( implode( ' ', explode( '-', $file['slug'] ) ) ),
			'content' 	=> $template,
			'slug'		=> $file['slug'],
			'theme'		=> $file['theme'],
		];

		$has_json = current( wp_list_filter( $this->patterns, [ 'slug' => $file['slug'] ] ) );
		
		if( $has_json ) {
			$args = wp_parse_args( $has_json, $args );
		}

		$template = new Patterns\Pattern( $args );

		return $template->register();
	}

	/**
	 * Retrieves a single unified template object using its id.
	 * Retrieves the file template.
	 *
	 * @param 	string 	$slug Template unique identifier (example: template_slug).
	 *
	 * @return 	Patterns\Pattern|null File template.
	 */
	public function get_pattern_from_file( $slug ) {
		$template_file = $this->get_file( $slug );

		if ( null !== $template_file ) {
			return $this->register_from_file( $template_file );
		}

		return null;
	}
}
