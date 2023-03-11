<?php

add_filter('render_block', 'it_firm_load_block_styles_css', 10, 2);

// Add smart style inside child theme
if(!function_exists("it_firm_load_block_styles_css")){
    function it_firm_load_block_styles_css( $block_content, $block ){
        global $used_styles;
        if(is_admin()){
            return $block_content;
        }
        if( isset($block['blockName']) && isset($block['attrs']['className']) && !empty($block['attrs']['className']) ){
            // group
            if ($block['blockName'] == 'core/group') {
                if (str_contains($block['attrs']['className'], 'is-style-it-firm-hide-mobile') !== false) {
                    if( $used_styles ){
                        $used_styles->render_inline_styles("grigora-used-styles", 'is-style-it-firm-hide-mobile', "@media(max-width: 767px){.is-style-it-firm-hide-mobile{display:none !important}}");
                    }
                }
            }
            return $block_content;
        }
        return $block_content;
    }
}
