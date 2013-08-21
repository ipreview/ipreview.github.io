#

$ ->
	$window = $(window);

	### showbiz ###
	$('#showcase_container').showbizpro({
		dragAndScroll:"on",
		visibleElementsArray:[4,3,2,1],
		carousel:"off",
		entrySizeOffset:0,
		allEntryAtOnce:"off"
	});	

	$('.fancybox').fancybox()

	### smooth scroll ###
	if( $.fn.smoothScroll )
		nav = $('#nav')

		nav.find('a').smoothScroll(
			offset: 0 # Since there's a top-fixed-nav
		)

	###  back to top ### 
	$('body').prepend('<i class="icon-arrow-up go-top"></i>')
	$window.on('scroll', ->
		if ( $(@).scrollTop() > 300 )
			$('.icon-arrow-up').fadeIn(300)
		else
			$('.icon-arrow-up').fadeOut(300)
	)
	$('.icon-arrow-up').click(->
		$('html, body').animate(
			scrollTop: 0
			300
		)
	)

	### color schemes ###
	$('.colors.inline-list').children('li').hover(
		->
			$(@).siblings().addClass('dim').end().removeClass('dim')
		->
			$(@).siblings().andSelf().removeClass('dim')
	)
	$('.colors.inline-list').children('li').on('click', ->
		$this = $(@)
		color = $this.attr('data-color')
		$('link[href^="css/main"]').attr('href', 'css/main-' + color + '.css')
	)

	### camera slider ###
	if ( $('#camera_bg').length and $.fn.camera )
		jQuery('#camera_bg').camera(
			hover: false
			imagePath: 'js/vendor/camera/images/'
			fx: 'stampede, mosaicmosaicReverse, mosaicRandom, mosaicSpiral, mosaicSpiralReverse'
			height: '485px'
			loader: 'none'
			pagination: false
			thumbnails: false
			navigation: false
			navigationHover: false
			mobileNavHover: false
			playPause: false
			pauseOnClick: false
			time: 5000
		)	

	### count down ###
	# http://keith-wood.name/countdownRef.html
	if ($('.countdown').length and $.fn.countdown)
		date = new Date(2014, 6 - 1, 26, 9);
		$('.countdown').countdown(
			until: date
			timezone: +10
		)


	### form ###
	if ( $('.subscribe-form').length and $.fn.validate )
		$(".subscribe-form").validate()

	### for ie8 ###
	$('.wrapper:nth-child(odd)').addClass('odd')

	###  gmap ###
	# map, CSS need to define the height and width
	if ( $('#gmap').length )
		new Maplace( 
			# http://maplacejs.com/
			show_markers: true
			controls_type: 'list'
			locations: [{
				lat: -31.9522
				lon: 115.9114
				zoom: 16
			}]
			map_options: {
				set_center: [-31.9520, 115.9110]
				zoom: 12
				scrollwheel: false # disable zooming with scrollwheel
			}
			styles: {
				'Greyscale': [{              
					featureType: 'all',
					stylers: [
						{ saturation: -100 },
						{ gamma: 0.50 }
					]
				}]
			}
		).Load()


