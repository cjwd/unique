/* Add PrettyPhoto to Images
================================================== */
jQuery(document).ready(function () {
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
		hook: 'data-rel', /* the attribute tag to use for prettyPhoto hooks. default: 'rel'. For HTML5, use "data-rel" or similar. */
		animation_speed:'fast',
		slideshow:3000,
		autoplay_slideshow:false,
		opacity:0.80,
		show_title:false,
		theme:'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
		overlay_gallery:false,
		social_tools:false
	});
});


/* Remove Image Width and Height Attr
================================================== */
jQuery(document).ready(function () {
	var a = jQuery(window).width();
	if (a<980) {
	jQuery('img:not(.flickr-widget img, .service-3 .icon img)').removeAttr("width").removeAttr("height");
	}
});
jQuery(window).resize(function () {
	var a = jQuery(window).width();
	if (a<980) {
	jQuery('img:not(.flickr-widget img, .service-3 .icon img)').removeAttr("width").removeAttr("height");
	}
});


/* Add tooltip
================================================== */
jQuery(document).ready(function () {
	jQuery('a[data-rel="tipsy"]').tipsy({fade: true, gravity: 'n'});
});


/* Create Select Responsive menu
================================================== */
jQuery(document).ready(function () {
	
	// DOM ready
	jQuery(function() {
		
		// Create the dropdown base
		jQuery("<select />").appendTo("#menu-wrapper");
		
		// Create default option "Go to..."
		jQuery("<option />", {
		 "selected": "selected",
		 "value"   : "",
		 "text"    : "Go to..."
		}).appendTo("#menu-wrapper select");
		
		// Populate dropdown with menu items
		jQuery("#menu-wrapper a").each(function() {
		var el = jQuery(this);
		
		if (jQuery(el).parents('.sub-menu .sub-menu .sub-menu').length >= 1) {
			jQuery('<option />', {
			 'value'   : el.attr('href'),
			 'text'    : '- - - ' + el.text()
			}).appendTo('#menu-wrapper select');
		}
		else if (jQuery(el).parents('.sub-menu .sub-menu').length >= 1) {
			jQuery('<option />', {
			 'value'   : el.attr('href'),
			 'text'    : '- - ' + el.text()
			}).appendTo('#menu-wrapper select');
		}
		else if (jQuery(el).parents('.sub-menu').length >= 1) {
			jQuery('<option />', {
			 'value'   : el.attr('href'),
			 'text'    : '- ' + el.text()
			}).appendTo('#menu-wrapper select');
		}
		else {
			jQuery('<option />', {
			 'value'   : el.attr('href'),
			 'text'    : el.text()
			}).appendTo('#menu-wrapper select');
		}
		
		});
		
		// To make dropdown actually work
		// To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
		jQuery("#menu-wrapper select").change(function() {
		window.location = jQuery(this).find("option:selected").val();
		});
	
	});
	 
});


/* slogan width resize
================================================== */
jQuery(window).resize(function () {
	var a = jQuery(window).width();
	if (a<980) {
		jQuery('#slogan li').css({width:"auto"});
	} else { jQuery('#slogan li').css({width:"860px"}); }
});


/* client width resize
================================================== */
jQuery(window).resize(function() {
	jQuery(".clients-wrap").width(jQuery(".clients-wrapper").width());
});


/* Set height For Post Date
================================================== */
jQuery(document).ready(function () {
	el = jQuery('#postsinglepage.posts .date-wrap, .posts .date-wrap');
	var a = el.height();
	var b = el.parent().height();
	a = ((b-a)/2);
	el.css("padding-top",a);
});
jQuery(window).resize(function () {
	el = jQuery('.posts .date-wrap');
	var a = el.height();
	var b = el.parent().height();
	a = ((b-a)/2);
	el.css("padding-top",a);
});


/* Animate Zoom Icon
================================================== */

jQuery(document).ready(function () {
	jQuery(".posts .featured-thumbnail a.image-wrapper, #portfoliosinglepage a.image-wrapper, .portfolio-item-wrapper:not(.gallery) a.image-wrapper, .featured-thumbnail.image-frame a.image-wrapper").hover(function(){
		jQuery(this).animate({ opacity: 0.7 }, 500, 'easeOutExpo');
		jQuery(this).find('span').animate({ top: '0'}, 200, 'easeOutExpo');
	}, function(){
		jQuery(this).find('span').animate({ top: '100%'}, 200, 'easeInExpo', function(){
			jQuery(this).css('top','-100%');
		});
		jQuery(this).animate({ opacity: 1 }, 500, 'easeInExpo');
		});
});


