<?php
$global_settings = get_option('blockpress_global_settings');
$current_localfonts = !empty($global_settings['localfont']) ? json_decode($global_settings['localfont'], true) : [];
$count = !empty($current_localfonts) ? count($current_localfonts) : 1;
?>
<form enctype="multipart/form-data" method="POST" class="blockpress_form blockpress_form__general">
  <?php wp_nonce_field('blockpress_settings_page_action', 'blockpress_settings_field'); ?>

  <div class="fonts-wrap">
    <?php
    $i = 1;
    if(!empty($current_localfonts)) {
      foreach ($current_localfonts as $name => $options) {
        require BLOCKPRESS_THEME_PATH . '/inc/admin_menu/templates/settings_general_font_item.php';
        $i++;
      }
    } else {
      require BLOCKPRESS_THEME_PATH . '/inc/admin_menu/templates/settings_general_font_item.php';
    }?>
  </div>

  <div class="actions-wrap">
    <button class="button-primary add-new-font">
      <?php esc_html_e('Add Font', 'blockpress')?>
    </button>
    <button class="button-primary remove-last-font" style="background: transparent;border-color: #cc1818;color: #cc1818;">
      <?php esc_html_e('Remove Font', 'blockpress')?>
    </button>
  </div>

  <input type="hidden" name="fonts_count" value="<?php echo (int)$count?>">
  <input type="submit" name="blockpress_save_settings_general" value="<?php esc_attr_e('Save', 'blockpress')?>" class="button button-primary button-large">
</form>