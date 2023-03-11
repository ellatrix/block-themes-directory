<?php
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define('MACAQUE_THEME_URL','https://wwwows.com/product/macaque-wordpress-theme/');
define('MACAQUE_SOCIAL_URL','https://www.facebook.com/wwwows/');
define('MACAQUE_DOCS_URL','https://wwwows.com/docs');

// Upgrade content
if ( ! function_exists( 'macaque_admin_theme_page_more_features' ) ) {
	function macaque_admin_theme_page_more_features() { ?>
<div class="wwwows-tp-s-box wwwows-tp-premium">
    <h4><?php esc_html_e( 'Macaque Premium', 'macaque' ); ?></h4>
    <p><?php esc_html_e( 'If You need the premium features for Your site, check the theme page on wwwows.com', 'macaque' ); ?></p>
    <a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank" class="wwwows-tp-button"><?php esc_html_e( 'Get Macaque Premium', 'macaque' ); ?></a>
</div>
<?php
	}
}

// Title content
if ( ! function_exists( 'macaque_admin_theme_page_title' ) ) {
	function macaque_admin_theme_page_title() { ?>
<div class="wwwows-tp-title-area">
    <div class="wwwows-tp-title-content">
        <h1><?php esc_html_e( 'Macaque WordPress Theme', 'macaque' );?></h1>
        <p><?php esc_html_e( 'Thank You for using Macaque! Check all the theme features.', 'macaque' );?></p>
    </div>
    <h2><?php esc_html_e( 'Here You can see the theme features. At the theme page on wwwows.com You can find more details.', 'macaque' );?></h2>
</div>
<?php
	}
}    
 
