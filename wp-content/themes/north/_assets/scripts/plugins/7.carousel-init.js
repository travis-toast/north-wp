$(document).ready(function() {
	$('.carousel').carousel({
	  interval: 5000
	})       

});





/* Adjust height
======================================= */

var resizeSlide = function(){
	var wh = $(window).height();
	var ww = $(window).width();

	if(ww < 480){
		var slideH = Math.round(wh/3);
		$('.page-slider .page-slide, .page-slider').css('height',slideH).css('max-height','480px');	
		
	}else {
		var slideH = Math.round(wh/2);
		$('.page-slider .page-slide, .page-slider').css('height',slideH).css('max-height','480px');	
	}

};

$(window).resize(resizeSlide);
$(document).ready(resizeSlide);