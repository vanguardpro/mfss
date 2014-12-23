<?php 


add_action('admin_menu', 'mobile_theme_page');
add_action('admin_menu', 'themeoptions_admin_menu'); //action to display the menu




function mobile_theme_page() {
if ( count($_POST) > 0 && isset($_POST['mobi_settings']) )
	{ 
		$options = array ('header_logoimg','app_title','header_bgcolor','apple_icon','header_data-theme','menu_bgimg','menu_item', 'menu_divider','menu_data-theme', 'bpb_up_border', 'bpb_up_color','bpb_up_shadow', 'bpb_up_bg1', 'bpb_up_bg2', 'bpb_hover_border', 'bpb_hover_color','bpb_hover_shadow', 'bpb_hover_bg1', 'bpb_hover_bg2', 'bpb_down_border', 'bpb_down_color','bpb_down_shadow', 'bpb_down_bg1', 'bpb_down_bg2', 'bpb_data-theme', 'hb_up_border', 'hb_up_color','hb_up_shadow', 'hb_up_bg1', 'hb_up_bg2', 'hb_hover_border', 'hb_hover_color','hb_hover_shadow', 'hb_hover_bg1', 'hb_hover_bg2', 'hb_down_border', 'hb_down_color','hb_down_shadow', 'hb_down_bg1', 'hb_down_bg2', 'hb_data-theme' );
		foreach ( $options as $opt )
		{
			delete_option ( 'mobi_'.$opt, $_POST[$opt] );
			add_option ( 'mobi_'.$opt, $_POST[$opt] );	
		}			
}	
add_menu_page('Mobile Theme Settings', 'Mobile Settings', 'manage_options', 'general-setting', 'mobi_magic_function', 'http://c454621.r21.cf2.rackcdn.com/other/images/mobile_icon.jpg');

add_options_page( 'Mobile Theme Settings', 'Mobile Settings', 'manage_options', 'general-setting', 'mobi_magic_function'); 
add_submenu_page( 'general-setting', 'Header Settings', 'Header Settings', 'manage_options', 'my-submenu-handle', 'mobi_magic_function');
		
}


