<?php

/**
 * This file adds block styles to the Blockpress theme for WordPress.
 *
 * @package Blockpress
 * @license GNU General Public License v2 or later
 * @link    https://blockpresswp.com/
 */

 
//Polyfill for str_contains
if (!function_exists('str_contains')) {
    function str_contains (string $haystack, string $needle)
    {
        return empty($needle) || strpos($haystack, $needle) !== false;
    }
}


register_block_style(
	'core/button',
	array(
		'name'  => 'fill-white',
		'label' => __('Fill White', 'blockpress'),
	)
);

register_block_style(
	'core/button',
	array(
		'name'  => 'outline-black',
		'label' => __('Outline Black', 'blockpress'),
	)
);

register_block_style(
	'core/button',
	array(
		'name'  => 'outline-white',
		'label' => __('Outline White', 'blockpress'),
	)
);
register_block_style(
	'core/button',
	array(
		'name'  => 'system-btn',
		'label' => __('System button', 'blockpress'),
	)
);
register_block_style(
	'core/button',
	array(
		'name'  => 'cubebtnwhite',
		'label' => __('3d Button light', 'blockpress'),
	)
);
register_block_style(
	'core/button',
	array(
		'name'  => 'cubebtndark',
		'label' => __('3d Button dark', 'blockpress'),
	)
);

// Add group styles: Boxshadow.
register_block_style(
	'core/group',
	array(
		'name'  => 'boxshadow',
		'label' => __('Boxshadow', 'blockpress'),
	)
);
register_block_style(
	'core/group',
	array(
		'name'  => 'lightshadow',
		'label' => __('Light Shadow', 'blockpress'),
	)
);
register_block_style(
	'core/group',
	array(
		'name'  => 'middleshadow',
		'label' => __('Middle Shadow', 'blockpress'),
	)
);
register_block_style(
	'core/group',
	array(
		'name'  => 'harddarkshadow',
		'label' => __('Hard dark Shadow', 'blockpress'),
	)
);
register_block_style(
	'core/group',
	array(
		'name'  => 'hardprimaryshadow',
		'label' => __('Hard primary Shadow', 'blockpress'),
	)
);
register_block_style(
	'core/group',
	array(
		'name'  => 'full-height',
		'label' => __('Full-height', 'blockpress'),
	)
);
register_block_style(
	'core/group',
	array(
		'name'  => 'hovershadow',
		'label' => __('Shadow on hover', 'blockpress'),
	)
);
register_block_style(
	'core/group',
	array(
		'name'  => 'hoverprimarycolor',
		'label' => __('Sliding primary hover', 'blockpress'),
	)
);
register_block_style(
	'core/group',
	array(
		'name'  => 'no-margin',
		'label' => __('No Margin', 'blockpress'),
	)
);
register_block_style(
	'core/post-navigation-link',
	array(
		'name'  => 'hovershadow',
		'label' => __('Shadow on hover', 'blockpress'),
	)
);

// Add image styles: Margin.
register_block_style(
	'core/image',
	array(
		'name'  => 'no-margin',
		'label' => __('No Margin', 'blockpress'),
	)
);
register_block_style(
	'core/post-featured-image',
	array(
		'name'  => 'fr-half-image-offset',
		'label' => __('Half negative offset', 'blockpress'),
	)
);
register_block_style(
	'core/post-featured-image',
	array(
		'name'  => 'fr-shadowradius',
		'label' => __('Shadow radius', 'blockpress'),
	)
);
// Add paragraph styles: Margin.
register_block_style(
	'core/paragraph',
	array(
		'name'  => 'no-margin',
		'label' => __('No Margin', 'blockpress'),
	)
);

register_block_style(
	'core/paragraph',
	array(
		'name'  => 'nounderline',
		'label' => __('No underline for links', 'blockpress'),
	)
);
register_block_style(
	'core/paragraph',
	array(
		'name'  => 'roundbig',
		'label' => __('Circle shape', 'blockpress'),
	)
);
register_block_style(
	'core/paragraph',
	array(
		'name'  => 'roundsmall',
		'label' => __('Circle shape small', 'blockpress'),
	)
);

// Add navigation styles: Fill, Outline.
register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'fill-black',
		'label' => __('Fill Black', 'blockpress'),
	)
);

register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'outline-black',
		'label' => __('Outline Black', 'blockpress'),
	)
);

register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'fill-white',
		'label' => __('Fill White', 'blockpress'),
	)
);

register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'outline-white',
		'label' => __('Outline White', 'blockpress'),
	)
);
register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'accentbutton',
		'label' => __('Accent Button', 'blockpress'),
	)
);
register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'primarybtn',
		'label' => __('Primary Color Button', 'blockpress'),
	)
);
register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'secondarybtn',
		'label' => __('Secondary Color Button', 'blockpress'),
	)
);
register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'cubeprimarybtn',
		'label' => __('Primary 3d Button', 'blockpress'),
	)
);

register_block_style(
	'core/post-terms',
	array(
		'name'  => 'blockpress-tags-primary',
		'label' => __('Colored tags', 'blockpress'),
	)
);
register_block_style(
	'core/post-terms',
	array(
		'name'  => 'blockpress-tags-secondary',
		'label' => __('Colored Secondary tags', 'blockpress'),
	)
);
register_block_style(
	'core/post-terms',
	array(
		'name'  => 'fr-tags-rounded',
		'label' => __('Rounded border', 'blockpress'),
	)
);
register_block_style(
	'core/post-terms',
	array(
		'name'  => 'blockpress-tags-nounder',
		'label' => __('Underline on hover', 'blockpress'),
	)
);
register_block_style(
	'core/categories',
	array(
		'name'  => 'listcategories',
		'label' => __('Inline List', 'blockpress'),
	)
);
register_block_style(
	'woocommerce/product-categories',
	array(
		'name'  => 'listcategories',
		'label' => __('Inline List', 'blockpress'),
	)
);
register_block_style(
	'core/post-author',
	array(
		'name'  => 'img-h-25',
		'label' => __('Small image', 'blockpress'),
	)
);
register_block_style(
	'core/list',
	array(
		'name'  => 'nounderline',
		'label' => __('Unstyled view', 'blockpress'),
	)
);

register_block_style(
	'core/heading',
	array(
		'name'  => 'line-separator',
		'label' => __('Line Separator', 'blockpress'),
	)
);

register_block_style(
	'core/search',
	array(
		'name'  => 'floating-white-search',
		'label' => __('Floating search bar on click', 'blockpress'),
	)
);

register_block_style('core/query', [
	'name' => 'fr-borderquery',
	'label' => __('Bordered block', 'blockpress'),
]);
register_block_style('core/query', [
	'name' => 'fr-innerborderquery',
	'label' => __('Inner Border', 'blockpress'),
]);
register_block_style('core/query', [
	'name' => 'fr-bordernopaddquery',
	'label' => __('No padding for image', 'blockpress'),
]);
register_block_style('core/query', [
	'name' => 'fr-brdnpaddradius',
	'label' => __('Rounded border box', 'blockpress'),
]);
register_block_style('core/query', [
	'name' => 'fr-smartscrollitems',
	'label' => __('Smart scroll carousel', 'blockpress'),
]);
register_block_style('core/query', [
	'name' => 'fr-box-on-image',
	'label' => __('Box intersection', 'blockpress'),
]);
register_block_style('core/query', [
	'name' => 'fr-box-creative',
	'label' => __('Box intersection 2', 'blockpress'),
]);
register_block_style(
	'core/query',
	array(
		'name'  => 'fr-shadowradius-query',
		'label' => __('Shadow radius', 'blockpress'),
	)
);

register_block_style('core/column', [
	'name' => 'no-gap',
	'label' => __('No gap', 'blockpress'),
]);

register_block_style(
	'core/post-excerpt',
	array(
		'name'  => 'text-clamp-two',
		'label' => __('Show two lines', 'blockpress'),
	)
);
register_block_style(
	'core/post-excerpt',
	array(
		'name'  => 'text-clamp-three',
		'label' => __('Show three lines', 'blockpress'),
	)
);
register_block_style(
	'core/post-title',
	array(
		'name'  => 'text-clamp-two',
		'label' => __('Show two lines', 'blockpress'),
	)
);
register_block_style(
	'core/post-title',
	array(
		'name'  => 'text-clamp-three',
		'label' => __('Show three lines', 'blockpress'),
	)
);
register_block_style(
	'core/navigation-submenu',
	array(
		'name'  => 'mega-menu-right',
		'label' => __('Mega columned menu', 'blockpress'),
	)
);
register_block_style(
	'core/navigation-submenu',
	array(
		'name'  => 'mega-menu-left',
		'label' => __('Mega menu Open on left', 'blockpress'),
	)
);
register_block_style(
	'woocommerce/product-search',
	array(
		'name'  => 'theme-search-main',
		'label' => __('Theme search style', 'blockpress'),
	)
);
register_block_style(
	'woocommerce/product-search',
	array(
		'name'  => 'theme-search-round',
		'label' => __('Theme search with round corners', 'blockpress'),
	)
);
register_block_style(
	'core/site-logo',
	array(
		'name'  => 'hideontabletdown',
		'label' => __('Hide on mobile and tablets', 'blockpress'),
	)
);
register_block_style(
	'core/site-tagline',
	array(
		'name'  => 'hideontabletdown',
		'label' => __('Hide on mobile and tablets', 'blockpress'),
	)
);
register_block_style(
	'core/site-title',
	array(
		'name'  => 'hideontabletdown',
		'label' => __('Hide on mobile and tablets', 'blockpress'),
	)
);

