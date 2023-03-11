<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

if (!class_exists('BlockpressMenuSettings')) {

  class BlockpressMenuSettings
  {
    private $allowed_font_ext = [
      'woff2',
      'woff',
      'tiff',
      'ttf',
    ];

    public function __construct()
    {
      add_action('admin_menu', array($this, 'blockpress_admin_page'));

      //settings fonts actions
      add_action('wp_ajax_blockpress_settings_add_font', array($this, 'blockpress_settings_add_font'));

      add_action('wp_footer', array($this, 'blockpress_show_footer_scripts'));
      add_action('wp_head', array($this, 'blockpress_show_header_settings'));
    }

    public function blockpress_show_header_settings() {
      $global_settings = get_option('blockpress_options');
      if(!empty($global_settings['custom_css'])){
        echo '<style>' . wp_unslash($global_settings['custom_css']) . '</style>';
      }
      if(!empty($global_settings['custom_code_in_head'])){
        echo wp_kses(wp_unslash($global_settings['custom_code_in_head']), [
          'meta' => [
            'charset' => [],
            'content' => [],
            'http-equiv' => [],
            'name' => [],
          ]
        ]);
      }
    }

    public function blockpress_show_footer_scripts() {
      $global_settings = get_option('blockpress_options');
      if(!empty($global_settings['custom_js'])){
        echo '<script>' . wp_unslash($global_settings['custom_js']) . '</script>';
      }
      if(!empty($global_settings['custom_code_before_closed_body'])){
        echo wp_kses_post($global_settings['custom_code_before_closed_body']);
      }
    }

    public function blockpress_admin_page()
    {

      $parent_slug = 'blockpress_dashboard';

      add_submenu_page(
        $parent_slug,
        esc_html__('Settings', 'blockpress'),
        esc_html__('Settings', 'blockpress'),
        'manage_options',
        'blockpress_settings',
        array($this, 'settings_page')
      );
    }

    public function settings_page()
    {

      if (!current_user_can('manage_options')) {
        wp_die('Unauthorized user');
      }

      // Get the active tab from the $_GET param
      $default_tab = null;
      $tab         = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : $default_tab;

      ?>
      <div class="wrap">
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
                font-weight: bold;
                padding: 15px;
                background: #f4f4f4;
            }

            .gs-introtext {
                font-size: 14px;
                max-width: 500px;
                margin: 0 auto 50px auto
            }

            .gs-intro-video iframe {
                box-shadow: 10px 10px 20px rgb(0 0 0 / 15%);
            }

            .gs-intro-video {
                margin-bottom: 40px
            }

            .wrap h1 {
                text-align: left;
                padding: 15px 20px;
                margin: -1px -1px 60px -1px;
                font-size: 13px;
                font-weight: bold;
                text-transform: uppercase;
                box-shadow: 0 3px 8px rgb(0 0 0 / 5%);
            }

            .gs-padd {
                padding: 25px;
                text-align: left;
                background-color: #fbfbfb
            }

            .rtl .gs-padd {
                text-align: right
            }

            .wp-core-ui .button-primary {
                background-color: #2184f9
            }

            .nav-tab-active,
            .nav-tab-active:focus,
            .nav-tab-active:focus:active,
            .nav-tab-active:hover {
                border-bottom: 1px solid #fbfbfb;
                background: #fbfbfb;
            }

            .nav-tab-wrapper {
                padding-left: 20px
            }

            .wrap .fs-notice {
                margin: 0 25px 35px 25px !important
            }

            .wrap .fs-plugin-title {
                display: none !important
            }
        </style>
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <!-- Here are our tabs -->
        <nav class="nav-tab-wrapper">
          <a href="?page=blockpress_settings" class="nav-tab
				<?php
          if ($tab === null) :
            ?>
					nav-tab-active<?php endif; ?>"> <?php esc_html_e("General", 'blockpress'); ?> </a>
          <a href="?page=blockpress_settings&tab=global_scripts" class="nav-tab
				<?php
          if ($tab === 'global_scripts') :
            ?>
					nav-tab-active<?php endif; ?>"><?php esc_html_e("Global Scripts", 'blockpress'); ?></a>
        </nav>

        <div class="tab-content gs-padd">
          <?php
          switch ($tab):
            case 'global_scripts':
              $global_settings = get_option('blockpress_options');

              if (isset($_POST['blockpress_save_settings'])) {
                if (!wp_verify_nonce($_POST['blockpress_settings_field'], 'blockpress_settings_page_action')) {
                  esc_html_e("Sorry, your nonce did not verify.", 'blockpress');
                  return;
                }

                $global_settings['custom_css'] = wp_unslash($_POST['custom_css']);
                $global_settings['custom_js'] = wp_unslash($_POST['custom_js']);
                $global_settings['custom_code_in_head'] = wp_kses(wp_unslash($_POST['custom_code_in_head']), [
                  'meta' => [
                    'charset' => [],
                    'content' => [],
                    'http-equiv' => [],
                    'name' => [],
                  ]
                ]);
                $global_settings['custom_code_before_closed_body'] = wp_kses_post(wp_unslash($_POST['custom_code_before_closed_body']));
                update_option('blockpress_options', $global_settings);
              }

              $custom_css = !empty($global_settings['custom_css']) ? wp_unslash($global_settings['custom_css']) : '';
              $custom_js = !empty($global_settings['custom_js']) ? wp_unslash($global_settings['custom_js']) : '';
              $custom_code_in_head = !empty($global_settings['custom_code_in_head']) ? wp_unslash($global_settings['custom_code_in_head']) : '';
              $custom_code_before_closed_body = !empty($global_settings['custom_code_before_closed_body']) ? wp_unslash($global_settings['custom_code_before_closed_body']) : '';
              ?>
              <div class="blockpress_settings_form">
                <form method="POST">
                  <?php wp_nonce_field('blockpress_settings_page_action', 'blockpress_settings_field'); ?>
                  <table class="form-table">
                    <tr>
                      <th> <label for="css_system"><?php esc_html_e("Custom CSS", 'blockpress'); ?></label> </th>
                      <td>
                        <textarea name="custom_css" id="" cols="30" rows="10" style="width: 100%"><?php echo $custom_css?></textarea>
                      </td>
                    </tr>
                    <tr>
                      <th> <label for="css_system"><?php esc_html_e("Custom JS", 'blockpress'); ?></label> </th>
                      <td>
                        <textarea name="custom_js" id="" cols="30" rows="10" style="width: 100%"><?php echo $custom_js?></textarea>
                      </td>
                    </tr>
                    <tr>
                      <th> <label for="css_system"><?php esc_html_e("Custom code in head section", 'blockpress'); ?></label> </th>
                      <td>
                        <textarea name="custom_code_in_head" id="" cols="30" rows="10" style="width: 100%"><?php echo $custom_code_in_head?></textarea>
                      </td>
                    </tr>
                    <tr>
                      <th> <label for="css_system"><?php esc_html_e("Custom code before closed Body", 'blockpress'); ?></label> </th>
                      <td>
                        <textarea name="custom_code_before_closed_body" id="" cols="30" rows="10" style="width: 100%"><?php echo $custom_code_before_closed_body?></textarea>
                      </td>
                    </tr>
                  </table>

                  <input type="submit" name="blockpress_save_settings" value="<?php esc_attr_e("Save settings", "blockpress"); ?>" class="button button-primary button-large">
                </form>
              </div>
              <?php
              break;
            default:
              wp_enqueue_style('blockpress_adminsettings');
              wp_enqueue_script('blockpress_adminsettings');
              if (isset($_POST['blockpress_save_settings_general']) && isset($_POST['blockpress_settings_field']) && wp_verify_nonce($_POST['blockpress_settings_field'], 'blockpress_settings_page_action')) {
                $this->blockpress_save_general_form($_POST, $_FILES);
              }
              ?>
              <h2><?php esc_html_e("Local Font Loader", 'blockpress'); ?></h2>
              <?php esc_html_e("Attention! Local font is global option and it can reduce performance in some cases. You can assign font in BlockPress sidebar. Check ", 'blockpress'); ?> <a href="https://blockpresswp.com/how-to-use-local-font-in-blockpress/" target="_blank"><?php esc_html_e("Documentation", 'blockpress'); ?></a>
              <?php
              $allowed_font_ext = $this->allowed_font_ext;
              require_once BLOCKPRESS_THEME_PATH . '/inc/admin_menu/templates/settings_general_form.php'; ?>
              <?php
              break;
          endswitch;
          ?>
        </div>
      </div>
      <?php
    }

    // settings fonts
    public function blockpress_settings_add_font()
    {
      $i = $_POST['i'];
      $allowed_font_ext = $this->allowed_font_ext;
      ob_start();
      require_once BLOCKPRESS_THEME_PATH . '/inc/admin_menu/templates/settings_general_font_item.php';
      $html = ob_get_contents();
      ob_get_clean();
      wp_send_json(['html' => $html]);
    }

    public function blockpress_save_general_form($data, $files)
    {
      $global_settings = get_option('blockpress_global_settings');

      $fonts_urls = $this->blockpress_save_files($files);
      $arr = [];
      for ($i = 0; (int)$data['fonts_count'] > $i; $i++) {
        //$item_arr = ['label' => sanitize_text_field($data['font_specific_style_name'][$i])];
        foreach ($this->allowed_font_ext as $ext) {
          $item_arr[$ext] = !empty($fonts_urls[$i][$ext]) ? $fonts_urls[$i][$ext] : sanitize_text_field($data[$ext][$i]);
        }
        $arr[sanitize_text_field($data['font_family_name'][$i])] = $item_arr;
      }
      $new_localfont = json_encode($arr);
      $global_settings['localfont'] = $new_localfont;

      $localfontcss = '';
      if (!empty($arr)) {
        foreach ($arr as $i => $value) {
          $localfontcss .= '@font-face {';
          $localfontcss .= 'font-family: "' . $i . '";';
          $localfontcss .= 'src: ';
          if (!empty($value['woff2'])) {
            $localfontcss .= 'url(' . $value["woff2"] . ') format("woff2"), ';
          }
          if (!empty($value['woff'])) {
            $localfontcss .= 'url(' . $value["woff"] . ') format("woff"), ';
          }
          if (!empty($value['ttf'])) {
            $localfontcss .= 'url(' . $value["ttf"] . ') format("ttf"), ';
          }
          if (!empty($value['tiff'])) {
            $localfontcss .= 'url(' . $value["tiff"] . ') format("tiff"), ';
          }
          $localfontcss .= ';';
          $localfontcss .= 'font-display: swap;}';
        }
        $localfontcss = str_replace(', ;', ';', $localfontcss);
        $global_settings['localfontcss'] = $localfontcss;

        $gs_global_css = (!empty($global_settings['globalcss'])) ? $global_settings['globalcss'] : '';
        $upload_dir = wp_upload_dir();

        require_once ABSPATH . 'wp-admin/includes/file.php';
        global $wp_filesystem;
        $dir = trailingslashit($upload_dir['basedir']) . 'blockpress/'; // Set storage directory path

        WP_Filesystem(); // WP file system

        if (!$wp_filesystem->is_dir($dir)) {
          $wp_filesystem->mkdir($dir);
        }

        $blockpress_css_filename = 'globalstyle.css';

        $gs_global_css = str_replace('!important', '', $gs_global_css);

        if (!$wp_filesystem->put_contents($dir . $blockpress_css_filename, $gs_global_css . $localfontcss)) {
          throw new Exception(__('CSS not saved due the permission!!!', 'blockpress'));
        }
      }
      update_option('blockpress_global_settings', $global_settings);
    }

    public function blockpress_save_files($files)
    {
      $result = [];
      $upload = wp_upload_dir();
      $upload_dir = $upload['basedir'] . '/blockpress/fonts';
      $upload_url = $upload['baseurl'] . '/blockpress/fonts';

      foreach (array_keys($files) as $filename) {
        foreach ($files[$filename]["error"] as $key => $error) {
          if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $files[$filename]["tmp_name"][$key];
            $name = basename($files[$filename]["name"][$key]);
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $font_dir = $upload_dir . '/font_' . ($key + 1) . '/' . $ext;

            $this->blockpress_rm_rec($font_dir); //clean up dir before download

            if (!wp_mkdir_p($font_dir)) {
              return false;
            }

            if (move_uploaded_file($tmp_name, "$font_dir/$name")) {
              $result[$key][$ext] = $upload_url . '/font_' . ($key + 1) . '/' . $ext . '/' . $name;
            }
          }
        }
      }

      return $result;
    }

    public function blockpress_rm_rec($path)
    {
      if (is_file($path)) return unlink($path);
      if (is_dir($path)) {
        foreach (scandir($path) as $p) if (($p != '.') && ($p != '..'))
          $this->blockpress_rm_rec($path . '/' . $p);
        return rmdir($path);
      }
      return false;
    }
  }
}
?>