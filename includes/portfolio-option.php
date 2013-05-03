<?php
/* Define the custom box */

add_action( 'add_meta_boxes', 'pa_add_custom_port' );

// backwards compatible (before WP 3.0)
// add_action( 'admin_init', 'pa_add_custom_port', 1 );

/* Do something with the data entered */
add_action( 'save_post', 'pa_save_portdata' );

/* Adds a box to the main column on the Portfolio edit screens */
function pa_add_custom_port() {
    add_meta_box( 'pa-portfolio-option', __( 'Portfolio Option', 'my_framework' ), 'pa_custom_port_option', 'portfolio', 'normal', 'high');
}

/* Prints the box content */
function pa_custom_port_option( $post ) {

// Use nonce for verification
wp_nonce_field( plugin_basename( __FILE__ ), 'pa_noncename' );
?>
	
	
		<div class="custom-form">
			
			
			<div id="portoption-section">
				<h2><?php _e('Portfolio Option &amp; Settings', 'my_framework'); ?></h2>
				
				<div id="portsidebar" class="pa-option all-sidebar">
					<?php $portsidebar = get_post_meta($post->ID, 'portsidebar', true);
					$sidebarsingleport = get_option('mytheme_sidebarsingleport');
					if (!$portsidebar) $portsidebar = $sidebarsingleport; ?>
					<h4><?php _e('Select Sidebar', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="portsidebar1" class="sidebarright"></label>
					<input type="radio" name="portsidebar" id="portsidebar1" value="right" <?php if ($portsidebar=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="portsidebar2" class="sidebarleft"></label>
					<input type="radio" name="portsidebar" id="portsidebar2" value="left" <?php if ($portsidebar=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="portsidebar3" class="sidebarboth"></label>
					<input type="radio" name="portsidebar" id="portsidebar3" value="both" <?php if ($portsidebar=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="portsidebar4" class="sidebarno"></label>
					<input type="radio" name="portsidebar" id="portsidebar4" value="no" <?php if ($portsidebar=='no') { echo 'checked="checked"'; } ?> />
					</div>
					
					<div class="sidebar-selection">
						<div class="sidebar-selection-right row">
						<?php $portsidebarright = get_post_meta($post->ID, 'portsidebarright', true); $sidebaradds = get_option('mytheme_sidebaraddvalues'); ?>
						<select name="portsidebarright">
							<option value="sidebar-right" <?php if ($portsidebarright=='sidebar-right') { echo 'selected="selected"'; } ?> ><?php _e('main right', 'my_framework'); ?></option>
							
							<?php $sidebaradd = explode('|', $sidebaradds); for ($i=0; $i<sizeof($sidebaradd)-1 ;$i++) { ?>
							<option value="<?php echo $sidebaradd[$i] ?>" <?php if ($portsidebarright==$sidebaradd[$i]) { echo 'selected="selected"'; } ?>><?php echo $sidebaradd[$i] ?></option>
							<?php } ?>
							
						</select>
						<div class="description"><?php _e('<br />select custom <strong>"right sidebar"</strong> for this portfolio.', 'my_framework'); ?></div>
						</div>
						<!-- end of #portsidebarright -->
						
						<div class="sidebar-selection-left row">
						<?php $portsidebarleft = get_post_meta($post->ID, 'portsidebarleft', true); ?>
						<select name="portsidebarleft">
							<option value="sidebar-left" <?php if ($portsidebarleft=='sidebar-left') { echo 'selected="selected"'; } ?> ><?php _e('main left', 'my_framework'); ?></option>
							
							<?php $sidebaradd = explode('|', $sidebaradds); for ($i=0; $i<sizeof($sidebaradd)-1 ;$i++) { ?>
							<option value="<?php echo $sidebaradd[$i] ?>" <?php if ($portsidebarleft==$sidebaradd[$i]) { echo 'selected="selected"'; } ?>><?php echo $sidebaradd[$i] ?></option>
							<?php } ?>
							
						</select>
						<div class="description"><?php _e('<br />select custom <strong>"left sidebar"</strong> for this portfolio.', 'my_framework'); ?></div>
						</div>
						<!-- end of #portsidebarleft -->
					</div>
					
				</div>
				<!-- end of #portsidebar -->
				
				
				<div id="port-style" class="pa-option">
					<?php $portstyle = get_post_meta($post->ID, 'portstyle', true); ?>
					<h4><?php _e('Select display style', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="portstyle">
						<option value="full" <?php if ($portstyle=='full') { echo 'selected="selected"'; } ?> ><?php _e('full style', 'my_framework'); ?></option>
						<option value="half" <?php if ($portstyle=='half') { echo 'selected="selected"'; } ?>><?php _e('half style', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('<br />use desired style.', 'my_framework'); ?></div>
				</div>
				<!-- end of #port-style -->
						
								
				<div id="port-client" class="pa-option">
					<?php $portclient = get_post_meta($post->ID, 'portclient', true); ?>
					<h4><?php _e('Client name', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="portclient" id="portclient" size="4" class="w500" value="<?php echo $portclient; ?>" />
					</div>
				</div>
				<!-- end of #port-client -->
						
								
				<div id="port-skills" class="pa-option">
					<?php $portskills = get_post_meta($post->ID, 'portskills', true); ?>
					<h4><?php _e('Skills needed', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="portskills" id="portskills" size="4" class="w500" value="<?php echo $portskills; ?>" />
					</div>
				</div>
				<!-- end of #port-skills -->
						
								
				<div id="port-website" class="pa-option">
					<?php $portwebsite = get_post_meta($post->ID, 'portwebsite', true); ?>
					<h4><?php _e('Project Url', 'my_framework'); ?></h4>
					<div class="row">
					<input type="text" name="portwebsite" id="portwebsite" size="4" class="w500" value="<?php echo $portwebsite; ?>" />
					</div>
				</div>
				<!-- end of #port-website -->
				
				
				<div id="portauthor-on-off" class="pa-option">
					<h4><?php _e('Display author information', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portauthoronoff = get_post_meta($post->ID, 'portauthoronoff', true); ?>
					<label for="portauthoronoff" class="portauthor-onoff"></label>
					<input type="hidden" name="portauthoronoff" value="false" />
					<input type="checkbox" name="portauthoronoff" id="portauthoronoff" value="true" <?php if ($portauthoronoff=='true' || !$portauthoronoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide portfolio author information.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portauthor -->
			
			
				<div id="portsocial-on-off" class="pa-option">
					<h4><?php _e('Display social icon', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portsocialonoff = get_post_meta($post->ID, 'portsocialonoff', true); ?>
					<label for="portsocialonoff" class="portsocial-onoff"></label>
					<input type="hidden" name="portsocialonoff" value="false" />
					<input type="checkbox" name="portsocialonoff" id="portsocialonoff" value="true" <?php if ($portsocialonoff=='true' || !$portsocialonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide portfolio social icon.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portsocial -->
			
			
				<div id="portrelated-on-off" class="pa-option">
					<h4><?php _e('Display related portfolios', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $portrelatedonoff = get_post_meta($post->ID, 'portrelatedonoff', true); ?>
					<label for="portrelatedonoff" class="portrelated-onoff"></label>
					<input type="hidden" name="portrelatedonoff" value="false" />
					<input type="checkbox" name="portrelatedonoff" id="portrelatedonoff" value="true" <?php if ($portrelatedonoff=='true' || !$portrelatedonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide related portfolios.', 'my_framework'); ?></div>
				</div>
				<!-- end of #portsocial -->
				
				
				<div id="port-titleplace" class="pa-option">
					<?php $porttitleplace = get_post_meta($post->ID, 'porttitleplace', true); ?>
					<h4><?php _e('Select title place', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="porttitleplace">
						<option value="below" <?php if ($porttitleplace=='below') { echo 'selected="selected"'; } ?>><?php _e('below image', 'my_framework'); ?></option>
						<option value="above" <?php if ($porttitleplace=='above') { echo 'selected="selected"'; } ?> ><?php _e('above image', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('<br />place title above or below thumbnail image.', 'my_framework'); ?></div>
				</div>
				<!-- end of #porttitleplace -->
				
				
				<div id="port-pagination" class="pa-option">
					<?php $portpaginateplace = get_post_meta($post->ID, 'portpaginateplace', true); ?>
					<h4><?php _e('Select paginate place', 'my_framework'); ?></h4>
					<div class="row">
					<select name="portpaginateplace">
						<option value="bottom" <?php if ($portpaginateplace=='bottom') { echo 'selected="selected"'; } ?>><?php _e('on bottom', 'my_framework'); ?></option>
						<option value="top" <?php if ($portpaginateplace=='top') { echo 'selected="selected"'; } ?>><?php _e('on top', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />place pagination on top or bottom of the portfolio.', 'my_framework'); ?></div>
					</div>
					<?php $portpaginatetitle = get_post_meta($post->ID, 'portpaginatetitle', true); ?>
					<div class="row">
					<select name="portpaginatetitle">
						<option value="post" <?php if ($portpaginatetitle=='post') { echo 'selected="selected"'; } ?>><?php _e('post name', 'my_framework'); ?></option>
						<option value="next-prev" <?php if ($portpaginatetitle=='next-prev') { echo 'selected="selected"'; } ?>><?php _e('next & previous', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />use "portfolio name" or "next & previous".', 'my_framework'); ?></div>
					</div>
					<?php $portpaginatealign = get_post_meta($post->ID, 'portpaginatealign', true); ?>
					<div class="row">
					<select name="portpaginatealign">
						<option value="default" <?php if ($portpaginatealign=='default') { echo 'selected="selected"'; } ?>><?php _e('right & left', 'my_framework'); ?></option>
						<option value="right" <?php if ($portpaginatealign=='right') { echo 'selected="selected"'; } ?>><?php _e('both right', 'my_framework'); ?></option>
						<option value="left" <?php if ($portpaginatealign=='left') { echo 'selected="selected"'; } ?>><?php _e('both left', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set align for pagination.', 'my_framework'); ?></div>
					</div>
				</div>
				<!-- end of #port-pagination -->
						
								
				<div id="portthumb-type" class="pa-option">
					<?php $portthumbtype = get_post_meta($post->ID, 'portthumbtype', true); ?>
					<h4><?php _e('Select thumbnail type', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="portthumbtype">
						<option value="image" <?php if ($portthumbtype=='image') { echo 'selected="selected"'; } ?> ><?php _e('image', 'my_framework'); ?></option>
						<option value="video" <?php if ($portthumbtype=='video') { echo 'selected="selected"'; } ?>><?php _e('video', 'my_framework'); ?></option>
						<option value="slider" <?php if ($portthumbtype=='slider') { echo 'selected="selected"'; } ?> ><?php _e('slider', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('select type of port thumbnail.<br />when <strong>"image"</strong> is selected, featured image used as thumbnail.', 'my_framework'); ?></div>
					
					<div>
						<div id="portthumb-image" class="row">
						<?php $portthumbimage = get_post_meta($post->ID, 'portthumbimage', true); ?>
						<select name="portthumbimage">
							<option value="post" <?php if ($portthumbimage=='post') { echo 'selected="selected"'; } ?>><?php _e('link to post', 'my_framework'); ?></option>
							<option value="url" <?php if ($portthumbimage=='url') { echo 'selected="selected"'; } ?>><?php _e('link to custom url', 'my_framework'); ?></option>
							<option value="full" <?php if ($portthumbimage=='full') { echo 'selected="selected"'; } ?>><?php _e('lightbox for full image', 'my_framework'); ?></option>
							<option value="picture" <?php if ($portthumbimage=='picture') { echo 'selected="selected"'; } ?>><?php _e('lightbox for picture', 'my_framework'); ?></option>
							<option value="video" <?php if ($portthumbimage=='video') { echo 'selected="selected"'; } ?>><?php _e('lightbox for video', 'my_framework'); ?></option>
						</select>
						<div class="description"><?php _e('<br />select option for link.', 'my_framework'); ?></div>
						<div id="portthumb-imageurl" class="row">
						<?php $portthumbimageurl = get_post_meta($post->ID, 'portthumbimageurl', true); ?>
						<input type="text" name="portthumbimageurl" id="portthumbimageurl" size="4" class="w500" value="<?php echo $portthumbimageurl; ?>" />
						</div>
						</div>
						
						<div id="portthumb-video" class="row">
						<?php $portthumbvideo = get_post_meta($post->ID, 'portthumbvideo', true); ?>
						<input type="text" name="portthumbvideo" id="portthumbvideo" size="4" class="w500" value="<?php echo $portthumbvideo; ?>" />
						<div class="description"><?php _e('<br />place your <strong>"youtube"</strong> or <strong>"vimeo"</strong> url here.', 'my_framework'); ?></div>
						</div>
						
						<div id="portthumb-slider" class="row">
						<?php $portthumbslider = get_post_meta($post->ID, 'portthumbslider', true); ?>
						<input type="hidden" name="portthumbslider" id="portthumbslider" size="" value="<?php echo $portthumbslider; ?>" />
						<?php image_chooser($portthumbslider); ?>
						</div>
					</div>
				</div>
				<!-- end of #portthumbtype -->
				
				
				<div id="portinthumb-type" class="pa-option">
					<?php $portinthumbtype = get_post_meta($post->ID, 'portinthumbtype', true); ?>
					<h4><?php _e('Select inside thumbnail type', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="portinthumbtype">
						<option value="normal" <?php if ($portinthumbtype=='normal') { echo 'selected="selected"'; } ?>><?php _e('normal', 'my_framework'); ?></option>
						<option value="image" <?php if ($portinthumbtype=='image') { echo 'selected="selected"'; } ?>><?php _e('image', 'my_framework'); ?></option>
						<option value="video" <?php if ($portinthumbtype=='video') { echo 'selected="selected"'; } ?>><?php _e('video', 'my_framework'); ?></option>
						<option value="slider" <?php if ($portinthumbtype=='slider') { echo 'selected="selected"'; } ?>><?php _e('slider', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('select type of inside portfolio thumbnail. is used in single portfolio<br />when <strong>"normal"</strong> is selected, thumbnail and inside thumbnail are the same.', 'my_framework'); ?></div>
					
					<div>
						<div id="portinthumb-image" class="row">
						<?php $portinthumbimage = get_post_meta($post->ID, 'portinthumbimage', true); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($portinthumbimage, false, 200, 100); ?>		
						</div>
							<input type="text" name="portinthumbimage" id="portinthumbimage" class="upload-text" size="" value="<?php echo $portinthumbimage; ?>"/>
							<input class="upload-button image" type="button" value="" />
						<div class="description"><?php _e('<br />Choose and upload your logo from here.', 'my_framework'); ?></div>
						</div>
						
						<div id="portinthumb-video" class="row">
						<?php $portinthumbvideo = get_post_meta($post->ID, 'portinthumbvideo', true); ?>
						<input type="text" name="portinthumbvideo" id="portinthumbvideo" size="4" class="w500" value="<?php echo $portinthumbvideo; ?>" />
						<div class="description"><?php _e('<br />place your <strong>"youtube"</strong> or <strong>"vimeo"</strong> url here.', 'my_framework'); ?></div>
						</div>
						
						<div id="portinthumb-slider" class="row">
						<?php $portinthumbslider = get_post_meta($post->ID, 'portinthumbslider', true); ?>
						<input type="hidden" name="portinthumbslider" id="portinthumbslider" size="" value="<?php echo $portinthumbslider; ?>" />
						<?php image_chooser($portinthumbslider); ?>
						</div>
					</div>
				</div>
				<!-- end of #portinthumbtype -->
			
			</div>
			<!-- end of #port-section -->
			
			
		</div>
		<!-- end of .custom-form -->
			

<?php
}

/* When the post is saved, saves our custom data */
function pa_save_portdata( $post_id ) {
	
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
	
	$portfoliooptions = array(
	'portsidebar',
	'portstyle',
	'portsidebarright',
	'portsidebarleft',
	'portclient',
	'portwebsite',
	'portskills',
	'portauthoronoff',
	'portsocialonoff',
	'portrelatedonoff',
	'porttitleplace',
	'portpaginateplace',
	'portpaginatetitle',
	'portpaginatealign',
	'portthumbtype',
	'portthumbimage',
	'portthumbimageurl',
	'portthumbvideo',
	'portthumbslider',
	'portinthumbtype',
	'portinthumbimage',
	'portinthumbvideo',
	'portinthumbslider');
	
	foreach ($portfoliooptions as $portfoliooption) {	
	if (isset($_POST[$portfoliooption])) update_post_meta($post_id, $portfoliooption, $_POST[$portfoliooption]);
	}
}
?>