/* Animate Zoom Icon for ralated post/portfolio
================================================== */

jQuery(document).ready(function () {
	jQuery(".related .image-wrap").hover(function(){
		jQuery(this).children('.zoom-icon.related-post').animate({ left: '0'}, 500, 'easeOutExpo');
	}, function(){
		jQuery(this).children('.zoom-icon.related-post').animate({ left: '100%'}, 500, 'easeInExpo', function(){
			jQuery(this).css('left','-100%');
		});
	});
});


/* Animate Zoom Icon for gallery style
================================================== */

jQuery(document).ready(function () {
	jQuery(".gallery .image-wrap").hover(function(){
		jQuery(this).children('.zoom-icon.gallery-port').animate({ left: '0'}, 500, 'easeOutExpo');
	}, function(){
		jQuery(this).children('.zoom-icon.gallery-port').animate({ left: '100%'}, 500, 'easeInExpo', function(){
			jQuery(this).css('left','-100%');
		});
	});
});


/* Created button effect
================================================== */
jQuery(document).ready(function() {
	
	jQuery(".shortcode-button").children("img").attr('width', function(){ 
			return jQuery(this).parent().width()+30; 
		}).attr('height', function(){ 
			return jQuery(this).parent().height()+12; 
		})
		
	jQuery(".shortcode-button").mouseenter(function(){
		jQuery(this).find("img").attr("src", function(){
			var value = jQuery(this).attr("src").replace("buttonlight", "buttonlightb");
			return value;
		});
	});
	
	jQuery(".shortcode-button").mouseleave(function(){
		jQuery(this).find('img').attr('src', function(){ 
			var value = jQuery(this).attr("src").replace("buttonlightb", "buttonlight");
			return value;
		});
	});
});


/* Social icon effect
================================================== */
jQuery(document).ready(function() {
	jQuery(".social-icon a").mouseenter(function() {
		jQuery(this).fadeTo(400,.5);
		jQuery(this).children('img').animate({"top":"-20px","opacity":"0"},400,function() {
		jQuery(this).css({"top":"0px"}).fadeTo(200,1);
		});
	});
	jQuery(".social-icon a").mouseleave(function() {
		jQuery(this).fadeTo(400,1);
	});
});


/* Scroll Top
================================================== */
jQuery(document).ready(function() {
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 300) {
			jQuery('#backtotop').fadeIn();
		} else {
			jQuery('#backtotop').fadeOut();
		}
	});

	jQuery('#backtotop, div.divider .divider-gotop').click(function () {
		jQuery('body,html').stop(false, false).animate({
			scrollTop: 0
		}, 800);
		return false;
	});
});


/* Progress Bar
================================================== */
jQuery(document).ready(function() {
	jQuery('.progress-bar-meter img').each(function() {
		jQuery(this).width(jQuery(this).parent().width());
		jQuery(this).height(jQuery(this).parent().height());
	});
});
jQuery(window).load(function() {
	jQuery('.progress-bar-wrapper').each(function() {
		var a = jQuery(this).find('.value').text();
		jQuery(this).find('.progress-bar-meter').css('width','0');
		jQuery(this).find('.progress-bar-meter').css('display','block').delay(1000).animate({'width':a});
	});
});


/* Flickr Preview
================================================== */
this.imagePreview = function(){
	
	xOffset = 30;
	yOffset = 10;
	var winwid = jQuery(window).width();
	winwid = winwid/2;
	
	jQuery("a.flickr-image").hover(function(e){
		jQuery("body").append("<div id='flickr-preview'><img src='"+ jQuery(this).attr('alt') +"' alt='preview' /></div>");	
		if (e.pageX < winwid) { var a = (e.pageX + xOffset) } else { a = (e.pageX - xOffset - jQuery("#flickr-preview img").width())}
		jQuery("#flickr-preview")
			.css("top",(e.pageY - yOffset) + "px")
			.css("left",a + "px")
			.fadeIn("fast");						
    },
	function(){
		jQuery("#flickr-preview").remove();
    });	
	jQuery("a.flickr-image").mousemove(function(e){
		if (e.pageX < winwid) { var a = (e.pageX + xOffset) } else { a = (e.pageX - xOffset - jQuery("#flickr-preview img").width())}
		jQuery("#flickr-preview")
			.css("top",(e.pageY - yOffset) + "px")
			.css("left",a + "px");
	});			
};

