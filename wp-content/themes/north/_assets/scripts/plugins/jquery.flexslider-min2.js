  $(window).load(function() {
    $('.page-slider').flexslider({
		animation: "fade",              //String: Select your animation type, "fade" or "slide"
		easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
		direction: "vertical",        //String: Select the sliding direction, "horizontal" or "vertical"
	    directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false)
		slideshowSpeed: 3500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 1000            //Integer: Set the speed of animations, in milliseconds
    });
    $('.apartment-slider').flexslider({
		animation: "fade",              //String: Select your animation type, "fade" or "slide"
		easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
		direction: "vertical",        //String: Select the sliding direction, "horizontal" or "vertical"
	    directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false)
		slideshowSpeed: 3500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 1000,            //Integer: Set the speed of animations, in milliseconds
	    directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
		prevText: "",           //String: Set the text for the "previous" directionNav item
		nextText: ""               //String: Set the text for the "next" directionNav item

    });
    $('.home-slider').flexslider({
		animation: "fade",              //String: Select your animation type, "fade" or "slide"
		easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
		direction: "vertical",        //String: Select the sliding direction, "horizontal" or "vertical"
	    directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false)
		slideshowSpeed: 3500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 1000            //Integer: Set the speed of animations, in milliseconds
    });





  });

