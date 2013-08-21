/* =============================================================================
   Table of Contents:
   =General
   =Pages
   	=slider
   	=About
   	=Portfolio
   	=Testimonials
   	=Contact Form
   ========================================================================== */


/* =============================================================================
   =General
   ========================================================================== */

(function($) {

/* =Nav
   ========================================================================== */

	if ( $('.selectnav-container').length ) {
    	selectnav('nav');
	}

	// slideDown
	$('.sf-menu li').hover(function() {
		$(this).children('ul').stop().slideDown('fast');
	}, function() {
		$(this).children('ul').stop().slideUp('fast');
	});

	// hoverFlow
	$('.sf-menu ul a').hover(function() {
	    $(this).stop().animate({ left: 5 }, 'fast');
	}, function() {
	    $(this).stop().animate({ left: 0 }, 'fast');
	});


/* others
   ========================================================================== */
	// Lightbox, jquery.prettyphoto

	if ( $.fn.prettyPhoto ) {
	    $("a[rel^='prettyPhoto']").prettyPhoto({
	    		// More options: http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/

				social_tools: false,
				animation_speed: 'fast', /* fast/slow/normal */
				slideshow: 5000, /* false OR interval time in ms */
				autoplay_slideshow: false, /* true/false */
				opacity: 0.80, /* Value between 0 and 1 */
				show_title: false, /* true/false */
				allow_resize: true, /* Resize the photos bigger than viewport. true/false */
				default_width: 500,
				default_height: 344,
				counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
				theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
				horizontal_padding: 20, /* The padding on each side of the picture */
				hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
				wmode: 'opaque', /* Set the flash wmode attribute */
				autoplay: true, /* Automatically start videos: True/False */
				modal: false, /* If set to true, only the close button will close the window */
				deeplinking: false, /* Allow prettyPhoto to update the url to enable deeplinking. */
				overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
				keyboard_shortcuts: false, /* Set to false if you open forms inside prettyPhoto */
				ie6_fallback: false

	    });
	}

	// Tooltip
	if( $('.tooltip-display').length ) { 
		if( $.fn.tooltip ) {
        	$('.tooltip-display').tooltip();
		}
	}

	// Toggler
	if( $('.toggler').length ) { 
		$('.toggler .toggler-heading').each( function(){
			// Important! Caching, so that it'll not jumpy
			var answer = $(this).parent('li').children('.toggler-body');
			answer.slideUp();

			$(this).click(function(){
				answer.slideToggle();
				$(this).parent('li').toggleClass('active');
			});

		});		
	}

	// timeline tabs
	if( $('.tab-container').length ){ 
		if( $.fn.easytabs ) { // plugin is loaded and available
			$('.tab-container').easytabs();
		}
	}

	// arctext
	if ( $.fn.arctext ) {
		$('.arctext').each(function(){
			$(this).arctext({radius: $(this).attr('data-radius') });
		});
	}

})(jQuery);


/* ==========================================================================
   =Pages
   ========================================================================== */

/* =slider
   ========================================================================== */
// flexslider
(function($) {

	if ( $( ".flexslider-banner").length ) {
		if ( $.fn.flexslider ) {
			var container = $('.flexslider-banner');

			$(window).load(function(){
				container.flexslider({
					animation: "fade",
					animationLoop: true,
					pauseOnHover: false, //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
					slideshowSpeed: 7000,
					controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
					directionNav: false
				});
			});			
		}
	}

})(jQuery);

// camera slider
(function($) {
	if ( $( "#camera_slider").length ) {
		if ( $.fn.camera ) {
            jQuery('#camera_slider').camera({
                // http://www.pixedelic.com/plugins/camera/
                // height: '300px',
                pagination: false,
                thumbnails: false,
                hover: false //true, false. Pause on state hover. Not available for mobile devices
            });			
		}
	}
    // (function($) {
    //     var window_width = $(window).width();

    //     if (window_width < 485) {
    //         jQuery('#camera_slider').camera({
    //             // http://www.pixedelic.com/plugins/camera/
    //             // height: '300px',
    //             pagination: false,
    //             thumbnails: false,
    //             hover: false, //true, false. Pause on state hover. Not available for mobile devices
    //         });
    //     }else {
    //         jQuery('#camera_slider').camera({
    //             // height: '800px',
    //             pagination: false,
    //             thumbnails: false,
    //             hover: false, //true, false. Pause on state hover. Not available for mobile devices
    //         });
    //     }

    // })(jQuery);
})(jQuery);

/* =About Page
   ========================================================================== */

