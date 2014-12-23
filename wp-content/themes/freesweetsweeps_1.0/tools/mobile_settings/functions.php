<?php 
//Header

//apps title
global $mobi_settings;
$mobi_settings=mobi_default_settings(TRUE);

function mobi_the_app_title(){
	global $mobi_settings;
	
	if($output=get_option('mobi_app_title')){
$output=get_option('mobi_app_title');
 }
else{
$output=$mobi_settings->mobi_app_title;
}

	echo $output;
}
function mobi_get_app_title(){
	global $mobi_settings;
	if($output=get_option('mobi_app_title')){
$output=get_option('mobi_app_title');
 }
else{
$output=$mobi_settings->mobi_app_title;
}

	return $output;

}
//apps icon
function mobi_the_app_icon(){
	global $mobi_settings;
	if($output=get_option('mobi_app_icon')){
$output=get_option('mobi_app_icon');
 }
else{
$output=$mobi_settings->mobi_app_icon;
}

	echo $output;
}
function mobi_get_app_icon(){
	global $mobi_settings;
	if($output=get_option('mobi_app_icon')){
$output=get_option('mobi_app_icon');
 }
else{
$output=$mobi_settings->mobi_app_icon;
}

	return $output;

}
//header logo
function mobi_the_header_logo(){
	global $mobi_settings;
	if($output=get_option('mobi_header_logoimg')){
$output=get_option('mobi_header_logoimg');
 }
else{
$output=$mobi_settings->mobi_header_logoimg;
}

	echo $output;
}
function mobi_get_header_logo(){
	global $mobi_settings;
	if($output=get_option('mobi_header_logoimg')){
$output=get_option('mobi_header_logoimg');
 }
else{
$output=$mobi_settings->mobi_header_logoimg;
}

	return $output;

}
//header background color
function mobi_the_header_bgcolor(){
	global $mobi_settings;
	if($output=get_option('mobi_header_bgcolor')){
$output=get_option('mobi_header_bgcolor');
 }
else{
$output=$mobi_settings->mobi_header_bgcolor;
}

	echo $output;
}
function mobi_get_header_bgcolor(){
	global $mobi_settings;
	if($output=get_option('mobi_header_bgcolor')){
$output=get_option('mobi_header_bgcolor');
 }
else{
$output=$mobi_settings->mobi_header_bgcolor;
}

	return $output;

}

//mobi_header_data_theme

function mobi_header_data_theme(){
	
	global $mobi_settings;
	$output=get_option('mobi_header_data_theme');
	if(empty($output)){
		$output=$mobi_settings->mobi_header_data_theme;
	}
	echo $output;
}
function mobi_get_header_data_theme(){
	
	global $mobi_settings;
	$output=get_option('mobi_header_data_theme');
	if(empty($output)){
		$output=$mobi_settings->mobi_header_data_theme;
	}
	return $output;

}


//Menu

//menu item divider
function mobi_the_menu_divider(){
	global $mobi_settings;
	if($output=get_option('mobi_menu_divider')){
$output=get_option('mobi_menu_divider');
 }
else{
$output=$mobi_settings->mobi_menu_divider;
}

	echo $output;
}
function mobi_get_menu_divider(){
	global $mobi_settings;
	if($output=get_option('mobi_menu_divider')){
$output=get_option('mobi_menu_divider');
 }
else{
$output=$mobi_settings->mobi_menu_divider;
}

	return $output;

}
//menu items image
function mobi_the_menu_item(){
	global $mobi_settings;
	if($output=get_option('mobi_menu_item')){
$output=get_option('mobi_menu_item');
 }
else{
$output=$mobi_settings->mobi_menu_item;
}

	echo $output;
}
function mobi_get_menu_item(){
	global $mobi_settings;
	if($output=get_option('mobi_menu_item')){
$output=get_option('mobi_menu_item');
 }
else{
$output=$mobi_settings->mobi_menu_item;
}

	return $output;

}
//menu background image
function mobi_the_menu_bgimg(){
	global $mobi_settings;
	if($output=get_option('mobi_menu_bgimg')){
$output=get_option('mobi_menu_bgimg');
 }
else{
$output=$mobi_settings->mobi_menu_bgimg;
}

	echo $output;
}
function mobi_get_menu_bgimg(){
	global $mobi_settings;
	if($output=get_option('mobi_menu_bgimg')){
$output=get_option('mobi_menu_bgimg');
 }
else{
$output=$mobi_settings->mobi_menu_bgimg;
}

	return $output;

}
//menu data_theme
function mobi_menu_data_theme(){
	
	global $mobi_settings;
	$output=get_option('mobi_menu_data_theme');
	if(empty($output)){
		$output=$mobi_settings->mobi_menu_data_theme;
	}
	echo $output;
}
function mobi_get_menu_data_theme(){
	
	global $mobi_settings;
	$output=get_option('mobi_menu_data_theme');
	if(empty($output)){
		$output=$mobi_settings->mobi_menu_data_theme;
	}
	return $output;

}

