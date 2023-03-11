<?php

/**
 * Enqueues scripts and styles.
 */
function zenithwp_scripts()
{

    // Stylesheet.
    wp_enqueue_style('zenithwp-min-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.0');

    // Fontawesome
    wp_enqueue_style('zenithwp-fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'zenithwp_scripts');


/**
 * Remove excerpt text […]
 */
function zenithwp_remove_excerpt_text_more($more)
{
    if (is_admin()) {
        return $more;
    }
}
add_filter('excerpt_more', 'zenithwp_remove_excerpt_text_more');

/**
 * Enqueue block editor style
 */
function zenithwp_editor_style()
{
    wp_enqueue_style('zenithwp-editor-style', get_stylesheet_directory_uri() . "/assets/css/editor.min.css", false, '1.0', 'all');
}

add_action('enqueue_block_editor_assets', 'zenithwp_editor_style');

add_action('init', function () {
    register_block_style('core/separator', [
        'name' => 'pelangi',
        'label' => __('Rainbow', 'zenithwp'),
    ]);

    register_block_style('core/table', [
        'name' => 'elegant',
        'label' => __('Elegant', 'zenithwp'),
    ]);

    register_block_pattern(
        'zenithwp/fixlabel',
        array(
            'title'       => __('Fix Label', 'zenithwp'),
            'description' => _x('Just fix label', 'Block pattern description', 'zenithwp'),
            'content'     => __('Label Fix', 'zenithwp'),
        )
    );
});

/**
 * Registerter pattern categories
 */
function zenithwp_register_my_pattern_categories()
{
    register_block_pattern_category(
        'zenithwp',
        array('label' => __('Zenithwp', 'zenithwp'))
    );
}
add_action('init', 'zenithwp_register_my_pattern_categories');
