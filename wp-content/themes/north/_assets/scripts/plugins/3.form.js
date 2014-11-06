/* Form validation
======================================= */

	$(document).ready(function() {

		// validate signup form on keyup and submit
		$("#registerform").validate({
			invalidHandler: function(form){
				$('.msg.error').removeClass('hidden');
			},
			submitHandler: function(form) {
				$('.msg.error').addClass('hidden');
				$('.msg.success').removeClass('hidden');
				$('#Submit').css('pointer-events','none').css('cursor','default').css('opacity','.3');
    			form.submit();
  			},
			rules: {
				fname: "required",
				sname: "required",
				mobile: {
					required: true,
				},
				email: {
					required: true,
					email: true
				},
				postcode: {
					required: true,
				},
				interestedin: {
					required: true,
				},
				category: {
					required: true,
				},
				heardfrom: {
					required: true,
				}
			}
/*
,			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address",
				agree: "Please accept our policy"
			}
*/
		});

	});