//Content
//post hover image
function mobi_the_post_hoverimg(){
	global $mobi_settings;
	if($output=get_option('mobi_post_hoverimg')){
$output=get_option('mobi_post_hoverimg');
 }
else{
$output=$mobi_settings->mobi_post_hoverimg;
}

	echo $output;
}
function mobi_get_post_hoverimg(){
	global $mobi_settings;
	if($output=get_option('mobi_post_hoverimg')){
$output=get_option('mobi_post_hoverimg');
 }
else{
$output=$mobi_settings->mobi_post_hoverimg;
}

	return $output;

}
//content data_theme
function mobi_the_content_data_theme(){
	global $mobi_settings;
	
	$output=get_option('mobi_content_data_theme');
	if(empty($output)){
		$output=$mobi_settings->mobi_content_data_theme;
	}
	echo $output;
}
function mobi_get_content_data_theme(){
	global $mobi_settings;
	$output=get_option('mobi_content_data_theme');
	if(empty($output)){
		$output=$mobi_settings->mobi_content_data_theme;
	}
	return $output;

}

//Bullet Proof Button

//bpb up Border
function mobi_the_bpb_up_border(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_up_border')){
$output=get_option('mobi_bpb_up_border');
 }
else{
$output=$mobi_settings->mobi_bpb_up_border;
}

	echo $output;
}
function mobi_get_bpb_up_border(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_up_border')){
$output=get_option('mobi_bpb_up_border');
 }
else{
$output=$mobi_settings->mobi_bpb_up_border;
}

	return $output;

}


//bpb up Text Color
function mobi_the_bpb_up_color(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_up_color')){
$output=get_option('mobi_bpb_up_color');
 }
else{
$output=$mobi_settings->mobi_bpb_up_color;
}

	echo $output;
}
function mobi_get_bpb_up_color(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_up_color')){
$output=get_option('mobi_bpb_up_color');
 }
else{
$output=$mobi_settings->mobi_bpb_up_color;
}

	return $output;

}

//bpb up Box Shadow
function mobi_the_bpb_up_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_up_shadow')){
$output=get_option('mobi_bpb_up_shadow');
 }
else{
$output=$mobi_settings->mobi_bpb_up_shadow;
}

	echo $output;
}
function mobi_get_bpb_up_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_up_shadow')){
$output=get_option('mobi_bpb_up_shadow');
 }
else{
$output=$mobi_settings->mobi_bpb_up_shadow;
}

	return $output;

}
//bpb up gradient start
function mobi_the_bpb_up_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_up_bg1')){
$output=get_option('mobi_bpb_up_bg1');
 }
else{
$output=$mobi_settings->mobi_bpb_up_bg1;
}

	echo $output;
}
function mobi_get_bpb_up_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_up_bg1')){
$output=get_option('mobi_bpb_up_bg1');
 }
else{
$output=$mobi_settings->mobi_bpb_up_bg1;
}

	return $output;

}

//bpb up gradient end
function mobi_the_bpb_up_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_up_bg2')){
$output=get_option('mobi_bpb_up_bg2');
 }
else{
$output=$mobi_settings->mobi_bpb_up_bg2;
}

	echo $output;
}
function mobi_get_bpb_up_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_up_bg2')){
$output=get_option('mobi_bpb_up_bg2');
 }
