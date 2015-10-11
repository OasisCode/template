jQuery(document).ready(function( $ ) {

	//Function for learn more button
	$(function(){

		//Cache header selectors
		var lastId,
		    topMenu = $("#masthead"),
		    topMenuHeight = topMenu.outerHeight(),
		    // All list items
		    menuItems = topMenu.find("a"),
		    // Anchors corresponding to menu items
		    scrollItems = menuItems.map(function(){
		      var item = $($(this).attr("href"));
		      if (item.length) { return item; }
		    });

		//the smooth transition for landing page and footer buttons
		$('.learn-more, .scroll-to-top').click(function(e){
		  var href = $(this).attr("href"),
		      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
		  $('html, body').stop().animate({ 
		      scrollTop: offsetTop
		  }, 500);
		  e.preventDefault();
		});

	// FUNCTION FOR DROPDOWN NAVBAR MENU

		$('.sub-menu').addClass('dropdown-menu');
		$('.menu-item-has-children').addClass('dropdown');
		$('.menu-item-has-children').children('a').addClass('dropdown-toggle');
		$('.menu-item-has-children').children('a').attr( "data-toggle", "dropdown" );

	//TURN SVG IMAGES INTO INLINE HTML (so it can be editted with CSS)

		$('img.svg').each(function(){

	        var $img = jQuery(this);
	        var imgID = $img.attr('id');
	        var imgClass = $img.attr('class');
	        var imgURL = $img.attr('src');

	        jQuery.get(imgURL, function(data) {
	            // Get the SVG tag, ignore the rest
	            var $svg = jQuery(data).find('svg');

	            // Add replaced image's ID to the new SVG
	            if(typeof imgID !== 'undefined') {
	                $svg = $svg.attr('id', imgID);
	            }
	            // Add replaced image's classes to the new SVG
	            if(typeof imgClass !== 'undefined') {
	                $svg = $svg.attr('class', imgClass+' replaced-svg');
	            }

	            // Remove any invalid XML tags as per http://validator.w3.org
	            $svg = $svg.removeAttr('xmlns:a');

	            // Replace image with new SVG
	            $img.replaceWith($svg);

	        }, 'xml');

	    });

	//------Navigation Functions (sliding bar)------

		// Bind click handler to menu items
		// so we can get a fancy scroll animation
		menuItems.click(function(e){

		  var href = $(this).attr("href"),
		      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
		  $('html, body').stop().animate({ 
		      scrollTop: offsetTop
		  }, 500);

		  //Close mobile menu once item is clicked
		  if ($(window).width() < 768) 
		  	if ($(this).attr("href")!=='#')
			    $('.navbar-toggle').click();

		  e.preventDefault();
		});

		// Bind to scroll
		$(window).scroll(function(){
		   // Get container scroll position
		   var fromTop = $(this).scrollTop()+topMenuHeight;
		   
		   // Get id of current scroll item
		   var cur = scrollItems.map(function(){
		     if ($(this).offset().top < fromTop)
		       return this;
		   });

		   //Navbar appears just when you enter service section
		   if(cur.length>0)
		   		$("#masthead").addClass("fix-head");

		   else
		   		$("#masthead").removeClass("fix-head");
		                   
		}); //end of .scroll() function

		//Edit the location of the response message on contact form
		$(document).on('submitResponse.myFunction', function(e, response){

		    // Check for errors.
	       $('#ninja_forms_form_1_response_msg')
	       	.css({
	       		'position':'absolute', 
	       		'bottom':'10px'
	       	});

	       	$('#ninja_forms_form_1_response_msg p')
	       	.css({
	       		'color':'#139e83',
	       		'font-weight':'700',
	       		'letter-spacing':'1px'
	       	});

	       	if ($(window).width() < 768) {
				$('#ninja_forms_form_1_response_msg p')
		       	.css({
		       		'margin-bottom':'-50px'
		       	});

			}

		    return true;
		});

	}); // end of $function

}); // end of document ready