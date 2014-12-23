<?php 
global $mobi_settings;
if(get_option('mobi_header_logoimg')){
$mobi_header_logoimg=get_option('mobi_header_logoimg');
}
else{
$mobi_header_logoimg=$mobi_settings->mobi_header_logoimg;
}
if(get_option('mobi_app_title')){
$mobi_app_title=get_option('mobi_app_title');
}
else{
$mobi_app_title=$mobi_settings->mobi_app_title;
}
if(get_option('mobi_app_icon')){
$mobi_app_icon=get_option('mobi_app_icon');
}
else{
$mobi_app_icon=$mobi_settings->mobi_app_icon;
}
if(get_option('mobi_header_bgcolor')){
$mobi_header_bgcolor=get_option('mobi_header_bgcolor');
}
else{
$mobi_header_bgcolor=$mobi_settings->mobi_header_bgcolor;
}

?>
<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Header Settings</strong></legend>
	<table class="form-table">
		
	      <tr valign="top">
			<th scope="row"><label for="contest_image">Header Logo Image</label></th>
			<td>
<input name="header_logoimg" type="text" id="header_logoimg" value="<?php echo $mobi_header_logoimg; ?>" class="regular-text"  /> 
			</td>
		</tr>
        <tr valign="top">
			<th scope="row"><label for="app_title">App Title</label></th>
			<td>
<input name="app_title" type="text" id="app_title" value="<?php echo $mobi_app_title; ?>" class="regular-text"  /> 
			</td>
		</tr>
    
           <tr valign="top">
			<th scope="row"><label for="contest_image">Apple Touch Icon</label></th>
			<td>
<input name="app_icon" type="text" id="app_icon" value="<?php echo $mobi_app_icon; ?>" class="regular-text"  /> 
			</td>
		</tr>
        	
        <tr valign="top">
			<th scope="row"><label for="style">Header Background Color:</label></th>
			<td><input type="text" id="header_bgcolor" value="<?php echo $mobi_header_bgcolor; ?>" name="header_bgcolor" />
        <div id="color_picker_color1"></div>
        <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color1').hide();
    jQuery('#color_picker_color1').farbtastic("#header_bgcolor");
    jQuery("#header_bgcolor").click(function(){jQuery('#color_picker_color1').slideDown();jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#header_bgcolor").blur(function(){jQuery('#color_picker_color1').slideUp()});
  });
 </script>

			</td>
		</tr>
     
   

<tr valign="top" >
			<th scope="row"><label for="testmode" style="color:#999">Use Default Header data_theme</label></th>
			<td>
<select style="color:#999" disabled="disabled"  name="header_data_theme" id="header_data_theme">	
<option value="0" <?php if(get_option('mobi_header_data_theme') == '0'){?>selected="selected"<?php } ?>>&nbsp;no</option>	
			
					<option value="a" <?php if(get_option('mobi_header_data_theme') == 'a'){?>selected="selected"<?php } ?>>&nbsp;a&nbsp;</option>	
                    <option value="b" <?php if(get_option('mobi_header_data_theme') == 'b'){?>selected="selected"<?php } ?>>&nbsp;b&nbsp;</option>	
                    <option value="c" <?php if(get_option('mobi_header_data_theme') == 'c'){?>selected="selected"<?php } ?>>&nbsp;c&nbsp;</option>	
                    <option value="d" <?php if(get_option('mobi_header_data_theme') == 'd'){?>selected="selected"<?php } ?>>&nbsp;d&nbsp;</option>	
                    <option value="e" <?php if(get_option('mobi_header_data_theme') == 'e'){?>selected="selected"<?php } ?>>&nbsp;e&nbsp;</option>	
                    <option value="f" <?php if(get_option('mobi_header_data_theme') == 'f'){?>selected="selected"<?php } ?>>&nbsp;f&nbsp;</option>	
                    <option value="g" <?php if(get_option('mobi_header_data_theme') == 'g'){?>selected="selected"<?php } ?>>&nbsp;g&nbsp;</option>	
                    
</select> 
               
			</td>
		</tr>
        
		
	</table>
	</fieldset>
	
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
		<input type="hidden" name="mobi_settings" value="save" style="display:none;" />
	</p>