else{
$output=$mobi_settings->mobi_bpb_up_bg2;
}

	return $output;

}


//bpb hover Border
function mobi_the_bpb_hover_border(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_hover_border')){
$output=get_option('mobi_bpb_hover_border');
 }
else{
$output=$mobi_settings->mobi_bpb_hover_border;
}

	echo $output;
}
function mobi_get_bpb_hover_border(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_hover_border')){
$output=get_option('mobi_bpb_hover_border');
 }
else{
$output=$mobi_settings->mobi_bpb_hover_border;
}

	return $output;

}


//bpb hover Text Color
function mobi_the_bpb_hover_color(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_hover_color')){
$output=get_option('mobi_bpb_hover_color');
 }
else{
$output=$mobi_settings->mobi_bpb_hover_color;
}

	echo $output;
}
function mobi_get_bpb_hover_color(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_hover_color')){
$output=get_option('mobi_bpb_hover_color');
 }
else{
$output=$mobi_settings->mobi_bpb_hover_color;
}

	return $output;

}

//bpb hover Box Shadow
function mobi_the_bpb_hover_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_hover_shadow')){
$output=get_option('mobi_bpb_hover_shadow');
 }
else{
$output=$mobi_settings->mobi_bpb_hover_shadow;
}

	echo $output;
}
function mobi_get_bpb_hover_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_hover_shadow')){
$output=get_option('mobi_bpb_hover_shadow');
 }
else{
$output=$mobi_settings->mobi_bpb_hover_shadow;
}

	return $output;

}
//bpb hover gradient start
function mobi_the_bpb_hover_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_hover_bg1')){
$output=get_option('mobi_bpb_hover_bg1');
 }
else{
$output=$mobi_settings->mobi_bpb_hover_bg1;
}

	echo $output;
}
function mobi_get_bpb_hover_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_hover_bg1')){
$output=get_option('mobi_bpb_hover_bg1');
 }
else{
$output=$mobi_settings->mobi_bpb_hover_bg1;
}

	return $output;

}

//bpb hover gradient end
function mobi_the_bpb_hover_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_hover_bg2')){
$output=get_option('mobi_bpb_hover_bg2');
 }
else{
$output=$mobi_settings->mobi_bpb_hover_bg2;
}

	echo $output;
}
function mobi_get_bpb_hover_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_hover_bg2')){
$output=get_option('mobi_bpb_hover_bg2');
 }
else{
$output=$mobi_settings->mobi_bpb_hover_bg2;
}

	return $output;

}

//bpb down Border
function mobi_the_bpb_down_border(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_down_border')){
$output=get_option('mobi_bpb_down_border');
 }
else{
$output=$mobi_settings->mobi_bpb_down_border;
}

	echo $output;
}
function mobi_get_bpb_down_border(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_down_border')){
$output=get_option('mobi_bpb_down_border');
 }
else{
$output=$mobi_settings->mobi_bpb_down_border;
}

	return $output;

}


//bpb down Text Color
function mobi_the_bpb_down_color(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_down_color')){
$output=get_option('mobi_bpb_down_color');
 }
else{
$output=$mobi_settings->mobi_bpb_down_color;
}

	echo $output;
}
function mobi_get_bpb_down_color(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_down_color')){
$output=get_option('mobi_bpb_down_color');
 }
else{
$output=$mobi_settings->mobi_bpb_down_color;
}

	return $output;

}

//bpb down Box Shadow
function mobi_the_bpb_down_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_down_shadow')){
$output=get_option('mobi_bpb_down_shadow');
 }
else{
$output=$mobi_settings->mobi_bpb_down_shadow;
}

	echo $output;
}
function mobi_get_bpb_down_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_down_shadow')){
$output=get_option('mobi_bpb_down_shadow');
 }
else{
$output=$mobi_settings->mobi_bpb_down_shadow;
}

	return $output;

}
//bpb down gradient start
function mobi_the_bpb_down_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_down_bg1')){
$output=get_option('mobi_bpb_down_bg1');
 }
