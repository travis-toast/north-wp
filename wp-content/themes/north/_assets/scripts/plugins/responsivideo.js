var responsiveVideo = function(){
	var newWidth = $('.video-wrap').width();
	var newHeight = newWidth/1.79;
	
	$('.video-js, .video-js .vjs-tech, .vjs-poster').css('width',newWidth).css('height',newHeight);	
}


$(window).resize(responsiveVideo);
$(window).load(responsiveVideo);