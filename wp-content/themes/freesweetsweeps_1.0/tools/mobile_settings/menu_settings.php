<?php 

global $mobi_settings;
if(get_option('mobi_menu_bgimg')){
$mobi_menu_bgimg=get_option('mobi_menu_bgimg');
}
else{
$mobi_menu_bgimg=$mobi_settings->mobi_menu_bgimg;
}

if(get_option('mobi_menu_item')){
$mobi_menu_item=get_option('mobi_menu_item');
}
else{
$mobi_menu_item=$mobi_settings->mobi_menu_item;
}


if(get_option('mobi_menu_divider')){
$mobi_menu_divider=get_option('mobi_menu_divider');
}
else{
$mobi_menu_divider=$mobi_settings->mobi_menu_divider;
}



?>

<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Menu Settings</strong></legend>
	<table class="form-table">
		
	      <tr valign="top">
			<th scope="row"><label for="menu_bgimg">Menu Background Image</label></th>
			<td>
<input name="menu_bgimg" type="text" id="menu_bgimg" value="<?php echo $mobi_menu_bgimg; ?>" class="regular-text"  /> 
			</td>
		</tr>
    
           <tr valign="top">
			<th scope="row"><label for="menu_item">Menu Items Image</label></th>
			<td>
<input name="menu_item" type="text" id="menu_item" value="<?php echo $mobi_menu_item; ?>" class="regular-text"  /> 
			</td>
		</tr>
        	
<tr valign="top">
			<th scope="row"><label for="menu_divider">Menu Divider Image</label></th>
			<td>
<input name="menu_divider" type="text" id="menu_divider" value="<?php echo $mobi_menu_divider; ?>" class="regular-text"  /> 
			</td>
		</tr>
     
   

<tr valign="top">
			<th scope="row"><label for="menu_data_theme" style="color:#999">Use Default Menu data_theme</label></th>
			<td>
<select style="color:#999" disabled="disabled" name="menu_data_theme" id="menu_data_theme">
<option value="0" <?php if(get_option('mobi_menu_data_theme') == '0'){?>selected="selected"<?php } ?>>&nbsp;no</option>		
					<option value="a" <?php if(get_option('mobi_menu_data_theme') == 'a'){?>selected="selected"<?php } ?>>&nbsp;a&nbsp;</option>	
                    <option value="b" <?php if(get_option('mobi_menu_data_theme') == 'b'){?>selected="selected"<?php } ?>>&nbsp;b&nbsp;</option>	
                    <option value="c" <?php if(get_option('mobi_menu_data_theme') == 'c'){?>selected="selected"<?php } ?>>&nbsp;c&nbsp;</option>	
                    <option value="d" <?php if(get_option('mobi_menu_data_theme') == 'd'){?>selected="selected"<?php } ?>>&nbsp;d&nbsp;</option>	
                    <option value="e" <?php if(get_option('mobi_menu_data_theme') == 'e'){?>selected="selected"<?php } ?>>&nbsp;e&nbsp;</option>	
                    <option value="f" <?php if(get_option('mobi_menu_data_theme') == 'f'){?>selected="selected"<?php } ?>>&nbsp;f&nbsp;</option>	
                    <option value="g" <?php if(get_option('mobi_menu_data_theme') == 'g'){?>selected="selected"<?php } ?>>&nbsp;g&nbsp;</option>	
                    
</select> 
                
			</td>
		</tr>
        
		
	</table>
	</fieldset>
    
<p class="submit">
<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
<input type="hidden" name="mobi_settings" value="save" style="display:none;" />
</p>