//Include conditional assets
add_filter('render_block', 'blockpress_theme_conditional_assets', 10, 2);
function blockpress_theme_conditional_assets($html, $block)
{
	$block_style = '';

	if(!is_admin()){//prevent loading conditional assets in admin
		//We use checking by class name until Wordpress will have proper inline style registration for block styles
		if (isset($block['blockName'])) {
			if (!empty($block['attrs']['className'])) {
				if ($block['blockName'] == 'core/button') {
					if (str_contains($block['attrs']['className'], 'is-style-fill-white') !== false) {
						$block_style .= '.wp-block-button.is-style-fill-white .wp-block-button__link {background-color: var(--wp--custom--color--white);border: 1px solid var(--wp--custom--color--white);color: var(--wp--custom--color--black);}
						.wp-block-button.is-style-fill-white .wp-block-button__link:focus,.wp-block-button.is-style-fill-white .wp-block-button__link:hover {background-color: transparent;border: 1px solid var(--wp--custom--color--white);color: var(--wp--custom--color--white);}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-outline-black') !== false) {
						$block_style .= '.wp-block-button.is-style-outline-black .wp-block-button__link{background-color:transparent;border:1px solid;border-color:currentColor;color:var(--wp--custom--color--black);padding:10px 25px}
						.wp-block-button.is-style-outline-black .wp-block-button__link:focus,.wp-block-button.is-style-outline-black .wp-block-button__link:hover{background-color:var(--wp--custom--color--black);border-color:var(--wp--custom--color--black);color:var(--wp--custom--color--white)}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-outline-white') !== false) {
						$block_style .= '.wp-block-button.is-style-outline-white .wp-block-button__link{background-color:transparent;border:1px solid;border-color:var(--wp--custom--color--white);color:var(--wp--custom--color--white)}
						.wp-block-button.is-style-outline-white .wp-block-button__link:focus,.wp-block-button.is-style-outline-white .wp-block-button__link:hover{background-color:var(--wp--custom--color--white);color:var(--wp--custom--color--black)}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-system-btn') !== false) {
						$block_style .= '.is-style-system-btn .wp-block-button__link{background-color: #f6f6f6;color: #111;box-shadow: 0 1px 2px 0 rgba(60,64,67,0.3), 0 1px 2px rgba(0, 0, 0, 0.08); -webkit-font-smoothing: antialiased}	
						.is-style-system-btn .wp-block-button__link:hover {background-color: #f2f2f2; box-shadow: 0 -1px 2px 0 rgba(60,64,67,0.1), 0 5px 10px 0 rgba(60,64,67,0.14);}.is-style-system-btn .wp-block-button__link:active {box-shadow: 0 1px 1px 0 rgba(60,64,67,0.2), 0 1px 1px 0 rgba(60,64,67,0.2); background: #e9e9e9; outline: 0}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-cubebtnwhite') !== false) {
						$block_style .= '.is-style-cubebtnwhite .wp-block-button__link{border:none !important; box-shadow: 0px 2px 4px rgb(45 35 66 / 10%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px #d6d6e7}.is-style-cubebtnwhite .wp-block-button__link:hover{transform: translateY(-2px);}.is-style-cubebtnwhite .wp-block-button__link:active{transform: translateY(2px);box-shadow: 0px 2px 2px rgb(45 35 66 / 15%)}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-cubebtndark') !== false) {
						$block_style .= '.is-style-cubebtndark .wp-block-button__link{border:none !important;box-shadow: 0px 2px 4px rgb(45 35 66 / 20%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px rgb(58 65 111 / 50%);
							text-shadow: 0 1px 0 rgb(0 0 0 / 40%);}.is-style-cubebtndark .wp-block-button__link:hover{transform: translateY(-2px);}.is-style-cubebtndark .wp-block-button__link:active{transform: translateY(2px);box-shadow: 0px 2px 2px rgb(45 35 66 / 15%)}';
					}
				} else if ($block['blockName'] == 'core/group') {
					if (str_contains($block['attrs']['className'], 'is-style-boxshadow') !== false) {
						$block_style .= '.is-style-boxshadow {box-shadow: 0 0 50px rgb(0 0 0 / 10%);}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-lightshadow') !== false) {
						$block_style .= '.is-style-lightshadow {box-shadow: 0px 5px 20px 0 rgb(0 0 0 / 3%);}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-middleshadow') !== false) {
						$block_style .= '.is-style-middleshadow {box-shadow: 0 5px 23px rgb(188 207 219 / 35%);border-top: 1px solid #f8f8f8;}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-harddarkshadow') !== false) {
						$block_style .= '.is-style-harddarkshadow {box-shadow: 5px 5px var(--wp--custom--color--black);}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-hardprimaryshadow') !== false) {
						$block_style .= '.is-style-hardprimaryshadow {box-shadow: 5px 5px var(--wp--preset--color--primary);}';
					}
					if (str_contains($block['attrs']['className'], 'is-style-hovershadow') !== false) {
						$block_style .= '.is-style-hovershadow:hover {box-shadow: 0 3px 40px rgb(188 207 219 / 35%);}.is-style-hovershadow{transition: box-shadow 0.5s var(--blockpress-transition)}';
					}
					if (str_contains($block['attrs']['className'], 'is-style-hoverprimarycolor') !== false) {
						$block_style .= '.is-style-hoverprimarycolor {transition: color 0.8s var(--blockpress-transition);position:relative; overflow:hidden}.is-style-hoverprimarycolor:after{transition: width 0.6s var(--blockpress-transition);position: absolute;top: 0;left: 0;right: 0;bottom: 0;width: 0;height: 100%;background: var(--wp--preset--color--primary);z-index: -1;content: "";}.is-style-hoverprimarycolor:hover:after{width:100%}.is-style-hoverprimarycolor:hover{color:var(--wp--preset--color--textonprimary) !important}.is-style-hoverprimarycolor:hover a{color:var(--wp--preset--color--textonprimary) !important}';
					}
					if (str_contains($block['attrs']['className'], 'fr-page-preloader') !== false) {
						$block_style .= '.fr-page-preloader{margin:0 !important; padding:0 !important;position: fixed;top: 0;left: 0;width: 100vw;height: 100vh;display: block;background: #FFFFFF;pointer-events: none;transform: scaleX(1);transition: transform .3s cubic-bezier(.27,.76,.38,.87);transform-origin: right center;z-index: 99999999999999999999;display:flex; justify-content:center; align-items:center;}.fr-page-preloader:empty:after{height: 48px ;width: 48px ;color: rgba(140, 2, 232, 0.08);display: inline-block;border: 4px solid;border-radius: 50%;border-right-color: rgb(140 2 232 / 28%);transform: rotate(0);animation: fr-loading-rotate 1s ease-in-out infinite;pointer-events: none;content:"";will-change: transform;}@keyframes fr-loading-rotate {0% {transform: rotate(0);}100% {transform: rotate(360deg);}}body.fr-rendered .fr-page-preloader {transform: scaleX(0);transform-origin: left center;}';
						wp_enqueue_script('blockpress-pagepreload');
					}
					if (str_contains($block['attrs']['className'], 'fr-scaleup-small') !== false) {
						$block_style .= '.fr-scaleup-small{transform: scale(1.07)}';
					}
					// if (str_contains($block['attrs']['className'], 'fr-lottieloader') !== false) {
					// 	wp_enqueue_script('fr-lottieloader');
					// 	$block_style .='.fr-lottieloader.lottie-loaded lottie-player{display:inline-block}';
					// }
					if (str_contains($block['attrs']['className'], 'is-style-full-height') !== false) {
						$block_style .= '.is-style-full-height {align-items: center;display: grid;min-height: 100vh;}';
					}
					if (str_contains($block['attrs']['className'], 'is-style-no-margin') !== false) {
						$block_style .= '.is-style-no-margin {margin:0 !important;}';
					}
					if (str_contains($block['attrs']['className'], 'fr-negative-margin-5') !== false) {
						$block_style .= '.fr-negative-margin-5{margin-top:-5rem !important;position: relative;z-index: 2;}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-negative-margin-3') !== false) {
						$block_style .= '.fr-negative-margin-3{margin-top:-3rem !important;position: relative;z-index: 2;}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-negative-margin-10') !== false) {
						$block_style .= '.fr-negative-margin-10{margin-top:-10rem !important;position: relative;z-index: 2;}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-negative-margin-bottom-3') !== false) {
						$block_style .= '.fr-negative-margin-bottom-3{margin-bottom:-3rem !important;position: relative;z-index: 2;}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-negative-margin-bottom-5') !== false) {
						$block_style .= '.fr-negative-margin-bottom-5{margin-bottom:-5rem !important;position: relative;z-index: 2;}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-negative-margin-bottom-10') !== false) {
						$block_style .= '.fr-negative-margin-bottom-10{margin-bottom:-10rem !important;position: relative;z-index: 2;}';
					}
					if (str_contains($block['attrs']['className'], 'is-style-border-bottom') !== false) {
						$block_style .= '.is-style-border-bottom {border-bottom:1px solid var(--wp--preset--color--lightborder)}';
					}
					
				}else if ($block['blockName'] == 'core/post-navigation-link') {
					if (str_contains($block['attrs']['className'], 'is-style-hovershadow') !== false) {
						$block_style .= '.wp-block-post-navigation-link.is-style-hovershadow:before{position: absolute;top: 0;right: 0;left: 0;bottom: 0;transition: box-shadow 0.5s var(--blockpress-transition);content: "";border-radius: 5px;border: 1px solid #eee;}.wp-block-post-navigation-link.is-style-hovershadow:hover:before{box-shadow: 0 3px 40px rgb(188 207 219 / 35%);}.wp-block-post-navigation-link.is-style-hovershadow:empty:before{display:none}.wp-block-post-navigation-link.is-style-hovershadow{padding:20px}.wp-block-post-navigation-link.is-style-hovershadow a{text-decoration:none}';
					}
				} else if ($block['blockName'] == 'core/post-featured-image') {
					if (str_contains($block['attrs']['className'], 'is-style-fr-half-image-offset') !== false) {
						$block_style .= '.is-style-fr-half-image-offset::before {content: "";position: absolute;left: 0;bottom: 0;height: 50%;background-color: white;width:100vw;margin-left: calc(-100vw / 2 + 100% / 2);margin-right: calc(-100vw / 2 + 100% / 2);}.is-style-fr-half-image-offset, .is-style-fr-half-image-offset img{position:relative; margin-top:0; margin-bottom:0}';
					}
                    else if (str_contains($block['attrs']['className'], 'is-style-fr-shadowradius') !== false) {
						$block_style .= '.is-style-fr-shadowradius{box-shadow: 0 0 50px rgb(49 45 161 / 12%);border-radius: 20px;}';
					}
					if (str_contains($block['attrs']['className'], 'fr-hover-scale-img') !== false) {
						$block_style .= '.fr-hover-scale-img {overflow:hidden}.fr-hover-scale-img img{transition: transform .6s var(--blockpress-transition);}.fr-hover-scale-img:hover img {transform: scale(1.05);}.fr-hover-scale-img a{display:block}';
					}
				}else if ($block['blockName'] == 'core/image') {
					if (str_contains($block['attrs']['className'], 'is-style-no-margin') !== false) {
						$block_style .= '.wp-block-image.is-style-no-margin {margin:0 !important;}';
					}
					if (str_contains($block['attrs']['className'], 'fr-negative-margin-5') !== false) {
						$block_style .= '.fr-negative-margin-5{margin-top:-5rem !important;position: relative;z-index: 2;}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-negative-margin-3') !== false) {
						$block_style .= '.fr-negative-margin-3{margin-top:-3rem !important;position: relative;z-index: 2;}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-negative-margin-10') !== false) {
						$block_style .= '.fr-negative-margin-10{margin-top:-10rem !important;position: relative;z-index: 2;}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-negative-margin-bottom-3') !== false) {
						$block_style .= '.fr-negative-margin-bottom-3{margin-bottom:-3rem !important;position: relative;z-index: 2;}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-negative-margin-bottom-5') !== false) {
						$block_style .= '.fr-negative-margin-bottom-5{margin-bottom:-5rem !important;position: relative;z-index: 2;}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-negative-margin-bottom-10') !== false) {
						$block_style .= '.fr-negative-margin-bottom-10{margin-bottom:-10rem !important;position: relative;z-index: 2;}';
					}
				}
				else if ($block['blockName'] == 'core/list') {
					if (str_contains($block['attrs']['className'], 'is-style-nounderline') !== false) {
						$block_style .= 'ul.is-style-nounderline {margin:0; padding:0;list-style:none}ul.is-style-nounderline a{text-decoration:none}ul.is-style-nounderline li{list-style:none}';
					}
				} else if ($block['blockName'] == 'core/navigation-link') {
					if (str_contains($block['attrs']['className'], 'is-style-fill-black') !== false) {
						$block_style .= '.wp-block-navigation-item.is-style-fill-black a{background-color:var(--wp--custom--color--black);color:var(--wp--custom--color--white);padding:5px 15px !important; line-height: 1.8 }
						.wp-block-navigation-item.is-style-fill-black a:focus,.wp-block-navigation-item.is-style-fill-black a:hover{background-color:var(--wp--custom--color--white);color:var(--wp--custom--color--black)}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-outline-black') !== false) {
						$block_style .= '.wp-block-navigation-item.is-style-outline-black a{border:1px solid var(--wp--custom--color--black); background-color:transparent;color:var(--wp--custom--color--black);padding:5px 15px !important; line-height: 1.8}
						.wp-block-navigation-item.is-style-outline-black a:focus,.wp-block-navigation-item.is-style-outline-black a:hover{background-color:var(--wp--custom--color--black);color:var(--wp--custom--color--white)}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-fill-white') !== false) {
						$block_style .= '.wp-block-navigation-item.is-style-fill-white a{background-color:var(--wp--custom--color--white);color:var(--wp--custom--color--black);padding:5px 15px !important; line-height: 1.8 }
						.wp-block-navigation-item.is-style-fill-white a:focus,.wp-block-navigation-item.is-style-fill-white a:hover{background-color:var(--wp--custom--color--black);color:var(--wp--custom--color--white)}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-outline-white') !== false) {
						$block_style .= '.wp-block-navigation-item.is-style-outline-white a{border:1px solid var(--wp--custom--color--white); background-color:transparent;color:var(--wp--custom--color--white);padding:5px 15px !important; line-height: 1.8}
						.wp-block-navigation-item.is-style-outline-white a:focus,.wp-block-navigation-item.is-style-outline-white a:hover{background-color:var(--wp--custom--color--white);color:var(--wp--custom--color--black)}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-accentbutton') !== false) {
						$block_style .= '.wp-block-navigation-item.is-style-accentbutton a{background-color:var(--wp--preset--color--button);color:var(--wp--preset--color--textonbutton);padding:5px 15px !important; line-height: 1.8 }';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-primarybtn') !== false) {
						$block_style .= '.wp-block-navigation-item.is-style-primarybtn a{background-color:var(--wp--preset--color--primary);color:var(--wp--preset--color--textonprimary);padding:5px 15px !important; line-height: 1.8 }';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-cubeprimarybtn') !== false) {
						$block_style .= '.wp-block-navigation-item.is-style-cubeprimarybtn a{background-color:var(--wp--preset--color--primary);color:var(--wp--preset--color--textonprimary);padding:5px 15px !important; line-height: 1.8;border:none !important;box-shadow: 0px 2px 4px rgb(45 35 66 / 20%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px rgb(58 65 111 / 50%);text-shadow: 0 1px 0 rgb(0 0 0 / 40%); border-radius:5px}.wp-block-navigation-item.is-style-cubeprimarybtn a:after{display:none}.wp-block-navigation-item.is-style-cubeprimarybtn a:active{transform: translateY(2px);box-shadow: 0px 2px 2px rgb(45 35 66 / 15%)}.wp-block-navigation-item.is-style-cubeprimarybtn a:hover{transform: translateY(-2px);}.wp-block-navigation-item.fr-cubebtndark a:hover{transform: translateY(-2px);}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-secondarybtn') !== false) {
						$block_style .= '.wp-block-navigation-item.is-style-secondarybtn a{background-color:var(--wp--preset--color--secondary);color:var(--wp--preset--color--textonprimary);padding:5px 15px !important; line-height: 1.8 }';
					}
					if (str_contains($block['attrs']['className'], 'fr-soft-rounded') !== false) {
						$block_style .= '.wp-block-navigation-item.fr-soft-rounded a{border-radius:5px}';
					}
					if (str_contains($block['attrs']['className'], 'fr-hard-rounded') !== false) {
						$block_style .= '.wp-block-navigation-item.fr-hard-rounded a{border-radius:100px}';
					}
					if (str_contains($block['attrs']['className'], 'fr-cubebtnwhite') !== false) {
						$block_style .= '.wp-block-navigation-item.fr-cubebtnwhite a{border:none !important; box-shadow: 0px 2px 4px rgb(45 35 66 / 10%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px #d6d6e7}.wp-block-navigation-item.fr-cubebtnwhite a:hover{transform: translateY(-2px);}.wp-block-navigation-item.fr-cubebtnwhite a:active{transform: translateY(2px);box-shadow: 0px 2px 2px rgb(45 35 66 / 15%)}.wp-block-navigation-item.fr-cubebtnwhite a:after{display:none}';
					}
					else if (str_contains($block['attrs']['className'], 'fr-cubebtndark') !== false) {
						$block_style .= '.wp-block-navigation-item.fr-cubebtndark a{border:none !important;box-shadow: 0px 2px 4px rgb(45 35 66 / 20%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px rgb(58 65 111 / 50%);
							text-shadow: 0 1px 0 rgb(0 0 0 / 40%);}.wp-block-navigation-item.fr-cubebtndark a:hover{transform: translateY(-2px);}.wp-block-navigation-item.fr-cubebtndark a:active{transform: translateY(2px);box-shadow: 0px 2px 2px rgb(45 35 66 / 15%)}.wp-block-navigation-item.fr-cubebtndark a:after{display:none}';
					}
				} else if ($block['blockName'] == 'core/post-terms') {
					if (str_contains($block['attrs']['className'], 'is-style-blockpress-tags-primary') !== false) {
						$block_style .= '.is-style-blockpress-tags-primary.wp-block-post-terms a{display:inline-block;margin:0 .25rem;background:var(--wp--preset--color--lighttag);padding:5px 10px;font-size:var(--wp--preset--font-size--xsmall);text-decoration:none;border-radius:5px; line-height:var(--wp--custom--line-height--normal);color:currentColor;}.is-style-blockpress-tags-primary.wp-block-post-terms .wp-block-post-terms__separator{display:none}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-blockpress-tags-secondary') !== false) {
						$block_style .= '.is-style-blockpress-tags-secondary.wp-block-post-terms a{display:inline-block;margin:0 .25rem;background:var(--wp--preset--color--lightsecondarytag);padding:5px 10px;font-size:var(--wp--preset--font-size--xsmall);text-decoration:none;border-radius:5px;line-height:var(--wp--custom--line-height--normal);color:currentColor;}.is-style-blockpress-tags-secondary.wp-block-post-terms .wp-block-post-terms__separator{display:none}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-fr-tags-rounded') !== false) {
						$block_style .= '.is-style-fr-tags-rounded.wp-block-post-terms a{display:inline-block;margin:0 .25rem .25rem .25rem;padding:2px 10px;text-decoration:none;border-radius:50px;color:currentColor;border:1px solid currentColor; opacity:0.8; transition: opacity 0.5s ease }.is-style-fr-tags-rounded.wp-block-post-terms .wp-block-post-terms__separator{display:none}.is-style-fr-tags-rounded.wp-block-post-terms a:hover{opacity:1}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-blockpress-tags-nounder') !== false) {
						$block_style .= '.is-style-blockpress-tags-nounder.wp-block-post-terms a{text-decoration: none;display:inline;background-repeat:no-repeat;background-image:linear-gradient(transparent calc(100% - 1px),currentColor 1px);transition:.7s var(--blockpress-transition);background-size:0 95%;}.is-style-blockpress-tags-nounder.wp-block-post-terms a:hover{background-size:100% 95%}';
					}
				} else if ($block['blockName'] == 'core/author') {
					if (str_contains($block['attrs']['className'], 'is-style-img-h-25') !== false) {
						$block_style .= '.is-style-img-h-25.wp-block-post-author img{height:25px; width:25px}';
					}
				}else if ($block['blockName'] == 'core/categories') {
					if (str_contains($block['attrs']['className'], 'is-style-listcategories') !== false) {
						$block_style .= 'ul.is-style-listcategories, .is-style-listcategories ul{display:flex; flex-wrap:wrap;
							padding: 0 !important; gap:12px; font-size:17px}.is-style-listcategories li{list-style:none;padding:5px 10px;background:var(--wp--preset--color--lightsecondarytag); transition: transform 0.3s var(--blockpress-transition)}.is-style-listcategories li a{ text-decoration:none}.is-style-listcategories li:hover{transform: scale(1.07)}';
					}
				}else if ($block['blockName'] == 'woocommerce/product-categories') {
					if (str_contains($block['attrs']['className'], 'is-style-listcategories') !== false) {
						$block_style .= 'ul.is-style-listcategories, .is-style-listcategories ul{display:flex; flex-wrap:wrap;
							padding: 0 !important; gap:12px; font-size:17px}.is-style-listcategories li{list-style:none;padding:5px 10px;background:var(--wp--preset--color--lightsecondarytag); transition: transform 0.3s var(--blockpress-transition)}.is-style-listcategories li a{ text-decoration:none}.is-style-listcategories li:hover{transform: scale(1.07)}';
					}
				} else if ($block['blockName'] == 'core/query') {
					if (str_contains($block['attrs']['className'], 'is-style-fr-borderquery') !== false) {
						$block_style .= '.is-style-fr-borderquery > ul > li{border:1px solid #eee; padding:15px;box-sizing: border-box; margin-bottom:1.25em}.is-style-fr-borderquery figure{margin-top:0}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-fr-bordernopaddquery') !== false) {
						$block_style .= '.is-style-fr-bordernopaddquery > ul > li{border:1px solid #eee; padding:15px;box-sizing: border-box;margin-bottom:1.25em}.editor-styles-wrapper .is-style-fr-bordernopaddquery figure.wp-block-post-featured-image, .is-style-fr-bordernopaddquery figure.wp-block-post-featured-image{margin:-15px -15px 12px -15px !important}';
					}
                    else if (str_contains($block['attrs']['className'], 'is-style-fr-shadowradius-query') !== false) {
						$block_style .= '.is-style-fr-shadowradius-query > ul > li{box-shadow: 0 0 50px rgb(49 45 161 / 16%);border-radius: 20px;overflow:hidden}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-fr-innerborderquery') !== false) {
						$block_style .= '.is-style-fr-innerborderquery > ul > li{position:relative;transition: transform .5s ease}.is-style-fr-innerborderquery > ul > li:before{position: absolute;top: 12px;right: 12px;z-index: 2;opacity: 1;transform: scale(1);bottom: 12px;left: 12px;border: 1px solid #e1e3ed69;content: "";pointer-events: none;transition: opacity .35s,transform .6s;}.is-style-fr-innerborderquery > ul > li:hover:before{transform: scale(1.25);opacity:0}.is-style-fr-innerborderquery > ul > li:hover{transform: translateY(-5px)}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-fr-brdnpaddradius') !== false) {
						$block_style .= '.is-style-fr-brdnpaddradius > ul > li{border-radius:8px; padding:15px;box-sizing: border-box;box-shadow:-2px 3px 10px 1px rgb(202 202 202 / 26%);margin-bottom:1.25em}.editor-styles-wrapper .is-style-fr-brdnpaddradius figure.wp-block-post-featured-image, .is-style-fr-brdnpaddradius figure.wp-block-post-featured-image{margin:-15px -15px 12px -15px !important;border-radius:8px 8px 0 0}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-fr-box-on-image') !== false) {
						$block_style .= '.is-style-fr-box-on-image > ul > li > .wp-block-group{margin:-100px 30px 50px 30px; position:relative; box-shadow:0 0 50px rgb(0 0 0 / 10%); border-radius:10px}.is-style-fr-box-on-image > ul > li .wp-block-post-featured-image{border-radius:10px}.is-style-fr-box-creative > ul.is-flex-container > li > .wp-block-group{margin: -50px 30px 0 30px}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-fr-box-creative') !== false) {
						$block_style .= '.is-style-fr-box-creative > ul > li > .wp-block-group{margin:-80px 50px 50px 0; position:relative; box-shadow:0 0 50px rgb(0 0 0 / 10%); border-radius:0 18px 18px 18px}.is-style-fr-box-creative > ul > li .wp-block-post-featured-image{border-radius:18px}.is-style-fr-box-creative > ul.is-flex-container > li > .wp-block-group{margin: -50px 50px 0 0}';
					}
					if (str_contains($block['attrs']['className'], 'is-style-fr-smartscrollitems') !== false) {
						$block_style .= '.is-style-fr-smartscrollitems{overflow-x: auto !important;overflow-y: hidden;white-space: nowrap; -webkit-overflow-scrolling: touch;scroll-behavior: smooth;scroll-snap-type: x mandatory;}.is-style-fr-smartscrollitems > ul{flex-wrap: nowrap !important;}.is-style-fr-smartscrollitems > ul > li{border-radius:8px; padding:15px;box-sizing: border-box;border:1px solid #eee;margin-bottom:1.25em; min-width:230px;display: inline-block;margin: 0 13px 0px 0 !important;white-space: normal !important;scroll-snap-align: start;}.editor-styles-wrapper .is-style-fr-smartscrollitems figure.wp-block-post-featured-image, .is-style-fr-smartscrollitems figure.wp-block-post-featured-image{margin:-15px -15px 12px -15px !important}.is-style-fr-smartscrollitems figure.wp-block-post-featured-image img{border-radius:8px 8px 0 0}.is-style-fr-smartscrollitems::-webkit-scrollbar-track{background-color:transparent;border-radius:20px}.is-style-fr-smartscrollitems::-webkit-scrollbar-thumb{background-color:transparent;border-radius:20px;border:1px solid transparent}.is-style-fr-smartscrollitems:hover::-webkit-scrollbar-thumb{background-color:#ddd;}.is-style-fr-smartscrollitems:hover{scrollbar-color: #ddd #fff;}';
					}
				} else if ($block['blockName'] == 'core/paragraph') {
					if (str_contains($block['attrs']['className'], 'is-style-no-margin') !== false) {
						$block_style .= '.is-style-no-margin {margin:0 !important;}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-nounderline') !== false) {
						$block_style .= 'p.is-style-nounderline a{text-decoration:none}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-roundbig') !== false) {
						$block_style .= 'p.is-style-roundbig{width: 50px;height: 50px;line-height: 50px;text-align: center;border-radius: 50%;padding:0 !important}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-roundsmall') !== false) {
						$block_style .= 'p.is-style-roundsmall{width: 33px;height: 33px;line-height: 33px;text-align: center;border-radius: 50%;padding:0 !important}';
					}
				}else if ($block['blockName'] == 'core/columns') {
					if (str_contains($block['attrs']['className'], 'fr-tablet-collapse') !== false) {
						$block_style .= '@media only screen and (max-width: 992px){.fr-tablet-collapse{display: flex;flex-direction: column;flex-wrap: wrap;}.fr-tablet-collapse.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:first-child){margin-left:0}}';
					}
				}else if ($block['blockName'] == 'core/heading') {
					if (str_contains($block['attrs']['className'], 'is-style-line-separator') !== false) {
						$block_style .= '.is-style-line-separator{display:flex; align-items:center; gap:10px}.is-style-line-separator:before{content: "";width: 50px;border-top-width: 2px;border-top-color: var(--wp--preset--color--primary);border-top-style: solid;display: inline-block;}';
					}
				}else if ($block['blockName'] == 'core/search') {
					if (str_contains($block['attrs']['className'], 'is-style-floating-white-search') !== false) {
						if(!is_admin()){
							wp_enqueue_style('blockpress-floating-search');
							wp_enqueue_script('blockpress-floating-search');
						}
					}
				}else if ($block['blockName'] == 'core/column') {
					if (str_contains($block['attrs']['className'], 'fr-scaleup-small') !== false) {
						$block_style .= '.fr-scaleup-small{transform: scale(1.07)}';
					}
					if (str_contains($block['attrs']['className'], 'is-style-no-gap') !== false) {
						$block_style .= '.is-style-no-gap{margin-left:0 !important; margin-right:0 !important; margin-top:0 !important}';
					}
				}else if ($block['blockName'] == 'core/post-excerpt' || $block['blockName'] == 'core/post-title') {
					if (str_contains($block['attrs']['className'], 'is-style-text-clamp-two') !== false) {
						$block_style .= '.is-style-text-clamp-two p, .wp-block-post-title.is-style-text-clamp-two{display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;  overflow: hidden; margin:0}';
					}
					else if (str_contains($block['attrs']['className'], 'is-style-text-clamp-three') !== false) {
						$block_style .= '.is-style-text-clamp-three p, .wp-block-post-title.is-style-text-clamp-three{display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;  overflow: hidden; margin:0}';
					}
				}else if ($block['blockName'] == 'core/navigation-submenu') {
					if (str_contains($block['attrs']['className'], 'is-style-mega-menu-right') !== false || str_contains($block['attrs']['className'], 'is-style-mega-menu-left') !== false) {
						wp_enqueue_style('blockpress-mega-menu');
					}
                    if (str_contains($block['attrs']['className'], 'gs-el-onhover') !== false ) {
                        wp_enqueue_script('blockpress-mega-menu');
						$block_style .= '.wp-block-navigation-item.gs-el-onhover.has-child .wp-block-navigation__submenu-container{width:100%; left:0; right:0; box-shadow:none;padding-left: 0 !important;padding-right: 0 !important; position:fixed; overflow:hidden}.wp-block-navigation-item.gs-el-onhover .wp-block-navigation__submenu-container:before{display:none !important}.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation-item.gs-el-onhover{display:block;width:100%}.wp-block-navigation-item.gs-el-onhover.has-child .wp-block-navigation__submenu-container .alignfull{margin-left: -1px !important; margin-right: -1px !important; max-width:100% !important; width:100%}';
					}
                    if (str_contains($block['attrs']['className'], 'gs-el-onclick') !== false ) {
                        wp_enqueue_script('blockpress-mega-menu');
						$block_style .= '.wp-block-navigation-item.gs-el-onclick.has-child .wp-block-navigation__submenu-container{width:100%; left:0; right:0; box-shadow:none;padding-left: 0 !important;padding-right: 0 !important; position:fixed; overflow:hidden}.wp-block-navigation-item.gs-el-onclick .wp-block-navigation__submenu-container:before{display:none !important}.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation-item.gs-el-onclick{display:block;width:100%}.wp-block-navigation-item.gs-el-onclick.has-child .wp-block-navigation__submenu-container .alignfull{margin-left: -1px !important; margin-right: -1px !important; max-width:100% !important; width:100%}';
					}
                    if (str_contains($block['attrs']['className'], 'hide-on-mobile') !== false ) {
						$block_style .= '@media(max-width:599px){.wp-block-navigation-item.hide-on-mobile{display:none !important}}';
					}
				}else if ($block['blockName'] == 'core/template-part') {
					if (str_contains($block['attrs']['className'], 'fr-position-absolute') !== false) {
						$block_style .= '.fr-position-absolute > div{position:absolute; left: var(--wp--custom--spacing--outer);right: var(--wp--custom--spacing--outer);z-index:999;}.has-modal-open .fr-position-absolute > div{z-index: 100001;} .fr-sticky-enable.fr-position-absolute > div{background:black !important;color:white; left:0; right:0}.fr-sticky-enable.fr-position-absolute.animate-to-white > div{background:white !important; color:black}.fr-sticky-enable.fr-position-absolute.animate-to-primary > div{background:var(--wp--preset--color--primary) !important; color:white}';
					}
				}else if ($block['blockName'] == 'woocommerce/product-search') {
					if (str_contains($block['attrs']['className'], 'is-style-theme-search-main') !== false) {
						$block_style .= '.is-style-theme-search-main button{background-color: var(--wp--preset--color--primary);border: 1px solid transparent;border-radius: 3px;color: var(--wp--preset--color--textonprimary);font-family: var(--wp--preset--font-family--primary);font-size: var(--wp--preset--font-size--small);padding-left:16px !important;padding-right:16px !important;text-decoration: none;white-space: normal;width: auto;transition: all 0.3s var(--blockpress-transition);display: inline-block;white-space: nowrap;}.is-style-theme-search-round input{border-radius: 3px;}';
					}else if (str_contains($block['attrs']['className'], 'is-style-theme-search-round') !== false) {
						$block_style .= '.is-style-theme-search-round button{background-color: var(--wp--preset--color--primary);border: 1px solid transparent;border-radius: 0 50px 50px 0;color: var(--wp--preset--color--textonprimary);font-family: var(--wp--preset--font-family--primary);font-size: var(--wp--preset--font-size--small);padding-left:20px !important;padding-right:20px !important;text-decoration: none;white-space: normal;width: auto;transition: all 0.3s var(--blockpress-transition);display: inline-block;white-space: nowrap;}.is-style-theme-search-round input{border-radius: 50px 0 0 50px;padding-left: 20px !important;}';
					}
				}else if ($block['blockName'] == 'core/site-logo' || $block['blockName'] == 'core/site-title' || $block['blockName'] == 'core/site-tagline') {
					if (str_contains($block['attrs']['className'], 'is-style-hideontabletdown') !== false) {
						$block_style .= '@media(max-width:991.98px){.is-style-hideontabletdown{display:none !important}}';
					}
				}
				if (str_contains($block['attrs']['className'], 'fr-animate') !== false) {
					if(!is_admin()){
						wp_enqueue_style('blockpress-animate');
						wp_enqueue_script('blockpress-animate');
					}
				}			
			}
			if (!empty($block['attrs'])) {
				if ($block['blockName'] == 'core/cover' || $block['blockName'] == 'core/column' || $block['blockName'] == 'core/columns' || $block['blockName'] == 'core/group'|| $block['blockName'] == 'core/template-part' || $block['blockName'] == 'core/image' || $block['blockName'] == 'core/button' || $block['blockName'] == 'core/site-title' || $block['blockName'] == 'core/site-logo') {
					if (!empty($block['attrs']['frhideOnMobile'])) {
						$block_style .= '@media(max-width:575.98px){.fr-mobile-hide{display:none !important}}';
					}
					if (!empty($block['attrs']['frhideOnTablet'])) {
						$block_style .= '@media(max-width:991.98px) and (min-width:576px){.fr-tablet-hide{display:none !important}}';
					}
					if (!empty($block['attrs']['frhideOnDesktop'])) {
						$block_style .= '@media(min-width:992px){.fr-desktop-hide{display:none !important}}';
					}
					if ($block['blockName'] == 'core/column' || $block['blockName'] == 'core/group') {
						if (!empty($block['attrs']['frsetSticky'])) {
							$block_style .= '@media(min-width:992px){.fr-position-sticky{position:sticky !important; top: calc(30px + var(--blockpress-sticky-height, 0px));align-self: flex-start !important;}}';
						}
						if (!empty($block['attrs']['frMobCentertext'])) {
							$block_style .= '@media(max-width:575.98px){.fr-mobile-textcenter, .fr-mobile-textcenter > *{text-align: center !important;justify-content: center !important;}}';
						}
						if (!empty($block['attrs']['frMobPaddingDisable'])) {
							$block_style .= '@media(max-width:575.98px){.fr-mobile-paddingdisable{padding:0 !important;}}';
						}
						if ($block['blockName'] == 'core/group' && !empty($block['attrs']['frStickyHeader'])) {
							wp_enqueue_style('blockpress-stickyheader');
							wp_enqueue_script('blockpress-stickyheader');
						}
					}
				}
			}
		}

		if ($block_style) {
			$html =  $html . '<style scoped>' . $block_style . '</style>';
		}
	}
	return $html;
}


