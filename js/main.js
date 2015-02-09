jQuery.noConflict(false);
$ = jQuery;

$(document).ready(function(){
	// Init Skrollr
	$('.skroll-it').skrollIt();
	var s = skrollr.init({
    forceHeight: false
	});
	
	// var $isotop = $('.isotop');
	
	// $isotop.imagesLoaded( function() {
	// 	$isotop.isotope({
	// 	  // options
	// 	  itemSelector: '.container',
	// 	  layoutMode: 'masonry'
	// 	}).velocity("fadeIn", { duration: 400 });

	// });

});

(function() {
	$.fn.skrollIt = function() {
		// init
		return this.each(function() {
			var
				$this = $(this),
				img = $('img.skroll-img' , $this).attr('src') || $this.attr('data-image');


			if(img !== undefined && img !== "") {
				$this
					.css('background-image', 'url('+img+')')
					.attr('data-bottom-top', 'background-position: 50% 0px;')
					.attr('data-top-bottom', 'background-position: 50% -100px;');
			}

		});
	};
})(jQuery);

