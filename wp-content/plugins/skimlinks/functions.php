<?php

/**
 * Validated a given pulisher id
 * 
 * @param string $pub_id
 * @return bool
 */
function sl_validate_publisher_id( $pub_id ) {
	if( ( $id_parts = explode( 'X', $pub_id ) ) && count( $id_parts ) === 2 && is_numeric( $id_parts[0] ) && is_numeric( $id_parts[1] ) ) {
		return true;
	}	
	
	return false;
}

/**
 * Validates a subdomain against the skimlinks redirect domain (based off body content)
 * 
 * @param string $subdomain
 * @return bool
 */
function sl_validate_subdomain( $subdomain ) {
	if( $subdomain == '' )
		return false;
	
	$skimlinks_redirect_domain = 'http://redirectingat.com/check/domain_check.html';
	
	$subdomain_response = wp_remote_get( trailingslashit( $subdomain ) . 'check/domain_check.html' );
	$subdomain_body = wp_remote_retrieve_body( $subdomain_response );
	
	$skimlinks_response = wp_remote_get( $skimlinks_redirect_domain );
	$skimlinks_body = wp_remote_retrieve_body( $skimlinks_response );
		
	return $skimlinks_body > '' && $subdomain_body == $skimlinks_body;
}

/**
 * Returns whether the current theme has been verififed to include the footer js
 * 
 * @return bool
 */
function sl_is_footer_js_verified() {
	return get_option( 'sl_footer_js_works_for' ) == get_current_theme();
}

/**
 * Verfies if the current theme works with the footer javascript (use sl_is_footer_js_verified to check if it has been verified first)
 * 
 * @access public
 * @return void
 */
function sl_verify_footer_js() {
	$request = wp_remote_get( add_query_arg( 'sl_verify_footer_js', '1', get_bloginfo( 'url' ) ) );
	$body = wp_remote_retrieve_body( $request );
}

/**
 * Returns whether the user has opted to use a custom subdomain
 * 
 * @return bool
 */
function sl_is_subdomain_enabled() {
	return (bool) get_option( 'sl_enable_subdomain' );
}

/**
 * Returns whether the plugin is configured (therefor ready to put js into footer)
 * 
 * @return bool
 */
function sl_is_plugin_configured() {
	if ( sl_validate_publisher_id( sl_get_publisher_id() ) ) {
		if( sl_is_subdomain_enabled() ) {
			return sl_get_subdomain() > '';
		}
		return true;
	}
	
	return false;
}

/**
 * Returns whether the plugin is configured and the theme has been verified to show the js
 * 
 * @return bool
 */
function sl_is_plugin_active() {
	return sl_is_plugin_configured() && sl_is_footer_js_verified();
}

function sl_is_rss_filtering_enabled() {
	return (bool) get_option( 'sl_enable_rss_filtering' );
}

/**
 * Checks if the "Add Disclosure Badge" option is on or off.
 * 
 * @return bool
 */
function sl_is_disclosure_badge_enabled() {
	return (bool) get_option( 'sl_add_disclosure_badge' );
}

/**
 * Returns the Skimlinks Publisher ID
 * 
 * @return bool
 */
function sl_get_publisher_id() {
	return get_option( 'sl_publisher_id' );
}

/**
 * Returns the publisher_id part of Publisher ID
 * 
 * @return string || null if no pub id
 */
function sl_get_publisher_id_publisher_id() {

	$publisher_id = sl_get_publisher_id();
	
	if( !sl_validate_publisher_id( $publisher_id ) ) {
		return null;
	}
	
	return current( explode( 'X', $publisher_id ) );
	
}

/**
 * Returns the domain_id part of Publisher ID
 * 
 * @return string || null if no pub id
 */
function sl_get_publisher_id_domain_id() {

	$publisher_id = sl_get_publisher_id();
	
	if( !sl_validate_publisher_id( $publisher_id ) ) {
		return null;
	}
	
	return end( explode( 'X', $publisher_id ) );
	
}

/**
 * Returns the custom subdomain
 * 
 * @return bool
 */
