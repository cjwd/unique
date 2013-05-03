<?php

add_action('wp_head', 'add_inline_css_script');
function add_inline_css_script() {
global $slider, $slideronoff;  ?>
	
	<?php	echo '
		<!--[if lt IE 9]>
			<style type="text/css" media="screen">
			#backtotop > span,
			.shortcodeviewer,
			.social-icon a,
			#main .social-icon,
			#footer-wrapper .social-icon,
			.kwicks-info,
			.kwicks li:first-child,
			.kwicks li.last,
			.kwicks .kwicks-caption.kwicks1,
			.kwicks .kwicks-caption.kwicks5,
			.roundabout-moveable-item,
			.roundabout-moveable-item img,
			#liteaccordion,
			#liteaccordion.rounded,
			#liteaccordion.rounded ol li > h2.first,
			#liteaccordion.rounded ol li > h2.last,
			#liteaccordion.rounded ol li > h2.last.selected,
			.sliderNav #nav ul li a,
			#main,
			#main.main-transparent,
			.service-2 .icon,
			.service-3 .icon,
			.testimonial-widget-nav .prev,
			.testimonial-widget-nav .next,
			.sidebar #widget-contactForm li.buttons,
			#footer-wrapper #widget-contactForm li.buttons,
			.sidebar .widget_calendar tbody td a,
			#footer-wrapper div[id|="calendar"] tbody td a,
			.featured-thumbnail .zoom-icon.gallery-port .iconcontainer span,
			.faq_list dt,
			#contact-form .error-message.php-message,
			.contact-info,
			.testimonial,
			.testimonial .testi-pic a,
			.testimonial-bubble,
			.table,
			.dropcaps.circle,
			.dropcaps.hbar,
			.dropcaps.vbar,
			.dropcaps.square,
			.shortcode-button,
			.message-box,
			.message-box.small-icon,
			.message-box.no-icon,
			.shortcodeslider .nivo-controlNav a,
			.progress-bar.radius,
			.progress-bar.radius .progress-bar-meter,
			.progress-bar.radius .progress-bar-meter img,
			.personnel-shortcode .personnel-post,
			.personnel-shortcode .personnel-details strong,
			.tabs li a.active,
			.price-title-wrapper-left,
			.price-button-wrapper-left,
			.container_12 {
			position:relative;
			behavior:url('. get_template_directory_uri() .'/css/PIE.php);
			}
			</style>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 8]>
			<div style="clear:both; text-align:center; position:relative;">
				<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" />
				</a>
			</div>
		<![endif]-->';
	?>

	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Philosopher:n,i,b,bi|<?php $gfonts = array('fontbody','fonth','fontmainnav','fonthsidebar','fonthfooter','fontslogan','fontstunningtext');
	foreach ($gfonts as $gfont) {
		if (get_option('mytheme_'.$gfont)) { $gfont = explode('|', get_option('mytheme_'.$gfont)); if ($gfont[1]=='googlefont') echo str_replace(' ', '+' , $gfont[0]).':n,i,b,bi|';
	} } ?>' type='text/css'>
	
	<script type='text/javascript'>
	jQuery(function(){
		jQuery('ul.sf-menu').supersubs({ 
			minWidth:18.4,   // minimum width of sub-menus in em units 
			maxWidth:<?php if (!get_option('mytheme_mainnavsupersubsmaxwidth')) echo '27'; else echo get_option('mytheme_mainnavsupersubsmaxwidth'); ?>,	// maximum width of sub-menus in em units 
			extraWidth:1     // extra width can ensure lines don't sometimes turn over due to slight rounding differences and font-family 
		}).superfish({	// main navigation init
			delay:<?php if (!get_option('mytheme_mainnavdelay')) echo '200'; else echo get_option('mytheme_mainnavdelay'); ?>,		// one second delay on mouseout 
			animation:{opacity:'show'<?php if (get_option('mytheme_mainnavheightonoff')!='true') echo ',height:"show"'; ?>}, // fade-in and slide-down animation 
			speed:'<?php echo get_option('mytheme_mainnavspeed'); ?>',  // faster animation speed 
			autoArrows:<?php if (!get_option('mytheme_mainnavarrowonoff')) echo 'false'; echo get_option('mytheme_mainnavarrowonoff'); ?>,   // generation of arrow mark-up (for submenu) 
			dropShadows:false   // drop shadows (for submenu)
		});
	});
	</script>
	
	<?php if (get_option('mytheme_topbaronoff')=='autohide') { ?>
	<script type='text/javascript'> // auto-hide for top ribbon
	jQuery(document).ready(function () {
		jQuery('#top-nav-left, #top-nav-right').slideUp(300);
		jQuery('#top-nav-wrapper').mouseenter(function(){
			jQuery('#top-nav-left, #top-nav-right').slideDown(300);
		});
		jQuery('#top-nav-wrapper').mouseleave(function(){
			jQuery('#top-nav-left, #top-nav-right').slideUp(300);
		});
	});
	</script>
	<?php } ?>
	
	<?php if ($slideronoff==false || ($slideronoff==true && $slider=='bgstretcher')) { ?>
	<script type='text/javascript'>
	jQuery(document).ready(function() {
		jQuery('#slogan .slogan').jCarouselLite({
			btnNext:'#slogan .slogan-next',
			btnPrev:'#slogan .slogan-prev',
			auto:<?php if (get_option('mytheme_sloganspeed')) echo get_option('mytheme_sloganspeed'); else echo '8000'; ?>,
			speed:800,
			vertical:true,
			visible:1
		});
	});
	</script>
	<?php } ?>

	<?php
	if ($slideronoff==true) { // setting for sliders
	if ($slider=='nivo') { ?>
	<script type='text/javascript'>
	jQuery(document).ready(function() {
		// nivoslider init
		jQuery('#nivoslider').nivoSlider({
			effect:'<?php if (!get_option('mytheme_nivoeffect')) echo 'random'; else echo get_option('mytheme_nivoeffect'); ?>',
			slices:<?php if (!get_option('mytheme_nivoslices')) echo '15'; else echo get_option('mytheme_nivoslices'); ?>,
			boxCols:<?php if (!get_option('mytheme_nivoboxcols')) echo '8'; else echo get_option('mytheme_nivoboxcols'); ?>,
			boxRows:<?php if (!get_option('mytheme_nivoboxrows')) echo '4'; else echo get_option('mytheme_nivoboxrows'); ?>,
			animSpeed:<?php if (!get_option('mytheme_nivoanimspeed')) echo '500'; else echo get_option('mytheme_nivoanimspeed'); ?>,
			pauseTime:<?php if (!get_option('mytheme_nivopausetime')) echo '5000'; else echo get_option('mytheme_nivopausetime'); ?>,
			directionNav:<?php if (!get_option('mytheme_nivodirectionnav')) echo 'false'; else echo get_option('mytheme_nivodirectionnav'); ?>,
			directionNavHide:<?php if (!get_option('mytheme_nivodirectionnavhide')) echo 'false'; else echo get_option('mytheme_nivodirectionnavhide'); ?>,
			controlNav:<?php if (!get_option('mytheme_nivocontrolnav')) echo 'false'; else echo get_option('mytheme_nivocontrolnav'); ?>,
			controlNavThumbs:<?php if (!get_option('mytheme_nivocontrolnavthumbs')) echo 'false'; else echo get_option('mytheme_nivocontrolnavthumbs'); ?>,
			pauseOnHover:<?php if (!get_option('mytheme_nivopauseonhover')) echo 'false'; else echo get_option('mytheme_nivopauseonhover'); ?>,
			randomStart:<?php if (!get_option('mytheme_nivorandomstart')) echo 'false'; else echo get_option('mytheme_nivorandomstart'); ?>,
			manualAdvance:false
		});
	});
	</script>
	
	<?php } elseif ($slider=='kwicks') { ?>
	<script type='text/javascript'>
	jQuery(document).ready(function() {
		jQuery('.kwicks').kwicks({
			<?php echo get_option('mytheme_kwicksmaxmin'); ?>:<?php if (!get_option('mytheme_kwicksmaxminval')) { if (get_option('mytheme_kwicksmaxmin')=='max') { if (get_option('mytheme_kwicksvertical')=='false') echo '704'; else echo '204'; } if (get_option('mytheme_kwicksmaxmin')=='min') { if (get_option('mytheme_kwicksvertical')=='false') echo '59'; else echo '44'; } } else echo get_option('mytheme_kwicksmaxminval'); ?>,
			easing:'<?php echo get_option('mytheme_kwicksease'); ?>',
			isVertical:<?php echo get_option('mytheme_kwicksvertical'); ?>,
			sticky:<?php echo get_option('mytheme_kwickssticky'); ?>,
			defaultKwick:<?php if (!get_option('mytheme_kwicksdefault')) echo '0'; else echo get_option('mytheme_kwicksdefault'); ?>,
			event:'<?php echo get_option('mytheme_kwicksevent'); ?>',
			duration:<?php if (!get_option('mytheme_kwicksduration')) echo '500'; else echo get_option('mytheme_kwicksduration'); ?>,
			spacing:0
		});
	});
	jQuery(document).ready(function() {
		jQuery('.kwicks').show();
	});
	</script>
	
	<?php } elseif ($slider=='showcase') { ?>
	<script type='text/javascript'>
	jQuery(document).ready(function() {
		jQuery('#showcase').fadeTo(500, 1);
		
		jQuery('#showcase').awShowcase({
			content_width:<?php if (get_option('mytheme_showcasethumbalign')=='vertically') echo '800'; else echo '940'; ?>,
			content_height:<?php if (get_option('mytheme_showcasethumbalign')=='vertically') echo '380'; else echo '290'; ?>,
			fit_to_parent:false,
			auto:<?php echo get_option('mytheme_showcaseauto'); ?>,
			interval:<?php if (!get_option('mytheme_showcaseinterval')) echo '5000'; else echo get_option('mytheme_showcaseinterval'); ?>,
			continuous:true,
			loading:true,
			arrows:false,
			buttons:false,
			btn_numbers:false,
			keybord_keys:<?php echo get_option('mytheme_showcasekeyboardnav'); ?>,
			mousetrace:false, /* Trace x and y coordinates for the mouse */
			pauseonover:<?php echo get_option('mytheme_showcasepauseonhover'); ?>,
			stoponclick:true,
			transition:'<?php echo get_option('mytheme_showcaseeffect'); ?>', /* hslide/vslide/fade */
			transition_delay:<?php if (!get_option('mytheme_showcasedelay')) echo '300'; else echo get_option('mytheme_showcasedelay'); ?>,
			transition_speed:<?php if (!get_option('mytheme_showcaseanimspeed')) echo '500'; else echo get_option('mytheme_showcaseanimspeed'); ?>,
			show_caption:'<?php echo get_option('mytheme_showcasecaption'); ?>', /* onload/onhover/show */
			thumbnails:<?php if (get_option('mytheme_showcasethumb')=='true') echo 'true'; else echo 'false'; ?>,
			thumbnails_position:'<?php echo get_option('mytheme_showcasethumbpos'); ?>', /* outside-last/outside-first/inside-last/inside-first */
			thumbnails_direction:'<?php if (get_option('mytheme_showcasethumbalign')=='vertically') echo 'vertical'; else echo 'horizontal'; ?>', /* vertical/horizontal */
			thumbnails_slidex:<?php if (!get_option('mytheme_showcasethumbslidex')) echo '0'; else echo get_option('mytheme_showcasethumbslidex'); ?>, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
			dynamic_height:false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
			speed_change:false, /* Set to true to prevent users from swithing more then one slide at once. */
			viewline:false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
		});
	});
	</script>
	
	<?php } elseif ($slider=='cycle') { ?>
	<script type='text/javascript'>
	jQuery(document).ready(function(){
		jQuery('#cycle').cycle({ 
			fx:'<?php echo get_option('mytheme_cycleeffect'); ?>',
			pause:<?php if (!get_option('mytheme_cyclepauseonhover')) echo '0'; else echo '1'; ?>,
			easing:'<?php echo get_option('mytheme_cycleease'); ?>',
			random:<?php if (!get_option('mytheme_cyclerandom')) echo '0'; else echo '1'; ?>,
			timeout:<?php if (!get_option('mytheme_cycletimeout')) echo '5000'; else echo get_option('mytheme_cycletimeout'); ?>,
			speed:<?php if (!get_option('mytheme_cycleanimspeed')) echo '1000'; else echo get_option('mytheme_cycleanimspeed'); ?>,
			sync:<?php if (!get_option('mytheme_cyclesync')) echo '1'; else echo '0'; ?>,
			next:'#cycle-next',
			prev:'#cycle-prev',
		<?php if (get_option('mytheme_cyclecaptionanimation')) { ?>
			before:function onBefore(curr, next, opts, fwd) {
				jQuery(this).find('.cycle-secondary').css({'display':'none', 'left':'-940px'});
				jQuery(this).find('.cycle-caption').wrap('<div class="cycle-caption-wrapper" />').parent().css({'display':'none', 'left':'940px'});
			}, 
			after:function onAfter(curr, next, opts, fwd) {
				jQuery(this).find('.cycle-secondary').css({'display':'block'}).delay(50).animate({'left':'0px', 'opacity':1}, 250, 'easeOutQuad');
				jQuery(this).find('.cycle-caption-wrapper').css({'display':'block'}).delay(250).animate({'left':'0px', 'opacity':1}, 350, 'easeOutQuad', function() { jQuery(this).children().unwrap() });
			},
		<?php } ?>
			startingSlide:0
		});
	});
	</script>
	
	<?php } elseif ($slider=='roundabout') { ?>
	<script type='text/javascript'>
	jQuery(document).ready(function(){
		var interval;
		jQuery('#roundabout-holder').roundabout({
			minOpacity:<?php if (!get_option('mytheme_roundaboutminopacity')) echo '1'; else echo get_option('mytheme_roundaboutminopacity'); ?>,
			minScale:<?php if (!get_option('mytheme_roundaboutminscale')) echo '0.4'; else echo get_option('mytheme_roundaboutminscale'); ?>,
			maxScale:<?php if (!get_option('mytheme_roundaboutmaxscale')) echo '1'; else echo get_option('mytheme_roundaboutmaxscale'); ?>,
			duration:<?php if (!get_option('mytheme_roundaboutduration')) echo '600'; else echo get_option('mytheme_roundaboutduration'); ?>,
			easing:'<?php echo get_option('mytheme_roundaboutease'); ?>',
			autoplay:<?php echo get_option('mytheme_roundaboutautoplay'); ?>,
			autoplayDuration:<?php if (!get_option('mytheme_roundaboutautoduration')) echo '3000'; else echo get_option('mytheme_roundaboutautoduration'); ?>,
			autoplayPauseOnHover:<?php echo get_option('mytheme_roundaboutpauseonhover'); ?>,
			reflect:<?php echo get_option('mytheme_roundaboutreflect'); ?>,
			enableDrag:false,
			responsive:true,
			shape:'<?php echo get_option('mytheme_roundaboutshape'); ?>',
			btnNext:'#roundabout-next',
			btnPrev:'#roundabout-prev'
		})
		.hover(
				function() {
					// oh no, it's the cops!
					clearInterval(interval);
				},
				function() {
					// false alarm: PARTY!
					interval = startAutoPlay();
				}
			);
		
		interval = startAutoPlay();
		
		function startAutoPlay() {
				return setInterval(function() {
					jQuery('#roundabout-holder').roundabout_animateToNextChild();
				}, 3000);
			}
		
		jQuery('#roundabout-inner').show();
	});
	</script>
	
	<?php } elseif ($slider=='liteaccordion') { ?>
	<script type='text/javascript'>
	jQuery(document).ready(function(){
		jQuery('#liteaccordion').liteAccordion({
			onTriggerSlide : function() {
			this.find('.liteaccordion-caption').fadeOut();
			},
			onSlideAnimComplete : function() {    
			this.find('.liteaccordion-caption').fadeIn();
			},
			containerWidth:940,                   // fixed (px)  
			containerHeight:380,                  // fixed (px)  
			headerWidth:48,                       // fixed (px)  
	
			activateOn:'<?php echo get_option('mytheme_liteaccordionactivateon'); ?>',	// click or mouseover  
			firstSlide:<?php if (!get_option('mytheme_liteaccordionactiveslide')) echo '1'; else echo get_option('mytheme_liteaccordionactiveslide'); ?>,	// displays slide (n) on page load  
			slideSpeed:<?php if (!get_option('mytheme_liteaccordionslidespeed')) echo '800'; else echo get_option('mytheme_liteaccordionslidespeed'); ?>,	// slide animation speed
	
			autoPlay:<?php echo get_option('mytheme_liteaccordionautoplay'); ?>,	// automatically cycle through slides  
			pauseOnHover:<?php echo get_option('mytheme_liteaccordionpauseonhover'); ?>,	// pause on hover  
			cycleSpeed:<?php if (!get_option('mytheme_liteaccordioncyclespeed')) echo '6000'; else echo get_option('mytheme_liteaccordioncyclespeed'); ?>,	// time between slide cycles  
			easing:'<?php echo get_option('mytheme_liteaccordionease'); ?>',                       // custom easing function  
	
			theme:'basic',                        // basic, dark, light, or stitch  
			rounded:<?php echo get_option('mytheme_liteaccordionrounded'); ?>,	// square or rounded corners  
			enumerateSlides:false,                // put numbers on slides  
			linkable:false                
		}).find('.liteaccordion-caption:first').show();
	});
	</script>
	
	<?php } elseif ($slider=='tm') { ?>
	<script type='text/javascript'>
	jQuery(document).ready(function(){
		jQuery('.tmslider')._TMS({
			show:<?php if (!get_option('mytheme_tmshow')) echo '0'; else echo get_option('mytheme_tmshow'); ?>,
			pauseOnHover:<?php echo get_option('mytheme_tmpauseonhover'); ?>,
			prevBu:'.prev',
			nextBu:'.next',
			duration:<?php if (!get_option('mytheme_tmduration')) echo '10000'; else echo get_option('mytheme_tmduration'); ?>,
			preset:'<?php echo get_option('mytheme_tmeffect'); ?>',
			pagination:false,	//'.pagination',true,'<ul></ul>'
			slideshow:<?php if (!get_option('mytheme_tmslideshow')) echo '7000'; else echo get_option('mytheme_tmslideshow'); ?>,
			progressBar:false
		});
	});
	</script>
	
	<?php } elseif ($slider=='bgstretcher') { ?>
	<script type='text/javascript'>
	(function($){$(window).load(function(){
		$('#stretcher').bgStretcher({
			resizeProportionally:true,
			resizeAnimate:false,
			images:[<?php include_once(TEMPLATEPATH . '/slider.php'); ?>],
			imageWidth:<?php if (!get_option('mytheme_bgstretcherwidth')) echo '1024'; else echo get_option('mytheme_bgstretcherwidth'); ?>,
			imageHeight:<?php if (!get_option('mytheme_bgstretcherheight')) echo '768'; else echo get_option('mytheme_bgstretcherheight'); ?>,
			maxWidth:<?php if (!get_option('mytheme_bgstretchermaxwidth')) echo '"auto"'; else echo get_option('mytheme_bgstretchermaxwidth'); ?>,
			maxHeight:<?php if (!get_option('mytheme_bgstretchermaxheight')) echo '"auto"'; else echo get_option('mytheme_bgstretchermaxheight'); ?>,
			nextSlideDelay:<?php if (!get_option('mytheme_bgstretcherdelay')) echo '6000'; else echo get_option('mytheme_bgstretcherdelay'); ?>,
			slideShowSpeed:<?php if (!get_option('mytheme_bgstretcherspeed')) echo '1000'; else echo get_option('mytheme_bgstretcherspeed'); ?>,
			slideShow:true,
			transitionEffect:'<?php echo get_option('mytheme_bgstretchereffect'); ?>', // none, fade, simpleSlide, superSlide
			slideDirection:'<?php echo get_option('mytheme_bgstretcherslidedirection'); ?>', // N, S, W, E, (if superSlide - NW, NE, SW, SE)
			sequenceMode:'<?php echo get_option('mytheme_bgstretchermode'); ?>', // back, random
			buttonPrev:'',
			buttonNext:'',
			pagination:'#nav',
			anchoring:'<?php echo get_option('mytheme_bgstretcheranchor'); ?>', // right bottom center
			anchoringImg:'left top', // right bottom center
			preloadImg:false,
			startElementIndex:0,
			callbackfunction:null
		});
	}); })(jQuery);
	</script>
	
	<?php } ?>
	<?php } ?>

<?php } ?>