// mt_settings_page() displays the page content for the Test settings submenu
function mobi_magic_function() {
?>
<div class="wrap">
	<h2>Mobile Theme Settings</h2>
<form method="post" action="">

        <fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Header Settings</strong></legend>
	<table class="form-table">
		
	      <tr valign="top">
			<th scope="row"><label for="contest_image">Header Logo Image</label></th>
			<td>
<input name="header_logoimg" type="text" id="header_logoimg" value="<?php echo get_option('mobi_header_logoimg'); ?>" class="regular-text"  /> 
			</td>
		</tr>
        <tr valign="top">
			<th scope="row"><label for="app_title">App Title</label></th>
			<td>
<input name="app_title" type="text" id="app_title" value="<?php echo get_option('mobi_app_title'); ?>" class="regular-text"  /> 
			</td>
		</tr>
    
           <tr valign="top">
			<th scope="row"><label for="contest_image">Apple Touch Icon</label></th>
			<td>
<input name="apple_icon" type="text" id="apple_icon" value="<?php echo get_option('mobi_apple_icon'); ?>" class="regular-text"  /> 
			</td>
		</tr>
        	
        <tr valign="top">
			<th scope="row"><label for="style">Header Background Color:</label></th>
			<td><input type="text" id="header_bgcolor" value="<?php echo get_option('mobi_header_bgcolor'); ?>" name="header_bgcolor" />
            <div id="color_picker_color1"></div>
     <script type="text/javascript">
        jQuery(document).ready(function($){
            $('#color_picker_color1').farbtastic('#header_bgcolor');
			$('.farbtastic').css('margin', '-40px 0 0 120px');
        });
    </script>

			</td>
		</tr>
     
   

<tr valign="top">
			<th scope="row"><label for="testmode">Header data-theme</label></th>
			<td>
				<select name="header_data-theme" id="header_data-theme">	
					<option value="a" <?php if(get_option('mobi_header_data-theme') == 'a'){?>selected="selected"<?php } ?>>&nbsp;a&nbsp;</option>	
                    <option value="b" <?php if(get_option('mobi_header_data-theme') == 'b'){?>selected="selected"<?php } ?>>&nbsp;b&nbsp;</option>	
                    <option value="c" <?php if(get_option('mobi_header_data-theme') == 'c'){?>selected="selected"<?php } ?>>&nbsp;c&nbsp;</option>	
                    <option value="d" <?php if(get_option('mobi_header_data-theme') == 'd'){?>selected="selected"<?php } ?>>&nbsp;d&nbsp;</option>	
                    <option value="e" <?php if(get_option('mobi_header_data-theme') == 'e'){?>selected="selected"<?php } ?>>&nbsp;e&nbsp;</option>	
                    <option value="f" <?php if(get_option('mobi_header_data-theme') == 'f'){?>selected="selected"<?php } ?>>&nbsp;f&nbsp;</option>	
                    <option value="g" <?php if(get_option('mobi_header_data-theme') == 'g'){?>selected="selected"<?php } ?>>&nbsp;g&nbsp;</option>	
                    
				</select> 
               
			</td>
		</tr>
        
		
	</table>
	</fieldset>
	
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
		<input type="hidden" name="mobi_settings" value="save" style="display:none;" />
	</p>
    <fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Menu Settings</strong></legend>
	<table class="form-table">
		
	      <tr valign="top">
			<th scope="row"><label for="menu_bgimg">Menu Background Image</label></th>
			<td>
<input name="menu_bgimg" type="text" id="menu_bgimg" value="<?php echo get_option('mobi_menu_bgimg'); ?>" class="regular-text"  /> 
			</td>
		</tr>
    
           <tr valign="top">
			<th scope="row"><label for="menu_item">Menu Items Image</label></th>
			<td>
<input name="menu_item" type="text" id="menu_item" value="<?php echo get_option('mobi_menu_item'); ?>" class="regular-text"  /> 
			</td>
		</tr>
        	
<tr valign="top">
			<th scope="row"><label for="menu_divider">Menu Divider Image</label></th>
			<td>
<input name="menu_divider" type="text" id="menu_divider" value="<?php echo get_option('mobi_menu_divider'); ?>" class="regular-text"  /> 
			</td>
		</tr>
     
   

<tr valign="top">
			<th scope="row"><label for="menu_data-theme">Menu data-theme</label></th>
			<td>
<select name="menu_data-theme" id="menu_data-theme">	
					<option value="a" <?php if(get_option('mobi_menu_data-theme') == 'a'){?>selected="selected"<?php } ?>>&nbsp;a&nbsp;</option>	
                    <option value="b" <?php if(get_option('mobi_menu_data-theme') == 'b'){?>selected="selected"<?php } ?>>&nbsp;b&nbsp;</option>	
                    <option value="c" <?php if(get_option('mobi_menu_data-theme') == 'c'){?>selected="selected"<?php } ?>>&nbsp;c&nbsp;</option>	
                    <option value="d" <?php if(get_option('mobi_menu_data-theme') == 'd'){?>selected="selected"<?php } ?>>&nbsp;d&nbsp;</option>	
                    <option value="e" <?php if(get_option('mobi_menu_data-theme') == 'e'){?>selected="selected"<?php } ?>>&nbsp;e&nbsp;</option>	
                    <option value="f" <?php if(get_option('mobi_menu_data-theme') == 'f'){?>selected="selected"<?php } ?>>&nbsp;f&nbsp;</option>	
                    <option value="g" <?php if(get_option('mobi_menu_data-theme') == 'g'){?>selected="selected"<?php } ?>>&nbsp;g&nbsp;</option>	
                    
</select> 
                
			</td>
		</tr>
        
		
	</table>
	</fieldset>
    
    <p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
		<input type="hidden" name="mobi_settings" value="save" style="display:none;" />
		</p>
      <fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Bullet Proof Button Settings</strong></legend>
	<table class="form-table">
		
	      <tr valign="top" style="height:220px">
			
			<td  style="width:200px">
            <label for="bpb_up_border">Button Up Border</label><br/>
<input name="bpb_up_border" type="text" id="bpb_up_border" value="<?php echo (get_option('mobi_bpb_up_border'))? get_option('mobi_bpb_up_border'):'#000000'; ?>"   /> 
<div id="color_picker_color2"></div>
        <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color2').hide();
    jQuery('#color_picker_color2').farbtastic("#bpb_up_border");
	
    jQuery("#bpb_up_border").click(function(){jQuery('#color_picker_color2').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 50px');});
    jQuery("#bpb_up_border").blur(function(){jQuery('#color_picker_color2').slideUps()});
  });
    </script>
		</td>
        	<td  style="width:200px">
            <label for="bpb_up_color">Button Up Text Color</label><br/>
<input name="bpb_up_color" type="text" id="bpb_up_color" value="<?php echo (get_option('mobi_bpb_up_color'))? get_option('mobi_bpb_up_color'):'#FFFFFF'; ?>"   /> 
<div id="color_picker_color3"></div>
      <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color3').hide();
    jQuery('#color_picker_color3').farbtastic("#bpb_up_color");
	
    jQuery("#bpb_up_color").click(function(){jQuery('#color_picker_color3').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_up_color").blur(function(){jQuery('#color_picker_color3').slideUp()});
  });
    </script>
		</td>
            	<td  style="width:200px">
            <label for="bpb_up_shadow">Button Up Text Shadow</label><br/>
<input name="bpb_up_shadow" type="text" id="bpb_up_shadow" value="<?php echo (get_option('mobi_bpb_up_shadow'))? get_option('mobi_bpb_up_shadow'):'#FEFEFE'; ?>"   /> 
<div id="color_picker_color4"></div>
     <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color4').hide();
    jQuery('#color_picker_color4').farbtastic("#bpb_up_shadow");
	
    jQuery("#bpb_up_shadow").click(function(){jQuery('#color_picker_color4').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_up_shadow").blur(function(){jQuery('#color_picker_color4').slideUp()});
  });
    </script>
		</td>
 			<td style="width:200px">
            <label for="bpb_up_bg1">Button Up Background From</label><br/>
<input name="bpb_up_bg1" type="text" id="bpb_up_bg1" value="<?php echo (get_option('mobi_bpb_up_bg1'))? get_option('mobi_bpb_up_bg1'):'#000000'; ?>"   /> 
<div id="color_picker_color5"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color5').hide();
    jQuery('#color_picker_color5').farbtastic("#bpb_up_bg1");
    jQuery("#bpb_up_bg1").click(function(){jQuery('#color_picker_color5').slideDown();jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_up_bg1").blur(function(){jQuery('#color_picker_color5').slideUp()});
  });
     
    </script>
		</td>
      
       
			
			<td style="width:200px">
            <label for="bpb_up_bg2">Button Up Background To</label><br/>
<input name="bpb_up_bg2" type="text" id="bpb_up_bg2" value="<?php echo (get_option('mobi_bpb_up_bg2'))? get_option('mobi_bpb_up_bg2'):'#FFFFFF'; ?>"   /> 
<div id="color_picker_color6"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color6').hide();
    jQuery('#color_picker_color6').farbtastic("#bpb_up_bg2");
    jQuery("#bpb_up_bg2").click(function(){jQuery('#color_picker_color6').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_up_bg2").blur(function(){jQuery('#color_picker_color6').slideUp()});
  });
     
    </script>
		</td>
       </tr>
        	

  	      <tr valign="top" style="height:220px">
			
			<td  style="width:200px">
            <label for="bpb_hover_border">Button Hover Border</label><br/>
<input name="bpb_hover_border" type="text" id="bpb_hover_border" value="<?php echo (get_option('mobi_bpb_hover_border'))? get_option('mobi_bpb_hover_border'):'#000000'; ?>"   /> 
<div id="color_picker_color7"></div>
        <script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery('#color_picker_color7').hide();
    jQuery('#color_picker_color7').farbtastic("#bpb_hover_border");
	
    jQuery("#bpb_hover_border").click(function(){jQuery('#color_picker_color7').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 50px');});
    jQuery("#bpb_hover_border").blur(function(){jQuery('#color_picker_color7').slideUp()});
  });
    </script>
		</td>
        	<td  style="width:200px">
            <label for="bpb_up_color">Button Hover Text Color</label><br/>
<input name="bpb_hover_color" type="text" id="bpb_hover_color" value="<?php echo (get_option('mobi_bpb_hover_color'))? get_option('mobi_bpb_hover_color'):'#FFFFFF'; ?>"   /> 
<div id="color_picker_color8"></div>
      <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color8').hide();
    jQuery('#color_picker_color8').farbtastic("#bpb_hover_color");
	
    jQuery("#bpb_hover_color").click(function(){jQuery('#color_picker_color8').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_hover_color").blur(function(){jQuery('#color_picker_color8').slideUp()});
  });
    </script>
		</td>
            	<td  style="width:200px">
            <label for="bpb_hover_shadow">Button Hover Text Shadow</label><br/>
<input name="bpb_hover_shadow" type="text" id="bpb_hover_shadow" value="<?php echo (get_option('mobi_bpb_hover_shadow'))? get_option('mobi_bpb_hover_shadow'):'#FEFEFE'; ?>"   /> 
<div id="color_picker_color9"></div>
     <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color9').hide();
    jQuery('#color_picker_color9').farbtastic("#bpb_hover_shadow");
	
    jQuery("#bpb_hover_shadow").click(function(){jQuery('#color_picker_color9').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_hover_shadow").blur(function(){jQuery('#color_picker_color9').slideUp()});
  });
    </script>
		</td>
 			<td style="width:200px">
            <label for="bpb_hover_bg1">Button Hover Background From</label><br/>
<input name="bpb_hover_bg1" type="text" id="bpb_hover_bg1" value="<?php echo (get_option('mobi_bpb_hover_bg1'))? get_option('mobi_bpb_hover_bg1'):'#000000'; ?>"   /> 
<div id="color_picker_color10"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color10').hide();
    jQuery('#color_picker_color10').farbtastic("#bpb_hover_bg1");
    jQuery("#bpb_hover_bg1").click(function(){jQuery('#color_picker_color10').slideDown();jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_hover_bg1").blur(function(){jQuery('#color_picker_color10').slideUp()});
  });
     
    </script>
		</td>
      
       
			
			<td style="width:200px">
            <label for="bpb_hover_bg2">Button Hover Background To</label><br/>
<input name="bpb_hover_bg2" type="text" id="bpb_hover_bg2" value="<?php echo (get_option('mobi_bpb_hover_bg2'))? get_option('mobi_bpb_hover_bg2'):'#FFFFFF'; ?>"   /> 
<div id="color_picker_color11"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color11').hide();
    jQuery('#color_picker_color11').farbtastic("#bpb_hover_bg2");
    jQuery("#bpb_hover_bg2").click(function(){jQuery('#color_picker_color11').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_hover_bg2").blur(function(){jQuery('#color_picker_color11').slideUp()});
  });
     
    </script>
		</td>
       </tr>   
   

    	      <tr valign="top" style="height:220px">
			
			<td  style="width:200px">
            <label for="bpb_down_border">Button Down Border</label><br/>
<input name="bpb_down_border" type="text" id="bpb_down_border" value="<?php echo (get_option('mobi_bpb_down_border'))? get_option('mobi_bpb_down_border'):'#000000'; ?>"   /> 
<div id="color_picker_color12"></div>
        <script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery('#color_picker_color12').hide();
    jQuery('#color_picker_color12').farbtastic("#bpb_down_border");
	
    jQuery("#bpb_down_border").click(function(){jQuery('#color_picker_color12').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 50px');});
    jQuery("#bpb_down_border").blur(function(){jQuery('#color_picker_color12').slideUp()});
  });
    </script>
		</td>
        	<td  style="width:200px">
            <label for="bpb_down_color">Button Down Text Color</label><br/>
<input name="bpb_down_color" type="text" id="bpb_down_color" value="<?php echo (get_option('mobi_bpb_down_color'))? get_option('mobi_bpb_down_color'):'#FFFFFF'; ?>"   /> 
<div id="color_picker_color13"></div>
      <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color13').hide();
    jQuery('#color_picker_color13').farbtastic("#bpb_down_color");
	
    jQuery("#bpb_down_color").click(function(){jQuery('#color_picker_color13').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_down_color").blur(function(){jQuery('#color_picker_color13').slideUp()});
  });
    </script>
		</td>
            	<td  style="width:200px">
            <label for="bpb_down_shadow">Button Down Text Shadow</label><br/>
<input name="bpb_down_shadow" type="text" id="bpb_down_shadow" value="<?php echo (get_option('mobi_bpb_down_shadow'))? get_option('mobi_bpb_down_shadow'):'#FEFEFE'; ?>"   /> 
<div id="color_picker_color14"></div>
     <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color14').hide();
    jQuery('#color_picker_color14').farbtastic("#bpb_down_shadow");
	
    jQuery("#bpb_down_shadow").click(function(){jQuery('#color_picker_color14').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_down_shadow").blur(function(){jQuery('#color_picker_color14').slideUp()});
  });
    </script>
		</td>
 			<td style="width:200px">
            <label for="bpb_down_bg1">Button Down Background From</label><br/>
<input name="bpb_down_bg1" type="text" id="bpb_down_bg1" value="<?php echo (get_option('mobi_bpb_down_bg1'))? get_option('mobi_bpb_down_bg1'):'#000000'; ?>"   /> 
<div id="color_picker_color15"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color15').hide();
    jQuery('#color_picker_color15').farbtastic("#bpb_down_bg1");
    jQuery("#bpb_down_bg1").click(function(){jQuery('#color_picker_color15').slideDown();jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_down_bg1").blur(function(){jQuery('#color_picker_color15').slideUp()});
  });
 </script>
		</td>
      
       
			
			<td style="width:200px">
            <label for="bpb_down_bg2">Button Down Background To</label><br/>
<input name="bpb_down_bg2" type="text" id="bpb_down_bg2" value="<?php echo (get_option('mobi_bpb_down_bg2'))? get_option('mobi_bpb_down_bg2'):'#FFFFFF'; ?>"   /> 
<div id="color_picker_color16"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color16').hide();
    jQuery('#color_picker_color16').farbtastic("#bpb_down_bg2");
    jQuery("#bpb_down_bg2").click(function(){jQuery('#color_picker_color16').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#bpb_down_bg2").blur(function(){jQuery('#color_picker_color16').slideUp()});
  });
     
    </script>
		</td>
       </tr>      
		<tr valign="top">
			<th scope="row"><label for="bpb_data-theme">Use Default data-theme</label></th>
			<td>
<select name="bpb_data-theme" id="bpb_data-theme">	
<option value="0" <?php if(get_option('mobi_bpb_data-theme') == '0'){?>selected="selected"<?php } ?>>&nbsp;no</option>	
					<option value="a" <?php if(get_option('mobi_bpb_data-theme') == 'a'){?>selected="selected"<?php } ?>>&nbsp;a&nbsp;</option>	
                    <option value="b" <?php if(get_option('mobi_bpb_data-theme') == 'b'){?>selected="selected"<?php } ?>>&nbsp;b&nbsp;</option>	
                    <option value="c" <?php if(get_option('mobi_bpb_data-theme') == 'c'){?>selected="selected"<?php } ?>>&nbsp;c&nbsp;</option>	
                    <option value="d" <?php if(get_option('mobi_bpb_data-theme') == 'd'){?>selected="selected"<?php } ?>>&nbsp;d&nbsp;</option>	
                    <option value="e" <?php if(get_option('mobi_bpb_data-theme') == 'e'){?>selected="selected"<?php } ?>>&nbsp;e&nbsp;</option>	
                    <option value="f" <?php if(get_option('mobi_menu_data-theme') == 'f'){?>selected="selected"<?php } ?>>&nbsp;f&nbsp;</option>	
                    <option value="g" <?php if(get_option('mobi_bpb_data-theme') == 'g'){?>selected="selected"<?php } ?>>&nbsp;g&nbsp;</option>	
                    
</select> 
                
			</td>
		</tr>
	</table>
	</fieldset>
	
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
		<input type="hidden" name="mobi_settings" value="save" style="display:none;" />
	</p>
	
	<?php require_once (TEMPLATEPATH . '/tools/mobile_settings/home_button.php'); ?>
	
</form>
</div>
<?php } ?>

<?php 
add_action('init', 'load_theme_scripts');
function load_theme_scripts() {
    wp_enqueue_style( 'farbtastic' );
    wp_enqueue_script( 'farbtastic' );
}


?>