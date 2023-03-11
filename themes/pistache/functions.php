<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pistache
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */

if (!function_exists('pistache_support')) {
	function pistache_support()
	{
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');
	}
}

add_action('after_setup_theme', 'pistache_support');


if (!function_exists('pistache_styles')) {
	function pistache_styles()
	{

		wp_enqueue_style(
			'pistache-style',
			get_template_directory_uri() . '/assets/theme.css',
			[],
			wp_get_theme()->get('Version')

		);
	}
}


add_action('wp_enqueue_scripts', 'pistache_styles');

/* Bg color Editor Issue  */


function pistache_editorVisualStyle()
{
?>
<style>
.editor-styles-wrapper {
    max-width: 70% !important;
    margin-inline: auto !important;
}

.edit-site-visual-editor {
    background-color: #ffffff !important;
}
</style>
<?php
}

add_action('admin_head',  'pistache_editorVisualStyle');