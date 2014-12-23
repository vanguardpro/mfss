<?php
/*
Plugin Name: ByREV Fix Missed Shedule Plugin
Plugin URI: http://byrev.org/bookmarks/missed-schedule-wordpress-plugin-fix/
Description: Fast Fix "Missed Shedule" messages from wp post an publish posts -- This plugin will check every 10 minutes, if there are items in the database that match the problem described. To not use too many resources in one session, only fix 30 items per session. All articles with problems will be solved in future sessions, until no longer exist.
Author: Emilian Robert Vicol
Version: 1.0.2b
Author URI: http://byrev.org/
*/
define('_INTERVAL_VERIFY_FUTURE',600); # 10 minutes

define( '_NOW_TIME' , time() );

function fix_missed_shedule() {
global $table_prefix;    
    $now_time = strftime("%Y-%m-%d %H:%M:%S", _NOW_TIME);
    $sql = "SELECT `ID` FROM `".$table_prefix."posts` WHERE `post_date_gmt` <= '".$now_time."' AND `post_status` LIKE 'future' LIMIT 0 , 30";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_assoc($result)) {
	wp_publish_post($row['ID']);
    }
}

$next_verify = get_option('byrev_fixshedule_next_verify',"?");
if ( $next_verify < _NOW_TIME ) {
    update_option('byrev_fixshedule_next_verify', _NOW_TIME + _INTERVAL_VERIFY_FUTURE);
    fix_missed_shedule();
}


function byrev_fms_activate() {
   update_option('byrev_fixshedule_next_verify', _NOW_TIME); 
}

register_activation_hook( __FILE__, 'byrev_fms_activate' );
?>