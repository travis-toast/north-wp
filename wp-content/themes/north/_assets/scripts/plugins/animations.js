$(document).ready(function() {
	$( ".ttl-brandnew, .main-logo.shadow, .tagline, .footer-symbol" ).css( "display","none");
});


$(window).load(function() {
	setTimeout(
		function(){
			  $( ".ttl-brandnew" ).fadeIn(800)
		},2000);
	setTimeout(
		function(){
			  $( ".main-logo.shadow" ).fadeIn(2000);
		},500);		
	setTimeout(
		function(){
			  $( ".tagline, .footer-symbol" ).fadeIn(2000);
		},2000);		

});


$(document).ready(function() {
	$('.enter-site').click(function(){
		$('.pageheader').addClass('fadeinfromside');

		$('.hp-row').addClass('fadeinfromside');
	});
});