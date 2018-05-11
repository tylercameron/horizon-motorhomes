jQuery(document).ready(function($) {

	/** Search Show Hide **/

	$('#ajax_search').hide();
    $("#search_btn").click(function(){
        $("#ajax_search").toggle();
    });

	// ---------------------------------------Sticky Header
	(function () {

    // navigation always shown on mobiles and tablets, for larger screens hides on scroll down
    var previousScroll = 0;
    $(window).scroll(function(){
        // always sticky
        if (window.matchMedia("(max-width: 991px)").matches) {
            if($(document).scrollTop()>100 && $('#masthead').hasClass('large') ){
                $("#masthead").removeClass("large").addClass("small");
            } else if($(document).scrollTop()<=100 && $('#masthead').hasClass('small') ){
                $("#masthead").removeClass("small").addClass("large");
            }

        } else {
            // show / hide based on scroll direction
            var currentScroll = $(this).scrollTop();
           if($(document).scrollTop()>100){
               if (currentScroll > previousScroll){
                    // down
                    $("#masthead").removeClass("large small").addClass("invisible");
               } else {
                    // up
                    $("#masthead").removeClass("large invisible").addClass("small");
               }
           } else{
               $("#masthead").removeClass("small invisible").addClass("large");
           }
           previousScroll = currentScroll;
       }
    });

    // give header class based on if subnav exists
    if($('#menu-range-submenu').length > 0) {
        $('#masthead').addClass('submenu-exists');
    }
}());

	// ---------------------------------------Back to top
	jQuery(document).ready(function() {
    var offset = 220;
    var duration = 300;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});

	// ------------------------------------Modernizr Touch
	$(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });



// -----------------------------------Preloader
	$(window).load(function() {
    $('body').addClass('loaded');
});

	/** --------------------Site Origin--------------------- **/

$('.starter-full-width-class .siteorigin-panels-stretch').each(function(){
	$(this).find('.panel-grid-cell').wrapAll( "<div class='clearfix' style='max-width:1170px;margin:0 auto' />");
});

	// Sticky Nav
	$(document).on("scroll",function(){
    if($(document).scrollTop()>100){
        $("#masthead").removeClass("large").addClass("small");
    } else{
        $("#masthead").removeClass("small").addClass("large");
    }
});

	/** ---------------------Collapsible Elements-------------------- **/

	$('.toggle img, .toggle .widget-title').on('click', function() {
		var el_class = $.grep($(this).closest('.toggle').attr('class').split(" "), function(v, i){
       		return v.indexOf('thumb') === 0;
   		}).join();

		$('.collapsible').not('.' + el_class).hide();
		$('.collapsible.' + el_class).slideToggle();
	});
	$('.collapsible').hide(); // fold collapsibles by default

	// bind closing on button
	$('.collapsible').on('click', '.collapse-tab', function() {
		$(this).closest('.collapsible').slideUp();

		// get trigger thumb and scroll it top of viewport
		var trigger_class = $.grep($(this).closest('.collapsible').attr('class').split(" "), function(v, i){
       		return v.indexOf('thumb') === 0;
   		}).join();
		console.log($('.toggle.' + trigger_class).closest('.toggle-thumbs').offset().top - $('#masthead').outerHeight() - 20);
		$('html, body').animate({
		   scrollTop: $('.toggle.' + trigger_class).closest('.toggle-thumbs').offset().top - $('#masthead').outerHeight() - 20
		}, 400);
	});
});