jQuery(document).ready(function(){
	imagePreview();
});


/* Accordion
================================================== */
jQuery(document).ready(function(){
	
	jQuery("ul.pa-accordion li").each(function(){
		jQuery(this).children(".accordion-content").css('height', function() { 
			return jQuery(this).height(); 
		});
		
		if (jQuery(this).index() > 0) {
			jQuery(this).children(".accordion-content").css('display','none');
		} else {
			jQuery(this).addClass('active').find(".accordion-head-sign").html("&minus;");
			jQuery(this).siblings("li").find(".accordion-head-sign").html("&#43;");
		}
		
		jQuery(this).children(".accordion-head").bind("click", function() {
			jQuery(this).parent().addClass(function() {
				if (jQuery(this).hasClass("active")) return "";
				return "active";
			});
			jQuery(this).siblings(".accordion-content").slideDown();
			jQuery(this).parent().find(".accordion-head-sign").html("&minus;");
			jQuery(this).parent().siblings("li").children(".accordion-content").slideUp();
			jQuery(this).parent().siblings("li").removeClass("active");
			jQuery(this).parent().siblings("li").find(".accordion-head-sign").html("&#43;");
		});
	});
});
	

/* Toggle
================================================== */
jQuery(document).ready(function(){
		
	jQuery("ul.pa-toggle li").each(function(){
		jQuery(this).children(".toggle-content").css('height', function() { 
			return jQuery(this).height(); 
		});
		
		jQuery(this).children(".toggle-content").css('display','none');
		jQuery(this).find(".toggle-head-sign").html("&#43;");
		
		jQuery(this).children(".toggle-head").bind("click", function() {
		
			if (jQuery(this).parent().hasClass("active")) jQuery(this).parent().removeClass("active");
			else jQuery(this).parent().addClass("active");
			
			jQuery(this).find(".toggle-head-sign").html(function() {
				if (jQuery(this).parent().parent().hasClass("active")) return "&minus;";
				else return "&#43;";
			});
			jQuery(this).siblings(".toggle-content").slideToggle();
		});
	});
	
	jQuery("ul.pa-toggle").find(".toggle-content.active").siblings(".toggle-head").trigger('click');
});
	

/* Tab
================================================== */
jQuery(document).ready(function(){
	
	var tabs = jQuery('ul.tabs');

	tabs.each(function(i) {
		// get tabs
		var tab = jQuery(this).find('> li > a');
		tab.click(function(e) {
			// get tab's location
			var contentLocation = jQuery(this).attr('href');
			// Let go if not a hashed one
			if(contentLocation.charAt(0)=="#") {
				e.preventDefault();
				// add class active
				tab.removeClass('active');
				jQuery(this).addClass('active');
				// show tab content & add active class
				jQuery(contentLocation).fadeIn(1000).addClass('active').siblings().hide().removeClass('active');

			}
		});
	});
});
		

/* jcarousellite
================================================== */
jQuery(window).load(function() {

	// Call jcarousellite
	var carousellite = jQuery('.jcarousellite');
	carousellite.jCarouselLite({ btnNext: ".next", btnPrev: ".prev", visible: 1 });
	
});
		

/* create equal height for content and sidebar
================================================== */
jQuery(window).load(function() {
	
	var a = jQuery('#content').height();
	var b = jQuery('.grid_3.bothleft').height();
	var c = jQuery('.grid_3.bothright').height();
	var d = jQuery('.grid_4.indent.pleft').height();
	var e = jQuery('.grid_4.indent.pright').height();
	var columns = [a,b,c,d,e];
	var currentTallest = 0;
	
	for (i=0; i<columns.length; i++) {
		if (columns[i] > currentTallest) { currentTallest = columns[i] }
	}
	
	if (jQuery('#main div').hasClass('sidebar')) {
		jQuery('#content').css('min-height',currentTallest);
		jQuery('.grid_3.bothleft').css('min-height',currentTallest);
		jQuery('.grid_3.bothright').css('min-height',currentTallest);
		jQuery('.grid_4.indent.pleft').css('min-height',currentTallest);
		jQuery('.grid_4.indent.pright').css('min-height',currentTallest);
	}
});
		

