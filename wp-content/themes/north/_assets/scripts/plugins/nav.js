/* Mobile nav
======================================= */


$(document).ready(function(){
	$('#mbl-navopen').click(function(){

		if($(this).hasClass('open')){
			$(this).removeClass('open');
			$('.mbl-nav').fadeOut();

			$('.main').removeClass('navopen');




		}else {
			$(this).addClass('open');
			$('.mbl-nav').fadeIn();		
			$('.main').addClass('navopen');

		}
	})
});