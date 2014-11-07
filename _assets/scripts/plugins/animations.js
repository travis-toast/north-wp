$(document).ready(function() {
	$( ".ttl-brandnew, .main-logo.shadow, .tagline, .footer-symbol, .copyright-disclaimer, .toast-credit" ).css( "display","none");
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
	setTimeout(
		function(){
			  $( ".copyright-disclaimer, .toast-credit" ).fadeIn(2000);
		},3500);		


});