// team
(function($) {

	if ( $( ".flexslider-team" ).length ) {
		if ( $.fn.flexslider ) {
			var item_width = 270,
				item_margin = 30,
				container = $('.flexslider-team');

			$(window).load(function(){
				container.flexslider({
					animation: "slide", //"fade" or "slide", when i use fade, it breaks the slide, the width=100%
					animationLoop: false,
					slideshow: false, //Boolean: Animate slider automatically
					pauseOnHover: true, //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
					itemWidth: item_width, //Integer: Box-model width of individual carousel items, including horizontal borders and padding.
					itemMargin: item_margin,
					minItems: 1, //Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
					maxItems: 4,
					slideshowSpeed: 7000,
					direction: "horizontal", //String: Select the sliding direction, "horizontal" or "vertical"
					move: 1, //Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.

					// Primary Controls
					controlNav: false               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
					// directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)

				});
			});			
		}
	}

})(jQuery);


/* =Portfolio, isotope + direction aware hover + own code
   ========================================================================== */

// portfolio normal + direction aware hover, + css to prevent img overlap issue ------------------------------------------------------------------------/

(function($) {
    var $filter = $('#items_normal-filter'),
    	$container = $('#items_normal-container');

	if($container.length) { //if there's elements in ..., then do...
		// enable direction aware hover, style.css needed
		$('.item-portfolio').each( function() { $(this).hoverdir(); } );  

		if( $.fn.isotope ) {

		    $container.isotope({
		        itemSelector : '.item-portfolio',
		        // layoutMode : 'fitRows', the default is 'masonry'
		        animationEngine: 'jquery'
		    });

		    if($filter.length) {
				$filter.children('li').first().addClass('active');

			    $filter.children('li').on('click', function(){

			        var $this = $(this);
			        $this.addClass('active'); 
			        $this.siblings('li').removeClass('active');

			        var selector = $this.attr('data-filter');
			        $container.isotope({ filter: selector });
			        return false;
			    });
		    }

		}

	}

})(jQuery);


//portfolio centered, CSS need ------------------------------------------------------------------------/
(function($) {
    var $window = $(window),
    	$filter = $('#items_centered-filter'),
    	$container = $('#items_centered-container');

	if($container.length) { 
		// enable direction aware hover, style.css needed
		$('.item-portfolio').each( function() { $(this).hoverdir(); } );  

		// overwrite isotope for centering
	    $.Isotope.prototype._getCenteredMasonryColumns = function() {
	        this.width = this.element.width();

	        var parentWidth = this.element.parent().width();

	                      // i.e. options.masonry && options.masonry.columnWidth
	        var colW = this.options.masonry && this.options.masonry.columnWidth ||
	                      // or use the size of the first item
	                      this.$filteredAtoms.outerWidth(true) ||
	                      // if there's no items, use size of container
	                      parentWidth;

	        var cols = Math.floor( parentWidth / colW );
	        cols = Math.max( cols, 1 );

	        // i.e. this.masonry.cols = ....
	        this.masonry.cols = cols;
	        // i.e. this.masonry.columnWidth = ...
	        this.masonry.columnWidth = colW;
	    };
	  
	    $.Isotope.prototype._masonryReset = function() {
	        // layout-specific props
	        this.masonry = {};
	        // FIXME shouldn't have to call this again
	        this._getCenteredMasonryColumns();
	        var i = this.masonry.cols;
	        this.masonry.colYs = [];
	        while (i--) {
	          this.masonry.colYs.push( 0 );
	        }
	    };

	    $.Isotope.prototype._masonryResizeChanged = function() {
	        var prevColCount = this.masonry.cols;
	        // get updated colCount
	        this._getCenteredMasonryColumns();
	        return ( this.masonry.cols !== prevColCount );
	    };
	  
	    $.Isotope.prototype._masonryGetContainerSize = function() {
	        var unusedCols = 0,
	            i = this.masonry.cols;
	        // count unused columns
	        while ( --i ) {
	            if ( this.masonry.colYs[i] !== 0 ) {
	                break;
	            }
	            unusedCols++;
	        }

	        return {
	                height : Math.max.apply( Math, this.masonry.colYs ),
	                // fit container to columns that have been used;
	                width : (this.masonry.cols - unusedCols) * this.masonry.columnWidth
	            };
	    };

	    // isotope filtering
		if( $.fn.isotope ) {

	        $container.isotope({
	            itemSelector : '.item-portfolio',
	            // layoutMode : 'fitRows', the default is 'masonry'
	            animationEngine: 'jquery',
	            masonry: {
	                columnWidth : 335
	            }
	        });

	        if($filter.length) {
	            $filter.children('li').first().addClass('active');

	            $filter.children('li').on('click', function(){

	                var $this = $(this);
	                $this.addClass('active'); 
	                $this.siblings('li').removeClass('active');

	                var selector = $this.attr('data-filter');
	                $container.isotope({ filter: selector });
	                return false;
	            });
	        }

		}

	} 

})(jQuery);