/* create equal height for portfolio item
================================================== */
function equalHeight(group) {
	var tallest = 0;
	group.each(function() {
		var thisHeight = jQuery(this).height();
		if(thisHeight > tallest) {
			tallest = thisHeight;
		}
	});
	group.height(tallest);
}

jQuery(document).ready(function() {
		
	/*equalHeight(jQuery('#portfolio-item-wrapper li'));*/
	
	var a = jQuery('#port-content-wrapper > div');
	if (a.length > 1) {
		equalHeight(jQuery('#port-content-wrapper > div'));
	}
});



/* contact form
================================================== */
jQuery(document).ready(function() {
	
	jQuery('#contactForm').submit(function() {
		jQuery('#contactForm .error-message').remove();
		var hasError = false;
		jQuery('#contactForm .requiredField').each(function() {
            var labelText = jQuery(this).parent().prev('label').attr('data-rel');
			if(jQuery.trim(jQuery(this).val()) == '' || jQuery.trim(jQuery(this).val()) == labelText) {
            	jQuery(this).parent().append('<span class="error-message">Please enter your '+labelText+'</span>').find('.error-message').width(jQuery(this).parent().width()).height(jQuery(this).parent().height()-9).hover(function(e) { jQuery(this).fadeOut(300); });
            	jQuery(this).addClass('inputError');
            	hasError = true;
            } else if(jQuery(this).hasClass('email')) {
            	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            	if(!emailReg.test(jQuery.trim(jQuery(this).val()))) {
            		jQuery(this).parent().append('<span class="error-message">Please enter a valid email address</span>').find('.error-message').width(jQuery(this).parent().width()).height(jQuery(this).parent().height()-9).hover(function(e) { jQuery(this).fadeOut(300); });
            		jQuery(this).addClass('inputError');
            		hasError = true;
            	}
            }
		});
		
		if(!hasError) {
			if (jQuery('#contact-recaptcha').hasClass('true')) {
				return true;
			} else {
			jQuery('#contactForm #contact-submit').fadeOut('normal', function() {
				jQuery(this).parent().append('<div class="wait"></div>');
			});
			var formInput = jQuery(this).serialize();
			jQuery.post(jQuery(this).attr('action'), formInput, function(data){
				jQuery('#contactForm').slideUp('fast', function() {
					jQuery('#contactForm .wait').slideUp("fast");
					jQuery(this).before('<p class="message-box no-icon green"><strong>Thanks!</strong> Your email was successfully sent. I check my email all the time, so I should be in touch soon.</p>');
				});
			});
			}
		}
		return false;
	});
});


/* widget contact form
================================================== */
jQuery(document).ready(function() {
	
	jQuery('#widget-contactForm').submit(function() {
		jQuery('#widget-contactForm .error-message').remove();
		var hasError = false;
		jQuery('#widget-contactForm .requiredField').each(function() {
            var labelText = jQuery(this).siblings('label').attr('data-rel');
			if(jQuery.trim(jQuery(this).val()) == '' || jQuery.trim(jQuery(this).val()) == labelText) {
            	jQuery(this).parent().append('<span class="error-message">Please enter your '+labelText+'</span>').find('.error-message').width(jQuery(this).width()).height(jQuery(this).height()-7).delay(1000).fadeOut(350);
            	jQuery(this).addClass('inputError');
            	hasError = true;
            } else if(jQuery(this).hasClass('email')) {
            	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            	if(!emailReg.test(jQuery.trim(jQuery(this).val()))) {
            		jQuery(this).parent().append('<span class="error-message">Please enter a valid email address</span>').find('.error-message').width(jQuery(this).width()).height(jQuery(this).height()-7).delay(1000).fadeOut(350);
            		jQuery(this).addClass('inputError');
            		hasError = true;
            	}
            }
		});
		
		if(!hasError) {
			jQuery('#widget-contactForm #widget-contact-submit').fadeOut('normal', function() {
				jQuery(this).parent().append('<div class="wait"></div>');
			});
			var formInput = jQuery(this).serialize();
			jQuery.post(jQuery(this).attr('action'), formInput, function(data){
				jQuery('#widget-contactForm').slideUp('fast', function() {
					jQuery('#widget-contactForm .wait').slideUp("fast");
					jQuery(this).before('<p class="message-box no-icon green"><strong>Thanks!</strong> Your email was successfully sent. I check my email all the time, so I should be in touch soon.</p>');
				});
			});
		}
		return false;
	});
});