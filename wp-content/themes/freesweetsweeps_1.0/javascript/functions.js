$(document).bind("mobileinit", function(){
  $.extend(  $.mobile , {
    ignoreContentEnabled: false,
	ajaxEnabled:false
  });
  $.mobile.ajaxEnabled=false;
  $.mobile.orientationChangeEnabled = false
  
});


$(document).ready(function(){
changePadding(); 

$(window).bind( 'orientationchange', function(e){
if ($.event.special.orientationchange.orientation() == "portrait") {
changePadding(); 

} 

else {
changePadding(); 

}
});
	
// Drop Down Menu
$(" #menu ul li ul ").css({display: "none"}); // Opera Fix
$(" #menu li").hover(function(){
  $(this).addClass("activeLink");
  $(this).find('ul:first').css({visibility: "visible",display: "none"}).fadeIn(300);
  },function(){
  $(this).removeClass("activeLink");
  $(this).find('ul:first').fadeOut(300);
  });

// Field Label
    $('input[type="text"]').focus(function() {
        if (this.value == this.defaultValue){
            this.value = '';
        }
        if(this.value != this.defaultValue){
            this.select();
        }
    });
    $('input[type="text"]').blur(function() {
        if (this.value == ''){
            this.value = this.defaultValue;
        }
    });
	$('textarea').focus(function() {
        if (this.value == this.defaultValue){
            this.value = '';
        }
        if(this.value != this.defaultValue){
            this.select();
        }
    });
    $('textarea').blur(function() {
        if (this.value == ''){
            this.value = this.defaultValue;
        }
    });
	
//var mediaTop = $('div#sharebox-wrapper').offset().top;
//var media = $('div#sharebox-wrapper');
//mediaTop=mediaTop+110;

$(document).scroll( function() {
   var scrollTop = $(document).scrollTop();

   //fix/unfix as necessary
  // if (mediaTop < scrollTop) {
	  // $(media).removeClass('related');
      // $(media).addClass('fixed');
	  // $("#sharebox-wrapper").css('top', "0px");
	  
  // }
  // else if(mediaTop == scrollTop){
	//   $(media).fadeOut(500);
  // }
   //else {
	 //  $(media).fadeIn(500);
      // $(media).removeClass('fixed');
	    
   //}
});
$(window).load(function(){
 //  var ads_top = $("#adsense_top").find("iframe");
 //  var ads_bottom1 = $("#adsense_bottom").find("iframe");
//  var ads_bottom = $("#adsense_bottom").find("iframe");
   //This is where the ads will show when the page is first loaded
 // $(ads_top).appendTo("#google_ads_top div");
 //$(ads_bottom).appendTo("#google_ads_bottom div");
 // $("#adsense_top").remove();
  //$("#adsense_bottom").remove();
  
   

   $('div').live('pagehide',function(event, ui){
									
      //Display the ad
	  //alert(ads_top);
	  //printObject(ads_top);
	// $(ads_top).appendTo("#google_ads_top div");
   //$(ads_bottom).appendTo("#google_ads_bottom div");
	 
	 
	 
	 
var mediaTop = $('div#sharebox-wrapper').offset().top;
var media = $('div#sharebox-wrapper');
mediaTop=mediaTop+110;
$(document).scroll( function() {
   var scrollTop = $(document).scrollTop();

   //fix/unfix as necessary
   if (mediaTop < scrollTop) {
	   $(media).removeClass('related');
       $(media).addClass('fixed');
	   $("#sharebox-wrapper").css('top', "0px");
	  
   }
   else if(mediaTop == scrollTop){
	   $(media).fadeOut(500);
   }
   else {
	   $(media).fadeIn(500);
       $(media).removeClass('fixed');
	    
   }
}); 
	 
	 
	 
   });



});



})


function printObject(o) {
  var out = '';
  for (var p in o) {
    out += p + ': ' + o[p] + '\n';
  }
  document.write(out);
}


function changePadding(){
	
windowwidth=$(window).width(); 

if(windowwidth>=320){
paddingleft=(windowwidth-320)/2;
$('#google_ads_bottom').css("padding-left",paddingleft+"px");
$('#google_ads_li').css("padding-left",paddingleft+"px");





}
}
