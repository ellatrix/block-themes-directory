<?php
/**
 * Functions and definitions
 *
 * @package coming-soon-block
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @since 1.0.0
 */

register_block_pattern_category(
    'coming-soon-block-patterns',
    array( 'label' => __('coming-soon-block-patterns', 'coming-soon-block') )
);

/**
 * Registers block patterns.
 *
 * @since 1.0.0
 *
 * @return void
 */
function Coming_Soon_Block_register_block_patterns()
{
    // Array of block pattern names.
    $block_patterns = array(
        'hero-image',
        '404-section'
    );

    foreach ($block_patterns as $block_pattern) {
        $pattern_file = get_theme_file_path('block-patterns/' . $block_pattern . '.php');
        register_block_pattern(
            'coming-soon-block/' . $block_pattern,
            include $pattern_file
        );
    }
}
add_action('init', 'Coming_Soon_Block_register_block_patterns', 9);

/**
 * Check if suggested plugins are active.
 *
 * @return mixed
 */
function Coming_Soon_Block_Are_Plugins_active()
{
    $csbt_plugin_availability=[1,1,1];
    if (!class_exists('Popup_Maker')) {
        $csbt_plugin_availability[0] = 0;
    }
    if (!class_exists('Countdown_Helper')) {
        $csbt_plugin_availability[1] = 0;
    }
    if (!function_exists('create_outermost_icon_block_init')) {
        $csbt_plugin_availability[2] = 0;
    }
    if ($csbt_plugin_availability[0]==0 || $csbt_plugin_availability[1]==0 || $csbt_plugin_availability[2]==0) {
        add_action(
            'admin_notices',
            function () use ($csbt_plugin_availability) {
                ?>
                <div class="notice notice-warning is-dismissible">
                    <?php
                    if (isset($csbt_plugin_availability)) {
                        if (!$csbt_plugin_availability[0]) {
                            printf('<p style="' . esc_attr('display: inline-block;') . '">%2$s</p> <a href="' . esc_url('https://wordpress.org/plugins/popup-maker/') . '" target="' . esc_attr('_blank') . '">Install and Activate Pupop maker</a>', esc_attr('csbt'), esc_html__('Coming soon blog theme recommends Popup maker plugin tobe active.', 'coming-soon-block'));
                        }
                        if (!$csbt_plugin_availability[1]) {
                            printf('<p style="' . esc_attr('display: inline-block;') . '">%2$s</p> <a href="' . esc_url('https://wordpress.org/plugins/countdown-block/') . '" target="' . esc_attr('_blank') . '">Install and Activate Countdown block</a>', esc_attr('csbt'), esc_html__('Coming soon blog theme recommends Countdown block plugin to be active.', 'coming-soon-block'));
                        }
                        if (!$csbt_plugin_availability[2]) {
                            printf('<p style="' . esc_attr('display: inline-block;') . '">%2$s</p> <a href="' . esc_url('https://wordpress.org/plugins/icon-block/') . '" target="' . esc_attr('_blank') . '">Install and Activate The icon block</a>', esc_attr('csbt'), esc_html__('Coming soon blog theme recommends The icon block plugin to be active.', 'coming-soon-block'));
                        }
                    }
                ?>
                </div>
                <?php
            }
        );
    }
}
add_action('after_setup_theme', 'Coming_Soon_Block_Are_Plugins_active');

/**
 * Add theme support for block styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function Coming_Soon_Block_Theme_setup()
{
    add_theme_support('wp-block-styles');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'Coming_Soon_Block_Theme_setup');

/**
 * Enqueue the style files.
 *
 * @since 1.0.0
 *
 * @return mixed
 */
function Coming_Soon_Block_styles()
{
    wp_enqueue_style(
        'coming-soon-block-style',
        get_stylesheet_uri(),
        '',
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'Coming_Soon_Block_styles');
