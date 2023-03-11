<?php
	$spice_fse_actions = $this->recommended_actions;
	$spice_fse_actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="spice-fse-tab-pane panel-close">
	<div class="action-list">
		<?php if($spice_fse_actions): foreach ($spice_fse_actions as $key => $spice_fse_val): ?>
		<div class="action col-md-6" id="<?php echo esc_attr($spice_fse_val['id']); ?>">
			<div class="action-box">
				<div class="action-watch">
				<?php if(!$spice_fse_val['is_done']): ?>
					<?php if(!isset($spice_fse_actions_todo[$spice_fse_val['id']]) || !$spice_fse_actions_todo[$spice_fse_val['id']]): ?>
						<span class="dashicons dashicons-visibility"></span>
					<?php else: ?>
						<span class="dashicons dashicons-hidden"></span>
					<?php endif; ?>
				<?php else: ?>
					<span class="dashicons dashicons-yes"></span>
				<?php endif; ?>
				</div>
				<div class="action-inner">
					<h3 class="action-title"><?php echo esc_html($spice_fse_val['title']); ?></h3>
					<div class="action-desc"><?php echo esc_html($spice_fse_val['desc']); ?></div>
					<?php echo wp_kses_post($spice_fse_val['link']); ?>
				</div>
			</div>
		</div>
		<?php endforeach; endif; ?>
	</div>
</div>