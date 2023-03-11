<?php
require_once  'blockpress.php';
require_once  'settings.php';

add_action('init', 'blockpress_connect_admin_menu');
function blockpress_connect_admin_menu() {
  if ( class_exists( 'BlockpressMenuMain' ) ) {
    new BlockpressMenuMain();
  }

  if ( class_exists( 'BlockpressMenuSettings' ) ) {
    new BlockpressMenuSettings();
  }
}

function blockpress_admin_assets($hook) {
// admin settings scripts and styles
  wp_register_script( 'blockpress_adminsettings',  BLOCKPRESS_THEME_DIR . '/inc/admin_menu/assets/settings.js', array(), '1', true );
  wp_register_style( 'blockpress_adminsettings',  BLOCKPRESS_THEME_DIR . '/inc/admin_menu/assets/settings.css', array(), '1' );
  wp_localize_script(
    'blockpress_adminsettings',
    'blockpress_params',
    array(
      'ajaxUrl' => admin_url('admin-ajax.php')
    )
  );
}
add_action( 'admin_enqueue_scripts', 'blockpress_admin_assets' );

