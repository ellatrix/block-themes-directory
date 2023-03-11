<?php
	/**
 * Elyn: Block Patterns
 *
 * @since 1.0
 */
if (!function_exists('elyn_register_block_patterns')) {
	function elyn_register_block_patterns()
	{
		if (function_exists('register_block_pattern_category')) {
			register_block_pattern_category('elyn-headers', [
				'label' => __('Elyn Headers', 'elyn'),
			]);
			register_block_pattern_category('elyn-blog', [
				'label' => __('Elyn Blog', 'elyn'),
			]);			
			register_block_pattern_category('elyn-general', [
				'label' => __('Elyn General', 'elyn'),
			]);
			register_block_pattern_category('elyn-footers', [
				'label' => __('Elyn Footers', 'elyn'),
			]);
		}

		if (function_exists('register_block_pattern')) {
			
			$block_patterns = [
				'blog-grid', 
				'blog-centered', 
				'header-default', 			
				'general-hero',
				'general-boxed-media-text', 
				'general-centered-text', 
				'general-latest-posts', 
				'general-call-to-action', 
			];
			foreach ($block_patterns as $block_pattern) {
				register_block_pattern('elyn/' . $block_pattern, require __DIR__ . '/patterns/' . $block_pattern . '.php');
			}
		}
	}
}
add_action('init', 'elyn_register_block_patterns', 9);
