
###
=General
###

$ ->
	$window = $(window)
	# flexNav
	if ( $('.flexnav').length and $.fn.flexNav )
		$(".flexnav").flexNav(
			'animationSpeed' : 'fast'
		)

	if ($('audio').length is 0 )
		$(window).load( ->
			setTimeout("$('#loading').animate(
				{'opacity': '0'}, 300, function() {$('#loading').hide()}
			)", 500)
			setTimeout("$( '.main-content, .content_wrapper' ).animate(
				{'opacity': '1'}, 500
			)", 500)
		)
	else 
		setTimeout("$('#loading').animate(
			{'opacity': '0'}, 300, function() {$('#loading').hide()}
		)", 500)
		setTimeout("$( '.main-content, .content_wrapper' ).animate(
			{'opacity': '1'}, 500
		)", 500)	

	# back to top
	$('body').prepend('<div class="icons-go-top"></div>')
	$(window).on('scroll', ->
		if ( $(@).scrollTop() > 300 )
			$('.icons-go-top').fadeIn(300)
		else
			$('.icons-go-top').fadeOut(300)
	)
	$('.icons-go-top').click(->
		$('html, body').animate(
			scrollTop: 0
			300
		)
	)

	# four shiny corner
	$(".post-isotope").add(".post").add(".item-portfolio").each( ->
		$(@).prepend('<span class="top-left"></span><span class="top-right"></span><span class="bottom-right"></span><span class="bottom-left"></span>')
		return
	)

	# prettyPhoto, lightbox effect
	if ( $("a[data-gal^='prettyPhoto']").length and $.fn.prettyPhoto )
		$("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'}) # Bad value prettyPhoto for attribute rel on element
		$("a[data-gal^='prettyPhoto']").prettyPhoto(
			# More options: http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/

			social_tools: false,
			animation_speed: 'fast', # fast/slow/normal 
			slideshow: 5000, # false OR interval time in ms 
			autoplay_slideshow: false, # true/false 
			opacity: 0.80, # Value between 0 and 1 
			show_title: false, # true/false 
			allow_resize: true, # Resize the photos bigger than viewport. true/false 
			default_width: 500,
			default_height: 344,
			counter_separator_label: '/', # The separator for the gallery counter 1 "of" 2 
			theme: 'pp_default', # light_rounded / dark_rounded / light_square / dark_square / facebook 
			horizontal_padding: 20, # The padding on each side of the picture 
			hideflash: false, # Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto 
			wmode: 'opaque', # Set the flash wmode attribute 
			autoplay: true, # Automatically start videos: True/False 
			modal: false, # If set to true, only the close button will close the window 
			deeplinking: false, # Allow prettyPhoto to update the url to enable deeplinking. 
			overlay_gallery: false, # If set to true, a gallery will overlay the fullscreen image on mouse over 
			# set to false, since IE 8, 9 doesn't show correctly.

			keyboard_shortcuts: false, # Set to false if you open forms inside prettyPhoto 
			ie6_fallback: false			
		)

	# responsive video
	if ( $('.responsive-video').length and $.fn.fitVids )
		$(".responsive-video").fitVids();

	# audio
	if ( $('audio').length )
		audiojs.events.ready( -> 
			as = audiojs.createAll()
		)	

	# tooltip
	if ( $('.tooltip-display').length and $.fn.tooltip )
		$('.tooltip-display').tooltip()

	# togger
	if ( $('.toggler').length )
		$('.toggler .toggler-heading').each( ->
			answer = $(@).parent('li').children('.toggler-body')
			answer.slideUp()

			$(@).click( ->
				answer.slideToggle()
				$(@).parent('li').toggleClass('active')
			)
		)

	# put left sidebar at bottom when resize window
	if ( $('#left_sidebar').length )
		$window = $(window)
		resizeTimer = null

		if ( $window.width() <= 767 )
			$('#left_sidebar').insertAfter('#blog_posts')
		else if ( $window.width() > 767 )
			$('#left_sidebar').insertBefore('#blog_posts')

		$window.resize( ->
			clearTimeout(resizeTimer)
			resizeTimer = setTimeout( insert, 200 )
		)

		insert = ->
			if ( $window.width() <= 767 )
				$('#left_sidebar').insertAfter('#blog_posts')
			else if ( $window.width() > 767 )			
				$('#left_sidebar').insertBefore('#blog_posts')

	# map, CSS need to define the height and width
	if ( $('#gmap').length )
		new Maplace( 
			# http://maplacejs.com/
			show_markers: true
			controls_type: 'list'
			locations: [{
				lat: -31.9522
				lon: 115.9114
				zoom: 12
			}]
			map_options: {
				set_center: [-31.9520, 115.9110]
				zoom: 12
				scrollwheel: false # disable zooming with scrollwheel
			}
		).Load()	

	# contact form validate
	if ( $('form.contact').length and $.fn.validate )
		$("form.contact").validate()


	### Single page ###

	# top fixed nav
	if ($('.onepage').length ) # if it's single page version
		$window.on('scroll', ->
			if ($window.scrollTop() > 60)
				$('.flexnav-container').addClass('fixed')
			else
				$('.flexnav-container').removeClass('fixed')
		)

		# smooth scroll
		if( $.fn.smoothScroll )
			nav = $('.flexnav')

			nav.find('a').smoothScroll(
				offset: -50 # Since there's a top-fixed-nav
			)

			nav.children('li:first-child').addClass('active')
			nav.children('li').on('click', ->
				$(@).siblings('li').removeClass('active').end().addClass('active')
			)


		# parallax effect
		if ( $.fn.parallax ) 
			# .parallax(xPosition, speedFactor, outerHeight) options:
			# xPosition - Horizontal position of the element
			# inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
			# outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
			$('#about').parallax("50%", 0.1)
			$('#services').parallax("50%", 0.1)

	### End of Single page ###


###
=Portfolio and Blog
###

$ ->
	$(window).load ->
		# blog, waterfall
		$container = $('#blog-waterfall')

		if ($container.length && $.fn.isotope)

			# overwrite isotope for centering
			$.Isotope.prototype._getCenteredMasonryColumns = ->
				this.width = this.element.width()

				parentWidth = this.element.parent().width()

					# i.e. options.masonry && options.masonry.columnWidth
					# or use the size of the first item
					# if there's no items, use size of container
				colW = this.options.masonry && this.options.masonry.columnWidth || this.$filteredAtoms.outerWidth(true) || parentWidth

				cols = Math.floor( parentWidth / colW )
				cols = Math.max( cols, 1 )

				# i.e. this.masonry.cols = ....
				this.masonry.cols = cols
				# i.e. this.masonry.columnWidth = ...
				this.masonry.columnWidth = colW
				return

			$.Isotope.prototype._masonryReset = ->
				# layout-specific props
				this.masonry = {}
				# FIXME shouldn't have to call this again
				this._getCenteredMasonryColumns()
				i = this.masonry.cols
				this.masonry.colYs = []
				while (i--)
					this.masonry.colYs.push( 0 )
				return

			$.Isotope.prototype._masonryResizeChanged = ->
				prevColCount = this.masonry.cols
				# get updated colCount
				this._getCenteredMasonryColumns()
				return ( this.masonry.cols isnt prevColCount )

			$.Isotope.prototype._masonryGetContainerSize = ->
				unusedCols = 0
				i = this.masonry.cols
				# count unused columns
				while ( --i )
					if ( this.masonry.colYs[i] isnt 0 )
						break
					unusedCols++

				return height : Math.max.apply( Math, this.masonry.colYs ), width : (this.masonry.cols - unusedCols) * this.masonry.columnWidth

			$filter    = $('#items_filter')
			item       = '.post-isotope' # the class of isotope item
			width      = 210 # the width of column

			if ($filter.length)
				$filter.children('li').first().addClass('active')

				$filter.children('li').on('click', ->
					$this = $(@)
					$this.addClass('active')
					$this.siblings('li').removeClass('active')

					$container.isotope({ filter: $this.attr('data-filter') })
					return false
				)

			#isotope filtering
			$container.isotope(
				itemSelector: item
				animationEngine: 'jquery'
				masonry:
					columnWidth: width
			)


# flexItems, responsive
$ ->
	$window = $(window)

	$window.load ->
		if ( $('.flexitems-4col').length )
			initFlex('.flexitems-4col', '.item-portfolio', 280, 210, 10)
			# enable direction aware hover, CSS needed
			$('.item-portfolio').each ->
				$(@).hoverdir()

		else if ( $('.flexitems').length )
			initFlex('.flexitems', '.item-portfolio', 400, 300, 5)
			# enable direction aware hover, CSS needed
			$('.item-portfolio').each ->
				$(@).hoverdir()

	# itemWidth: Box-model width of individual items, including horizontal borders and padding.
	# itemHeight: Box-model height of individual items, including vertical borders and padding.
	initFlex = (container, item, itemWidth, itemHeight, itemMargin = 0) ->
		$container = $(container)
		$items = $container.find(item)
		resizeTimer = null # important, define resizeTimer here, or CoffeeScript will define it inside "resize" function which make the resize process wierd and slow

		totalWidth = itemWidth + itemMargin * 2
		columns = Math.ceil( $container.width() / totalWidth )
		newTotalWidth = Math.floor( $container.width() / columns )
		width = newTotalWidth - itemMargin * 2
		ratio = width / itemWidth
		height = Math.floor( itemHeight * ratio )

		$items.css(
			# box-sizing: border-box
			width: width
			height: height
			margin: itemMargin # since margin is a consistent, so only set once
		)

		$window.resize( ->
			clearTimeout(resizeTimer)
			resizeTimer = setTimeout( flex, 200 )
		)

		flex = ->
			columns = Math.ceil( $container.width() / totalWidth )
			newTotalWidth = Math.floor( $container.width() / columns )
			width = newTotalWidth - itemMargin * 2
			# width = newTotalWidth - itemPadding * 2 - itemBorder * 2 - itemMargin *2
			ratio = width / itemWidth
			height = Math.floor( itemHeight * ratio )

			$items.animate(
				width: width
				height: height
			)


$ ->
	#blog, full screen
	$window = $(window)

	$window.load ->

		if ( $('#blog_grid').length ) # only execute when ...
			initMasonryGrid('#items_filter', '#items_container', '#blog_grid', '.post-isotope', 480, 15)
		else if ( $('#portfolio_grid').length )
			initMasonryGrid('#items_filter', '#items_container', '#portfolio_grid', '.item-portfolio', 400, 15)
		else if ( $('#seamless_grid_alt') )
			initMasonryGrid('#items_filter', '#items_container', '#seamless_grid_alt', '.item-portfolio', 400, 0)
			# enable direction aware hover, CSS needed
			$('.item-portfolio').each ->
				$(@).hoverdir()	

	initMasonryGrid = (filter, container, grid, item, itemWidth, itemMargin = 0)->
		$filter = $(filter)
		$container = $(container)
		$grid = $(grid)
		$items = $grid.children(item)
		resizeTimer = null # important, define resizeTimer here, or CoffeeScript will define it inside "resize" function which make the resize process wierd and slow

		totalWidth = itemWidth + itemMargin * 2

		columns = Math.ceil( $container.width() / totalWidth )
		newTotalWidth = Math.floor( $container.width() / columns )
		width = newTotalWidth - itemMargin * 2

		$grid.width(newTotalWidth * columns) # not width or totalWidth
		$items.css(
			width: width 
			margin: itemMargin # since margin is a constant, so only set once
		)

		$window.trigger('resizeIframes')

		if($filter.length)
			$filter.children('li').first().addClass('active')

			$filter.children('li').on('click', ->
				$this = $(@)
				selector = $this.attr('data-filter')

				$this.addClass('active')
				$this.siblings('li').removeClass('active')

				# var selector = selector;
				$grid.isotope({ filter: selector });
				return false;
			)

		# call isotope
		if ($.browser.msie && $.browser.version[0] == '8')
			$grid.isotope(
				resizable: false
				itemSelector: item
				animationOptions: {
					duration: 300
				}
				transformsEnabled: false
				animationEngine: 'jquery'
				masonry: {
					columnWidth: newTotalWidth # not width or totalWidth
				}
			)

			$items.stop(true).fadeTo(500, 1)
		else
			$grid.imagesLoaded( -> #imagesLoaded included with Isotope
				$grid.isotope(
					resizable: false
					itemSelector: item
					animationOptions: {
						duration: 300
					}
					transformsEnabled: false
					animationEngine: 'jquery'
					masonry: {
						columnWidth: newTotalWidth # not width or totalWidth
					}
				)

				$items.stop(true).fadeTo(500, 1)
			);

		$window.resize( ->
			clearTimeout(resizeTimer)
			resizeTimer = setTimeout( resizeGrid, 200 )
		)

		resizeGrid = ->
			columns = Math.ceil( $container.width() / totalWidth )
			newTotalWidth = Math.floor( $container.width() / columns )
			width = newTotalWidth - itemMargin * 2

			$grid.width(newTotalWidth * columns) # not width or totalWidth
			$items.css(
				width: width
			)

			$window.trigger('resizeIframes')

			$grid.isotope(
				masonry:
					columnWidth: newTotalWidth # not width or totalWidth
			)

	# Init it immediately (+overflow: hidden) so that the page won't break while videos, such as youtube, is still loadding
	if ( $('#blog_grid').length ) # only execute when ...
		initMasonryGrid('#items_filter', '#items_container', '#blog_grid', '.post-isotope', 480, 15)
	else if ( $('#portfolio_grid').length )
		initMasonryGrid('#items_filter', '#items_container', '#portfolio_grid', '.item-portfolio', 400, 15)


# seamless
$ ->
	$window = $(window)

	$window.load ->
		if ( $('#seamless_grid').length )
			initGrid('#items_filter', '#items_container', '#seamless_grid', '.item-portfolio', 400, 300)
			# enable direction aware hover, CSS needed
			$('.item-portfolio').each ->
				$(@).hoverdir()	

	# item should be the children of grid, not container
	initGrid = (filter, container, grid, item, itemWidth, itemHeight) ->
		$filter = $(filter)
		$container = $(container)
		$grid = $(grid)
		$items = $grid.children(item)

		columns = Math.ceil($container.width() / itemWidth)
		width = Math.floor($container.width() / columns)
		ratio = width / itemWidth
		height = Math.floor(itemHeight * ratio)
		resizeTimer = null # important, define resizeTimer here, or CoffeeScript will define it inside "resize" function which make the resize process wierd and slow

		$grid.width(width * columns)
		$items.css(
			width: width
			height: height
		)

		if($filter.length) # if there's elements in $filter
			$filter.children('li').first().addClass('active')

			$filter.children('li').on('click', ->
				$this = $(@)
				selector = $this.attr('data-filter')

				$this.addClass('active')
				$this.siblings('li').removeClass('active')

				# var selector = selector;
				$grid.isotope({ filter: selector });
				return false;
			)

		# call isotope
		if ($.browser.msie && $.browser.version[0] == '8')
			$grid.isotope(
				resizable: false
				itemSelector: '.item-portfolio'
				animationOptions: {
					duration: 300
				}
				transformsEnabled: false
				animationEngine: 'jquery'
				layoutMode: 'cellsByRow'
				cellsByRow: {
					columnWidth: width,
					rowHeight: height # origin: ITEM_MAX_HEIGHT * ratio
				}
			)

			$items.stop(true).fadeTo(500, 1)
		else
			$grid.imagesLoaded( -> #imagesLoaded included with Isotope
				$grid.isotope(
					resizable: false
					itemSelector: '.item-portfolio'
					animationOptions: {
						duration: 300
					}
					transformsEnabled: false
					animationEngine: 'jquery'
					layoutMode: 'cellsByRow'
					cellsByRow: {
						columnWidth: width
						rowHeight: height
					}
				)

				$items.stop(true).fadeTo(500, 1)
			);

		$window.resize( ->
			clearTimeout(resizeTimer)
			resizeTimer = setTimeout(resizeGrid, 200)
		)

		resizeGrid = ->
			columns = Math.ceil($container.width() / itemWidth)
			width = Math.floor($container.width() / columns)
			ratio = width / itemWidth
			height = Math.floor(itemHeight * ratio)

			$grid.width(width * columns)
			$items.css(
				width: width
				height: height
			)

			$grid.isotope(
				cellsByRow:
					columnWidth: width
					rowHeight: height
			)


$ ->
	# flexslider, used on testimonails,
	if ( $('.flexslider-normal').length and $.fn.flexslider )
		flexContainer = $('.flexslider-normal')

		$(window).load( -> 
			flexContainer.flexslider(
				animation: "slide"
				animationLoop: true
				pauseOnHover: false
				slideshowSpeed: 7000
				direction: "horizontal"
				controlNav: false # Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
			)
		)

	# flexslider
	if ( $('.flexslider-carousel').length and $.fn.flexslider )
		flexContainer = $('.flexslider-carousel')
		width = 280 # Box-model width of individual carousel items, including horizontal borders and padding.
		margin = 15 # 10 * 2 =20, since it's Margin between carousel items.

		$(window).load( -> 
			flexContainer.flexslider(
				animation: "slide" # "fade" or "slide", yet when i use "fade" on carousel, it breaks the slide, the width=100%
				animationLoop: false
				pauseOnHover: false
				itemWidth: width
				itemMargin: margin
				minItems: 1
				maxItems: 4
				slideshowSpeed: 5000
				move: 1
				direction: "horizontal"
				directionNav: true # Boolean: Create navigation for previous/next navigation? (true/false)
				controlNav: true # Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
			)
		)

	# camera slider
	if ( $('#camera_wrap').length and $.fn.camera )
		jQuery('#camera_wrap').camera(
			hover: false
			imagePath: 'js/vendor/camera/images/'
			height: '560px'
			pagination: false
			thumbnails: true
			
		)

	# revolution slider
	if ( $('#revolution_slider').length and $.fn.revolution )
		$('#revolution_slider').revolution(
			delay: 9000
			startheight: 460
			startwidth: 1170
			hideThumbs: 200
			thumbWidth: 100
			# Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight: 50
			thumbAmount: 5
			navigationType: "bullet"
			# bullet, thumb, none
			navigationArrows: "solo"
			# nexttobullets, solo (old name verticalcentered), none
			navigationStyle: "round"
			# round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
			navigationHAlign: "center"
			# Vertical Align top,center,bottom
			navigationVAlign: "bottom"
			# Horizontal Align left,center,right
			navigationHOffset: 0
			navigationVOffset: 20
			soloArrowLeftHalign: "left"
			soloArrowLeftValign: "center"
			soloArrowLeftHOffset: 20
			soloArrowLeftVOffset: 0
			soloArrowRightHalign: "right"
			soloArrowRightValign: "center"
			soloArrowRightHOffset: 20
			soloArrowRightVOffset: 0
			touchenabled: "on"
			# Enable Swipe Function : on/off
			onHoverStop: "on"
			# Stop Banner Timet at Hover on Slide on/off
			stopAtSlide: -1
			# Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
			stopAfterLoops: -1
			# Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
			hideCaptionAtLimit: 0
			# It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
			hideAllCaptionAtLilmit: 0
			# Hide all The Captions if Width of Browser is less then this value
			hideSliderAtLimit: 0
			# Hide the whole slider, and stop also functions if Width of Browser is less than this value
			shadow: 0
			#0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
			fullWidth: "on" # Turns On or Off the Fullwidth Image Centering in FullWidth Modus
		)	