else{
$output=$mobi_settings->mobi_bpb_down_bg1;
}

	echo $output;
}
function mobi_get_bpb_down_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_down_bg1')){
$output=get_option('mobi_bpb_down_bg1');
 }
else{
$output=$mobi_settings->mobi_bpb_down_bg1;
}

	return $output;

}

//bpb down gradient end
function mobi_the_bpb_down_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_down_bg2')){
$output=get_option('mobi_bpb_down_bg2');
 }
else{
$output=$mobi_settings->mobi_bpb_down_bg2;
}

	echo $output;
}
function mobi_get_bpb_down_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_bpb_down_bg2')){
$output=get_option('mobi_bpb_down_bg2');
 }
else{
$output=$mobi_settings->mobi_bpb_down_bg2;
}

	return $output;

}

//bpbt data_theme
function mobi_the_bpb_data_theme(){
	
	global $mobi_settings;
	$output=get_option('mobi_bpb_data_theme');
	if(empty($output)){
	$output=$mobi_settings->mobi_bpb_data_theme;
	}
	echo $output;
}
function mobi_get_bpb_data_theme(){
	global $mobi_settings;
	$output=get_option('mobi_bpb_data_theme');
	if(empty($output)){
		$output=$mobi_settings->mobi_bpb_data_theme;
	}
	return $output;

}

//Home Button

//hb up Border
function mobi_the_hb_up_border(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_up_border')){
$output=get_option('mobi_hb_up_border');
 }
else{
$output=$mobi_settings->mobi_hb_up_border;
}

	echo $output;
}
function mobi_get_hb_up_border(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_up_border')){
$output=get_option('mobi_hb_up_border');
 }
else{
$output=$mobi_settings->mobi_hb_up_border;
}

	return $output;

}


//hb up Text Color
function mobi_the_hb_up_color(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_up_color')){
$output=get_option('mobi_hb_up_color');
 }
else{
$output=$mobi_settings->mobi_hb_up_color;
}

	echo $output;
}
function mobi_get_hb_up_color(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_up_color')){
$output=get_option('mobi_hb_up_color');
 }
else{
$output=$mobi_settings->mobi_hb_up_color;
}

	return $output;

}

//hb up Box Shadow
function mobi_the_hb_up_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_up_shadow')){
$output=get_option('mobi_hb_up_shadow');
 }
else{
$output=$mobi_settings->mobi_hb_up_shadow;
}

	echo $output;
}
function mobi_get_hb_up_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_up_shadow')){
$output=get_option('mobi_hb_up_shadow');
 }
else{
$output=$mobi_settings->mobi_hb_up_shadow;
}

	return $output;

}
//hb up gradient start
function mobi_the_hb_up_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_up_bg1')){
$output=get_option('mobi_hb_up_bg1');
 }
else{
$output=$mobi_settings->mobi_hb_up_bg1;
}

	echo $output;
}
function mobi_get_hb_up_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_up_bg1')){
$output=get_option('mobi_hb_up_bg1');
 }
else{
$output=$mobi_settings->mobi_hb_up_bg1;
}

	return $output;

}

//hb up gradient end
function mobi_the_hb_up_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_up_bg2')){
$output=get_option('mobi_hb_up_bg2');
 }
else{
$output=$mobi_settings->mobi_hb_up_bg2;
}

	echo $output;
}
function mobi_get_hb_up_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_up_bg2')){
$output=get_option('mobi_hb_up_bg2');
 }
else{
$output=$mobi_settings->mobi_hb_up_bg2;
}

	return $output;

}


//hb hover Border
function mobi_the_hb_hover_border(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_hover_border')){
$output=get_option('mobi_hb_hover_border');
 }
else{
$output=$mobi_settings->mobi_hb_hover_border;
}

	echo $output;
}
function mobi_get_hb_hover_border(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_hover_border')){
$output=get_option('mobi_hb_hover_border');
 }
else{
$output=$mobi_settings->mobi_hb_hover_border;
}

	return $output;

}


//hb hover Text Color
function mobi_the_hb_hover_color(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_hover_color')){
$output=get_option('mobi_hb_hover_color');
 }
