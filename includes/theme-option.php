<?php
// create custom plugin settings menu
add_action('admin_menu', 'pa_create_menu');

function pa_create_menu() {

	//create new top-level menu
	add_menu_page('PersianArt Panel', 'PersianArt', 'administrator', __FILE__, 'pa_general_settings', get_template_directory_uri().'/includes/images/icon.png', '2.1');

}

function pa_general_settings() {
	
	// here's the main function that will generate our options page
	if ( isset($_POST['update_themeoptions']) && $_POST['update_themeoptions'] == 'true' ) { themeoptions_update(); }

?>
	
	

<div id="themeoption" class="wrap">
	<div class="panelheader">
		<form method="POST" action="">
		<input type="hidden" name="update_themeoptions" value="true" />
		<span><?php _e('When you apply the desired changes, press this button', 'my_framework'); ?></span>
		<input type="submit" name="search" value="" class="updatebutton" />
	</div>
	
	
	<div class="panelbody">
		<div class="panelsidebar">
			<ul class="pa-accordion">
				<li class="sub-accordion">
					<div id="general" class="accordion-head">
					</div>
					<div class="accordion-content">
						<ul class="tabs">
							<li>
								<a href="#pagestyle-section"><?php _e('Page Style', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#logo-section"><?php _e('Logo', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#favicon-section"><?php _e('Favicon', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#background-section"><?php _e('Body Background', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#sidebar-section"><?php _e('Sidebar', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#trackingcode-section"><?php _e('Tracking Code & CSS', 'my_framework'); ?></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="sub-accordion">
					<div id="font" class="accordion-head">
					</div>
					<div class="accordion-content">
						<ul class="tabs">
							<li>
								<a href="#fontsize-section"><?php _e('Font Size', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#fontfamily-section"><?php _e('Font Family', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#fontupload-section"><?php _e('Font Upload', 'my_framework'); ?></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="sub-accordion">
					<div id="sliders" class="accordion-head">
					</div>
					<div class="accordion-content">
						<ul class="tabs">
							<li>
								<a href="#slider-section"><?php _e('Slider Status', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#nivoslider-section"><?php _e('Nivo Slider', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#kwicksslider-section"><?php _e('Kwicks Slider', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#showcaseslider-section"><?php _e('Showcase Slider', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#cycleslider-section"><?php _e('Cycle Slider', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#roundaboutslider-section"><?php _e('Roundabout Slider', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#liteaccordionslider-section"><?php _e('Liteaccordion Slider', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#tmslider-section"><?php _e('TM Slider', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#bgstretcherslider-section"><?php _e('Bgstretcher Slider', 'my_framework'); ?></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="sub-accordion">
					<div id="coloring" class="accordion-head">
					</div>
					<div class="accordion-content">
						<ul class="tabs">
							<li>
								<a href="#bodycolor-section"><?php _e('Body / General', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#topbarcolor-section"><?php _e('Top Bar', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#mainnavcolor-section"><?php _e('Main Navigation', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#topsearchcolor-section"><?php _e('Top Search', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#slogancolor-section"><?php _e('Slogan', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#breadcrumbcolor-section"><?php _e('Breadcrumb', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#sidebarcolor-section"><?php _e('Sidebar', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#footercolor-section"><?php _e('Footer', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#copyrightcolor-section"><?php _e('Copyright', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#postportcolor-section"><?php _e('Post / Portfolio', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#paginationcolor-section"><?php _e('Pagination', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#concomcolor-section"><?php _e('ContactForm / Comment', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#page404color-section"><?php _e('404 Page', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#backtotopcolor-section"><?php _e('Back to Top', 'my_framework'); ?></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="sub-accordion">
					<div id="elements" class="accordion-head">
					</div>
					<div class="accordion-content">
						<ul class="tabs">
							<li>
								<a href="#allbackground-section"><?php _e('All Backgrounds', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#topbar-section"><?php _e('Top Bar', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#topinfo-section"><?php _e('Top Information', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#topsearch-section"><?php _e('Top Search', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#mainnavigation-section"><?php _e('Main Navigation', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#slogan-section"><?php _e('Slogan', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#breadcrumb-section"><?php _e('Breadcrumb', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#backtotop-section"><?php _e('Back To Top', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#socialnetwork-section"><?php _e('Social Network', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#socialshare-section"><?php _e('Social Sharing', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#footeronoff-section"><?php _e('Footer Status', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#footerstyle-section"><?php _e('Footer Style', 'my_framework'); ?></a>
							</li>
							<li>
								<a href="#copyright-section"><?php _e('Copyright Setting', 'my_framework'); ?></a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
		
		
		
		
		<div class="custom-form">
			
			
			
			
			<div id="welcome-section">
				<h2><?php _e('Welcome', 'my_framework'); ?></h2>
					<div id="welcome">
					<?php _e('<p>Welcome To Setting Section</p>', 'my_framework'); ?>
					<?php _e('<strong>Unique Theme</strong>', 'my_framework'); ?>
					<?php _e('<p><span>You can apply your desired settings</span><span>for different sections</span>', 'my_framework'); ?></p>
				</div>
			</div>
			<!-- end of #welcom-section -->
			
			
			
			
			<div id="pagestyle-section">
				<h2><?php _e('Page Style', 'my_framework'); ?></h2>
				
				<div id="theme-skin" class="pa-option">
					<h4><?php _e('Select skin', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="themeskin">
						<?php $themeskin = get_option('mytheme_themeskin'); ?>
						<option value="" <?php if ($themeskin=='') { echo 'selected="selected"'; } ?>><?php _e('default', 'my_framework'); ?></option>
						<option value="blueviolet" <?php if ($themeskin=='blueviolet') { echo 'selected="selected"'; } ?>><?php _e('BlueViolet', 'my_framework'); ?></option>
						<option value="cadetblue" <?php if ($themeskin=='cadetblue') { echo 'selected="selected"'; } ?>><?php _e('CadetBlue', 'my_framework'); ?></option>
						<option value="coral" <?php if ($themeskin=='coral') { echo 'selected="selected"'; } ?>><?php _e('Coral', 'my_framework'); ?></option>
						<option value="crimson" <?php if ($themeskin=='crimson') { echo 'selected="selected"'; } ?>><?php _e('Crimson', 'my_framework'); ?></option>
						<option value="deeppink" <?php if ($themeskin=='deeppink') { echo 'selected="selected"'; } ?>><?php _e('DeepPink', 'my_framework'); ?></option>
						<option value="firebrick" <?php if ($themeskin=='firebrick') { echo 'selected="selected"'; } ?>><?php _e('FireBrick', 'my_framework'); ?></option>
						<option value="gold" <?php if ($themeskin=='gold') { echo 'selected="selected"'; } ?>><?php _e('Gold', 'my_framework'); ?></option>
						<option value="mediumaquamarine" <?php if ($themeskin=='mediumaquamarine') { echo 'selected="selected"'; } ?>><?php _e('MediumAquaMarine', 'my_framework'); ?></option>
						<option value="olive" <?php if ($themeskin=='olive') { echo 'selected="selected"'; } ?>><?php _e('Olive', 'my_framework'); ?></option>
						<option value="palevioletred" <?php if ($themeskin=='palevioletred') { echo 'selected="selected"'; } ?>><?php _e('PaleVioletRed', 'my_framework'); ?></option>
						<option value="redviolet" <?php if ($themeskin=='redviolet') { echo 'selected="selected"'; } ?>><?php _e('RedViolet', 'my_framework'); ?></option>
						<option value="rosybrown" <?php if ($themeskin=='rosybrown') { echo 'selected="selected"'; } ?>><?php _e('RosyBrown', 'my_framework'); ?></option>
						<option value="royalblue" <?php if ($themeskin=='royalblue') { echo 'selected="selected"'; } ?>><?php _e('RoyalBlue', 'my_framework'); ?></option>
						<option value="skyblue" <?php if ($themeskin=='skyblue') { echo 'selected="selected"'; } ?>><?php _e('SkyBlue', 'my_framework'); ?></option>
						<option value="teal" <?php if ($themeskin=='teal') { echo 'selected="selected"'; } ?>><?php _e('Teal', 'my_framework'); ?></option>
						<option value="yellowgreen" <?php if ($themeskin=='yellowgreen') { echo 'selected="selected"'; } ?>><?php _e('YellowGreen', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('<br />select your desired skin.', 'my_framework'); ?></div>
				</div>
				<div id="theme-style" class="pa-option">
					<h4><?php _e('theme style', 'my_framework'); ?></h4>
					<div class="row w110">
						<select name="themestyle">
							<?php $themestyle = get_option('mytheme_themestyle'); ?>
							<option value="boxed" <?php if ($themestyle=='boxed') { echo 'selected="selected"'; } ?>><?php _e('Boxed', 'my_framework'); ?></option>
							<option value="wide" <?php if ($themestyle=='wide') { echo 'selected="selected"'; } ?>><?php _e('Wide', 'my_framework'); ?></option>
							<option value="block" <?php if ($themestyle=='block') { echo 'selected="selected"'; } ?>><?php _e('block', 'my_framework'); ?></option>
						</select>
					</div>
					<div class="description"><?php _e('<br />select theme style (default, wide, boxed).', 'my_framework'); ?></div>
				</div>
				<div id="responsive-on-off" class="pa-option">
					<h4><?php _e('Responsive', 'my_framework'); ?></h4>
					<div class="row w110">
						<?php $responsiveonoff = get_option('mytheme_responsiveonoff'); ?>
						<label for="responsiveonoff" class="responsive-onoff"></label>
						<input type="hidden" name="responsiveonoff" value="false" />
						<input type="checkbox" name="responsiveonoff" id="responsiveonoff" value="true" <?php if ($responsiveonoff=='true') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />you can enable/disable responsive from here.', 'my_framework'); ?></div>
				</div>
				<div id="pagecomment-on-off" class="pa-option">
					<h4><?php _e('Page comment', 'my_framework'); ?></h4>
					<div class="row w110">
						<?php $pagecommentonoff = get_option('mytheme_pagecommentonoff'); ?>
						<label for="pagecommentonoff" class="pagecomment-onoff"></label>
						<input type="hidden" name="pagecommentonoff" value="false" />
						<input type="checkbox" name="pagecommentonoff" id="pagecommentonoff" value="true" <?php if ($pagecommentonoff=='true' || !$pagecommentonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />you can enable/disable page comment from here.', 'my_framework'); ?></div>
				</div>
				<div id="portpage-on-off" class="pa-option">
					<h4><?php _e('Display portfolio as blog', 'my_framework'); ?></h4>
					<div class="row w110">
						<?php $portpageonoff = get_option('mytheme_portpageonoff'); ?>
						<label for="portpageonoff" class="portpage-onoff"></label>
						<input type="hidden" name="portpageonoff" value="false" />
						<input type="checkbox" name="portpageonoff" id="portpageonoff" value="true" <?php if ($portpageonoff=='true') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />when it is on, portfolio page display as blog page.', 'my_framework'); ?></div>
				</div>
				<div id="allstyle-on-off" class="pa-option">
					<h4><?php _e('Display custom style', 'my_framework'); ?></h4>
					<div class="row w110">
						<?php $allstyleonoff = get_option('mytheme_allstyleonoff'); ?>
						<label for="allstyleonoff" class="allstyle-onoff"></label>
						<input type="hidden" name="allstyleonoff" value="false" />
						<input type="checkbox" name="allstyleonoff" id="allstyleonoff" value="true" <?php if ($allstyleonoff=='true' || !$allstyleonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('when it is on, your custom style will be used.<br />include your desired options in coloring section.', 'my_framework'); ?></div>
				</div>
				<div id="topheader-height" class="pa-option">
					<h4><?php _e('Top header height', 'my_framework'); ?></h4>
					<div class="row w110">
						<input type="text" name="topheaderheight" id="topheaderheight" size="4" value="<?php echo get_option('mytheme_topheaderheight'); ?>"/>
					</div>
					<div class="description"><?php _e('set <strong>"height"</strong> for top header (auto by default).<br />leave it blank for original size.<br />with "px" for ex. 200px', 'my_framework'); ?></div>
				</div>
				<div id="content-wrapper" class="pa-option">
					<h4><?php _e('content wrapper margin & radius <small>(usefull for default layout)</small>', 'my_framework'); ?></h4>
					<div class="row w110">
						<input type="text" name="maintopmargin" id="maintopmargin" size="4" value="<?php echo get_option('mytheme_maintopmargin'); ?>"/>
					</div>
					<div class="description"><?php _e('set <strong>"top margin"</strong> for content wrapper (60px by default).<br />leave it blank for original size.<br />with "px" for ex. 200px', 'my_framework'); ?></div>
					<div class="row w110">
						<input type="text" name="mainbottommargin" id="mainbottommargin" size="4" value="<?php echo get_option('mytheme_mainbottommargin'); ?>"/>
					</div>
					<div class="description"><?php _e('set <strong>"bottom margin"</strong> for content wrapper (60px by default).<br />leave it blank for original size.<br />with "px" for ex. 200px', 'my_framework'); ?></div>
					<div class="row w110">
						<input type="text" name="mainradius" id="mainradius" size="4" value="<?php echo get_option('mytheme_mainradius'); ?>"/>
					</div>
					<div class="description"><?php _e('set <strong>"radius"</strong> for content wrapper (20px by default).<br />leave it blank for original size.<br />with "px" for ex. 200px', 'my_framework'); ?></div>
				</div>
				<div id="bodywrap-properties" class="pa-option">
					<h4><?php _e('body wrapper properties <small>(usefull for boxed layout)</small>', 'my_framework'); ?></h4>
					<div class="row w110">
						<?php $bodywrapshadowonoff = get_option('mytheme_bodywrapshadowonoff'); ?>
						<label for="bodywrapshadowonoff" class="bodywrapshadow-onoff"></label>
						<input type="hidden" name="bodywrapshadowonoff" value="false" />
						<input type="checkbox" name="bodywrapshadowonoff" id="bodywrapshadowonoff" value="true" <?php if ($bodywrapshadowonoff=='true' || !$bodywrapshadowonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />disable/enable <strong>"shadow"</strong> for body wrapper.', 'my_framework'); ?></div>
					<div class="row w110">
						<input type="text" name="bodywraptopmargin" id="bodywraptopmargin" size="4" value="<?php echo get_option('mytheme_bodywraptopmargin'); ?>"/>
					</div>
					<div class="description"><?php _e('set <strong>"top margin"</strong> for body wrapper (0px by default).<br />leave it blank for original size.<br />with "px" for ex. 200px', 'my_framework'); ?></div>
					<div class="row w110">
						<input type="text" name="bodywrapbottommargin" id="bodywrapbottommargin" size="4" value="<?php echo get_option('mytheme_bodywrapbottommargin'); ?>"/>
					</div>
					<div class="description"><?php _e('set <strong>"bottom margin"</strong> for body wrapper (0px by default).<br />leave it blank for original size.<br />with "px" for ex. 200px', 'my_framework'); ?></div>
				</div>
			</div>
			<!-- end of #pagestyle-section -->
			
			
			
			
			<div id="logo-section">
				<h2><?php _e('Logo Image', 'my_framework'); ?></h2>
				<div id="logo-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Display logo', 'my_framework'); ?></h4>
						<?php $logoimageonoff = get_option('mytheme_logoimageonoff'); ?>
						<label for="logoimageonoff" class="logoimage-onoff"></label>
						<input type="hidden" name="logoimageonoff" value="false" />
						<input type="checkbox" name="logoimageonoff" id="logoimageonoff" value="true" <?php if ($logoimageonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your logo.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="logo" class="pa-option">
					<div class="row">
						<?php $logo_src = get_option('mytheme_logoimage'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($logo_src, false, 200, 100); ?>		
						</div>
						<label for="logoimage" class="logoimage"><h4><?php _e('Upload Your Logo', 'my_framework'); ?></h4></label>
						<input type="text" name="logoimage" id="logoimage" class="upload-text" size="" value="<?php echo get_option('mytheme_logoimage'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('<br />Choose and upload your logo from here.', 'my_framework'); ?></div>
					<div class="row">
						<input type="text" name="logowidth" id="logowidth" size="4" value="<?php echo get_option('mytheme_logowidth'); ?>"/>
						<div class="description"><?php _e('set <strong>"width"</strong> for logo.<br />leave it blank for original size.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<input type="text" name="logoheight" id="logoheight" size="4" value="<?php echo get_option('mytheme_logoheight'); ?>"/>
						<div class="description"><?php _e('set <strong>"height"</strong> for logo.<br />leave it blank for original size.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="logo-margin" class="pa-option">
					<h4><?php _e('Logo margin size', 'my_framework'); ?></h4>
					<div class="row">
						<input type="text" name="logomargintop" id="logomargintop" size="4" value="<?php echo get_option('mytheme_logomargintop'); ?>"/>
						<div class="description"><?php _e('set <strong>"top margin"</strong> for logo (20px by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<input type="text" name="logomarginleft" id="logomarginleft" size="4" value="<?php echo get_option('mytheme_logomarginleft'); ?>"/>
						<div class="description"><?php _e('set <strong>"left margin"</strong> for logo (0px by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<input type="text" name="logomarginbottom" id="logomarginbottom" size="4" value="<?php echo get_option('mytheme_logomarginbottom'); ?>"/>
						<div class="description"><?php _e('set <strong>"bottom margin"</strong> for logo (20px by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #logo-secion -->
			
			
			
			
			<div id="favicon-section">
				<h2><?php _e('Favicon Image', 'my_framework'); ?></h2>
				<div id="favicon-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Display favicon', 'my_framework'); ?></h4>
						<?php $faviconimageonoff = get_option('mytheme_faviconimageonoff'); ?>
						<label for="faviconimageonoff" class="faviconimage-onoff"></label>
						<input type="hidden" name="faviconimageonoff" value="false" />
						<input type="checkbox" name="faviconimageonoff" id="faviconimageonoff" value="true" <?php if ($faviconimageonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your favicon.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="favicon" class="pa-option">
					<div class="row">
						<div class="example-image">
						<?php $favicon_src = get_option('mytheme_faviconimage'); ?>
						<?php echo get_custom_image_from_src ($favicon_src, false, 200, 100); ?>		
						</div>
						<label for="faviconimage" class="faviconimage"><h4><?php _e('Upload Your Favicon', 'my_framework'); ?></h4></label>
						<input type="text" name="faviconimage" id="faviconimage" class="upload-text" size="" value="<?php echo get_option('mytheme_faviconimage'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your favicon.<br />Best siz is 16x16 px.', 'my_framework'); ?></div>
				</div>
			</div>
			<!-- end of #favicon-section -->
			
			
			
			<div id="background-section">
				<h2><?php _e('Background Setting', 'my_framework'); ?></h2>
				<div id="bodybackground-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Display background image', 'my_framework'); ?></h4>
						<?php $bodyimageonoff = get_option('mytheme_bodyimageonoff'); ?>
						<label for="bodyimageonoff" class="bodyimage-onoff"></label>
						<input type="hidden" name="bodyimageonoff" value="false" />
						<input type="checkbox" name="bodyimageonoff" id="bodyimageonoff" value="true" <?php if ($bodyimageonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your body background image.<br />this is only for background image no pattern`s', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="bodybackground" class="pa-option">
					<div class="row">
						<?php $body_src = get_option('mytheme_bodyimage'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($body_src, false, 200, 100); ?>		
						</div>
						<label for="bodyimage" class="bodyimage"><h4><?php _e('Upload Your body background', 'my_framework'); ?></h4></label>
						<input type="text" name="bodyimage" id="bodyimage" class="upload-text" size="" value="<?php echo get_option('mytheme_bodyimage'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="row">
					<input type="text" name="bodyimageleft" id="bodyimageleft" size="4" value="<?php echo get_option('mytheme_bodyimageleft'); ?>"/>
					<div class="description"><?php _e('set <strong>"horizontal status"</strong>. (0 or center by default).<br />use text <strong>left</strong> or <strong>center</strong> or <strong>right</strong>.<br />use unit <strong>px</strong> or <strong>%</strong> etc. for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bodyimagetop" id="bodyimagetop" size="4" value="<?php echo get_option('mytheme_bodyimagetop'); ?>"/>
					<div class="description"><?php _e('set <strong>"vertical status"</strong>. (0 or center by default).<br />use text <strong>top</strong> or <strong>center</strong> or <strong>bottom</strong>.<br />use unit <strong>px</strong> or <strong>%</strong> etc. for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="bodyimagerepeat">
						<?php $bodyimagerepeat = get_option('mytheme_bodyimagerepeat'); ?>
						<option value="repeat" <?php if ($bodyimagerepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($bodyimagerepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($bodyimagerepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($bodyimagerepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />specify repeat parameter. (repeat by default)', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $bodyimagefix = get_option('mytheme_bodyimagefix'); ?>
						<label for="bodyimagefix" class="bodyimagefix"></label>
						<input type="hidden" name="bodyimagefix" value="" />
						<input type="checkbox" name="bodyimagefix" id="bodyimagefix" value="fixed" <?php if ($bodyimagefix=='fixed') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('image attachment fix<br />when it is on background image is <strong>"fixed"</strong>.<br />only background image', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="bodypatterns" class="pa-option">
				<?php $bodypattern = get_option('mytheme_bodypattern'); ?>
				<h4><?php _e('Body pattern', 'my_framework'); ?></h4>
				
					<?php for ($i=1; $i<28; $i++ ) { ?>
					<div class="row w150">
						<label for="bodypattern<?php echo $i; ?>" class="bodypattern<?php echo $i; ?>"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/bodypattern.png" alt="" /></label>
						<input type="radio" name="bodypattern" id="bodypattern<?php echo $i; ?>" value="pattern<?php echo $i; ?>" <?php if ($bodypattern=='pattern'.$i) { echo 'checked="checked"'; } ?> />
					</div>
					<?php } ?>
					<div class="row w150">
						<label for="nopattern" class="nopattern"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/nopattern.png" alt="" /></label>
						<input type="radio" name="bodypattern" id="nopattern" value="nopattern" <?php if ($bodypattern=='nopattern' || !$bodypattern) { echo 'checked="checked"'; } ?> />
					</div>
					
					<div id="bodypatternfix-on-off">
					<div class="row">
						<?php $bodypatternfix = get_option('mytheme_bodypatternfix'); ?>
						<label for="bodypatternfix" class="bodypatternfix"></label>
						<input type="hidden" name="bodypatternfix" value="" />
						<input type="checkbox" name="bodypatternfix" id="bodypatternfix" value="fixed" <?php if ($bodypatternfix=='fixed') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('pattern attachment fix.<br />when it is on background image is <strong>"fixed"</strong>.<br />only pattern`s.', 'my_framework'); ?></div>
					</div>
					</div>
				</div>
			</div>
			<!-- end of #background-section -->
			
			
			
			
			<div id="sidebar-section">
				<h2><?php _e('Sidebar Setting', 'my_framework'); ?></h2>
				<div id="sidebar-add" class="pa-option">
					<?php $sidebaraddhide = get_option('mytheme_sidebaraddvalues'); ?>
					<h4><?php _e('Add sidebar', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebaradd" id="sidebaradd" size="4" class="w200" value=""/>
					<input type="hidden" name="sidebaraddvalues" id="sidebaraddvalues" size="4" value="<?php echo get_option('mytheme_sidebaraddvalues'); ?>"/>
					<div id="add-sidebar" class="add-sidebar"></div>
					
					<div id="added-sidebar-wrapper">
					
						<div id="sidebar-item" class="sample-sidebar-item">
							<div class="added-sidebar-item-del"></div>
							<div class="added-sidebar-item-title"></div>
							<input type="hidden" id="created-sidebar">
						</div>
						
						<?php 
						$sidebaradd = explode('|', $sidebaraddhide);
						for ($i=0; $i<sizeof($sidebaradd)-1 ;$i++) {
						?>
						
						<div id="sidebar-item" class="added-sidebar-item">
							<div class="added-sidebar-item-del"></div>
							<div class="added-sidebar-item-title"><?php echo $sidebaradd[$i]; ?></div>
							<input type="hidden" name="created-sidebar-<?php echo $i; ?>" id="created-sidebar-<?php echo $i; ?>" value="<?php echo $sidebaradd[$i]; ?>">
						</div>
							
						<?php } ?>
						
					</div>
			
					</div>
					<div class="description full"><?php _e('create additional sidebar.<br /> for delete items, click on "x" button.', 'my_framework'); ?></div>
				</div>
				<div id="sidebarradius" class="pa-option">
					<h4><?php _e('Select right sidebar radius', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebarrightborderradius" id="sidebarrightborderradius" size="4" value="<?php echo get_option('mytheme_sidebarrightborderradius'); ?>"/>
					<div class="description"><?php _e('set radius for <strong>"right sidebar"</strong>.<br />It is used when you set the background color.<br />use "px" or "%" etc. for ex. 20px', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sidebarleftradius" class="pa-option">
					<h4><?php _e('Select left sidebar radius', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebarleftborderradius" id="sidebarleftborderradius" size="4" value="<?php echo get_option('mytheme_sidebarleftborderradius'); ?>"/>
					<div class="description"><?php _e('set radius for <strong>"left sidebar"</strong>.<br />It is used when you set the background color.<br />use "px" or "%" etc. for ex. 20px', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sidebardivider" class="pa-option">
				<h4><?php _e('Display sidebar divider', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $sidebardivideronoff = get_option('mytheme_sidebardivideronoff'); ?>
					<label for="sidebardivideronoff" class="copyright-onoff"></label>
					<input type="hidden" name="sidebardivideronoff" value="false" />
					<input type="checkbox" name="sidebardivideronoff" id="sidebardivideronoff" value="true" <?php if ($sidebardivideronoff=='true') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('show or hide divider between sidebar and content.<br />for set divider color go to coloring.', 'my_framework'); ?></div>
				</div>
				<div id="sidebarsinglepost" class="pa-option">
					<?php $sidebarsinglepost = get_option('mytheme_sidebarsinglepost'); ?>
					<h4><?php _e('Select sidebar for <strong>"Singlepost Page"</strong>', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="sidebarsinglepost1" class="sidebarright"></label>
					<input type="radio" name="sidebarsinglepost" id="sidebarsinglepost1" value="right" <?php if ($sidebarsinglepost=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarsinglepost2" class="sidebarleft"></label>
					<input type="radio" name="sidebarsinglepost" id="sidebarsinglepost2" value="left" <?php if ($sidebarsinglepost=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarsinglepost3" class="sidebarboth"></label>
					<input type="radio" name="sidebarsinglepost" id="sidebarsinglepost3" value="both" <?php if ($sidebarsinglepost=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarsinglepost4" class="sidebarno"></label>
					<input type="radio" name="sidebarsinglepost" id="sidebarsinglepost4" value="no" <?php if ($sidebarsinglepost=='no' || !$sidebarsinglepost) { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				<div id="sidebarsingleport" class="pa-option">
					<?php $sidebarsingleport = get_option('mytheme_sidebarsingleport'); ?>
					<h4><?php _e('Select sidebar for <strong>"Singleportfolio Page"</strong>', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="sidebarsingleport1" class="sidebarright"></label>
					<input type="radio" name="sidebarsingleport" id="sidebarsingleport1" value="right" <?php if ($sidebarsingleport=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarsingleport2" class="sidebarleft"></label>
					<input type="radio" name="sidebarsingleport" id="sidebarsingleport2" value="left" <?php if ($sidebarsingleport=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarsingleport3" class="sidebarboth"></label>
					<input type="radio" name="sidebarsingleport" id="sidebarsingleport3" value="both" <?php if ($sidebarsingleport=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarsingleport4" class="sidebarno"></label>
					<input type="radio" name="sidebarsingleport" id="sidebarsingleport4" value="no" <?php if ($sidebarsingleport=='no' || !$sidebarsingleport) { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				<div id="sidebarcategory" class="pa-option">
					<?php $sidebarcategory = get_option('mytheme_sidebarcategory'); ?>
					<h4><?php _e('Select sidebar for <strong>"Category Page"</strong>', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="sidebarcategory1" class="sidebarright"></label>
					<input type="radio" name="sidebarcategory" id="sidebarcategory1" value="right" <?php if ($sidebarcategory=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarcategory2" class="sidebarleft"></label>
					<input type="radio" name="sidebarcategory" id="sidebarcategory2" value="left" <?php if ($sidebarcategory=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarcategory3" class="sidebarboth"></label>
					<input type="radio" name="sidebarcategory" id="sidebarcategory3" value="both" <?php if ($sidebarcategory=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarcategory4" class="sidebarno"></label>
					<input type="radio" name="sidebarcategory" id="sidebarcategory4" value="no" <?php if ($sidebarcategory=='no' || !$sidebarcategory) { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				<div id="sidebararchive" class="pa-option">
					<?php $sidebararchive = get_option('mytheme_sidebararchive'); ?>
					<h4><?php _e('Select sidebar for <strong>"Archive Page</strong>', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="sidebararchive1" class="sidebarright"></label>
					<input type="radio" name="sidebararchive" id="sidebararchive1" value="right" <?php if ($sidebararchive=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebararchive2" class="sidebarleft"></label>
					<input type="radio" name="sidebararchive" id="sidebararchive2" value="left" <?php if ($sidebararchive=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebararchive3" class="sidebarboth"></label>
					<input type="radio" name="sidebararchive" id="sidebararchive3" value="both" <?php if ($sidebararchive=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebararchive4" class="sidebarno"></label>
					<input type="radio" name="sidebararchive" id="sidebararchive4" value="no" <?php if ($sidebararchive=='no' || !$sidebararchive) { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				<div id="sidebarauthor" class="pa-option">
					<?php $sidebarauthor = get_option('mytheme_sidebarauthor'); ?>
					<h4><?php _e('Select sidebar for <strong>"Author Page"</strong>', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="sidebarauthor1" class="sidebarright"></label>
					<input type="radio" name="sidebarauthor" id="sidebarauthor1" value="right" <?php if ($sidebarauthor=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarauthor2" class="sidebarleft"></label>
					<input type="radio" name="sidebarauthor" id="sidebarauthor2" value="left" <?php if ($sidebarauthor=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarauthor3" class="sidebarboth"></label>
					<input type="radio" name="sidebarauthor" id="sidebarauthor3" value="both" <?php if ($sidebarauthor=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarauthor4" class="sidebarno"></label>
					<input type="radio" name="sidebarauthor" id="sidebarauthor4" value="no" <?php if ($sidebarauthor=='no' || !$sidebarauthor) { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				<div id="sidebartag" class="pa-option">
					<?php $sidebartag = get_option('mytheme_sidebartag'); ?>
					<h4><?php _e('Select sidebar for <strong>"Tag Page"</strong>', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="sidebartag1" class="sidebarright"></label>
					<input type="radio" name="sidebartag" id="sidebartag1" value="right" <?php if ($sidebartag=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebartag2" class="sidebarleft"></label>
					<input type="radio" name="sidebartag" id="sidebartag2" value="left" <?php if ($sidebartag=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebartag3" class="sidebarboth"></label>
					<input type="radio" name="sidebartag" id="sidebartag3" value="both" <?php if ($sidebartag=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebartag4" class="sidebarno"></label>
					<input type="radio" name="sidebartag" id="sidebartag4" value="no" <?php if ($sidebartag=='no' || !$sidebartag) { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				<div id="sidebarsearch" class="pa-option">
					<?php $sidebarsearch = get_option('mytheme_sidebarsearch'); ?>
					<h4><?php _e('Select sidebar for <strong>"Search Page"</strong>', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="sidebarsearch1" class="sidebarright"></label>
					<input type="radio" name="sidebarsearch" id="sidebarsearch1" value="right" <?php if ($sidebarsearch=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarsearch2" class="sidebarleft"></label>
					<input type="radio" name="sidebarsearch" id="sidebarsearch2" value="left" <?php if ($sidebarsearch=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarsearch3" class="sidebarboth"></label>
					<input type="radio" name="sidebarsearch" id="sidebarsearch3" value="both" <?php if ($sidebarsearch=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="sidebarsearch4" class="sidebarno"></label>
					<input type="radio" name="sidebarsearch" id="sidebarsearch4" value="no" <?php if ($sidebarsearch=='no' || !$sidebarsearch) { echo 'checked="checked"'; } ?> />
					</div>
				</div>
			</div>
			<!-- end of #sidebar-section -->
			
			
			
			
			<div id="trackingcode-section">
				<h2><?php _e('Tracking Code', 'my_framework'); ?></h2>
				<div id="trackingcode-on-off" class="pa-option">
				<h4><?php _e('Enable tracking code', 'my_framework'); ?></h4>
					<div class="row">
					<?php $trackingcodeonoff = get_option('mytheme_trackingcodeonoff'); ?>
					<label for="trackingcodeonoff" class="trackingcode-onoff"></label>
					<input type="hidden" name="trackingcodeonoff" value="false" />
					<input type="checkbox" name="trackingcodeonoff" id="trackingcodeonoff" value="true" <?php if ($trackingcodeonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />from here you can disable or enable tracking code.', 'my_framework'); ?></div>
					</div>
				</div>
				
				<div id="tracking-code" class="pa-option">
					<?php $trackingcode = get_option('mytheme_trackingcode'); ?>
					<h4><?php _e('Past tracking code', 'my_framework'); ?></h4>
					<div class="row">
					<label for="trackingcode" class="trackingcode"></label>
					<textarea name="trackingcode" id="trackingcode" cols="1" rows="1"><?php echo stripcslashes(esc_html(get_option('mytheme_trackingcode'))); ?></textarea>
					</div>
					<div class="description full"><?php _e('You can past your tracking code here to appear in your pages.<br />This is a JavaScript code that is something like this:<br /><code>&lt;script type="text/javascript"&gt; ... &lt;/script&gt;</code>', 'my_framework'); ?></div>
				</div>
				<h2><?php _e('Custom CSS', 'my_framework'); ?></h2>
				<div id="customcss-on-off" class="pa-option">
				<h4><?php _e('Enable custom css', 'my_framework'); ?></h4>
					<div class="row">
					<?php $customcssonoff = get_option('mytheme_customcssonoff'); ?>
					<label for="customcssonoff" class="customcss-onoff"></label>
					<input type="hidden" name="customcssonoff" value="false" />
					<input type="checkbox" name="customcssonoff" id="customcssonoff" value="true" <?php if ($customcssonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />from here you can disable or enable custom css.', 'my_framework'); ?></div>
					</div>
				</div>
				
				<div id="custom-css" class="pa-option">
					<?php $customcss = get_option('mytheme_customcss'); ?>
					<h4><?php _e('type custom css', 'my_framework'); ?></h4>
					<div class="row">
					<label for="customcss" class="customcss"></label>
					<textarea name="customcss" id="customcss" cols="1" rows="1"><?php echo stripcslashes(esc_html(get_option('mytheme_customcss'))); ?></textarea>
					</div>
					<div class="description full"><?php _e('<br />You can type custom css here.', 'my_framework'); ?></div>
				</div>
			</div>
			<!-- end of #customcss-section -->
			
			
			
			<div id="fontsize-section">
				<h2><?php _e('Font Size', 'my_framework'); ?></h2>
				<div id="bodyfont-size" class="pa-option">
				<h4><?php _e('Set body font size', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="bodyfontsize" id="bodyfontsize" size="4" value="<?php echo get_option('mytheme_bodyfontsize'); ?>"/>
					<div class="description"><?php _e('set font size for <strong>"body"</strong>. (12px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="navfont-size" class="pa-option">
				<h4><?php _e('Set main navigation font size', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="navfontsize" id="navfontsize" size="4" value="<?php echo get_option('mytheme_navfontsize'); ?>"/>
					<div class="description"><?php _e('set font size for <strong>"main navigation"</strong>. (14px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sidebarhfont-size" class="pa-option">
				<h4><?php _e('Set sidebar heading font size', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebarhfontsize" id="sidebarhfontsize" size="4" value="<?php echo get_option('mytheme_sidebarhfontsize'); ?>"/>
					<div class="description"><?php _e('set font size for <strong>"sidebar heading"</strong>. (16px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="footerhfont-size" class="pa-option">
				<h4><?php _e('Set footer heading font size', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="footerhfontsize" id="footerhfontsize" size="4" value="<?php echo get_option('mytheme_footerhfontsize'); ?>"/>
					<div class="description"><?php _e('set font size for <strong>"footer heading"</strong>. (14px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="widgethfont-size" class="pa-option">
				<h4><?php _e('Set widget title font size', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="widgethfontsize" id="widgethfontsize" size="4" value="<?php echo get_option('mytheme_widgethfontsize'); ?>"/>
					<div class="description"><?php _e('set font size for <strong>"widgets title"</strong>. (13px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sloganfont-size" class="pa-option">
				<h4><?php _e('Set slogan font size', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sloganfontsize" id="sloganfontsize" size="4" value="<?php echo get_option('mytheme_sloganfontsize'); ?>"/>
					<div class="description"><?php _e('set font size for <strong>"slogan"</strong>. (26px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="stunningtextfont-size" class="pa-option">
				<h4><?php _e('Set stunning text font size', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="stunningtextfontsize" id="stunningtextfontsize" size="4" value="<?php echo get_option('mytheme_stunningtextfontsize'); ?>"/>
					<div class="description"><?php _e('set font size for <strong>"stunning text"</strong>. (22px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="font-size" class="pa-option">
				<h4><?php _e('Set font size for headings', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="fontsizeh1" id="fontsizeh1" size="4" value="<?php echo get_option('mytheme_fontsizeh1'); ?>"/>
					<div class="description"><?php _e('set font-size for <strong>"h1"</strong>. (24px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?> </div>
					</div>
					<div class="row">
					<input type="text" name="fontsizeh2" id="fontsizeh2" size="4" value="<?php echo get_option('mytheme_fontsizeh2'); ?>"/>
					<div class="description"><?php _e('set font-size for <strong>"h2"</strong>. (20px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="fontsizeh3" id="fontsizeh3" size="4" value="<?php echo get_option('mytheme_fontsizeh3'); ?>"/>
					<div class="description"><?php _e('set font-size for <strong>"h3"</strong>. (16px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="fontsizeh4" id="fontsizeh4" size="4" value="<?php echo get_option('mytheme_fontsizeh4'); ?>"/>
					<div class="description"><?php _e('set font-size for <strong>"h4"</strong>. (14px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="fontsizeh5" id="fontsizeh5" size="4" value="<?php echo get_option('mytheme_fontsizeh5'); ?>"/>
					<div class="description"><?php _e('set font-size for <strong>"h5"</strong>. (13px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="fontsizeh6" id="fontsizeh6" size="4" value="<?php echo get_option('mytheme_fontsizeh6'); ?>"/>
					<div class="description"><?php _e('set font-size for <strong>"h6"</strong>. (12px by default)<br />use "px" or "em" or other unit. for ex. 36px or 2em', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #fontsize-section -->
			
			
			
			<div id="fontfamily-section">
				<h2><?php _e('Font Settings', 'my_framework'); ?></h2>
				<div id="font-body" class="pa-option">
				<h4><?php _e('Body font', 'my_framework'); ?></h4>
					<div class="row">
					<?php include_once(TEMPLATEPATH . '/includes/misc/all-font.php'); ?>
					<select name="fontbody" id="fontbody">
						<?php $fontbody = get_option('mytheme_fontbody'); ?>
						<option value="" <?php if ($fontbody=='') { echo 'selected="selected"'; } ?>><?php _e('default', 'my_framework'); ?></option>
						
						<optgroup label="Upload Font">
						<?php sort($upload_font_array);
						foreach ($upload_font_array as $value)
						{ $fontbody_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fontbody_type ?>" <?php if ($fontbody == $fontbody_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Cufon Font">
						<?php sort($cufon_font_array);
						foreach ($cufon_font_array as $value)
						{ $fontbody_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fontbody_type ?>" <?php if ($fontbody == $fontbody_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Google Font">
						<?php sort($google_font_array);
						foreach ($google_font_array as $value)
						{ $fontbody_type = $value['name'].'|'.$value['type'] ?>
						<option value="<?php echo $fontbody_type ?>" <?php if ($fontbody == $fontbody_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
					</select>
					<div id="font-body-example" class="font-example"><?php _e('The Sample Text', 'my_framework'); ?></div>
					</div>
					<div class="description full"><?php _e('<br />replace desired font for body.<br />recommended don`t use cufon as body font.', 'my_framework'); ?></div>
				</div>
				<div id="font-header" class="pa-option">
				<h4><?php _e('Headings font', 'my_framework'); ?></h4>
					<div class="row">
					<select name="fonth" id="fonth">
						<?php $fonth = get_option('mytheme_fonth'); ?>
						<option value="" <?php if ($fonth=='') { echo 'selected="selected"'; } ?>><?php _e('default', 'my_framework'); ?></option>
						
						<optgroup label="Upload Font">
						<?php sort($upload_font_array);
						foreach ($upload_font_array as $value)
						{ $fonth_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fonth_type ?>" <?php if ($fonth == $fonth_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Cufon Font">
						<?php sort($cufon_font_array);
						foreach ($cufon_font_array as $value)
						{ $fonth_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fonth_type ?>" <?php if ($fonth == $fonth_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Google Font">
						<?php sort($google_font_array);
						foreach ($google_font_array as $value)
						{ $fonth_type = $value['name'].'|'.$value['type'] ?>
						<option value="<?php echo $fonth_type ?>" <?php if ($fonth == $fonth_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
					</select>
					<div id="font-header-example" class="font-example"><?php _e('The Sample Text', 'my_framework'); ?></div>
					</div>
					<div class="description full"><?php _e('<br />replace desired font for all headings except H1.', 'my_framework'); ?></div>
				</div>
				<div id="font-mainnav" class="pa-option">
				<h4><?php _e('Main navigation font', 'my_framework'); ?></h4>
					<div class="row">
					<select name="fontmainnav" id="fontmainnav">
						<?php $fontmainnav = get_option('mytheme_fontmainnav'); ?>
						<option value="" <?php if ($fontmainnav=='') { echo 'selected="selected"'; } ?>><?php _e('default', 'my_framework'); ?></option>
						
						<optgroup label="Upload Font">
						<?php sort($upload_font_array);
						foreach ($upload_font_array as $value)
						{ $fontmainnav_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fontmainnav_type ?>" <?php if ($fontmainnav == $fontmainnav_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Cufon Font">
						<?php sort($cufon_font_array);
						foreach ($cufon_font_array as $value)
						{ $fontmainnav_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fontmainnav_type ?>" <?php if ($fontmainnav == $fontmainnav_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Google Font">
						<?php sort($google_font_array);
						foreach ($google_font_array as $value)
						{ $fontmainnav_type = $value['name'].'|'.$value['type'] ?>
						<option value="<?php echo $fontmainnav_type ?>" <?php if ($fontmainnav == $fontmainnav_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
					</select>
					<div id="font-mainnav-example" class="font-example"><?php _e('The Sample Text', 'my_framework'); ?></div>
					</div>
					<div class="description full"><?php _e('<br />replace desired font for main navigation.', 'my_framework'); ?></div>
				</div>
				<div id="font-header-sidebar" class="pa-option">
				<h4><?php _e('Sidebar widgets title font', 'my_framework'); ?></h4>
					<div class="row">
					<select name="fonthsidebar" id="fonthsidebar">
						<?php $fonthsidebar = get_option('mytheme_fonthsidebar'); ?>
						<option value="" <?php if ($fonthsidebar=='') { echo 'selected="selected"'; } ?>><?php _e('default', 'my_framework'); ?></option>
						
						<optgroup label="Upload Font">
						<?php sort($upload_font_array);
						foreach ($upload_font_array as $value)
						{ $fonthsidebar_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fonthsidebar_type ?>" <?php if ($fonthsidebar == $fonthsidebar_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						
						<optgroup label="Cufon Font">
						<?php sort($cufon_font_array);
						foreach ($cufon_font_array as $value)
						{ $fonthsidebar_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fonthsidebar_type ?>" <?php if ($fonthsidebar == $fonthsidebar_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Google Font">
						<?php sort($google_font_array);
						foreach ($google_font_array as $value)
						{ $fonthsidebar_type = $value['name'].'|'.$value['type'] ?>
						<option value="<?php echo $fonthsidebar_type ?>" <?php if ($fonthsidebar == $fonthsidebar_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
					</select>
					<div id="font-header-sidebar-example" class="font-example"><?php _e('The Sample Text', 'my_framework'); ?></div>
					</div>
					<div class="description full"><?php _e('<br />replace desired font for sidebar widget title.', 'my_framework'); ?></div>
				</div>
				<div id="font-header-footer" class="pa-option">
				<h4><?php _e('Footer widgets title font', 'my_framework'); ?></h4>
					<div class="row">
					<select name="fonthfooter" id="fonthfooter">
						<?php $fonthfooter = get_option('mytheme_fonthfooter'); ?>
						<option value="" <?php if ($fonthfooter=='') { echo 'selected="selected"'; } ?>><?php _e('default', 'my_framework'); ?></option>
						
						<optgroup label="Upload Font">
						<?php sort($upload_font_array);
						foreach ($upload_font_array as $value)
						{ $fonthfooter_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fonthfooter_type ?>" <?php if ($fonthfooter == $fonthfooter_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Cufon Font">
						<?php sort($cufon_font_array);
						foreach ($cufon_font_array as $value)
						{ $fonthfooter_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fonthfooter_type ?>" <?php if ($fonthfooter == $fonthfooter_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Google Font">
						<?php sort($google_font_array);
						foreach ($google_font_array as $value)
						{ $fonthfooter_type = $value['name'].'|'.$value['type'] ?>
						<option value="<?php echo $fonthfooter_type ?>" <?php if ($fonthfooter == $fonthfooter_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
					</select>
					<div id="font-header-footer-example" class="font-example"><?php _e('The Sample Text', 'my_framework'); ?></div>
					</div>
					<div class="description full"><?php _e('<br />replace desired font for footer widget title.', 'my_framework'); ?></div>
				</div>
				<div id="font-slogan" class="pa-option">
				<h4><?php _e('Slogan font', 'my_framework'); ?></h4>
					<div class="row">
					<select name="fontslogan" id="fontslogan">
						<?php $fontslogan = get_option('mytheme_fontslogan'); ?>
						<option value="" <?php if ($fontslogan=='') { echo 'selected="selected"'; } ?>><?php _e('default', 'my_framework'); ?></option>
						
						<optgroup label="Upload Font">
						<?php sort($upload_font_array);
						foreach ($upload_font_array as $value)
						{ $fontslogan_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fontslogan_type ?>" <?php if ($fontslogan == $fontslogan_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Cufon Font">
						<?php sort($cufon_font_array);
						foreach ($cufon_font_array as $value)
						{ $fontslogan_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fontslogan_type ?>" <?php if ($fontslogan == $fontslogan_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Google Font">
						<?php sort($google_font_array);
						foreach ($google_font_array as $value)
						{ $fontslogan_type = $value['name'].'|'.$value['type'] ?>
						<option value="<?php echo $fontslogan_type ?>" <?php if ($fontslogan == $fontslogan_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
					</select>
					<div id="font-slogan-example" class="font-example"><?php _e('The Sample Text', 'my_framework'); ?></div>
					</div>
					<div class="description full"><?php _e('<br />replace desired font for slogan text.', 'my_framework'); ?></div>
				</div>
				<div id="font-stunningtext" class="pa-option">
				<h4><?php _e('Stunning text font', 'my_framework'); ?></h4>
					<div class="row">
					<select name="fontstunningtext" id="fontstunningtext">
						<?php $fontstunningtext = get_option('mytheme_fontstunningtext'); ?>
						<option value="" <?php if ($fontstunningtext=='') { echo 'selected="selected"'; } ?>><?php _e('default', 'my_framework'); ?></option>
						
						<optgroup label="Upload Font">
						<?php sort($upload_font_array);
						foreach ($upload_font_array as $value)
						{ $fontstunningtext_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fontstunningtext_type ?>" <?php if ($fontstunningtext == $fontstunningtext_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Cufon Font">
						<?php sort($cufon_font_array);
						foreach ($cufon_font_array as $value)
						{ $fontstunningtext_type = $value['name'].'|'.$value['type'].'|'.$value['path'] ?>
						<option value="<?php echo $fontstunningtext_type ?>" <?php if ($fontstunningtext == $fontstunningtext_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
						<optgroup label="Google Font">
						<?php sort($google_font_array);
						foreach ($google_font_array as $value)
						{ $fontstunningtext_type = $value['name'].'|'.$value['type'] ?>
						<option value="<?php echo $fontstunningtext_type ?>" <?php if ($fontstunningtext == $fontstunningtext_type) { echo 'selected="selected"'; } ?>><?php echo $value['name']; ?></option>
						<?php } ?>
						</optgroup>
						
					</select>
					<div id="font-stunningtext-example" class="font-example"><?php _e('The Sample Text', 'my_framework'); ?></div>
					</div>
					<div class="description full"><?php _e('<br />replace desired font for stunning text.', 'my_framework'); ?></div>
				</div>
			</div>
			<!-- end of #fontfamily-section -->
			
			
			
			<div id="fontupload-section">
				<h2><?php _e('Font Upload', 'my_framework'); ?></h2>
				<div id="font-add" class="pa-option">
					<?php $fontaddhide = get_option('mytheme_fontaddvalues'); ?>
					<h4><?php _e('Add font', 'my_framework'); ?></h4>
					<div class="row">
					<?php $fontaddpath = get_option('mytheme_fontaddpath'); ?>
					<label for="fontaddpath" class="fontaddpath"></label>
					<input type="text" name="fontaddpath" id="fontaddpath" class="upload-text" size="" value="<?php echo get_option('mytheme_fontaddpath'); ?>"/>
					<input type="button" class="upload-button font" value=""/>
					</div>
					<div class="row">
					<label for="fontadd" class="fontadd"><h4><?php _e('Font name', 'my_framework'); ?></h4></label>
					<input type="text" name="fontadd" id="fontadd" size="4" readonly="readonly" class="w200" value=""/>
					<input type="hidden" name="fontaddvalues" id="fontaddvalues" size="4" value="<?php echo get_option('mytheme_fontaddvalues'); ?>"/>
					<div id="add-font" class="add-font"></div>
					
					<div id="added-font-wrapper">
					
						<div id="font-item" class="sample-font-item">
							<div class="added-font-item-del"></div>
							<div class="added-font-item-title"></div>
							<input type="hidden" id="created-font">
						</div>
						
						<?php 
						$fontadd = explode('|', $fontaddhide);
						for ($i=0; $i<sizeof($fontadd)-1; $i++) {
							$font = explode('~', $fontadd[$i]);
						?>
						
						<div id="font-item" class="added-font-item">
							<div class="added-font-item-del"></div>
							<div class="added-font-item-title"><?php echo $font[0]; ?></div>
							<input type="hidden" name="created-font-<?php echo $i; ?>" id="created-font-<?php echo $i; ?>" value="<?php echo $fontadd[$i].'|'; ?>">
						</div>
							
						<?php } ?>
						
					</div>
					
					</div>
					<div class="description full"><?php _e('create additional font.<br /> for delete items, click on "x" button.', 'my_framework'); ?></div>
				</div>
			</div>
			<!-- end of #fontupload-section -->
			
			
			
			
			<div id="slider-section">
				<h2><?php _e('Slider Settings', 'my_framework'); ?></h2>
				<div id="showslider-on-off" class="pa-option">
				<h4><?php _e('Slider status', 'my_framework'); ?></h4>
					<div class="row">
					<?php $showslider = get_option('mytheme_showslider'); ?>
					<label for="showslider" class="showslider-onoff"></label>
					<input type="hidden" name="showslider" value="false" />
					<input type="checkbox" name="showslider" id="showslider" value="true" <?php if ($showslider=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('show or hide slider for normal page.<br />you can select this option for Pages that you create later.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="slider-selection" class="pa-option">
				<h4><?php _e('Slider selection', 'my_framework'); ?></h4>
					<div class="row">
					<select name="slider">
						<?php $slider = get_option('mytheme_slider'); ?>
						<option value="nivo" <?php if ($slider=='nivo') { echo 'selected="selected"'; } ?>><?php _e('nivo slider', 'my_framework'); ?></option>
						<option value="kwicks" <?php if ($slider=='kwicks') { echo 'selected="selected"'; } ?>><?php _e('kwicks slider', 'my_framework'); ?></option>
						<option value="showcase" <?php if ($slider=='showcase') { echo 'selected="selected"'; } ?>><?php _e('showcase slider', 'my_framework'); ?></option>
						<option value="cycle" <?php if ($slider=='cycle') { echo 'selected="selected"'; } ?>><?php _e('cycle slider', 'my_framework'); ?></option>
						<option value="roundabout" <?php if ($slider=='roundabout') { echo 'selected="selected"'; } ?>><?php _e('roundabout slider', 'my_framework'); ?></option>
						<option value="liteaccordion" <?php if ($slider=='liteaccordion') { echo 'selected="selected"'; } ?>><?php _e('liteaccordion slider', 'my_framework'); ?></option>
						<option value="tm" <?php if ($slider=='tm') { echo 'selected="selected"'; } ?>><?php _e('tm slider', 'my_framework'); ?></option>
						<option value="bgstretcher" <?php if ($slider=='bgstretcher') { echo 'selected="selected"'; } ?>><?php _e('bgstretcher slider', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />select <strong>"slider"</strong> you want to use.', 'my_framework'); ?></div>
					</div>
					<div class="row w110">
					<?php $slidercat = get_option('mytheme_slidercat'); ?>
					<select name="slidercat">
						<option value="" <?php if ($slidercat=='') { echo 'selected="selected"'; } ?>><?php _e('all', 'my_framework'); ?></option>
						
						<?php
						$categories = custom_type_category('slider-category');
						foreach($categories as $category) { ?>
						<option value="<?php echo $category; ?>" <?php if ($slidercat==$category) { echo 'selected="selected"'; } ?>><?php echo $category; ?></option>
						<?php } ?>
						
					</select>
					</div>
					<div class="description"><?php _e('<br />select <strong>"category"</strong> to disply on slider.', 'my_framework'); ?></div>
				</div>
				<div id="slider-padding" class="pa-option">
				<h4><?php _e('SliderWrapper paddings', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="slidertoppadding" id="slidertoppadding" size="4" value="<?php echo get_option('mytheme_slidertoppadding'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"top padding"</strong> for slider wrapper (0px by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sliderbottompadding" id="sliderbottompadding" size="4" value="<?php echo get_option('mytheme_sliderbottompadding'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"bottom padding"</strong> for slider wrapper (0px by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="slider-coloring" class="pa-option">
				<h4><?php _e('SliderWrapper background color', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sliderbgcolor" id="sliderbgcolor" size="4" value="<?php echo get_option('mytheme_sliderbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('<br />set <strong>"background color"</strong> for slider wrapper (transparent by default).', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #slider-section -->
			
			
			
			
			<div id="nivoslider-section">
				<h2><?php _e('Nivo Slider Settings', 'my_framework'); ?></h2>
				<div id="nivoslider-effect" class="pa-option">
				<h4><?php _e('Slider effects', 'my_framework'); ?></h4>
					<div class="row">
					<select name="nivoeffect">
						<?php $nivoeffect = get_option('mytheme_nivoeffect'); ?>
						<option value="random" <?php if ($nivoeffect=='random') { echo 'selected="selected"'; } ?>><?php _e('random', 'my_framework'); ?></option>
						<option value="fold" <?php if ($nivoeffect=='fold') { echo 'selected="selected"'; } ?>><?php _e('fold', 'my_framework'); ?></option>
						<option value="fade" <?php if ($nivoeffect=='fade') { echo 'selected="selected"'; } ?>><?php _e('fade', 'my_framework'); ?></option>
						<option value="sliceDown" <?php if ($nivoeffect=='sliceDown') { echo 'selected="selected"'; } ?>><?php _e('sliceDown', 'my_framework'); ?></option>
						<option value="sliceDownLeft" <?php if ($nivoeffect=='sliceDownLeft') { echo 'selected="selected"'; } ?>><?php _e('sliceDownLeft', 'my_framework'); ?></option>
						<option value="sliceUp" <?php if ($nivoeffect=='sliceUp') { echo 'selected="selected"'; } ?>><?php _e('sliceUp', 'my_framework'); ?></option>
						<option value="sliceUpLeft" <?php if ($nivoeffect=='sliceUpLeft') { echo 'selected="selected"'; } ?>><?php _e('sliceUpLeft', 'my_framework'); ?></option>
						<option value="sliceUpDown" <?php if ($nivoeffect=='sliceUpDown') { echo 'selected="selected"'; } ?>><?php _e('sliceUpDown', 'my_framework'); ?></option>
						<option value="sliceUpDownLeft" <?php if ($nivoeffect=='sliceUpDownLeft') { echo 'selected="selected"'; } ?>><?php _e('sliceUpDownLeft', 'my_framework'); ?></option>
						<option value="slideInRight" <?php if ($nivoeffect=='slideInRight') { echo 'selected="selected"'; } ?>><?php _e('slideInRight', 'my_framework'); ?></option>
						<option value="slideInLeft" <?php if ($nivoeffect=='slideInLeft') { echo 'selected="selected"'; } ?>><?php _e('slideInLeft', 'my_framework'); ?></option>
						<option value="boxRandom" <?php if ($nivoeffect=='boxRandom') { echo 'selected="selected"'; } ?>><?php _e('boxRandom', 'my_framework'); ?></option>
						<option value="boxRain" <?php if ($nivoeffect=='boxRain') { echo 'selected="selected"'; } ?>><?php _e('boxRain', 'my_framework'); ?></option>
						<option value="boxRainReverse" <?php if ($nivoeffect=='boxRainReverse') { echo 'selected="selected"'; } ?>><?php _e('boxRainReverse', 'my_framework'); ?></option>
						<option value="boxRainGrow" <?php if ($nivoeffect=='boxRainGrow') { echo 'selected="selected"'; } ?>><?php _e('boxRainGrow', 'my_framework'); ?></option>
						<option value="boxRainGrowReverse" <?php if ($nivoeffect=='boxRainGrowReverse') { echo 'selected="selected"'; } ?>><?php _e('boxRainGrowReverse', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />specify <strong>"effect"</strong> parameter.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivoslices" id="nivoslices" size="4" value="<?php echo get_option('mytheme_nivoslices'); ?>"/>
					<div class="description"><?php _e('<br />number of <strong>"slices"</strong> (15 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivoboxcols" id="nivoboxcols" size="4" value="<?php echo get_option('mytheme_nivoboxcols'); ?>"/>
					<div class="description"><?php _e('<br />number of <strong>"boxCols"</strong> (8 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivoboxrows" id="nivoboxrows" size="4" value="<?php echo get_option('mytheme_nivoboxrows'); ?>"/>
					<div class="description"><?php _e('<br />number of <strong>"boxRows"</strong> (4 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivoanimspeed" id="nivoanimspeed" size="4" value="<?php echo get_option('mytheme_nivoanimspeed'); ?>"/>
					<div class="description"><?php _e('<br />slide <strong>"transition speed"</strong> (ms) (500 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivopausetime" id="nivopausetime" size="4" value="<?php echo get_option('mytheme_nivopausetime'); ?>"/>
					<div class="description"><?php _e('<br /><strong>"timeout"</strong> between slide animation (ms) (5000 by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="nivoslider-navigation" class="pa-option">
				<h4><?php _e('Slider navigation', 'my_framework'); ?></h4>
					<div class="row">
					<?php $nivodirectionnav = get_option('mytheme_nivodirectionnav'); ?>
					<label for="nivodirectionnav" class="nivodirectionnav-onoff"></label>
					<input type="hidden" name="nivodirectionnav" value="false" />
					<input type="checkbox" name="nivodirectionnav" id="nivodirectionnav" value="true" <?php if ($nivodirectionnav=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show <strong>"direction"</strong> (Prev &amp; Next).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $nivodirectionnavhide = get_option('mytheme_nivodirectionnavhide'); ?>
					<label for="nivodirectionnavhide" class="nivodirectionnavhide-onoff"></label>
					<input type="hidden" name="nivodirectionnavhide" value="false" />
					<input type="checkbox" name="nivodirectionnavhide" id="nivodirectionnavhide" value="true" <?php if ($nivodirectionnavhide=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('how show <strong>"direction"</strong>.<br />false - always visible, true - only on hover.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $nivocontrolnav = get_option('mytheme_nivocontrolnav'); ?>
					<label for="nivocontrolnav" class="nivocontrolnav-onoff"></label>
					<input type="hidden" name="nivocontrolnav" value="false" />
					<input type="checkbox" name="nivocontrolnav" id="nivocontrolnav" value="true" <?php if ($nivocontrolnav=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show <strong>"pagination"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $nivocontrolnavthumbs = get_option('mytheme_nivocontrolnavthumbs'); ?>
					<label for="nivocontrolnavthumbs" class="nivocontrolnavthumbs-onoff"></label>
					<input type="hidden" name="nivocontrolnavthumbs" value="false" />
					<input type="checkbox" name="nivocontrolnavthumbs" id="nivocontrolnavthumbs" value="true" <?php if ($nivocontrolnavthumbs=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />use <strong>"thumbnails for pagination"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $nivocontrolnavthumbsv = get_option('mytheme_nivocontrolnavthumbsv'); ?>
					<label for="nivocontrolnavthumbsv" class="nivocontrolnavthumbsv-onoff"></label>
					<input type="hidden" name="nivocontrolnavthumbsv" value="false" />
					<input type="checkbox" name="nivocontrolnavthumbsv" id="nivocontrolnavthumbsv" value="true" <?php if ($nivocontrolnavthumbsv=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('set <strong>"vertically position"</strong> for thumbnails.<br />when it is on thumbnails will be vertically', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocontrolnavthumbswidth" id="nivocontrolnavthumbswidth" size="4" value="<?php echo get_option('mytheme_nivocontrolnavthumbswidth'); ?>"/>
					<div class="description"><?php _e('set <strong>"width"</strong> for thumbnails (90px by default).<br />with "px" for ex. 200px', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocontrolnavthumbsheight" id="nivocontrolnavthumbsheight" size="4" value="<?php echo get_option('mytheme_nivocontrolnavthumbsheight'); ?>"/>
					<div class="description"><?php _e('set <strong>"height"</strong> for thumbnails (50px by default).<br />with "px" for ex. 200px', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocontrolnavthumbsmarginr" id="nivocontrolnavthumbsmarginr" size="4" value="<?php echo get_option('mytheme_nivocontrolnavthumbsmarginr'); ?>"/>
					<div class="description"><?php _e('set <strong>"margin right"</strong> for thumbnails (6px by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocontrolnavthumbsmarginb" id="nivocontrolnavthumbsmarginb" size="4" value="<?php echo get_option('mytheme_nivocontrolnavthumbsmarginb'); ?>"/>
					<div class="description"><?php _e('set <strong>"margin bottom"</strong> for thumbnails (6px by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocontrolnavthumbstop" id="nivocontrolnavthumbstop" size="4" value="<?php echo get_option('mytheme_nivocontrolnavthumbstop'); ?>"/>
					<div class="description"><?php _e('set <strong>"top"</strong> for thumbnails location (6px by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocontrolnavthumbsleft" id="nivocontrolnavthumbsleft" size="4" value="<?php echo get_option('mytheme_nivocontrolnavthumbsleft'); ?>"/>
					<div class="description"><?php _e('set <strong>"left"</strong> for thumbnails location (6px by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="nivoslider-caption" class="pa-option">
				<h4><?php _e('Slider caption', 'my_framework'); ?></h4>
					<div class="row">
					<?php $nivocaptiononoff = get_option('mytheme_nivocaptiononoff'); ?>
					<label for="nivocaptiononoff" class="nivocaption-onoff"></label>
					<input type="hidden" name="nivocaptiononoff" value="false" />
					<input type="checkbox" name="nivocaptiononoff" id="nivocaptiononoff" value="true" <?php if ($nivocaptiononoff=='true' || !$nivocaptiononoff) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable/disable <strong>"caption"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptiontop" id="nivocaptiontop" size="4" value="<?php echo get_option('mytheme_nivocaptiontop'); ?>"/>
					<div class="description"><?php _e('set <strong>"top"</strong> for caption.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptionbottom" id="nivocaptionbottom" size="4" value="<?php echo get_option('mytheme_nivocaptionbottom'); ?>"/>
					<div class="description"><?php _e('set <strong>"bottom"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptionleft" id="nivocaptionleft" size="4" value="<?php echo get_option('mytheme_nivocaptionleft'); ?>"/>
					<div class="description"><?php _e('set <strong>"left"</strong> for caption (0 by default).<br />when "left" is set, ""right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptionright" id="nivocaptionright" size="4" value="<?php echo get_option('mytheme_nivocaptionright'); ?>"/>
					<div class="description"><?php _e('set <strong>"right"</strong> for caption.<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptionwidth" id="nivocaptionwidth" size="4" value="<?php echo get_option('mytheme_nivocaptionwidth'); ?>"/>
					<div class="description"><?php _e('set <strong>"width"</strong> for caption (100% by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptionheight" id="nivocaptionheight" size="4" value="<?php echo get_option('mytheme_nivocaptionheight'); ?>"/>
					<div class="description"><?php _e('set <strong>"height"</strong> for caption (auto by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptionradius" id="nivocaptionradius" size="4" value="<?php echo get_option('mytheme_nivocaptionradius'); ?>"/>
					<div class="description"><?php _e('set <strong>"radius"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 20px or 10%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptionpadding" id="nivocaptionpadding" size="4" value="<?php echo get_option('mytheme_nivocaptionpadding'); ?>"/>
					<div class="description"><?php _e('set <strong>"padding"</strong> for caption (15px by default).<br />with "px" or em for ex. 20px or 1em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptiontitlecolor" id="nivocaptiontitlecolor" size="4" value="<?php echo get_option('mytheme_nivocaptiontitlecolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title color"</strong> for caption title.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptiontitleshadowcolor" id="nivocaptiontitleshadowcolor" size="4" value="<?php echo get_option('mytheme_nivocaptiontitleshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title shadow color"</strong> for caption title (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptiontextcolor" id="nivocaptiontextcolor" size="4" value="<?php echo get_option('mytheme_nivocaptiontextcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptiontextshadowcolor" id="nivocaptiontextshadowcolor" size="4" value="<?php echo get_option('mytheme_nivocaptiontextshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text shadow color"</strong> for caption text (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="nivocaptiontextalign">
						<?php $nivocaptiontextalign = get_option('mytheme_nivocaptiontextalign'); ?>
						<option value="left" <?php if ($nivocaptiontextalign=='left') { echo 'selected="selected"'; } ?>><?php _e('left', 'my_framework'); ?></option>
						<option value="center" <?php if ($nivocaptiontextalign=='center') { echo 'selected="selected"'; } ?>><?php _e('center', 'my_framework'); ?></option>
						<option value="right" <?php if ($nivocaptiontextalign=='right') { echo 'selected="selected"'; } ?>><?php _e('right', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set <strong>"text alignment"</strong> for caption text (left by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptionbgcolor" id="nivocaptionbgcolor" size="4" value="<?php echo get_option('mytheme_nivocaptionbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"background-color"</strong> for caption.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $nivocaptionbgimage = get_option('mytheme_nivocaptionbgimage'); ?>
					<label for="nivocaptionbgimage" class="nivocaptionbgimage-onoff"></label>
					<input type="hidden" name="nivocaptionbgimage" value="false" />
					<input type="checkbox" name="nivocaptionbgimage" id="nivocaptionbgimage" value="true" <?php if ($nivocaptionbgimage=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show/hide <strong>"background gradient image"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivocaptionopacity" id="nivocaptionopacity" size="4" value="<?php echo get_option('mytheme_nivocaptionopacity'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"opacity"</strong> caption (1 by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="nivoslider-misc" class="pa-option">
				<h4><?php _e('Miscellaneous', 'my_framework'); ?></h4>
					<div class="row">
					<?php $nivopauseonhover = get_option('mytheme_nivopauseonhover'); ?>
					<label for="nivopauseonhover" class="nivopauseonhover-onoff"></label>
					<input type="hidden" name="nivopauseonhover" value="false" />
					<input type="checkbox" name="nivopauseonhover" id="nivopauseonhover" value="true" <?php if ($nivopauseonhover=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br /><strong>"pause"</strong> animation while hovering.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $nivorandomstart = get_option('mytheme_nivorandomstart'); ?>
					<label for="nivorandomstart" class="nivorandomstart-onoff"></label>
					<input type="hidden" name="nivorandomstart" value="false" />
					<input type="checkbox" name="nivorandomstart" id="nivorandomstart" value="true" <?php if ($nivorandomstart=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />set <strong>"Random selection"</strong> of the first image slider.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivobgcolor" id="nivobgcolor" size="4" value="<?php echo get_option('mytheme_nivobgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set color for <strong>"slider background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivotopmargin" id="nivotopmargin" size="4" value="<?php echo get_option('mytheme_nivotopmargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"top margin"</strong> for slider (55px by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="nivobottommargin" id="nivobottommargin" size="4" value="<?php echo get_option('mytheme_nivobottommargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"bottom margin"</strong> for slider (0px by default).', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #nivoslider-section -->
			
			
			
			
			<div id="kwicksslider-section">
				<h2><?php _e('Kwicks Slider Settings', 'my_framework'); ?></h2>
				<div id="kwicksslider-effect" class="pa-option">
				<h4><?php _e('Slider effects', 'my_framework'); ?></h4>
					<div class="row">
					<select name="kwicksease">
						<?php $kwicksease = get_option('mytheme_kwicksease'); ?>
						<option value="easeInQuad" <?php if ($kwicksease=='easeInQuad') { echo 'selected="selected"'; } ?>>easeInQuad</option>
						<option value="easeOutQuad" <?php if ($kwicksease=='easeOutQuad') { echo 'selected="selected"'; } ?>>easeOutQuad</option>
						<option value="easeInOutQuad" <?php if ($kwicksease=='easeInOutQuad') { echo 'selected="selected"'; } ?>>easeInOutQuad</option>
						<option value="easeInCubic" <?php if ($kwicksease=='easeInCubic') { echo 'selected="selected"'; } ?>>easeInCubic</option>
						<option value="easeOutCubic" <?php if ($kwicksease=='easeOutCubic') { echo 'selected="selected"'; } ?>>easeOutCubic</option>
						<option value="easeInOutCubic" <?php if ($kwicksease=='easeInOutCubic') { echo 'selected="selected"'; } ?>>easeInOutCubic</option>
						<option value="easeInQuart" <?php if ($kwicksease=='easeInQuart') { echo 'selected="selected"'; } ?>>easeInQuart</option>
						<option value="easeOutQuart" <?php if ($kwicksease=='easeOutQuart') { echo 'selected="selected"'; } ?>>easeOutQuart</option>
						<option value="easeInOutQuart" <?php if ($kwicksease=='easeInOutQuart') { echo 'selected="selected"'; } ?>>easeInOutQuart</option>
						<option value="easeInQuint" <?php if ($kwicksease=='easeInQuint') { echo 'selected="selected"'; } ?>>easeInQuint</option>
						<option value="easeOutQuint" <?php if ($kwicksease=='easeOutQuint') { echo 'selected="selected"'; } ?>>easeOutQuint</option>
						<option value="easeInOutQuint" <?php if ($kwicksease=='easeInOutQuint') { echo 'selected="selected"'; } ?>>easeInOutQuint</option>
						<option value="easeInSine" <?php if ($kwicksease=='easeInSine') { echo 'selected="selected"'; } ?>>easeInSine</option>
						<option value="easeOutSine" <?php if ($kwicksease=='easeOutSine') { echo 'selected="selected"'; } ?>>easeOutSine</option>
						<option value="easeInOutSine" <?php if ($kwicksease=='easeInOutSine') { echo 'selected="selected"'; } ?>>easeInOutSine</option>
						<option value="easeInExpo" <?php if ($kwicksease=='easeInExpo') { echo 'selected="selected"'; } ?>>easeInExpo</option>
						<option value="easeOutExpo" <?php if ($kwicksease=='easeOutExpo') { echo 'selected="selected"'; } ?>>easeOutExpo</option>
						<option value="easeInOutExpo" <?php if ($kwicksease=='easeInOutExpo') { echo 'selected="selected"'; } ?>>easeInOutExpo</option>
						<option value="easeInCirc" <?php if ($kwicksease=='easeInCirc') { echo 'selected="selected"'; } ?>>easeInCirc</option>
						<option value="easeOutCirc" <?php if ($kwicksease=='easeOutCirc') { echo 'selected="selected"'; } ?>>easeOutCirc</option>
						<option value="easeInOutCirc" <?php if ($kwicksease=='easeInOutCirc') { echo 'selected="selected"'; } ?>>easeInOutCirc</option>
						<option value="easeInElastic" <?php if ($kwicksease=='easeInElastic') { echo 'selected="selected"'; } ?>>easeInElastic</option>
						<option value="easeOutElastic" <?php if ($kwicksease=='easeOutElastic') { echo 'selected="selected"'; } ?>>easeOutElastic</option>
						<option value="easeInOutElastic" <?php if ($kwicksease=='easeInOutElastic') { echo 'selected="selected"'; } ?>>easeInOutElastic</option>
						<option value="easeInBack" <?php if ($kwicksease=='easeInBack') { echo 'selected="selected"'; } ?>>easeInBack</option>
						<option value="easeOutBack" <?php if ($kwicksease=='easeOutBack') { echo 'selected="selected"'; } ?>>easeOutBack</option>
						<option value="easeInOutBack" <?php if ($kwicksease=='easeInOutBack') { echo 'selected="selected"'; } ?>>easeInOutBack</option>
						<option value="easeInBounce" <?php if ($kwicksease=='easeInBounce') { echo 'selected="selected"'; } ?>>easeInBounce</option>
						<option value="easeOutBounce" <?php if ($kwicksease=='easeOutBounce') { echo 'selected="selected"'; } ?>>easeOutBounce</option>
						<option value="easeInOutBounce" <?php if ($kwicksease=='easeInOutBounce') { echo 'selected="selected"'; } ?>>easeInOutBounce</option>
					</select>
					<div class="description"><?php _e('<br />a custom <strong>"easing"</strong> function for the animation.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwicksduration" id="kwicksduration" size="4" value="<?php echo get_option('mytheme_kwicksduration'); ?>"/>
					<div class="description"><?php _e('<br />the <strong>"duration"</strong> required for each animation to complete in milliseconds. (500 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="kwicksevent">
						<?php $kwicksevent = get_option('mytheme_kwicksevent'); ?>
						<option value="mouseover" <?php if ($kwicksevent=='mouseover') { echo 'selected="selected"'; } ?>><?php _e('mouse over', 'my_framework'); ?></option>
						<option value="click" <?php if ($kwicksevent=='click') { echo 'selected="selected"'; } ?>><?php _e('click', 'my_framework'); ?></option>
						<option value="dblclick" <?php if ($kwicksevent=='dblclick') { echo 'selected="selected"'; } ?>><?php _e('double click', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />The <strong>"event</strong> that triggers the expand effect.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="kwicksslider-navigation" class="pa-option">
				<h4><?php _e('Slider alignment', 'my_framework'); ?></h4>
					<div class="row">
					<select name="kwicksvertical">
						<?php $kwicksvertical = get_option('mytheme_kwicksvertical'); ?>
						<option value="false" <?php if ($kwicksvertical=='false') { echo 'selected="selected"'; } ?>><?php _e('horizontally', 'my_framework'); ?></option>
						<option value="true" <?php if ($kwicksvertical=='true') { echo 'selected="selected"'; } ?>><?php _e('vertically', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set <strong>"vertically aligment"</strong> for slider.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="kwicksslider-caption" class="pa-option">
				<h4><?php _e('Slider caption', 'my_framework'); ?></h4>
					<div class="row">
					<?php $kwickscaptiononoff = get_option('mytheme_kwickscaptiononoff'); ?>
					<label for="kwickscaptiononoff" class="kwickscaption-onoff"></label>
					<input type="hidden" name="kwickscaptiononoff" value="false" />
					<input type="checkbox" name="kwickscaptiononoff" id="kwickscaptiononoff" value="true" <?php if ($kwickscaptiononoff=='true' || !$kwickscaptiononoff) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable/disable <strong>"caption"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptiontop" id="kwickscaptiontop" size="4" value="<?php echo get_option('mytheme_kwickscaptiontop'); ?>"/>
					<div class="description"><?php _e('set <strong>"top"</strong> for caption.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptionbottom" id="kwickscaptionbottom" size="4" value="<?php echo get_option('mytheme_kwickscaptionbottom'); ?>"/>
					<div class="description"><?php _e('set <strong>"bottom"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptionleft" id="kwickscaptionleft" size="4" value="<?php echo get_option('mytheme_kwickscaptionleft'); ?>"/>
					<div class="description"><?php _e('set <strong>"left"</strong> for caption (0 by default).<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptionright" id="kwickscaptionright" size="4" value="<?php echo get_option('mytheme_kwickscaptionright'); ?>"/>
					<div class="description"><?php _e('set <strong>"right"</strong> for caption.<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptionwidth" id="kwickscaptionwidth" size="4" value="<?php echo get_option('mytheme_kwickscaptionwidth'); ?>"/>
					<div class="description"><?php _e('set <strong>"width"</strong> for caption (100% by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptionheight" id="kwickscaptionheight" size="4" value="<?php echo get_option('mytheme_kwickscaptionheight'); ?>"/>
					<div class="description"><?php _e('set <strong>"height"</strong> for caption (auto by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptionradius" id="kwickscaptionradius" size="4" value="<?php echo get_option('mytheme_kwickscaptionradius'); ?>"/>
					<div class="description"><?php _e('set <strong>"radius"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 20px or 10%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptionpadding" id="kwickscaptionpadding" size="4" value="<?php echo get_option('mytheme_kwickscaptionpadding'); ?>"/>
					<div class="description"><?php _e('set <strong>"padding"</strong> for caption (0 80px 0 0 by default).<br />with "px" or em for ex. 20px or 1em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptiontitlecolor" id="kwickscaptiontitlecolor" size="4" value="<?php echo get_option('mytheme_kwickscaptiontitlecolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title color"</strong> for caption title.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptiontitleshadowcolor" id="kwickscaptiontitleshadowcolor" size="4" value="<?php echo get_option('mytheme_kwickscaptiontitleshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title shadow color"</strong> for caption title (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptionlinkcolor" id="kwickscaptionlinkcolor" size="4" value="<?php echo get_option('mytheme_kwickscaptionlinkcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"link color"</strong> for caption read more link.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptiontextcolor" id="kwickscaptiontextcolor" size="4" value="<?php echo get_option('mytheme_kwickscaptiontextcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptiontextshadowcolor" id="kwickscaptiontextshadowcolor" size="4" value="<?php echo get_option('mytheme_kwickscaptiontextshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text shadow color"</strong> for caption text (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="kwickscaptiontextalign">
						<?php $kwickscaptiontextalign = get_option('mytheme_kwickscaptiontextalign'); ?>
						<option value="left" <?php if ($kwickscaptiontextalign=='left') { echo 'selected="selected"'; } ?>><?php _e('left', 'my_framework'); ?></option>
						<option value="center" <?php if ($kwickscaptiontextalign=='center') { echo 'selected="selected"'; } ?>><?php _e('center', 'my_framework'); ?></option>
						<option value="right" <?php if ($kwickscaptiontextalign=='right') { echo 'selected="selected"'; } ?>><?php _e('right', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set <strong>"text alignment"</strong> for caption text (left by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptionbgcolor" id="kwickscaptionbgcolor" size="4" value="<?php echo get_option('mytheme_kwickscaptionbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"background-color"</strong> for caption.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $kwickscaptionbgimage = get_option('mytheme_kwickscaptionbgimage'); ?>
					<label for="kwickscaptionbgimage" class="kwickscaptionbgimage-onoff"></label>
					<input type="hidden" name="kwickscaptionbgimage" value="false" />
					<input type="checkbox" name="kwickscaptionbgimage" id="kwickscaptionbgimage" value="true" <?php if ($kwickscaptionbgimage=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show/hide <strong>"background gradient image"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickscaptionopacity" id="kwickscaptionopacity" size="4" value="<?php echo get_option('mytheme_kwickscaptionopacity'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"opacity"</strong> caption (1 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $kwickscaptioncontentpos = get_option('mytheme_kwickscaptioncontentpos'); ?>
					<label for="kwickscaptioncontentpos" class="kwickscaptioncontentpos-onoff"></label>
					<input type="hidden" name="kwickscaptioncontentpos" value="false" />
					<input type="checkbox" name="kwickscaptioncontentpos" id="kwickscaptioncontentpos" value="true" <?php if ($kwickscaptioncontentpos=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('show/hide <strong>"content position"</strong>.<br />show caption content below caption title.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $kwickscaptionstepped = get_option('mytheme_kwickscaptionstepped'); ?>
					<label for="kwickscaptionstepped" class="kwickscaptionstepped-onoff"></label>
					<input type="hidden" name="kwickscaptionstepped" value="false" />
					<input type="checkbox" name="kwickscaptionstepped" id="kwickscaptionstepped" value="true" <?php if ($kwickscaptionstepped=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('show/hide <strong>"stepped caption"</strong>.<br />show caption like as stair.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="kwicksslider-misc" class="pa-option">
				<h4><?php _e('Miscellaneous', 'my_framework'); ?></h4>
					<div class="row">
					<?php $kwickssticky = get_option('mytheme_kwickssticky'); ?>
					<label for="kwickssticky" class="kwickssticky-onoff"></label>
					<input type="hidden" name="kwickssticky" value="false" />
					<input type="checkbox" name="kwickssticky" id="kwickssticky" value="true" <?php if ($kwickssticky=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('sticky for kwick slides<br />one kwick will <strong>"always be expanded"</strong> if true.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwicksdefault" id="kwicksdefault" size="4" value="<?php echo get_option('mytheme_kwicksdefault'); ?>"/>
					<div class="description"><?php _e('the <strong>"initially expanded kwick"</strong> (if and only if sticky is true).<br />default is 0. (index of slide)', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="kwicksmaxmin">
						<?php $kwicksmaxmin = get_option('mytheme_kwicksmaxmin'); ?>
						<option value="max" <?php if ($kwicksmaxmin=='max') { echo 'selected="selected"'; } ?>><?php _e('max', 'my_framework'); ?></option>
						<option value="min" <?php if ($kwicksmaxmin=='min') { echo 'selected="selected"'; } ?>><?php _e('min', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('the width or height of a <strong>"fully expanded or collapsed"</strong> kwick element. in vertically max or min refers to the height<br />otherwise it is the width.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwicksmaxminval" id="kwicksmaxminval" size="4" value="<?php echo get_option('mytheme_kwicksmaxminval'); ?>"/>
					<div class="description"><?php _e('the <strong>"value of max or min"</strong> of width or height.<br />by default in horizontally max is 704 and min is 59<br />by default in vertically max is 204 and min is 44', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwickstopmargin" id="kwickstopmargin" size="4" value="<?php echo get_option('mytheme_kwickstopmargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"top margin"</strong> for slider (55px by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="kwicksbottommargin" id="kwicksbottommargin" size="4" value="<?php echo get_option('mytheme_kwicksbottommargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"bottom margin"</strong> for slider (0px by default).', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #kwicksslider-section -->
			
			
			
			
			<div id="showcaseslider-section">
				<h2><?php _e('Showcase Slider Settings', 'my_framework'); ?></h2>
				<div id="showcaseslider-effect" class="pa-option">
				<h4><?php _e('Slider effects', 'my_framework'); ?></h4>
					<div class="row">
					<select name="showcaseeffect">
						<?php $showcaseeffect = get_option('mytheme_showcaseeffect'); ?>
						<option value="hslide" <?php if ($showcaseeffect=='hslide') { echo 'selected="selected"'; } ?>><?php _e('hslide', 'my_framework'); ?></option>
						<option value="vslide" <?php if ($showcaseeffect=='vslide') { echo 'selected="selected"'; } ?>><?php _e('vslide', 'my_framework'); ?></option>
						<option value="fade" <?php if ($showcaseeffect=='fade') { echo 'selected="selected"'; } ?>><?php _e('fade', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />specify <strong>"effect"</strong> parameter.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasedelay" id="showcasedelay" size="4" value="<?php echo get_option('mytheme_showcasedelay'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"delay"</strong> time (300 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcaseanimspeed" id="showcaseanimspeed" size="4" value="<?php echo get_option('mytheme_showcaseanimspeed'); ?>"/>
					<div class="description"><?php _e('<br />slide <strong>"transition speed</strong> (ms) (500 by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="showcaseslider-navigation" class="pa-option">
				<h4><?php _e('Slider thumbnails', 'my_framework'); ?></h4>
					<div class="row">
					<?php $showcasethumb = get_option('mytheme_showcasethumb'); ?>
					<label for="showcasethumb" class="showcasethumb-onoff"></label>
					<input type="hidden" name="showcasethumb" value="false" />
					<input type="checkbox" name="showcasethumb" id="showcasethumb" value="true" <?php if ($showcasethumb=='true' || !$showcasethumb) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show <strong>"thumbnails"</strong> preview"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="showcasethumbalign">
						<?php $showcasethumbalign = get_option('mytheme_showcasethumbalign'); ?>
						<option value="horizontally" <?php if ($showcasethumbalign=='horizontally') { echo 'selected="selected"'; } ?>><?php _e('horizontally', 'my_framework'); ?></option>
						<option value="vertically" <?php if ($showcasethumbalign=='vertically') { echo 'selected="selected"'; } ?>><?php _e('vertically', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('set <strong>"vertically aligment"</strong> for thumbnails.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="showcasethumbpos">
						<?php $showcasethumbpos = get_option('mytheme_showcasethumbpos'); ?>
						<option value="outside-last" <?php if ($showcasethumbpos=='outside-last') { echo 'selected="selected"'; } ?>><?php _e('outside-last', 'my_framework'); ?></option>
						<option value="outside-first" <?php if ($showcasethumbpos=='outside-first') { echo 'selected="selected"'; } ?>><?php _e('outside-first', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set <strong>"thumbnails position"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasethumbslidex" id="showcasethumbslidex" size="4" value="<?php echo get_option('mytheme_showcasethumbslidex'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"number of thumbnails"</strong> for slide (0=auto by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasethumbbordercolor" id="showcasethumbbordercolor" size="4" value="<?php echo get_option('mytheme_showcasethumbbordercolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"border color"</strong> for thumbnails.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasethumbactivebordercolor" id="showcasethumbactivebordercolor" size="4" value="<?php echo get_option('mytheme_showcasethumbactivebordercolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"active border color"</strong> for thumbnails.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasethumbbgcolor" id="showcasethumbbgcolor" size="4" value="<?php echo get_option('mytheme_showcasethumbbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"background color"</strong> for thumbnails.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="showcaseslider-caption" class="pa-option">
				<h4><?php _e('Slider caption', 'my_framework'); ?></h4>
					<div class="row">
					<?php $showcasecaptiononoff = get_option('mytheme_showcasecaptiononoff'); ?>
					<label for="showcasecaptiononoff" class="showcasecaption-onoff"></label>
					<input type="hidden" name="showcasecaptiononoff" value="false" />
					<input type="checkbox" name="showcasecaptiononoff" id="showcasecaptiononoff" value="true" <?php if ($showcasecaptiononoff=='true' || !$showcasecaptiononoff) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable/disable <strong>"caption</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="showcasecaption">
						<?php $showcasecaption = get_option('mytheme_showcasecaption'); ?>
						<option value="onload" <?php if ($showcasecaption=='onload') { echo 'selected="selected"'; } ?>><?php _e('onload', 'my_framework'); ?></option>
						<option value="onhover" <?php if ($showcasecaption=='onhover') { echo 'selected="selected"'; } ?>><?php _e('onhover', 'my_framework'); ?></option>
						<option value="show" <?php if ($showcasecaption=='show') { echo 'selected="selected"'; } ?>><?php _e('show', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />specify <strong>"how show caption"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptiontop" id="showcasecaptiontop" size="4" value="<?php echo get_option('mytheme_showcasecaptiontop'); ?>"/>
					<div class="description"><?php _e('set <strong>"top"</strong> for caption.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptionbottom" id="showcasecaptionbottom" size="4" value="<?php echo get_option('mytheme_showcasecaptionbottom'); ?>"/>
					<div class="description"><?php _e('set <strong>"bottom"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptionleft" id="showcasecaptionleft" size="4" value="<?php echo get_option('mytheme_showcasecaptionleft'); ?>"/>
					<div class="description"><?php _e('set <strong>"left"</strong> for caption (0 by default).<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptionright" id="showcasecaptionright" size="4" value="<?php echo get_option('mytheme_showcasecaptionright'); ?>"/>
					<div class="description"><?php _e('set <strong>"right"</strong> for caption.<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptionwidth" id="showcasecaptionwidth" size="4" value="<?php echo get_option('mytheme_showcasecaptionwidth'); ?>"/>
					<div class="description"><?php _e('set <strong>"width"</strong> for caption (100% by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptionheight" id="showcasecaptionheight" size="4" value="<?php echo get_option('mytheme_showcasecaptionheight'); ?>"/>
					<div class="description"><?php _e('set <strong>"height"</strong> for caption (auto by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptionradius" id="showcasecaptionradius" size="4" value="<?php echo get_option('mytheme_showcasecaptionradius'); ?>"/>
					<div class="description"><?php _e('set <strong>"radius"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 20px or 10%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptionpadding" id="showcasecaptionpadding" size="4" value="<?php echo get_option('mytheme_showcasecaptionpadding'); ?>"/>
					<div class="description"><?php _e('set <strong>"padding"</strong> for caption (15px by default).<br />with "px" or em for ex. 20px or 1em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptiontitlecolor" id="showcasecaptiontitlecolor" size="4" value="<?php echo get_option('mytheme_showcasecaptiontitlecolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title color"</strong> for caption title.<br />use color name for ex. blue<br />use hex color for ex #ff0000<', 'my_framework'); ?>/div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptiontitleshadowcolor" id="showcasecaptiontitleshadowcolor" size="4" value="<?php echo get_option('mytheme_showcasecaptiontitleshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title shadow color"</strong> for caption title (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptiontextcolor" id="showcasecaptiontextcolor" size="4" value="<?php echo get_option('mytheme_showcasecaptiontextcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptiontextshadowcolor" id="showcasecaptiontextshadowcolor" size="4" value="<?php echo get_option('mytheme_showcasecaptiontextshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text shadow color"</strong> for caption text (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="showcasecaptiontextalign">
						<?php $showcasecaptiontextalign = get_option('mytheme_showcasecaptiontextalign'); ?>
						<option value="left" <?php if ($showcasecaptiontextalign=='left') { echo 'selected="selected"'; } ?>><?php _e('left', 'my_framework'); ?></option>
						<option value="center" <?php if ($showcasecaptiontextalign=='center') { echo 'selected="selected"'; } ?>><?php _e('center', 'my_framework'); ?></option>
						<option value="right" <?php if ($showcasecaptiontextalign=='right') { echo 'selected="selected"'; } ?>><?php _e('right', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set <strong>"text alignment"</strong> for caption text (left by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptionbgcolor" id="showcasecaptionbgcolor" size="4" value="<?php echo get_option('mytheme_showcasecaptionbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"background color"</strong> for caption.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $showcasecaptionbgimage = get_option('mytheme_showcasecaptionbgimage'); ?>
					<label for="showcasecaptionbgimage" class="showcasecaptionbgimage-onoff"></label>
					<input type="hidden" name="showcasecaptionbgimage" value="false" />
					<input type="checkbox" name="showcasecaptionbgimage" id="showcasecaptionbgimage" value="true" <?php if ($showcasecaptionbgimage=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show/hide <strong>"background gradient image"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasecaptionopacity" id="showcasecaptionopacity" size="4" value="<?php echo get_option('mytheme_showcasecaptionopacity'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"opacity"</strong> caption (1 by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="showcaseslider-misc" class="pa-option">
				<h4><?php _e('Miscellaneous', 'my_framework'); ?></h4>
					<div class="row">
					<?php $showcaseauto = get_option('mytheme_showcaseauto'); ?>
					<label for="showcaseauto" class="showcaseauto-onoff"></label>
					<input type="hidden" name="showcaseauto" value="false" />
					<input type="checkbox" name="showcaseauto" id="showcaseauto" value="true" <?php if ($showcaseauto=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />disable/enable <strong>"auto slider"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcaseinterval" id="showcaseinterval" size="4" value="<?php echo get_option('mytheme_showcaseinterval'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"interval"</strong> for next slider (ms) (5000 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $showcasepauseonhover = get_option('mytheme_showcasepauseonhover'); ?>
					<label for="showcasepauseonhover" class="showcasepauseonhover-onoff"></label>
					<input type="hidden" name="showcasepauseonhover" value="false" />
					<input type="checkbox" name="showcasepauseonhover" id="showcasepauseonhover" value="true" <?php if ($showcasepauseonhover=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br /><strong>"pause"</strong> animation while hovering.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $showcasekeyboardnav = get_option('mytheme_showcasekeyboardnav'); ?>
					<label for="showcasekeyboardnav" class="showcasekeyboardnav-onoff"></label>
					<input type="hidden" name="showcasekeyboardnav" value="false" />
					<input type="checkbox" name="showcasekeyboardnav" id="showcasekeyboardnav" value="true" <?php if ($showcasekeyboardnav=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />use <strong>"keyboard"</strong> navigation.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasebgcolor" id="showcasebgcolor" size="4" value="<?php echo get_option('mytheme_showcasebgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"background color"</strong> for slider.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasetopmargin" id="showcasetopmargin" size="4" value="<?php echo get_option('mytheme_showcasetopmargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"top margin"</strong> for slider (55px by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="showcasebottommargin" id="showcasebottommargin" size="4" value="<?php echo get_option('mytheme_showcasebottommargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"bottom margin"</strong> for slider (0px by default).', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #showcaseslider-section -->
			
			
			
			
			<div id="cycleslider-section">
				<h2><?php _e('Cycle Slider Settings', 'my_framework'); ?></h2>
				<div id="cycleslider-effect" class="pa-option">
				<h4><?php _e('Slider effects', 'my_framework'); ?></h4>
					<div class="row">
					<select name="cycleeffect">
						<?php $cycleeffect = get_option('mytheme_cycleeffect'); ?>
						<option value="scrollLeft" <?php if ($cycleeffect=='scrollLeft') { echo 'selected="selected"'; } ?>><?php _e('scrollLeft', 'my_framework'); ?></option>
						<option value="scrollRight" <?php if ($cycleeffect=='scrollRight') { echo 'selected="selected"'; } ?>><?php _e('scrollRight', 'my_framework'); ?></option>
						<option value="scrollUp" <?php if ($cycleeffect=='scrollUp') { echo 'selected="selected"'; } ?>><?php _e('scrollUp', 'my_framework'); ?></option>
						<option value="scrollDown" <?php if ($cycleeffect=='scrollDown') { echo 'selected="selected"'; } ?>><?php _e('scrollDown', 'my_framework'); ?></option>
						<option value="scrollHorz" <?php if ($cycleeffect=='scrollHorz') { echo 'selected="selected"'; } ?>><?php _e('scrollHorz', 'my_framework'); ?></option>
						<option value="scrollVert" <?php if ($cycleeffect=='scrollVert') { echo 'selected="selected"'; } ?>><?php _e('scrollVert', 'my_framework'); ?></option>
						<option value="blindX" <?php if ($cycleeffect=='blindX') { echo 'selected="selected"'; } ?>><?php _e('blindX', 'my_framework'); ?></option>
						<option value="blindY" <?php if ($cycleeffect=='blindY') { echo 'selected="selected"'; } ?>><?php _e('blindY', 'my_framework'); ?></option>
						<option value="blindZ" <?php if ($cycleeffect=='blindZ') { echo 'selected="selected"'; } ?>><?php _e('blindZ', 'my_framework'); ?></option>
						<option value="curtainX" <?php if ($cycleeffect=='curtainX') { echo 'selected="selected"'; } ?>><?php _e('curtainX', 'my_framework'); ?></option>
						<option value="curtainY" <?php if ($cycleeffect=='curtainY') { echo 'selected="selected"'; } ?>><?php _e('curtainY', 'my_framework'); ?></option>
						<option value="fade" <?php if ($cycleeffect=='fade') { echo 'selected="selected"'; } ?>><?php _e('fade', 'my_framework'); ?></option>
						<option value="fadeZoom" <?php if ($cycleeffect=='fadeZoom') { echo 'selected="selected"'; } ?>><?php _e('fadeZoom', 'my_framework'); ?></option>
						<option value="zoom" <?php if ($cycleeffect=='zoom') { echo 'selected="selected"'; } ?>><?php _e('zoom', 'my_framework'); ?></option>
						<option value="growX" <?php if ($cycleeffect=='growX') { echo 'selected="selected"'; } ?>><?php _e('growX', 'my_framework'); ?></option>
						<option value="growY" <?php if ($cycleeffect=='growY') { echo 'selected="selected"'; } ?>><?php _e('growY', 'my_framework'); ?></option>
						<option value="slideX" <?php if ($cycleeffect=='slideX') { echo 'selected="selected"'; } ?>><?php _e('slideX', 'my_framework'); ?></option>
						<option value="slideY" <?php if ($cycleeffect=='slideY') { echo 'selected="selected"'; } ?>><?php _e('slideY', 'my_framework'); ?></option>
						<option value="toss" <?php if ($cycleeffect=='toss') { echo 'selected="selected"'; } ?>><?php _e('toss', 'my_framework'); ?></option>
						<option value="turnLeft" <?php if ($cycleeffect=='turnLeft') { echo 'selected="selected"'; } ?>><?php _e('turnLeft', 'my_framework'); ?></option>
						<option value="turnRight" <?php if ($cycleeffect=='turnRight') { echo 'selected="selected"'; } ?>><?php _e('turnRight', 'my_framework'); ?></option>
						<option value="turnUp" <?php if ($cycleeffect=='turnUp') { echo 'selected="selected"'; } ?>><?php _e('turnUp', 'my_framework'); ?></option>
						<option value="turnDown" <?php if ($cycleeffect=='turnDown') { echo 'selected="selected"'; } ?>><?php _e('turnDown', 'my_framework'); ?></option>
						<option value="cover" <?php if ($cycleeffect=='cover') { echo 'selected="selected"'; } ?>><?php _e('cover', 'my_framework'); ?></option>
						<option value="uncover" <?php if ($cycleeffect=='uncover') { echo 'selected="selected"'; } ?>><?php _e('uncover', 'my_framework'); ?></option>
						<option value="wipe" <?php if ($cycleeffect=='wipe') { echo 'selected="selected"'; } ?>><?php _e('wipe', 'my_framework'); ?></option>
						<option value="shuffle" <?php if ($cycleeffect=='shuffle') { echo 'selected="selected"'; } ?>><?php _e('shuffle', 'my_framework'); ?></option>
						<option value="none" <?php if ($cycleeffect=='none') { echo 'selected="selected"'; } ?>><?php _e('none', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />specify <strong>"effect"</strong> parameter.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $cyclesync = get_option('mytheme_cyclesync'); ?>
					<label for="cyclesync" class="cyclesync-onoff"></label>
					<input type="hidden" name="cyclesync" value="false" />
					<input type="checkbox" name="cyclesync" id="cyclesync" value="true" <?php if ($cyclesync=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('controls whether the <strong>"slide transitions occur simultaneously"</strong>.<br /> some effects behave differently.<br />(such as blind, curtain, and zoom)', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cycleanimspeed" id="cycleanimspeed" size="4" value="<?php echo get_option('mytheme_cycleanimspeed'); ?>"/>
					<div class="description"><?php _e('<br />slide <strong>"transition speed"</strong> (ms) (1000 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cycletimeout" id="cycletimeout" size="4" value="<?php echo get_option('mytheme_cycletimeout'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"timeout"</strong> between slide animation (ms) (5000 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="cycleease">
						<?php $cycleease = get_option('mytheme_cycleease'); ?>
						<option value="" <?php if ($cycleease=='') { echo 'selected="selected"'; } ?>>no easing</option>
						<option value="easeInQuad" <?php if ($cycleease=='easeInQuad') { echo 'selected="selected"'; } ?>>easeInQuad</option>
						<option value="easeOutQuad" <?php if ($cycleease=='easeOutQuad') { echo 'selected="selected"'; } ?>>easeOutQuad</option>
						<option value="easeInOutQuad" <?php if ($cycleease=='easeInOutQuad') { echo 'selected="selected"'; } ?>>easeInOutQuad</option>
						<option value="easeInCubic" <?php if ($cycleease=='easeInCubic') { echo 'selected="selected"'; } ?>>easeInCubic</option>
						<option value="easeOutCubic" <?php if ($cycleease=='easeOutCubic') { echo 'selected="selected"'; } ?>>easeOutCubic</option>
						<option value="easeInOutCubic" <?php if ($cycleease=='easeInOutCubic') { echo 'selected="selected"'; } ?>>easeInOutCubic</option>
						<option value="easeInQuart" <?php if ($cycleease=='easeInQuart') { echo 'selected="selected"'; } ?>>easeInQuart</option>
						<option value="easeOutQuart" <?php if ($cycleease=='easeOutQuart') { echo 'selected="selected"'; } ?>>easeOutQuart</option>
						<option value="easeInOutQuart" <?php if ($cycleease=='easeInOutQuart') { echo 'selected="selected"'; } ?>>easeInOutQuart</option>
						<option value="easeInQuint" <?php if ($cycleease=='easeInQuint') { echo 'selected="selected"'; } ?>>easeInQuint</option>
						<option value="easeOutQuint" <?php if ($cycleease=='easeOutQuint') { echo 'selected="selected"'; } ?>>easeOutQuint</option>
						<option value="easeInOutQuint" <?php if ($cycleease=='easeInOutQuint') { echo 'selected="selected"'; } ?>>easeInOutQuint</option>
						<option value="easeInSine" <?php if ($cycleease=='easeInSine') { echo 'selected="selected"'; } ?>>easeInSine</option>
						<option value="easeOutSine" <?php if ($cycleease=='easeOutSine') { echo 'selected="selected"'; } ?>>easeOutSine</option>
						<option value="easeInOutSine" <?php if ($cycleease=='easeInOutSine') { echo 'selected="selected"'; } ?>>easeInOutSine</option>
						<option value="easeInExpo" <?php if ($cycleease=='easeInExpo') { echo 'selected="selected"'; } ?>>easeInExpo</option>
						<option value="easeOutExpo" <?php if ($cycleease=='easeOutExpo') { echo 'selected="selected"'; } ?>>easeOutExpo</option>
						<option value="easeInOutExpo" <?php if ($cycleease=='easeInOutExpo') { echo 'selected="selected"'; } ?>>easeInOutExpo</option>
						<option value="easeInCirc" <?php if ($cycleease=='easeInCirc') { echo 'selected="selected"'; } ?>>easeInCirc</option>
						<option value="easeOutCirc" <?php if ($cycleease=='easeOutCirc') { echo 'selected="selected"'; } ?>>easeOutCirc</option>
						<option value="easeInOutCirc" <?php if ($cycleease=='easeInOutCirc') { echo 'selected="selected"'; } ?>>easeInOutCirc</option>
						<option value="easeInElastic" <?php if ($cycleease=='easeInElastic') { echo 'selected="selected"'; } ?>>easeInElastic</option>
						<option value="easeOutElastic" <?php if ($cycleease=='easeOutElastic') { echo 'selected="selected"'; } ?>>easeOutElastic</option>
						<option value="easeInOutElastic" <?php if ($cycleease=='easeInOutElastic') { echo 'selected="selected"'; } ?>>easeInOutElastic</option>
						<option value="easeInBack" <?php if ($cycleease=='easeInBack') { echo 'selected="selected"'; } ?>>easeInBack</option>
						<option value="easeOutBack" <?php if ($cycleease=='easeOutBack') { echo 'selected="selected"'; } ?>>easeOutBack</option>
						<option value="easeInOutBack" <?php if ($cycleease=='easeInOutBack') { echo 'selected="selected"'; } ?>>easeInOutBack</option>
						<option value="easeInBounce" <?php if ($cycleease=='easeInBounce') { echo 'selected="selected"'; } ?>>easeInBounce</option>
						<option value="easeOutBounce" <?php if ($cycleease=='easeOutBounce') { echo 'selected="selected"'; } ?>>easeOutBounce</option>
						<option value="easeInOutBounce" <?php if ($cycleease=='easeInOutBounce') { echo 'selected="selected"'; } ?>>easeInOutBounce</option>
					</select>
					<div class="description"><?php _e('<br />a custom <strong>"easing"</strong> function during the animation.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $cyclecaptionanimation = get_option('mytheme_cyclecaptionanimation'); ?>
					<label for="cyclecaptionanimation" class="cyclecaptionanimation-onoff"></label>
					<input type="hidden" name="cyclecaptionanimation" value="false" />
					<input type="checkbox" name="cyclecaptionanimation" id="cyclecaptionanimation" value="true" <?php if ($cyclecaptionanimation=='true' || !$cyclecaptionanimation) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />disable/enable <strong>"second image & caption animation"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="cycleslider-caption" class="pa-option">
				<h4><?php _e('Slider caption', 'my_framework'); ?></h4>
					<div class="row">
					<?php $cyclecaptiononoff = get_option('mytheme_cyclecaptiononoff'); ?>
					<label for="cyclecaptiononoff" class="cyclecaption-onoff"></label>
					<input type="hidden" name="cyclecaptiononoff" value="false" />
					<input type="checkbox" name="cyclecaptiononoff" id="cyclecaptiononoff" value="true" <?php if ($cyclecaptiononoff=='true' || !$cyclecaptiononoff) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable/disable <strong>"caption"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptiontop" id="cyclecaptiontop" size="4" value="<?php echo get_option('mytheme_cyclecaptiontop'); ?>"/>
					<div class="description"><?php _e('set <strong>"top"</strong> for caption.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptionbottom" id="cyclecaptionbottom" size="4" value="<?php echo get_option('mytheme_cyclecaptionbottom'); ?>"/>
					<div class="description"><?php _e('set <strong>"bottom"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptionleft" id="cyclecaptionleft" size="4" value="<?php echo get_option('mytheme_cyclecaptionleft'); ?>"/>
					<div class="description"><?php _e('set <strong>"left"</strong> for caption (0 by default).<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptionright" id="cyclecaptionright" size="4" value="<?php echo get_option('mytheme_cyclecaptionright'); ?>"/>
					<div class="description"><?php _e('set <strong>"right"</strong> for caption.<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptionwidth" id="cyclecaptionwidth" size="4" value="<?php echo get_option('mytheme_cyclecaptionwidth'); ?>"/>
					<div class="description"><?php _e('set <strong>"width"</strong> for caption (100% by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptionheight" id="cyclecaptionheight" size="4" value="<?php echo get_option('mytheme_cyclecaptionheight'); ?>"/>
					<div class="description"><?php _e('set <strong>"height"</strong> for caption (auto by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptionradius" id="cyclecaptionradius" size="4" value="<?php echo get_option('mytheme_cyclecaptionradius'); ?>"/>
					<div class="description"><?php _e('set <strong>"radius"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 20px or 10%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptionpadding" id="cyclecaptionpadding" size="4" value="<?php echo get_option('mytheme_cyclecaptionpadding'); ?>"/>
					<div class="description"><?php _e('set <strong>"padding"</strong> for caption (15px by default).<br />with "px" or em for ex. 20px or 1em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptiontitlecolor" id="cyclecaptiontitlecolor" size="4" value="<?php echo get_option('mytheme_cyclecaptiontitlecolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title color"</strong> for caption title.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptiontitleshadowcolor" id="cyclecaptiontitleshadowcolor" size="4" value="<?php echo get_option('mytheme_cyclecaptiontitleshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title shadow color"</strong> for caption title (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptiontextcolor" id="cyclecaptiontextcolor" size="4" value="<?php echo get_option('mytheme_cyclecaptiontextcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptiontextshadowcolor" id="cyclecaptiontextshadowcolor" size="4" value="<?php echo get_option('mytheme_cyclecaptiontextshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text shadow color"</strong> for caption text (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="cyclecaptiontextalign">
						<?php $cyclecaptiontextalign = get_option('mytheme_cyclecaptiontextalign'); ?>
						<option value="left" <?php if ($cyclecaptiontextalign=='left') { echo 'selected="selected"'; } ?>><?php _e('left', 'my_framework'); ?></option>
						<option value="center" <?php if ($cyclecaptiontextalign=='center') { echo 'selected="selected"'; } ?>><?php _e('center', 'my_framework'); ?></option>
						<option value="right" <?php if ($cyclecaptiontextalign=='right') { echo 'selected="selected"'; } ?>><?php _e('right', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set <strong>"text alignment"</strong> for caption text (left by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptionbgcolor" id="cyclecaptionbgcolor" size="4" value="<?php echo get_option('mytheme_cyclecaptionbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"background-color"</strong> for caption.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $cyclecaptionbgimage = get_option('mytheme_cyclecaptionbgimage'); ?>
					<label for="cyclecaptionbgimage" class="cyclecaptionbgimage-onoff"></label>
					<input type="hidden" name="cyclecaptionbgimage" value="false" />
					<input type="checkbox" name="cyclecaptionbgimage" id="cyclecaptionbgimage" value="true" <?php if ($cyclecaptionbgimage=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show/hide <strong>"background gradient image"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclecaptionopacity" id="cyclecaptionopacity" size="4" value="<?php echo get_option('mytheme_cyclecaptionopacity'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"opacity"</strong> caption (1 by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="cycleslider-misc" class="pa-option">
				<h4><?php _e('Miscellaneous', 'my_framework'); ?></h4>
					<div class="row">
					<?php $cycledirectiononoff = get_option('mytheme_cycledirectiononoff'); ?>
					<label for="cycledirectiononoff" class="cycledirection-onoff"></label>
					<input type="hidden" name="cycledirectiononoff" value="false" />
					<input type="checkbox" name="cycledirectiononoff" id="cycledirectiononoff" value="true" <?php if ($cycledirectiononoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable/disable <strong>direction"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $cyclerandom = get_option('mytheme_cyclerandom'); ?>
					<label for="cyclerandom" class="cyclerandom-onoff"></label>
					<input type="hidden" name="cyclerandom" value="false" />
					<input type="checkbox" name="cyclerandom" id="cyclerandom" value="true" <?php if ($cyclerandom=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('this causes the slides to be shown in <strong>"random order"</strong>, rather than sequential.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $cyclepauseonhover = get_option('mytheme_cyclepauseonhover'); ?>
					<label for="cyclepauseonhover" class="cyclepauseonhover-onoff"></label>
					<input type="hidden" name="cyclepauseonhover" value="false" />
					<input type="checkbox" name="cyclepauseonhover" id="cyclepauseonhover" value="true" <?php if ($cyclepauseonhover=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br /><strong>"pause"</strong> animation while hovering.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclebgcolor" id="cyclebgcolor" size="4" value="<?php echo get_option('mytheme_cyclebgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"background color"</strong> for cycle slider.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cycletopmargin" id="cycletopmargin" size="4" value="<?php echo get_option('mytheme_cycletopmargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"top margin"</strong> for slider (55px by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="cyclebottommargin" id="cyclebottommargin" size="4" value="<?php echo get_option('mytheme_cyclebottommargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"bottom margin"</strong> for slider (0px by default).', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #cycleslider-section -->
			
			
			
			
			<div id="roundaboutslider-section">
				<h2><?php _e('Roundabout Slider Settings', 'my_framework'); ?></h2>
				<div id="roundaboutslider-effect" class="pa-option">
				<h4><?php _e('Slider effects', 'my_framework'); ?></h4>
					<div class="row">
					<select name="roundaboutshape">
						<?php $roundaboutshape = get_option('mytheme_roundaboutshape'); ?>
						<option value="lazySusan" <?php if ($roundaboutshape=='lazySusan') { echo 'selected="selected"'; } ?>><?php _e('Lazy Susan', 'my_framework'); ?></option>
						<option value="waterWheel" <?php if ($roundaboutshape=='waterWheel') { echo 'selected="selected"'; } ?>><?php _e('Water Wheel', 'my_framework'); ?></option>
						<option value="figure8" <?php if ($roundaboutshape=='figure8') { echo 'selected="selected"'; } ?>><?php _e('Figure 8', 'my_framework'); ?></option>
						<option value="square" <?php if ($roundaboutshape=='square') { echo 'selected="selected"'; } ?>><?php _e('Square', 'my_framework'); ?></option>
						<option value="conveyorBeltLeft" <?php if ($roundaboutshape=='conveyorBeltLeft') { echo 'selected="selected"'; } ?>><?php _e('Conveyor Belt Left', 'my_framework'); ?></option>
						<option value="conveyorBeltRight" <?php if ($roundaboutshape=='conveyorBeltRight') { echo 'selected="selected"'; } ?>><?php _e('Conveyor Belt Right', 'my_framework'); ?></option>
						<option value="diagonalRingLeft" <?php if ($roundaboutshape=='diagonalRingLeft') { echo 'selected="selected"'; } ?>><?php _e('Diagonal Ring Left', 'my_framework'); ?></option>
						<option value="diagonalRingRight" <?php if ($roundaboutshape=='diagonalRingRight') { echo 'selected="selected"'; } ?>><?php _e('Diagonal Ring Right', 'my_framework'); ?></option>
						<option value="rollerCoaster" <?php if ($roundaboutshape=='rollerCoaster') { echo 'selected="selected"'; } ?>><?php _e('Roller Coaster', 'my_framework'); ?></option>
						<option value="tearDrop" <?php if ($roundaboutshape=='tearDrop') { echo 'selected="selected"'; } ?>><?php _e('Tear Drop', 'my_framework'); ?></option>
						<option value="theJuggler" <?php if ($roundaboutshape=='theJuggler') { echo 'selected="selected"'; } ?>><?php _e('The Juggler', 'my_framework'); ?></option>
						<option value="goodbyeCruelWorld" <?php if ($roundaboutshape=='goodbyeCruelWorld') { echo 'selected="selected"'; } ?>><?php _e('Goodbye Cruel World', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('select <strong>"shape"</strong> for animation.<br />some of them are not suitable for this theme, It`s your choice.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="roundaboutease">
						<?php $roundaboutease = get_option('mytheme_roundaboutease'); ?>
						<option value="" <?php if ($roundaboutease=='') { echo 'selected="selected"'; } ?>>no easing</option>
						<option value="easeInQuad" <?php if ($roundaboutease=='easeInQuad') { echo 'selected="selected"'; } ?>>easeInQuad</option>
						<option value="easeOutQuad" <?php if ($roundaboutease=='easeOutQuad') { echo 'selected="selected"'; } ?>>easeOutQuad</option>
						<option value="easeInOutQuad" <?php if ($roundaboutease=='easeInOutQuad') { echo 'selected="selected"'; } ?>>easeInOutQuad</option>
						<option value="easeInCubic" <?php if ($roundaboutease=='easeInCubic') { echo 'selected="selected"'; } ?>>easeInCubic</option>
						<option value="easeOutCubic" <?php if ($roundaboutease=='easeOutCubic') { echo 'selected="selected"'; } ?>>easeOutCubic</option>
						<option value="easeInOutCubic" <?php if ($roundaboutease=='easeInOutCubic') { echo 'selected="selected"'; } ?>>easeInOutCubic</option>
						<option value="easeInQuart" <?php if ($roundaboutease=='easeInQuart') { echo 'selected="selected"'; } ?>>easeInQuart</option>
						<option value="easeOutQuart" <?php if ($roundaboutease=='easeOutQuart') { echo 'selected="selected"'; } ?>>easeOutQuart</option>
						<option value="easeInOutQuart" <?php if ($roundaboutease=='easeInOutQuart') { echo 'selected="selected"'; } ?>>easeInOutQuart</option>
						<option value="easeInQuint" <?php if ($roundaboutease=='easeInQuint') { echo 'selected="selected"'; } ?>>easeInQuint</option>
						<option value="easeOutQuint" <?php if ($roundaboutease=='easeOutQuint') { echo 'selected="selected"'; } ?>>easeOutQuint</option>
						<option value="easeInOutQuint" <?php if ($roundaboutease=='easeInOutQuint') { echo 'selected="selected"'; } ?>>easeInOutQuint</option>
						<option value="easeInSine" <?php if ($roundaboutease=='easeInSine') { echo 'selected="selected"'; } ?>>easeInSine</option>
						<option value="easeOutSine" <?php if ($roundaboutease=='easeOutSine') { echo 'selected="selected"'; } ?>>easeOutSine</option>
						<option value="easeInOutSine" <?php if ($roundaboutease=='easeInOutSine') { echo 'selected="selected"'; } ?>>easeInOutSine</option>
						<option value="easeInExpo" <?php if ($roundaboutease=='easeInExpo') { echo 'selected="selected"'; } ?>>easeInExpo</option>
						<option value="easeOutExpo" <?php if ($roundaboutease=='easeOutExpo') { echo 'selected="selected"'; } ?>>easeOutExpo</option>
						<option value="easeInOutExpo" <?php if ($roundaboutease=='easeInOutExpo') { echo 'selected="selected"'; } ?>>easeInOutExpo</option>
						<option value="easeInCirc" <?php if ($roundaboutease=='easeInCirc') { echo 'selected="selected"'; } ?>>easeInCirc</option>
						<option value="easeOutCirc" <?php if ($roundaboutease=='easeOutCirc') { echo 'selected="selected"'; } ?>>easeOutCirc</option>
						<option value="easeInOutCirc" <?php if ($roundaboutease=='easeInOutCirc') { echo 'selected="selected"'; } ?>>easeInOutCirc</option>
						<option value="easeInElastic" <?php if ($roundaboutease=='easeInElastic') { echo 'selected="selected"'; } ?>>easeInElastic</option>
						<option value="easeOutElastic" <?php if ($roundaboutease=='easeOutElastic') { echo 'selected="selected"'; } ?>>easeOutElastic</option>
						<option value="easeInOutElastic" <?php if ($roundaboutease=='easeInOutElastic') { echo 'selected="selected"'; } ?>>easeInOutElastic</option>
						<option value="easeInBack" <?php if ($roundaboutease=='easeInBack') { echo 'selected="selected"'; } ?>>easeInBack</option>
						<option value="easeOutBack" <?php if ($roundaboutease=='easeOutBack') { echo 'selected="selected"'; } ?>>easeOutBack</option>
						<option value="easeInOutBack" <?php if ($roundaboutease=='easeInOutBack') { echo 'selected="selected"'; } ?>>easeInOutBack</option>
						<option value="easeInBounce" <?php if ($roundaboutease=='easeInBounce') { echo 'selected="selected"'; } ?>>easeInBounce</option>
						<option value="easeOutBounce" <?php if ($roundaboutease=='easeOutBounce') { echo 'selected="selected"'; } ?>>easeOutBounce</option>
						<option value="easeInOutBounce" <?php if ($roundaboutease=='easeInOutBounce') { echo 'selected="selected"'; } ?>>easeInOutBounce</option>
					</select>
					<div class="description"><?php _e('<br />a custom <strong>"easing"</strong> function during the animation.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutduration" id="roundaboutduration" size="4" value="<?php echo get_option('mytheme_roundaboutduration'); ?>"/>
					<div class="description"><?php _e('<br />slide <strong>"transition speed"</strong> (ms) (600 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutautoduration" id="roundaboutautoduration" size="4" value="<?php echo get_option('mytheme_roundaboutautoduration'); ?>"/>
					<div class="description"><?php _e('<br /><strong>"timeout"</strong> between slide animation (ms) (3000 by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="roundaboutslider-caption" class="pa-option">
				<h4><?php _e('Slider caption', 'my_framework'); ?></h4>
					<div class="row">
					<?php $roundaboutcaptiononoff = get_option('mytheme_roundaboutcaptiononoff'); ?>
					<label for="roundaboutcaptiononoff" class="roundaboutcaption-onoff"></label>
					<input type="hidden" name="roundaboutcaptiononoff" value="false" />
					<input type="checkbox" name="roundaboutcaptiononoff" id="roundaboutcaptiononoff" value="true" <?php if ($roundaboutcaptiononoff=='true' || !$roundaboutcaptiononoff) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable/disable <strong>"caption"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptiontop" id="roundaboutcaptiontop" size="4" value="<?php echo get_option('mytheme_roundaboutcaptiontop'); ?>"/>
					<div class="description"><?php _e('set <strong>"top"</strong> for caption.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptionbottom" id="roundaboutcaptionbottom" size="4" value="<?php echo get_option('mytheme_roundaboutcaptionbottom'); ?>"/>
					<div class="description"><?php _e('set <strong>"bottom"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptionleft" id="roundaboutcaptionleft" size="4" value="<?php echo get_option('mytheme_roundaboutcaptionleft'); ?>"/>
					<div class="description"><?php _e('set <strong>"left"</strong> for caption (0 by default).<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptionright" id="roundaboutcaptionright" size="4" value="<?php echo get_option('mytheme_roundaboutcaptionright'); ?>"/>
					<div class="description"><?php _e('set <strong>"right"</strong> for caption.<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptionwidth" id="roundaboutcaptionwidth" size="4" value="<?php echo get_option('mytheme_roundaboutcaptionwidth'); ?>"/>
					<div class="description"><?php _e('set <strong>"width"</strong> for caption (100% by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptionheight" id="roundaboutcaptionheight" size="4" value="<?php echo get_option('mytheme_roundaboutcaptionheight'); ?>"/>
					<div class="description"><?php _e('set <strong>"height"</strong> for caption (auto by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptionradius" id="roundaboutcaptionradius" size="4" value="<?php echo get_option('mytheme_roundaboutcaptionradius'); ?>"/>
					<div class="description"><?php _e('set <strong>"radius"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 20px or 10%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptionpadding" id="roundaboutcaptionpadding" size="4" value="<?php echo get_option('mytheme_roundaboutcaptionpadding'); ?>"/>
					<div class="description"><?php _e('set <strong>"padding"</strong> for caption (15px by default).<br />with "px" or em for ex. 20px or 1em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptiontitlecolor" id="roundaboutcaptiontitlecolor" size="4" value="<?php echo get_option('mytheme_roundaboutcaptiontitlecolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title color"</strong> for caption title.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptiontitleshadowcolor" id="roundaboutcaptiontitleshadowcolor" size="4" value="<?php echo get_option('mytheme_roundaboutcaptiontitleshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title shadow color"</strong> for caption title (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptiontextcolor" id="roundaboutcaptiontextcolor" size="4" value="<?php echo get_option('mytheme_roundaboutcaptiontextcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptiontextshadowcolor" id="roundaboutcaptiontextshadowcolor" size="4" value="<?php echo get_option('mytheme_roundaboutcaptiontextshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text shadow color"</strong> for caption text (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="roundaboutcaptiontextalign">
						<?php $roundaboutcaptiontextalign = get_option('mytheme_roundaboutcaptiontextalign'); ?>
						<option value="left" <?php if ($roundaboutcaptiontextalign=='left') { echo 'selected="selected"'; } ?>><?php _e('left', 'my_framework'); ?></option>
						<option value="center" <?php if ($roundaboutcaptiontextalign=='center') { echo 'selected="selected"'; } ?>><?php _e('center', 'my_framework'); ?></option>
						<option value="right" <?php if ($roundaboutcaptiontextalign=='right') { echo 'selected="selected"'; } ?>><?php _e('right', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set <strong>"text alignment"</strong> for caption text (left by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptionbgcolor" id="roundaboutcaptionbgcolor" size="4" value="<?php echo get_option('mytheme_roundaboutcaptionbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"background-color"</strong> for caption.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $roundaboutcaptionbgimage = get_option('mytheme_roundaboutcaptionbgimage'); ?>
					<label for="roundaboutcaptionbgimage" class="roundaboutcaptionbgimage-onoff"></label>
					<input type="hidden" name="roundaboutcaptionbgimage" value="false" />
					<input type="checkbox" name="roundaboutcaptionbgimage" id="roundaboutcaptionbgimage" value="true" <?php if ($roundaboutcaptionbgimage=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show/hide <strong>"background gradient image"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutcaptionopacity" id="roundaboutcaptionopacity" size="4" value="<?php echo get_option('mytheme_roundaboutcaptionopacity'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"opacity"</strong> caption (1 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $roundaboutcaptionontop = get_option('mytheme_roundaboutcaptionontop'); ?>
					<label for="roundaboutcaptionontop" class="roundaboutcaptionontop-onoff"></label>
					<input type="hidden" name="roundaboutcaptionontop" value="false" />
					<input type="checkbox" name="roundaboutcaptionontop" id="roundaboutcaptionontop" value="true" <?php if ($roundaboutcaptionontop=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('put <strong>"title on top"</strong> of the slider elements.<br />when it is on, caption text is hidden', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="roundaboutslider-misc" class="pa-option">
				<h4><?php _e('Miscellaneous', 'my_framework'); ?></h4>
					<div class="row">
					<?php $roundaboutdirectiononoff = get_option('mytheme_roundaboutdirectiononoff'); ?>
					<label for="roundaboutdirectiononoff" class="roundaboutdirection-onoff"></label>
					<input type="hidden" name="roundaboutdirectiononoff" value="false" />
					<input type="checkbox" name="roundaboutdirectiononoff" id="roundaboutdirectiononoff" value="true" <?php if ($roundaboutdirectiononoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable/disable <strong>direction"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $roundaboutautoplay = get_option('mytheme_roundaboutautoplay'); ?>
					<label for="roundaboutautoplay" class="roundaboutautoplay-onoff"></label>
					<input type="hidden" name="roundaboutautoplay" value="false" />
					<input type="checkbox" name="roundaboutautoplay" id="roundaboutautoplay" value="true" <?php if ($roundaboutautoplay=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable <strong>"autoplay"</strong> animation.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $roundaboutreflect = get_option('mytheme_roundaboutreflect'); ?>
					<label for="roundaboutreflect" class="roundaboutreflect-onoff"></label>
					<input type="hidden" name="roundaboutreflect" value="false" />
					<input type="checkbox" name="roundaboutreflect" id="roundaboutreflect" value="true" <?php if ($roundaboutreflect=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable <strong>"reverses"</strong> the direction in which Roundabout will operate.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $roundaboutpauseonhover = get_option('mytheme_roundaboutpauseonhover'); ?>
					<label for="roundaboutpauseonhover" class="roundaboutpauseonhover-onoff"></label>
					<input type="hidden" name="roundaboutpauseonhover" value="false" />
					<input type="checkbox" name="roundaboutpauseonhover" id="roundaboutpauseonhover" value="true" <?php if ($roundaboutpauseonhover=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br /><strong>"pause"</strong> animation while hovering.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutminopacity" id="roundaboutminopacity" size="4" value="<?php echo get_option('mytheme_roundaboutminopacity'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"lowest opacity"</strong> that will be assigned to a moving element (1 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutminscale" id="roundaboutminscale" size="4" value="<?php echo get_option('mytheme_roundaboutminscale'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"lowest size"</strong> (relative to its starting size) that will be assigned to a moving element (0.4 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutmaxscale" id="roundaboutmaxscale" size="4" value="<?php echo get_option('mytheme_roundaboutmaxscale'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"greatest size"</strong> (relative to its starting size) that will be assigned to a moving element (1 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutbordercolor" id="roundaboutbordercolor" size="4" value="<?php echo get_option('mytheme_roundaboutbordercolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('<br />set <strong>"bottom border color"</strong> for slider elements.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundabouttopmargin" id="roundabouttopmargin" size="4" value="<?php echo get_option('mytheme_roundabouttopmargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"top margin"</strong> for slider (55px by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="roundaboutbottommargin" id="roundaboutbottommargin" size="4" value="<?php echo get_option('mytheme_roundaboutbottommargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"bottom margin"</strong> for slider (0px by default).', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #roundaboutslider-section -->
			
			
			
			
			<div id="liteaccordionslider-section">
				<h2><?php _e('Liteaccordion Slider Settings', 'my_framework'); ?></h2>
				<div id="liteaccordionslider-effect" class="pa-option">
				<h4><?php _e('Slider effects', 'my_framework'); ?></h4>
					<div class="row">
					<select name="liteaccordionease">
						<?php $liteaccordionease = get_option('mytheme_liteaccordionease'); ?>
						<option value="swing" <?php if ($liteaccordionease=='swing') { echo 'selected="selected"'; } ?>>no easing</option>
						<option value="easeInQuad" <?php if ($liteaccordionease=='easeInQuad') { echo 'selected="selected"'; } ?>>easeInQuad</option>
						<option value="easeOutQuad" <?php if ($liteaccordionease=='easeOutQuad') { echo 'selected="selected"'; } ?>>easeOutQuad</option>
						<option value="easeInOutQuad" <?php if ($liteaccordionease=='easeInOutQuad') { echo 'selected="selected"'; } ?>>easeInOutQuad</option>
						<option value="easeInCubic" <?php if ($liteaccordionease=='easeInCubic') { echo 'selected="selected"'; } ?>>easeInCubic</option>
						<option value="easeOutCubic" <?php if ($liteaccordionease=='easeOutCubic') { echo 'selected="selected"'; } ?>>easeOutCubic</option>
						<option value="easeInOutCubic" <?php if ($liteaccordionease=='easeInOutCubic') { echo 'selected="selected"'; } ?>>easeInOutCubic</option>
						<option value="easeInQuart" <?php if ($liteaccordionease=='easeInQuart') { echo 'selected="selected"'; } ?>>easeInQuart</option>
						<option value="easeOutQuart" <?php if ($liteaccordionease=='easeOutQuart') { echo 'selected="selected"'; } ?>>easeOutQuart</option>
						<option value="easeInOutQuart" <?php if ($liteaccordionease=='easeInOutQuart') { echo 'selected="selected"'; } ?>>easeInOutQuart</option>
						<option value="easeInQuint" <?php if ($liteaccordionease=='easeInQuint') { echo 'selected="selected"'; } ?>>easeInQuint</option>
						<option value="easeOutQuint" <?php if ($liteaccordionease=='easeOutQuint') { echo 'selected="selected"'; } ?>>easeOutQuint</option>
						<option value="easeInOutQuint" <?php if ($liteaccordionease=='easeInOutQuint') { echo 'selected="selected"'; } ?>>easeInOutQuint</option>
						<option value="easeInSine" <?php if ($liteaccordionease=='easeInSine') { echo 'selected="selected"'; } ?>>easeInSine</option>
						<option value="easeOutSine" <?php if ($liteaccordionease=='easeOutSine') { echo 'selected="selected"'; } ?>>easeOutSine</option>
						<option value="easeInOutSine" <?php if ($liteaccordionease=='easeInOutSine') { echo 'selected="selected"'; } ?>>easeInOutSine</option>
						<option value="easeInExpo" <?php if ($liteaccordionease=='easeInExpo') { echo 'selected="selected"'; } ?>>easeInExpo</option>
						<option value="easeOutExpo" <?php if ($liteaccordionease=='easeOutExpo') { echo 'selected="selected"'; } ?>>easeOutExpo</option>
						<option value="easeInOutExpo" <?php if ($liteaccordionease=='easeInOutExpo') { echo 'selected="selected"'; } ?>>easeInOutExpo</option>
						<option value="easeInCirc" <?php if ($liteaccordionease=='easeInCirc') { echo 'selected="selected"'; } ?>>easeInCirc</option>
						<option value="easeOutCirc" <?php if ($liteaccordionease=='easeOutCirc') { echo 'selected="selected"'; } ?>>easeOutCirc</option>
						<option value="easeInOutCirc" <?php if ($liteaccordionease=='easeInOutCirc') { echo 'selected="selected"'; } ?>>easeInOutCirc</option>
						<option value="easeInElastic" <?php if ($liteaccordionease=='easeInElastic') { echo 'selected="selected"'; } ?>>easeInElastic</option>
						<option value="easeOutElastic" <?php if ($liteaccordionease=='easeOutElastic') { echo 'selected="selected"'; } ?>>easeOutElastic</option>
						<option value="easeInOutElastic" <?php if ($liteaccordionease=='easeInOutElastic') { echo 'selected="selected"'; } ?>>easeInOutElastic</option>
						<option value="easeInBack" <?php if ($liteaccordionease=='easeInBack') { echo 'selected="selected"'; } ?>>easeInBack</option>
						<option value="easeOutBack" <?php if ($liteaccordionease=='easeOutBack') { echo 'selected="selected"'; } ?>>easeOutBack</option>
						<option value="easeInOutBack" <?php if ($liteaccordionease=='easeInOutBack') { echo 'selected="selected"'; } ?>>easeInOutBack</option>
						<option value="easeInBounce" <?php if ($liteaccordionease=='easeInBounce') { echo 'selected="selected"'; } ?>>easeInBounce</option>
						<option value="easeOutBounce" <?php if ($liteaccordionease=='easeOutBounce') { echo 'selected="selected"'; } ?>>easeOutBounce</option>
						<option value="easeInOutBounce" <?php if ($liteaccordionease=='easeInOutBounce') { echo 'selected="selected"'; } ?>>easeInOutBounce</option>
					</select>
					<div class="description"><?php _e('<br />a custom <strong>"easing"</strong> function during the animation.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordionslidespeed" id="liteaccordionslidespeed" size="4" value="<?php echo get_option('mytheme_liteaccordionslidespeed'); ?>"/>
					<div class="description"><?php _e('<br />slide <strong>"transition speed"</strong> (ms) (800 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncyclespeed" id="liteaccordioncyclespeed" size="4" value="<?php echo get_option('mytheme_liteaccordioncyclespeed'); ?>"/>
					<div class="description"><?php _e('<br /><strong>"timeout"</strong> between slide animation (ms) (6000 by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="liteaccordionslider-caption" class="pa-option">
				<h4><?php _e('Slider caption', 'my_framework'); ?></h4>
					<div class="row">
					<?php $liteaccordioncaptiononoff = get_option('mytheme_liteaccordioncaptiononoff'); ?>
					<label for="liteaccordioncaptiononoff" class="liteaccordioncaption-onoff"></label>
					<input type="hidden" name="liteaccordioncaptiononoff" value="false" />
					<input type="checkbox" name="liteaccordioncaptiononoff" id="liteaccordioncaptiononoff" value="true" <?php if ($liteaccordioncaptiononoff=='true' || !$liteaccordioncaptiononoff) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable/disable <strong>"caption"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptiontop" id="liteaccordioncaptiontop" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptiontop'); ?>"/>
					<div class="description"><?php _e('set <strong>"top"</strong> for caption.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptionbottom" id="liteaccordioncaptionbottom" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptionbottom'); ?>"/>
					<div class="description"><?php _e('set <strong>"bottom"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptionleft" id="liteaccordioncaptionleft" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptionleft'); ?>"/>
					<div class="description"><?php _e('set <strong>"left"</strong> for caption (0 by default).<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptionright" id="liteaccordioncaptionright" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptionright'); ?>"/>
					<div class="description"><?php _e('set <strong>"right"</strong> for caption.<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptionwidth" id="liteaccordioncaptionwidth" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptionwidth'); ?>"/>
					<div class="description"><?php _e('set <strong>"width"</strong> for caption (100% by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptionheight" id="liteaccordioncaptionheight" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptionheight'); ?>"/>
					<div class="description"><?php _e('set <strong>"height"</strong> for caption (auto by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptionradius" id="liteaccordioncaptionradius" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptionradius'); ?>"/>
					<div class="description"><?php _e('set <strong>"radius"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 20px or 10%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptionpadding" id="liteaccordioncaptionpadding" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptionpadding'); ?>"/>
					<div class="description"><?php _e('set <strong>"padding"</strong> for caption (15px by default).<br />with "px" or em for ex. 20px or 1em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptiontitlecolor" id="liteaccordioncaptiontitlecolor" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptiontitlecolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title color"</strong> for caption title.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptiontitleshadowcolor" id="liteaccordioncaptiontitleshadowcolor" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptiontitleshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title shadow color"</strong> for caption title (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptiontextcolor" id="liteaccordioncaptiontextcolor" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptiontextcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptiontextshadowcolor" id="liteaccordioncaptiontextshadowcolor" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptiontextshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text shadow color"</strong> for caption text (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="liteaccordioncaptiontextalign">
						<?php $liteaccordioncaptiontextalign = get_option('mytheme_liteaccordioncaptiontextalign'); ?>
						<option value="left" <?php if ($liteaccordioncaptiontextalign=='left') { echo 'selected="selected"'; } ?>><?php _e('left', 'my_framework'); ?></option>
						<option value="center" <?php if ($liteaccordioncaptiontextalign=='center') { echo 'selected="selected"'; } ?>><?php _e('center', 'my_framework'); ?></option>
						<option value="right" <?php if ($liteaccordioncaptiontextalign=='right') { echo 'selected="selected"'; } ?>><?php _e('right', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set <strong>"text alignment"</strong> for caption text (left by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptionbgcolor" id="liteaccordioncaptionbgcolor" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptionbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"background-color"</strong> for caption.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $liteaccordioncaptionbgimage = get_option('mytheme_liteaccordioncaptionbgimage'); ?>
					<label for="liteaccordioncaptionbgimage" class="liteaccordioncaptionbgimage-onoff"></label>
					<input type="hidden" name="liteaccordioncaptionbgimage" value="false" />
					<input type="checkbox" name="liteaccordioncaptionbgimage" id="liteaccordioncaptionbgimage" value="true" <?php if ($liteaccordioncaptionbgimage=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show/hide <strong>"background gradient image"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordioncaptionopacity" id="liteaccordioncaptionopacity" size="4" value="<?php echo get_option('mytheme_liteaccordioncaptionopacity'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"opacity"</strong> caption (1 by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="liteaccordionslider-itemcolor" class="pa-option">
				<h4><?php _e('Items color', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="liteaccordionbgcolor" id="liteaccordionbgcolor" size="4" value="<?php echo get_option('mytheme_liteaccordionbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"item background color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordionnamecolor" id="liteaccordionnamecolor" size="4" value="<?php echo get_option('mytheme_liteaccordionnamecolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"item name color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordionactivenamecolor" id="liteaccordionactivenamecolor" size="4" value="<?php echo get_option('mytheme_liteaccordionactivenamecolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"item active name color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordionnumbercolor" id="liteaccordionnumbercolor" size="4" value="<?php echo get_option('mytheme_liteaccordionnumbercolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"item number color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordionactivenumbercolor" id="liteaccordionactivenumbercolor" size="4" value="<?php echo get_option('mytheme_liteaccordionactivenumbercolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"item active number color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordionbordercolor" id="liteaccordionbordercolor" size="4" value="<?php echo get_option('mytheme_liteaccordionbordercolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"item border color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordionactivebordercolor" id="liteaccordionactivebordercolor" size="4" value="<?php echo get_option('mytheme_liteaccordionactivebordercolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"item active border color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="liteaccordionslider-misc" class="pa-option">
				<h4><?php _e('Miscellaneous', 'my_framework'); ?></h4>
					<div class="row">
					<select name="liteaccordionactivateon">
						<?php $liteaccordionactivateon = get_option('mytheme_liteaccordionactivateon'); ?>
						<option value="click" <?php if ($liteaccordionactivateon=='click') { echo 'selected="selected"'; } ?>><?php _e('click', 'my_framework'); ?></option>
						<option value="mouseover" <?php if ($liteaccordionactivateon=='mouseover') { echo 'selected="selected"'; } ?>><?php _e('mouse over', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />the <strong>"event"</strong> that triggers the expand effect.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $liteaccordionautoplay = get_option('mytheme_liteaccordionautoplay'); ?>
					<label for="liteaccordionautoplay" class="liteaccordionautoplay-onoff"></label>
					<input type="hidden" name="liteaccordionautoplay" value="false" />
					<input type="checkbox" name="liteaccordionautoplay" id="liteaccordionautoplay" value="true" <?php if ($liteaccordionautoplay=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable <strong>"autoplay"</strong> animation.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $liteaccordionpauseonhover = get_option('mytheme_liteaccordionpauseonhover'); ?>
					<label for="liteaccordionpauseonhover" class="liteaccordionpauseonhover-onoff"></label>
					<input type="hidden" name="liteaccordionpauseonhover" value="false" />
					<input type="checkbox" name="liteaccordionpauseonhover" id="liteaccordionpauseonhover" value="true" <?php if ($liteaccordionpauseonhover=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br /><strong>"pause"</strong> animation while hovering.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordionactiveslide" id="liteaccordionactiveslide" size="4" value="<?php echo get_option('mytheme_liteaccordionactiveslide'); ?>"/>
					<div class="description"><?php _e('<br />displays <strong>"which slide on"</strong> page load.  (1 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $liteaccordionrounded = get_option('mytheme_liteaccordionrounded'); ?>
					<label for="liteaccordionrounded" class="liteaccordionrounded-onoff"></label>
					<input type="hidden" name="liteaccordionrounded" value="false" />
					<input type="checkbox" name="liteaccordionrounded" id="liteaccordionrounded" value="true" <?php if ($liteaccordionrounded=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable <strong>"rounded corner"</strong> for slider wrapper.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordiontopmargin" id="liteaccordiontopmargin" size="4" value="<?php echo get_option('mytheme_liteaccordiontopmargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"top margin"</strong> for slider (55px by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="liteaccordionbottommargin" id="liteaccordionbottommargin" size="4" value="<?php echo get_option('mytheme_liteaccordionbottommargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"bottom margin"</strong> for slider (0px by default).', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #liteaccordionslider-section -->
			
			
			
			
			<div id="tmslider-section">
				<h2><?php _e('TM Slider Settings', 'my_framework'); ?></h2>
				<div id="tmslider-effect" class="pa-option">
				<h4><?php _e('Slider effects', 'my_framework'); ?></h4>
					<div class="row">
					<select name="tmeffect">
						<?php $tmeffect = get_option('mytheme_tmeffect'); ?>
						<option value="zoomer" <?php if ($tmeffect=='zoomer') { echo 'selected="selected"'; } ?>><?php _e('zoomer', 'my_framework'); ?></option>
						<option value="centralExpand" <?php if ($tmeffect=='centralExpand') { echo 'selected="selected"'; } ?>><?php _e('centralExpand', 'my_framework'); ?></option>
						<option value="fadeThree" <?php if ($tmeffect=='fadeThree') { echo 'selected="selected"'; } ?>><?php _e('fadeThree', 'my_framework'); ?></option>
						<option value="simpleFade" <?php if ($tmeffect=='simpleFade') { echo 'selected="selected"'; } ?>><?php _e('simpleFade', 'my_framework'); ?></option>
						<option value="gSlider" <?php if ($tmeffect=='gSlider') { echo 'selected="selected"'; } ?>><?php _e('gSlider', 'my_framework'); ?></option>
						<option value="vSlider" <?php if ($tmeffect=='vSlider') { echo 'selected="selected"'; } ?>><?php _e('vSlider', 'my_framework'); ?></option>
						<option value="slideFromLeft" <?php if ($tmeffect=='slideFromLeft') { echo 'selected="selected"'; } ?>><?php _e('slideFromLeft', 'my_framework'); ?></option>
						<option value="slideFromTop" <?php if ($tmeffect=='slideFromTop') { echo 'selected="selected"'; } ?>><?php _e('slideFromTop', 'my_framework'); ?></option>
						<option value="diagonalFade" <?php if ($tmeffect=='diagonalFade') { echo 'selected="selected"'; } ?>><?php _e('diagonalFade', 'my_framework'); ?></option>
						<option value="diagonalExpand" <?php if ($tmeffect=='diagonalExpand') { echo 'selected="selected"'; } ?>><?php _e('diagonalExpand', 'my_framework'); ?></option>
						<option value="fadeFromCenter" <?php if ($tmeffect=='fadeFromCenter') { echo 'selected="selected"'; } ?>><?php _e('fadeFromCenter', 'my_framework'); ?></option>
						<option value="zabor" <?php if ($tmeffect=='zabor') { echo 'selected="selected"'; } ?>><?php _e('zabor', 'my_framework'); ?></option>
						<option value="vertivalLines" <?php if ($tmeffect=='vertivalLines') { echo 'selected="selected"'; } ?>><?php _e('vertivalLines', 'my_framework'); ?></option>
						<option value="gorizontalLines" <?php if ($tmeffect=='gorizontalLines') { echo 'selected="selected"'; } ?>><?php _e('gorizontalLines', 'my_framework'); ?></option>
						<option value="random" <?php if ($tmeffect=='random') { echo 'selected="selected"'; } ?>><?php _e('random', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />specify <strong>"effect"</strong> parameter.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmduration" id="tmduration" size="4" value="<?php echo get_option('mytheme_tmduration'); ?>"/>
					<div class="description"><?php _e('slide <strong>"transition speed"</strong> (ms) (10000 by default).<br />for zoomer effect must be rather than 4000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmslideshow" id="tmslideshow" size="4" value="<?php echo get_option('mytheme_tmslideshow'); ?>"/>
					<div class="description"><?php _e('<br /><strong>"timeout"</strong> between slide animation (ms) (7000 by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="tmslider-caption" class="pa-option">
				<h4><?php _e('Slider caption', 'my_framework'); ?></h4>
					<div class="row">
					<?php $tmcaptiononoff = get_option('mytheme_tmcaptiononoff'); ?>
					<label for="tmcaptiononoff" class="tmcaption-onoff"></label>
					<input type="hidden" name="tmcaptiononoff" value="false" />
					<input type="checkbox" name="tmcaptiononoff" id="tmcaptiononoff" value="true" <?php if ($tmcaptiononoff=='true' || !$tmcaptiononoff) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable/disable <strong>"caption"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptiontop" id="tmcaptiontop" size="4" value="<?php echo get_option('mytheme_tmcaptiontop'); ?>"/>
					<div class="description"><?php _e('set <strong>"top"</strong> for caption.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptionbottom" id="tmcaptionbottom" size="4" value="<?php echo get_option('mytheme_tmcaptionbottom'); ?>"/>
					<div class="description"><?php _e('set <strong>"bottom"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptionleft" id="tmcaptionleft" size="4" value="<?php echo get_option('mytheme_tmcaptionleft'); ?>"/>
					<div class="description"><?php _e('set <strong>"left"</strong> for caption (0 by default).<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptionright" id="tmcaptionright" size="4" value="<?php echo get_option('mytheme_tmcaptionright'); ?>"/>
					<div class="description"><?php _e('set <strong>"right"</strong> for caption.<br />when "left" is set, "right" will be ignored.<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptionwidth" id="tmcaptionwidth" size="4" value="<?php echo get_option('mytheme_tmcaptionwidth'); ?>"/>
					<div class="description"><?php _e('set <strong>"width"</strong> for caption (100% by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptionheight" id="tmcaptionheight" size="4" value="<?php echo get_option('mytheme_tmcaptionheight'); ?>"/>
					<div class="description"><?php _e('set <strong>"height"</strong> for caption (auto by default).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptionradius" id="tmcaptionradius" size="4" value="<?php echo get_option('mytheme_tmcaptionradius'); ?>"/>
					<div class="description"><?php _e('set <strong>"radius"</strong> for caption (0 by default).<br />with "px" or in percent for ex. 20px or 10%', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptionpadding" id="tmcaptionpadding" size="4" value="<?php echo get_option('mytheme_tmcaptionpadding'); ?>"/>
					<div class="description"><?php _e('set <strong>"padding"</strong> for caption (15px by default).<br />with "px" or em for ex. 20px or 1em', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptiontitlecolor" id="tmcaptiontitlecolor" size="4" value="<?php echo get_option('mytheme_tmcaptiontitlecolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title color"</strong> for caption title.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptiontitleshadowcolor" id="tmcaptiontitleshadowcolor" size="4" value="<?php echo get_option('mytheme_tmcaptiontitleshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"title shadow color"</strong> for caption title (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptiontextcolor" id="tmcaptiontextcolor" size="4" value="<?php echo get_option('mytheme_tmcaptiontextcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text color"</strong> for caption text.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptiontextshadowcolor" id="tmcaptiontextshadowcolor" size="4" value="<?php echo get_option('mytheme_tmcaptiontextshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"text shadow color"</strong> for caption text (no default).<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="tmcaptiontextalign">
						<?php $tmcaptiontextalign = get_option('mytheme_tmcaptiontextalign'); ?>
						<option value="left" <?php if ($tmcaptiontextalign=='left') { echo 'selected="selected"'; } ?>><?php _e('left', 'my_framework'); ?></option>
						<option value="center" <?php if ($tmcaptiontextalign=='center') { echo 'selected="selected"'; } ?>><?php _e('center', 'my_framework'); ?></option>
						<option value="right" <?php if ($tmcaptiontextalign=='right') { echo 'selected="selected"'; } ?>><?php _e('right', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set <strong>"text alignment"</strong> for caption text (left by default).<', 'my_framework'); ?>/div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptionbgcolor" id="tmcaptionbgcolor" size="4" value="<?php echo get_option('mytheme_tmcaptionbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('set <strong>"background-color"</strong> for caption.<br />use color name for ex. blue<br />use hex color for ex #ff0000', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $tmcaptionbgimage = get_option('mytheme_tmcaptionbgimage'); ?>
					<label for="tmcaptionbgimage" class="tmcaptionbgimage-onoff"></label>
					<input type="hidden" name="tmcaptionbgimage" value="false" />
					<input type="checkbox" name="tmcaptionbgimage" id="tmcaptionbgimage" value="true" <?php if ($tmcaptionbgimage=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show/hide <strong>"background gradient image"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmcaptionopacity" id="tmcaptionopacity" size="4" value="<?php echo get_option('mytheme_tmcaptionopacity'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"opacity"</strong> caption (1 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $tmcaptiononbottom = get_option('mytheme_tmcaptiononbottom'); ?>
					<label for="tmcaptiononbottom" class="tmcaptiononbottom-onoff"></label>
					<input type="hidden" name="tmcaptiononbottom" value="false" />
					<input type="checkbox" name="tmcaptiononbottom" id="tmcaptiononbottom" value="true" <?php if ($tmcaptiononbottom=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('put <strong>"title on bottom"</strong> of the slider wrapper.<br />when it is on, caption text is hidden', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="tmslider-misc" class="pa-option">
				<h4><?php _e('Miscellaneous', 'my_framework'); ?></h4>
					<div class="row">
					<?php $tmdirectiononoff = get_option('mytheme_tmdirectiononoff'); ?>
					<label for="tmdirectiononoff" class="tmdirection-onoff"></label>
					<input type="hidden" name="tmdirectiononoff" value="false" />
					<input type="checkbox" name="tmdirectiononoff" id="tmdirectiononoff" value="true" <?php if ($tmdirectiononoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />enable/disable <strong>direction"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $tmpauseonhover = get_option('mytheme_tmpauseonhover'); ?>
					<label for="tmpauseonhover" class="tmpauseonhover-onoff"></label>
					<input type="hidden" name="tmpauseonhover" value="false" />
					<input type="checkbox" name="tmpauseonhover" id="tmpauseonhover" value="true" <?php if ($tmpauseonhover=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br /><strong>"pause"</strong> animation while hovering.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmwidth" id="tmwidth" size="4" value="<?php echo get_option('mytheme_tmwidth'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"width"</strong> for slider (1680px by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmshow" id="tmshow" size="4" value="<?php echo get_option('mytheme_tmshow'); ?>"/>
					<div class="description"><?php _e('<br />displays <strong>"which slide on"</strong> page load (0 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmbgcolor" id="tmbgcolor" size="4" value="<?php echo get_option('mytheme_tmbgcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('<br />set <strong>"background color"</strong> for slider.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmtopmargin" id="tmtopmargin" size="4" value="<?php echo get_option('mytheme_tmtopmargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"top margin"</strong> for slider (0px by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="tmbottommargin" id="tmbottommargin" size="4" value="<?php echo get_option('mytheme_tmbottommargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"bottom margin"</strong> for slider (0px by default).', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #tmslider-section -->
			
			
			
			
			<div id="bgstretcherslider-section">
				<h2><?php _e('Bgstretcher Slider Settings', 'my_framework'); ?></h2>
				<div id="bgstretcherslider-effect" class="pa-option">
				<h4><?php _e('Slider effects', 'my_framework'); ?></h4>
					<div class="row">
					<select name="bgstretchereffect">
						<?php $bgstretchereffect = get_option('mytheme_bgstretchereffect'); ?>
						<option value="fade" <?php if ($bgstretchereffect=='fade') { echo 'selected="selected"'; } ?>><?php _e('fade', 'my_framework'); ?></option>
						<option value="simpleSlide" <?php if ($bgstretchereffect=='simpleSlide') { echo 'selected="selected"'; } ?>><?php _e('simple slide', 'my_framework'); ?></option>
						<option value="superSlide" <?php if ($bgstretchereffect=='superSlide') { echo 'selected="selected"'; } ?>><?php _e('super slide', 'my_framework'); ?></option>
						<option value="none" <?php if ($bgstretchereffect=='none') { echo 'selected="selected"'; } ?>><?php _e('none', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />specify <strong>"effect"</strong> parameter.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="bgstretcherslidedirection">
						<?php $bgstretcherslidedirection = get_option('mytheme_bgstretcherslidedirection'); ?>
						<option value="W" <?php if ($bgstretcherslidedirection=='W') { echo 'selected="selected"'; } ?>><?php _e('from left', 'my_framework'); ?></option>
						<option value="E" <?php if ($bgstretcherslidedirection=='E') { echo 'selected="selected"'; } ?>><?php _e('from right', 'my_framework'); ?></option>
						<option value="N" <?php if ($bgstretcherslidedirection=='N') { echo 'selected="selected"'; } ?>><?php _e('from top', 'my_framework'); ?></option>
						<option value="S" <?php if ($bgstretcherslidedirection=='S') { echo 'selected="selected"'; } ?>><?php _e('from bottom', 'my_framework'); ?></option>
						<option value="NW" <?php if ($bgstretcherslidedirection=='NW') { echo 'selected="selected"'; } ?>><?php _e('from top left', 'my_framework'); ?></option>
						<option value="NE" <?php if ($bgstretcherslidedirection=='NE') { echo 'selected="selected"'; } ?>><?php _e('from top right', 'my_framework'); ?></option>
						<option value="SW" <?php if ($bgstretcherslidedirection=='SW') { echo 'selected="selected"'; } ?>><?php _e('from bottom left', 'my_framework'); ?></option>
						<option value="SE" <?php if ($bgstretcherslidedirection=='SE') { echo 'selected="selected"'; } ?>><?php _e('from bottom right', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('specify <strong>"Slide Direction"</strong> parameter.<br />choose top right, top left, bottom right, bottom left when "superSlide" is selected for effect.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretcherspeed" id="bgstretcherspeed" size="4" value="<?php echo get_option('mytheme_bgstretcherspeed'); ?>"/>
					<div class="description"><?php _e('<br />slide <strong>"transition speed"</strong> (ms) (1000 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretcherdelay" id="bgstretcherdelay" size="4" value="<?php echo get_option('mytheme_bgstretcherdelay'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"delay"</strong> between slide animation (ms) (6000 by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="bgstretcherslider-misc" class="pa-option">
				<h4><?php _e('Image Setting', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="bgstretcherwidth" id="bgstretcherwidth" size="4" value="<?php echo get_option('mytheme_bgstretcherwidth'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"width"</strong> for images. (1024 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretcherheight" id="bgstretcherheight" size="4" value="<?php echo get_option('mytheme_bgstretcherheight'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"height"</strong> for images. (768 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretchermaxwidth" id="bgstretchermaxwidth" size="4" value="<?php echo get_option('mytheme_bgstretchermaxwidth'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"maximum width"</strong> for images. (auto by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretchermaxheight" id="bgstretchermaxheight" size="4" value="<?php echo get_option('mytheme_bgstretchermaxheight'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"maximum height"</strong> for images. (auto by default).', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="bgstretcherslider-pagination" class="pa-option">
				<h4><?php _e('Pagination', 'my_framework'); ?></h4>
					<div class="row">
					<?php $bgstretcherpagination = get_option('mytheme_bgstretcherpagination'); ?>
					<label for="bgstretcherpagination" class="bgstretcherpagination-onoff"></label>
					<input type="hidden" name="bgstretcherpagination" value="false" />
					<input type="checkbox" name="bgstretcherpagination" id="bgstretcherpagination" value="true" <?php if ($bgstretcherpagination=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />disable/enable <strong>"pagination"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretcherpaginationtop" id="bgstretcherpaginationtop" size="4" value="<?php echo get_option('mytheme_bgstretcherpaginationtop'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"top"</strong> for pagination.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretcherpaginationleft" id="bgstretcherpaginationleft" size="4" value="<?php echo get_option('mytheme_bgstretcherpaginationleft'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"left"</strong> for pagination.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretcherpaginationmargin" id="bgstretcherpaginationmargin" size="4" value="<?php echo get_option('mytheme_bgstretcherpaginationmargin'); ?>"/>
					<div class="description"><?php _e('<br />set <strong>"margin"</strong> for pagination.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretcherpaginationcolor" id="bgstretcherpaginationcolor" size="4" value="<?php echo get_option('mytheme_bgstretcherpaginationcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('<br />set color for <strong>"pagination"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretcherpaginationactivecolor" id="bgstretcherpaginationactivecolor" size="4" value="<?php echo get_option('mytheme_bgstretcherpaginationactivecolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('<br />set color for <strong>"active pagination"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bgstretcherpaginationshadowcolor" id="bgstretcherpaginationshadowcolor" size="4" value="<?php echo get_option('mytheme_bgstretcherpaginationshadowcolor'); ?>" class="coloring"/>
					<div class="description"><?php _e('<br />set color for <strong>"pagination shadow"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="bgstretcherslider-misc" class="pa-option">
				<h4><?php _e('Miscellaneous', 'my_framework'); ?></h4>
					<div class="row">
					<?php $bgstretcherposition = get_option('mytheme_bgstretcherposition'); ?>
					<label for="bgstretcherposition" class="bgstretcherposition-onoff"></label>
					<input type="hidden" name="bgstretcherposition" value="false" />
					<input type="checkbox" name="bgstretcherposition" id="bgstretcherposition" value="true" <?php if ($bgstretcherposition=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />change position from <strong>"fixed to absolute"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="bgstretchermode">
						<?php $bgstretchermode = get_option('mytheme_bgstretchermode'); ?>
						<option value="normal" <?php if ($bgstretchermode=='normal') { echo 'selected="selected"'; } ?>><?php _e('normal', 'my_framework'); ?></option>
						<option value="back" <?php if ($bgstretchermode=='back') { echo 'selected="selected"'; } ?>><?php _e('back', 'my_framework'); ?></option>
						<option value="random" <?php if ($bgstretchermode=='random') { echo 'selected="selected"'; } ?>><?php _e('random', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />displays <strong>"how slides play"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="bgstretcheranchor">
						<?php $bgstretcheranchor = get_option('mytheme_bgstretcheranchor'); ?>
						<option value="left top" <?php if ($bgstretcheranchor=='left top') { echo 'selected="selected"'; } ?>><?php _e('left top', 'my_framework'); ?></option>
						<option value="left center" <?php if ($bgstretcheranchor=='left center') { echo 'selected="selected"'; } ?>><?php _e('left center', 'my_framework'); ?></option>
						<option value="left bottom" <?php if ($bgstretcheranchor=='left bottom') { echo 'selected="selected"'; } ?>><?php _e('left bottom', 'my_framework'); ?></option>
						<option value="center top" <?php if ($bgstretcheranchor=='center top') { echo 'selected="selected"'; } ?>><?php _e('center top', 'my_framework'); ?></option>
						<option value="center center" <?php if ($bgstretcheranchor=='center center') { echo 'selected="selected"'; } ?>><?php _e('center center', 'my_framework'); ?></option>
						<option value="center bottom" <?php if ($bgstretcheranchor=='center bottom') { echo 'selected="selected"'; } ?>><?php _e('center bottom', 'my_framework'); ?></option>
						<option value="right top" <?php if ($bgstretcheranchor=='right top') { echo 'selected="selected"'; } ?>><?php _e('right top', 'my_framework'); ?></option>
						<option value="right center" <?php if ($bgstretcheranchor=='right center') { echo 'selected="selected"'; } ?>><?php _e('right center', 'my_framework'); ?></option>
						<option value="right bottom" <?php if ($bgstretcheranchor=='right bottom') { echo 'selected="selected"'; } ?>><?php _e('right bottom', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set <strong>"position"</strong> for slider.', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #bgstretcherslider-section -->
			
			
			
			<div id="bodycolor-section" class="allcoloring">
				<h2><?php _e('Body / General Coloring', 'my_framework'); ?></h2>
				<div id="body-coloring" class="pa-option">
				<h4><?php _e('Set color for body elements', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="bodybgcolor" id="bodybgcolor" size="4" value="<?php echo get_option('mytheme_bodybgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bodytextcolor" id="bodytextcolor" size="4" value="<?php echo get_option('mytheme_bodytextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bodytextshadowcolor" id="bodytextshadowcolor" size="4" value="<?php echo get_option('mytheme_bodytextshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"text shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bodylinkcolor" id="bodylinkcolor" size="4" value="<?php echo get_option('mytheme_bodylinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"link"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bodylinkhovercolor" id="bodylinkhovercolor" size="4" value="<?php echo get_option('mytheme_bodylinkhovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"link hovered"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="bodyh-coloring" class="pa-option">
				<h4><?php _e('Set color for all headings', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="bodyhcolor" id="bodyhcolor" size="4" value="<?php echo get_option('mytheme_bodyhcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"heading"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bodyhshadowcolor" id="bodyhshadowcolor" size="4" value="<?php echo get_option('mytheme_bodyhshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"heading shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bodyhhovercolor" id="bodyhhovercolor" size="4" value="<?php echo get_option('mytheme_bodyhhovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"heading hovered"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="bodyhlinecolor" id="bodyhlinecolor" size="4" value="<?php echo get_option('mytheme_bodyhlinecolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"heading colored line"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="main-sections-coloring" class="pa-option">
				<h4><?php _e('Set color for main sections', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="headerwrappercolor" id="headerwrappercolor" size="4" value="<?php echo get_option('mytheme_headerwrappercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"header wrapper background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="contentwrappercolor" id="contentwrappercolor" size="4" value="<?php echo get_option('mytheme_contentwrappercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"content wrapper background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerwrappercolor" id="footerwrappercolor" size="4" value="<?php echo get_option('mytheme_footerwrappercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"footer wrapper background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="theme-button-coloring" class="pa-option">
				<h4><?php _e('Set color for theme button', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="themebuttontextcolor" id="themebuttontextcolor" size="4" value="<?php echo get_option('mytheme_themebuttontextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"theme button text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="themebuttonbgcolor" id="themebuttonbgcolor" size="4" value="<?php echo get_option('mytheme_themebuttonbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"theme button background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="themebuttontexthovercolor" id="themebuttontexthovercolor" size="4" value="<?php echo get_option('mytheme_themebuttontexthovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"theme button hover text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="themebuttonbghovercolor" id="themebuttonbghovercolor" size="4" value="<?php echo get_option('mytheme_themebuttonbghovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"theme button hover background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="highlight-coloring" class="pa-option">
				<h4><?php _e('Set color for highlight', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="highlightcolor" id="highlightcolor" size="4" value="<?php echo get_option('mytheme_highlightcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"highlight"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="highlightbgcolor" id="highlightbgcolor" size="4" value="<?php echo get_option('mytheme_highlightbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"highlight background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #bodycolor-section -->
			
			
			
			<div id="topbarcolor-section" class="allcoloring">
				<h2><?php _e('Top Bar Coloring', 'my_framework'); ?></h2>
				<div id="topbar-coloring" class="pa-option">
				<h4><?php _e('Set color for top bar text', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="topbarbgcolor" id="topbarbgcolor" size="4" value="<?php echo get_option('mytheme_topbarbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"top bar background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="topbarcolor" id="topbarcolor" size="4" value="<?php echo get_option('mytheme_topbarcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"top bar text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="topbarshadowcolor" id="topbarshadowcolor" size="4" value="<?php echo get_option('mytheme_topbarshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"top bar text shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="topbarlinkcolor" id="topbarlinkcolor" size="4" value="<?php echo get_option('mytheme_topbarlinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"top bar link and hover"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #topbarcolor-section -->
			
			
			
			<div id="topinfocolor-section" class="allcoloring">
				<h2><?php _e('Top Information & Socials Coloring', 'my_framework'); ?></h2>
				<div id="socialnetwork-coloring" class="pa-option">
				<h4><?php _e('Set color for social network background', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="socialiconcolor" id="socialiconcolor" size="4" value="<?php echo get_option('mytheme_socialiconcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"social icon background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="socialiconhovercolor" id="socialiconhovercolor" size="4" value="<?php echo get_option('mytheme_socialiconhovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"social icon hover background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="socialnetworkbgcolor" id="socialnetworkbgcolor" size="4" value="<?php echo get_option('mytheme_socialnetworkbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"social network background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #topinfocolor-section -->
			
			
			
			<div id="mainnavcolor-section" class="allcoloring">
				<h2><?php _e('Main Navigation Coloring', 'my_framework'); ?></h2>
				<div id="mainnav-coloring" class="pa-option">
				<h4><?php _e('Set color for main menu', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="mainnavbgcolor" id="mainnavbgcolor" size="4" value="<?php echo get_option('mytheme_mainnavbgcolor'); ?>" />
					<div class="description"><?php _e('set <strong>"menu background color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavwrapbgcolor" id="mainnavwrapbgcolor" size="4" value="<?php echo get_option('mytheme_mainnavwrapbgcolor'); ?>" />
					<div class="description"><?php _e('set <strong>"menu wrapper background color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="mainnavmenu-coloring" class="pa-option">
				<h4><?php _e('Set color for main menu items', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="mainnavtextcolor" id="mainnavtextcolor" size="4" value="<?php echo get_option('mytheme_mainnavtextcolor'); ?>" />
					<div class="description"><?php _e('set <strong>"menu item text color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavtexthovercolor" id="mainnavtexthovercolor" size="4" value="<?php echo get_option('mytheme_mainnavtexthovercolor'); ?>" />
					<div class="description"><?php _e('set <strong>"menu item text hover color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavtextcurrentcolor" id="mainnavtextcurrentcolor" size="4" value="<?php echo get_option('mytheme_mainnavtextcurrentcolor'); ?>" />
					<div class="description"><?php _e('set <strong>"menu item text current color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavtextshadowcolor" id="mainnavtextshadowcolor" size="4" value="<?php echo get_option('mytheme_mainnavtextshadowcolor'); ?>" />
					<div class="description"><?php _e('set <strong>"menu item text shadow color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavmenucolor" id="mainnavmenucolor" size="4" value="<?php echo get_option('mytheme_mainnavmenucolor'); ?>" />
					<div class="description"><?php _e('set <strong>"menu item background color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavmenuhovercolor" id="mainnavmenuhovercolor" size="4" value="<?php echo get_option('mytheme_mainnavmenuhovercolor'); ?>" />
					<div class="description"><?php _e('set <strong>"menu item hover background color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavmenucurrentcolor" id="mainnavmenucurrentcolor" size="4" value="<?php echo get_option('mytheme_mainnavmenucurrentcolor'); ?>" />
					<div class="description"><?php _e('set <strong>"menu item current background color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavmenubordercolor" id="mainnavmenubordercolor" size="4" value="<?php echo get_option('mytheme_mainnavmenubordercolor'); ?>" />
					<div class="description"><?php _e('set <strong>"menu item top-border color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="mainnavsubmenu-coloring" class="pa-option">
				<h4><?php _e('Set color for main sub menus', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="mainnavsubmenucolor" id="mainnavsubmenucolor" size="4" value="<?php echo get_option('mytheme_mainnavsubmenucolor'); ?>" />
					<div class="description"><?php _e('set <strong>"sub-menu background color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavsubmenushadowcolor" id="mainnavsubmenushadowcolor" size="4" value="<?php echo get_option('mytheme_mainnavsubmenushadowcolor'); ?>" />
					<div class="description"><?php _e('set <strong>"sub-menu bottom border color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavsubmenutextcolor" id="mainnavsubmenutextcolor" size="4" value="<?php echo get_option('mytheme_mainnavsubmenutextcolor'); ?>" />
					<div class="description"><?php _e('set <strong>"sub-menu item text color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavsubmenutexthovercolor" id="mainnavsubmenutexthovercolor" size="4" value="<?php echo get_option('mytheme_mainnavsubmenutexthovercolor'); ?>" />
					<div class="description"><?php _e('set <strong>"sub-menu item text hover color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavsubmenuitemcolor" id="mainnavsubmenuitemcolor" size="4" value="<?php echo get_option('mytheme_mainnavsubmenuitemcolor'); ?>" />
					<div class="description"><?php _e('set <strong>"sub-menu item background color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #mainnavcolor-section -->
			
			
			
			<div id="topsearchcolor-section" class="allcoloring">
				<h2><?php _e('Top/404 Search Coloring', 'my_framework'); ?></h2>
				<div id="topsearch-coloring" class="pa-option">
				<h4><?php _e('Set color for top search', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="topsearchcolor" id="topsearchcolor" size="4" value="<?php echo get_option('mytheme_topsearchcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"top search text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="topsearchbgcolor" id="topsearchbgcolor" size="4" value="<?php echo get_option('mytheme_topsearchbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"top search background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #topsearchcolor-section -->
			
			
			
			<div id="slogancolor-section" class="allcoloring">
				<h2><?php _e('Slogan Coloring', 'my_framework'); ?></h2>
				<div id="slogan-coloring" class="pa-option">
				<h4><?php _e('Set color for slogan text', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="slogancolor" id="slogancolor" size="4" value="<?php echo get_option('mytheme_slogancolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"slogan"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sloganshadowcolor" id="sloganshadowcolor" size="4" value="<?php echo get_option('mytheme_sloganshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"slogan shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sloganbgcolor" id="sloganbgcolor" size="4" value="<?php echo get_option('mytheme_sloganbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"slogan background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #slogancolor-section -->
			
			
			
			<div id="breadcrumbcolor-section" class="allcoloring">
				<h2><?php _e('Breadcrumb Coloring', 'my_framework'); ?></h2>
				<div id="breadcrumb-coloring" class="pa-option">
				<h4><?php _e('Set color for breadcrumb text', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="breadcrumbcolor" id="breadcrumbcolor" size="4" value="<?php echo get_option('mytheme_breadcrumbcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"breadcrumb"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="breadcrumbshadowcolor" id="breadcrumbshadowcolor" size="4" value="<?php echo get_option('mytheme_breadcrumbshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"breadcrumb shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="breadcrumblinkcolor" id="breadcrumblinkcolor" size="4" value="<?php echo get_option('mytheme_breadcrumblinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"breadcrumb link and hover"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="breadcrumbbgcolor" id="breadcrumbbgcolor" size="4" value="<?php echo get_option('mytheme_breadcrumbbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"breadcrumb background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="breadcrumbbordercolor" id="breadcrumbbordercolor" size="4" value="<?php echo get_option('mytheme_breadcrumbbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"breadcrumb border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #breadcrumbcolor-section -->
			
			
			
			<div id="page404color-section" class="allcoloring">
				<h2><?php _e('Stunning Text Coloring', 'my_framework'); ?></h2>
				<div id="search404-coloring" class="pa-option">
				<h4><?php _e('Set color for 404 page heading & text', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="heading404color" id="heading404color" size="4" value="<?php echo get_option('mytheme_heading404color'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"404 page heading"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="text404color" id="text404color" size="4" value="<?php echo get_option('mytheme_text404color'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"404 page text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="text404shadowcolor" id="text404shadowcolor" size="4" value="<?php echo get_option('mytheme_text404shadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"404 page text shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="search404-coloring" class="pa-option">
				<h4><?php _e('Set color for 404 search', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="search404textcolor" id="search404textcolor" size="4" value="<?php echo get_option('mytheme_search404textcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"404 page search text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="search404bgcolor" id="search404bgcolor" size="4" value="<?php echo get_option('mytheme_search404bgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"404 page search background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="search404iconbgcolor" id="search404iconbgcolor" size="4" value="<?php echo get_option('mytheme_search404iconbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"404 page search icon background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="search404bordercolor" id="search404bordercolor" size="4" value="<?php echo get_option('mytheme_search404bordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"404 page search border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #page404color-section -->
			
			
			
			<div id="backtotopcolor-section" class="allcoloring">
				<h2><?php _e('Back to Top Coloring', 'my_framework'); ?></h2>
				<div id="backtotop-coloring" class="pa-option">
				<h4><?php _e('Set color for Back to Top', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="backtotopbgcolor" id="backtotopbgcolor" size="4" value="<?php echo get_option('mytheme_backtotopbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"back to top background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="backtotopbordercolor" id="backtotopbordercolor" size="4" value="<?php echo get_option('mytheme_backtotopbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"back to top border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="backtotoparrowcolor" id="backtotoparrowcolor" size="4" value="<?php echo get_option('mytheme_backtotoparrowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"back to top arrow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #backtotopcolor-section -->
			
			
			
			<div id="sidebarcolor-section" class="allcoloring">
				<h2><?php _e('Sidebar Coloring', 'my_framework'); ?></h2>
				<div id="sidebar-coloring" class="pa-option">
				<h4><?php _e('Set general color', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebarbgcolor" id="sidebarbgcolor" size="4" value="<?php echo get_option('mytheme_sidebarbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebartextcolor" id="sidebartextcolor" size="4" value="<?php echo get_option('mytheme_sidebartextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebartextshadowcolor" id="sidebartextshadowcolor" size="4" value="<?php echo get_option('mytheme_sidebartextshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"text shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarlinkcolor" id="sidebarlinkcolor" size="4" value="<?php echo get_option('mytheme_sidebarlinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"link"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarlinkhovercolor" id="sidebarlinkhovercolor" size="4" value="<?php echo get_option('mytheme_sidebarlinkhovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"link hovered"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarbordercolor" id="sidebarbordercolor" size="4" value="<?php echo get_option('mytheme_sidebarbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"horizontal borders"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebardividercolor" id="sidebardividercolor" size="4" value="<?php echo get_option('mytheme_sidebardividercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"sidebar divider"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sidebartitle-coloring" class="pa-option">
				<h4><?php _e('Set color for titles', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebarhcolor" id="sidebarhcolor" size="4" value="<?php echo get_option('mytheme_sidebarhcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"title"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarhshadowcolor" id="sidebarhshadowcolor" size="4" value="<?php echo get_option('mytheme_sidebarhshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"title shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarhbgcolor" id="sidebarhbgcolor" size="4" value="<?php echo get_option('mytheme_sidebarhbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"title background color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarhtopbordercolor" id="sidebarhtopbordercolor" size="4" value="<?php echo get_option('mytheme_sidebarhtopbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"title top border color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarhbottombordercolor" id="sidebarhbottombordercolor" size="4" value="<?php echo get_option('mytheme_sidebarhbottombordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"title bottom border color"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sidebarpostportwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for post/portfolio/comment widgets', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebarheadingcolor" id="sidebarheadingcolor" size="4" value="<?php echo get_option('mytheme_sidebarheadingcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"custom widgets title"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarheadinghovercolor" id="sidebarheadinghovercolor" size="4" value="<?php echo get_option('mytheme_sidebarheadinghovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"custom widgets title hover"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarrecentpostdatecolor" id="sidebarrecentpostdatecolor" size="4" value="<?php echo get_option('mytheme_sidebarrecentpostdatecolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"recent post date"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarrecentportdatecolor" id="sidebarrecentportdatecolor" size="4" value="<?php echo get_option('mytheme_sidebarrecentportdatecolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"recent portfolio date"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarrecentcommentcolor" id="sidebarrecentcommentcolor" size="4" value="<?php echo get_option('mytheme_sidebarrecentcommentcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"recent comment author"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebardateauthorbgcolor" id="sidebardateauthorbgcolor" size="4" value="<?php echo get_option('mytheme_sidebardateauthorbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"custom widgets date & author background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarframebgcolor" id="sidebarframebgcolor" size="4" value="<?php echo get_option('mytheme_sidebarframebgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"frame background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarframeshadowcolor" id="sidebarframeshadowcolor" size="4" value="<?php echo get_option('mytheme_sidebarframeshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"frame shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarrecentpostcolor" id="sidebarrecentpostcolor" size="4" value="<?php echo get_option('mytheme_sidebarrecentpostcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"recent post text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarrecentpostbgcolor" id="sidebarrecentpostbgcolor" size="4" value="<?php echo get_option('mytheme_sidebarrecentpostbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"recent post background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sidebartestiwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for testimonial widget', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebartestimonialtextcolor" id="sidebartestimonialtextcolor" size="4" value="<?php echo get_option('mytheme_sidebartestimonialtextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"testimonial text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebartestimonialbgcolor" id="sidebartestimonialbgcolor" size="4" value="<?php echo get_option('mytheme_sidebartestimonialbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"testimonial background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebartestimonialnavcolor" id="sidebartestimonialnavcolor" size="4" value="<?php echo get_option('mytheme_sidebartestimonialnavcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"testimonial navigation background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebartestimonialimagebgcolor" id="sidebartestimonialimagebgcolor" size="4" value="<?php echo get_option('mytheme_sidebartestimonialimagebgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"testimonial image background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sidebartwitterwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for twitter widget', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebartwittertextcolor" id="sidebartwittertextcolor" size="4" value="<?php echo get_option('mytheme_sidebartwittertextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"twitter text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebartwitterbgcolor" id="sidebartwitterbgcolor" size="4" value="<?php echo get_option('mytheme_sidebartwitterbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"twitter background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebartwitterlinkcolor" id="sidebartwitterlinkcolor" size="4" value="<?php echo get_option('mytheme_sidebartwitterlinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"twitter link"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sidebarflickrwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for flickr widget', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebarflickrbgcolor" id="sidebarflickrbgcolor" size="4" value="<?php echo get_option('mytheme_sidebarflickrbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"flickr image background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sidebarcontactwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for contact form widget', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebarwidgetformtextcolor" id="sidebarwidgetformtextcolor" size="4" value="<?php echo get_option('mytheme_sidebarwidgetformtextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarwidgetformbgcolor" id="sidebarwidgetformbgcolor" size="4" value="<?php echo get_option('mytheme_sidebarwidgetformbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarwidgetformbordercolor" id="sidebarwidgetformbordercolor" size="4" value="<?php echo get_option('mytheme_sidebarwidgetformbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarwidgetformshadowcolor" id="sidebarwidgetformshadowcolor" size="4" value="<?php echo get_option('mytheme_sidebarwidgetformshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarwidgetformbuttontextcolor" id="sidebarwidgetformbuttontextcolor" size="4" value="<?php echo get_option('mytheme_sidebarwidgetformbuttontextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form button text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarwidgetformbuttonbgcolor" id="sidebarwidgetformbuttonbgcolor" size="4" value="<?php echo get_option('mytheme_sidebarwidgetformbuttonbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form button background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="sidebartscwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for tag/search/calendar widgets', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="sidebartagcolor" id="sidebartagcolor" size="4" value="<?php echo get_option('mytheme_sidebartagcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"tag"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebartagbgcolor" id="sidebartagbgcolor" size="4" value="<?php echo get_option('mytheme_sidebartagbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"tag background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebartagbordercolor" id="sidebartagbordercolor" size="4" value="<?php echo get_option('mytheme_sidebartagbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"tag border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarsearchtextcolor" id="sidebarsearchtextcolor" size="4" value="<?php echo get_option('mytheme_sidebarsearchtextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"search text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarsearchbgcolor" id="sidebarsearchbgcolor" size="4" value="<?php echo get_option('mytheme_sidebarsearchbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"search background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarsearchiconbgcolor" id="sidebarsearchiconbgcolor" size="4" value="<?php echo get_option('mytheme_sidebarsearchiconbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"search icon background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarsearchbordercolor" id="sidebarsearchbordercolor" size="4" value="<?php echo get_option('mytheme_sidebarsearchbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"search border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="sidebarcalendarcolor" id="sidebarcalendarcolor" size="4" value="<?php echo get_option('mytheme_sidebarcalendarcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"calendar active days background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #sidebarcolor-section -->
			
			
			
			<div id="footercolor-section" class="allcoloring">
				<h2><?php _e('Footer Coloring', 'my_framework'); ?></h2>
				<div id="footergeneral-coloring" class="pa-option">
				<h4><?php _e('Set general color', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="footerbgcolor" id="footerbgcolor" size="4" value="<?php echo get_option('mytheme_footerbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footertextcolor" id="footertextcolor" size="4" value="<?php echo get_option('mytheme_footertextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footertextshadowcolor" id="footertextshadowcolor" size="4" value="<?php echo get_option('mytheme_footertextshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"text shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerlinkcolor" id="footerlinkcolor" size="4" value="<?php echo get_option('mytheme_footerlinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"link"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerlinkhovercolor" id="footerlinkhovercolor" size="4" value="<?php echo get_option('mytheme_footerlinkhovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"link hovered"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerbordercolor" id="footerbordercolor" size="4" value="<?php echo get_option('mytheme_footerbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"bottom borders"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="footertitle-coloring" class="pa-option">
				<h4><?php _e('Set color for titles', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="footerhcolor" id="footerhcolor" size="4" value="<?php echo get_option('mytheme_footerhcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"title"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerhshadowcolor" id="footerhshadowcolor" size="4" value="<?php echo get_option('mytheme_footerhshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"title shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="footerpostportwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for post/portfolio/comment widgets', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="footerheadingcolor" id="footerheadingcolor" size="4" value="<?php echo get_option('mytheme_footerheadingcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"custom widgets title"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerheadinghovercolor" id="footerheadinghovercolor" size="4" value="<?php echo get_option('mytheme_footerheadinghovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"custom widgets title hover"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerrecentpostdatecolor" id="footerrecentpostdatecolor" size="4" value="<?php echo get_option('mytheme_footerrecentpostdatecolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"recent post date"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerrecentportdatecolor" id="footerrecentportdatecolor" size="4" value="<?php echo get_option('mytheme_footerrecentportdatecolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"recent portfolio date"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerrecentcommentcolor" id="footerrecentcommentcolor" size="4" value="<?php echo get_option('mytheme_footerrecentcommentcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"recent comment author"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerdateauthorbgcolor" id="footerdateauthorbgcolor" size="4" value="<?php echo get_option('mytheme_footerdateauthorbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"custom widgets date & author background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerframebgcolor" id="footerframebgcolor" size="4" value="<?php echo get_option('mytheme_footerframebgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"frame background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerframeshadowcolor" id="footerframeshadowcolor" size="4" value="<?php echo get_option('mytheme_footerframeshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"frame shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerrecentpostcolor" id="footerrecentpostcolor" size="4" value="<?php echo get_option('mytheme_footerrecentpostcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"recent post text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerrecentpostbgcolor" id="footerrecentpostbgcolor" size="4" value="<?php echo get_option('mytheme_footerrecentpostbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"recent post background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="footertestiwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for testimonial widget', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="footertestimonialtextcolor" id="footertestimonialtextcolor" size="4" value="<?php echo get_option('mytheme_footertestimonialtextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"testimonial text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footertestimonialbgcolor" id="footertestimonialbgcolor" size="4" value="<?php echo get_option('mytheme_footertestimonialbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"testimonial background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footertestimonialnavcolor" id="footertestimonialnavcolor" size="4" value="<?php echo get_option('mytheme_footertestimonialnavcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"testimonial navigation background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footertestimonialimagebgcolor" id="footertestimonialimagebgcolor" size="4" value="<?php echo get_option('mytheme_footertestimonialimagebgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"testimonial image background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="footertwitterwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for twitter widget', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="footertwittertextcolor" id="footertwittertextcolor" size="4" value="<?php echo get_option('mytheme_footertwittertextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"twitter text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footertwitterbgcolor" id="footertwitterbgcolor" size="4" value="<?php echo get_option('mytheme_footertwitterbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"twitter background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footertwitterlinkcolor" id="footertwitterlinkcolor" size="4" value="<?php echo get_option('mytheme_footertwitterlinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"twitter link"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="footerflickrwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for flickr widget', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="footerflickrbgcolor" id="footerflickrbgcolor" size="4" value="<?php echo get_option('mytheme_footerflickrbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"flickr image background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="footercontactwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for contact form widget', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="footerwidgetformtextcolor" id="footerwidgetformtextcolor" size="4" value="<?php echo get_option('mytheme_footerwidgetformtextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerwidgetformbgcolor" id="footerwidgetformbgcolor" size="4" value="<?php echo get_option('mytheme_footerwidgetformbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerwidgetformbordercolor" id="footerwidgetformbordercolor" size="4" value="<?php echo get_option('mytheme_footerwidgetformbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerwidgetformshadowcolor" id="footerwidgetformshadowcolor" size="4" value="<?php echo get_option('mytheme_footerwidgetformshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerwidgetformbuttontextcolor" id="footerwidgetformbuttontextcolor" size="4" value="<?php echo get_option('mytheme_footerwidgetformbuttontextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form button text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footerwidgetformbuttonbgcolor" id="footerwidgetformbuttonbgcolor" size="4" value="<?php echo get_option('mytheme_footerwidgetformbuttonbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact form button background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="footertscwidget-coloring" class="pa-option">
				<h4><?php _e('Set color for tag/search/calendar widgets', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="footertagcolor" id="footertagcolor" size="4" value="<?php echo get_option('mytheme_footertagcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"tag"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footertagbgcolor" id="footertagbgcolor" size="4" value="<?php echo get_option('mytheme_footertagbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"tag background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footertagbordercolor" id="footertagbordercolor" size="4" value="<?php echo get_option('mytheme_footertagbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"tag border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footersearchtextcolor" id="footersearchtextcolor" size="4" value="<?php echo get_option('mytheme_footersearchtextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"search text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footersearchbgcolor" id="footersearchbgcolor" size="4" value="<?php echo get_option('mytheme_footersearchbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"search background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footersearchiconbgcolor" id="footersearchiconbgcolor" size="4" value="<?php echo get_option('mytheme_footersearchiconbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"search icon background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footersearchbordercolor" id="footersearchbordercolor" size="4" value="<?php echo get_option('mytheme_footersearchbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"search border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footercalendarcolor" id="footercalendarcolor" size="4" value="<?php echo get_option('mytheme_footercalendarcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"calendar active days background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #footercolor-section -->
			
			
			
			<div id="copyrightcolor-section" class="allcoloring">
				<h2><?php _e('Copyright Section Coloring', 'my_framework'); ?></h2>
				<div id="footercopyright-coloring" class="pa-option">
				<h4><?php _e('Set color for copyright section', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="footercopybgcolor" id="footercopybgcolor" size="4" value="<?php echo get_option('mytheme_footercopybgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footercopytextcolor" id="footercopytextcolor" size="4" value="<?php echo get_option('mytheme_footercopytextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footercopytextshadowcolor" id="footercopytextshadowcolor" size="4" value="<?php echo get_option('mytheme_footercopytextshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"text shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footercopylinkcolor" id="footercopylinkcolor" size="4" value="<?php echo get_option('mytheme_footercopylinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"link"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="footercopylinkhovercolor" id="footercopylinkhovercolor" size="4" value="<?php echo get_option('mytheme_footercopylinkhovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"link hover"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #copyrightcolor-section -->
			
			
			
			<div id="postportcolor-section" class="allcoloring">
				<h2><?php _e('Post / Portfolio coloring', 'my_framework'); ?></h2>
				<div id="post-coloring" class="pa-option">
				<h4><?php _e('Set color for blog elements', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="postframebgcolor" id="postframebgcolor" size="4" value="<?php echo get_option('mytheme_postframebgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"frame background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="postinfotextcolor" id="postinfotextcolor" size="4" value="<?php echo get_option('mytheme_postinfotextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"info text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="postinfolinkcolor" id="postinfolinkcolor" size="4" value="<?php echo get_option('mytheme_postinfolinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"info link"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="postinfobgcolor" id="postinfobgcolor" size="4" value="<?php echo get_option('mytheme_postinfobgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"info background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="postinfoiconcolor" id="postinfoiconcolor" size="4" value="<?php echo get_option('mytheme_postinfoiconcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"info icon background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="postdatecolor" id="postdatecolor" size="4" value="<?php echo get_option('mytheme_postdatecolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"date text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="postdatebgcolor" id="postdatebgcolor" size="4" value="<?php echo get_option('mytheme_postdatebgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"date background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="port-coloring" class="pa-option">
				<h4><?php _e('Set color for portfolio elements', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="portframebgcolor" id="portframebgcolor" size="4" value="<?php echo get_option('mytheme_portframebgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"frame background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portdetailstitlecolor" id="portdetailstitlecolor" size="4" value="<?php echo get_option('mytheme_portdetailstitlecolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"details titles"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portdetailsdatecolor" id="portdetailsdatecolor" size="4" value="<?php echo get_option('mytheme_portdetailsdatecolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"details date text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portdetailsdatebgcolor" id="portdetailsdatebgcolor" size="4" value="<?php echo get_option('mytheme_portdetailsdatebgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"details date background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portdetailsiconcolor" id="portdetailsiconcolor" size="4" value="<?php echo get_option('mytheme_portdetailsiconcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"details icon background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="port-coloring" class="pa-option">
				<h4><?php _e('Set color for portfolio styles', 'my_framework'); ?></h4>
				<h5><?php _e('Default style', 'my_framework'); ?></h5>
					<div class="row">
					<input type="text" name="portdefaulthcolor" id="portdefaulthcolor" size="4" value="<?php echo get_option('mytheme_portdefaulthcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"default heading"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portdefaultcatcolor" id="portdefaultcatcolor" size="4" value="<?php echo get_option('mytheme_portdefaultcatcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"default category"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portdefaulttextcolor" id="portdefaulttextcolor" size="4" value="<?php echo get_option('mytheme_portdefaulttextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"default text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portdefaultbuttontextcolor" id="portdefaultbuttontextcolor" size="4" value="<?php echo get_option('mytheme_portdefaultbuttontextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"default button text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portdefaultbuttonbgcolor" id="portdefaultbuttonbgcolor" size="4" value="<?php echo get_option('mytheme_portdefaultbuttonbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"default button background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portdefaultbgcolor" id="portdefaultbgcolor" size="4" value="<?php echo get_option('mytheme_portdefaultbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"default background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portdefaultbordercolor" id="portdefaultbordercolor" size="4" value="<?php echo get_option('mytheme_portdefaultbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"default border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				<h5><?php _e('Simple style', 'my_framework'); ?></h5>
					<div class="row">
					<input type="text" name="portsimpledatecolor" id="portsimpledatecolor" size="4" value="<?php echo get_option('mytheme_portsimpledatecolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"simple date"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portsimpledatebgcolor" id="portsimpledatebgcolor" size="4" value="<?php echo get_option('mytheme_portsimpledatebgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"simple date background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portsimplecatcolor" id="portsimplecatcolor" size="4" value="<?php echo get_option('mytheme_portsimplecatcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"simple category"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portsimplebuttontextcolor" id="portsimplebuttontextcolor" size="4" value="<?php echo get_option('mytheme_portsimplebuttontextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"simple button text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portsimplebuttonbgcolor" id="portsimplebuttonbgcolor" size="4" value="<?php echo get_option('mytheme_portsimplebuttonbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"simple button background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				<h5><?php _e('Style1 & Style2', 'my_framework'); ?></h5>
					<div class="row">
					<input type="text" name="portstyleshcolor" id="portstyleshcolor" size="4" value="<?php echo get_option('mytheme_portstyleshcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"style1-style2 heading"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portstyleshbgcolor" id="portstyleshbgcolor" size="4" value="<?php echo get_option('mytheme_portstyleshbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"style1-style2 heading background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portstylescatcolor" id="portstylescatcolor" size="4" value="<?php echo get_option('mytheme_portstylescatcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"style1 & style2 category"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portstylestextcolor" id="portstylestextcolor" size="4" value="<?php echo get_option('mytheme_portstylestextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"style1 & style2 text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portstylestextbgcolor" id="portstylestextbgcolor" size="4" value="<?php echo get_option('mytheme_portstylestextbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"style1 & style2 background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portstylesbuttontextcolor" id="portstylesbuttontextcolor" size="4" value="<?php echo get_option('mytheme_portstylesbuttontextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"style1 & style2 button text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portstylesbuttonbgcolor" id="portstylesbuttonbgcolor" size="4" value="<?php echo get_option('mytheme_portstylesbuttonbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"style1 & style2 button background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				<h5><?php _e('Gallery no-border style', 'my_framework'); ?></h5>
					<div class="row">
					<input type="text" name="portgalleryhcolor" id="portgalleryhcolor" size="4" value="<?php echo get_option('mytheme_portgalleryhcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery no-border heading"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgalleryhshadowcolor" id="portgalleryhshadowcolor" size="4" value="<?php echo get_option('mytheme_portgalleryhshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery no-border heading shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgallerybgcolor" id="portgallerybgcolor" size="4" value="<?php echo get_option('mytheme_portgallerybgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery no-border background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgalleryiconcolor" id="portgalleryiconcolor" size="4" value="<?php echo get_option('mytheme_portgalleryiconcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery no-border icon background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgalleryiconhovercolor" id="portgalleryiconhovercolor" size="4" value="<?php echo get_option('mytheme_portgalleryiconhovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery no-border icon hover background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgalleryiconshadowcolor" id="portgalleryiconshadowcolor" size="4" value="<?php echo get_option('mytheme_portgalleryiconshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery no-border icon shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgallerycatcolor" id="portgallerycatcolor" size="4" value="<?php echo get_option('mytheme_portgallerycatcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery no-border category"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgallerycatbgcolor" id="portgallerycatbgcolor" size="4" value="<?php echo get_option('mytheme_portgallerycatbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery no-border category background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				<h5><?php _e('Gallery border style', 'my_framework'); ?></h5>
					<div class="row">
					<input type="text" name="portgallerybhcolor" id="portgallerybhcolor" size="4" value="<?php echo get_option('mytheme_portgallerybhcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery border heading"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgallerybhshadowcolor" id="portgallerybhshadowcolor" size="4" value="<?php echo get_option('mytheme_portgallerybhshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery border heading shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgallerybbgcolor" id="portgallerybbgcolor" size="4" value="<?php echo get_option('mytheme_portgallerybbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery border background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgallerybiconcolor" id="portgallerybiconcolor" size="4" value="<?php echo get_option('mytheme_portgallerybiconcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery border icon background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgallerybiconhovercolor" id="portgallerybiconhovercolor" size="4" value="<?php echo get_option('mytheme_portgallerybiconhovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery border icon hover background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgallerybiconshadowcolor" id="portgallerybiconshadowcolor" size="4" value="<?php echo get_option('mytheme_portgallerybiconshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery border icon shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgallerybcatcolor" id="portgallerybcatcolor" size="4" value="<?php echo get_option('mytheme_portgallerybcatcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery border category"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portgallerybbordercolor" id="portgallerybbordercolor" size="4" value="<?php echo get_option('mytheme_portgallerybbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"gallery border border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="port-coloring" class="pa-option">
				<h4><?php _e('Set color for portfolio filter', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="portfiltertextcolor" id="portfiltertextcolor" size="4" value="<?php echo get_option('mytheme_portfiltertextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"filter text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="portfilteractivetextcolor" id="portfilteractivetextcolor" size="4" value="<?php echo get_option('mytheme_portfilteractivetextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"filter active text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="author-coloring" class="pa-option">
				<h4><?php _e('Set color for author section', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="authortextcolor" id="authortextcolor" size="4" value="<?php echo get_option('mytheme_authortextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"author text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="authorhcolor" id="authorhcolor" size="4" value="<?php echo get_option('mytheme_authorhcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"author heading"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="authorlinkcolor" id="authorlinkcolor" size="4" value="<?php echo get_option('mytheme_authorlinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"author link"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="authorbgcolor" id="authorbgcolor" size="4" value="<?php echo get_option('mytheme_authorbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"author background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="authorbordercolor" id="authorbordercolor" size="4" value="<?php echo get_option('mytheme_authorbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"author border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="oldernewer-coloring" class="pa-option">
				<h4><?php _e('Set color for pagination section', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="oldernewertextcolor" id="oldernewertextcolor" size="4" value="<?php echo get_option('mytheme_oldernewertextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"pagination text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="oldernewertexthovercolor" id="oldernewertexthovercolor" size="4" value="<?php echo get_option('mytheme_oldernewertexthovercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"pagination text hover"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="oldernewerbgcolor" id="oldernewerbgcolor" size="4" value="<?php echo get_option('mytheme_oldernewerbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"pagination background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="relatedpost-coloring" class="pa-option">
				<h4><?php _e('Set color for related post section', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="relatedpostcolor" id="relatedpostcolor" size="4" value="<?php echo get_option('mytheme_relatedpostcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"related post thumbnail text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="relatedpostbgcolor" id="relatedpostbgcolor" size="4" value="<?php echo get_option('mytheme_relatedpostbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"related post thumbnail background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="relatedposticoncolor" id="relatedposticoncolor" size="4" value="<?php echo get_option('mytheme_relatedposticoncolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"related post thumbnail icon background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #postportcolor-section -->
			
			
			
			<div id="paginationcolor-section" class="allcoloring">
				<h2><?php _e('Pagination Coloring', 'my_framework'); ?></h2>
				<div id="pagination-coloring" class="pa-option">
				<h4><?php _e('Set color for pagination', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="paginationtextcolor" id="paginationtextcolor" size="4" value="<?php echo get_option('mytheme_paginationtextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="paginationbgcolor" id="paginationbgcolor" size="4" value="<?php echo get_option('mytheme_paginationbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="paginationactivetextcolor" id="paginationactivetextcolor" size="4" value="<?php echo get_option('mytheme_paginationactivetextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"current-item text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="paginationactivebgcolor" id="paginationactivebgcolor" size="4" value="<?php echo get_option('mytheme_paginationactivebgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"current-item background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="paginationhovertextcolor" id="paginationhovertextcolor" size="4" value="<?php echo get_option('mytheme_paginationhovertextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"hovered-item text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="paginationhoverbgcolor" id="paginationhoverbgcolor" size="4" value="<?php echo get_option('mytheme_paginationhoverbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"hovered-item background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #paginationcolor-section -->
			
			
			
			<div id="concomcolor-section" class="allcoloring">
				<h2><?php _e('Contact / Comment Form coloring', 'my_framework'); ?></h2>
				<div id="concom-coloring" class="pa-option">
				<h4><?php _e('Set color for contact / reply forms', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="contacttextcolor" id="contacttextcolor" size="4" value="<?php echo get_option('mytheme_contacttextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact/reply form text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="contactbgcolor" id="contactbgcolor" size="4" value="<?php echo get_option('mytheme_contactbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact/reply form background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="contactbordercolor" id="contactbordercolor" size="4" value="<?php echo get_option('mytheme_contactbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact/reply form border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="contactshadowcolor" id="contactshadowcolor" size="4" value="<?php echo get_option('mytheme_contactshadowcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact/reply form shadow"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="contactbuttontextcolor" id="contactbuttontextcolor" size="4" value="<?php echo get_option('mytheme_contactbuttontextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact/reply form button text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="contactbuttonbgcolor" id="contactbuttonbgcolor" size="4" value="<?php echo get_option('mytheme_contactbuttonbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"contact/reply form button background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="concom-coloring" class="pa-option">
				<h4><?php _e('Set color for comment elements', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="commenttextcolor" id="commenttextcolor" size="4" value="<?php echo get_option('mytheme_commenttextcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"comments text"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="commentlinkcolor" id="commentlinkcolor" size="4" value="<?php echo get_option('mytheme_commentlinkcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"comments link"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="commentbgcolor" id="commentbgcolor" size="4" value="<?php echo get_option('mytheme_commentbgcolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"comments background"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="commentbordercolor" id="commentbordercolor" size="4" value="<?php echo get_option('mytheme_commentbordercolor'); ?>"/>
					<div class="description"><?php _e('set color for <strong>"comments border"</strong>.<br />use name or hex etc....', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #concomcolor-section -->
			
			
			
			<div id="allbackground-section">
				<h2><?php _e('All Backgrounds', 'my_framework'); ?></h2>
				<div id="topnavwrapperbg-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Top bar wrapper', 'my_framework'); ?></h4>
						<?php $topnavwrapperbgonoff = get_option('mytheme_topnavwrapperbgonoff'); ?>
						<label for="topnavwrapperbgonoff" class="topnavwrapperbg-onoff"></label>
						<input type="hidden" name="topnavwrapperbgonoff" value="false" />
						<input type="checkbox" name="topnavwrapperbgonoff" id="topnavwrapperbgonoff" value="true" <?php if ($topnavwrapperbgonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $topnavwrapperbg_src = get_option('mytheme_topnavwrapperbg'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($topnavwrapperbg_src, false, 200, 100); ?>		
						</div>
						<label for="topnavwrapperbg" class="topnavwrapperbg"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="topnavwrapperbg" id="topnavwrapperbg" class="upload-text" size="" value="<?php echo get_option('mytheme_topnavwrapperbg'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="topnavwrapperbgleft" id="topnavwrapperbgleft" size="4" value="<?php echo get_option('mytheme_topnavwrapperbgleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="topnavwrapperbgtop" id="topnavwrapperbgtop" size="4" value="<?php echo get_option('mytheme_topnavwrapperbgtop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="topnavwrapperbgrepeat">
						<?php $topnavwrapperbgrepeat = get_option('mytheme_topnavwrapperbgrepeat'); ?>
						<option value="repeat" <?php if ($topnavwrapperbgrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($topnavwrapperbgrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($topnavwrapperbgrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($topnavwrapperbgrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $topnavwrapperbgfix = get_option('mytheme_topnavwrapperbgfix'); ?>
						<label for="topnavwrapperbgfix" class="topnavwrapperbgfix"></label>
						<input type="hidden" name="topnavwrapperbgfix" value="" />
						<input type="checkbox" name="topnavwrapperbgfix" id="topnavwrapperbgfix" value="fixed" <?php if ($topnavwrapperbgfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
				<div id="headerbg-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Header', 'my_framework'); ?></h4>
						<?php $headerbgonoff = get_option('mytheme_headerbgonoff'); ?>
						<label for="headerbgonoff" class="headerbg-onoff"></label>
						<input type="hidden" name="headerbgonoff" value="false" />
						<input type="checkbox" name="headerbgonoff" id="headerbgonoff" value="true" <?php if ($headerbgonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $headerbg_src = get_option('mytheme_headerbg'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($headerbg_src, false, 200, 100); ?>		
						</div>
						<label for="headerbg" class="headerbg"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="headerbg" id="headerbg" class="upload-text" size="" value="<?php echo get_option('mytheme_headerbg'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="headerbgleft" id="headerbgleft" size="4" value="<?php echo get_option('mytheme_headerbgleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="headerbgtop" id="headerbgtop" size="4" value="<?php echo get_option('mytheme_headerbgtop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="headerbgrepeat">
						<?php $headerbgrepeat = get_option('mytheme_headerbgrepeat'); ?>
						<option value="repeat" <?php if ($headerbgrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($headerbgrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($headerbgrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($headerbgrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $headerbgfix = get_option('mytheme_headerbgfix'); ?>
						<label for="headerbgfix" class="headerbgfix"></label>
						<input type="hidden" name="headerbgfix" value="" />
						<input type="checkbox" name="headerbgfix" id="headerbgfix" value="fixed" <?php if ($headerbgfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
				<div id="mainnavwrapperbg-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Main navigation wrapper', 'my_framework'); ?></h4>
						<?php $mainnavwrapperbgonoff = get_option('mytheme_mainnavwrapperbgonoff'); ?>
						<label for="mainnavwrapperbgonoff" class="mainnavwrapperbg-onoff"></label>
						<input type="hidden" name="mainnavwrapperbgonoff" value="false" />
						<input type="checkbox" name="mainnavwrapperbgonoff" id="mainnavwrapperbgonoff" value="true" <?php if ($mainnavwrapperbgonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $mainnavwrapperbg_src = get_option('mytheme_mainnavwrapperbg'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($mainnavwrapperbg_src, false, 200, 100); ?>		
						</div>
						<label for="mainnavwrapperbg" class="mainnavwrapperbg"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="mainnavwrapperbg" id="mainnavwrapperbg" class="upload-text" size="" value="<?php echo get_option('mytheme_mainnavwrapperbg'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="mainnavwrapperbgleft" id="mainnavwrapperbgleft" size="4" value="<?php echo get_option('mytheme_mainnavwrapperbgleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="mainnavwrapperbgtop" id="mainnavwrapperbgtop" size="4" value="<?php echo get_option('mytheme_mainnavwrapperbgtop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="mainnavwrapperbgrepeat">
						<?php $mainnavwrapperbgrepeat = get_option('mytheme_mainnavwrapperbgrepeat'); ?>
						<option value="repeat" <?php if ($mainnavwrapperbgrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($mainnavwrapperbgrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($mainnavwrapperbgrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($mainnavwrapperbgrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $mainnavwrapperbgfix = get_option('mytheme_mainnavwrapperbgfix'); ?>
						<label for="mainnavwrapperbgfix" class="mainnavwrapperbgfix"></label>
						<input type="hidden" name="mainnavwrapperbgfix" value="" />
						<input type="checkbox" name="mainnavwrapperbgfix" id="mainnavwrapperbgfix" value="fixed" <?php if ($mainnavwrapperbgfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
				<div id="sliderwrapperbg-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Slider wrapper', 'my_framework'); ?></h4>
						<?php $sliderwrapperbgonoff = get_option('mytheme_sliderwrapperbgonoff'); ?>
						<label for="sliderwrapperbgonoff" class="sliderwrapperbg-onoff"></label>
						<input type="hidden" name="sliderwrapperbgonoff" value="false" />
						<input type="checkbox" name="sliderwrapperbgonoff" id="sliderwrapperbgonoff" value="true" <?php if ($sliderwrapperbgonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $sliderwrapperbg_src = get_option('mytheme_sliderwrapperbg'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($sliderwrapperbg_src, false, 200, 100); ?>		
						</div>
						<label for="sliderwrapperbg" class="sliderwrapperbg"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="sliderwrapperbg" id="sliderwrapperbg" class="upload-text" size="" value="<?php echo get_option('mytheme_sliderwrapperbg'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="sliderwrapperbgleft" id="sliderwrapperbgleft" size="4" value="<?php echo get_option('mytheme_sliderwrapperbgleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="sliderwrapperbgtop" id="sliderwrapperbgtop" size="4" value="<?php echo get_option('mytheme_sliderwrapperbgtop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="sliderwrapperbgrepeat">
						<?php $sliderwrapperbgrepeat = get_option('mytheme_sliderwrapperbgrepeat'); ?>
						<option value="repeat" <?php if ($sliderwrapperbgrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($sliderwrapperbgrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($sliderwrapperbgrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($sliderwrapperbgrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $sliderwrapperbgfix = get_option('mytheme_sliderwrapperbgfix'); ?>
						<label for="sliderwrapperbgfix" class="sliderwrapperbgfix"></label>
						<input type="hidden" name="sliderwrapperbgfix" value="" />
						<input type="checkbox" name="sliderwrapperbgfix" id="sliderwrapperbgfix" value="fixed" <?php if ($sliderwrapperbgfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
				<div id="sloganwrapperbg-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Slogan wrapper', 'my_framework'); ?></h4>
						<?php $sloganwrapperbgonoff = get_option('mytheme_sloganwrapperbgonoff'); ?>
						<label for="sloganwrapperbgonoff" class="sloganwrapperbg-onoff"></label>
						<input type="hidden" name="sloganwrapperbgonoff" value="false" />
						<input type="checkbox" name="sloganwrapperbgonoff" id="sloganwrapperbgonoff" value="true" <?php if ($sloganwrapperbgonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $sloganwrapperbg_src = get_option('mytheme_sloganwrapperbg'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($sloganwrapperbg_src, false, 200, 100); ?>		
						</div>
						<label for="sloganwrapperbg" class="sloganwrapperbg"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="sloganwrapperbg" id="sloganwrapperbg" class="upload-text" size="" value="<?php echo get_option('mytheme_sloganwrapperbg'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="sloganwrapperbgleft" id="sloganwrapperbgleft" size="4" value="<?php echo get_option('mytheme_sloganwrapperbgleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="sloganwrapperbgtop" id="sloganwrapperbgtop" size="4" value="<?php echo get_option('mytheme_sloganwrapperbgtop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="sloganwrapperbgrepeat">
						<?php $sloganwrapperbgrepeat = get_option('mytheme_sloganwrapperbgrepeat'); ?>
						<option value="repeat" <?php if ($sloganwrapperbgrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($sloganwrapperbgrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($sloganwrapperbgrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($sloganwrapperbgrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $sloganwrapperbgfix = get_option('mytheme_sloganwrapperbgfix'); ?>
						<label for="sloganwrapperbgfix" class="sloganwrapperbgfix"></label>
						<input type="hidden" name="sloganwrapperbgfix" value="" />
						<input type="checkbox" name="sloganwrapperbgfix" id="sloganwrapperbgfix" value="fixed" <?php if ($sloganwrapperbgfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
				<div id="sidebarbg-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Sidebar', 'my_framework'); ?></h4>
						<?php $sidebarbgonoff = get_option('mytheme_sidebarbgonoff'); ?>
						<label for="sidebarbgonoff" class="sidebarbg-onoff"></label>
						<input type="hidden" name="sidebarbgonoff" value="false" />
						<input type="checkbox" name="sidebarbgonoff" id="sidebarbgonoff" value="true" <?php if ($sidebarbgonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $sidebarbg_src = get_option('mytheme_sidebarbg'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($sidebarbg_src, false, 200, 100); ?>		
						</div>
						<label for="sidebarbg" class="sidebarbg"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="sidebarbg" id="sidebarbg" class="upload-text" size="" value="<?php echo get_option('mytheme_sidebarbg'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="sidebarbgleft" id="sidebarbgleft" size="4" value="<?php echo get_option('mytheme_sidebarbgleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="sidebarbgtop" id="sidebarbgtop" size="4" value="<?php echo get_option('mytheme_sidebarbgtop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="sidebarbgrepeat">
						<?php $sidebarbgrepeat = get_option('mytheme_sidebarbgrepeat'); ?>
						<option value="repeat" <?php if ($sidebarbgrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($sidebarbgrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($sidebarbgrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($sidebarbgrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $sidebarbgfix = get_option('mytheme_sidebarbgfix'); ?>
						<label for="sidebarbgfix" class="sidebarbgfix"></label>
						<input type="hidden" name="sidebarbgfix" value="" />
						<input type="checkbox" name="sidebarbgfix" id="sidebarbgfix" value="fixed" <?php if ($sidebarbgfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
				<div id="contentbg-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Content', 'my_framework'); ?></h4>
						<?php $contentbgonoff = get_option('mytheme_contentbgonoff'); ?>
						<label for="contentbgonoff" class="contentbg-onoff"></label>
						<input type="hidden" name="contentbgonoff" value="false" />
						<input type="checkbox" name="contentbgonoff" id="contentbgonoff" value="true" <?php if ($contentbgonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $contentbg_src = get_option('mytheme_contentbg'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($contentbg_src, false, 200, 100); ?>		
						</div>
						<label for="contentbg" class="contentbg"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="contentbg" id="contentbg" class="upload-text" size="" value="<?php echo get_option('mytheme_contentbg'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="contentbgleft" id="contentbgleft" size="4" value="<?php echo get_option('mytheme_contentbgleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="contentbgtop" id="contentbgtop" size="4" value="<?php echo get_option('mytheme_contentbgtop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="contentbgrepeat">
						<?php $contentbgrepeat = get_option('mytheme_contentbgrepeat'); ?>
						<option value="repeat" <?php if ($contentbgrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($contentbgrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($contentbgrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($contentbgrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $contentbgfix = get_option('mytheme_contentbgfix'); ?>
						<label for="contentbgfix" class="contentbgfix"></label>
						<input type="hidden" name="contentbgfix" value="" />
						<input type="checkbox" name="contentbgfix" id="contentbgfix" value="fixed" <?php if ($contentbgfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
				<div id="mainbg-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Main (content & sidebar wrapper)', 'my_framework'); ?></h4>
						<?php $mainbgonoff = get_option('mytheme_mainbgonoff'); ?>
						<label for="mainbgonoff" class="mainbg-onoff"></label>
						<input type="hidden" name="mainbgonoff" value="false" />
						<input type="checkbox" name="mainbgonoff" id="mainbgonoff" value="true" <?php if ($mainbgonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $mainbg_src = get_option('mytheme_mainbg'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($mainbg_src, false, 200, 100); ?>		
						</div>
						<label for="mainbg" class="mainbg"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="mainbg" id="mainbg" class="upload-text" size="" value="<?php echo get_option('mytheme_mainbg'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="mainbgleft" id="mainbgleft" size="4" value="<?php echo get_option('mytheme_mainbgleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="mainbgtop" id="mainbgtop" size="4" value="<?php echo get_option('mytheme_mainbgtop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="mainbgrepeat">
						<?php $mainbgrepeat = get_option('mytheme_mainbgrepeat'); ?>
						<option value="repeat" <?php if ($mainbgrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($mainbgrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($mainbgrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($mainbgrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $mainbgfix = get_option('mytheme_mainbgfix'); ?>
						<label for="mainbgfix" class="mainbgfix"></label>
						<input type="hidden" name="mainbgfix" value="" />
						<input type="checkbox" name="mainbgfix" id="mainbgfix" value="fixed" <?php if ($mainbgfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
				<div id="footerwrapperbg-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Footer', 'my_framework'); ?></h4>
						<?php $footerwrapperbgonoff = get_option('mytheme_footerwrapperbgonoff'); ?>
						<label for="footerwrapperbgonoff" class="footerwrapperbg-onoff"></label>
						<input type="hidden" name="footerwrapperbgonoff" value="false" />
						<input type="checkbox" name="footerwrapperbgonoff" id="footerwrapperbgonoff" value="true" <?php if ($footerwrapperbgonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $footerwrapperbg_src = get_option('mytheme_footerwrapperbg'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($footerwrapperbg_src, false, 200, 100); ?>		
						</div>
						<label for="footerwrapperbg" class="footerwrapperbg"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="footerwrapperbg" id="footerwrapperbg" class="upload-text" size="" value="<?php echo get_option('mytheme_footerwrapperbg'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="footerwrapperbgleft" id="footerwrapperbgleft" size="4" value="<?php echo get_option('mytheme_footerwrapperbgleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="footerwrapperbgtop" id="footerwrapperbgtop" size="4" value="<?php echo get_option('mytheme_footerwrapperbgtop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="footerwrapperbgrepeat">
						<?php $footerwrapperbgrepeat = get_option('mytheme_footerwrapperbgrepeat'); ?>
						<option value="repeat" <?php if ($footerwrapperbgrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($footerwrapperbgrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($footerwrapperbgrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($footerwrapperbgrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $footerwrapperbgfix = get_option('mytheme_footerwrapperbgfix'); ?>
						<label for="footerwrapperbgfix" class="footerwrapperbgfix"></label>
						<input type="hidden" name="footerwrapperbgfix" value="" />
						<input type="checkbox" name="footerwrapperbgfix" id="footerwrapperbgfix" value="fixed" <?php if ($footerwrapperbgfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
				<div id="footerwidgetwrapper-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Widget section', 'my_framework'); ?></h4>
						<?php $footerwidgetwrapperonoff = get_option('mytheme_footerwidgetwrapperonoff'); ?>
						<label for="footerwidgetwrapperonoff" class="footerwidgetwrapper-onoff"></label>
						<input type="hidden" name="footerwidgetwrapperonoff" value="false" />
						<input type="checkbox" name="footerwidgetwrapperonoff" id="footerwidgetwrapperonoff" value="true" <?php if ($footerwidgetwrapperonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $footerwidgetwrapper_src = get_option('mytheme_footerwidgetwrapper'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($footerwidgetwrapper_src, false, 200, 100); ?>		
						</div>
						<label for="footerwidgetwrapper" class="footerwidgetwrapper"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="footerwidgetwrapper" id="footerwidgetwrapper" class="upload-text" size="" value="<?php echo get_option('mytheme_footerwidgetwrapper'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="footerwidgetwrapperleft" id="footerwidgetwrapperleft" size="4" value="<?php echo get_option('mytheme_footerwidgetwrapperleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="footerwidgetwrappertop" id="footerwidgetwrappertop" size="4" value="<?php echo get_option('mytheme_footerwidgetwrappertop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="footerwidgetwrapperrepeat">
						<?php $footerwidgetwrapperrepeat = get_option('mytheme_footerwidgetwrapperrepeat'); ?>
						<option value="repeat" <?php if ($footerwidgetwrapperrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($footerwidgetwrapperrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($footerwidgetwrapperrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($footerwidgetwrapperrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $footerwidgetwrapperfix = get_option('mytheme_footerwidgetwrapperfix'); ?>
						<label for="footerwidgetwrapperfix" class="footerwidgetwrapperfix"></label>
						<input type="hidden" name="footerwidgetwrapperfix" value="" />
						<input type="checkbox" name="footerwidgetwrapperfix" id="footerwidgetwrapperfix" value="fixed" <?php if ($footerwidgetwrapperfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
				<div id="footercopyrightwrapper-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Copyright', 'my_framework'); ?></h4>
						<?php $footercopyrightwrapperonoff = get_option('mytheme_footercopyrightwrapperonoff'); ?>
						<label for="footercopyrightwrapperonoff" class="footercopyrightwrapper-onoff"></label>
						<input type="hidden" name="footercopyrightwrapperonoff" value="false" />
						<input type="checkbox" name="footercopyrightwrapperonoff" id="footercopyrightwrapperonoff" value="true" <?php if ($footercopyrightwrapperonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $footercopyrightwrapper_src = get_option('mytheme_footercopyrightwrapper'); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($footercopyrightwrapper_src, false, 200, 100); ?>		
						</div>
						<label for="footercopyrightwrapper" class="footercopyrightwrapper"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="footercopyrightwrapper" id="footercopyrightwrapper" class="upload-text" size="" value="<?php echo get_option('mytheme_footercopyrightwrapper'); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="footercopyrightwrapperleft" id="footercopyrightwrapperleft" size="4" value="<?php echo get_option('mytheme_footercopyrightwrapperleft'); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="footercopyrightwrappertop" id="footercopyrightwrappertop" size="4" value="<?php echo get_option('mytheme_footercopyrightwrappertop'); ?>"/>
					</div>
					<div class="row w110">
					<select name="footercopyrightwrapperrepeat">
						<?php $footercopyrightwrapperrepeat = get_option('mytheme_footercopyrightwrapperrepeat'); ?>
						<option value="repeat" <?php if ($footercopyrightwrapperrepeat=='repeat') { echo 'selected="selected"'; } ?>><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($footercopyrightwrapperrepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($footercopyrightwrapperrepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($footercopyrightwrapperrepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $footercopyrightwrapperfix = get_option('mytheme_footercopyrightwrapperfix'); ?>
						<label for="footercopyrightwrapperfix" class="footercopyrightwrapperfix"></label>
						<input type="hidden" name="footercopyrightwrapperfix" value="" />
						<input type="checkbox" name="footercopyrightwrapperfix" id="footercopyrightwrapperfix" value="fixed" <?php if ($footercopyrightwrapperfix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				
			</div>
			<!-- end of #allbackground-section -->
			
			
			
			<div id="topbar-section">
				<h2><?php _e('Top bar', 'my_framework'); ?></h2>
				<div id="topbar-on-off" class="pa-option">
				<h4><?php _e('Display top bar', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="topbaronoff">
						<?php $topbaronoff = get_option('mytheme_topbaronoff'); ?>
						<option value="autohide" <?php if ($topbaronoff=='autohide') { echo 'selected="selected"'; } ?>><?php _e('Auto-hide', 'my_framework'); ?></option>
						<option value="enable" <?php if ($topbaronoff=='enable') { echo 'selected="selected"'; } ?>><?php _e('Always show', 'my_framework'); ?></option>
						<option value="disable" <?php if ($topbaronoff=='disable') { echo 'selected="selected"'; } ?>><?php _e('Always hide', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('<br />from here you can show or hide top bar.', 'my_framework'); ?></div>
				</div>
				<div id="topbarnav-on-off" class="pa-option">
				<h4><?php _e('Display top navigation', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $topbarnavonoff = get_option('mytheme_topbarnavonoff'); ?>
					<label for="topbarnavonoff" class="topbarnavonoff"></label>
					<input type="hidden" name="topbarnavonoff" value="false" />
					<input type="checkbox" name="topbarnavonoff" id="topbarnavonoff" value="true" <?php if ($topbarnavonoff=='true') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />from here you can show or hide top navigation.', 'my_framework'); ?></div>
				</div>
				<div id="topbartext" class="pa-option">
					<?php $topbartext = get_option('mytheme_topbartext'); ?>
					<h4><?php _e('Bar information', 'my_framework'); ?></h4>
					<div class="row">
					<label for="topbartext" class="topbartext"></label>
					<textarea name="topbartext" id="topbartext" cols="1" rows="1"><?php echo stripcslashes(esc_html(get_option('mytheme_topbartext'))); ?></textarea>
					</div>
					<div class="description full"><?php _e('<br />You can write your text to appear in top bar.', 'my_framework'); ?></div>
				</div>
			</div>
			<!-- end of #topbar-section -->
			
			
			
			<div id="topinfo-section">
				<h2><?php _e('Top Information', 'my_framework'); ?></h2>
				<div id="topinfo-on-off" class="pa-option">
				<h4><?php _e('Display top information', 'my_framework'); ?></h4>
					<div class="row">
					<?php $topinfoonoff = get_option('mytheme_topinfoonoff'); ?>
					<label for="topinfoonoff" class="topinfo-onoff"></label>
					<input type="hidden" name="topinfoonoff" value="false" />
					<input type="checkbox" name="topinfoonoff" id="topinfoonoff" value="true" <?php if ($topinfoonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />from here you can show or hide top information section.', 'my_framework'); ?></div>
					</div>
				</div>
				
				<div id="topinformation" class="pa-option">
					<?php $topinfo = get_option('mytheme_topinfo'); ?>
					<h4><?php _e('Top information', 'my_framework'); ?></h4>
					<div class="row">
					<label for="topinfo" class="topinfo"></label>
					<textarea name="topinfo" id="topinfo" cols="1" rows="1"><?php echo stripcslashes(esc_html(get_option('mytheme_topinfo'))); ?></textarea>
					</div>
					<div class="description full"><?php _e('You can write your information to appear in top i.e.', 'my_framework'); ?><br />&lt;span class="email"&gt;support@company.com&lt;/span&gt;<br />&lt;span class="phone"&gt;(897) 222 8765&lt;/span&gt;</div>
				</div>
			</div>
			<!-- end of #topinfo-section -->
			
			
			
			<div id="topsearch-section">
				<h2><?php _e('Top Search', 'my_framework'); ?></h2>
				<div id="topsearch-on-off" class="pa-option">
				<h4><?php _e('Display top search', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="topsearchonoff">
						<?php $topsearchonoff = get_option('mytheme_topsearchonoff'); ?>
						<option value="autohide" <?php if ($topsearchonoff=='autohide') { echo 'selected="selected"'; } ?>><?php _e('Auto-hide', 'my_framework'); ?></option>
						<option value="enable" <?php if ($topsearchonoff=='enable') { echo 'selected="selected"'; } ?>><?php _e('Always show', 'my_framework'); ?></option>
						<option value="disable" <?php if ($topsearchonoff=='disable') { echo 'selected="selected"'; } ?>><?php _e('Always hide', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('<br />from here you can show or hide top search.', 'my_framework'); ?></div>
				</div>
			</div>
			<!-- end of #topsearch-section -->
			
			
			
			<div id="mainnavigation-section">
				<h2><?php _e('Main Navigation Properties', 'my_framework'); ?></h2>
				<div id="mainnavimage-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Display navigation arrow', 'my_framework'); ?></h4>
						<?php $mainnavarrowonoff = get_option('mytheme_mainnavarrowonoff'); ?>
						<label for="mainnavarrowonoff" class="mainnavarrow-onoff"></label>
						<input type="hidden" name="mainnavarrowonoff" value="false" />
						<input type="checkbox" name="mainnavarrowonoff" id="mainnavarrowonoff" value="true" <?php if ($mainnavarrowonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide main navigation arrow.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="mainnavmenudivider-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Display menu divider', 'my_framework'); ?></h4>
						<?php $mainnavmenudivideronoff = get_option('mytheme_mainnavmenudivideronoff'); ?>
						<label for="mainnavmenudivideronoff" class="mainnavmenudivider-onoff"></label>
						<input type="hidden" name="mainnavmenudivideronoff" value="false" />
						<input type="checkbox" name="mainnavmenudivideronoff" id="mainnavmenudivideronoff" value="true" <?php if ($mainnavmenudivideronoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide menu item divider.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="mainnavsupersubs-maxwidth" class="pa-option">
					<h4><?php _e('Supersubs max width', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="mainnavsupersubsmaxwidth" id="mainnavsupersubsmaxwidth" size="4" value="<?php echo get_option('mytheme_mainnavsupersubsmaxwidth'); ?>" />
					<div class="description"><?php _e('set <strong>"max width"</strong> for supersubs plugin (27 by default).<br /><b><i>note: supersubs active when you set color for submenu and submenuitems</i></b>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="mainnavheight-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Effect properties', 'my_framework'); ?></h4>
						<?php $mainnavheightonoff = get_option('mytheme_mainnavheightonoff'); ?>
						<label for="mainnavheightonoff" class="mainnavheight-onoff"></label>
						<input type="hidden" name="mainnavheightonoff" value="false" />
						<input type="checkbox" name="mainnavheightonoff" id="mainnavheightonoff" value="true" <?php if ($mainnavheightonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />disable <strong>slide-down</strong> animation for submenu.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavdelay" id="mainnavdelay" size="4" value="<?php echo get_option('mytheme_mainnavdelay'); ?>" />
					<div class="description"><?php _e('set <strong>"delay"</strong> in milliseconds that the mouse can remain outside a submenu without it closing (200 by default).', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<select name="mainnavspeed">
						<?php $mainnavspeed = get_option('mytheme_mainnavspeed'); ?>
						<option value="normal" <?php if ($mainnavspeed=='normal') { echo 'selected="selected"'; } ?>><?php _e('Normal', 'my_framework'); ?></option>
						<option value="fast" <?php if ($mainnavspeed=='fast') { echo 'selected="selected"'; } ?>><?php _e('Fast', 'my_framework'); ?></option>
						<option value="slow" <?php if ($mainnavspeed=='slow') { echo 'selected="selected"'; } ?>><?php _e('Slow', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />select <strong>"speed"</strong> of the animation.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="mainnav" class="pa-option">
				<h4><?php _e('Main menu properties', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="mainnavborderradius" id="mainnavborderradius" size="4" value="<?php echo get_option('mytheme_mainnavborderradius'); ?>" />
					<div class="description"><?php _e('set <strong>"border radius"</strong>.<br />leave it blank for use default.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="mainnavsubmenu" class="pa-option">
				<h4><?php _e('Main sub menu properties', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="mainnavsubmenuradius" id="mainnavsubmenuradius" size="4" value="<?php echo get_option('mytheme_mainnavsubmenuradius'); ?>" />
					<div class="description"><?php _e('set <strong>"sub-menu border radius"</strong>.<br />leave it blank for use default.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<input type="text" name="mainnavsubmenuitemradius" id="mainnavsubmenuitemradius" size="4" value="<?php echo get_option('mytheme_mainnavsubmenuitemradius'); ?>" />
					<div class="description"><?php _e('set <strong>"sub-menu item border radius"</strong>.<br />leave it blank for use default.', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #mainnavigation-section -->
			
			
			
			<div id="slogan-section">
				<h2><?php _e('Slogan', 'my_framework'); ?></h2>
				<div id="slogan-on-off" class="pa-option">
				<h4><?php _e('Display slogan', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $sloganonoff = get_option('mytheme_sloganonoff'); ?>
					<label for="sloganonoff" class="slogan-onoff"></label>
					<input type="hidden" name="sloganonoff" value="false" />
					<input type="checkbox" name="sloganonoff" id="sloganonoff" value="true" <?php if ($sloganonoff=='true' || !$sloganonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />from here you can show or hide slogan.', 'my_framework'); ?></div>
				</div>
				<div id="slogancontrol-on-off" class="pa-option">
				<h4><?php _e('Display slogan controls', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $slogancontrolonoff = get_option('mytheme_slogancontrolonoff'); ?>
					<label for="slogancontrolonoff" class="slogancontrol-onoff"></label>
					<input type="hidden" name="slogancontrolonoff" value="false" />
					<input type="checkbox" name="slogancontrolonoff" id="slogancontrolonoff" value="true" <?php if ($slogancontrolonoff=='true') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />from here you can show or hide slogan controls.', 'my_framework'); ?></div>
				</div>
				<div id="slogan-speed" class="pa-option">
				<h4><?php _e('Slogan speed', 'my_framework'); ?></h4>
					<div class="row w110">
					<input type="text" name="sloganspeed" id="sloganspeed" size="4" value="<?php echo get_option('mytheme_sloganspeed'); ?>"/>
					</div>
					<div class="description"><?php _e('<br />write speed in millisecond for animation speed.<br />(8000 by default)', 'my_framework'); ?></div>
				</div>
				<div id="slogan-text" class="pa-option">
					<?php $slogan = get_option('mytheme_slogan'); ?>
					<h4><?php _e('Slogans', 'my_framework'); ?></h4>
					<div class="row">
					<label for="slogan" class="slogan"></label>
					<textarea name="slogan" id="slogan" cols="1" rows="1"><?php echo stripcslashes(esc_html(get_option('mytheme_slogan'))); ?></textarea>
					</div>
					<div class="description full"><?php _e('You can write your slogan to appear.<br />slogans must be "|" separated like this:<br />slogan 1 | slogan 2 | etc ...', 'my_framework'); ?></div>
				</div>
			</div>
			<!-- end of #slogan-section -->
			
			
			
			<div id="breadcrumb-section">
				<h2><?php _e('Breadcrumb', 'my_framework'); ?></h2>
				<div id="breadcrumb-on-off" class="pa-option">
				<h4><?php _e('Display breadcrumb', 'my_framework'); ?></h4>
					<div class="row">
					<?php $breadcrumbonoff = get_option('mytheme_breadcrumbonoff'); ?>
					<label for="breadcrumbonoff" class="breadcrumb-onoff"></label>
					<input type="hidden" name="breadcrumbonoff" value="false" />
					<input type="checkbox" name="breadcrumbonoff" id="breadcrumbonoff" value="true" <?php if ($breadcrumbonoff=='true' || !$breadcrumbonoff) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />from here you can show or hide breadcrumb.', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #breadcrumb-section -->
			
			
			
			<div id="backtotop-section">
				<h2><?php _e('Back To Top', 'my_framework'); ?></h2>
				<div id="backtotop-on-off" class="pa-option">
				<h4><?php _e('Display "back to top"', 'my_framework'); ?></h4>
					<div class="row">
					<?php $backtotoponoff = get_option('mytheme_backtotoponoff'); ?>
					<label for="backtotoponoff" class="backtotop-onoff"></label>
					<input type="hidden" name="backtotoponoff" value="false" />
					<input type="checkbox" name="backtotoponoff" id="backtotoponoff" value="true" <?php if ($backtotoponoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />from here you can show or hide backtotop.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="backtotop-side" class="pa-option">
				<h4><?php _e('Side of "back to top"', 'my_framework'); ?></h4>
					<div class="row">
					<select name="backtotopside">
						<?php $backtotopside = get_option('mytheme_backtotopside'); ?>
						<option value="right" <?php if ($backtotopside=='right') { echo 'selected="selected"'; } ?>><?php _e('right', 'my_framework'); ?></option>
						<option value="left" <?php if ($backtotopside=='left') { echo 'selected="selected"'; } ?>><?php _e('left', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />select the side of "back to top" must be appear.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="backtotop-margin" class="pa-option">
				<h4><?php _e('Margin from edge', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="backtotopmargin" id="backtotopmargin" size="4" value="<?php echo get_option('mytheme_backtotopmargin'); ?>"/>
					<div class="description"><?php _e('margin from left or right edge of body (by default 50px).<br />with "px" for ex. 200px', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="backtotop-bottom" class="pa-option">
				<h4><?php _e('Margin from bottom', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="backtotopbottom" id="backtotopbottom" size="4" value="<?php echo get_option('mytheme_backtotopbottom'); ?>"/>
					<div class="description"><?php _e('margin from bottom of window (by default 100px).<br />with "px" or in percent for ex. 200px or 50%', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #backtotop-section -->
			
			
			
			<div id="socialnetwork-section">
				<h2><?php _e('Social Network', 'my_framework'); ?></h2>
				<div class="pa-option">
				<h4><?php _e('Socual Class', 'my_framework'); ?></h4>
					<div class="row">
					<select name="socialclass">
						<?php $socialclass = get_option('mytheme_socialclass'); ?>
						<option value="light" <?php if ($socialclass=='light') { echo 'selected="selected"'; } ?>><?php _e('light icon', 'my_framework'); ?></option>
						<option value="dark" <?php if ($socialclass=='dark') { echo 'selected="selected"'; } ?>><?php _e('dark icon', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />select <strong>"class"</strong> for dark or light icons.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Delicious', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="deliciousnetwork" id="deliciousnetwork" size="4" class="w200" value="<?php echo get_option('mytheme_deliciousnetwork'); ?>" />
					<div class="description delicious"><?php _e('set url for<strong>"Delicious"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Deviant Art', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="deviantartnetwork" id="deviantartnetwork" size="4" class="w200" value="<?php echo get_option('mytheme_deviantartnetwork'); ?>" />
					<div class="description deviantart"><?php _e('set url for<strong>"Deviant Art"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Digg', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="diggnetwork" id="diggnetwork" size="4" class="w200" value="<?php echo get_option('mytheme_diggnetwork'); ?>" />
					<div class="description digg"><?php _e('set url for<strong>"Digg"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Face Book', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="facebooknetwork" id="facebooknetwork" size="4" class="w200" value="<?php echo get_option('mytheme_facebooknetwork'); ?>" />
					<div class="description facebook"><?php _e('set url for<strong>"Face Book"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Flickr', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="flickrnetwork" id="flickrnetwork" size="4" class="w200" value="<?php echo get_option('mytheme_flickrnetwork'); ?>" />
					<div class="description flickr"><?php _e('set url for<strong>"Flickr"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Google', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="googlenetwork" id="googlenetwork" size="4" class="w200" value="<?php echo get_option('mytheme_googlenetwork'); ?>" />
					<div class="description google"><?php _e('set url for<strong>"Google"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Lastfm', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="lastfmnetwork" id="lastfmnetwork" size="4" class="w200" value="<?php echo get_option('mytheme_lastfmnetwork'); ?>" />
					<div class="description lastfm"><?php _e('set url for<strong>"Lastfm"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Linkedin', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="linkedinnetwork" id="linkedinnetwork" size="4" class="w200" value="<?php echo get_option('mytheme_linkedinnetwork'); ?>" />
					<div class="description linkedin"><?php _e('set url for<strong>"Linkedin"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Picasa', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="picasanetwork" id="picasanetwork" size="4" class="w200" value="<?php echo get_option('mytheme_picasanetwork'); ?>" />
					<div class="description picasa"><?php _e('set url for<strong>"Picasa"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('RSS', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="rssnetwork" id="rssnetwork" size="4" class="w200" value="<?php echo get_option('mytheme_rssnetwork'); ?>" />
					<div class="description rss"><?php _e('set url for<strong>"RSS"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Stumble Upon', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="stumbleuponnetwork" id="stumbleuponnetwork" size="4" class="w200" value="<?php echo get_option('mytheme_stumbleuponnetwork'); ?>" />
					<div class="description stumbleupon"><?php _e('set url for<strong>"Stumble Upon"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Tumblr', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="tumblrnetwork" id="tumblrnetwork" size="4" class="w200" value="<?php echo get_option('mytheme_tumblrnetwork'); ?>" />
					<div class="description tumblr"><?php _e('set url for<strong>"Tumblr"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Twitter', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="twitternetwork" id="twitternetwork" size="4" class="w200" value="<?php echo get_option('mytheme_twitternetwork'); ?>" />
					<div class="description twitter"><?php _e('set url for<strong>"Twitter"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('Vimeo', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="vimeonetwork" id="vimeonetwork" size="4" class="w200" value="<?php echo get_option('mytheme_vimeonetwork'); ?>" />
					<div class="description vimeo"><?php _e('set url for<strong>"Vimeo"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
				<h4><?php _e('You Tube', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="youtubenetwork" id="youtubenetwork" size="4" class="w200" value="<?php echo get_option('mytheme_youtubenetwork'); ?>" />
					<div class="description youtube"><?php _e('set url for<strong>"You Tube"</strong>.<br />leave it blank if you want remove it.', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #socialnetwork-section -->
			
			
			
			<div id="socialshare-section">
				<h2><?php _e('Social Shares', 'my_framework'); ?></h2>
				<div class="pa-option">
				<h4><?php _e('Display social share on post page', 'my_framework'); ?></h4>
					<div class="row">
					<?php $facebookshare = get_option('mytheme_facebookshare'); ?>
					<label for="facebookshare" class="facebookshare-onoff"></label>
					<input type="hidden" name="facebookshare" value="false" />
					<input type="checkbox" name="facebookshare" id="facebookshare" value="true" <?php if ($facebookshare=='true' || !$facebookshare) { echo 'checked="checked"'; } ?> />
					<div class="description facebook"><?php _e('<br />set social share for<strong>"Face Book"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
					<div class="row">
					<?php $twittershare = get_option('mytheme_twittershare'); ?>
					<label for="twittershare" class="twittershare-onoff"></label>
					<input type="hidden" name="twittershare" value="false" />
					<input type="checkbox" name="twittershare" id="twittershare" value="true" <?php if ($twittershare=='true' || !$twittershare) { echo 'checked="checked"'; } ?> />
					<div class="description twitter"><?php _e('<br />set social share for<strong>"Twitter"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
					<div class="row">
					<?php $googleshare = get_option('mytheme_googleshare'); ?>
					<label for="googleshare" class="googleshare-onoff"></label>
					<input type="hidden" name="googleshare" value="false" />
					<input type="checkbox" name="googleshare" id="googleshare" value="true" <?php if ($googleshare=='true' || !$googleshare) { echo 'checked="checked"'; } ?> />
					<div class="description google"><?php _e('<br />set social share for<strong>"Google"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
					<div class="row">
					<?php $stumbleuponshare = get_option('mytheme_stumbleuponshare'); ?>
					<label for="stumbleuponshare" class="stumbleuponshare-onoff"></label>
					<input type="hidden" name="stumbleuponshare" value="false" />
					<input type="checkbox" name="stumbleuponshare" id="stumbleuponshare" value="true" <?php if ($stumbleuponshare=='true' || !$stumbleuponshare) { echo 'checked="checked"'; } ?> />
					<div class="description stumbleupon"><?php _e('<br />set social share for<strong>"Stumble Upon"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
					<div class="row">
					<?php $myspaceshare = get_option('mytheme_myspaceshare'); ?>
					<label for="myspaceshare" class="myspaceshare-onoff"></label>
					<input type="hidden" name="myspaceshare" value="false" />
					<input type="checkbox" name="myspaceshare" id="myspaceshare" value="true" <?php if ($myspaceshare=='true' || !$myspaceshare) { echo 'checked="checked"'; } ?> />
					<div class="description myspace"><?php _e('<br />set social share for<strong>"My Space"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
					<div class="row">
					<?php $deliciousshare = get_option('mytheme_deliciousshare'); ?>
					<label for="deliciousshare" class="deliciousshare-onoff"></label>
					<input type="hidden" name="deliciousshare" value="false" />
					<input type="checkbox" name="deliciousshare" id="deliciousshare" value="true" <?php if ($deliciousshare=='true' || !$deliciousshare) { echo 'checked="checked"'; } ?> />
					<div class="description delicious"><?php _e('<br />set social share for<strong>"Delicious"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
					<div class="row">
					<?php $diggshare = get_option('mytheme_diggshare'); ?>
					<label for="diggshare" class="diggshare-onoff"></label>
					<input type="hidden" name="diggshare" value="false" />
					<input type="checkbox" name="diggshare" id="diggshare" value="true" <?php if ($diggshare=='true' || !$diggshare) { echo 'checked="checked"'; } ?> />
					<div class="description digg"><?php _e('<br />set social share for<strong>"Digg"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
					<div class="row">
					<?php $redditshare = get_option('mytheme_redditshare'); ?>
					<label for="redditshare" class="redditshare-onoff"></label>
					<input type="hidden" name="redditshare" value="false" />
					<input type="checkbox" name="redditshare" id="redditshare" value="true" <?php if ($redditshare=='true' || !$redditshare) { echo 'checked="checked"'; } ?> />
					<div class="description reddit"><?php _e('<br />set social share for<strong>"Reddit"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
				<div class="pa-option">
					<div class="row">
					<?php $linkedinshare = get_option('mytheme_linkedinshare'); ?>
					<label for="linkedinshare" class="linkedinshare-onoff"></label>
					<input type="hidden" name="linkedinshare" value="false" />
					<input type="checkbox" name="linkedinshare" id="linkedinshare" value="true" <?php if ($linkedinshare=='true' || !$linkedinshare) { echo 'checked="checked"'; } ?> />
					<div class="description linkedin"><?php _e('<br />set social share for<strong>"Linkedin"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #socialshare-section -->
			
			
			
			
			<div id="footeronoff-section">
				<h2><?php _e('Footer Setting', 'my_framework'); ?></h2>
				<div id="footer-on-off" class="pa-option">
				<h4><?php _e('Footer status', 'my_framework'); ?></h4>
					<div class="row full">
					<?php $footeronoff = get_option('mytheme_footeronoff'); ?>
					<label for="footeronoff" class="footer-onoff"></label>
					<input type="hidden" name="footeronoff" value="false" />
					<input type="checkbox" name="footeronoff" id="footeronoff" value="true" <?php if ($footeronoff=='true' || !$footeronoff) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('show or hide footer completely.<br />this section includes <strong>"widget section"</strong> and <strong>"copyright section"</strong>', 'my_framework'); ?></div>
					</div>
				</div>
			</div>
			<!-- end of #footeronoff-section -->
			
			
			
			<div id="footerstyle-section">
				<h2><?php _e('Footer Style Setting', 'my_framework'); ?></h2>
				<div id="footerstyle-on-off" class="pa-option">
				<h4><?php _e('Footer widgets status', 'my_framework'); ?></h4>
					<div class="row full">
					<?php $footerstyleonoff = get_option('mytheme_footerstyleonoff'); ?>
					<label for="footerstyleonoff" class="footerstyle-onoff"></label>
					<input type="hidden" name="footerstyleonoff" value="false" />
					<input type="checkbox" name="footerstyleonoff" id="footerstyleonoff" value="true" <?php if ($footerstyleonoff=='true' || !$footerstyleonoff) { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('<br />show or hide footer widget section.', 'my_framework'); ?></div>
					</div>
				</div>
				<div id="footerstyle" class="pa-option">
					<?php $footerstyle = get_option('mytheme_footerstyle'); ?>
					<h4><?php _e('Select desired footer style', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="footerstyle1" class="footerstyle1"></label>
					<input type="radio" name="footerstyle" id="footerstyle1" value="style1" <?php if ($footerstyle=='style1' || !$footerstyle) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="footerstyle2" class="footerstyle2"></label>
					<input type="radio" name="footerstyle" id="footerstyle2" value="style2" <?php if ($footerstyle=='style2') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="footerstyle3" class="footerstyle3"></label>
					<input type="radio" name="footerstyle" id="footerstyle3" value="style3" <?php if ($footerstyle=='style3') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="footerstyle4" class="footerstyle4"></label>
					<input type="radio" name="footerstyle" id="footerstyle4" value="style4" <?php if ($footerstyle=='style4') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="footerstyle5" class="footerstyle5"></label>
					<input type="radio" name="footerstyle" id="footerstyle5" value="style5" <?php if ($footerstyle=='style5') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="footerstyle6" class="footerstyle6"></label>
					<input type="radio" name="footerstyle" id="footerstyle6" value="style6" <?php if ($footerstyle=='style6') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="footerstyle7" class="footerstyle7"></label>
					<input type="radio" name="footerstyle" id="footerstyle7" value="style7" <?php if ($footerstyle=='style7') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="footerstyle8" class="footerstyle8"></label>
					<input type="radio" name="footerstyle" id="footerstyle8" value="style8" <?php if ($footerstyle=='style8') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
			</div>
			<!-- end of #footerstyle-section -->
			
			
			
			
			<div id="copyright-section">
				<h2><?php _e('Copyright Setting', 'my_framework'); ?></h2>
				<div id="copyright-on-off" class="pa-option">
				<h4><?php _e('Display copyright', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $copyrightonoff = get_option('mytheme_copyrightonoff'); ?>
					<label for="copyrightonoff" class="copyright-onoff"></label>
					<input type="hidden" name="copyrightonoff" value="false" />
					<input type="checkbox" name="copyrightonoff" id="copyrightonoff" value="true" <?php if ($copyrightonoff=='true' || !$copyrightonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide copyright.', 'my_framework'); ?></div>
				</div>
				<div id="copyright-navigation" class="pa-option">
				<h4><?php _e('Display footer navigation', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="copyrightnav">
						<?php $copyrightnav = get_option('mytheme_copyrightnav'); ?>
						<option value="no" <?php if ($copyrightnav=='no') { echo 'selected="selected"'; } ?>><?php _e('no navigation', 'my_framework'); ?></option>
						<option value="left" <?php if ($copyrightnav=='left') { echo 'selected="selected"'; } ?>><?php _e('left', 'my_framework'); ?></option>
						<option value="middle" <?php if ($copyrightnav=='middle') { echo 'selected="selected"'; } ?>><?php _e('middle', 'my_framework'); ?></option>
						<option value="right" <?php if ($copyrightnav=='right') { echo 'selected="selected"'; } ?>><?php _e('right', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('use this option for show or hide footer navigation.<br />Do not add any text when using navigation in desired section.', 'my_framework'); ?></div>
				</div>
				<div id="copyright" class="pa-option">
					<?php $copyright = get_option('mytheme_copyright'); ?>
					<h4><?php _e('Choose and write copyright', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="copyrighttwo" class="copyrighttwo"></label>
					<input type="radio" name="copyright" id="copyrighttwo" value="left-right" <?php if ($copyright=='left-right' || !$copyright) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="copyrightsingle" class="copyrightsingle"></label>
					<input type="radio" name="copyright" id="copyrightsingle" value="middle" <?php if ($copyright=='middle') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description full"><?php _e('You can choose between the <strong>"right &amp; left"</strong> style or <strong>"middle"</strong> style.<br />click on button, text input will appear.', 'my_framework'); ?></div>
					<div class="row copybox2">
					<label for="copyrightleft" class="copyrightleft"><?php _e('text on <strong>"left"</strong> Side', 'my_framework'); ?></label>
					<input type="text" name="copyrightleft" id="copyrightleft" size="60" class="w500" value="<?php echo stripcslashes(esc_html(get_option('mytheme_copyrightleft'))); ?>"/>
					</div>
					<div class="row copybox2">
					<label for="copyrightright" class="copyrightright"><?php _e('text on <strong>"right"</strong> Side', 'my_framework'); ?></label>
					<input type="text" name="copyrightright" id="copyrightright" size="60" class="w500" value="<?php echo stripcslashes(esc_html(get_option('mytheme_copyrightright'))); ?>"/>
					</div>
					<div class="row copybox1">
					<label for="copyrightmiddle" class="copyrightmiddle"><?php _e('text on <strong>"middle"</strong>', 'my_framework'); ?></label>
					<input type="text" name="copyrightmiddle" id="copyrightmiddle" size="60" class="w500" value="<?php echo stripcslashes(esc_html(get_option('mytheme_copyrightmiddle'))); ?>"/>
					</div>
				</div>
			</div>
			<!-- end of #copyright-section -->
			
			
			
			
		</div>
		<!-- end of .custom-form -->
	</div>
	<!-- end of .panelbody -->
	<div class="panelfooter">
	<?php _e('<span>When you apply the desired changes, press this button</span>', 'my_framework'); ?>
		<input type="submit" name="search" value="" class="updatebutton" />
	</form>
	</div>
</div>
<!-- end of .wrap -->

<?php
	}
	
	function themeoptions_update()
	{
	
		// this is where validation would go
		
		update_option('mytheme_sidebarsinglepost',    $_POST['sidebarsinglepost']);
		update_option('mytheme_sidebarsingleport',    $_POST['sidebarsingleport']);
		update_option('mytheme_sidebarcategory',    $_POST['sidebarcategory']);
		update_option('mytheme_sidebararchive',    $_POST['sidebararchive']);
		update_option('mytheme_sidebarauthor',    $_POST['sidebarauthor']);
		update_option('mytheme_sidebarsearch',    $_POST['sidebarsearch']);
		update_option('mytheme_sidebartag',    $_POST['sidebartag']);
		
		
		update_option('mytheme_showslider',    $_POST['showslider']);
		update_option('mytheme_slider',    $_POST['slider']);
		update_option('mytheme_slidercat',    $_POST['slidercat']);
		update_option('mytheme_slidertoppadding',    $_POST['slidertoppadding']);
		update_option('mytheme_sliderbottompadding',    $_POST['sliderbottompadding']);
		update_option('mytheme_sliderbgcolor',    $_POST['sliderbgcolor']);
		
		
		update_option('mytheme_nivoeffect',    $_POST['nivoeffect']);
		update_option('mytheme_nivoanimspeed',    $_POST['nivoanimspeed']);
		update_option('mytheme_nivopausetime',    $_POST['nivopausetime']);
		update_option('mytheme_nivoslices',    $_POST['nivoslices']);
		update_option('mytheme_nivoboxcols',    $_POST['nivoboxcols']);
		update_option('mytheme_nivoboxrows',    $_POST['nivoboxrows']);
		
		update_option('mytheme_nivodirectionnav',    $_POST['nivodirectionnav']);
		update_option('mytheme_nivodirectionnavhide',    $_POST['nivodirectionnavhide']);
		update_option('mytheme_nivocontrolnav',    $_POST['nivocontrolnav']);
		update_option('mytheme_nivocontrolnavthumbs',    $_POST['nivocontrolnavthumbs']);
		update_option('mytheme_nivocontrolnavthumbsv',    $_POST['nivocontrolnavthumbsv']);
		update_option('mytheme_nivocontrolnavthumbswidth',    $_POST['nivocontrolnavthumbswidth']);
		update_option('mytheme_nivocontrolnavthumbsheight',    $_POST['nivocontrolnavthumbsheight']);
		update_option('mytheme_nivocontrolnavthumbsmarginr',    $_POST['nivocontrolnavthumbsmarginr']);
		update_option('mytheme_nivocontrolnavthumbsmarginb',    $_POST['nivocontrolnavthumbsmarginb']);
		update_option('mytheme_nivocontrolnavthumbstop',    $_POST['nivocontrolnavthumbstop']);
		update_option('mytheme_nivocontrolnavthumbsleft',    $_POST['nivocontrolnavthumbsleft']);
		
		update_option('mytheme_nivocaptiononoff',    $_POST['nivocaptiononoff']);
		update_option('mytheme_nivocaptiontop',    $_POST['nivocaptiontop']);
		update_option('mytheme_nivocaptionbottom',    $_POST['nivocaptionbottom']);
		update_option('mytheme_nivocaptionleft',    $_POST['nivocaptionleft']);
		update_option('mytheme_nivocaptionright',    $_POST['nivocaptionright']);
		update_option('mytheme_nivocaptionwidth',    $_POST['nivocaptionwidth']);
		update_option('mytheme_nivocaptionheight',    $_POST['nivocaptionheight']);
		update_option('mytheme_nivocaptionradius',    $_POST['nivocaptionradius']);
		update_option('mytheme_nivocaptionpadding',    $_POST['nivocaptionpadding']);
		update_option('mytheme_nivocaptiontitlecolor',    $_POST['nivocaptiontitlecolor']);
		update_option('mytheme_nivocaptiontitleshadowcolor',    $_POST['nivocaptiontitleshadowcolor']);
		update_option('mytheme_nivocaptiontextcolor',    $_POST['nivocaptiontextcolor']);
		update_option('mytheme_nivocaptiontextshadowcolor',    $_POST['nivocaptiontextshadowcolor']);
		update_option('mytheme_nivocaptiontextalign',    $_POST['nivocaptiontextalign']);
		update_option('mytheme_nivocaptionbgcolor',    $_POST['nivocaptionbgcolor']);
		update_option('mytheme_nivocaptionbgimage',    $_POST['nivocaptionbgimage']);
		update_option('mytheme_nivocaptionopacity',    $_POST['nivocaptionopacity']);
		
		update_option('mytheme_nivopauseonhover',    $_POST['nivopauseonhover']);
		update_option('mytheme_nivorandomstart',    $_POST['nivorandomstart']);
		update_option('mytheme_nivobgcolor',    $_POST['nivobgcolor']);
		update_option('mytheme_nivotopmargin',    $_POST['nivotopmargin']);
		update_option('mytheme_nivobottommargin',    $_POST['nivobottommargin']);
		
		
		update_option('mytheme_kwicksease',    $_POST['kwicksease']);
		update_option('mytheme_kwicksduration',    $_POST['kwicksduration']);
		update_option('mytheme_kwicksevent',    $_POST['kwicksevent']);
		update_option('mytheme_kwicksvertical',    $_POST['kwicksvertical']);
		
		update_option('mytheme_kwickscaptiononoff',    $_POST['kwickscaptiononoff']);
		update_option('mytheme_kwickscaptiontop',    $_POST['kwickscaptiontop']);
		update_option('mytheme_kwickscaptionbottom',    $_POST['kwickscaptionbottom']);
		update_option('mytheme_kwickscaptionleft',    $_POST['kwickscaptionleft']);
		update_option('mytheme_kwickscaptionright',    $_POST['kwickscaptionright']);
		update_option('mytheme_kwickscaptionwidth',    $_POST['kwickscaptionwidth']);
		update_option('mytheme_kwickscaptionheight',    $_POST['kwickscaptionheight']);
		update_option('mytheme_kwickscaptionradius',    $_POST['kwickscaptionradius']);
		update_option('mytheme_kwickscaptionpadding',    $_POST['kwickscaptionpadding']);
		update_option('mytheme_kwickscaptiontitlecolor',    $_POST['kwickscaptiontitlecolor']);
		update_option('mytheme_kwickscaptiontitleshadowcolor',    $_POST['kwickscaptiontitleshadowcolor']);
		update_option('mytheme_kwickscaptiontextcolor',    $_POST['kwickscaptiontextcolor']);
		update_option('mytheme_kwickscaptionlinkcolor',    $_POST['kwickscaptionlinkcolor']);
		update_option('mytheme_kwickscaptiontextshadowcolor',    $_POST['kwickscaptiontextshadowcolor']);
		update_option('mytheme_kwickscaptiontextalign',    $_POST['kwickscaptiontextalign']);
		update_option('mytheme_kwickscaptionbgcolor',    $_POST['kwickscaptionbgcolor']);
		update_option('mytheme_kwickscaptionbgimage',    $_POST['kwickscaptionbgimage']);
		update_option('mytheme_kwickscaptionopacity',    $_POST['kwickscaptionopacity']);
		update_option('mytheme_kwickscaptioncontentpos',    $_POST['kwickscaptioncontentpos']);
		update_option('mytheme_kwickscaptionstepped',    $_POST['kwickscaptionstepped']);
		
		update_option('mytheme_kwickssticky',    $_POST['kwickssticky']);
		update_option('mytheme_kwicksdefault',    $_POST['kwicksdefault']);
		update_option('mytheme_kwicksmaxmin',    $_POST['kwicksmaxmin']);
		update_option('mytheme_kwicksmaxminval',    $_POST['kwicksmaxminval']);
		update_option('mytheme_kwickstopmargin',    $_POST['kwickstopmargin']);
		update_option('mytheme_kwicksbottommargin',    $_POST['kwicksbottommargin']);
		
		
		update_option('mytheme_showcaseeffect',    $_POST['showcaseeffect']);
		update_option('mytheme_showcaseanimspeed',    $_POST['showcaseanimspeed']);
		update_option('mytheme_showcasedelay',    $_POST['showcasedelay']);
		
		update_option('mytheme_showcasethumb',    $_POST['showcasethumb']);
		update_option('mytheme_showcasethumbalign',    $_POST['showcasethumbalign']);
		update_option('mytheme_showcasethumbpos',    $_POST['showcasethumbpos']);
		update_option('mytheme_showcasethumbslidex',    $_POST['showcasethumbslidex']);
		update_option('mytheme_showcasethumbbordercolor',    $_POST['showcasethumbbordercolor']);
		update_option('mytheme_showcasethumbactivebordercolor',    $_POST['showcasethumbactivebordercolor']);
		update_option('mytheme_showcasethumbbgcolor',    $_POST['showcasethumbbgcolor']);
		
		update_option('mytheme_showcasecaptiononoff',    $_POST['showcasecaptiononoff']);
		update_option('mytheme_showcasecaption',    $_POST['showcasecaption']);
		update_option('mytheme_showcasecaptiontop',    $_POST['showcasecaptiontop']);
		update_option('mytheme_showcasecaptionbottom',    $_POST['showcasecaptionbottom']);
		update_option('mytheme_showcasecaptionleft',    $_POST['showcasecaptionleft']);
		update_option('mytheme_showcasecaptionright',    $_POST['showcasecaptionright']);
		update_option('mytheme_showcasecaptionwidth',    $_POST['showcasecaptionwidth']);
		update_option('mytheme_showcasecaptionheight',    $_POST['showcasecaptionheight']);
		update_option('mytheme_showcasecaptionradius',    $_POST['showcasecaptionradius']);
		update_option('mytheme_showcasecaptionpadding',    $_POST['showcasecaptionpadding']);
		update_option('mytheme_showcasecaptiontitlecolor',    $_POST['showcasecaptiontitlecolor']);
		update_option('mytheme_showcasecaptiontitleshadowcolor',    $_POST['showcasecaptiontitleshadowcolor']);
		update_option('mytheme_showcasecaptiontextcolor',    $_POST['showcasecaptiontextcolor']);
		update_option('mytheme_showcasecaptiontextshadowcolor',    $_POST['showcasecaptiontextshadowcolor']);
		update_option('mytheme_showcasecaptiontextalign',    $_POST['showcasecaptiontextalign']);
		update_option('mytheme_showcasecaptionbgcolor',    $_POST['showcasecaptionbgcolor']);
		update_option('mytheme_showcasecaptionbgimage',    $_POST['showcasecaptionbgimage']);
		update_option('mytheme_showcasecaptionopacity',    $_POST['showcasecaptionopacity']);
		
		update_option('mytheme_showcaseauto',    $_POST['showcaseauto']);
		update_option('mytheme_showcaseinterval',    $_POST['showcaseinterval']);
		update_option('mytheme_showcasepauseonhover',    $_POST['showcasepauseonhover']);
		update_option('mytheme_showcasekeyboardnav',    $_POST['showcasekeyboardnav']);
		update_option('mytheme_showcasebgcolor',    $_POST['showcasebgcolor']);
		update_option('mytheme_showcasetopmargin',    $_POST['showcasetopmargin']);
		update_option('mytheme_showcasebottommargin',    $_POST['showcasebottommargin']);
		
		
		update_option('mytheme_cycleeffect',    $_POST['cycleeffect']);
		update_option('mytheme_cyclesync',    $_POST['cyclesync']);
		update_option('mytheme_cycleanimspeed',    $_POST['cycleanimspeed']);
		update_option('mytheme_cycletimeout',    $_POST['cycletimeout']);
		update_option('mytheme_cycleease',    $_POST['cycleease']);
		update_option('mytheme_cyclecaptionanimation',    $_POST['cyclecaptionanimation']);
		
		update_option('mytheme_cyclecaptiononoff',    $_POST['cyclecaptiononoff']);
		update_option('mytheme_cyclecaptiontop',    $_POST['cyclecaptiontop']);
		update_option('mytheme_cyclecaptionbottom',    $_POST['cyclecaptionbottom']);
		update_option('mytheme_cyclecaptionleft',    $_POST['cyclecaptionleft']);
		update_option('mytheme_cyclecaptionright',    $_POST['cyclecaptionright']);
		update_option('mytheme_cyclecaptionwidth',    $_POST['cyclecaptionwidth']);
		update_option('mytheme_cyclecaptionheight',    $_POST['cyclecaptionheight']);
		update_option('mytheme_cyclecaptionradius',    $_POST['cyclecaptionradius']);
		update_option('mytheme_cyclecaptionpadding',    $_POST['cyclecaptionpadding']);
		update_option('mytheme_cyclecaptiontitlecolor',    $_POST['cyclecaptiontitlecolor']);
		update_option('mytheme_cyclecaptiontitleshadowcolor',    $_POST['cyclecaptiontitleshadowcolor']);
		update_option('mytheme_cyclecaptiontextcolor',    $_POST['cyclecaptiontextcolor']);
		update_option('mytheme_cyclecaptiontextshadowcolor',    $_POST['cyclecaptiontextshadowcolor']);
		update_option('mytheme_cyclecaptiontextalign',    $_POST['cyclecaptiontextalign']);
		update_option('mytheme_cyclecaptionbgcolor',    $_POST['cyclecaptionbgcolor']);
		update_option('mytheme_cyclecaptionbgimage',    $_POST['cyclecaptionbgimage']);
		update_option('mytheme_cyclecaptionopacity',    $_POST['cyclecaptionopacity']);
		
		update_option('mytheme_cyclepauseonhover',    $_POST['cyclepauseonhover']);
		update_option('mytheme_cyclerandom',    $_POST['cyclerandom']);
		update_option('mytheme_cycledirectiononoff',    $_POST['cycledirectiononoff']);
		update_option('mytheme_cyclebgcolor',    $_POST['cyclebgcolor']);
		update_option('mytheme_cycletopmargin',    $_POST['cycletopmargin']);
		update_option('mytheme_cyclebottommargin',    $_POST['cyclebottommargin']);
		
		
		update_option('mytheme_roundaboutshape',    $_POST['roundaboutshape']);
		update_option('mytheme_roundaboutease',    $_POST['roundaboutease']);
		update_option('mytheme_roundaboutduration',    $_POST['roundaboutduration']);
		update_option('mytheme_roundaboutautoduration',    $_POST['roundaboutautoduration']);
		
		update_option('mytheme_roundaboutcaptiononoff',    $_POST['roundaboutcaptiononoff']);
		update_option('mytheme_roundaboutcaptiontop',    $_POST['roundaboutcaptiontop']);
		update_option('mytheme_roundaboutcaptionbottom',    $_POST['roundaboutcaptionbottom']);
		update_option('mytheme_roundaboutcaptionleft',    $_POST['roundaboutcaptionleft']);
		update_option('mytheme_roundaboutcaptionright',    $_POST['roundaboutcaptionright']);
		update_option('mytheme_roundaboutcaptionwidth',    $_POST['roundaboutcaptionwidth']);
		update_option('mytheme_roundaboutcaptionheight',    $_POST['roundaboutcaptionheight']);
		update_option('mytheme_roundaboutcaptionradius',    $_POST['roundaboutcaptionradius']);
		update_option('mytheme_roundaboutcaptionpadding',    $_POST['roundaboutcaptionpadding']);
		update_option('mytheme_roundaboutcaptiontitlecolor',    $_POST['roundaboutcaptiontitlecolor']);
		update_option('mytheme_roundaboutcaptiontitleshadowcolor',    $_POST['roundaboutcaptiontitleshadowcolor']);
		update_option('mytheme_roundaboutcaptiontextcolor',    $_POST['roundaboutcaptiontextcolor']);
		update_option('mytheme_roundaboutcaptiontextshadowcolor',    $_POST['roundaboutcaptiontextshadowcolor']);
		update_option('mytheme_roundaboutcaptiontextalign',    $_POST['roundaboutcaptiontextalign']);
		update_option('mytheme_roundaboutcaptionbgcolor',    $_POST['roundaboutcaptionbgcolor']);
		update_option('mytheme_roundaboutcaptionbgimage',    $_POST['roundaboutcaptionbgimage']);
		update_option('mytheme_roundaboutcaptionopacity',    $_POST['roundaboutcaptionopacity']);
		update_option('mytheme_roundaboutcaptionontop',    $_POST['roundaboutcaptionontop']);
		
		update_option('mytheme_roundaboutdirectiononoff',    $_POST['roundaboutdirectiononoff']);
		update_option('mytheme_roundaboutautoplay',    $_POST['roundaboutautoplay']);
		update_option('mytheme_roundaboutreflect',    $_POST['roundaboutreflect']);
		update_option('mytheme_roundaboutpauseonhover',    $_POST['roundaboutpauseonhover']);
		update_option('mytheme_roundaboutminopacity',    $_POST['roundaboutminopacity']);
		update_option('mytheme_roundaboutminscale',    $_POST['roundaboutminscale']);
		update_option('mytheme_roundaboutmaxscale',    $_POST['roundaboutmaxscale']);
		update_option('mytheme_roundaboutbordercolor',    $_POST['roundaboutbordercolor']);
		update_option('mytheme_roundabouttopmargin',    $_POST['roundabouttopmargin']);
		update_option('mytheme_roundaboutbottommargin',    $_POST['roundaboutbottommargin']);
		
		
		update_option('mytheme_liteaccordionease',    $_POST['liteaccordionease']);
		update_option('mytheme_liteaccordionslidespeed',    $_POST['liteaccordionslidespeed']);
		update_option('mytheme_liteaccordioncyclespeed',    $_POST['liteaccordioncyclespeed']);
		
		update_option('mytheme_liteaccordioncaptiononoff',    $_POST['liteaccordioncaptiononoff']);
		update_option('mytheme_liteaccordioncaptiontop',    $_POST['liteaccordioncaptiontop']);
		update_option('mytheme_liteaccordioncaptionbottom',    $_POST['liteaccordioncaptionbottom']);
		update_option('mytheme_liteaccordioncaptionleft',    $_POST['liteaccordioncaptionleft']);
		update_option('mytheme_liteaccordioncaptionright',    $_POST['liteaccordioncaptionright']);
		update_option('mytheme_liteaccordioncaptionwidth',    $_POST['liteaccordioncaptionwidth']);
		update_option('mytheme_liteaccordioncaptionheight',    $_POST['liteaccordioncaptionheight']);
		update_option('mytheme_liteaccordioncaptionradius',    $_POST['liteaccordioncaptionradius']);
		update_option('mytheme_liteaccordioncaptionpadding',    $_POST['liteaccordioncaptionpadding']);
		update_option('mytheme_liteaccordioncaptiontitlecolor',    $_POST['liteaccordioncaptiontitlecolor']);
		update_option('mytheme_liteaccordioncaptiontitleshadowcolor',    $_POST['liteaccordioncaptiontitleshadowcolor']);
		update_option('mytheme_liteaccordioncaptiontextcolor',    $_POST['liteaccordioncaptiontextcolor']);
		update_option('mytheme_liteaccordioncaptiontextshadowcolor',    $_POST['liteaccordioncaptiontextshadowcolor']);
		update_option('mytheme_liteaccordioncaptiontextalign',    $_POST['liteaccordioncaptiontextalign']);
		update_option('mytheme_liteaccordioncaptionbgcolor',    $_POST['liteaccordioncaptionbgcolor']);
		update_option('mytheme_liteaccordioncaptionbgimage',    $_POST['liteaccordioncaptionbgimage']);
		update_option('mytheme_liteaccordioncaptionopacity',    $_POST['liteaccordioncaptionopacity']);
		
		update_option('mytheme_liteaccordionbgcolor',    $_POST['liteaccordionbgcolor']);
		update_option('mytheme_liteaccordionnamecolor',    $_POST['liteaccordionnamecolor']);
		update_option('mytheme_liteaccordionactivenamecolor',    $_POST['liteaccordionactivenamecolor']);
		update_option('mytheme_liteaccordionnumbercolor',    $_POST['liteaccordionnumbercolor']);
		update_option('mytheme_liteaccordionactivenumbercolor',    $_POST['liteaccordionactivenumbercolor']);
		update_option('mytheme_liteaccordionbordercolor',    $_POST['liteaccordionbordercolor']);
		update_option('mytheme_liteaccordionactivebordercolor',    $_POST['liteaccordionactivebordercolor']);
		
		update_option('mytheme_liteaccordionautoplay',    $_POST['liteaccordionautoplay']);
		update_option('mytheme_liteaccordionactivateon',    $_POST['liteaccordionactivateon']);
		update_option('mytheme_liteaccordionpauseonhover',    $_POST['liteaccordionpauseonhover']);
		update_option('mytheme_liteaccordionactiveslide',    $_POST['liteaccordionactiveslide']);
		update_option('mytheme_liteaccordionrounded',    $_POST['liteaccordionrounded']);
		update_option('mytheme_liteaccordiontopmargin',    $_POST['liteaccordiontopmargin']);
		update_option('mytheme_liteaccordionbottommargin',    $_POST['liteaccordionbottommargin']);
		
		
		update_option('mytheme_tmeffect',    $_POST['tmeffect']);
		update_option('mytheme_tmduration',    $_POST['tmduration']);
		update_option('mytheme_tmslideshow',    $_POST['tmslideshow']);
		
		update_option('mytheme_tmcaptiononoff',    $_POST['tmcaptiononoff']);
		update_option('mytheme_tmcaptiontop',    $_POST['tmcaptiontop']);
		update_option('mytheme_tmcaptionbottom',    $_POST['tmcaptionbottom']);
		update_option('mytheme_tmcaptionleft',    $_POST['tmcaptionleft']);
		update_option('mytheme_tmcaptionright',    $_POST['tmcaptionright']);
		update_option('mytheme_tmcaptionwidth',    $_POST['tmcaptionwidth']);
		update_option('mytheme_tmcaptionheight',    $_POST['tmcaptionheight']);
		update_option('mytheme_tmcaptionradius',    $_POST['tmcaptionradius']);
		update_option('mytheme_tmcaptionpadding',    $_POST['tmcaptionpadding']);
		update_option('mytheme_tmcaptiontitlecolor',    $_POST['tmcaptiontitlecolor']);
		update_option('mytheme_tmcaptiontitleshadowcolor',    $_POST['tmcaptiontitleshadowcolor']);
		update_option('mytheme_tmcaptiontextcolor',    $_POST['tmcaptiontextcolor']);
		update_option('mytheme_tmcaptiontextshadowcolor',    $_POST['tmcaptiontextshadowcolor']);
		update_option('mytheme_tmcaptiontextalign',    $_POST['tmcaptiontextalign']);
		update_option('mytheme_tmcaptionbgcolor',    $_POST['tmcaptionbgcolor']);
		update_option('mytheme_tmcaptionbgimage',    $_POST['tmcaptionbgimage']);
		update_option('mytheme_tmcaptionopacity',    $_POST['tmcaptionopacity']);
		update_option('mytheme_tmcaptiononbottom',    $_POST['tmcaptiononbottom']);
		
		update_option('mytheme_tmdirectiononoff',    $_POST['tmdirectiononoff']);
		update_option('mytheme_tmpauseonhover',    $_POST['tmpauseonhover']);
		update_option('mytheme_tmwidth',    $_POST['tmwidth']);
		update_option('mytheme_tmshow',    $_POST['tmshow']);
		update_option('mytheme_tmbgcolor',    $_POST['tmbgcolor']);
		update_option('mytheme_tmtopmargin',    $_POST['tmtopmargin']);
		update_option('mytheme_tmbottommargin',    $_POST['tmbottommargin']);
		
		
		update_option('mytheme_bgstretchereffect',    $_POST['bgstretchereffect']);
		update_option('mytheme_bgstretcherslidedirection',    $_POST['bgstretcherslidedirection']);
		update_option('mytheme_bgstretcherspeed',    $_POST['bgstretcherspeed']);
		update_option('mytheme_bgstretcherdelay',    $_POST['bgstretcherdelay']);
		update_option('mytheme_bgstretcherwidth',    $_POST['bgstretcherwidth']);
		update_option('mytheme_bgstretcherheight',    $_POST['bgstretcherheight']);
		update_option('mytheme_bgstretchermaxwidth',    $_POST['bgstretchermaxwidth']);
		update_option('mytheme_bgstretchermaxheight',    $_POST['bgstretchermaxheight']);
		update_option('mytheme_bgstretcherpagination',    $_POST['bgstretcherpagination']);
		update_option('mytheme_bgstretcherpaginationtop',    $_POST['bgstretcherpaginationtop']);
		update_option('mytheme_bgstretcherpaginationleft',    $_POST['bgstretcherpaginationleft']);
		update_option('mytheme_bgstretcherpaginationmargin',    $_POST['bgstretcherpaginationmargin']);
		update_option('mytheme_bgstretcherpaginationcolor',    $_POST['bgstretcherpaginationcolor']);
		update_option('mytheme_bgstretcherpaginationactivecolor',    $_POST['bgstretcherpaginationactivecolor']);
		update_option('mytheme_bgstretcherpaginationshadowcolor',    $_POST['bgstretcherpaginationshadowcolor']);
		update_option('mytheme_bgstretcherposition',    $_POST['bgstretcherposition']);
		update_option('mytheme_bgstretchermode',    $_POST['bgstretchermode']);
		update_option('mytheme_bgstretcheranchor',    $_POST['bgstretcheranchor']);
		
		
		update_option('mytheme_themeskin',    $_POST['themeskin']);
		update_option('mytheme_themestyle',    $_POST['themestyle']);
		update_option('mytheme_responsiveonoff',    $_POST['responsiveonoff']);
		update_option('mytheme_pagecommentonoff',    $_POST['pagecommentonoff']);
		update_option('mytheme_portpageonoff',    $_POST['portpageonoff']);
		update_option('mytheme_allstyleonoff',    $_POST['allstyleonoff']);
		update_option('mytheme_topheaderheight',    $_POST['topheaderheight']);
		update_option('mytheme_maintopmargin',    $_POST['maintopmargin']);
		update_option('mytheme_mainbottommargin',    $_POST['mainbottommargin']);
		update_option('mytheme_mainradius',    $_POST['mainradius']);
		update_option('mytheme_bodywrapshadowonoff',    $_POST['bodywrapshadowonoff']);
		update_option('mytheme_bodywraptopmargin',    $_POST['bodywraptopmargin']);
		update_option('mytheme_bodywrapbottommargin',    $_POST['bodywrapbottommargin']);
		
		
		update_option('mytheme_logoimage',    $_POST['logoimage']);
		update_option('mytheme_logowidth',    $_POST['logowidth']);
		update_option('mytheme_logoheight',    $_POST['logoheight']);
		update_option('mytheme_logoimageonoff',    $_POST['logoimageonoff']);
		update_option('mytheme_logomargintop',    $_POST['logomargintop']);
		update_option('mytheme_logomarginleft',    $_POST['logomarginleft']);
		update_option('mytheme_logomarginbottom',    $_POST['logomarginbottom']);
		update_option('mytheme_faviconimage',    $_POST['faviconimage']);
		update_option('mytheme_faviconimageonoff',    $_POST['faviconimageonoff']);

		
		update_option('mytheme_trackingcodeonoff',    $_POST['trackingcodeonoff']);
		update_option('mytheme_trackingcode',    $_POST['trackingcode']);
		
		update_option('mytheme_customcssonoff',    $_POST['customcssonoff']);
		update_option('mytheme_customcss',    $_POST['customcss']);
		
		
		update_option('mytheme_copyrightonoff',    $_POST['copyrightonoff']);
		update_option('mytheme_copyrightnav',    $_POST['copyrightnav']);
		update_option('mytheme_copyright',    $_POST['copyright']);
		update_option('mytheme_copyrightleft',    $_POST['copyrightleft']);
		update_option('mytheme_copyrightright',    $_POST['copyrightright']);
		update_option('mytheme_copyrightmiddle',    $_POST['copyrightmiddle']);
		
		
		update_option('mytheme_footeronoff',    $_POST['footeronoff']);
		update_option('mytheme_footerstyleonoff',    $_POST['footerstyleonoff']);
		update_option('mytheme_footerstyle',    $_POST['footerstyle']);
		
		
		update_option('mytheme_fonth',    $_POST['fonth']);
		update_option('mytheme_fontmainnav',    $_POST['fontmainnav']);
		update_option('mytheme_fonthsidebar',    $_POST['fonthsidebar']);
		update_option('mytheme_fonthfooter',    $_POST['fonthfooter']);
		update_option('mytheme_fontslogan',    $_POST['fontslogan']);
		update_option('mytheme_fontstunningtext',    $_POST['fontstunningtext']);
		update_option('mytheme_fontbody',    $_POST['fontbody']);
		
		
		update_option('mytheme_bodyfontsize',    $_POST['bodyfontsize']);
		update_option('mytheme_navfontsize',    $_POST['navfontsize']);
		update_option('mytheme_sidebarhfontsize',    $_POST['sidebarhfontsize']);
		update_option('mytheme_footerhfontsize',    $_POST['footerhfontsize']);
		update_option('mytheme_widgethfontsize',    $_POST['widgethfontsize']);
		update_option('mytheme_sloganfontsize',    $_POST['sloganfontsize']);
		update_option('mytheme_stunningtextfontsize',    $_POST['stunningtextfontsize']);
		update_option('mytheme_fontsizeh1',    $_POST['fontsizeh1']);
		update_option('mytheme_fontsizeh2',    $_POST['fontsizeh2']);
		update_option('mytheme_fontsizeh3',    $_POST['fontsizeh3']);
		update_option('mytheme_fontsizeh4',    $_POST['fontsizeh4']);
		update_option('mytheme_fontsizeh5',    $_POST['fontsizeh5']);
		update_option('mytheme_fontsizeh6',    $_POST['fontsizeh6']);
		
		
		update_option('mytheme_fontaddvalues',    $_POST['fontaddvalues']);
	
	
		update_option('mytheme_facebookshare',    $_POST['facebookshare']);
		update_option('mytheme_twittershare',    $_POST['twittershare']);
		update_option('mytheme_googleshare',    $_POST['googleshare']);
		update_option('mytheme_stumbleuponshare',    $_POST['stumbleuponshare']);
		update_option('mytheme_myspaceshare',    $_POST['myspaceshare']);
		update_option('mytheme_deliciousshare',    $_POST['deliciousshare']);
		update_option('mytheme_diggshare',    $_POST['diggshare']);
		update_option('mytheme_redditshare',    $_POST['redditshare']);
		update_option('mytheme_linkedinshare',    $_POST['linkedinshare']);
		
		
		update_option('mytheme_socialclass',    $_POST['socialclass']);
		update_option('mytheme_deliciousnetwork',    $_POST['deliciousnetwork']);
		update_option('mytheme_deviantartnetwork',    $_POST['deviantartnetwork']);
		update_option('mytheme_diggnetwork',    $_POST['diggnetwork']);
		update_option('mytheme_facebooknetwork',    $_POST['facebooknetwork']);
		update_option('mytheme_flickrnetwork',    $_POST['flickrnetwork']);
		update_option('mytheme_googlenetwork',    $_POST['googlenetwork']);
		update_option('mytheme_lastfmnetwork',    $_POST['lastfmnetwork']);
		update_option('mytheme_linkedinnetwork',    $_POST['linkedinnetwork']);
		update_option('mytheme_picasanetwork',    $_POST['picasanetwork']);
		update_option('mytheme_rssnetwork',    $_POST['rssnetwork']);
		update_option('mytheme_stumbleuponnetwork',    $_POST['stumbleuponnetwork']);
		update_option('mytheme_tumblrnetwork',    $_POST['tumblrnetwork']);
		update_option('mytheme_twitternetwork',    $_POST['twitternetwork']);
		update_option('mytheme_vimeonetwork',    $_POST['vimeonetwork']);
		update_option('mytheme_youtubenetwork',    $_POST['youtubenetwork']);
		
		
		update_option('mytheme_bodyimage',    $_POST['bodyimage']);
		update_option('mytheme_bodyimageonoff',    $_POST['bodyimageonoff']);
		update_option('mytheme_bodyimagefix',    $_POST['bodyimagefix']);
		update_option('mytheme_bodyimageleft',    $_POST['bodyimageleft']);
		update_option('mytheme_bodyimagetop',    $_POST['bodyimagetop']);
		update_option('mytheme_bodyimagerepeat',    $_POST['bodyimagerepeat']);
		update_option('mytheme_bodypattern',    $_POST['bodypattern']);
		update_option('mytheme_bodypatternfix',    $_POST['bodypatternfix']);
		
		
		update_option('mytheme_mainnavheightonoff',    $_POST['mainnavheightonoff']);
		update_option('mytheme_mainnavdelay',    $_POST['mainnavdelay']);
		update_option('mytheme_mainnavspeed',    $_POST['mainnavspeed']);
		update_option('mytheme_mainnavarrowonoff',    $_POST['mainnavarrowonoff']);
		update_option('mytheme_mainnavmenudivideronoff',    $_POST['mainnavmenudivideronoff']);
		update_option('mytheme_mainnavsupersubsmaxwidth',    $_POST['mainnavsupersubsmaxwidth']);
		update_option('mytheme_mainnavborderradius',    $_POST['mainnavborderradius']);
		update_option('mytheme_mainnavsubmenuradius',    $_POST['mainnavsubmenuradius']);
		update_option('mytheme_mainnavsubmenuitemradius',    $_POST['mainnavsubmenuitemradius']);
		
		
		update_option('mytheme_bodytextcolor',    $_POST['bodytextcolor']);
		update_option('mytheme_bodytextshadowcolor',    $_POST['bodytextshadowcolor']);
		update_option('mytheme_bodylinkcolor',    $_POST['bodylinkcolor']);
		update_option('mytheme_bodylinkhovercolor',    $_POST['bodylinkhovercolor']);
		update_option('mytheme_bodybgcolor',    $_POST['bodybgcolor']);
		update_option('mytheme_bodyhcolor',    $_POST['bodyhcolor']);
		update_option('mytheme_bodyhshadowcolor',    $_POST['bodyhshadowcolor']);
		update_option('mytheme_bodyhhovercolor',    $_POST['bodyhhovercolor']);
		update_option('mytheme_bodyhlinecolor',    $_POST['bodyhlinecolor']);
		update_option('mytheme_headerwrappercolor',    $_POST['headerwrappercolor']);
		update_option('mytheme_contentwrappercolor',    $_POST['contentwrappercolor']);
		update_option('mytheme_footerwrappercolor',    $_POST['footerwrappercolor']);
		
		update_option('mytheme_themebuttontextcolor',    $_POST['themebuttontextcolor']);
		update_option('mytheme_themebuttonbgcolor',    $_POST['themebuttonbgcolor']);
		update_option('mytheme_themebuttontexthovercolor',    $_POST['themebuttontexthovercolor']);
		update_option('mytheme_themebuttonbghovercolor',    $_POST['themebuttonbghovercolor']);
		
		update_option('mytheme_highlightcolor',    $_POST['highlightcolor']);
		update_option('mytheme_highlightbgcolor',    $_POST['highlightbgcolor']);
		
		
		update_option('mytheme_topbarbgcolor',    $_POST['topbarbgcolor']);
		update_option('mytheme_topbarcolor',    $_POST['topbarcolor']);
		update_option('mytheme_topbarshadowcolor',    $_POST['topbarshadowcolor']);
		update_option('mytheme_topbarlinkcolor',    $_POST['topbarlinkcolor']);
		
		
		update_option('mytheme_socialiconcolor',    $_POST['socialiconcolor']);
		update_option('mytheme_socialiconhovercolor',    $_POST['socialiconhovercolor']);
		update_option('mytheme_socialnetworkbgcolor',    $_POST['socialnetworkbgcolor']);
		
		
		update_option('mytheme_mainnavtextcolor',    $_POST['mainnavtextcolor']);
		update_option('mytheme_mainnavtexthovercolor',    $_POST['mainnavtexthovercolor']);
		update_option('mytheme_mainnavtextcurrentcolor',    $_POST['mainnavtextcurrentcolor']);
		update_option('mytheme_mainnavtextshadowcolor',    $_POST['mainnavtextshadowcolor']);
		update_option('mytheme_mainnavbgcolor',    $_POST['mainnavbgcolor']);
		update_option('mytheme_mainnavwrapbgcolor',    $_POST['mainnavwrapbgcolor']);
		update_option('mytheme_mainnavmenucolor',    $_POST['mainnavmenucolor']);
		update_option('mytheme_mainnavmenuhovercolor',    $_POST['mainnavmenuhovercolor']);
		update_option('mytheme_mainnavmenucurrentcolor',    $_POST['mainnavmenucurrentcolor']);
		update_option('mytheme_mainnavmenubordercolor',    $_POST['mainnavmenubordercolor']);
		update_option('mytheme_mainnavsubmenucolor',    $_POST['mainnavsubmenucolor']);
		update_option('mytheme_mainnavsubmenutextcolor',    $_POST['mainnavsubmenutextcolor']);
		update_option('mytheme_mainnavsubmenutexthovercolor',    $_POST['mainnavsubmenutexthovercolor']);
		update_option('mytheme_mainnavsubmenushadowcolor',    $_POST['mainnavsubmenushadowcolor']);
		update_option('mytheme_mainnavsubmenuitemcolor',    $_POST['mainnavsubmenuitemcolor']);
		
		
		update_option('mytheme_topsearchcolor',    $_POST['topsearchcolor']);
		update_option('mytheme_topsearchbgcolor',    $_POST['topsearchbgcolor']);
		
		
		update_option('mytheme_slogancolor',    $_POST['slogancolor']);
		update_option('mytheme_sloganshadowcolor',    $_POST['sloganshadowcolor']);
		update_option('mytheme_sloganbgcolor',    $_POST['sloganbgcolor']);
		
		
		update_option('mytheme_breadcrumbcolor',    $_POST['breadcrumbcolor']);
		update_option('mytheme_breadcrumbshadowcolor',    $_POST['breadcrumbshadowcolor']);
		update_option('mytheme_breadcrumblinkcolor',    $_POST['breadcrumblinkcolor']);
		update_option('mytheme_breadcrumbbgcolor',    $_POST['breadcrumbbgcolor']);
		update_option('mytheme_breadcrumbbordercolor',    $_POST['breadcrumbbordercolor']);
		
		
		update_option('mytheme_heading404color',    $_POST['heading404color']);
		update_option('mytheme_text404color',    $_POST['text404color']);
		update_option('mytheme_text404shadowcolor',    $_POST['text404shadowcolor']);
		update_option('mytheme_search404textcolor',    $_POST['search404textcolor']);
		update_option('mytheme_search404bgcolor',    $_POST['search404bgcolor']);
		update_option('mytheme_search404iconbgcolor',    $_POST['search404iconbgcolor']);
		update_option('mytheme_search404bordercolor',    $_POST['search404bordercolor']);
		
		
		update_option('mytheme_backtotopbgcolor',    $_POST['backtotopbgcolor']);
		update_option('mytheme_backtotopbordercolor',    $_POST['backtotopbordercolor']);
		update_option('mytheme_backtotoparrowcolor',    $_POST['backtotoparrowcolor']);
		
		
		update_option('mytheme_sidebarbgcolor',    $_POST['sidebarbgcolor']);
		update_option('mytheme_sidebaraddvalues',    $_POST['sidebaraddvalues']);
		update_option('mytheme_sidebarrightborderradius',    $_POST['sidebarrightborderradius']);
		update_option('mytheme_sidebarleftborderradius',    $_POST['sidebarleftborderradius']);
		update_option('mytheme_sidebardivideronoff',    $_POST['sidebardivideronoff']);
		update_option('mytheme_sidebartextcolor',    $_POST['sidebartextcolor']);
		update_option('mytheme_sidebartextshadowcolor',    $_POST['sidebartextshadowcolor']);
		update_option('mytheme_sidebarlinkcolor',    $_POST['sidebarlinkcolor']);
		update_option('mytheme_sidebarlinkhovercolor',    $_POST['sidebarlinkhovercolor']);
		update_option('mytheme_sidebarhcolor',    $_POST['sidebarhcolor']);
		update_option('mytheme_sidebarhshadowcolor',    $_POST['sidebarhshadowcolor']);
		update_option('mytheme_sidebarhbgcolor',    $_POST['sidebarhbgcolor']);
		update_option('mytheme_sidebarhtopbordercolor',    $_POST['sidebarhtopbordercolor']);
		update_option('mytheme_sidebarhbottombordercolor',    $_POST['sidebarhbottombordercolor']);
		update_option('mytheme_sidebarbordercolor',    $_POST['sidebarbordercolor']);
		update_option('mytheme_sidebardividercolor',    $_POST['sidebardividercolor']);
		update_option('mytheme_sidebarheadingcolor',    $_POST['sidebarheadingcolor']);
		update_option('mytheme_sidebarheadinghovercolor',    $_POST['sidebarheadinghovercolor']);
		update_option('mytheme_sidebarrecentpostdatecolor',    $_POST['sidebarrecentpostdatecolor']);
		update_option('mytheme_sidebarrecentportdatecolor',    $_POST['sidebarrecentportdatecolor']);
		update_option('mytheme_sidebarrecentcommentcolor',    $_POST['sidebarrecentcommentcolor']);
		update_option('mytheme_sidebardateauthorbgcolor',    $_POST['sidebardateauthorbgcolor']);
		update_option('mytheme_sidebarframebgcolor',    $_POST['sidebarframebgcolor']);
		update_option('mytheme_sidebarframeshadowcolor',    $_POST['sidebarframeshadowcolor']);
		update_option('mytheme_sidebarrecentpostcolor',    $_POST['sidebarrecentpostcolor']);
		update_option('mytheme_sidebarrecentpostbgcolor',    $_POST['sidebarrecentpostbgcolor']);
		update_option('mytheme_sidebarcalendarcolor',    $_POST['sidebarcalendarcolor']);
		update_option('mytheme_sidebartestimonialtextcolor',    $_POST['sidebartestimonialtextcolor']);
		update_option('mytheme_sidebartestimonialbgcolor',    $_POST['sidebartestimonialbgcolor']);
		update_option('mytheme_sidebartestimonialnavcolor',    $_POST['sidebartestimonialnavcolor']);
		update_option('mytheme_sidebartestimonialimagebgcolor',    $_POST['sidebartestimonialimagebgcolor']);
		update_option('mytheme_sidebartwittertextcolor',    $_POST['sidebartwittertextcolor']);
		update_option('mytheme_sidebartwitterbgcolor',    $_POST['sidebartwitterbgcolor']);
		update_option('mytheme_sidebartwitterlinkcolor',    $_POST['sidebartwitterlinkcolor']);
		update_option('mytheme_sidebarflickrbgcolor',    $_POST['sidebarflickrbgcolor']);
		update_option('mytheme_sidebartagcolor',    $_POST['sidebartagcolor']);
		update_option('mytheme_sidebartagbgcolor',    $_POST['sidebartagbgcolor']);
		update_option('mytheme_sidebartagbordercolor',    $_POST['sidebartagbordercolor']);
		update_option('mytheme_sidebarsearchtextcolor',    $_POST['sidebarsearchtextcolor']);
		update_option('mytheme_sidebarsearchbgcolor',    $_POST['sidebarsearchbgcolor']);
		update_option('mytheme_sidebarsearchiconbgcolor',    $_POST['sidebarsearchiconbgcolor']);
		update_option('mytheme_sidebarsearchbordercolor',    $_POST['sidebarsearchbordercolor']);
		update_option('mytheme_sidebarwidgetformtextcolor',    $_POST['sidebarwidgetformtextcolor']);
		update_option('mytheme_sidebarwidgetformbgcolor',    $_POST['sidebarwidgetformbgcolor']);
		update_option('mytheme_sidebarwidgetformbordercolor',    $_POST['sidebarwidgetformbordercolor']);
		update_option('mytheme_sidebarwidgetformshadowcolor',    $_POST['sidebarwidgetformshadowcolor']);
		update_option('mytheme_sidebarwidgetformbuttontextcolor',    $_POST['sidebarwidgetformbuttontextcolor']);
		update_option('mytheme_sidebarwidgetformbuttonbgcolor',    $_POST['sidebarwidgetformbuttonbgcolor']);
		
		
		update_option('mytheme_footerbgcolor',    $_POST['footerbgcolor']);
		update_option('mytheme_footertextcolor',    $_POST['footertextcolor']);
		update_option('mytheme_footertextshadowcolor',    $_POST['footertextshadowcolor']);
		update_option('mytheme_footerlinkcolor',    $_POST['footerlinkcolor']);
		update_option('mytheme_footerlinkhovercolor',    $_POST['footerlinkhovercolor']);
		update_option('mytheme_footerhcolor',    $_POST['footerhcolor']);
		update_option('mytheme_footerhshadowcolor',    $_POST['footerhshadowcolor']);
		update_option('mytheme_footerbordercolor',    $_POST['footerbordercolor']);
		update_option('mytheme_footerheadingcolor',    $_POST['footerheadingcolor']);
		update_option('mytheme_footerheadinghovercolor',    $_POST['footerheadinghovercolor']);
		update_option('mytheme_footerrecentpostdatecolor',    $_POST['footerrecentpostdatecolor']);
		update_option('mytheme_footerrecentportdatecolor',    $_POST['footerrecentportdatecolor']);
		update_option('mytheme_footerrecentcommentcolor',    $_POST['footerrecentcommentcolor']);
		update_option('mytheme_footerdateauthorbgcolor',    $_POST['footerdateauthorbgcolor']);
		update_option('mytheme_footerframebgcolor',    $_POST['footerframebgcolor']);
		update_option('mytheme_footerframeshadowcolor',    $_POST['footerframeshadowcolor']);
		update_option('mytheme_footerrecentpostcolor',    $_POST['footerrecentpostcolor']);
		update_option('mytheme_footerrecentpostbgcolor',    $_POST['footerrecentpostbgcolor']);
		update_option('mytheme_footercalendarcolor',    $_POST['footercalendarcolor']);
		update_option('mytheme_footertestimonialtextcolor',    $_POST['footertestimonialtextcolor']);
		update_option('mytheme_footertestimonialbgcolor',    $_POST['footertestimonialbgcolor']);
		update_option('mytheme_footertestimonialnavcolor',    $_POST['footertestimonialnavcolor']);
		update_option('mytheme_footertestimonialimagebgcolor',    $_POST['footertestimonialimagebgcolor']);
		update_option('mytheme_footertwittertextcolor',    $_POST['footertwittertextcolor']);
		update_option('mytheme_footertwitterbgcolor',    $_POST['footertwitterbgcolor']);
		update_option('mytheme_footertwitterlinkcolor',    $_POST['footertwitterlinkcolor']);
		update_option('mytheme_footerflickrbgcolor',    $_POST['footerflickrbgcolor']);
		update_option('mytheme_footertagcolor',    $_POST['footertagcolor']);
		update_option('mytheme_footertagbgcolor',    $_POST['footertagbgcolor']);
		update_option('mytheme_footertagbordercolor',    $_POST['footertagbordercolor']);
		update_option('mytheme_footersearchtextcolor',    $_POST['footersearchtextcolor']);
		update_option('mytheme_footersearchbgcolor',    $_POST['footersearchbgcolor']);
		update_option('mytheme_footersearchiconbgcolor',    $_POST['footersearchiconbgcolor']);
		update_option('mytheme_footersearchbordercolor',    $_POST['footersearchbordercolor']);
		update_option('mytheme_footerwidgetformtextcolor',    $_POST['footerwidgetformtextcolor']);
		update_option('mytheme_footerwidgetformbgcolor',    $_POST['footerwidgetformbgcolor']);
		update_option('mytheme_footerwidgetformbordercolor',    $_POST['footerwidgetformbordercolor']);
		update_option('mytheme_footerwidgetformshadowcolor',    $_POST['footerwidgetformshadowcolor']);
		update_option('mytheme_footerwidgetformbuttontextcolor',    $_POST['footerwidgetformbuttontextcolor']);
		update_option('mytheme_footerwidgetformbuttonbgcolor',    $_POST['footerwidgetformbuttonbgcolor']);
		
		
		update_option('mytheme_footercopybgcolor',    $_POST['footercopybgcolor']);
		update_option('mytheme_footercopytextcolor',    $_POST['footercopytextcolor']);
		update_option('mytheme_footercopytextshadowcolor',    $_POST['footercopytextshadowcolor']);
		update_option('mytheme_footercopylinkcolor',    $_POST['footercopylinkcolor']);
		update_option('mytheme_footercopylinkhovercolor',    $_POST['footercopylinkhovercolor']);
		
		
		update_option('mytheme_postframebgcolor',    $_POST['postframebgcolor']);
		update_option('mytheme_postinfotextcolor',    $_POST['postinfotextcolor']);
		update_option('mytheme_postinfolinkcolor',    $_POST['postinfolinkcolor']);
		update_option('mytheme_postinfobgcolor',    $_POST['postinfobgcolor']);
		update_option('mytheme_postinfoiconcolor',    $_POST['postinfoiconcolor']);
		update_option('mytheme_postdatecolor',    $_POST['postdatecolor']);
		update_option('mytheme_postdatebgcolor',    $_POST['postdatebgcolor']);
		
		update_option('mytheme_authortextcolor',    $_POST['authortextcolor']);
		update_option('mytheme_authorhcolor',    $_POST['authorhcolor']);
		update_option('mytheme_authorlinkcolor',    $_POST['authorlinkcolor']);
		update_option('mytheme_authorbgcolor',    $_POST['authorbgcolor']);
		update_option('mytheme_authorbordercolor',    $_POST['authorbordercolor']);
		
		update_option('mytheme_oldernewertextcolor',    $_POST['oldernewertextcolor']);
		update_option('mytheme_oldernewertexthovercolor',    $_POST['oldernewertexthovercolor']);
		update_option('mytheme_oldernewerbgcolor',    $_POST['oldernewerbgcolor']);
		
		update_option('mytheme_relatedpostcolor',    $_POST['relatedpostcolor']);
		update_option('mytheme_relatedpostbgcolor',    $_POST['relatedpostbgcolor']);
		update_option('mytheme_relatedposticoncolor',    $_POST['relatedposticoncolor']);
		
		update_option('mytheme_portframebgcolor',    $_POST['portframebgcolor']);
		update_option('mytheme_portdetailstitlecolor',    $_POST['portdetailstitlecolor']);
		update_option('mytheme_portdetailsdatecolor',    $_POST['portdetailsdatecolor']);
		update_option('mytheme_portdetailsdatebgcolor',    $_POST['portdetailsdatebgcolor']);
		update_option('mytheme_portdetailsiconcolor',    $_POST['portdetailsiconcolor']);
		
		update_option('mytheme_portdefaulthcolor',    $_POST['portdefaulthcolor']);
		update_option('mytheme_portdefaultcatcolor',    $_POST['portdefaultcatcolor']);
		update_option('mytheme_portdefaulttextcolor',    $_POST['portdefaulttextcolor']);
		update_option('mytheme_portdefaultbuttontextcolor',    $_POST['portdefaultbuttontextcolor']);
		update_option('mytheme_portdefaultbuttonbgcolor',    $_POST['portdefaultbuttonbgcolor']);
		update_option('mytheme_portdefaultbgcolor',    $_POST['portdefaultbgcolor']);
		update_option('mytheme_portdefaultbordercolor',    $_POST['portdefaultbordercolor']);
		
		update_option('mytheme_portsimpledatecolor',    $_POST['portsimpledatecolor']);
		update_option('mytheme_portsimpledatebgcolor',    $_POST['portsimpledatebgcolor']);
		update_option('mytheme_portsimplecatcolor',    $_POST['portsimplecatcolor']);
		update_option('mytheme_portsimplebuttontextcolor',    $_POST['portsimplebuttontextcolor']);
		update_option('mytheme_portsimplebuttonbgcolor',    $_POST['portsimplebuttonbgcolor']);
		
		update_option('mytheme_portstyleshcolor',    $_POST['portstyleshcolor']);
		update_option('mytheme_portstyleshbgcolor',    $_POST['portstyleshbgcolor']);
		update_option('mytheme_portstylescatcolor',    $_POST['portstylescatcolor']);
		update_option('mytheme_portstylestextcolor',    $_POST['portstylestextcolor']);
		update_option('mytheme_portstylestextbgcolor',    $_POST['portstylestextbgcolor']);
		update_option('mytheme_portstylesbuttontextcolor',    $_POST['portstylesbuttontextcolor']);
		update_option('mytheme_portstylesbuttonbgcolor',    $_POST['portstylesbuttonbgcolor']);
		
		update_option('mytheme_portgalleryhcolor',    $_POST['portgalleryhcolor']);
		update_option('mytheme_portgalleryhshadowcolor',    $_POST['portgalleryhshadowcolor']);
		update_option('mytheme_portgallerybgcolor',    $_POST['portgallerybgcolor']);
		update_option('mytheme_portgalleryiconcolor',    $_POST['portgalleryiconcolor']);
		update_option('mytheme_portgalleryiconhovercolor',    $_POST['portgalleryiconhovercolor']);
		update_option('mytheme_portgalleryiconshadowcolor',    $_POST['portgalleryiconshadowcolor']);
		update_option('mytheme_portgallerycatcolor',    $_POST['portgallerycatcolor']);
		update_option('mytheme_portgallerycatbgcolor',    $_POST['portgallerycatbgcolor']);
		
		update_option('mytheme_portgallerybhcolor',    $_POST['portgallerybhcolor']);
		update_option('mytheme_portgallerybhshadowcolor',    $_POST['portgallerybhshadowcolor']);
		update_option('mytheme_portgallerybbgcolor',    $_POST['portgallerybbgcolor']);
		update_option('mytheme_portgallerybiconcolor',    $_POST['portgallerybiconcolor']);
		update_option('mytheme_portgallerybiconhovercolor',    $_POST['portgallerybiconhovercolor']);
		update_option('mytheme_portgallerybiconshadowcolor',    $_POST['portgallerybiconshadowcolor']);
		update_option('mytheme_portgallerybcatcolor',    $_POST['portgallerybcatcolor']);
		update_option('mytheme_portgallerybbordercolor',    $_POST['portgallerybbordercolor']);
		
		
		update_option('mytheme_portfiltertextcolor',    $_POST['portfiltertextcolor']);
		update_option('mytheme_portfilteractivetextcolor',    $_POST['portfilteractivetextcolor']);
		
		
		update_option('mytheme_paginationtextcolor',    $_POST['paginationtextcolor']);
		update_option('mytheme_paginationbgcolor',    $_POST['paginationbgcolor']);
		update_option('mytheme_paginationactivebgcolor',    $_POST['paginationactivebgcolor']);
		update_option('mytheme_paginationactivetextcolor',    $_POST['paginationactivetextcolor']);
		update_option('mytheme_paginationhoverbgcolor',    $_POST['paginationhoverbgcolor']);
		update_option('mytheme_paginationhovertextcolor',    $_POST['paginationhovertextcolor']);
		
		
		update_option('mytheme_contacttextcolor',    $_POST['contacttextcolor']);
		update_option('mytheme_contactbgcolor',    $_POST['contactbgcolor']);
		update_option('mytheme_contactbordercolor',    $_POST['contactbordercolor']);
		update_option('mytheme_contactshadowcolor',    $_POST['contactshadowcolor']);
		update_option('mytheme_contactbuttontextcolor',    $_POST['contactbuttontextcolor']);
		update_option('mytheme_contactbuttonbgcolor',    $_POST['contactbuttonbgcolor']);
		update_option('mytheme_commenttextcolor',    $_POST['commenttextcolor']);
		update_option('mytheme_commentlinkcolor',    $_POST['commentlinkcolor']);
		update_option('mytheme_commentbgcolor',    $_POST['commentbgcolor']);
		update_option('mytheme_commentbordercolor',    $_POST['commentbordercolor']);
		
		
		update_option('mytheme_topnavwrapperbg',    $_POST['topnavwrapperbg']);
		update_option('mytheme_topnavwrapperbgonoff',    $_POST['topnavwrapperbgonoff']);
		update_option('mytheme_topnavwrapperbgfix',    $_POST['topnavwrapperbgfix']);
		update_option('mytheme_topnavwrapperbgleft',    $_POST['topnavwrapperbgleft']);
		update_option('mytheme_topnavwrapperbgtop',    $_POST['topnavwrapperbgtop']);
		update_option('mytheme_topnavwrapperbgrepeat',    $_POST['topnavwrapperbgrepeat']);
		
		update_option('mytheme_headerbg',    $_POST['headerbg']);
		update_option('mytheme_headerbgonoff',    $_POST['headerbgonoff']);
		update_option('mytheme_headerbgfix',    $_POST['headerbgfix']);
		update_option('mytheme_headerbgleft',    $_POST['headerbgleft']);
		update_option('mytheme_headerbgtop',    $_POST['headerbgtop']);
		update_option('mytheme_headerbgrepeat',    $_POST['headerbgrepeat']);
		
		update_option('mytheme_mainnavwrapperbg',    $_POST['mainnavwrapperbg']);
		update_option('mytheme_mainnavwrapperbgonoff',    $_POST['mainnavwrapperbgonoff']);
		update_option('mytheme_mainnavwrapperbgfix',    $_POST['mainnavwrapperbgfix']);
		update_option('mytheme_mainnavwrapperbgleft',    $_POST['mainnavwrapperbgleft']);
		update_option('mytheme_mainnavwrapperbgtop',    $_POST['mainnavwrapperbgtop']);
		update_option('mytheme_mainnavwrapperbgrepeat',    $_POST['mainnavwrapperbgrepeat']);
		
		update_option('mytheme_sliderwrapperbg',    $_POST['sliderwrapperbg']);
		update_option('mytheme_sliderwrapperbgonoff',    $_POST['sliderwrapperbgonoff']);
		update_option('mytheme_sliderwrapperbgfix',    $_POST['sliderwrapperbgfix']);
		update_option('mytheme_sliderwrapperbgleft',    $_POST['sliderwrapperbgleft']);
		update_option('mytheme_sliderwrapperbgtop',    $_POST['sliderwrapperbgtop']);
		update_option('mytheme_sliderwrapperbgrepeat',    $_POST['sliderwrapperbgrepeat']);
		
		update_option('mytheme_sloganwrapperbg',    $_POST['sloganwrapperbg']);
		update_option('mytheme_sloganwrapperbgonoff',    $_POST['sloganwrapperbgonoff']);
		update_option('mytheme_sloganwrapperbgfix',    $_POST['sloganwrapperbgfix']);
		update_option('mytheme_sloganwrapperbgleft',    $_POST['sloganwrapperbgleft']);
		update_option('mytheme_sloganwrapperbgtop',    $_POST['sloganwrapperbgtop']);
		update_option('mytheme_sloganwrapperbgrepeat',    $_POST['sloganwrapperbgrepeat']);
		
		update_option('mytheme_sidebarbg',    $_POST['sidebarbg']);
		update_option('mytheme_sidebarbgonoff',    $_POST['sidebarbgonoff']);
		update_option('mytheme_sidebarbgfix',    $_POST['sidebarbgfix']);
		update_option('mytheme_sidebarbgleft',    $_POST['sidebarbgleft']);
		update_option('mytheme_sidebarbgtop',    $_POST['sidebarbgtop']);
		update_option('mytheme_sidebarbgrepeat',    $_POST['sidebarbgrepeat']);
		
		update_option('mytheme_contentbg',    $_POST['contentbg']);
		update_option('mytheme_contentbgonoff',    $_POST['contentbgonoff']);
		update_option('mytheme_contentbgfix',    $_POST['contentbgfix']);
		update_option('mytheme_contentbgleft',    $_POST['contentbgleft']);
		update_option('mytheme_contentbgtop',    $_POST['contentbgtop']);
		update_option('mytheme_contentbgrepeat',    $_POST['contentbgrepeat']);
		
		update_option('mytheme_mainbg',    $_POST['mainbg']);
		update_option('mytheme_mainbgonoff',    $_POST['mainbgonoff']);
		update_option('mytheme_mainbgfix',    $_POST['mainbgfix']);
		update_option('mytheme_mainbgleft',    $_POST['mainbgleft']);
		update_option('mytheme_mainbgtop',    $_POST['mainbgtop']);
		update_option('mytheme_mainbgrepeat',    $_POST['mainbgrepeat']);
		
		update_option('mytheme_footerwrapperbg',    $_POST['footerwrapperbg']);
		update_option('mytheme_footerwrapperbgonoff',    $_POST['footerwrapperbgonoff']);
		update_option('mytheme_footerwrapperbgfix',    $_POST['footerwrapperbgfix']);
		update_option('mytheme_footerwrapperbgleft',    $_POST['footerwrapperbgleft']);
		update_option('mytheme_footerwrapperbgtop',    $_POST['footerwrapperbgtop']);
		update_option('mytheme_footerwrapperbgrepeat',    $_POST['footerwrapperbgrepeat']);
		
		update_option('mytheme_footerwidgetwrapper',    $_POST['footerwidgetwrapper']);
		update_option('mytheme_footerwidgetwrapperonoff',    $_POST['footerwidgetwrapperonoff']);
		update_option('mytheme_footerwidgetwrapperfix',    $_POST['footerwidgetwrapperfix']);
		update_option('mytheme_footerwidgetwrapperleft',    $_POST['footerwidgetwrapperleft']);
		update_option('mytheme_footerwidgetwrappertop',    $_POST['footerwidgetwrappertop']);
		update_option('mytheme_footerwidgetwrapperrepeat',    $_POST['footerwidgetwrapperrepeat']);
		
		update_option('mytheme_footercopyrightwrapper',    $_POST['footercopyrightwrapper']);
		update_option('mytheme_footercopyrightwrapperonoff',    $_POST['footercopyrightwrapperonoff']);
		update_option('mytheme_footercopyrightwrapperfix',    $_POST['footercopyrightwrapperfix']);
		update_option('mytheme_footercopyrightwrapperleft',    $_POST['footercopyrightwrapperleft']);
		update_option('mytheme_footercopyrightwrappertop',    $_POST['footercopyrightwrappertop']);
		update_option('mytheme_footercopyrightwrapperrepeat',    $_POST['footercopyrightwrapperrepeat']);

		
		update_option('mytheme_topbaronoff',    $_POST['topbaronoff']);
		update_option('mytheme_topbarnavonoff',    $_POST['topbarnavonoff']);
		update_option('mytheme_topbartext',    $_POST['topbartext']);

		
		update_option('mytheme_topinfoonoff',    $_POST['topinfoonoff']);
		update_option('mytheme_topinfo',    $_POST['topinfo']);
		
		
		update_option('mytheme_topsearchonoff',    $_POST['topsearchonoff']);
		
		
		update_option('mytheme_sloganonoff',    $_POST['sloganonoff']);
		update_option('mytheme_slogancontrolonoff',    $_POST['slogancontrolonoff']);
		update_option('mytheme_sloganspeed',    $_POST['sloganspeed']);
		update_option('mytheme_slogan',    $_POST['slogan']);
		
		
		update_option('mytheme_breadcrumbonoff',    $_POST['breadcrumbonoff']);
		
		
		update_option('mytheme_backtotoponoff',    $_POST['backtotoponoff']);
		update_option('mytheme_backtotopside',    $_POST['backtotopside']);
		update_option('mytheme_backtotopmargin',    $_POST['backtotopmargin']);
		update_option('mytheme_backtotopbottom',    $_POST['backtotopbottom']);
		
		generate_options_css(/*$newdata*/); //generate static css file
	}
?>