// Macaque admin page content   
if ( ! function_exists( 'macaque_admin_theme_page' ) ) {
	function macaque_admin_theme_page() { ?>
<div id="wwwows-tp-page-body">
<div id="wwwows-tp-page-left">
	<?php macaque_admin_theme_page_title(); ?>
    <div class="wwwows-theme-features">
        <h3 class="wpp-heading"><span>Free</span> Macaque features</h3>
        
        <div class="clearflex"></div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64H240l-10.7 32H160c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H346.7L336 416H512c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM512 64V288H64V64H512z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Full Site Editor', 'macaque' ); ?></h4>
        </div>
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M52.5 440.6c-9.5 7.9-22.8 9.7-34.1 4.4S0 428.4 0 416V96C0 83.6 7.2 72.3 18.4 67s24.5-3.6 34.1 4.4L224 214.3V256v41.7L52.5 440.6zM256 352V256 128 96c0-12.4 7.2-23.7 18.4-29s24.5-3.6 34.1 4.4l192 160c7.3 6.1 11.5 15.1 11.5 24.6s-4.2 18.5-11.5 24.6l-192 160c-9.5 7.9-22.8 9.7-34.1 4.4s-18.4-16.6-18.4-29V352z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Fast Pageload', 'macaque' ); ?></h4>
        </div>
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/></svg>
            </a>
            <h4><?php esc_html_e( 'GPL License', 'macaque' ); ?></h4>
        </div>
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M421.7 220.3l-11.3 11.3-22.6 22.6-205 205c-6.6 6.6-14.8 11.5-23.8 14.1L30.8 511c-8.4 2.5-17.5 .2-23.7-6.1S-1.5 489.7 1 481.2L38.7 353.1c2.6-9 7.5-17.2 14.1-23.8l205-205 22.6-22.6 11.3-11.3 33.9 33.9 62.1 62.1 33.9 33.9zM96 353.9l-9.3 9.3c-.9 .9-1.6 2.1-2 3.4l-25.3 86 86-25.3c1.3-.4 2.5-1.1 3.4-2l9.3-9.3H112c-8.8 0-16-7.2-16-16V353.9zM453.3 19.3l39.4 39.4c25 25 25 65.5 0 90.5l-14.5 14.5-22.6 22.6-11.3 11.3-33.9-33.9-62.1-62.1L314.3 67.7l11.3-11.3 22.6-22.6 14.5-14.5c25-25 65.5-25 90.5 0z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Partial Block Templates', 'macaque' ); ?></h4>
        </div>
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zm48 0c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Translation Ready', 'macaque' ); ?></h4>
        </div>
        
        <div class="clearflex"></div> 
        
        <h3 class="wpp-heading"><span>Premium</span> Macaque features</h3>
        
        <div class="clearflex"></div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M421.7 220.3l-11.3 11.3-22.6 22.6-205 205c-6.6 6.6-14.8 11.5-23.8 14.1L30.8 511c-8.4 2.5-17.5 .2-23.7-6.1S-1.5 489.7 1 481.2L38.7 353.1c2.6-9 7.5-17.2 14.1-23.8l205-205 22.6-22.6 11.3-11.3 33.9 33.9 62.1 62.1 33.9 33.9zM96 353.9l-9.3 9.3c-.9 .9-1.6 2.1-2 3.4l-25.3 86 86-25.3c1.3-.4 2.5-1.1 3.4-2l9.3-9.3H112c-8.8 0-16-7.2-16-16V353.9zM453.3 19.3l39.4 39.4c25 25 25 65.5 0 90.5l-14.5 14.5-22.6 22.6-11.3 11.3-33.9-33.9-62.1-62.1L314.3 67.7l11.3-11.3 22.6-22.6 14.5-14.5c25-25 65.5-25 90.5 0z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Additional Full Block Templates', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M12.1 102.4H9.8c-2.9 0-5.2-2.3-5.2-5.2 0-3 2.4-5.4 5.4-5.4h2.1v-4.2H9.3c-5.1 0-9.3 4.2-9.3 9.3 0 5.7 4.6 10.3 10.3 10.3h1.8v-4.8zM115.9 102.4h-2.3c-2.9 0-5.2-2.3-5.2-5.2 0-3 2.4-5.4 5.4-5.4h2.1v-4.2H113c-5.1 0-9.3 4.2-9.3 9.3 0 5.7 4.6 10.3 10.3 10.3h1.8v-4.8zM22.1 87.6c-4.5 0-8.1 4.4-8.1 9.8s3.6 9.8 8.1 9.8 8.1-4.4 8.1-9.8-3.6-9.8-8.1-9.8zm0 15.9c-2 0-3.5-2.7-3.5-6s1.6-6 3.5-6c2 0 3.5 2.7 3.5 6s-1.6 6-3.5 6zM30.2 107.2l3.1-19.6h6.5l1.9 9.8 2.5-9.8h6l2.9 19.6h-5l-1.6-13.3-2.7 13.3h-3.4l-3.7-13.1-1.7 13.1zM54.2 107.2l3.1-19.6h6.5l1.8 9.8 2.5-9.8h6.1l2.9 19.6h-5l-1.7-13.3-2.7 13.3h-3.3l-3.8-13.1-1.6 13.1zM77.9 107.2V87.6h10.2v3.8H83v4.2h4.5v3.6h-5.1v3.8h5.7v4.2zM117.8 107.2V87.6H128v3.8h-5.1v4.2h4.5v3.6h-5.1v3.8h5.7v4.2z"/><path d="M100 98.1c1.6 0 3-1.3 3-3v-1.8c0-3.2-2.6-5.7-5.7-5.7h-7.4v19.6h4.6V98l5 9.2h5.1l-4.6-9.1zm-3.9-1.7h-1.7v-4.8h1.9c1.3 0 2.3 1 2.3 2.3-.1 1.4-1.2 2.5-2.5 2.5z"/><path d="M104 71.5H24.3c-6.4 0-11.7-5.2-11.7-11.7V32.4c0-6.4 5.2-11.7 11.7-11.7H104c6.4 0 11.7 5.2 11.7 11.7v27.4c0 6.5-5.3 11.7-11.7 11.7z"/><path fill="#FFF" d="M23.8 61.6s2.3 9.4 6.9 3.1c4.6-6.3 9-16.2 9-16.2s.3-2.5 1.6 3 6.9 12.8 6.9 12.8 5.1 6.3 7.2-.3c-.8-8.8 2.3-24.8 5.4-32.5 1.3-6.8-5.9-4.9-6.5-3.2S49.1 40 48.8 50.7c0 0-3.8-10.2-4.1-14-.3-3.7-4.2-4.7-6.5-1.1S29 53.1 29 53.1l-4.4-22.7s-4.4-5.8-7 1.3c0 0 4.6 27.9 6.2 29.9zM82.7 36.7c-6.9-11.4-17-2.8-17-2.8s-7.7 8.9-4.2 21c5.6 12 13.3 6.6 15.4 5.7 2.1-1 11.3-11.4 5.8-23.9zm-5.2 10c0 4.8-3.9 9.2-7.2 8.2-1.8-1-2.9-3.9-2.9-8.6 1.6-7.8 5.2-8.8 7-8.6 3.4 1.8 3.2 5.9 3.1 9zM108.3 36.7c-6.9-11.4-17-2.8-17-2.8s-7.7 8.9-4.2 21c5.6 12 13.3 6.6 15.4 5.7 2.2-1 11.4-11.4 5.8-23.9zm-5.2 10c0 4.8-3.9 9.2-7.2 8.2-1.8-1-2.9-3.9-2.9-8.6 1.6-7.8 5.2-8.8 7-8.6 3.4 1.8 3.3 5.9 3.1 9z"/><path d="M62 71.5L79.9 82l-3.7-10.5-10.3-2.9z"/></svg>
            </a>
            <h4><?php esc_html_e( 'WooCommerce Ready', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M254 52.8C249.3 40.3 237.3 32 224 32s-25.3 8.3-30 20.8L57.8 416H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32h-1.8l18-48H303.8l18 48H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H390.2L254 52.8zM279.8 304H168.2L224 155.1 279.8 304z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Google Fonts Options', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M315.4 15.5C309.7 5.9 299.2 0 288 0s-21.7 5.9-27.4 15.5l-96 160c-5.9 9.9-6.1 22.2-.4 32.2s16.3 16.2 27.8 16.2H384c11.5 0 22.2-6.2 27.8-16.2s5.5-22.3-.4-32.2l-96-160zM288 312V456c0 22.1 17.9 40 40 40H472c22.1 0 40-17.9 40-40V312c0-22.1-17.9-40-40-40H328c-22.1 0-40 17.9-40 40zM128 512c70.7 0 128-57.3 128-128s-57.3-128-128-128S0 313.3 0 384s57.3 128 128 128z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Wwwows Blocks', 'macaque' ); ?></h4>
        </div>
        
        <div class="clearflex"></div> 
        
        <h3 class="wpp-heading"><span>Additional blocks</span> for Macaque premium</h3>
        
        <div class="clearflex"></div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 80v48c0 17.7 14.3 32 32 32H48 96V80c0-26.5-21.5-48-48-48S0 53.5 0 80zM112 32c10 13.4 16 30 16 48V384c0 35.3 28.7 64 64 64s64-28.7 64-64v-5.3c0-32.4 26.3-58.7 58.7-58.7H480V128c0-53-43-96-96-96H112zM464 480c61.9 0 112-50.1 112-112c0-8.8-7.2-16-16-16H314.7c-14.7 0-26.7 11.9-26.7 26.7V384c0 53-43 96-96 96H368h96z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Scroll animations', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Responsive control', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Back to top', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M0 55.2V426c0 12.2 9.9 22 22 22c6.3 0 12.4-2.7 16.6-7.5L121.2 346l58.1 116.3c7.9 15.8 27.1 22.2 42.9 14.3s22.2-27.1 14.3-42.9L179.8 320H297.9c12.2 0 22.1-9.9 22.1-22.1c0-6.3-2.7-12.3-7.4-16.5L38.6 37.9C34.3 34.1 28.9 32 23.2 32C10.4 32 0 42.4 0 55.2z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Image cursor', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M145.6 7.7C141 2.8 134.7 0 128 0s-13 2.8-17.6 7.7l-104 112c-6.5 7-8.2 17.2-4.4 25.9S14.5 160 24 160H80V352H24c-9.5 0-18.2 5.7-22 14.4s-2.1 18.9 4.4 25.9l104 112c4.5 4.9 10.9 7.7 17.6 7.7s13-2.8 17.6-7.7l104-112c6.5-7 8.2-17.2 4.4-25.9s-12.5-14.4-22-14.4H176V160h56c9.5 0 18.2-5.7 22-14.4s2.1-18.9-4.4-25.9l-104-112z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Stylish scrollbar', 'macaque' ); ?></h4>
        </div>
        
        <div class="clearflex" style="margin-bottom: 3vw;"></div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M576 416L64 416c-17.7 0-32 14.3-32 32s14.3 32 32 32l512 0c17.7 0 32-14.3 32-32s-14.3-32-32-32zm22.6-137.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L512 274.7 512 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 210.7-41.4-41.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0l96-96zm-320-45.3c-12.5-12.5-32.8-12.5-45.3 0L192 274.7 192 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 210.7L86.6 233.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0l96-96c12.5-12.5 12.5-32.8 0-45.3z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Accordion', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Countdown', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 48V384c-63.1 22.5-82.3 32-119.5 32c-62.8 0-86.6-32-149.3-32c-20.6 0-36.6 3.6-51.2 8.2v-64c14.6-4.6 30.6-8.2 51.2-8.2c62.7 0 86.5 32 149.3 32c20.4 0 35.6-3 55.5-9.3v-208c-19.9 6.3-35.1 9.3-55.5 9.3c-62.8 0-86.6-32-149.3-32c-50.8 0-74.9 20.6-115.2 28.7V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32s32 14.3 32 32V76.7c40.3-8 64.4-28.7 115.2-28.7c62.7 0 86.5 32 149.3 32c37.1 0 56.4-9.5 119.5-32z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Icon', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M448 160H320V128H448v32zM48 64C21.5 64 0 85.5 0 112v64c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zM448 352v32H192V352H448zM48 288c-26.5 0-48 21.5-48 48v64c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V336c0-26.5-21.5-48-48-48H48z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Progress', 'macaque' ); ?></h4>
        </div>
        
        <div class="wpp-c20">
        	<a href="<?php echo esc_url(MACAQUE_THEME_URL); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M144 208C126.3 208 112 222.2 112 239.1C112 257.7 126.3 272 144 272s31.1-14.25 31.1-32S161.8 208 144 208zM256 207.1c-17.75 0-31.1 14.25-31.1 32s14.25 31.1 31.1 31.1s31.1-14.25 31.1-31.1S273.8 207.1 256 207.1zM368 208c-17.75 0-31.1 14.25-31.1 32s14.25 32 31.1 32c17.75 0 31.99-14.25 31.99-32C400 222.2 385.8 208 368 208zM256 31.1c-141.4 0-255.1 93.12-255.1 208c0 47.62 19.91 91.25 52.91 126.3c-14.87 39.5-45.87 72.88-46.37 73.25c-6.624 7-8.373 17.25-4.624 26C5.818 474.2 14.38 480 24 480c61.49 0 109.1-25.75 139.1-46.25c28.87 9 60.16 14.25 92.9 14.25c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM256 400c-26.75 0-53.12-4.125-78.36-12.12l-22.75-7.125L135.4 394.5c-14.25 10.12-33.87 21.38-57.49 29c7.374-12.12 14.37-25.75 19.87-40.25l10.62-28l-20.62-21.87C69.81 314.1 48.06 282.2 48.06 240c0-88.25 93.24-160 207.1-160s207.1 71.75 207.1 160S370.8 400 256 400z"/></svg>
            </a>
            <h4><?php esc_html_e( 'Scroll text', 'macaque' ); ?></h4>
        </div>
        
        
    </div>
</div>
<div id="wwwows-tp-page-right">
	<?php macaque_admin_theme_page_more_features(); ?>
	<div class="wwwows-tp-s-box wwwows-tp-doc">
    	<h4><?php esc_html_e( 'Wwwows Documentation', 'macaque' ); ?></h4>
        <p><?php esc_html_e( 'If You`ve stuck, the documentation may help on Wwwows.com', 'macaque' ); ?></p>
        <a href="<?php echo esc_url(MACAQUE_DOCS_URL); ?>" target="_blank" class="wwwows-tp-button"><?php esc_html_e( 'Wwwows Documentation', 'macaque' ); ?></a>
    </div>
    <div class="wwwows-tp-s-box wwwows-tp-doc">
    	<h4><?php esc_html_e( 'Wwwows on Facebook', 'macaque' ); ?></h4>
        <p><?php esc_html_e( 'If You want to get useful infos and discounts about Wwwows, follow Wwwows on Facebook.', 'macaque' ); ?></p>
        <a href="<?php echo esc_url(MACAQUE_SOCIAL_URL); ?>" target="_blank" class="wwwows-tp-button"><?php esc_html_e( 'Go to Facebook', 'macaque' ); ?></a>
    </div>
</div>
<?php
	}
}