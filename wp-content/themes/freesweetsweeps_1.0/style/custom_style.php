

<style type="text/css" >
/* Main */
body {
	background: #ffffff;
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	color: #000;
	
}
.wrapper {
	width: 100%;
	margin: 0 auto;
}
/* Main ends */


/* Header */
#header {
	height: 55px;
	background: <?php mobi_the_header_bgcolor();?> url(<?php mobi_the_header_logo();?> ) no-repeat ;
}
/* Header ends */


/* Menu */
#menu {
	height: 54px;
	background: url(<?php mobi_the_menu_bgimg();?>) repeat-x;
	
}
#menu ul {
	width:320px;
	height:54px;
	margin:0 auto;
	padding-top:0px
	
}
#menu ul li {
	float: left;
	background: url(<?php mobi_the_menu_divider();?>) no-repeat right;
	padding: 0 1px 0 0;
}
#menu ul li:last-child {
	padding: 0;
	background: none;
}
#menu ul li a {
	display: block;
	height: 54px;
	font-size: 12px;
	font-weight: bold;
	color: #fff;
	text-decoration: none;
	text-transform: uppercase;
	text-indent: -9000px;
}
#menu ul li.menu1 a {
	width: 78px;
	background: url(<?php mobi_the_menu_item();?>) no-repeat 0 0;
}
#menu ul li.menu1 a:hover {
	background-position: 0 -54px;
}
#menu ul li.menu2 a {
	width: 78px;
	background: url(<?php mobi_the_menu_item();?>) no-repeat 0 -108px;
}
#menu ul li.menu2 a:hover {
	background-position: 0 -162px;
}
#menu ul li.menu3 a {
	width: 78px;
	background: url(<?php mobi_the_menu_item();?>) no-repeat 0 -216px;
}
#menu ul li.menu3 a:hover {
	background-position: 0 -270px;
}
#menu ul li.menu4 a {
	width: 78px;
	background: url(<?php mobi_the_menu_item();?>) no-repeat 0 -324px;
}
#menu ul li.menu4 a:hover {
	background-position: 0 -378px;
}
/* Menu ends */


/* Content */
.ad {
	
	
	z-index:1000;
	height: 50px;
	border-top: #e9e9e9 1px solid;
	border-bottom: #e9e9e9 1px solid;
	
}

.relative {
   position:relative; 
}

.fixed {
    position:fixed; top:0;  z-index:1002;
}
.fixedf {
    position:fixed;bottom: -2px; z-index:1002;
}
#content { width:100%}

.footer{height:55px}
.post {
	border: 0 none;
    font-family: 'droid sans',Arial,Verdana;
    font-style: inherit;
    font-weight: inherit;
    letter-spacing: normal;
    line-height: 1.2em;
    margin: 0;
    outline: 0 none;
    padding: 0;
    vertical-align: middle;
	padding: 12px 0px 12px 0px ;
	border-top: #ececec 1px solid;
	border-bottom: #ececec 1px solid;
	width: 100%;
	overflow: hidden;
}

#google_ads_bottom div{height:50px; width:320px; margin:0 auto }
#google_ads_top div{height:50px; width:320px; margin:0 auto }
.post:hover {
	background: url(<?php mobi_the_post_hoverimg(); ?>) repeat-y right;
}
.post img {
	float: left;
	border: #c8c8c8 1px solid;
	padding: 4px;
	margin: 0 14px 0 0;
}

.custom-img {
	float:left;
	border: #d7d7d7 1px solid !important;
	padding: 4px 4px 0px 4px !important;
	overflow:hidden;
}