else{
$output=$mobi_settings->mobi_hb_hover_color;
}

	echo $output;
}
function mobi_get_hb_hover_color(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_hover_color')){
$output=get_option('mobi_hb_hover_color');
 }
else{
$output=$mobi_settings->mobi_hb_hover_color;
}

	return $output;

}

//hb hover Box Shadow
function mobi_the_hb_hover_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_hover_shadow')){
$output=get_option('mobi_hb_hover_shadow');
 }
else{
$output=$mobi_settings->mobi_hb_hover_shadow;
}

	echo $output;
}
function mobi_get_hb_hover_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_hover_shadow')){
$output=get_option('mobi_hb_hover_shadow');
 }
else{
$output=$mobi_settings->mobi_hb_hover_shadow;
}

	return $output;

}
//hb hover gradient start
function mobi_the_hb_hover_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_hover_bg1')){
$output=get_option('mobi_hb_hover_bg1');
 }
else{
$output=$mobi_settings->mobi_hb_hover_bg1;
}

	echo $output;
}
function mobi_get_hb_hover_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_hover_bg1')){
$output=get_option('mobi_hb_hover_bg1');
 }
else{
$output=$mobi_settings->mobi_hb_hover_bg1;
}

	return $output;

}

//hb hover gradient end
function mobi_the_hb_hover_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_hover_bg2')){
$output=get_option('mobi_hb_hover_bg2');
 }
else{
$output=$mobi_settings->mobi_hb_hover_bg2;
}

	echo $output;
}
function mobi_get_hb_hover_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_hover_bg2')){
$output=get_option('mobi_hb_hover_bg2');
 }
else{
$output=$mobi_settings->mobi_hb_hover_bg2;
}

	return $output;

}

//hb down Border
function mobi_the_hb_down_border(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_down_border')){
$output=get_option('mobi_hb_down_border');
 }
else{
$output=$mobi_settings->mobi_hb_down_border;
}

	echo $output;
}
function mobi_get_hb_down_border(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_down_border')){
$output=get_option('mobi_hb_down_border');
 }
else{
$output=$mobi_settings->mobi_hb_down_border;
}

	return $output;

}


//hb down Text Color
function mobi_the_hb_down_color(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_down_color')){
$output=get_option('mobi_hb_down_color');
 }
else{
$output=$mobi_settings->mobi_hb_down_color;
}

	echo $output;
}
function mobi_get_hb_down_color(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_down_color')){
$output=get_option('mobi_hb_down_color');
 }
else{
$output=$mobi_settings->mobi_hb_down_color;
}

	return $output;

}

//hb down Box Shadow
function mobi_the_hb_down_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_down_shadow')){
$output=get_option('mobi_hb_down_shadow');
 }
else{
$output=$mobi_settings->mobi_hb_down_shadow;
}

	echo $output;
}
function mobi_get_hb_down_shadow(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_down_shadow')){
$output=get_option('mobi_hb_down_shadow');
 }
else{
$output=$mobi_settings->mobi_hb_down_shadow;
}

	return $output;

}
//hb down gradient start
function mobi_the_hb_down_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_down_bg1')){
$output=get_option('mobi_hb_down_bg1');
 }
else{
$output=$mobi_settings->mobi_hb_down_bg1;
}

	echo $output;
}
function mobi_get_hb_down_bg1(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_down_bg1')){
$output=get_option('mobi_hb_down_bg1');
 }
else{
$output=$mobi_settings->mobi_hb_down_bg1;
}

	return $output;

}

//hb down gradient end
function mobi_the_hb_down_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_down_bg2')){
$output=get_option('mobi_hb_down_bg2');
 }
else{
$output=$mobi_settings->mobi_hb_down_bg2;
}

	echo $output;
}
function mobi_get_hb_down_bg2(){
	global $mobi_settings;
	if($output=get_option('mobi_hb_down_bg2')){
$output=get_option('mobi_hb_down_bg2');
 }
else{
$output=$mobi_settings->mobi_hb_down_bg2;
}

	return $output;

}