function sl_get_subdomain() {
	return get_option( 'sl_subdomain' );
}



/**
 * Returns the footer js code for skimlinks
 * 
 * @return string
 */
function sl_get_footer_js() {
	
	//strip http:// from the skimlinks sub domain
	$subdomain = (string) sl_get_subdomain();
	$subdomain = preg_replace( "|^http(s)?://|", "", $subdomain );
	
	$output = "";

	if( sl_is_subdomain_enabled() && $subdomain ){
		$output .= '<script type="text/javascript">' . "\n";
		$output .= 'var skimlinks_domain = "' . $subdomain . '";' . "\n";
		$output .= '</script>' . "\n";	
	}
	
	$output .=  '<script type="text/javascript" src="http://s.skimresources.com/js/' . sl_get_publisher_id() . '.skimlinks.js"></script>' . "\n";
	
	return $output;
}

/**
 * Echoes sl_get_footer_js and also is responsible for the footer js validation
 * 
 * @return void
 */
function sl_footer_js() {	

	// set an option to say footer js is being shown (so the theme is working)
	if( isset( $_GET['sl_verify_footer_js'] ) && untrailingslashit( $_GET['sl_verify_footer_js'] ) == '1' ) {
		update_option( 'sl_footer_js_works_for', get_current_theme() );	
	}
	
	// if the plugin is not configered, don't show anything
	if( !sl_is_plugin_configured()  )
		return;

	echo sl_get_footer_js();
}

function skimlinks_footer() {
	// set an option to say footer js is being shown (so the theme is working)
	if( $_GET['sl_verify_footer_js'] == '1' ) {
		update_option( 'sl_footer_js_works_for', get_current_theme() );	
	}

	echo sl_get_footer_js();
}

/**
 * Modifes all external href's in the text.
 * 
 * @param string $content
 * @return string (modified content)
 */
function sl_modify_enternal_links( $content ) {
	
	$regex = ' href=[\"|\']([^\"|\']*)[\"|\']';
	
	//preg_match_all( "/$regex/siU", $content, $matches, PREG_SET_ORDER );
	$content = preg_replace_callback( "/$regex/siU", 'sl_modify_external_link', $content );
	
	return $content;
}

/**
 * Modifies a link with the skimlinks version (used from preg_replace_callback
 * 
 * @param array $links
 * @return string new link
 */
function sl_modify_external_link( $links ) {
	
	$link = $links[1];
	
	$redirect_domain = ( sl_is_subdomain_enabled() && sl_get_subdomain() ) ? sl_get_subdomain() : 'http://redirectingat.com';
	
	// dont modify internal links, or not http ones, or already skimlinked ones
	if( strpos( $link, 'http' ) !== 0 || strpos( $link, get_bloginfo( 'url' ) ) !== false || strpos( $link, $redirect_domain ) === 0 ) {
	    return $links[0];
	}
	
	$link = $redirect_domain . '?id=' . sl_get_publisher_id() . '&xs=1&url=' . urlencode( $link ) . '&sref=rss';
							
	return ' href="' . $link . '"';
}

/**
 * Add the dislcosure badge html to the end of the content (used via the_content filter)
 * 
 * @param string $content
 * @return string
 */
function sl_add_displausre_badge_to_content( $content ) {

	global $post;
	
	//only filter posts
	if( $post->post_type !== 'post' )
		return $content;
		
	
	$disclosure_html = sl_get_disclosure_badge_html();
	
	
	return $content . "\n" . $disclosure_html;

}

/**
 * Returns the html output for the disclosure badge html (inluing wrapper div)
 * 
 * @return string
 */
function sl_get_disclosure_badge_html() {
	
	return '<div class="skimlinks-disclosure-button"><p><script class="skimlinks_ref_script" type="text/javascript" src="http://static.skimlinks.com/api/ref.js?p=' . sl_get_publisher_id_publisher_id() . '&amp;d=' . sl_get_publisher_id_domain_id() . '&amp;t=1"></script></p></div>' . "\n";
	
}