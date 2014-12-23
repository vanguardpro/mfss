<?php global $mobi_settings; ?>


<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Home Button Settings</strong></legend>
	<table class="form-table">
		
	      <tr valign="top" style="height:220px">
			
			<td  style="width:200px">
            <label for="hb_up_border">Button Up Border</label><br/>
<input name="hb_up_border" type="text" id="hb_up_border" value="<?php echo (get_option('mobi_hb_up_border'))? get_option('mobi_hb_up_border'): $mobi_settings->mobi_hb_up_border; ?>"   /> 
<div id="color_picker_color17"></div>
        <script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery('#color_picker_color17').hide();
    jQuery('#color_picker_color17').farbtastic("#hb_up_border");
	
    jQuery("#hb_up_border").click(function(){jQuery('#color_picker_color17').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 50px');});
    jQuery("#hb_up_border").blur(function(){jQuery('#color_picker_color17').slideUp()});
  });
    </script>
		</td>
        	<td  style="width:200px">
            <label for="hb_up_color">Button Up Text Color</label><br/>
<input name="hb_up_color" type="text" id="hb_up_color" value="<?php echo (get_option('mobi_hb_up_color'))? get_option('mobi_hb_up_color'): $mobi_settings->mobi_hb_up_color; ?>"   /> 
<div id="color_picker_color18"></div>
      <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color18').hide();
    jQuery('#color_picker_color18').farbtastic("#hb_up_color");
	
    jQuery("#hb_up_color").click(function(){jQuery('#color_picker_color18').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_up_color").blur(function(){jQuery('#color_picker_color18').slideUp()});
  });
    </script>
		</td>
            	<td  style="width:200px">
            <label for="hb_up_shadow">Button Up Box Shadow</label><br/>
<input name="hb_up_shadow" type="text" id="hb_up_shadow" value="<?php echo (get_option('mobi_hb_up_shadow'))? get_option('mobi_hb_up_shadow'): $mobi_settings->mobi_hb_up_shadow; ?>"   /> 
<div id="color_picker_color19"></div>
     <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color19').hide();
    jQuery('#color_picker_color19').farbtastic("#hb_up_shadow");
	
    jQuery("#hb_up_shadow").click(function(){jQuery('#color_picker_color19').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_up_shadow").blur(function(){jQuery('#color_picker_color19').slideUp()});
  });
    </script>
		</td>
 			<td style="width:200px">
            <label for="hb_up_bg1">Button Up Background From</label><br/>
<input name="hb_up_bg1" type="text" id="hb_up_bg1" value="<?php echo (get_option('mobi_hb_up_bg1'))? get_option('mobi_hb_up_bg1'): $mobi_settings->mobi_hb_up_bg1; ?>"   /> 
<div id="color_picker_color20"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color20').hide();
    jQuery('#color_picker_color20').farbtastic("#hb_up_bg1");
    jQuery("#hb_up_bg1").click(function(){jQuery('#color_picker_color20').slideDown();jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_up_bg1").blur(function(){jQuery('#color_picker_color20').slideUp()});
  });
     
    </script>
		</td>
      
       
			
			<td style="width:200px">
            <label for="hb_up_bg2">Button Up Background To</label><br/>
<input name="hb_up_bg2" type="text" id="hb_up_bg2" value="<?php echo (get_option('mobi_hb_up_bg2'))? get_option('mobi_hb_up_bg2'): $mobi_settings->mobi_hb_up_bg2; ?>"   /> 
<div id="color_picker_color21"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color21').hide();
    jQuery('#color_picker_color21').farbtastic("#hb_up_bg2");
    jQuery("#hb_up_bg2").click(function(){jQuery('#color_picker_color21').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_up_bg2").blur(function(){jQuery('#color_picker_color21').slideUp()});
  });
     
    </script>
		</td>
       </tr>
        	

  	      <tr valign="top" style="height:220px">
			
			<td  style="width:200px">
            <label for="hb_hover_border">Button Hover Border</label><br/>
<input name="hb_hover_border" type="text" id="hb_hover_border" value="<?php echo (get_option('mobi_hb_hover_border'))? get_option('mobi_hb_hover_border'): $mobi_settings->mobi_hb_hover_border; ?>"   /> 
<div id="color_picker_color22"></div>
        <script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery('#color_picker_color22').hide();
    jQuery('#color_picker_color22').farbtastic("#hb_hover_border");
	
    jQuery("#hb_hover_border").click(function(){jQuery('#color_picker_color22').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 50px');});
    jQuery("#hb_hover_border").blur(function(){jQuery('#color_picker_color22').slideUp()});
  });
    </script>
		</td>
        	<td  style="width:200px">
            <label for="hb_up_color">Button Hover Text Color</label><br/>
