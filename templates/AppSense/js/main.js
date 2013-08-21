/* =============================================================================
   Table of Contents
   *General
   *Details
   ========================================================================== */


/* =============================================================================
   =General
   ========================================================================== */

// jquery.smooth-scroll
(function($) {
	$('.nav a').smoothScroll( {
		offset: -45 //Because there's a top-fixed-nav
	} );
})(jQuery);

// jquery.prettyphoto
(function($) {
	$('#items-container a').add('.feature-image a').addClass('prettyPhoto');
    $("a[class^='prettyPhoto']").prettyPhoto({
		social_tools: false,
		theme: 'light_rounded' /* light_rounded / dark_rounded / light_square / dark_square / facebook */
    });
})(jQuery);
/* =============================================================================
   =Features, Quicksand, Masonry
   ========================================================================== */
(function($) {

	var container = $('#items-container');
	container.find('div').addClass('item');

	container.isotope({
		itemSelector : '.item',
		// layoutMode : 'fitRows', the default is 'masonry'
		animationEngine: 'best-available'
	})

	// container.isotope({ filter: '*' });
	$('#items-filters li').on('click', function(){
		var $this = $(this);
		$this.addClass('active');
		$this.siblings('li').removeClass('active');

		var selector = $this.attr('data-filter');
		container.isotope({ filter: selector });
		return false;
	})

})(jQuery);


/* =============================================================================
   =Show, flexslider
   ========================================================================== */
(function($) {

	$('.flexslider-show').flexslider();

})(jQuery);


/* =============================================================================
   =Testimonials, flexslider (carousel-min-max)
   ========================================================================== */
(function($) {

	var item_width = 300,
		item_margin = 20, // because .carousel li { margin-right: 20px }
		container = $('.flexslider-testimonials');

	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  container.flexslider({
	    animation: "slide",
	    animationLoop: true,
	    pauseOnHover: true, //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
	    itemWidth: item_width, //Integer: Box-model width of individual carousel items, including horizontal borders and padding.
	    itemMargin: item_margin,
	    minItems: 1, //Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
	    maxItems: 5,
	    slideshowSpeed: 4000,
	    direction: "horizontal", //String: Select the sliding direction, "horizontal" or "vertical"
	    move: 1, //Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.
	    start: function(slider){
	      $('body').removeClass('loading');
	    }
	  });
	});

})(jQuery);


/* =============================================================================
   =Partners flexslider (carousel-min-max)
   ========================================================================== */
(function($) {

	var item_width = 150,
		item_margin = 5,
		container = $('.flexslider-partners');

	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  container.flexslider({
	    animation: "slide",
		// controlNav: false,
	    animationLoop: true,
	    pauseOnHover: true, //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
	    itemWidth: item_width, //Integer: Box-model width of individual carousel items, including horizontal borders and padding.
	    itemMargin: item_margin,
	    slideshowSpeed: 5000,
	    minItems: 2, //Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
	    maxItems: 6,
	    move: 1, //Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.
	    direction: "horizontal", //String: Select the sliding direction, "horizontal" or "vertical"
	    start: function(slider){
	      $('body').removeClass('loading');
	    }
	  });
	});

})(jQuery);

