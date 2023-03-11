<?php
/**
 * Hero image block pattern
 *
 * @package coming-soon-block
 *
 * @link https://core.trac.wordpress.org/ticket/54272
 *
 * @since 1.0.1
 */

return array(
    'title'      => esc_html__('Hero image', 'coming-soon-block'),
    'categories' => array( 'coming-soon-block-patterns' ),
    'inserter'   => true,
    'content'    => '
	<!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('assets/images/macro-leaves_JZ1LPL2IZB.jpg')) . '","id":454,"dimRatio":50} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-454" alt="" src="' . esc_url(get_theme_file_uri('assets/images/macro-leaves_JZ1LPL2IZB.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"coming-soon-block"} /-->

<!-- wp:group {"className":"hero","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group hero"><!-- wp:heading {"level":1} -->
<h1>Get ready everyone.<br>We are currently<br>working on a super<br>awesome website.</h1>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"className":"csb-hero-timer-muted"} -->
<p class="csb-hero-timer-muted">Launching In </p>
<!-- /wp:paragraph -->

<!-- wp:countdown-block/countdown {"blockId":"eb-countdown-f8vy2qf","blockMeta":{"desktop":" .eb-countdown-f8vy2qf.eb-cd-wrapper{ max-width:450px; transition: background 0.5s, border 0.5s, border-radius 0.5s, box-shadow 0.5s ; } div.eb-countdown-f8vy2qf.eb-cd-wrapper{ margin-left: auto; margin-right: auto; } .eb-countdown-f8vy2qf.eb-cd-wrapper:hover{ background-color: rgba(0,0,0,1); } .eb-countdown-f8vy2qf.eb-cd-wrapper:before{ transition: background 0.5s, opacity 0.5s, filter 0.5s; }  .eb-countdown-f8vy2qf.eb-cd-wrapper .eb-cd-inner { flex-direction: row; } .eb-countdown-f8vy2qf.eb-cd-wrapper .eb-cd-inner .box { background-color: rgba(120,102,255,0); transition: background 0s, border 0.5s, border-radius 0.5s, box-shadow 0.5s ; padding-top: 20px; padding-bottom: 20px; border-radius: 10px; justify-content: flex-start; flex-direction: row; align-items: flex-start; } .eb-countdown-f8vy2qf.eb-cd-wrapper .eb-cd-inner .box:hover{ background-color: rgba(0,0,0,0); } .eb-countdown-f8vy2qf.eb-cd-wrapper .eb-cd-inner .box span.eb-cd-digit { font-size: 44px; color: rgba(255,255,255,1); } .eb-countdown-f8vy2qf.eb-cd-wrapper .eb-cd-inner .box span.eb-cd-label { font-size: 18px; padding: 0px; color: rgba(136,136,136,1); } .eb-countdown-f8vy2qf.eb-cd-wrapper .eb-cd-inner .box + .box { margin: 0; margin-left:0px; }                 ","tab":"                  ","mobile":"                  "},"contentsAlign":"flex-start","contentsJustify":"flex-start","contentsDirection":"row","endTimeStamp":1671008579000,"daysLabel":"D","hoursLabel":"H","minutesLabel":"M","secondsLabel":"S","digitsColor":"rgba(255,255,255,1)","labelsColor":"rgba(136,136,136,1)","dg_FontSize":44,"wrpW_Range":450,"boxsSpb_Range":0,"hov_WrpBg_backgroundColor":"rgba(0,0,0,1)","hov_WrpBg_gradientColor":"linear-gradient(45deg, rgba(0,0,0,0.8) 0% , rgba(0,0,0,0.4) 100%)","boxsBg_bg_hoverType":"hover","boxsBg_bg_transition":0,"boxsBg_backgroundType":"classic","boxsBg_backgroundColor":"rgba(120,102,255,0)","boxsBg_gradientColor":"linear-gradient(45deg, rgba(120,102,255,0) 0% , rgba(195,119,242,0) 100%)","hov_boxsBg_backgroundColor":"rgba(0,0,0,0)","lblPad_Top":"0","lblPad_Right":"0","lblPad_Bottom":"0","lblPad_Left":"0","commonStyles":{"desktop":" .wp-admin .eb-parent-eb-countdown-f8vy2qf { display: block; opacity: 1; } .eb-parent-eb-countdown-f8vy2qf { display: block; } ","tab":" .editor-styles-wrapper.wp-embed-responsive .eb-parent-eb-countdown-f8vy2qf { display: block; opacity: 1; } .eb-parent-eb-countdown-f8vy2qf { display: block; } ","mobile":" .editor-styles-wrapper.wp-embed-responsive .eb-parent-eb-countdown-f8vy2qf { display: block; opacity: 1; } .eb-parent-eb-countdown-f8vy2qf { display: block; } "}} -->
<div class="wp-block-countdown-block-countdown"><div class="eb-parent-wrapper eb-parent-eb-countdown-f8vy2qf "><div class="eb-countdown-f8vy2qf eb-cd-wrapper"><div class="eb-cd-inner" data-deadline-time="1671008579000"><div class="box cd-box-day"><span class="eb-cd-digit">00</span><span class="eb-cd-label">D</span></div><div class="box cd-box-hour"><span class="eb-cd-digit">00</span><span class="eb-cd-label">H</span></div><div class="box cd-box-minute"><span class="eb-cd-digit">00</span><span class="eb-cd-label">M</span></div><div class="box cd-box-second"><span class="eb-cd-digit">00</span><span class="eb-cd-label">S</span></div></div></div></div></div>
<!-- /wp:countdown-block/countdown --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"bottom","justifyContent":"center","orientation":"horizontal","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":50,"className":"is-style-outline coming-soon-subscription"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline coming-soon-subscription"><a class="wp-block-button__link wp-element-button">NOTIFY ME </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
	',
);