//hb data_theme
function mobi_the_hb_data_theme(){
	global $mobi_settings;
	$output=get_option('mobi_hb_data_theme');
	if(empty($output)){
		$output=$mobi_settings->mobi_hb_data_theme;
	}
	
	echo $output;
}
function mobi_get_hb_data_theme(){
	global $mobi_settings;
	$output=get_option('mobi_hb_data_theme');
	if(empty($output)){
		$output=$mobi_settings->mobi_hb_data_theme;
	}
	return $output;

}

//Other Settings Google Ads

//Header
function mobi_seo_header_google_ads(){
	$output=stripslashes(stripslashes(get_option('mobi_seo_header_google_ads')));
	echo $output;
}
function mobi_seo_get_header_google_ads(){
	$output=stripslashes(stripslashes(get_option('mobi_seo_header_google_ads')));
	return $output;
}
//Footer
function mobi_seo_footer_google_ads(){
	 
	$output=stripslashes(stripslashes(get_option('mobi_seo_footer_google_ads')));
	echo $output;
}
function mobi_seo_get_footer_google_ads(){
	$output=stripslashes(stripslashes(get_option('mobi_seo_footer_google_ads')));
	return $output;
}

function mobi_default_settings($object=FALSE){
$arr = array (
			  
'mobi_header_logoimg'=>get_template_directory_uri().'/images/header.jpg',
'mobi_app_title'=>'WomanFreebies',
'mobi_header_bgcolor'=>'#f5a3c9',
'mobi_app_icon'=>get_template_directory_uri().'/images/app_icon.gif',
'mobi_header_data_theme'=>'c',
'mobi_menu_bgimg'=>get_template_directory_uri().'/images/menu.gif',
'mobi_menu_item'=>get_template_directory_uri().'/images/btn-sprite.gif',
'mobi_menu_divider'=>get_template_directory_uri().'/images/menu-sprtr.gif',
'mobi_menu_data_theme'=>'c',
'mobi_post_hoverimg'=>get_template_directory_uri().'/images/blue_bdr.gif', 
'mobi_content_data_theme'=>'c',


'mobi_bpb_up_border'=>'#d35c8a',
'mobi_bpb_up_color'=>'#FFFFFF',
'mobi_bpb_up_shadow'=>'#a90545', 
'mobi_bpb_up_bg1'=>'#ffa3cc',
'mobi_bpb_up_bg2'=>'#e986b1',

'mobi_bpb_hover_border'=>'#e5aac0',
'mobi_bpb_hover_color'=>'#FFFFFF',
'mobi_bpb_hover_shadow'=>'#eb065f',
'mobi_bpb_hover_bg1'=>'#fed6e7',
'mobi_bpb_hover_bg2'=>'#fd9cc7',

'mobi_bpb_down_border'=>'#b13062',
'mobi_bpb_down_color'=>'#FFFFFF',
'mobi_bpb_down_shadow'=>'#72032f',
'mobi_bpb_down_bg1'=>'#fb6fae',
'mobi_bpb_down_bg2'=>'#db4d8b',
'mobi_bpb_data_theme'=>'f',

'mobi_hb_up_border'=>'#d35c8a',
'mobi_hb_up_color'=>'#FFFFFF',
'mobi_hb_up_shadow'=>'#a90545',
'mobi_hb_up_bg1'=>'#ffa3cc',
'mobi_hb_up_bg2'=>'#e986b1',

'mobi_hb_hover_border'=>'#e5aac0',
'mobi_hb_hover_color'=>'#FFFFFF',
'mobi_hb_hover_shadow'=>'#eb065f',
'mobi_hb_hover_bg1'=>'#fed6e7',
'mobi_hb_hover_bg2'=>'#fd9cc7',

'mobi_hb_down_border'=>'#b13062',
'mobi_hb_down_color'=>'#FFFFFF',
'mobi_hb_down_shadow'=>'#72032f',
'mobi_hb_down_bg1'=>'#fb6fae',
'mobi_hb_down_bg2'=>'#db4d8b',
'mobi_hb_data_theme'=>'f',

);
	
	
	if(!$object){	
	$output=$arr;
	}
	else{
	$output=(object)$arr;
	}
	return $output;
}













?>