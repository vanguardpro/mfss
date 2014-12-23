<?php 
add_action('admin_menu', 'mobile_theme_page');
//add_action('admin_menu', 'themeoptions_admin_menu'); //action to display the menu




function mobile_theme_page() {
if ( count($_POST) > 0 && isset($_POST['mobi_settings']) )
	{ 
		$options = array ('header_logoimg','app_title','header_bgcolor','apple_icon','header_data_theme','menu_bgimg','menu_item', 'menu_divider','menu_data_theme', 'post_hoverimg', 'content_data_theme', 'bpb_up_border', 'bpb_up_color','bpb_up_shadow', 'bpb_up_bg1', 'bpb_up_bg2', 'bpb_hover_border', 'bpb_hover_color','bpb_hover_shadow', 'bpb_hover_bg1', 'bpb_hover_bg2', 'bpb_down_border', 'bpb_down_color','bpb_down_shadow', 'bpb_down_bg1', 'bpb_down_bg2', 'bpb_data_theme', 'hb_up_border', 'hb_up_color','hb_up_shadow', 'hb_up_bg1', 'hb_up_bg2', 'hb_hover_border', 'hb_hover_color','hb_hover_shadow', 'hb_hover_bg1', 'hb_hover_bg2', 'hb_down_border', 'hb_down_color','hb_down_shadow', 'hb_down_bg1', 'hb_down_bg2', 'hb_data_theme' );
		foreach ( $options as $opt )
		{
			delete_option ( 'mobi_'.$opt, $_POST[$opt] );
			add_option ( 'mobi_'.$opt, $_POST[$opt] );	
		}			
}
if ( count($_POST) > 0 && isset($_POST['mobi_seo_settings']) )
	{ 
		$options = array ('header_google_ads','footer_google_ads','footer_google_analytics');
		foreach ( $options as $opt )
		{
			delete_option ( 'mobi_seo_'.$opt, $_POST[$opt] );
			add_option ( 'mobi_seo_'.$opt, $_POST[$opt] );	
		}			
}

add_menu_page('Mobile Theme Settings', 'Mobile Settings', 'manage_options', 'general-setting', 'mobi_magic_function', 'http://c454621.r21.cf2.rackcdn.com/other/images/mobile_icon.jpg');

add_submenu_page( 'general-setting', 'Google Ads Settings', 'Google Ads Settings', 'manage_options', 'my-submenu-handle', 'mobi_seo_magic_function');
/*add_options_page( 'Mobile Theme Settings', 'Mobile Settings', 'manage_options', 'general-setting', 'mobi_magic_function'); */
 
		
}


// mt_settings_page() displays the page content for the Test settings submenu
function mobi_magic_function() {
?>
<div class="wrap">
<h2>Mobile Theme Settings - Style Settings </h2>
<form method="post" action="">
<?php require_once (TEMPLATEPATH . '/tools/mobile_settings/header_settings.php'); ?>
<?php require_once (TEMPLATEPATH . '/tools/mobile_settings/menu_settings.php'); ?>
<?php require_once (TEMPLATEPATH . '/tools/mobile_settings/content_settings.php'); ?>
<?php require_once (TEMPLATEPATH . '/tools/mobile_settings/bpb_settings.php'); ?>     
<?php require_once (TEMPLATEPATH . '/tools/mobile_settings/home_button.php'); ?>
	
</form>
</div>
<?php } 

function mobi_seo_magic_function() {
?>
<div class="wrap">
<h2>Mobile Theme Settings - Google Ads Settings</h2>
<form method="post" action="">
<?php require_once (TEMPLATEPATH . '/tools/mobile_settings/other_settings.php'); ?>
	
</form>
</div>
<?php }
add_action('init', 'load_theme_scripts1');
function load_theme_scripts1() {
    wp_enqueue_style('farbtastic');
    wp_enqueue_script('farbtastic');
}?>