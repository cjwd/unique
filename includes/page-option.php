<?php
/* Define the custom box */

add_action( 'add_meta_boxes', 'pa_add_custom_page' );

// backwards compatible (before WP 3.0)
// add_action( 'admin_init', 'pa_add_custom_page', 1 );

/* Do something with the data entered */
add_action( 'save_post', 'pa_save_pagedata' );

/* Adds a box to the main column on the Page edit screens */
function pa_add_custom_page() {
    add_meta_box( 'pa-page-option', __( 'Page Option', 'my_framework' ), 'pa_custom_page_option', 'page', 'normal', 'high');
}

/* Prints the box content */
function pa_custom_page_option( $post ) {

// Use nonce for verification
wp_nonce_field( plugin_basename( __FILE__ ), 'pa_noncename' );
?>
	
	
		<div class="custom-form">
			
				
            <span id="pageheadernav" class="pa-option">
                <a href="#pageoption-section" class="pageoptionheader general"><h2><?php _e('General Option', 'my_framework'); ?></h2></a>
                <a href="#blogpageoption-section" class="pageoptionheader"><h2><?php _e('Bolg Option', 'my_framework'); ?></h2></a>
                <a href="#portpageoption-section" class="pageoptionheader"><h2><?php _e('Portfolio Option', 'my_framework'); ?></h2></a>
                <a href="#contactpageoption-section" class="pageoptionheader"><h2><?php _e('Contact Option', 'my_framework'); ?></h2></a>
            </span>
			
			<div id="pageoption-section">
				<h2><?php _e('General Option &amp; Settings', 'my_framework'); ?></h2>
				
				<div id="pagelength" class="pa-option">
					<?php $pagelength = get_post_meta($post->ID, 'pagelength', true); ?>
					<h4><?php _e('Content wrapper width', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="pagelength1" class="normal-length"></label>
					<input type="radio" name="pagelength" id="pagelength1" value="normal" <?php if ($pagelength=='normal' || !$pagelength) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="pagelength2" class="full-length"></label>
					<input type="radio" name="pagelength" id="pagelength2" value="fullsize" <?php if ($pagelength=='fullsize') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				<!-- end of #pagelength -->
						
						
				<div id="pagesidebar" class="pa-option all-sidebar">
					<?php $pagesidebar = get_post_meta($post->ID, 'pagesidebar', true); ?>
					<h4><?php _e('Select Sidebar', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="pagesidebar1" class="sidebarright"></label>
					<input type="radio" name="pagesidebar" id="pagesidebar1" value="right" <?php if ($pagesidebar=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="pagesidebar2" class="sidebarleft"></label>
					<input type="radio" name="pagesidebar" id="pagesidebar2" value="left" <?php if ($pagesidebar=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="pagesidebar3" class="sidebarboth"></label>
					<input type="radio" name="pagesidebar" id="pagesidebar3" value="both" <?php if ($pagesidebar=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="pagesidebar4" class="sidebarno"></label>
					<input type="radio" name="pagesidebar" id="pagesidebar4" value="no" <?php if ($pagesidebar=='no' || !$pagesidebar) { echo 'checked="checked"'; } ?> />
					</div>
					
					<div class="sidebar-selection">
						<div class="sidebar-selection-right row">
						<?php $pagesidebarright = get_post_meta($post->ID, 'pagesidebarright', true); $sidebaradds = get_option('mytheme_sidebaraddvalues'); ?>
						<select name="pagesidebarright">
							<option value="sidebar-right" <?php if ($pagesidebarright=='sidebar-right') { echo 'selected="selected"'; } ?> ><?php _e('main right', 'my_framework'); ?></option>
							
							<?php $sidebaradd = explode('|', $sidebaradds); for ($i=0; $i<sizeof($sidebaradd)-1 ;$i++) { ?>
							<option value="<?php echo $sidebaradd[$i] ?>" <?php if ($pagesidebarright==$sidebaradd[$i]) { echo 'selected="selected"'; } ?>><?php echo $sidebaradd[$i] ?></option>
							<?php } ?>
							
						</select>
						<div class="description"><?php _e('<br />select custom <strong>"right sidebar"</strong> for this page.', 'my_framework'); ?></div>
						</div>
						<!-- end of #pagesidebarright -->
						
						<div class="sidebar-selection-left row">
						<?php $pagesidebarleft = get_post_meta($post->ID, 'pagesidebarleft', true); ?>
						<select name="pagesidebarleft">
							<option value="sidebar-left" <?php if ($pagesidebarleft=='sidebar-left') { echo 'selected="selected"'; } ?> ><?php _e('main left', 'my_framework'); ?></option>
							
							<?php $sidebaradd = explode('|', $sidebaradds); for ($i=0; $i<sizeof($sidebaradd)-1 ;$i++) { ?>
							<option value="<?php echo $sidebaradd[$i] ?>" <?php if ($pagesidebarleft==$sidebaradd[$i]) { echo 'selected="selected"'; } ?>><?php echo $sidebaradd[$i] ?></option>
							<?php } ?>
							
						</select>
						<div class="description"><?php _e('<br />select custom <strong>"left sidebar"</strong> for this page.', 'my_framework'); ?></div>
						</div>
						<!-- end of #pagesidebarleft -->
					</div>
					
				</div>
				<!-- end of #pagesidebar -->
				
				
				<div id="pageimage-on-off" class="pa-option">
					<div class="row">
					<h4><?php _e('Page background', 'my_framework'); ?></h4>
						<?php $pageimageonoff = get_post_meta($post->ID, 'pageimageonoff', true); ?>
						<label for="pageimageonoff" class="pageimage-onoff"></label>
						<input type="hidden" name="pageimageonoff" value="false" />
						<input type="checkbox" name="pageimageonoff" id="pageimageonoff" value="true" <?php if ($pageimageonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('show or hide your desired background.', 'my_framework'); ?></div>
					</div>
					<div class="row">
						<?php $pageimage_src = get_post_meta($post->ID, 'pageimage', true); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($pageimage_src, false, 200, 100); ?>		
						</div>
						<label for="pageimage" class="pageimage"><h4><?php _e('Upload your image', 'my_framework'); ?></h4></label>
						<input type="text" name="pageimage" id="pageimage" class="upload-text" size="" value="<?php echo get_post_meta($post->ID, 'pageimage', true); ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your image from here.<br />use the following fields respectively for set parameter:<br /><strong>"left"</strong> <strong>"top"</strong> <strong>"repeat"</strong> &amp;<strong>"fix"</strong>.', 'my_framework'); ?></div>
					<div class="row w110">
					<input type="text" name="pageimageleft" id="pageimageleft" size="4" value="<?php echo get_post_meta($post->ID, 'pageimageleft', true); ?>"/>
					</div>
					<div class="row w110">
					<input type="text" name="pageimagetop" id="pageimagetop" size="4" value="<?php echo get_post_meta($post->ID, 'pageimagetop', true); ?>"/>
					</div>
					<div class="row w110">
					<select name="pageimagerepeat">
						<?php $pageimagerepeat = get_post_meta($post->ID, 'pageimagerepeat', true); ?>
						<option value="repeat" <?php if ($pageimagerepeat=='repeat') { echo 'selected="selected"'; } ?> ><?php _e('Repeat', 'my_framework'); ?></option>
						<option value="repeat-x" <?php if ($pageimagerepeat=='repeat-x') { echo 'selected="selected"'; } ?>><?php _e('Repeat Horizontally', 'my_framework'); ?></option>
						<option value="repeat-y" <?php if ($pageimagerepeat=='repeat-y') { echo 'selected="selected"'; } ?>><?php _e('Repeat Vertically', 'my_framework'); ?></option>
						<option value="no-repeat" <?php if ($pageimagerepeat=='no-repeat') { echo 'selected="selected"'; } ?>><?php _e('No Repeat', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="row w110">
						<?php $pageimagefix = get_post_meta($post->ID, 'pageimagefix', true); ?>
						<label for="pageimagefix" class="pageimagefix"></label>
						<input type="hidden" name="pageimagefix" value="" />
						<input type="checkbox" name="pageimagefix" id="pageimagefix" value="fixed" <?php if ($pageimagefix=='fixed') { echo 'checked="checked"'; } ?> />
					</div>
				</div>
				<!-- end of #pageimage-on-off -->
				
				
				<div id="pagetitle-on-off" class="pa-option">
				<h4><?php _e('Display title', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $pagetitleonoff = get_post_meta($post->ID, 'pagetitleonoff', true); ?>
					<label for="pagetitleonoff" class="pagetitle-onoff"></label>
					<input type="hidden" name="pagetitleonoff" value="false" />
					<input type="checkbox" name="pagetitleonoff" id="pagetitleonoff" value="true" <?php if ($pagetitleonoff=='true' || !$pagetitleonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide page title.', 'my_framework'); ?></div>
				</div>
				<!-- end of #pagetitle-on-off -->
			
			
				<div id="pagecontent-on-off" class="pa-option">
				<h4><?php _e('Display content', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $pagecontentonoff = get_post_meta($post->ID, 'pagecontentonoff', true); ?>
					<label for="pagecontentonoff" class="pagecontent-onoff"></label>
					<input type="hidden" name="pagecontentonoff" value="false" />
					<input type="checkbox" name="pagecontentonoff" id="pagecontentonoff" value="true" <?php if ($pagecontentonoff=='true' || !$pagecontentonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide page content.', 'my_framework'); ?></div>
				</div>
				<!-- end of #pagecontent-on-off -->
						
								
				<div id="pageslider" class="pa-option">
					<?php $pageslider = get_post_meta($post->ID, 'pageslider', true); ?>
					<h4><?php _e('Show Slider', 'my_framework'); ?></h4>
					<div class="row">
					<select name="pageslider">
						<option value="notset" <?php if ($pageslider=='notset') { echo 'selected="selected"'; } ?> ><?php _e('not set', 'my_framework'); ?></option>
						<option value="false" <?php if ($pageslider=='false') { echo 'selected="selected"'; } ?> ><?php _e('no slider', 'my_framework'); ?></option>
						<option value="nivo" <?php if ($pageslider=='nivo') { echo 'selected="selected"'; } ?> ><?php _e('nivo slider', 'my_framework'); ?></option>
						<option value="kwicks" <?php if ($pageslider=='kwicks') { echo 'selected="selected"'; } ?> ><?php _e('kwicks slider', 'my_framework'); ?></option>
						<option value="showcase" <?php if ($pageslider=='showcase') { echo 'selected="selected"'; } ?> ><?php _e('showcase slider', 'my_framework'); ?></option>
						<option value="cycle" <?php if ($pageslider=='cycle') { echo 'selected="selected"'; } ?> ><?php _e('cycle slider', 'my_framework'); ?></option>
						<option value="roundabout" <?php if ($pageslider=='roundabout') { echo 'selected="selected"'; } ?> ><?php _e('roundabout slider', 'my_framework'); ?></option>
						<option value="liteaccordion" <?php if ($pageslider=='liteaccordion') { echo 'selected="selected"'; } ?> ><?php _e('liteaccordion slider', 'my_framework'); ?></option>
						<option value="tm" <?php if ($pageslider=='tm') { echo 'selected="selected"'; } ?> ><?php _e('tm slider', 'my_framework'); ?></option>
						<option value="bgstretcher" <?php if ($pageslider=='bgstretcher') { echo 'selected="selected"'; } ?> ><?php _e('bgstretcher slider', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />show or hide slider for this page.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $pageslidercat = get_post_meta($post->ID, 'pageslidercat', true); ?>
					<select name="pageslidercat">
						<option value="" <?php if ($pageslidercat=='') { echo 'selected="selected"'; } ?> ><?php _e('all', 'my_framework'); ?></option>
						
						<?php
						$categories = custom_type_category('slider-category');
						foreach($categories as $category) { ?>
						<option value="<?php echo $category; ?>" <?php if ($pageslidercat==$category) { echo 'selected="selected"'; } ?>><?php echo $category; ?></option>
						<?php } ?>
						
					</select>
					<div class="description"><?php _e('<br />select <strong>"slider category"</strong> to disply on slider.', 'my_framework'); ?></div>
					</div>
				</div>
				<!-- end of #pageslider -->
						
								
				<div id="pagebgtrans-on-off" class="pa-option">
					<h4><?php _e('Transparent background', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $pagebgtransonoff = get_post_meta($post->ID, 'pagebgtransonoff', true); ?>
					<label for="pagebgtransonoff" class="pagebgtrans-onoff"></label>
					<input type="hidden" name="pagebgtransonoff" value="false" />
					<input type="checkbox" name="pagebgtransonoff" id="pagebgtransonoff" value="true" <?php if ($pagebgtransonoff=='true') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('remove "background color & padding" for this page.<br />just works on "empty page".<br />usefull for create <strong>"Front Page"</strong>.', 'my_framework'); ?></div>
				</div>
				<!-- end of #pagebgtrans-on-off -->
						
								
				<div id="pageslogan-on-off" class="pa-option">
					<h4><?php _e('Page slogan status', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $pagesloganonoff = get_post_meta($post->ID, 'pagesloganonoff', true); ?>
					<label for="pagesloganonoff" class="pageslogan-onoff"></label>
					<input type="hidden" name="pagesloganonoff" value="false" />
					<input type="checkbox" name="pagesloganonoff" id="pagesloganonoff" value="true" <?php if ($pagesloganonoff=='true' || !$pagesloganonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('disable "slogan wrapper" for this page.<br />usefull for create <strong>"Front Page"</strong>.', 'my_framework'); ?></div>
				</div>
				<!-- end of #pageslogan-on-off -->
						
								
				<div id="pagebreadcrumb-on-off" class="pa-option">
					<h4><?php _e('Page breadcrumb status', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $pagebreadcrumbonoff = get_post_meta($post->ID, 'pagebreadcrumbonoff', true); ?>
					<label for="pagebreadcrumbonoff" class="pagebreadcrumb-onoff"></label>
					<input type="hidden" name="pagebreadcrumbonoff" value="false" />
					<input type="checkbox" name="pagebreadcrumbonoff" id="pagebreadcrumbonoff" value="true" <?php if ($pagebreadcrumbonoff=='true' || !$pagebreadcrumbonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('disable "breadcrumb wrapper" for this page.<br />usefull for create <strong>"Front Page"</strong>.', 'my_framework'); ?></div>
				</div>
				<!-- end of #pagebreadcrumb-on-off -->
						
								
				<div id="pagefooterstyle-on-off" class="pa-option">
					<h4><?php _e('Page footer widgets status', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $pagefooterstyleonoff = get_post_meta($post->ID, 'pagefooterstyleonoff', true); ?>
					<label for="pagefooterstyleonoff" class="pagefooterstyle-onoff"></label>
					<input type="hidden" name="pagefooterstyleonoff" value="false" />
					<input type="checkbox" name="pagefooterstyleonoff" id="pagefooterstyleonoff" value="true" <?php if ($pagefooterstyleonoff=='true' || !$pagefooterstyleonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('disable "footer widgets section" for this page.<br />usefull for create <strong>"Front Page"</strong>.', 'my_framework'); ?></div>
				</div>
				<!-- end of #pagefooterstyle-on-off -->
			
			
			</div>
			<!-- end of #pageoption-section -->
			
			
			<div id="blogpageoption-section">
				<h2><?php _e('Blog Option &amp; Settings', 'my_framework'); ?></h2>
				
				<div id="blog-style" class="pa-option">
					<?php $blogstyle = get_post_meta($post->ID, 'blogstyle', true); ?>
					<h4><?php _e('Select display style', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="blogstyle">
						<option value="full" <?php if ($blogstyle=='full') { echo 'selected="selected"'; } ?> ><?php _e('full style', 'my_framework'); ?></option>
						<option value="half" <?php if ($blogstyle=='half') { echo 'selected="selected"'; } ?>><?php _e('half style', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('<br />use desired style.', 'my_framework'); ?></div>
				</div>
				<!-- end of #blog-style -->
				
				
				<div id="blog-category" class="pa-option">
					<h4><?php _e('Category of post', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $blogcat = get_post_meta($post->ID, 'blogcat', true); ?>
					<select name="blogcat">
						<option value="" <?php if ($blogcat=='') { echo 'selected="selected"'; } ?> ><?php _e('all', 'my_framework'); ?></option>
						
						<?php
						$category_ids = get_all_category_ids();
						foreach($category_ids as $cat_id) { $cat_name = get_cat_name($cat_id); ?>
						<option value="<?php echo $cat_name; ?>" <?php if ($blogcat==$cat_name) { echo 'selected="selected"'; } ?>><?php echo $cat_name; ?></option>
						<?php } ?>
						
					</select>
					</div>
					<div class="description"><?php _e('<br />select category to disply on page.', 'my_framework'); ?></div>
				</div>
				<!-- end of #blog-category -->
						
				
				<div id="blog-numfetch" class="pa-option">
					<h4><?php _e('Blog item per page', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $blognumfetch = get_post_meta($post->ID, 'blognumfetch', true); ?>
					<input type="text" name="blognumfetch" id="blognumfetch" size="4" value="<?php echo $blognumfetch; ?>" />
					</div>
					<div class="description"><?php _e('<br />this is the number of items per page. (10 by default)', 'my_framework'); ?></div>
				</div>
				<!-- end of #blog-numfetch -->
			
			
				<div id="blogthumbtitle-on-off">
				<h4><?php _e('Display thumbnail title', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $blogthumbtitleonoff = get_post_meta($post->ID, 'blogthumbtitleonoff', true); ?>
					<label for="blogthumbtitleonoff" class="blogthumbtitle-onoff"></label>
					<input type="hidden" name="blogthumbtitleonoff" value="false" />
					<input type="checkbox" name="blogthumbtitleonoff" id="blogthumbtitleonoff" value="true" <?php if ($blogthumbtitleonoff=='true' || !$blogthumbtitleonoff) echo 'checked="checked"'; ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide thumbnail title.', 'my_framework'); ?></div>
				</div>
				<!-- end of #blogthumbtitle-on-off -->
						
				
				<div id="blog-lengthtitle" class="pa-option">
					<h4><?php _e('Length of title', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $bloglentitle = get_post_meta($post->ID, 'bloglentitle', true); ?>
					<input type="text" name="bloglentitle" id="bloglentitle" size="4" value="<?php echo $bloglentitle; ?>" />
					</div>
					<div class="description"><?php _e('number of title character for per thumbnail.<br />(44 character by default)', 'my_framework'); ?></div>
				</div>
				<!-- end of #blog-lengthtitle -->
			
			
				<div id="blogthumbexcerpt-on-off">
				<h4><?php _e('Display thumbnail excerpt', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $blogthumbexcerptonoff = get_post_meta($post->ID, 'blogthumbexcerptonoff', true); ?>
					<label for="blogthumbexcerptonoff" class="blogthumbexcerpt-onoff"></label>
					<input type="hidden" name="blogthumbexcerptonoff" value="false" />
					<input type="checkbox" name="blogthumbexcerptonoff" id="blogthumbexcerptonoff" value="true" <?php if ($blogthumbexcerptonoff=='true' || !$blogthumbexcerptonoff) echo 'checked="checked"'; ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide thumbnail excerpt.', 'my_framework'); ?></div>
				</div>
				<!-- end of #blogthumbexcerpt-on-off -->
						
				
				<div id="blog-lengthexcerpt" class="pa-option">
					<h4><?php _e('Length of excerpt', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $bloglenexcerpt = get_post_meta($post->ID, 'bloglenexcerpt', true); ?>
					<input type="text" name="bloglenexcerpt" id="bloglenexcerpt" size="4" value="<?php echo $bloglenexcerpt; ?>" />
					</div>
					<div class="description"><?php _e('<br />number of excerpt word for per thumbnail. (44 by default)', 'my_framework'); ?></div>
				</div>
				<!-- end of #blog-lengthexcerpt -->
			
			
				<div id="blogcompletecontent-on-off" class="pa-option">
				<h4><?php _e('Complete content', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $blogcompletecontentonoff = get_post_meta($post->ID, 'blogcompletecontentonoff', true); ?>
					<label for="blogcompletecontentonoff" class="blogcompletecontent-onoff"></label>
					<input type="hidden" name="blogcompletecontentonoff" value="false" />
					<input type="checkbox" name="blogcompletecontentonoff" id="blogcompletecontentonoff" value="true" <?php if ($blogcompletecontentonoff=='true') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('when it is on. content is fully used.<br />use this option for show complete content or excerpt on blog page.', 'my_framework'); ?></div>
				</div>
				<!-- end of #blogcompletecontent-on-off -->
			
			
				<div id="blogprettyphoto-on-off" class="pa-option">
				<h4><?php _e('Display prettyphoto', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $blogprettyphotoonoff = get_post_meta($post->ID, 'blogprettyphotoonoff', true); ?>
					<label for="blogprettyphotoonoff" class="bloginfotag-onoff"></label>
					<input type="hidden" name="blogprettyphotoonoff" value="false" />
					<input type="checkbox" name="blogprettyphotoonoff" id="blogprettyphotoonoff" value="true" <?php if ($blogprettyphotoonoff=='true') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for enable/disable prettyphoto.', 'my_framework'); ?></div>
				</div>
				<!-- end of #blogprettyphoto-on-off -->
			
			
				<div id="bloginfotag-on-off" class="pa-option">
				<h4><?php _e('Display tag', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $bloginfotagonoff = get_post_meta($post->ID, 'bloginfotagonoff', true); ?>
					<label for="bloginfotagonoff" class="bloginfotag-onoff"></label>
					<input type="hidden" name="bloginfotagonoff" value="false" />
					<input type="checkbox" name="bloginfotagonoff" id="bloginfotagonoff" value="true" <?php if ($bloginfotagonoff=='true' || !$bloginfotagonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide tag in meta information.', 'my_framework'); ?></div>
				</div>
				<!-- end of #bloginfotag-on-off -->
			
			
				<div id="blogcontinuelink-on-off" class="pa-option">
				<h4><?php _e('Display continue link', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $blogcontinuelinkonoff = get_post_meta($post->ID, 'blogcontinuelinkonoff', true); ?>
					<label for="blogcontinuelinkonoff" class="blogcontinuelink-onoff"></label>
					<input type="hidden" name="blogcontinuelinkonoff" value="false" />
					<input type="checkbox" name="blogcontinuelinkonoff" id="blogcontinuelinkonoff" value="true" <?php if ($blogcontinuelinkonoff=='true' || !$blogcontinuelinkonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('when it is on. link is used.<br />use this option for show or hide continue reading link.', 'my_framework'); ?></div>
				</div>
				<!-- end of #blogcontinuelink-on-off -->
			
			
				<div id="blogpagination-on-off" class="pa-option">
				<h4><?php _e('Display pagination', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $blogpaginationonoff = get_post_meta($post->ID, 'blogpaginationonoff', true); ?>
					<label for="blogpaginationonoff" class="blogpagination-onoff"></label>
					<input type="hidden" name="blogpaginationonoff" value="false" />
					<input type="checkbox" name="blogpaginationonoff" id="blogpaginationonoff" value="true" <?php if ($blogpaginationonoff=='true' || !$blogpaginationonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide pagination.', 'my_framework'); ?></div>
				</div>
				<!-- end of #blogpagination-on-off -->
			
			</div>
			<!-- end of #blogpageoption-section -->
			
			
			<div id="portpageoption-section">
				<h2><?php _e('Portfolio Option &amp; Settings', 'my_framework'); ?></h2>
				
				<div id="port-style" class="pa-option">
					<h4><?php _e('Portfolio thumbnail style', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portstyle = get_post_meta($post->ID, 'portstyle', true); ?>
					<select name="portstyle">
						<option value="default" <?php if ($portstyle=='default') { echo 'selected="selected"'; } ?> ><?php _e('default', 'my_framework'); ?></option>
						<option value="simple" <?php if ($portstyle=='simple') { echo 'selected="selected"'; } ?> ><?php _e('simple', 'my_framework'); ?></option>
						<option value="style1" <?php if ($portstyle=='style1') { echo 'selected="selected"'; } ?> ><?php _e('style 1', 'my_framework'); ?></option>
						<option value="style2" <?php if ($portstyle=='style2') { echo 'selected="selected"'; } ?> ><?php _e('style 2', 'my_framework'); ?></option>
						<option value="gallery" <?php if ($portstyle=='gallery') { echo 'selected="selected"'; } ?> ><?php _e('gallery', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('<br />select style of portfolio thumbnail.', 'my_framework'); ?></div>
				</div>
				<!-- end of #port-style -->
			
			
				<div id="portthumbdate-on-off" class="pa-option">
				<h4><?php _e('Display date', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portthumbdateonoff = get_post_meta($post->ID, 'portthumbdateonoff', true); ?>
					<label for="portthumbdateonoff" class="portthumbdate-onoff"></label>
					<input type="hidden" name="portthumbdateonoff" value="false" />
					<input type="checkbox" name="portthumbdateonoff" id="portthumbdateonoff" value="true" <?php if ($portthumbdateonoff=='true' || !$portthumbdateonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide portfolio date.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portthumbdate-on-off -->
			
			
				<div id="portstylegal-on-off" class="pa-option">
				<h4><?php _e('Display borders', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portstylegalonoff = get_post_meta($post->ID, 'portstylegalonoff', true); ?>
					<label for="portstylegalonoff" class="portstylegal-onoff"></label>
					<input type="hidden" name="portstylegalonoff" value="false" />
					<input type="checkbox" name="portstylegalonoff" id="portstylegalonoff" value="true" <?php if ($portstylegalonoff=='true') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide borders.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portstylegal-on-off -->
				
				
				<div id="port-size" class="pa-option">
					<h4><?php _e('Portfolio thumbnail size', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portsize = get_post_meta($post->ID, 'portsize', true); ?>
					<select name="portsize">
						<option value="11" <?php if ($portsize=='11') { echo 'selected="selected"'; } ?> >1/1</option>
						<option value="12" <?php if ($portsize=='12') { echo 'selected="selected"'; } ?> >1/2</option>
						<option value="13" <?php if ($portsize=='13') { echo 'selected="selected"'; } ?> >1/3</option>
						<option value="14" <?php if ($portsize=='14') { echo 'selected="selected"'; } ?> >1/4</option>
					</select>
					</div>
					<div class="description"><?php _e('<br />select size of portfolio thumbnail.', 'my_framework'); ?></div>
				</div>
				<!-- end of #port-size -->
				
				
				<div id="port-category" class="pa-option">
					<h4><?php _e('Category of portfolio', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portcat = get_post_meta($post->ID, 'portcat', true); ?>
					<select name="portcat">
						<option value="" <?php if ($portcat=='') { echo 'selected="selected"'; } ?> ><?php _e('all', 'my_framework'); ?></option>
						
						<?php
						$categories = custom_type_category('portfolio-category');
						foreach($categories as $category) { ?>
						<option value="<?php echo $category; ?>" <?php if ($portcat==$category) { echo 'selected="selected"'; } ?>><?php echo $category; ?></option>
						<?php } ?>
						
					</select>
					</div>
					<div class="description"><?php _e('<br />select category to disply on page.', 'my_framework'); ?></div>
				</div>
				<!-- end of #port-category -->
			
			
				<div id="portfilter-on-off" class="pa-option">
				<h4><?php _e('Display Filters', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portfilteronoff = get_post_meta($post->ID, 'portfilteronoff', true); ?>
					<label for="portfilteronoff" class="portfilter-onoff"></label>
					<input type="hidden" name="portfilteronoff" value="false" />
					<input type="checkbox" name="portfilteronoff" id="portfilteronoff" value="true" <?php if ($portfilteronoff=='true' || !$portfilteronoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide filter buttons.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portfilter-on-off -->
						
				
				<div id="port-numfetch" class="pa-option">
					<h4><?php _e('portfolio item per page', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portnumfetch = get_post_meta($post->ID, 'portnumfetch', true); ?>
					<input type="text" name="portnumfetch" id="portnumfetch" size="4" value="<?php echo $portnumfetch; ?>" />
					</div>
					<div class="description"><?php _e('<br />this is the number of items per page. (10 by default)', 'my_framework'); ?></div>
				</div>
				<!-- end of #port-numfetch -->
			
			
				<div id="portthumbtitle-on-off">
				<h4><?php _e('Display thumbnail title', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portthumbtitleonoff = get_post_meta($post->ID, 'portthumbtitleonoff', true); ?>
					<label for="portthumbtitleonoff" class="portthumbtitle-onoff"></label>
					<input type="hidden" name="portthumbtitleonoff" value="false" />
					<input type="checkbox" name="portthumbtitleonoff" id="portthumbtitleonoff" value="true" <?php if ($portthumbtitleonoff=='true' || !$portthumbtitleonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide thumbnail title.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portthumbtitle-on-off -->
						
				
				<div id="port-lengthtitle" class="pa-option">
					<h4><?php _e('Length of title', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portlentitle = get_post_meta($post->ID, 'portlentitle', true); ?>
					<input type="text" name="portlentitle" id="portlentitle" size="4" value="<?php echo $portlentitle; ?>" />
					</div>
					<div class="description"><?php _e('number of title character for per thumbnail.<br />(40 character by default)', 'my_framework'); ?></div>
				</div>
				<!-- end of #port-lengthtitle -->
			
			
				<div id="portthumbexcerpt-on-off">
				<h4><?php _e('Display thumbnail excerpt', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portthumbexcerptonoff = get_post_meta($post->ID, 'portthumbexcerptonoff', true); ?>
					<label for="portthumbexcerptonoff" class="portthumbexcerpt-onoff"></label>
					<input type="hidden" name="portthumbexcerptonoff" value="false" />
					<input type="checkbox" name="portthumbexcerptonoff" id="portthumbexcerptonoff" value="true" <?php if ($portthumbexcerptonoff=='true' || !$portthumbexcerptonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide thumbnail excerpt.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portthumbexcerpt-on-off -->
						
				
				<div id="port-lengthexcerpt" class="pa-option">
					<h4><?php _e('Length of excerpt', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portlenexcerpt = get_post_meta($post->ID, 'portlenexcerpt', true); ?>
					<input type="text" name="portlenexcerpt" id="portlenexcerpt" size="4" value="<?php echo $portlenexcerpt; ?>" />
					</div>
					<div class="description"><?php _e('<br />number of excerpt word for per thumbnail.', 'my_framework'); ?></div>
				</div>
				<!-- end of #port-lengthexcerpt -->
				
				<div id="port-align" class="pa-option">
					<h4><?php _e('Portfolio text align', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portalign = get_post_meta($post->ID, 'portalign', true); ?>
					<select name="portalign">
						<option value="" <?php if ($portalign=='') { echo 'selected="selected"'; } ?> ><?php _e('default', 'my_framework'); ?></option>
						<option value="left" <?php if ($portalign=='left') { echo 'selected="selected"'; } ?> ><?php _e('left', 'my_framework'); ?></option>
						<option value="center" <?php if ($portalign=='center') { echo 'selected="selected"'; } ?> ><?php _e('center', 'my_framework'); ?></option>
						<option value="right" <?php if ($portalign=='right') { echo 'selected="selected"'; } ?> ><?php _e('right', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('<br />select portfolio text align.', 'my_framework'); ?></div>
				</div>
				<!-- end of #port-align -->
			
			
				<div id="portthumbcategory-on-off" class="pa-option">
				<h4><?php _e('Display portfolio category', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portthumbcategoryonoff = get_post_meta($post->ID, 'portthumbcategoryonoff', true); ?>
					<label for="portthumbcategoryonoff" class="portthumbcategory-onoff"></label>
					<input type="hidden" name="portthumbcategoryonoff" value="false" />
					<input type="checkbox" name="portthumbcategoryonoff" id="portthumbcategoryonoff" value="true" <?php if ($portthumbcategoryonoff=='true' || !$portthumbcategoryonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide portfolio category.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portthumbcategory-on-off -->
			
			
				<div id="portmorebutton-on-off" class="pa-option">
				<h4><?php _e('Display read more button<', 'my_framework'); ?>/h4>
					<div class="row w110">
					<?php $portmorebuttononoff = get_post_meta($post->ID, 'portmorebuttononoff', true); ?>
					<label for="portmorebuttononoff" class="portmorebutton-onoff"></label>
					<input type="hidden" name="portmorebuttononoff" value="false" />
					<input type="checkbox" name="portmorebuttononoff" id="portmorebuttononoff" value="true" <?php if ($portmorebuttononoff=='true' || !$portmorebuttononoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide more button.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portmorebutton-on-off -->
			
			
				<div id="portwebbutton-on-off" class="pa-option">
				<h4><?php _e('Display website button', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portwebbuttononoff = get_post_meta($post->ID, 'portwebbuttononoff', true); ?>
					<label for="portwebbuttononoff" class="portwebbutton-onoff"></label>
					<input type="hidden" name="portwebbuttononoff" value="false" />
					<input type="checkbox" name="portwebbuttononoff" id="portwebbuttononoff" value="true" <?php if ($portwebbuttononoff=='true') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide website button.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portwebbutton-on-off -->
			
			
				<div id="portpagination-on-off" class="pa-option">
				<h4><?php _e('Display pagination', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portpaginationonoff = get_post_meta($post->ID, 'portpaginationonoff', true); ?>
					<label for="portpaginationonoff" class="portpagination-onoff"></label>
					<input type="hidden" name="portpaginationonoff" value="false" />
					<input type="checkbox" name="portpaginationonoff" id="portpaginationonoff" value="true" <?php if ($portpaginationonoff=='true' || !$portpaginationonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide pagination.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portpagination-on-off -->
			
			</div>
			<!-- end of #portpageoption-section -->
			
			
			<div id="contactpageoption-section">
				<h2><?php _e('Contact Option &amp; Settings', 'my_framework'); ?></h2>
				
				<div id="contact-email" class="pa-option">
					<h4><?php _e('Email', 'my_framework'); ?></h4>
					<div class="row w200">
					<?php $contactemail = get_post_meta($post->ID, 'contactemail', true); ?>
					<input type="text" name="contactemail" id="contactemail" size="4" class="w500" value="<?php echo $contactemail; ?>" />
					</div>
					<div class="description full"><?php _e('<br />enter your <strong>"email"</strong> for contact form destination.', 'my_framework'); ?></div>
				</div>
				<!-- end of #contact-email -->
				
				<div id="recaptcha" class="pa-option">
					<h4><?php _e('Recaptcha', 'my_framework'); ?></h4>
					<div class="row">
					<?php $recaptchaonoff = get_post_meta($post->ID, 'recaptchaonoff', true); ?>
					<label for="recaptchaonoff" class="recaptcha-onoff"></label>
					<input type="hidden" name="recaptchaonoff" value="false" />
					<input type="checkbox" name="recaptchaonoff" id="recaptchaonoff" value="true" <?php if ($recaptchaonoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('use this option for <strong>"recaptcha on/off"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $recaptchapublickey = get_post_meta($post->ID, 'recaptchapublickey', true); ?>
					<input type="text" name="recaptchapublickey" id="recaptchapublickey" size="4" value="<?php echo $recaptchapublickey; ?>" />
					<div class="description"><?php _e('<br />place <strong>"recaptcha public key"</strong> here.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $recaptchaprivatekey = get_post_meta($post->ID, 'recaptchaprivatekey', true); ?>
					<input type="text" name="recaptchaprivatekey" id="recaptchaprivatekey" size="4" value="<?php echo $recaptchaprivatekey; ?>" />
					<div class="description"><?php _e('<br />place <strong>"recaptcha private key"</strong> here.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $recaptchatheme = get_post_meta($post->ID, 'recaptchatheme', true); ?>
					<select name="recaptchatheme">
						<option value="white" <?php if ($recaptchatheme=='white') { echo 'selected="selected"'; } ?> ><?php _e('white', 'my_framework'); ?></option>
						<option value="red" <?php if ($recaptchatheme=='red') { echo 'selected="selected"'; } ?> ><?php _e('red', 'my_framework'); ?></option>
						<option value="blackglass" <?php if ($recaptchatheme=='blackglass') { echo 'selected="selected"'; } ?> ><?php _e('blackglass', 'my_framework'); ?></option>
						<option value="clean" <?php if ($recaptchatheme=='clean') { echo 'selected="selected"'; } ?> ><?php _e('clean', 'my_framework'); ?></option>
						<option value="custom" <?php if ($recaptchatheme=='custom') { echo 'selected="selected"'; } ?> ><?php _e('custom', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />select <strong>"recaptcha theme"</strong>.', 'my_framework'); ?></div>
					</div>
					<div class="row">
					<?php $recaptchalang = get_post_meta($post->ID, 'recaptchalang', true); ?>
					<select name="recaptchalang">
						<option value="en" <?php if ($recaptchalang=='en') { echo 'selected="selected"'; } ?> ><?php _e('English', 'my_framework'); ?></option>
						<option value="nl" <?php if ($recaptchalang=='nl') { echo 'selected="selected"'; } ?> ><?php _e('Dutch', 'my_framework'); ?></option>
						<option value="fr" <?php if ($recaptchalang=='fr') { echo 'selected="selected"'; } ?> ><?php _e('French', 'my_framework'); ?></option>
						<option value="de" <?php if ($recaptchalang=='de') { echo 'selected="selected"'; } ?> ><?php _e('German', 'my_framework'); ?></option>
						<option value="pt" <?php if ($recaptchalang=='pt') { echo 'selected="selected"'; } ?> ><?php _e('Portuguese', 'my_framework'); ?></option>
						<option value="ru" <?php if ($recaptchalang=='ru') { echo 'selected="selected"'; } ?> ><?php _e('Russian', 'my_framework'); ?></option>
						<option value="es" <?php if ($recaptchalang=='es') { echo 'selected="selected"'; } ?> ><?php _e('Spanish', 'my_framework'); ?></option>
						<option value="tr" <?php if ($recaptchalang=='tr') { echo 'selected="selected"'; } ?> ><?php _e('Turkish', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />select <strong>"recaptcha language"</strong>.', 'my_framework'); ?></div>
					</div>
				</div>
						
				
				<div id="contact-map" class="pa-option">
					<h4><?php _e('Google map', 'my_framework'); ?></h4>
					<div class="row">
					<?php $contactmap = get_post_meta($post->ID, 'contactmap', true); ?>
					<input type="text" name="contactmap" id="contactmap" size="4" class="w500" value="<?php echo $contactmap; ?>" />
					</div>
					<div class="description full"><?php _e('paste your <strong>"google map source"</strong> here.<br />text like this:<br />http://maps.google.com/maps/ms?msa= ... output=embed', 'my_framework'); ?></div>
				</div>
				<!-- end of #contact-map -->
				
				<div id="contact-map-height" class="pa-option">
					<h4><?php _e('Google map height', 'my_framework'); ?></h4>
					<div class="row">
					<?php $contactmapheight = get_post_meta($post->ID, 'contactmapheight', true); ?>
					<input type="text" name="contactmapheight" id="contactmapheight" size="4" value="<?php echo $contactmapheight; ?>" />
					<div class="description"><?php _e('enter <strong>"height"</strong> for google map.<br />(by default 250 and 350 when it is on top).<br />digits only, without any unit.', 'my_framework'); ?></div>
					</div>
					
					<h4><?php _e('Google map on top', 'my_framework'); ?></h4>
					<div class="row">
					<?php $contactmapontoponoff = get_post_meta($post->ID, 'contactmapontoponoff', true); ?>
					<label for="contactmapontoponoff" class="contactmapontop-onoff"></label>
					<input type="hidden" name="contactmapontoponoff" value="false" />
					<input type="checkbox" name="contactmapontoponoff" id="contactmapontoponoff" value="true" <?php if ($contactmapontoponoff=='true') { echo 'checked="checked"'; } ?> />
					<div class="description"><?php _e('use this option for <strong>"google map location"</strong>.<br /> when it is on google map appear on top of the content.', 'my_framework'); ?></div>
					</div>
				</div>
				<!-- end of #portpagination-on-off -->
			
			</div>
			<!-- end of #contactpageoption-section -->
			
			
		</div>
		<!-- end of .custom-form -->


<?php
}

/* When the post is saved, saves our custom data */
function pa_save_pagedata( $post_id ) {
	
	// verify if this is an auto save routine. 
	// If it is our form has not been submitted, so we dont want to do anything
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
		return;
	
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	
	if ( isset($_POST['pa_noncename']) && !wp_verify_nonce( $_POST['pa_noncename'], plugin_basename( __FILE__ ) ) )
		return;

  
	// Check permissions
	if ( !current_user_can( 'edit_page', $post_id ) )
		return;
	
	// OK, we're authenticated: we need to find and save the data
	
	$pageoptions = array(
	'pagelength',
	'pagesidebar',
	'pagesidebarright',
	'pagesidebarleft',
	'pageimageonoff',
	'pageimage',
	'pageimageleft',
	'pageimagetop',
	'pageimagerepeat',
	'pageimagefix',
	'pagetitleonoff',
	'pagecontentonoff',
	'pageslider',
	'pageslidercat',
	'pagebgtransonoff',
	'pagesloganonoff',
	'pagebreadcrumbonoff',
	'pagefooterstyleonoff',
	
	'blogcat',
	'blognumfetch',
	'blogthumbtitleonoff',
	'bloglentitle',
	'blogthumbexcerptonoff',
	'bloglenexcerpt',
	'blogstyle',
	'blogpaginationonoff',
	'blogprettyphotoonoff',
	'bloginfotagonoff',
	'blogcontinuelinkonoff',
	'blogcompletecontentonoff',
	
	'portsize',
	'portstyle',
	'portthumbdateonoff',
	'portstylegalonoff',
	'portcat',
	'portfilteronoff',
	'portnumfetch',
	'portthumbtitleonoff',
	'portlentitle',
	'portthumbexcerptonoff',
	'portlenexcerpt',
	'portalign',
	'portthumbcategoryonoff',
	'portmorebuttononoff',
	'portwebbuttononoff',
	'portpaginationonoff',
	
	'contactemail',
	'recaptchaonoff',
	'recaptchapublickey',
	'recaptchaprivatekey',
	'recaptchatheme',
	'recaptchalang',
	'contactmap',
	'contactmapheight',
	'contactmapontoponoff');
	
	foreach ($pageoptions as $pageoption) {	
	if (isset($_POST[$pageoption])) update_post_meta($post_id, $pageoption, $_POST[$pageoption]);
	}

}
?>