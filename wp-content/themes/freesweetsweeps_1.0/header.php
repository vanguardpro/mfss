<!DOCTYPE html >
<html <?php language_attributes(); ?>>

<head> 
<title><?php echo mobi_get_app_title(); ?></title>
<!-- "wf-mobi": The Jquery Mobile WordPress Template Theme -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="false">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!-- Of course it is advisable to have touch icons ready for each device -->
<link rel="apple-touch-icon" href="<?php mobi_the_app_icon(); ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php mobi_the_app_icon(); ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php mobi_the_app_icon(); ?>">
<meta name="apple-mobile-web-app-title" content="<?php mobi_the_app_title(); ?>">

<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/javascript/functions.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.2.0-alpha.1/jquery.mobile-1.2.0-alpha.1.min.js"></script>

<?php  wp_head();  ?>

<script type="text/javascript">window.google_analytics_uacct = "UA-35477939-1";</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35477939-1']);
  _gaq.push(['_setDomainName', 'freesweetsweeps.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
if (document.referrer.match(/google.com/gi) && document.referrer.match(/cd/gi)) {
  var myString = document.referrer;
  var r        = myString.match(/cd=(.*?)&/);
  var rank     = parseInt(r[1]);
  var kw       = myString.match(/q=(.*?)&/);
  
  if (kw[1].length > 0) {
    var keyWord  = decodeURI(kw[1]);
  } else {
    keyWord = "(not provided)";
  }

  var p        = document.location.pathname;
  _gaq.push(['_trackEvent', 'RankTracker', keyWord, p, rank, true]);
}

</script>

</head>



	

    

    <body <?php body_class(); ?>>


<div data-role="page" class="wrapper">
	<div data-role="header" data-theme="c">

    <?php if(!is_home()){ ?>

    <a href="<?php echo get_option('home'); ?>" data-icon="home" data-iconpos="notext"  data-theme="<?php mobi_the_hb_data_theme(); ?>">Home</a>

    <?php } ?>

	  <!--header-->

  <div id="header"></div>

  <!--/header--> 

  

  <!--menu-->

  <div id="menu">

    <ul>

	  <li class="menu1"><a href="<?php the_category_url_by_name('Free Samples'); ?>" data-transition="turn">Free Samples</a></li>

      <li class="menu2" ><a href="<?php the_category_url_by_name('Coupons'); ?> " data-transition="turn">Coupons</a></li>

      <li class="menu3"><a href="<?php the_category_url_by_name('Sweepstakes'); ?>" data-transition="turn">Sweepstakes</a></li>

      <li class="menu4"><a href="<?php the_category_url_by_name('Video'); ?>" data-transition="turn">Video</a></li>

    </ul>

  </div>

  <!--/menu--> 





</div><!-- /header -->

		