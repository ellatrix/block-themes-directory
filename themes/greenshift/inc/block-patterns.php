<?php
/**
 * Greenshift: Block Patterns
 *
 * @since Greenshift 0.8.0
 */

/**
 * Registers block patterns, categories, and type.
 *
 * @since Greenshift 0.8.0
 */
function greenshift_register_block_patterns() {

	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		// phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category_type
		register_block_pattern_category_type( 'greenshift', array( 'label' => __( 'Greenshift', 'greenshift' ) ) );
	}

	$block_pattern_categories = array(
		'greenshift-footer'  => array(
			'label'         => __( 'Greenshift Footer', 'greenshift' ),
			'categoryTypes' => array( 'greenshift' ),
		),
		'greenshift-general' => array(
			'label'         => __( 'Greenshift General', 'greenshift' ),
			'categoryTypes' => array( 'greenshift' ),
		),
		'greenshift-header'  => array(
			'label'         => __( 'Greenshift Header', 'greenshift' ),
			'categoryTypes' => array( 'greenshift' ),
		),
		'greenshift-hero'  => array(
			'label'         => __( 'Greenshift Hero Headers', 'greenshift' ),
			'categoryTypes' => array( 'greenshift' ),
		),
		'greenshift-parts'    => array(
			'label'         => __( 'Greenshift Parts', 'greenshift' ),
			'categoryTypes' => array( 'greenshift' ),
		),
		'greenshift-query'   => array(
			'label'         => __( 'Greenshift Query', 'greenshift' ),
			'categoryTypes' => array( 'greenshift' ),
		),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Greenshift 0.8.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'greenshift_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		// phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		register_block_pattern_category( $name, $properties );
	}

	if(defined('GREENSHIFT_DIR_URL')){
		//WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern
		register_block_pattern(
			'greenshift/nightmodeswitcher',
			array(
				'title'       => __( 'Night Mode Switcher', 'greenshift-animation-and-page-builder-blocks'),
				'categories' => array('greenshiftelements'),
				'keywords' => array('button', 'nightmode'),
				'blockTypes'    => array( 'greenshift-blocks/switchtoggle' ),
				'description' => _x( 'Night Mode switcher', 'Block pattern description', 'greenshift-animation-and-page-builder-blocks'),
				'content'     => '<!-- wp:greenshift-blocks/switchtoggle {"id":"gsbp-d8df5576-5406","inlineCssStyles":"#gspb_checkbox-gsbp-d8df5576-5406{width:0 !important; min-width:0 !important; height:0 !important; visibility:hidden !important }.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-element{width:60px;height:30px;border-radius:99px;display:flex;align-items:center;position:relative;cursor:pointer;transition:background-color 0.3s cubic-bezier(0.44, 0.95, 0.57, 0.97);}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-element{background-color:#000000;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-off-label-text, .gspb_id-gsbp-d8df5576-5406 .gspb__switcher-on-label-text{display:none !important;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-wrapper{display:flex;align-items:center;margin-bottom:30px;justify-content:center;gap:10px;}#gspb_checkbox-gsbp-d8df5576-5406{margin-left:calc(-10px - 5px);}.gspb_id-gsbp-d8df5576-5406:has(#gspb_checkbox-gsbp-d8df5576-5406:checked) .gspb__switcher-element{background-color:#000000;}.gspb_id-gsbp-d8df5576-5406 .gspb__switch-handler{left:0;position:absolute;border-radius:inherit;display:flex;align-items:stretch;top:0;z-index:1;height:100%;transition:left 0.3s cubic-bezier(0.44, 0.95, 0.57, 0.97);}.gspb_id-gsbp-d8df5576-5406 .gspb__switch-handler span{flex:0 1 100%;transition:all 0.3s cubic-bezier(0.44, 0.95, 0.57, 0.97);border-radius:inherit;margin:0px;}.gspb_id-gsbp-d8df5576-5406 .gspb__switch-handler span{background-color:#ffffff;}.gspb_id-gsbp-d8df5576-5406 .gspb__switch-handler{width:50%;}.gspb_id-gsbp-d8df5576-5406:has(#gspb_checkbox-gsbp-d8df5576-5406:checked) .gspb__switch-handler{left:50%;}.gspb_id-gsbp-d8df5576-5406:has(#gspb_checkbox-gsbp-d8df5576-5406:checked) .gspb__switch-handler span{background-color:#fff;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-wrapper{margin-bottom:0px;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-label{display:flex;justify-content:center;align-items:center;cursor:pointer;pointer-events:none;outline:none;z-index:2;text-align:center;transition:all 0.3s cubic-bezier(0.44, 0.95, 0.57, 0.97);}.gspb_id-gsbp-d8df5576-5406 .inside .gspb__switcher-label{width:50%;height:100%;max-width:50%;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-off{color:#000000;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-on{color:#000000;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-off .gspb_switcher_icon{color:#000000;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-on .gspb_switcher_icon{color:#fafafa;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-label-text{user-select:none;pointer-events:none;}.gspb_id-gsbp-d8df5576-5406:has(#gspb_checkbox-gsbp-d8df5576-5406:checked) .gspb__switcher-control-off{color:#000000;}.gspb_id-gsbp-d8df5576-5406:has(#gspb_checkbox-gsbp-d8df5576-5406:checked) .gspb__switcher-control-on{color:#000000;}.gspb_id-gsbp-d8df5576-5406:has(#gspb_checkbox-gsbp-d8df5576-5406:checked) .gspb__switcher-control-off .gspb_switcher_icon{color:#ffffff;}.gspb_id-gsbp-d8df5576-5406:has(#gspb_checkbox-gsbp-d8df5576-5406:checked) .gspb__switcher-control-on .gspb_switcher_icon{color:#000000;}.gspb_id-gsbp-d8df5576-5406 .switcher-panel{display:none;}.gspb_id-gsbp-d8df5576-5406:has(#gspb_checkbox-gsbp-d8df5576-5406:checked) .switcher-panel-2 {display:block;}.gspb_id-gsbp-d8df5576-5406:has(#gspb_checkbox-gsbp-d8df5576-5406:not(:checked)) .switcher-panel-1 {display:block;}.gspb_id-gsbp-d8df5576-5406 .gspb_switcher_icon{margin-bottom:4px;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-off .gspb_switcher_icon svg{height:18px!important;width:18px!important;min-width:18px!important;overflow:visible;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-off .gspb_switcher_icon svg, .gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-off .gspb_switcher_icon svg path{fill:currentColor !important;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-off .gspb_switcher_icon svg:hover, .gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-off .gspb_switcher_icon svg:hover path{fill:currentColor !important;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-on .gspb_switcher_icon svg{height:18px!important;width:18px!important;min-width:18px!important;overflow:visible;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-on .gspb_switcher_icon svg, .gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-on .gspb_switcher_icon svg path{fill:currentColor !important;}.gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-on .gspb_switcher_icon svg:hover, .gspb_id-gsbp-d8df5576-5406 .gspb__switcher-control-on .gspb_switcher_icon svg:hover path{fill:currentColor !important;}body.nightmode{\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbasecolor: #ffffff;\n    \u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrastcolor: #000000;}","switchspacing":{"margin":{"values":{"bottom":[0]},"unit":["px","px","px","px"],"locked":false},"padding":{"values":{},"unit":["px","px","px","px"],"locked":false}},"responsive":{"customcss":"body.nightmode{\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbasecolor: #ffffff;\n    \u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrastcolor: #000000;}"},"labelon_icon":{"icon":{"font":"rhicon rhi-moon","svg":"","image":""},"fill":"currentColor","fillhover":"currentColor","type":"font","iconSize":["18px"]},"labeloff_icon":{"icon":{"font":"rhicon rhi-sun","svg":"","image":""},"fill":"currentColor","fillhover":"currentColor","type":"font","iconSize":["18px"]},"enableicon":true,"iconspacing":{"margin":{"values":{"right":[null],"bottom":[4]},"unit":["px","px","px","px"],"locked":false},"padding":{"values":{},"unit":["px","px","px","px"],"locked":false}},"switchwidth":["60px"],"switchheight":["30px"],"circlewidth":["35px"],"hanlderoffset":["0px"],"switcherRadius":["99px"],"switchlabelgap":["10px"],"labelposistion":true,"offswitchcolor":{"color":"#000000","backgroundMode":"normal"},"offhandlecolor":{"color":"#ffffff","backgroundMode":"normal"},"offllabelcolor":"#000000","offrlabelcolor":"#000000","offliconcolor":"#000000","offriconcolor":"#fafafa","onswitchcolor":{"color":"#000000","backgroundMode":"normal"},"onhandlecolor":{"color":"#fff","backgroundMode":"normal"},"onllabelcolor":"#000000","onrlabelcolor":"#000000","onliconcolor":"#ffffff","onriconcolor":"#000000","disablecontent":true,"disablelabel":true,"enablelocalstorege":true,"enablecookiestorage":true,"bodyclasstolocal":"nightmode","cookname":"nightmode","fastpreset":"iconsinside"} -->
					<div id="gspb_id-gsbp-d8df5576-5406" class="gspb-switchwrap gspb_id-gsbp-d8df5576-5406 "><div class="gspb__switcher-container"><div class="gspb__switcher-control-wrapper inside"><input type="checkbox" class="gspb-switchbox-checkbox" id="gspb_checkbox-gsbp-d8df5576-5406"/><label id="gspb-switch-gsbp-d8df5576-5406" class="gspb__switcher-element" data-status="off" data-cookname="nightmode" for="gspb_checkbox-gsbp-d8df5576-5406" data-local="true" data-class="nightmode" data-storage="cookie"><div class="gspb__switcher-label gspb__switcher-control-off"><span class="gspb_switcher_icon"><svg class="" style="display:inline-block;vertical-align:middle" width="16" height="16" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path style="fill:#565D66" d="M768 512c0-70.699-28.715-134.741-74.965-181.035s-110.336-74.965-181.035-74.965-134.741 28.715-181.035 74.965-74.965 110.336-74.965 181.035 28.715 134.741 74.965 181.035 110.336 74.965 181.035 74.965 134.741-28.715 181.035-74.965 74.965-110.336 74.965-181.035zM682.667 512c0 47.147-19.072 89.728-50.005 120.661s-73.515 50.005-120.661 50.005-89.728-19.072-120.661-50.005-50.005-73.515-50.005-120.661 19.072-89.728 50.005-120.661 73.515-50.005 120.661-50.005 89.728 19.072 120.661 50.005 50.005 73.515 50.005 120.661zM469.333 42.667v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-85.333c0-23.552-19.115-42.667-42.667-42.667s-42.667 19.115-42.667 42.667zM469.333 896v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-85.333c0-23.552-19.115-42.667-42.667-42.667s-42.667 19.115-42.667 42.667zM149.888 210.219l60.587 60.587c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-60.587-60.587c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331zM753.195 813.525l60.587 60.587c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-60.587-60.587c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331zM42.667 554.667h85.333c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-85.333c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM896 554.667h85.333c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-85.333c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM210.219 874.112l60.587-60.587c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-60.587 60.587c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0zM813.525 270.805l60.587-60.587c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-60.587 60.587c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0z"></path></svg></span><span class="gspb__switcher-off-label-text">Off</span></div><div class="gspb__switch-handler"><span></span></div><div class="gspb__switcher-label gspb__switcher-control-on"><span class="gspb_switcher_icon"><svg class="" style="display:inline-block;vertical-align:middle" width="16" height="16" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path style="fill:#565D66" d="M938.496 549.632c0.939-9.941-1.621-20.309-8.021-29.056-13.867-19.029-40.576-23.211-59.605-9.344-40.533 29.568-87.893 46.336-136.021 49.579-58.368 3.925-117.973-12.075-168.533-49.408-56.875-42.027-91.264-103.040-100.992-167.893s5.291-133.291 47.317-190.123c6.059-8.149 9.216-18.56 8.149-29.483-2.261-23.467-23.125-40.619-46.592-38.315-96.341 9.387-184.064 50.347-251.52 113.109-74.069 68.907-123.819 164.139-133.845 272.469-10.837 117.291 26.923 227.968 96.683 311.936s171.605 141.355 288.939 152.192 227.968-26.923 311.936-96.683 141.355-171.605 152.192-288.939zM834.859 626.091c-20.907 58.155-56.96 108.501-103.083 146.816-67.243 55.851-155.648 86.016-249.515 77.355s-175.275-54.528-231.125-121.771-86.016-155.648-77.355-249.515c7.979-86.699 47.659-162.731 106.965-217.856 33.365-31.061 72.96-55.467 116.523-71.339-19.456 53.931-24.619 111.189-16.384 166.357 12.928 86.315 58.88 167.851 134.656 223.872 67.328 49.792 147.115 71.168 224.939 65.92 32.085-2.133 63.829-8.832 94.293-19.84z"></path></svg></span><span class="gspb__switcher-on-label-text">On</span></div></label></div></div></div>
				<!-- /wp:greenshift-blocks/switchtoggle -->',
			)
		);
	}

}
add_action( 'init', 'greenshift_register_block_patterns', 9 );