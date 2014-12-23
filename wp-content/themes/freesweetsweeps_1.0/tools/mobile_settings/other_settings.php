<?php /*global $mobi_settings; */ ?>

<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Google Ads Code</strong></legend>
	<table class="form-table">
		
	      <tr valign="top">
			<th scope="row"><label for="header_google_ads">Google Ads Header</label></th>
			<td>
					<textarea name="header_google_ads" id="header_google_ads" rows="6" cols="70" style="font-size:11px;"><?php echo stripslashes(get_option('mobi_seo_header_google_ads')); ?></textarea><br />
				<em>320x50 Mobile Ad Unit Code Top</em>
			</td>
		</tr>
            <tr valign="top">
			<th scope="row"><label for="footer_google_ads">Google Ads Footer</label></th>
			<td>
					<textarea name="footer_google_ads" id="footer_google_ads" rows="6" cols="70" style="font-size:11px;"><?php echo stripslashes(get_option('mobi_seo_footer_google_ads')); ?></textarea><br />
				<em>320x50 Mobile Ad Unit Code Bottom </em>
			</td>
		</tr>
  
        
		
	</table>
	</fieldset>
	
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
		<input type="hidden" name="mobi_seo_settings" value="save" style="display:none;" />
	</p>