<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function molten_support()
{

    // Add support for block styles.
    add_theme_support('wp-block-styles');

    // Enqueue editor styles.
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'molten_support');

function molten_styles()
{
    // Register theme stylesheet.
    $theme_version = wp_get_theme()->get('Version');

    $version_string = is_string($theme_version) ? $theme_version : false;
    wp_register_style(
        'molten-style',
        get_template_directory_uri() . '/style.css',
        [],
        $version_string
    );

    // Enqueue theme stylesheet.
    wp_enqueue_style('molten-style');
}
add_action('wp_enqueue_scripts', 'molten_styles');

function molten_preload_webfonts()
{
?>
    <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/fonts/source-sans-pro-regular.woff2')); ?>" as="font" crossorigin>
<?php
}
add_action('wp_head', 'molten_preload_webfonts');

function molten_register_block_patterns()
{
    $block_pattern_categories = [
        'molten-coming-soon' => ['label' => __('Molten Coming Soon', 'molten')],
        'molten-cta'         => ['label' => __('Molten Call To Actions', 'molten')],
        'molten-gallery'     => ['label' => __('Molten Gallery', 'molten')],
        'molten-hero'        => ['label' => __('Molten Hero', 'molten')],
        'molten-location'    => ['label' => __('Molten Location', 'molten')],
        'molten-menu'        => ['label' => __('Molten Menu', 'molten')],
    ];

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'molten_register_block_patterns');