.custom-p {      
	line-height: 1.2em !important;
	padding: 1.9em 0 0 2.7em !important;
	 
}
.custom-a {color:#0D3445 !important}

.custom-heading { 
font-family:BebasNeue;
font-size: 18px; 
font-weight: normal;
display: block; 
margin: .1em 0 0 180px !important;

 
white-space:normal }
h1 span.custom-heading { 

font-size: 1.8em; 
font-weight: bold;
display: block; 
margin: .6em 0 .6em 0em !important;

 
white-space:normal }





.title{font-size: 1.2em;
width:290px;
}
 .title a {text-decoration:none; color:#0D3445 !important} /*I think need to overrite it for data-theme="f"*/
 .meta{font-size:0.9em;color:#AEAEAE !important }
.post p {
	font-size:13px;
	color:#545454;
	line-height: normal;
	padding: 10px 0 0;
	text-indent:20px;
}
.post a {
	color: #000;
	text-decoration: none;
}
.post a:hover {
	text-decoration: underline;
}
/* Content ends */


/* Footer */
#footer {
}


/*Navigation*/
.pagenav{margin:15px auto; text-align:center}
.ppage{}
.npage{}


/* F STYLE FSB MAIN POST BUTTON
-----------------------------------------------------------------------------------------------------------*/
.ui-bar-f {
	border: 1px solid 		#333 /*{a-bar-border}*/;
	background: 			#111 /*{a-bar-background-color}*/;
	color: 					#fff /*{a-bar-color}*/;
	font-weight: bold;
	text-shadow: 0 /*{a-bar-shadow-x}*/ -1px /*{a-bar-shadow-y}*/ 1px /*{a-bar-shadow-radius}*/ #000 /*{a-bar-shadow-color}*/;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #3c3c3c /*{a-bar-background-start}*/), to( #111 /*{a-bar-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/);
}
.ui-bar-f,
.ui-bar-f input,
.ui-bar-f select,
.ui-bar-f textarea,
.ui-bar-f button {
	font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
.ui-bar-f .ui-link-inherit {
	color: #fff /*{a-bar-color}*/;
}
.ui-bar-f a.ui-link {
	color: #7cc4e7 /*{a-bar-link-color}*/;
	font-weight: bold;
}
.ui-bar-f a.ui-link:visited {
    color: #2489ce /*{a-bar-link-visited}*/;
}
.ui-bar-f a.ui-link:hover {
	color: #2489ce /*{a-bar-link-hover}*/;
}
.ui-bar-f a.ui-link:active {
	color: #2489ce /*{a-bar-link-active}*/;
}
.ui-body-f,
.ui-overlay-f {
	border: 1px solid 		#444 /*{a-body-border}*/;
	background: 			#222 /*{a-body-background-color}*/;
	color: 					#fff /*{a-body-color}*/;
	text-shadow: 0 /*{a-body-shadow-x}*/ 1px /*{a-body-shadow-y}*/ 1px /*{a-body-shadow-radius}*/ #111 /*{a-body-shadow-color}*/;
	font-weight: normal;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #444 /*{a-body-background-start}*/), to( #222 /*{a-body-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #444 /*{a-body-background-start}*/, #222 /*{a-body-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #444 /*{a-body-background-start}*/, #222 /*{a-body-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( #444 /*{a-body-background-start}*/, #222 /*{a-body-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( #444 /*{a-body-background-start}*/, #222 /*{a-body-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( #444 /*{a-body-background-start}*/, #222 /*{a-body-background-end}*/);	
}
.ui-overlay-f {
	background-image: none;
	border-width: 0;
}
.ui-body-f,
.ui-body-f input,
.ui-body-f select,
.ui-body-f textarea,
.ui-body-f button {
	font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
.ui-body-f .ui-link-inherit {
	color: 	#fff /*{a-body-color}*/;
}
.ui-body-f .ui-link {
	color: #2489ce /*{a-body-link-color}*/;
	font-weight: bold;
}
.ui-body-f .ui-link:visited {
    color: #2489ce /*{a-body-link-visited}*/;
}
.ui-body-f .ui-link:hover {
	color: #2489ce /*{a-body-link-hover}*/;
}
.ui-body-f .ui-link:active {
	color: #2489ce /*{a-body-link-active}*/;
}
/*mobi_the_bpb_up_bg1*/
.ui-btn-up-f {
	border: 1px solid 		<?php mobi_the_bpb_up_border(); ?> /*{a-bup-border}*/;
	background: <?php mobi_the_bpb_up_bg2(); ?> 	 /*{a-bup-background-color}; */;
	font-weight: bold;
	color: 					<?php mobi_the_bpb_up_color(); ?>/*{a-bup-color}*/;
	text-shadow: 0 /*{a-bup-shadow-x}*/ 1px /*{a-bup-shadow-y}*/ 1px /*{a-bup-shadow-radius}*/ <?php mobi_the_bpb_up_border(); ?> /*{a-bup-shadow-color}*/;
	box-shadow: 0 0 3px <?php mobi_get_bpb_up_shadow(); ?> inset;
	background-image: -webkit-gradient(linear, left top, left bottom, from( <?php mobi_the_bpb_up_bg1(); ?> /*{a-bup-background-start}*/), to( <?php mobi_the_bpb_up_bg2(); ?> /*{a-bup-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( <?php mobi_the_bpb_up_bg1(); ?> /*{a-bup-background-start}*/, <?php mobi_the_bpb_up_bg2(); ?> /*{a-bup-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( <?php mobi_the_bpb_up_bg1(); ?> /*{a-bup-background-start}*/, <?php mobi_the_bpb_up_bg2(); ?> /*{a-bup-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( <?php mobi_the_bpb_up_bg1(); ?> /*{a-bup-background-start}*/, <?php mobi_the_bpb_up_bg2(); ?> /*{a-bup-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( <?php mobi_the_bpb_up_bg1(); ?> /*{a-bup-background-start}*/, <?php mobi_the_bpb_up_bg2(); ?> /*{a-bup-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( <?php mobi_the_bpb_up_bg1(); ?> /*{a-bup-background-start}*/, <?php mobi_the_bpb_up_bg2(); ?> /*{a-bup-background-end}*/);

}
.ui-btn-up-f:visited,
.ui-btn-up-f a.ui-link-inherit {
	color: 					<?php mobi_the_bpb_up_color(); ?> /*{a-bup-color}*/;
}
.ui-btn-hover-f {
	border: 1px solid 		<?php mobi_the_bpb_hover_border(); ?> /*{a-bhover-border}*/;
	background: 			<?php mobi_the_bpb_hover_bg2(); ?>  /*{a-bhover-background-color}*/;
	font-weight: bold;
	color: 					<?php mobi_the_bpb_hover_color(); ?> /*{a-bhover-color}*/;
	text-shadow: 0 /*{a-bhover-shadow-x}*/ 1px /*{a-bhover-shadow-y}*/ 1px /*{a-bhover-shadow-radius}*/ <?php mobi_the_bpb_hover_border(); ?> /*{a-bhover-shadow-color}*/;
	box-shadow: 0 0 3px <?php mobi_get_bpb_hover_shadow(); ?> inset;
	background-image: -webkit-gradient(linear, left top, left bottom, from( <?php mobi_the_bpb_hover_bg1(); ?> /*{a-bhover-background-start}*/), to( #EF7F1B /*{a-bhover-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( <?php mobi_the_bpb_hover_bg1(); ?> /*{a-bhover-background-start}*/, <?php mobi_the_bpb_hover_bg2(); ?> /*{a-bhover-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( <?php mobi_the_bpb_hover_bg1(); ?> /*{a-bhover-background-start}*/, <?php mobi_the_bpb_hover_bg2(); ?> /*{a-bhover-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( <?php mobi_the_bpb_hover_bg1(); ?> /*{a-bhover-background-start}*/, <?php mobi_the_bpb_hover_bg2(); ?> /*{a-bhover-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( <?php mobi_the_bpb_hover_bg1(); ?> /*{a-bhover-background-start}*/, <?php mobi_the_bpb_hover_bg2(); ?> /*{a-bhover-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( <?php mobi_the_bpb_hover_bg1(); ?> /*{a-bhover-background-start}*/, <?php mobi_the_bpb_hover_bg2(); ?> /*{a-bhover-background-end}*/);
}
.ui-btn-hover-f:visited,
.ui-btn-hover-f:hover,
.ui-btn-hover-f a.ui-link-inherit {
	color: 					<?php mobi_the_bpb_hover_color(); ?> /*{a-bhover-color}*/;
}
.ui-btn-down-f {
	
	/*
	background: -moz-linear-gradient(center top , #E98329 0px, #E66E03 100%) repeat scroll 0 0 transparent;
    border: 1px solid #D43D01;
    box-shadow: 0 0 3px #D43D01 inset;
    text-shadow: 0 -1px 1px #C47128;
	*/
	border: 1px solid 		<?php mobi_the_bpb_down_border(); ?> /*{a-bdown-border}*/;
	background: 			<?php mobi_the_bpb_down_bg2(); ?> /*{a-bdown-background-color}*/;
	font-weight: bold;
	color: 					<?php mobi_the_bpb_down_color(); ?> /*{a-bdown-color}*/;
	text-shadow: 0 /*{a-bdown-shadow-x}*/ 1px /*{a-bdown-shadow-y}*/ 1px /*{a-bdown-shadow-radius}*/ <?php mobi_the_bpb_down_border(); ?> /*{a-bdown-shadow-color}*/;
	box-shadow: 0 0 3px <?php mobi_get_bpb_down_shadow(); ?> inset;
	background-image: -webkit-gradient(linear, left top, left bottom, from( <?php mobi_the_bpb_down_bg1(); ?> /*{a-bdown-background-start}*/), to( <?php mobi_the_bpb_down_bg2(); ?> /*{a-bdown-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( <?php mobi_the_bpb_down_bg1(); ?> /*{a-bdown-background-start}*/, <?php mobi_the_bpb_down_bg2(); ?> /*{a-bdown-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( <?php mobi_the_bpb_down_bg1(); ?> /*{a-bdown-background-start}*/, <?php mobi_the_bpb_down_bg2(); ?> /*{a-bdown-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( <?php mobi_the_bpb_down_bg1(); ?> /*{a-bdown-background-start}*/, <?php mobi_the_bpb_down_bg2(); ?> /*{a-bdown-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( <?php mobi_the_bpb_down_bg1(); ?> /*{a-bdown-background-start}*/, <?php mobi_the_bpb_down_bg2(); ?> /*{a-bdown-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( <?php mobi_the_bpb_down_bg1(); ?> /*{a-bdown-background-start}*/, <?php mobi_the_bpb_down_bg2(); ?> /*{a-bdown-background-end}*/);
}
.ui-btn-down-f:visited,
.ui-btn-down-f:hover,
.ui-btn-down-f a.ui-link-inherit {
	color: 					<?php mobi_the_bpb_down_color(); ?>  /*{a-bdown-color}*/;
}
.ui-btn-up-f,
.ui-btn-hover-f,
.ui-btn-down-f {
	font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
	text-decoration: none;
}
/* Structure */

/* G STYLE Header Home and other BUTTONS
-----------------------------------------------------------------------------------------------------------*/
.ui-bar-g {
	border: 1px solid 		#333 /*{a-bar-border}*/;
	background: 			#111 /*{a-bar-background-color}*/;
	color: 					#fff /*{a-bar-color}*/;
	font-weight: bold;
	text-shadow: 0 /*{a-bar-shadow-x}*/ -1px /*{a-bar-shadow-y}*/ 1px /*{a-bar-shadow-radius}*/ #000 /*{a-bar-shadow-color}*/;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #3c3c3c /*{a-bar-background-start}*/), to( #111 /*{a-bar-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/);
}
.ui-bar-g,
.ui-bar-g input,
.ui-bar-g select,
.ui-bar-g textarea,
.ui-bar-g button {
	font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
.ui-bar-g .ui-link-inherit {
	color: #fff /*{a-bar-color}*/;
}
.ui-bar-g a.ui-link {
	color: #7cc4e7 /*{a-bar-link-color}*/;
	font-weight: bold;
}
.ui-bar-g a.ui-link:visited {
    color: #2489ce /*{a-bar-link-visited}*/;
}
.ui-bar-g a.ui-link:hover {
	color: #2489ce /*{a-bar-link-hover}*/;
}
.ui-bar-g a.ui-link:active {
	color: #2489ce /*{a-bar-link-active}*/;
}
.ui-body-g,
.ui-overlay-g {
	border: 1px solid 		#444 /*{a-body-border}*/;
	background: 			#222 /*{a-body-background-color}*/;
	color: 					#fff /*{a-body-color}*/;
	text-shadow: 0 /*{a-body-shadow-x}*/ 1px /*{a-body-shadow-y}*/ 1px /*{a-body-shadow-radius}*/ #111 /*{a-body-shadow-color}*/;
	font-weight: normal;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #444 /*{a-body-background-start}*/), to( #222 /*{a-body-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #444 /*{a-body-background-start}*/, #222 /*{a-body-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #444 /*{a-body-background-start}*/, #222 /*{a-body-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( #444 /*{a-body-background-start}*/, #222 /*{a-body-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( #444 /*{a-body-background-start}*/, #222 /*{a-body-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( #444 /*{a-body-background-start}*/, #222 /*{a-body-background-end}*/);	
}
.ui-overlay-g {
	background-image: none;
	border-width: 0;
}
.ui-body-g,
.ui-body-g input,
.ui-body-g select,
.ui-body-g textarea,
.ui-body-g button {
	font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
.ui-body-g .ui-link-inherit {
	color: 	#fff /*{a-body-color}*/;
}
.ui-body-g .ui-link {
	color: #2489ce /*{a-body-link-color}*/;
	font-weight: bold;
}
.ui-body-g .ui-link:visited {
    color: #2489ce /*{a-body-link-visited}*/;
}
.ui-body-g .ui-link:hover {
	color: #2489ce /*{a-body-link-hover}*/;
}
.ui-body-g .ui-link:active {
	color: #2489ce /*{a-body-link-active}*/;
}
.ui-btn-up-g {
	border: 1px solid 		<?php mobi_the_hb_up_border(); ?> /*{a-bup-border}*/;
	background: <?php mobi_the_hb_up_bg2(); ?> 	 /*{a-bup-background-color}; */;
	font-weight: bold;
	color: 					<?php mobi_the_hb_up_color(); ?>/*{a-bup-color}*/;
	text-shadow: 0 /*{a-bup-shadow-x}*/ 1px /*{a-bup-shadow-y}*/ 1px /*{a-bup-shadow-radius}*/ <?php mobi_the_hb_up_border(); ?> /*{a-bup-shadow-color}*/;
	box-shadow: 0 0 3px <?php mobi_get_hb_up_shadow(); ?> inset;
	background-image: -webkit-gradient(linear, left top, left bottom, from( <?php mobi_the_hb_up_bg1(); ?> /*{a-bup-background-start}*/), to( <?php mobi_the_hb_up_bg2(); ?> /*{a-bup-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( <?php mobi_the_hb_up_bg1(); ?> /*{a-bup-background-start}*/, <?php mobi_the_hb_up_bg2(); ?> /*{a-bup-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( <?php mobi_the_hb_up_bg1(); ?> /*{a-bup-background-start}*/, <?php mobi_the_hb_up_bg2(); ?> /*{a-bup-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( <?php mobi_the_hb_up_bg1(); ?> /*{a-bup-background-start}*/, <?php mobi_the_hb_up_bg2(); ?> /*{a-bup-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( <?php mobi_the_hb_up_bg1(); ?> /*{a-bup-background-start}*/, <?php mobi_the_hb_up_bg2(); ?> /*{a-bup-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( <?php mobi_the_hb_up_bg1(); ?> /*{a-bup-background-start}*/, <?php mobi_the_hb_up_bg2(); ?> /*{a-bup-background-end}*/);

}
.ui-btn-up-g:visited,
.ui-btn-up-g a.ui-link-inherit {
	color: 					<?php mobi_the_hb_up_color(); ?> /*{a-bup-color}*/;
}
.ui-btn-hover-g {
	border: 1px solid 		<?php mobi_the_hb_hover_border(); ?> /*{a-bhover-border}*/;
	background: 			<?php mobi_the_hb_hover_bg2(); ?>  /*{a-bhover-background-color}*/;
	font-weight: bold;
	color: 					<?php mobi_the_hb_hover_color(); ?> /*{a-bhover-color}*/;
	text-shadow: 0 /*{a-bhover-shadow-x}*/ 1px /*{a-bhover-shadow-y}*/ 1px /*{a-bhover-shadow-radius}*/ <?php mobi_the_hb_hover_border(); ?> /*{a-bhover-shadow-color}*/;
	box-shadow: 0 0 3px <?php mobi_get_hb_hover_shadow(); ?> inset;
	background-image: -webkit-gradient(linear, left top, left bottom, from( <?php mobi_the_hb_hover_bg1(); ?> /*{a-bhover-background-start}*/), to( #EF7F1B /*{a-bhover-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( <?php mobi_the_hb_hover_bg1(); ?> /*{a-bhover-background-start}*/, <?php mobi_the_hb_hover_bg2(); ?> /*{a-bhover-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( <?php mobi_the_hb_hover_bg1(); ?> /*{a-bhover-background-start}*/, <?php mobi_the_hb_hover_bg2(); ?> /*{a-bhover-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( <?php mobi_the_hb_hover_bg1(); ?> /*{a-bhover-background-start}*/, <?php mobi_the_hb_hover_bg2(); ?> /*{a-bhover-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( <?php mobi_the_hb_hover_bg1(); ?> /*{a-bhover-background-start}*/, <?php mobi_the_hb_hover_bg2(); ?> /*{a-bhover-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( <?php mobi_the_hb_hover_bg1(); ?> /*{a-bhover-background-start}*/, <?php mobi_the_hb_hover_bg2(); ?> /*{a-bhover-background-end}*/);
}
.ui-btn-hover-g:visited,
.ui-btn-hover-g:hover,
.ui-btn-hover-g a.ui-link-inherit {
	color: 					<?php mobi_the_hb_hover_color(); ?> /*{a-bhover-color}*/;
}
.ui-btn-down-g {
	
	/*
	background: -moz-linear-gradient(center top , #E98329 0px, #E66E03 100%) repeat scroll 0 0 transparent;
    border: 1px solid #D43D01;
    box-shadow: 0 0 3px #D43D01 inset;
    text-shadow: 0 -1px 1px #C47128;
	*/
	border: 1px solid 		<?php mobi_the_hb_down_border(); ?> /*{a-bdown-border}*/;
	background: 			<?php mobi_the_hb_down_bg2(); ?> /*{a-bdown-background-color}*/;
	font-weight: bold;
	color: 					<?php mobi_the_hb_down_color(); ?> /*{a-bdown-color}*/;
	text-shadow: 0 /*{a-bdown-shadow-x}*/ 1px /*{a-bdown-shadow-y}*/ 1px /*{a-bdown-shadow-radius}*/ <?php mobi_the_hb_down_border(); ?> /*{a-bdown-shadow-color}*/;
	box-shadow: 0 0 3px <?php mobi_get_hb_down_shadow(); ?> inset;
	background-image: -webkit-gradient(linear, left top, left bottom, from( <?php mobi_the_hb_down_bg1(); ?> /*{a-bdown-background-start}*/), to( <?php mobi_the_hb_down_bg2(); ?> /*{a-bdown-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( <?php mobi_the_hb_down_bg1(); ?> /*{a-bdown-background-start}*/, <?php mobi_the_hb_down_bg2(); ?> /*{a-bdown-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( <?php mobi_the_hb_down_bg1(); ?> /*{a-bdown-background-start}*/, <?php mobi_the_hb_down_bg2(); ?> /*{a-bdown-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( <?php mobi_the_hb_down_bg1(); ?> /*{a-bdown-background-start}*/, <?php mobi_the_hb_down_bg2(); ?> /*{a-bdown-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( <?php mobi_the_hb_down_bg1(); ?> /*{a-bdown-background-start}*/, <?php mobi_the_hb_down_bg2(); ?> /*{a-bdown-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( <?php mobi_the_hb_down_bg1(); ?> /*{a-bdown-background-start}*/, <?php mobi_the_hb_down_bg2(); ?> /*{a-bdown-background-end}*/);
}
.ui-btn-down-g:visited,
.ui-btn-down-g:hover,
.ui-btn-down-g a.ui-link-inherit {
	color: 					<?php mobi_the_hb_down_color(); ?>  /*{a-bdown-color}*/;
}
.ui-btn-up-g,
.ui-btn-hover-g,
.ui-btn-down-g {
	font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
	text-decoration: none;
}
/* Structure */
/* links within "buttons" 
-----------------------------------------------------------------------------------------------------------*/


</style>
