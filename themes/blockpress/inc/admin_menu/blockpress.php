<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

if (!class_exists('BlockpressMenuMain')) {

  class BlockpressMenuMain
  {
    public function __construct()
    {
      add_action('admin_menu', array($this, 'blockpress_admin_page'));
    }

    public function blockpress_admin_page() {

      $parent_slug = 'blockpress_dashboard';

      add_menu_page(
        'Blockpress',
        'Blockpress',
        'manage_options',
        $parent_slug,
        array($this, 'welcome_page'),
        '',
        20
      );
    }

    public function welcome_page()
    {
      ?>
      <div class="wrap gspb_welcome_div_container">
        <style>
            .wrap {
                background: white;
                max-width: 900px;
                margin: 2.5em auto;
                border: 1px solid #dbdde2;
                box-shadow: 0 10px 20px #ececec;
                text-align: center
            }

            .wrap .notice,
            .wrap .error {
                display: none
            }

            .wrap h2 {
                font-size: 1.5em;
                margin-bottom: 1em;
                font-weight: bold
            }

            .wrap h1 {
                text-align: left;
                padding: 15px 20px;
                margin: -1px -1px 0 -1px;
                font-size: 13px;
                font-weight: bold;
                text-transform: uppercase;
                box-shadow: 0 3px 8px rgb(0 0 0 / 5%);
            }

            .wrap .fs-notice {
                margin: 0 25px 25px 25px !important
            }

            .wrap .fs-plugin-title {
                display: none !important
            }

            .gs-padd {
                padding: 25px
            }

            .gs-introtext {
                font-size: 14px;
                max-width: 500px;
                margin: 0 auto 30px auto;
            }

            .gs-padd video {
                max-width: 200px;
                margin-bottom: 15px;
            }
        </style>
        <h1><?php esc_html_e("Getting Started", 'blockpress'); ?></h1>
        <div class="gs-padd">
          <video autoplay loop muted poster="<?php echo BLOCKPRESS_THEME_DIR?>/assets/patterns/circleblock.webp" preload="auto" src="<?php echo BLOCKPRESS_THEME_DIR?>/assets/patterns/circleblock.webm" playsinline>
          </video>

          <p class="gs-introtext">Thank you for using Blockpress.</p>
        </div>
      </div>
      <?php
    }
  }

}