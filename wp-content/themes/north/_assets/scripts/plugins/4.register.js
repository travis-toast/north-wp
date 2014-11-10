/* Open and close register
======================================= */

/*
$(document).ready(function(){
	var openbtn = $('.open-regis, a[title="register"');
	var closebtn = document.getElementById('close-regis');
	var theWrapper = document.getElementById('main-cont');
	
	$(openbtn).click(function(e){
		e.preventDefault();
		console.log("open");
		$(theWrapper).addClass('open');
	});

	$(closebtn).click(function(e){
		e.preventDefault();
		console.log("close");
		$(theWrapper).removeClass('open');
	});
});
*/






$(document).ready(function(){
	var openbtn = $('.open-regis, a[title="register"]');
	var closebtn = document.getElementById('close-regis');
	var theWrapper = document.getElementById('main-cont');
	
	$(openbtn).click(function(){
		console.log("open");
		$(theWrapper).addClass('open');
		
		setTimeout(function(){
			$('.spl-cont, .body').addClass("hidden")
		}, 500);
	});

	$(closebtn).click(function(){
		console.log("close");
		$(theWrapper).removeClass('open');

		$('.spl-cont, .body').removeClass("hidden");

	});
});






/* Form submission
======================================= */

function submitform() {
	document.getElementById("registerform").action = "http://residentialenquiries.savills.com.au/enquiry.aspx?propertyid=8018&fname="+document.getElementById("fname").value+"&sname="+document.getElementById("sname").value+"&mobile="+document.getElementById("mobile").value+"&email="+document.getElementById("email").value+"&postcode="+document.getElementById("postcode").value+"&interestedin="+document.getElementById("interestedin").value+"&category="+document.getElementById("category").value+"&heardfrom="+document.getElementById("heardfrom").value+"&redirect=http://northlanecove.com.au/thanks.html&comments=";
  return true;
}





