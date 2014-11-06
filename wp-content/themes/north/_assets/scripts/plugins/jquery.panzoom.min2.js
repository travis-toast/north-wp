/*
        (function() {
          var $section = $('#inverted-contain');
          $section.find('.panzoom').panzoom({
            $zoomIn: $section.find(".zoom-in"),
            $zoomOut: $section.find(".zoom-out"),
            $zoomRange: $section.find(".zoom-range"),
            $reset: $section.find(".reset"),
            startTransform: 'scale(1.1)',
            increment: 0.1,
            minScale: 1,
            contain: 'invert'
          }).panzoom('zoom');
        })();
*/

$(document).ready(function(){
	$('.panzoom').panzoom();
})
