/* Sticky nav
======================================= */

//pages
$(document).ready(function(){
	$(window).scroll(
		function() {
		    if(($(this).scrollTop() > 0)) {
				$('body.page .top-header').not('body.home .top-header').addClass("sticky");

		    }else {
				$('body.page .top-header').not('body.home .top-header').removeClass("sticky");
			}
		}
	);
});



//home
$(document).ready(function(){
	var breakpoint = $('.spl-cont').height() + 20;

	$(window).scroll(

		function() {
		    if(($(this).scrollTop() > breakpoint)) {
				$('body.home .top-header').addClass("sticky");
				$('body.home').addClass("stickyon");


		    }else {
				$('body.home .top-header').removeClass("sticky");
				$('body.home').removeClass("stickyon");

			}
		}
	);
});

