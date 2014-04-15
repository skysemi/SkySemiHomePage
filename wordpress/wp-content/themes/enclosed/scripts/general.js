//SLIDESHOW
jQuery(document).ready(function(){
	
	//HOMEPAGE SLIDES
	jQuery('.slider-slides').cycle({
        speed: 2000,
		timeout: 8000,
		fx: 'fade',
		next: '.slider-next', 
    	prev: '.slider-prev',
		pager: '.slider-pages',
		pause: true,
		pauseOnPagerHover: true,
		containerResize: false,
		slideResize: false,
		fit: 1
    });
	
	jQuery('.slider-prev, .slider-next, .slider-pages a').click(function(){
		jQuery('.slider-slides').cycle('pause');
	});
	
	//SLIDING NOTICE BOXES
	//Animates notice boxes when they have more than one slide
	jQuery('.tagline .slide_list').cycle({
        speed: 1000,
		timeout: 8000,
		fx: 'fade',
		next: '.tagline .next', 
    	prev: '.tagline .prev',
		containerResize: false,
		slideResize: false,
		fit: 1,
		before: slide_resize,
		after: slide_resize
    });
	
	jQuery('.tagline .prev, .tagline .next').click(function(){
		jQuery('.tagline .slide_list').cycle('pause');
	});
	
	
	//SLIDING TESTIMONIALS
	jQuery('#testimonials').cycle({
		speed: 1000,
		timeout: 6000,
		pause: true,
		fx: 'fade',
		containerResize: false,
		slideResize: false,
		fit: 1
	});
	
	//SLIDESHOW IN PORTFOLIO ITEM PAGE
    jQuery('.slides ul').cycle({
        fx: 'fade',
		pager: '.slides .pages',
		pause: true,
		pauseOnPagerHover: true,
		containerResize: false,
		slideResize: false,
		fit: 1,
		after: slide_resize
    });
	
	//SLIDESHOW IN PORTFOLIO PAGE
    jQuery('.nav_portfolio li .thumbnail').cycle({
        fx: 'fade',
		containerResize: false,
		slideResize: false,
		fit: 1
    });

	//SLIDESHOW IN PORTFOLIO ITEM PAGE
    jQuery('.entry .slides ul').cycle({
        fx: 'fade',
		pager: '.entry .slides .pages',
		pause: true,
		pauseOnPagerHover: true,
		containerResize: false,
		slideResize: false,
		fit: 1,
		after: slide_resize
    });
	
	//Size adjustment for Portfolio Slideshow
	jQuery('.entry .slides .pages').click(function(){
		jQuery('.entry .slides ul').cycle('pause');
	});
	
	//SLIDESHOW IN PORTFOLIO ITEM PAGE
    jQuery('.testimonials').cycle({
        fx: 'fade',
		pause: true,
		pauseOnPagerHover: true,
		containerResize: false,
		slideResize: false,
		fit: 1,
		after: slide_resize
    });
	
	jQuery('#menu_toggle').click(function(){
		jQuery('#menu').slideToggle(400);
	});
	
	jQuery(window).scroll(function(){
		if(jQuery(document).scrollTop() > 500)
			jQuery('#toplink').addClass('active');
		else
			jQuery('#toplink').removeClass('active');
	});
	
});

function slide_resize(curr, next, opts, fwd) {
	var ht = jQuery(this).height();
	jQuery(this).parent().animate({height: ht});
}