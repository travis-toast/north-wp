/* Preloader
======================================= */

function preloadFunc (targetItem,loadPointOffset){

	$(document).ready(function(){	
		$(targetItem).addClass('unloaded');	
		console.log("loader");
	});

	$(window).scroll(function() {
		$(targetItem).each(function(){
		
			var topOfWindow = $(window).scrollTop();
			var heightOfWindow = $(window).height();
			var bottomOfWindow = topOfWindow+heightOfWindow;
			
			var imagePos = $(this).offset().top;
	
		

			if (imagePos < bottomOfWindow) {
				$(this).removeClass("unloaded");

			}
			
		});
		
	});
}

preloadFunc ('.footerlinks',100);