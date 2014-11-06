/* Scroll to
======================================= */

$('a.scrollto, a[title="register"]').click(function(e){
	var link = $(this).attr('href');
	var firstCharacter = link.charAt(0);
	var destination = link.substr(1);

	if(firstCharacter === "#"){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $(link).offset().top
		}, 500);
	}	
});