<input name="hb_hover_color" type="text" id="hb_hover_color" value="<?php echo (get_option('mobi_hb_hover_color'))? get_option('mobi_hb_hover_color'): $mobi_settings->mobi_hb_hover_color; ?>"   /> 
<div id="color_picker_color23"></div>
      <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color23').hide();
    jQuery('#color_picker_color23').farbtastic("#hb_hover_color");
	
    jQuery("#hb_hover_color").click(function(){jQuery('#color_picker_color23').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_hover_color").blur(function(){jQuery('#color_picker_color23').slideUp()});
  });
    </script>
		</td>
            	<td  style="width:200px">
            <label for="hb_hover_shadow">Button Hover Box Shadow</label><br/>
<input name="hb_hover_shadow" type="text" id="hb_hover_shadow" value="<?php echo (get_option('mobi_hb_hover_shadow'))? get_option('mobi_hb_hover_shadow'): $mobi_settings->mobi_hb_hover_shadow; ?>"   /> 
<div id="color_picker_color24"></div>
     <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color24').hide();
    jQuery('#color_picker_color24').farbtastic("#hb_hover_shadow");
	
    jQuery("#hb_hover_shadow").click(function(){jQuery('#color_picker_color24').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_hover_shadow").blur(function(){jQuery('#color_picker_color24').slideUp()});
  });
    </script>
		</td>
 			<td style="width:200px">
            <label for="hb_hover_bg1">Button Hover Background From</label><br/>
<input name="hb_hover_bg1" type="text" id="hb_hover_bg1" value="<?php echo (get_option('mobi_hb_hover_bg1'))? get_option('mobi_hb_hover_bg1'): $mobi_settings->mobi_hb_hover_bg1; ?>"   /> 
<div id="color_picker_color25"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color25').hide();
    jQuery('#color_picker_color25').farbtastic("#hb_hover_bg1");
    jQuery("#hb_hover_bg1").click(function(){jQuery('#color_picker_color25').slideDown();jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_hover_bg1").blur(function(){jQuery('#color_picker_color25').slideUp()});
  });
     
    </script>
		</td>
      
       
			
			<td style="width:200px">
            <label for="hb_hover_bg2">Button Hover Background To</label><br/>
<input name="hb_hover_bg2" type="text" id="hb_hover_bg2" value="<?php echo (get_option('mobi_hb_hover_bg2'))? get_option('mobi_hb_hover_bg2'): $mobi_settings->mobi_hb_hover_bg2; ?>"   /> 
<div id="color_picker_color26"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color26').hide();
    jQuery('#color_picker_color26').farbtastic("#hb_hover_bg2");
    jQuery("#hb_hover_bg2").click(function(){jQuery('#color_picker_color26').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_hover_bg2").blur(function(){jQuery('#color_picker_color26').slideUp()});
  });
     
    </script>
		</td>
       </tr>   
   

    	      <tr valign="top" style="height:220px">
			
			<td  style="width:200px">
            <label for="hb_down_border">Button Down Border</label><br/>
<input name="hb_down_border" type="text" id="hb_down_border" value="<?php echo (get_option('mobi_hb_down_border'))? get_option('mobi_hb_down_border'): $mobi_settings->mobi_hb_down_border; ?>"   /> 
<div id="color_picker_color27"></div>
        <script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery('#color_picker_color27').hide();
    jQuery('#color_picker_color27').farbtastic("#hb_down_border");
	
    jQuery("#hb_down_border").click(function(){jQuery('#color_picker_color27').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 50px');});
    jQuery("#hb_down_border").blur(function(){jQuery('#color_picker_color27').slideUp()});
  });
    </script>
		</td>
        	<td  style="width:200px">
            <label for="hb_down_color">Button Down Text Color</label><br/>
<input name="hb_down_color" type="text" id="hb_down_color" value="<?php echo (get_option('mobi_hb_down_color'))? get_option('mobi_hb_down_color'): $mobi_settings->mobi_hb_down_color; ?>"   /> 
<div id="color_picker_color28"></div>
      <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color28').hide();
    jQuery('#color_picker_color28').farbtastic("#hb_down_color");
	
    jQuery("#hb_down_color").click(function(){jQuery('#color_picker_color28').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_down_color").blur(function(){jQuery('#color_picker_color28').slideUp()});
  });
    </script>
		</td>
            	<td  style="width:200px">
            <label for="hb_down_shadow">Button Down Box Shadow</label><br/>
