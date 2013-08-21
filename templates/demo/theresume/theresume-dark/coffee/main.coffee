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

	### fixed header ###
	$window.on('scroll', ->
		if ($window.scrollTop() > 80)
			$('.header-wrapper').addClass('fixed')
		else
			$('.header-wrapper').removeClass('fixed')
	)

	### smooth scroll ###
	if( $.fn.smoothScroll )
		nav = $('#nav')

		nav.find('a').smoothScroll(
			offset: -117 # Since there's a top-fixed-nav
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
			height: '560px;'
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



	### form ###
	if ( $('.subscribe-form').length and $.fn.validate )
		$(".subscribe-form").validate()




