<?php

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Solarta for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */
require_once ONA_DIR . '/inc/tgmpa/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'ona_tgmpa_register_required_plugins' );
/**
 * TGMPA Plugins
 */
function ona_tgmpa_register_required_plugins()
{
    $plugins = array( array(
        'name'     => 'MailChimp for WordPress',
        'slug'     => 'mailchimp-for-wp',
        'required' => false,
    ) );
    $config = array(
        'id'           => 'tgmpa',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => true,
        'message'      => '',
        'strings'      => array(
        'page_title'                     => esc_html__( 'Install Required Plugins', 'ona' ),
        'menu_title'                     => esc_html__( 'Install Plugins', 'ona' ),
        'installing'                     => esc_html__( 'Installing Plugin: %s', 'ona' ),
        'updating'                       => esc_html__( 'Updating Plugin: %s', 'ona' ),
        'oops'                           => esc_html__( 'Something went wrong with the plugin API.', 'ona' ),
        'return'                         => esc_html__( 'Return to Required Plugins Installer', 'ona' ),
        'plugin_activated'               => esc_html__( 'Plugin activated successfully.', 'ona' ),
        'activated_successfully'         => esc_html__( 'The following plugin was activated successfully:', 'ona' ),
        'plugin_already_active'          => esc_html__( 'No action taken. Plugin %1$s was already active.', 'ona' ),
        'plugin_needs_higher_version'    => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'ona' ),
        'complete'                       => esc_html__( 'All plugins installed and activated successfully. %1$s', 'ona' ),
        'dismiss'                        => esc_html__( 'Dismiss this notice', 'ona' ),
        'notice_cannot_install_activate' => esc_html__( 'There are one or more required or recommended plugins to install, update or activate.', 'ona' ),
        'contact_admin'                  => esc_html__( 'Please contact the administrator of this site for help.', 'ona' ),
        'nag_type'                       => 'updated',
    ),
    );
    tgmpa( $plugins, $config );
}
