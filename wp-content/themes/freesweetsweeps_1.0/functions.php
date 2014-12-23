<?php
!defined('DS') ? define('DS', DIRECTORY_SEPARATOR) : null;

show_admin_bar( false );

//require_once (TEMPLATEPATH . '/tools/images.php');
//require_once (TEMPLATEPATH . '/tools/expired.php');
require_once (TEMPLATEPATH . '/tools/categories.php');
//require_once (TEMPLATEPATH . '/tools/theme_options.php');
require_once (TEMPLATEPATH . '/tools/mobile_settings/mobile_theme_options.php');
require_once (TEMPLATEPATH . '/tools/mobile_settings/functions.php');

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}
function __autoload($className) {
if (file_exists(TEMPLATEPATH . DS .'classes' . DS . $className . '.php')){
require_once(TEMPLATEPATH . DS .'classes' . DS . $className . '.php');
}
}

function replace_content($content){
	global $post;
	if(1==1){
	$content=preg_replace('#<a\s*href="([^"].*?)"\s*.*?>\s*<img.*?src=["|\'](.*?)["|\'].*?/>\s*</a>#msi', '', $content);
	$content=preg_replace('#<a\s*href="([^"].*?)"\s*.*?>([^\<].*?)</a>#msi', '', $content);
	}
	return $content;
	
}

function get_html(){
	global $post;
	$content=get_the_content();
	
	$pattern_text='#<a\s*href="([^"].*?)"\s*.*?>([^\<].*?)</a>#'; //[1] link, [2] text;
	if(preg_match($pattern_text, $content, $mtch)){
		if($mtch[1]){
		$html['link']=$mtch[1];
		}
		if($mtch[2]){
		$html['text']=$mtch[2];
		}
	}
	$obj=(object)$html;
	return $obj;
	
	
}
add_filter('the_content','replace_content');
add_filter('the_excerpt','replace_content');



function mobile_title($id){
	
	
	
	$title=get_the_title($id);
	
	$title=str_replace("&#8216;","'",$title);
	$title=str_replace("&#8217;","'",$title);
	$title=str_replace('&amp;','&',$title);
	$title=str_replace('&#038;','&',$title);
	if(strlen($title)>35){
		$add="...";
	}
	$title=substr($title, 0, 35);
	
	echo $title.$add; 
}
?>