add_filter('render_block_core/navigation-link', 'blockpress_theme_megamenu_filter', 10, 2);
function blockpress_theme_megamenu_filter($html, $block)
{
    if(!empty($block['attrs']['label']) && $block['attrs']['label'] == 'MEGAMENU' && !empty($block['attrs']['description'])){
        if(!is_admin()){
            return do_shortcode($block['attrs']['description']);
        }
    }
    return $html;
}


////////////////////////////////////////////////////////////////
//Woocommerce conditional assets
////////////////////////////////////////////////////////////////

if(!function_exists('blockpress_generate_incss')) {
    function blockpress_generate_incss($type='', $random = '', $atts=array()) {  
        $output = '<style scoped>';
        if($type === 'woocart'){
            $output .= '
            .woocommerce-cart .wp-block-post-title{text-align:center}
            .entry-content .woocommerce{padding:min(3vw, 25px)}
            .entry-content .woocommerce{max-width:1200px}
            .woocommerce:after {
                display: table;
                content: "";
                clear: both;
            }
            .woocommerce .cart-collaterals{margin-bottom:30px}
            .woocommerce table.cart, .woocommerce .cart-collaterals table{border:none}
            .woocommerce table.cart thead th, .woocommerce .cart-collaterals table thead th{border-right:none; font-size:15px}
            .woocommerce table.cart td, .woocommerce table.cart th, .woocommerce .cart-collaterals table th, .woocommerce .cart-collaterals table td{border-right:none; background:transparent; padding:15px}
            .woocommerce .cart-collaterals table tr:last-child th, .woocommerce .cart-collaterals table tr:last-child td {border-bottom: none;    padding-top: 22px;}
            table.shop_table_responsive td:not([colspan]):after{border-left:none !important}
            .woocommerce table.cart tr td:last-child, .woocommerce table.cart tr th:last-child {
                text-align: right;
                background:none transparent;
            }
            .cart-collaterals ul li{list-style:none !important}
            .cart_totals .wc-proceed-to-checkout{ margin-top: 22px}
            tr.order-total th {
                font-size: 18px;
            }
            tr.order-total strong .amount {
                font-size: 22px;
            }
            .form-row-wide input[type="text"], .form-row-wide textarea, .form-row-wide select {
                box-shadow:none; border: 1px solid #ddd; font-size:15px; padding: 10px;
            }
              .woocommerce table.cart .product-thumbnail { min-width: 100px; text-align: center;}
              .woocommerce table.cart img { width: 50px; height: auto; }
              .woocommerce table.cart th{ vertical-align: middle; }
              .woocommerce table.cart a.remove{ display: block; font-size: 32px; height: 1em; width: 1em; text-align: center; line-height: 1; border-radius: 100%; color: red; text-decoration: none; margin: 0 auto; }
              .woocommerce table.cart a.remove:hover{ background-color: red; color: #fff; }
              .woocommerce table.cart td.actions { text-align: right; padding: 20px 0; border-bottom:none }
              .woocommerce table.cart td.actions .coupon { float: left; }
              .woocommerce table.cart td.actions .coupon label{ display: none; }
              .woocommerce table.cart td.actions .coupon .input-text{ box-shadow: none !important; float: left; border: 1px solid #ddd; margin: 0 4px 0 0; outline: 0; line-height: 1em; }
              .woocommerce table.cart td.actions .button.alt { float: right; margin-left: .25em; }
              .woocommerce table.cart input{ margin: 0; vertical-align: middle; line-height: 1em; }
              .woocommerce .cart-collaterals:after, .woocommerce-page .cart-collaterals:after { content: ""; display: block; clear: both; }
              .woocommerce .cart-collaterals .cross-sells .products, .woocommerce-page .cart-collaterals .cross-sells .products { float: none; }
              .woocommerce .cart-collaterals .shipping_calculator { width: 48%; text-align: right; margin: 20px 0 0 0; }
              .woocommerce .cart-collaterals .shipping_calculator:after { content: ""; display: block; clear: both; }
              .woocommerce .cart-collaterals .shipping_calculator .button { width: 100%; float: none; display: block; }
              .woocommerce .cart-collaterals .shipping_calculator .col2-set .col-1, .woocommerce .cart-collaterals .shipping_calculator .col2-set .col-2{ width: 47%; }
              .woocommerce .cart-collaterals .cart_totals { padding: 25px 25px 30px 25px;border: 3px solid #EFEFEF; font-size: 15px; }
                .woocommerce .cart-collaterals h2{font-size:20px; margin: 0 0 20px 0;    text-transform: uppercase;}
              .woocommerce .cart-collaterals .cart_totals p { margin: 0;line-height: 20px;color: #999;font-size: 14px; }
              .woocommerce .cart-collaterals .cart_totals p small { color: #777; font-size: .83em; }
              .woocommerce .cart-collaterals .cart_totals table { border-collapse: separate; border-radius: 5px; margin: 0 0 6px; padding: 0;}
              .woocommerce .cart-collaterals .cart_totals table tr:first-child th, .woocommerce .cart-collaterals .cart_totals table tr:first-child td { border-top: 0; }
              .woocommerce .cart-collaterals .cart_totals table td, .woocommerce .cart-collaterals .cart_totals table th { padding: 6px 3px; }
              .woocommerce .cart-collaterals .cart_totals table small { display: block; color: #777; }
              .woocommerce .cart-collaterals .cart_totals table select { width: 100%; }
              .woocommerce .cart-collaterals .cart_totals .discount td { color: #247600; }
              .woocommerce .cart-collaterals .cart_totals tr td, .woocommerce .cart-collaterals .cart_totals tr th {padding: 10px 15px; border-bottom: 1px solid #E6E6E6;}
              .woocommerce .cart-collaterals .cart_totals tr td:last-child,  .woocommerce .cart-collaterals .cart_totals tr th:last-child{text-align: right}
              .woocommerce .cart-collaterals .cart_totals a.button.alt { display: block; font-size: 18px; width: 100%;}
              @media (min-width:1300px){
                    .woocommerce-cart-form{width:67%; float:left}
                    .woocommerce .cart-collaterals { width: 30%;float: right; }
              }
              @media screen and (max-width: 768px){
                .woocommerce #content table.cart .product-thumbnail,
                .woocommerce table.cart .product-thumbnail,
                .woocommerce-page #content table.cart .product-thumbnail,
                .woocommerce-page table.cart .product-thumbnail {
                    display: none
                }
                
                .woocommerce #content table.cart td.actions,
                .woocommerce table.cart td.actions,
                .woocommerce-page #content table.cart td.actions,
                .woocommerce-page table.cart td.actions {
                    text-align: left
                }

                .rtl.woocommerce #content table.cart td.actions,
                .rtl.woocommerce table.cart td.actions,
                .rtl.woocommerce-page #content table.cart td.actions,
                .rtl.woocommerce-page table.cart td.actions {
                    text-align: right
                }
                
                .woocommerce #content table.cart td.actions .coupon,
                .woocommerce table.cart td.actions .coupon,
                .woocommerce-page #content table.cart td.actions .coupon,
                .woocommerce-page table.cart td.actions .coupon {
                    float: none;
                    padding-bottom: .5em
                }
                
                .woocommerce #content table.cart td.actions .button,
                .woocommerce table.cart td.actions .button,
                .woocommerce-page #content table.cart td.actions .button,
                .woocommerce-page table.cart td.actions .button {
                    display: block;
                    width: 100%
                }
                
                .woocommerce .cart-collaterals .cart_totals,
                .woocommerce .cart-collaterals .cross-sells,
                .woocommerce .cart-collaterals .shipping_calculator,
                .woocommerce-page .cart-collaterals .cart_totals,
                .woocommerce-page .cart-collaterals .cross-sells,
                .woocommerce-page .cart-collaterals .shipping_calculator {
                    width: 100%;
                    float: none;
                    text-align: left
                }
                .rtl.woocommerce .cart-collaterals .cart_totals,
                .rtl.woocommerce .cart-collaterals .cross-sells,
                .rtl.woocommerce .cart-collaterals .shipping_calculator,
                .rtl.woocommerce-page .cart-collaterals .cart_totals,
                .rtl.woocommerce-page .cart-collaterals .cross-sells,
                .rtl.woocommerce-page .cart-collaterals .shipping_calculator {
                    width: 100%;
                    float: none;
                    text-align: right
                }
                .woocommerce table.shop_table_responsive tr td .quantity{clear:both;float:right}
                .rtl.woocommerce table.shop_table_responsive tr td .quantity{clear:both;float:left}
              }
              @media screen and (max-width: 767px){
                .woocommerce table.cart img{width: 100px;}
              }
              @media only screen and (max-width: 767px) and (min-width: 480px) {
                .woocommerce .cart-collaterals .shipping_calculator, .woocommerce .cart-collaterals .cart_totals { float: none !important; width: 100% !important; }
                .woocommerce table.cart td.actions .coupon, .woocommerce table.cart input.button { margin-bottom: 10px !important;}
              }
              @media only screen and (max-width: 479px) {
                .woocommerce .cart-collaterals .cart_totals, .woocommerce .cart-collaterals .shipping_calculator, .woocommerce table.cart td.actions .coupon { float: none !important; width: 100% !important; }
                .woocommerce table.cart td.actions .coupon .input-text{width: 100%; display: block; margin: 0 0 20px 0}
              }
              .rtl .woocommerce .cart-collaterals .cart_totals tr td:last-child, .rtl .woocommerce .cart-collaterals .cart_totals tr th:last-child, .rtl .woocommerce table.cart tr td:last-child, .rtl .woocommerce table.cart tr th:last-child{text-align: left}
              .rtl .woocommerce table.cart td.actions .coupon, .rtl .woocommerce table.cart td.actions .coupon .input-text{float:right}
              .rtl .woocommerce table.cart td.actions .coupon .input-text{margin-left:4px}
            ';           
        }
        else if($type === 'woomyaccount'){
            $output .= '
            .woocommerce-account .wp-block-post-title{text-align:center}
            .entry-content .woocommerce{padding:min(3vw, 25px); min-height:500px}
            .entry-content .woocommerce{max-width:1200px}
            .woocommerce:after {
                display: table;
                content: "";
                clear: both;
            }

            .woocommerce-account .woocommerce::after,
            .woocommerce-account .woocommerce::before {
                content: " ";
                display: table
            }

            .woocommerce-account .woocommerce::after {
                clear: both
            }

            .woocommerce-account .addresses .title::after,
            .woocommerce-account .addresses .title::before {
                content: " ";
                display: table
            }

            .woocommerce-account .addresses .title::after {
                clear: both
            }

            .woocommerce-account .addresses .title h3 {
                float: left
            }

            .woocommerce-account .addresses .title .edit {
                float: right
            }

            .woocommerce-account ol.commentlist.notes li.note p.meta {
                font-weight: 700;
                margin-bottom: 0
            }

            .woocommerce-account ol.commentlist.notes li.note .description p:last-child {
                margin-bottom: 0
            }

            .woocommerce-account ul.digital-downloads {
                margin-left: 0;
                padding-left: 0
            }

            .woocommerce-account ul.digital-downloads li {
                list-style: none;
                margin-left: 0;
                padding-left: 0
            }

            .woocommerce-account ul.digital-downloads li::before {
                font-family: WooCommerce;
                speak: never;
                font-weight: 400;
                font-variant: normal;
                text-transform: none;
                line-height: 1;
                -webkit-font-smoothing: antialiased;
                margin-right: .618em;
                content: "\e00a";
                text-decoration: none
            }

            .woocommerce-account ul.digital-downloads li .count {
                float: right
            }
            .woocommerce-MyAccount-content{font-size: var(--wp--preset--font-size--small);}
              .woocommerce-MyAccount-content .woocommerce-info{background-color: #fff;border:none;box-shadow:none}
              .woocommerce-MyAccount-navigation{float: left; width: 200px}
              .woocommerce-MyAccount-content {float: right;width: calc(100% - 220px);border: 1px solid #eee;padding: 18px;background: #fafafa; }
              .woocommerce-MyAccount-navigation ul{margin: 0 0 20px 0; overflow: hidden;padding:0}
              .woocommerce-MyAccount-navigation ul li{list-style: none; margin: 0; padding: 10px 0;border-top: 1px solid #eee;}
              .woocommerce-MyAccount-navigation ul li a{display: block;  font-weight: bold;text-decoration: none; font-size: 14px;}
              .woocommerce-MyAccount-navigation ul li a:not(.is-active){color: #111}
              .woocommerce-MyAccount-navigation ul li a:before{display:none;content:"\f101";line-height:1.618;margin-left:.53em;width:1.387em;text-align:right;float:right;opacity:.25}.woocommerce-MyAccount-navigation ul li.woocommerce-MyAccount-navigation-link--dashboard a:before{content:"\f1de";}.woocommerce-MyAccount-navigation ul li.woocommerce-MyAccount-navigation-link--orders a:before{content:"\f291"}.woocommerce-MyAccount-navigation ul li.woocommerce-MyAccount-navigation-link--downloads a:before{content:"\f1c6"}.woocommerce-MyAccount-navigation ul li.woocommerce-MyAccount-navigation-link--edit-address a:before{content:"\f015"}.woocommerce-MyAccount-navigation ul li.woocommerce-MyAccount-navigation-link--payment-methods a:before{content:"\f09d"}.woocommerce-MyAccount-navigation ul li.woocommerce-MyAccount-navigation-link--edit-account a:before{content:"\f007"}.woocommerce-MyAccount-navigation ul li.woocommerce-MyAccount-navigation-link--customer-logout a:before{content:"\f08b"}.woocommerce-MyAccount-navigation ul li.woocommerce-MyAccount-navigation-link--subscriptions a:before{content:"\f021"}
              .woocommerce-MyAccount-navigation ul li a:hover:before, .woocommerce-MyAccount-navigation ul li.is-active a:before{opacity:1}
              .woocommerce-MyAccount-content legend{font-size: 18px; padding: 20px 0}
              .woocommerce-MyAccount-content fieldset{margin: 0 0 10px 0}
              .woocommerce-account.page .post{overflow: hidden}
              .woocommerce table.my_account_orders { font-size: .85em; }
              .woocommerce table.my_account_orders th, .woocommerce table.my_account_orders td { padding: 12px 8px; vertical-align: middle; }
              .woocommerce table.my_account_orders .button {margin: 6px;font-size: 13px;text-transform: none;font-weight: normal;padding: 5px 10px;}
              .woocommerce table.my_account_orders .order-actions{ text-align: center; }
              .woocommerce table.my_account_orders .order-actions .button { margin: .125em 0 .125em .25em; }
              #customer_login{position: relative;}
              #customer_login::before {border-right: 1px solid #eee;height: 100%;position: absolute;content: " ";right: 50%;top: 0;}
              #customer_login .col-1, #customer_login .col-2{}
              #customer_login .col-1{padding-right: 20px}
              #customer_login .col-2{padding-left: 20px}
              #customer_login h2{font-weight: 400}
              @media screen and (max-width: 768px){
                .woocommerce table.my_account_orders tr td.order-actions,
                .woocommerce-page table.my_account_orders tr td.order-actions {
                    text-align: left
                }

                .rtl.woocommerce table.my_account_orders tr td.order-actions,
                .rtl.woocommerce-page table.my_account_orders tr td.order-actions {
                    text-align: right
                }
                
                .woocommerce table.my_account_orders tr td.order-actions::before,
                .woocommerce-page table.my_account_orders tr td.order-actions::before {
                    display: none
                }
                
                .woocommerce table.my_account_orders tr td.order-actions .button,
                .woocommerce-page table.my_account_orders tr td.order-actions .button {
                    float: none;
                    margin: .125em .25em .125em 0
                }
                .rtl.woocommerce table.my_account_orders tr td.order-actions .button,
                .rtl.woocommerce-page table.my_account_orders tr td.order-actions .button {
                    float: none;
                    margin: .125em 0 .125em .25em
                }
                .woocommerce .lost_reset_password .form-row-first,
                .woocommerce .lost_reset_password .form-row-last,
                .woocommerce-page .lost_reset_password .form-row-first,
                .woocommerce-page .lost_reset_password .form-row-last {
                    width: 100%;
                    float: none;
                    margin-right: 0
                }

                .rtl.woocommerce .lost_reset_password .form-row-first,
                .rtl.woocommerce .lost_reset_password .form-row-last,
                .rtl.woocommerce-page .lost_reset_password .form-row-first,
                .rtl.woocommerce-page .lost_reset_password .form-row-last {
                    width: 100%;
                    float: none;
                    margin-left: 0
                }

                .woocommerce-account .woocommerce-MyAccount-content,
                .woocommerce-account .woocommerce-MyAccount-navigation {
                    float: none;
                    width: 100%
                }
              }
              @media screen and (max-width: 767px){
                #customer_login::before{display: none;}
                #customer_login .col-1{padding-right: 0}
                #customer_login .col-2{padding-left: 0}
                .woocommerce-MyAccount-content, .woocommerce-MyAccount-navigation{float: none; width: 100%; margin: 0 0 20px 0}
              }
            ';           
        }
        else if($type === 'woocheckout'){
            $output .= '
            .woocommerce-checkout .wp-block-post-title{text-align:center}
            .entry-content .woocommerce{padding:min(3vw, 25px)}
            .entry-content .woocommerce{max-width:1200px}
            .woocommerce-info{background-color: #f7f7f7;}
              .woocommerce .checkout_coupon .button{ padding: 10px 16px}
              .woocommerce table.shop_table.woocommerce-checkout-review-order-table thead th, .woocommerce table.shop_table.woocommerce-checkout-review-order-table tfoot td, .woocommerce table.shop_table.woocommerce-checkout-review-order-table tfoot th{text-transform:uppercase;border-right: none; background: none transparent; padding: 0.8em 0}
              .woocommerce table.shop_table.woocommerce-checkout-review-order-table{border:none}
              .woocommerce table.shop_table.woocommerce-checkout-review-order-table .product-total, .woocommerce table.shop_table.woocommerce-checkout-review-order-table tfoot td{text-align: right}
              .woocommerce table.shop_table.woocommerce-checkout-review-order-table td{border-right:none; padding: 0.3em 0; font-size: 90%}
              .woocommerce form.checkout_coupon{ border-bottom: 1px dashed #ccc; padding: 0 0 20px 0; margin: 2em 0; text-align: left; overflow: auto; }
              #customer_details{float: left; width: 48%;}
              .re_woocheckout_order{float: right; width: 48%; border: 3px solid #dbdbdb; padding:30px;  background-color: #fff;}
              .re_woocheckout_order h3{margin-top: 0;text-transform: uppercase;}
              a.about_paypal, .lost_password a{font-size: 80%}
              a.about_paypal{display: block;}
              .woocommerce .woocommerce-checkout .col2-set .col-1, .woocommerce .woocommerce-checkout .col2-set .col-2{float: none; width: 100%}
              .woocommerce .checkout .col-2 h3 { float: left; clear: none; }
              .woocommerce .checkout .col-2 .notes { clear: left; }
              .woocommerce .checkout .col-2 .form-row-first { clear: left; }
              .woocommerce .checkout div.shipping-address{ padding: 0; clear: left; width: 100%; }
              .woocommerce .checkout #shiptobilling{ float: right; line-height: 1.62em; margin: 0; padding: 0; }
              .woocommerce .checkout #shiptobilling label { font-size: .6875em; }
              .woocommerce .checkout .shipping_address { clear: both; }
              .woocommerce #payment ul.payment_methods { margin: 0; list-style: none outside; }
              .woocommerce #payment ul.payment_methods:after { content: ""; display: block; clear: both; }
              .woocommerce #payment ul.payment_methods li{ line-height: 1.8em; text-align: left; margin: 0; font-weight: normal; list-style: none;}
              .woocommerce #payment ul.payment_methods li input{ margin: 0 1em 0 0; }
              .woocommerce #payment ul.payment_methods li img{ vertical-align: middle; margin: -2px 10px 0 .5em; position: relative; }
              .woocommerce #payment #place_order { float: right; margin: 0; }
              .processing.woocommerce-checkout .place-order:before{display:inline-block; content: "\f021" !important; animation: fa-spin 1s linear infinite; margin: 5px 10px; float: right;}
              .woocommerce #payment .terms{ padding: 0 1em 0; text-align: right; }
              .woocommerce #payment div.payment_box{ position: relative; padding: 1em 2%; margin: 1em 0 1em 0; font-size: .92em; border-radius: 2px; line-height: 1.5em; background: #c5eafd; box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);  color: #5e5e5e; text-shadow: 0 1px 0 rgba(255,255,255,0.8); }
              .woocommerce #payment div.payment_box p:last-child{ margin-bottom: 0; }
              .woocommerce #payment div.payment_box #cc-expire-month, .woocommerce #payment div.payment_box #cc-expire-year{ width: 48%; float: left; }
              .woocommerce #payment div.payment_box #cc-expire-year{ float: right; }
              .woocommerce #payment div.payment_box span.help{ font-size: 11px; color: #777; line-height: 13px; font-weight: normal; }
              .woocommerce #payment div.payment_box .form-row{ margin: 0 0 1em; }
              .woocommerce #payment div.payment_box .form-row select { width: 48%; float: left; margin-right: 3.8%; }
              .woocommerce #payment div.payment_box .form-row select:nth-child(3n) { margin-right: 0 }
              .woocommerce #payment div.payment_box:after { content: ""; display: block; border: 8px solid #c5eafd; border-right-color: transparent; border-left-color: transparent; border-top-color: transparent; position: absolute; top: 0; left: 0; margin: -1em 0 0 2em; }
              #wpmc-prev{margin: 0 10px}

              @media screen and (max-width: 768px){
                .woocommerce-page.woocommerce-checkout form.login .form-row,
                .woocommerce.woocommerce-checkout form.login .form-row {
                    width: 100%;
                    float: none
                }
                .woocommerce #payment .terms,
                .woocommerce-page #payment .terms {
                    text-align: left;
                    padding: 0
                }

                .rtl.woocommerce #payment .terms,
                .rtl.woocommerce-page #payment .terms {
                    text-align: right;
                    padding: 0
                }

                .woocommerce #payment #place_order,
                .woocommerce-page #payment #place_order {
                    float: none;
                    width: 100%;
                    box-sizing: border-box;
                    margin-bottom: 1em
                }
              }
              @media screen and (max-width: 767px){
                #customer_details, .re_woocheckout_order{ width: 100%; float: none; }
              }

            ';           
        }
        else if($type== 'checkoutcart'){
            $output .= '
            #add_payment_method table.cart .product-thumbnail,
            .woocommerce-cart table.cart .product-thumbnail,
            .woocommerce-checkout table.cart .product-thumbnail {
                min-width: 32px
            }
            
            #add_payment_method table.cart img,
            .woocommerce-cart table.cart img,
            .woocommerce-checkout table.cart img {
                width: 32px;
                box-shadow: none
            }
            
            #add_payment_method table.cart td,
            #add_payment_method table.cart th,
            .woocommerce-cart table.cart td,
            .woocommerce-cart table.cart th,
            .woocommerce-checkout table.cart td,
            .woocommerce-checkout table.cart th {
                vertical-align: middle
            }
            
            #add_payment_method table.cart td.actions .coupon .input-text,
            .woocommerce-cart table.cart td.actions .coupon .input-text,
            .woocommerce-checkout table.cart td.actions .coupon .input-text {
                float: left;
                box-sizing: border-box;
                border: 1px solid #d3ced2;
                margin: 0 10px 0 0;
                outline: 0;
                min-width: 170px;
            }
            
            #add_payment_method table.cart input,
            .woocommerce-cart table.cart input,
            .woocommerce-checkout table.cart input {
                margin: 0;
                vertical-align: middle
            }
            
            #add_payment_method .wc-proceed-to-checkout,
            .woocommerce-cart .wc-proceed-to-checkout,
            .woocommerce-checkout .wc-proceed-to-checkout {
                padding: 1em 0
            }
            
            #add_payment_method .wc-proceed-to-checkout::after,
            #add_payment_method .wc-proceed-to-checkout::before,
            .woocommerce-cart .wc-proceed-to-checkout::after,
            .woocommerce-cart .wc-proceed-to-checkout::before,
            .woocommerce-checkout .wc-proceed-to-checkout::after,
            .woocommerce-checkout .wc-proceed-to-checkout::before {
                content: " ";
                display: table
            }
            
            #add_payment_method .wc-proceed-to-checkout::after,
            .woocommerce-cart .wc-proceed-to-checkout::after,
            .woocommerce-checkout .wc-proceed-to-checkout::after {
                clear: both
            }
            
            #add_payment_method .wc-proceed-to-checkout a.checkout-button,
            .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
            .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button {
                display: block;
                text-align: center;
                margin-bottom: 1em;
                font-size: 1.25em;
                padding: 1em
            }
            
            #add_payment_method .cart-collaterals .shipping-calculator-button,
            .woocommerce-cart .cart-collaterals .shipping-calculator-button,
            .woocommerce-checkout .cart-collaterals .shipping-calculator-button {
                float: none;
                margin-top: .5em;
                display: inline-block
            }
            
            #add_payment_method .cart-collaterals .shipping-calculator-button::after,
            .woocommerce-cart .cart-collaterals .shipping-calculator-button::after,
            .woocommerce-checkout .cart-collaterals .shipping-calculator-button::after {
                font-family: WooCommerce;
                speak: never;
                font-weight: 400;
                font-variant: normal;
                text-transform: none;
                line-height: 1;
                -webkit-font-smoothing: antialiased;
                margin-left: .618em;
                content: "\e019";
                text-decoration: none
            }
            
            #add_payment_method .cart-collaterals .shipping-calculator-form,
            .woocommerce-cart .cart-collaterals .shipping-calculator-form,
            .woocommerce-checkout .cart-collaterals .shipping-calculator-form {
                margin: 1em 0 0 0
            }
            
            #add_payment_method .cart-collaterals .cart_totals p small,
            .woocommerce-cart .cart-collaterals .cart_totals p small,
            .woocommerce-checkout .cart-collaterals .cart_totals p small {
                color: #767676;
                font-size: .83em
            }
            
            #add_payment_method .cart-collaterals .cart_totals table,
            .woocommerce-cart .cart-collaterals .cart_totals table,
            .woocommerce-checkout .cart-collaterals .cart_totals table {
                border-collapse: separate;
                margin: 0 0 6px;
                padding: 0
            }
            
            #add_payment_method .cart-collaterals .cart_totals table tr:first-child td,
            #add_payment_method .cart-collaterals .cart_totals table tr:first-child th,
            .woocommerce-cart .cart-collaterals .cart_totals table tr:first-child td,
            .woocommerce-cart .cart-collaterals .cart_totals table tr:first-child th,
            .woocommerce-checkout .cart-collaterals .cart_totals table tr:first-child td,
            .woocommerce-checkout .cart-collaterals .cart_totals table tr:first-child th {
                border-top: 0
            }
            
            #add_payment_method .cart-collaterals .cart_totals table th,
            .woocommerce-cart .cart-collaterals .cart_totals table th,
            .woocommerce-checkout .cart-collaterals .cart_totals table th {
                width: 35%
            }
            
            #add_payment_method .cart-collaterals .cart_totals table td,
            #add_payment_method .cart-collaterals .cart_totals table th,
            .woocommerce-cart .cart-collaterals .cart_totals table td,
            .woocommerce-cart .cart-collaterals .cart_totals table th,
            .woocommerce-checkout .cart-collaterals .cart_totals table td,
            .woocommerce-checkout .cart-collaterals .cart_totals table th {
                vertical-align: top;
                border-left: 0;
                border-right: 0;
                line-height: 1.5em
            }
            
            #add_payment_method .cart-collaterals .cart_totals table small,
            .woocommerce-cart .cart-collaterals .cart_totals table small,
            .woocommerce-checkout .cart-collaterals .cart_totals table small {
                color: #767676
            }
            
            #add_payment_method .cart-collaterals .cart_totals table select,
            .woocommerce-cart .cart-collaterals .cart_totals table select,
            .woocommerce-checkout .cart-collaterals .cart_totals table select {
                width: 100%
            }
            
            #add_payment_method .cart-collaterals .cart_totals .discount td,
            .woocommerce-cart .cart-collaterals .cart_totals .discount td,
            .woocommerce-checkout .cart-collaterals .cart_totals .discount td {
                color: #77a464
            }
            
            #add_payment_method .cart-collaterals .cart_totals tr td,
            #add_payment_method .cart-collaterals .cart_totals tr th,
            .woocommerce-cart .cart-collaterals .cart_totals tr td,
            .woocommerce-cart .cart-collaterals .cart_totals tr th,
            .woocommerce-checkout .cart-collaterals .cart_totals tr td,
            .woocommerce-checkout .cart-collaterals .cart_totals tr th {
                border-top: 1px solid #ebe9eb
            }
            
            #add_payment_method .cart-collaterals .cart_totals .woocommerce-shipping-destination,
            .woocommerce-cart .cart-collaterals .cart_totals .woocommerce-shipping-destination,
            .woocommerce-checkout .cart-collaterals .cart_totals .woocommerce-shipping-destination {
                margin-bottom: 0
            }
            
            #add_payment_method .cart-collaterals .cross-sells ul.products li.product,
            .woocommerce-cart .cart-collaterals .cross-sells ul.products li.product,
            .woocommerce-checkout .cart-collaterals .cross-sells ul.products li.product {
                margin-top: 0
            }
            
            #add_payment_method .checkout .col-2 h3#ship-to-different-address,
            .woocommerce-cart .checkout .col-2 h3#ship-to-different-address,
            .woocommerce-checkout .checkout .col-2 h3#ship-to-different-address {
                float: left;
                clear: none
            }
            
            #add_payment_method .checkout .col-2 .notes,
            .woocommerce-cart .checkout .col-2 .notes,
            .woocommerce-checkout .checkout .col-2 .notes {
                clear: left
            }
            
            #add_payment_method .checkout .col-2 .form-row-first,
            .woocommerce-cart .checkout .col-2 .form-row-first,
            .woocommerce-checkout .checkout .col-2 .form-row-first {
                clear: left
            }
            
            #add_payment_method .checkout .create-account small,
            .woocommerce-cart .checkout .create-account small,
            .woocommerce-checkout .checkout .create-account small {
                font-size: 11px;
                color: #767676;
                font-weight: 400
            }
            
            #add_payment_method .checkout div.shipping-address,
            .woocommerce-cart .checkout div.shipping-address,
            .woocommerce-checkout .checkout div.shipping-address {
                padding: 0;
                clear: left;
                width: 100%
            }
            
            #add_payment_method .checkout .shipping_address,
            .woocommerce-cart .checkout .shipping_address,
            .woocommerce-checkout .checkout .shipping_address {
                clear: both
            }
            
            #add_payment_method #payment,
            .woocommerce-cart #payment,
            .woocommerce-checkout #payment {
                background: #ebe9eb;
                border-radius: 5px
            }
            
            #add_payment_method #payment ul.payment_methods,
            .woocommerce-cart #payment ul.payment_methods,
            .woocommerce-checkout #payment ul.payment_methods {
                text-align: left;
                padding: 1em;
                border-bottom: 1px solid #d3ced2;
                margin: 0;
                list-style: none outside
            }
            
            #add_payment_method #payment ul.payment_methods::after,
            #add_payment_method #payment ul.payment_methods::before,
            .woocommerce-cart #payment ul.payment_methods::after,
            .woocommerce-cart #payment ul.payment_methods::before,
            .woocommerce-checkout #payment ul.payment_methods::after,
            .woocommerce-checkout #payment ul.payment_methods::before {
                content: " ";
                display: table
            }
            
            #add_payment_method #payment ul.payment_methods::after,
            .woocommerce-cart #payment ul.payment_methods::after,
            .woocommerce-checkout #payment ul.payment_methods::after {
                clear: both
            }
            
            #add_payment_method #payment ul.payment_methods li,
            .woocommerce-cart #payment ul.payment_methods li,
            .woocommerce-checkout #payment ul.payment_methods li {
                line-height: 2;
                text-align: left;
                margin: 0;
                font-weight: 400
            }
            
            #add_payment_method #payment ul.payment_methods li input,
            .woocommerce-cart #payment ul.payment_methods li input,
            .woocommerce-checkout #payment ul.payment_methods li input {
                margin: 0 1em 0 0
            }
            
            #add_payment_method #payment ul.payment_methods li img,
            .woocommerce-cart #payment ul.payment_methods li img,
            .woocommerce-checkout #payment ul.payment_methods li img {
                vertical-align: middle;
                margin: -2px 0 0 .5em;
                padding: 0;
                position: relative;
                box-shadow: none
            }
            
            #add_payment_method #payment ul.payment_methods li img+img,
            .woocommerce-cart #payment ul.payment_methods li img+img,
            .woocommerce-checkout #payment ul.payment_methods li img+img {
                margin-left: 2px
            }
            
            #add_payment_method #payment ul.payment_methods li:not(.woocommerce-notice)::after,
            #add_payment_method #payment ul.payment_methods li:not(.woocommerce-notice)::before,
            .woocommerce-cart #payment ul.payment_methods li:not(.woocommerce-notice)::after,
            .woocommerce-cart #payment ul.payment_methods li:not(.woocommerce-notice)::before,
            .woocommerce-checkout #payment ul.payment_methods li:not(.woocommerce-notice)::after,
            .woocommerce-checkout #payment ul.payment_methods li:not(.woocommerce-notice)::before {
                content: " ";
                display: table
            }
            
            #add_payment_method #payment ul.payment_methods li:not(.woocommerce-notice)::after,
            .woocommerce-cart #payment ul.payment_methods li:not(.woocommerce-notice)::after,
            .woocommerce-checkout #payment ul.payment_methods li:not(.woocommerce-notice)::after {
                clear: both
            }
            
            #add_payment_method #payment div.form-row,
            .woocommerce-cart #payment div.form-row,
            .woocommerce-checkout #payment div.form-row {
                padding: 1em
            }
            
            #add_payment_method #payment div.payment_box,
            .woocommerce-cart #payment div.payment_box,
            .woocommerce-checkout #payment div.payment_box {
                position: relative;
                box-sizing: border-box;
                width: 100%;
                padding: 1em;
                margin: 1em 0;
                font-size: .92em;
                border-radius: 2px;
                line-height: 1.5;
                background-color: #dfdcde;
                color: #515151
            }
            
            #add_payment_method #payment div.payment_box input.input-text,
            #add_payment_method #payment div.payment_box textarea,
            .woocommerce-cart #payment div.payment_box input.input-text,
            .woocommerce-cart #payment div.payment_box textarea,
            .woocommerce-checkout #payment div.payment_box input.input-text,
            .woocommerce-checkout #payment div.payment_box textarea {
                border-color: #c7c1c6;
                border-top-color: #bbb3b9
            }
            
            #add_payment_method #payment div.payment_box ::-webkit-input-placeholder,
            .woocommerce-cart #payment div.payment_box ::-webkit-input-placeholder,
            .woocommerce-checkout #payment div.payment_box ::-webkit-input-placeholder {
                color: #bbb3b9
            }
            
            #add_payment_method #payment div.payment_box :-moz-placeholder,
            .woocommerce-cart #payment div.payment_box :-moz-placeholder,
            .woocommerce-checkout #payment div.payment_box :-moz-placeholder {
                color: #bbb3b9
            }
            
            #add_payment_method #payment div.payment_box :-ms-input-placeholder,
            .woocommerce-cart #payment div.payment_box :-ms-input-placeholder,
            .woocommerce-checkout #payment div.payment_box :-ms-input-placeholder {
                color: #bbb3b9
            }
            
            #add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods,
            .woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods,
            .woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods {
                list-style: none outside;
                margin: 0
            }
            
            #add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new,
            #add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token,
            .woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new,
            .woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token,
            .woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new,
            .woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token {
                margin: 0 0 .5em
            }
            
            #add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new label,
            #add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token label,
            .woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new label,
            .woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token label,
            .woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new label,
            .woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token label {
                cursor: pointer
            }
            
            #add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-tokenInput,
            .woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-tokenInput,
            .woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-tokenInput {
                vertical-align: middle;
                margin: -3px 1em 0 0;
                position: relative
            }
            
            #add_payment_method #payment div.payment_box .wc-credit-card-form,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form {
                border: 0;
                padding: 0;
                margin: 1em 0 0
            }
            
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-number,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number {
                font-size: 1.5em;
                padding: 8px;
                background-repeat: no-repeat;
                background-position: right .618em center;
                background-size: 32px 20px
            }
            
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.visa,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.visa,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.visa,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.visa,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.visa,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.visa,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.visa,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.visa,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.visa {
                background-image: url('.BLOCKPRESS_THEME_DIR.'/assets/woocommerce/images/icons/credit-cards/visa.svg)
            }
            
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.mastercard,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.mastercard,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.mastercard,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.mastercard,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.mastercard,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.mastercard,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.mastercard,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.mastercard,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.mastercard {
                background-image: url('.BLOCKPRESS_THEME_DIR.'/assets/woocommerce/images/icons/credit-cards/mastercard.svg)
            }
            
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.laser,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.laser,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.laser,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.laser,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.laser,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.laser,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.laser,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.laser,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.laser {
                background-image: url('.BLOCKPRESS_THEME_DIR.'/assets/woocommerce/images/icons/credit-cards/laser.svg)
            }
            
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.dinersclub,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.dinersclub,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.dinersclub,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.dinersclub,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.dinersclub,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.dinersclub,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.dinersclub,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.dinersclub,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.dinersclub {
                background-image: url('.BLOCKPRESS_THEME_DIR.'/assets/woocommerce/images/icons/credit-cards/diners.svg)
            }
            
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.maestro,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.maestro,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.maestro,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.maestro,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.maestro,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.maestro,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.maestro,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.maestro,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.maestro {
                background-image: url('.BLOCKPRESS_THEME_DIR.'/assets/woocommerce/images/icons/credit-cards/maestro.svg)
            }
            
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.jcb,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.jcb,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.jcb,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.jcb,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.jcb,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.jcb,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.jcb,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.jcb,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.jcb {
                background-image: url('.BLOCKPRESS_THEME_DIR.'/assets/woocommerce/images/icons/credit-cards/jcb.svg)
            }
            
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.amex,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.amex,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.amex,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.amex,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.amex,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.amex,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.amex,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.amex,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.amex {
                background-image: url('.BLOCKPRESS_THEME_DIR.'/assets/woocommerce/images/icons/credit-cards/amex.svg)
            }
            
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.discover,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.discover,
            #add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.discover,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.discover,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.discover,
            .woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.discover,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.discover,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.discover,
            .woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.discover {
                background-image: url('.BLOCKPRESS_THEME_DIR.'/assets/woocommerce/images/icons/credit-cards/discover.svg)
            }
            
            #add_payment_method #payment div.payment_box span.help,
            .woocommerce-cart #payment div.payment_box span.help,
            .woocommerce-checkout #payment div.payment_box span.help {
                font-size: .857em;
                color: #767676;
                font-weight: 400
            }
            
            #add_payment_method #payment div.payment_box .form-row,
            .woocommerce-cart #payment div.payment_box .form-row,
            .woocommerce-checkout #payment div.payment_box .form-row {
                margin: 0 0 1em
            }
            
            #add_payment_method #payment div.payment_box p:last-child,
            .woocommerce-cart #payment div.payment_box p:last-child,
            .woocommerce-checkout #payment div.payment_box p:last-child {
                margin-bottom: 0
            }
            
            #add_payment_method #payment div.payment_box::before,
            .woocommerce-cart #payment div.payment_box::before,
            .woocommerce-checkout #payment div.payment_box::before {
                content: "";
                display: block;
                border: 1em solid #dfdcde;
                border-right-color: transparent;
                border-left-color: transparent;
                border-top-color: transparent;
                position: absolute;
                top: -.75em;
                left: 0;
                margin: -1em 0 0 2em
            }
            
            #add_payment_method #payment .payment_method_paypal .about_paypal,
            .woocommerce-cart #payment .payment_method_paypal .about_paypal,
            .woocommerce-checkout #payment .payment_method_paypal .about_paypal {
                float: right;
                line-height: 52px;
                font-size: .83em
            }
            
            #add_payment_method #payment .payment_method_paypal img,
            .woocommerce-cart #payment .payment_method_paypal img,
            .woocommerce-checkout #payment .payment_method_paypal img {
                max-height: 52px;
                vertical-align: middle
            }';
        }
        $output .='</style>';
        return apply_filters('fr_generate_incss_filter', $output );
    } 
}