//portfolio seamless, ok without CSS, if no direction aware hover ------------------------------------------------------------------------/
(function($) {
	var $window = $(window),
		$grid = $('#items_grid');

	$window.load(function() {
		if( $grid.length ) { //if there's elements in $grid, then do...
			initGrid();
			// enable direction aware hover, style.css needed
			$('.item-portfolio').each( function() { $(this).hoverdir(); } );   
		}
	});

	function initGrid() {
		var $filter = $('#items_filter'),
			$container = $('#items_container'),
			$items = $grid.children('.item-portfolio'),
			columns,
			ITEM_MAX_WIDTH = 400, // the width of img
			ITEM_MAX_HEIGHT = 300; // the height of img

		columns = Math.ceil($container.width() / ITEM_MAX_WIDTH);

		var width = Math.floor($container.width() / columns), //change to floor, so no horizontal scroll bar will appear OR overflow: hidden?
			ratio = width / ITEM_MAX_WIDTH,
			height = Math.floor(ITEM_MAX_HEIGHT * ratio), 
			resizeTimer;

		$grid.width(width * columns);
		$items
			.width(width)
			.height(height);

		if($filter.length) { //if there's elements in $filter
			$filter.children('li').first().addClass('active');

			$filter.children('li').on('click', function(e) {
				var $this = $(this),
					selector = $this.attr('data-filter');

				$this.addClass('active'); //use with css
				$this.siblings('li').removeClass('active');

				// var selector = selector;
				$grid.isotope({ filter: selector });
				return false;
			})
		}

		// call isotope
		if($.browser.msie && $.browser.version[0] == '8') {
			$grid.isotope({
				resizable: false,
				itemSelector: '.item-portfolio',
				animationOptions: {
					duration: 300
				},
				transformsEnabled: false,
				animationEngine: 'jquery',
				layoutMode: 'cellsByRow',
				cellsByRow: {
					columnWidth: width,
					rowHeight: height // origin: ITEM_MAX_HEIGHT * ratio
				}
			});

			$items.stop(true).fadeTo(500, 1);
		} else {
			$grid.imagesLoaded(function(){ //imagesLoaded included with Isotope
				$grid.isotope({
					resizable: false,
					itemSelector: '.item-portfolio',
					animationOptions: {
						duration: 300
					},
					transformsEnabled: false,
					animationEngine: 'jquery',
					layoutMode: 'cellsByRow',
					cellsByRow: {
						columnWidth: width,
						rowHeight: height
					}
				});

				$items.stop(true).fadeTo(500, 1);
			});
		}

		$window.resize(function(){
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(resizeGrid, 200);
		});

		function resizeGrid() {

			columns = Math.ceil($container.width() / ITEM_MAX_WIDTH);

			width = Math.floor($container.width() / columns);
			ratio = width / ITEM_MAX_WIDTH;
			height = Math.floor(ITEM_MAX_HEIGHT * ratio);

			$grid.width(width * columns);
			$items
				.width(width)
				.height(height);

			$grid.isotope({
				cellsByRow: {
					columnWidth: width,
					rowHeight: height
				}
			});
		}
	}

})(jQuery);


/* =Testimonials, flexslider
   ========================================================================== */
(function($) {
	// http://www.woothemes.com/flexslider/

	if ( $('.flexslider-testimonials').length ) {
		if ( $.fn.flexslider ) {
			var item_width = 300,
				item_margin = 20, // because .carousel li { margin-right: 20px }
				container = $('.flexslider-testimonials');

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

					controlNav: false               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage

				});
			});			
		}
	}

})(jQuery);

(function($) {
	// http://www.woothemes.com/flexslider/

	if ( $('.flexslider-testimonials2').length ) {
		if ( $.fn.flexslider ) {
			var container = $('.flexslider-testimonials2');

			$(window).load(function(){
				container.flexslider({
					animation: "slide",
					animationLoop: true,
					pauseOnHover: true, //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
					slideshowSpeed: 7000,
					direction: "horizontal", //String: Select the sliding direction, "horizontal" or "vertical"

					controlNav: false               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage

				});
			});			
		}
	}

})(jQuery);

/* =Contact Form
   ========================================================================== */
(function($) {

	if ( $.fn.validate ){
		$("form.ajax").validate();

	}
	
})(jQuery);

