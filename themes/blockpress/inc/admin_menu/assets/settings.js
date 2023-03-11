jQuery(document).ready(function($) {
  const $container = $('.blockpress_form__general')

  $container.on('click', '.add-new-font', function (e){
    e.preventDefault()
    const count = parseInt($("[name=fonts_count]").val()) + 1;

    $.ajax({
      method: "POST",
      url: blockpress_params.ajaxUrl,
      data: { action: 'blockpress_settings_add_font', i: count },
    })
      .success(function( data ) {
        $container.find('.fonts-wrap').append(data.html)
        $container.find('[name=fonts_count]').val(count)
      })
      .error(function( data ) {
        // error
      });
  })

  $container.on('click', '.remove-last-font', function (e){
    e.preventDefault()
    const count = parseInt($("[name=fonts_count]").val());

    if(count < 2) return false;

    $container.find('.fonts-wrap .font-item').filter(':last').remove()
    $container.find('[name=fonts_count]').val(count - 1)
  })

  $container.on('click', '.current-file-actions .remove-font-file', function (e) {
    e.preventDefault();
    const $this = $(this);
    const $td = $this.closest('td');
    $td.find('.current-file-hidden-input').val('');
    $td.find('.current-file').remove();
  })

})