jQuery(document).ready(function( $ ) {

	

	// FUNCTION TO STICK HEADER TO TOP ONCE PAGE SCROLLED
	$(function() {
		$(window).scroll(function() {

	    var scroll = $(window).scrollTop();
	    var headerHeight = $("#masthead").outerHeight()*0.5;

	    if (scroll >= headerHeight)
	        $("#masthead").addClass("fix-head");

	   	else 
	   		$("#masthead").removeClass("fix-head");
		});
	});

	// FUNCTION TO STICK NAVBAR TO TOP IF NAVBAR IS BELOW A HEADER OR IMAGE
	// jQuery(document).ready(function($) {
	// 	$('#nav').affix({
	// 		offset:$('.top-banner').height() // .top-banner is name of header or image class
	// 	});
	// });

	// SCROLL ONCE NAV LINK IS CLICKED (ITEMS MUST HAVE CLASS NAME = 'page-scroll')
	$(function () {
	  $('a[href*=#]:not([href=#])').click(function() {
	  	var nav_height = $('.navbar').height() - 1; //GETS HEIGHT OF NAVBAR

	  	if ($('.navbar > div > div').hasClass('in')) {
	  		nav_height -= $('.in').height() + 1;
	  	}
	  	
	    if ($(this).hasClass('page-scroll')) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({

	          scrollTop: target.offset().top - nav_height
	        }, 500);
	        return false;
	      }
	    }
	  });
	});


	// FUNCTION FOR DROPDOWN NAVBAR MENU
	$(function(){
		$('.sub-menu').addClass('dropdown-menu');
		$('.menu-item-has-children').addClass('dropdown');
		$('.menu-item-has-children').children('a').addClass('dropdown-toggle');
		$('.menu-item-has-children').children('a').attr( "data-toggle", "dropdown" );
	});



});