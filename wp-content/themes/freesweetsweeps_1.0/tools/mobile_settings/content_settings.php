<?php
global $mobi_settings;
if(get_option('mobi_post_hoverimg')){
$mobi_post_hoverimg=get_option('mobi_post_hoverimg');
}
else{
$mobi_post_hoverimg=$mobi_settings->mobi_post_hoverimg;
}


?>




<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Content Settings</strong></legend>
	<table class="form-table">
		
	      <tr valign="top">
			<th scope="row"><label for="post_hoverimg">Post Hover Image</label></th>
			<td>
<input name="post_hoverimg" type="text" id="post_hoverimg" value="<?php echo $mobi_post_hoverimg; ?>" class="regular-text"  /> 
			</td>
		</tr>
    
           

<tr valign="top">
			<th scope="row"><label for="content_data_theme">Use Defualt data-theme</label></th>
			<td>
<select name="content_data_theme" id="content_data_theme">	
<option value="0" <?php if(get_option('mobi_content_data_theme') == '0'){?>selected="selected"<?php } ?>>&nbsp;no</option>	
					<option value="a" <?php if(get_option('mobi_content_data_theme') == 'a'){?>selected="selected"<?php } ?>>&nbsp;a&nbsp;</option>	
                    <option value="b" <?php if(get_option('mobi_content_data_theme') == 'b'){?>selected="selected"<?php } ?>>&nbsp;b&nbsp;</option>	
                    <option value="c" <?php if(get_option('mobi_content_data_theme') == 'c'){?>selected="selected"<?php } ?>>&nbsp;c&nbsp;</option>	
                    <option value="d" <?php if(get_option('mobi_content_data_theme') == 'd'){?>selected="selected"<?php } ?>>&nbsp;d&nbsp;</option>	
                    <option value="e" <?php if(get_option('mobi_content_data_theme') == 'e'){?>selected="selected"<?php } ?>>&nbsp;e&nbsp;</option>	
                    <option value="f" <?php if(get_option('mobi_content_data_theme') == 'f'){?>selected="selected"<?php } ?>>&nbsp;f&nbsp;</option>	
                    <option value="g" <?php if(get_option('mobi_content_data_theme') == 'g'){?>selected="selected"<?php } ?>>&nbsp;g&nbsp;</option>	
           
                    
</select> 
                
			</td>
		</tr>
        
		
	</table>
	</fieldset>
    
<p class="submit">
<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
<input type="hidden" name="mobi_settings" value="save" style="display:none;" />
</p>















