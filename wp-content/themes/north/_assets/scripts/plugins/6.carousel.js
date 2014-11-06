/* Carousel
======================================= 


$(document).ready(function(){

	//this is an array!
	var slides = $('.spl-carousel > li');
	
	
	
	//convert the array to an object
	function arrayToObject(array) {

		var newObject = {};
		
		for (var i = 0; i < array.length; ++i)
			if (array[i] !== undefined) newObject[i] = array[i];
		return newObject;
	}
		
	slideObjects = arrayToObject(slides);
	
	

	//the function the makes the loop
	function updateOrder (direction){
		var first = base;
	//	var second = first - 1;

		if (direction === "forward") {
			base++;			
		} else {
			base--;			
		}
	
		
		console.log(first);

		$(slides).removeClass("current").removeClass("slideup");

		$(slideObjects[first]).addClass("current");
/*		setInterval(function(){
			$(slideObjects[first]).addClass('slideup');
		}, 500);
*/
//		$(slideObjects[second]).addClass("second");

		//reset count
		/*
		if(base >= slides.length) {
			base = 0;
			console.log("reach")
			//console.log(slides.length);
		}
		else if (base <= 0){
			base = 0;
		}


	};

	var base = 0;
	updateOrder();






	//play and stop playing

	var playSlideID;
	 
	function playSlidePlaying() {
		playSlideID = setInterval(function(){updateOrder('forward')}, 1500);
	}
	 
	function playSlideStopping() {
		clearInterval(playSlideID);
	}

	playSlidePlaying();
		

	

});


*/