<input name="hb_down_shadow" type="text" id="hb_down_shadow" value="<?php echo (get_option('mobi_hb_down_shadow'))? get_option('mobi_hb_down_shadow'): $mobi_settings->mobi_hb_down_shadow; ?>"   /> 
<div id="color_picker_color29"></div>
     <script type="text/javascript">
        	jQuery(document).ready(function() {
    jQuery('#color_picker_color29').hide();
    jQuery('#color_picker_color29').farbtastic("#hb_down_shadow");
	
    jQuery("#hb_down_shadow").click(function(){jQuery('#color_picker_color29').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_down_shadow").blur(function(){jQuery('#color_picker_color29').slideUp()});
  });
    </script>
		</td>
 			<td style="width:200px">
            <label for="hb_down_bg1">Button Down Background From</label><br/>
<input name="hb_down_bg1" type="text" id="hb_down_bg1" value="<?php echo (get_option('mobi_hb_down_bg1'))? get_option('mobi_hb_down_bg1'): $mobi_settings->mobi_hb_down_bg1; ?>"   /> 
<div id="color_picker_color30"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color30').hide();
    jQuery('#color_picker_color30').farbtastic("#hb_down_bg1");
    jQuery("#hb_down_bg1").click(function(){jQuery('#color_picker_color30').slideDown();jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_down_bg1").blur(function(){jQuery('#color_picker_color30').slideUp()});
  });
 </script>
		</td>
      
       
			
			<td style="width:200px">
            <label for="hb_down_bg2">Button Down Background To</label><br/>
<input name="hb_down_bg2" type="text" id="hb_down_bg2" value="<?php echo (get_option('mobi_hb_down_bg2'))? get_option('mobi_hb_down_bg2'): $mobi_settings->mobi_hb_down_bg2; ?>"   /> 
<div id="color_picker_color31"></div>
     <script type="text/javascript">
	 
	jQuery(document).ready(function() {
    jQuery('#color_picker_color31').hide();
    jQuery('#color_picker_color31').farbtastic("#hb_down_bg2");
    jQuery("#hb_down_bg2").click(function(){jQuery('#color_picker_color31').slideDown(); jQuery('.farbtastic').css('margin', '-70px 0 0 100px');});
    jQuery("#hb_down_bg2").blur(function(){jQuery('#color_picker_color31').slideUp()});
  });
     
    </script>
		</td>
       </tr>      
		<tr valign="top">
			<th scope="row"><label for="hb_data_theme">Use Default data_theme</label></th>
			<td>
<select name="hb_data_theme" id="hb_data_theme">	
<option value="0" <?php if(get_option('mobi_hb_data_theme') == '0'){?>selected="selected"<?php } ?>>&nbsp;no</option>	
					<option value="a" <?php if(get_option('mobi_hb_data_theme') == 'a'){?>selected="selected"<?php } ?>>&nbsp;a&nbsp;</option>	
                    <option value="b" <?php if(get_option('mobi_hb_data_theme') == 'b'){?>selected="selected"<?php } ?>>&nbsp;b&nbsp;</option>	
                    <option value="c" <?php if(get_option('mobi_hb_data_theme') == 'c'){?>selected="selected"<?php } ?>>&nbsp;c&nbsp;</option>	
                    <option value="d" <?php if(get_option('mobi_hb_data_theme') == 'd'){?>selected="selected"<?php } ?>>&nbsp;d&nbsp;</option>	
                    <option value="e" <?php if(get_option('mobi_hb_data_theme') == 'e'){?>selected="selected"<?php } ?>>&nbsp;e&nbsp;</option>	
                    <option value="f" <?php if(get_option('mobi_hb_data_theme') == 'f'){?>selected="selected"<?php } ?>>&nbsp;f&nbsp;</option>	
                    <option value="g" <?php if(get_option('mobi_hb_data_theme') == 'g'){?>selected="selected"<?php } ?>>&nbsp;g&nbsp;</option>	
                    
</select> 
                
			</td>
		</tr>
	</table>
	</fieldset>
	
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
		<input type="hidden" name="mobi_settings" value="save" style="display:none;" />
	</p>


