<?php
/* Define the custom box */

add_action( 'add_meta_boxes', 'pa_add_custom_post' );

// backwards compatible (before WP 3.0)
// add_action( 'admin_init', 'pa_add_custom_post', 1 );

/* Do something with the data entered */
add_action( 'save_post', 'pa_save_postdata' );

/* Adds a box to the main column on the Post edit screens */
function pa_add_custom_post() {
    add_meta_box( 'pa-post-option', __( 'Post Option', 'my_framework' ), 'pa_custom_post_option', 'post', 'normal', 'high');
}

/* Prints the box content */
function pa_custom_post_option( $post ) {

// Use nonce for verification
wp_nonce_field( plugin_basename( __FILE__ ), 'pa_noncename' );
?>
	
	
		<div class="custom-form">
			
			
			<div id="postoption-section">
				<h2><?php _e('Post Option &amp; Settings', 'my_framework'); ?></h2>
				
				<div id="postsidebar" class="pa-option all-sidebar">
					<?php $sidebarsinglepost = get_option('mytheme_sidebarsinglepost');
					$postsidebar = get_post_meta($post->ID, 'postsidebar', true);
					if (!$postsidebar) $postsidebar = $sidebarsinglepost ; ?>
					<h4><?php _e('Select Sidebar', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="postsidebar1" class="sidebarright"></label>
					<input type="radio" name="postsidebar" id="postsidebar1" value="right" <?php if ($postsidebar=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="postsidebar2" class="sidebarleft"></label>
					<input type="radio" name="postsidebar" id="postsidebar2" value="left" <?php if ($postsidebar=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="postsidebar3" class="sidebarboth"></label>
					<input type="radio" name="postsidebar" id="postsidebar3" value="both" <?php if ($postsidebar=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="postsidebar4" class="sidebarno"></label>
					<input type="radio" name="postsidebar" id="postsidebar4" value="no" <?php if ($postsidebar=='no') { echo 'checked="checked"'; } ?> />
					</div>
					
					<div class="sidebar-selection">
						<div class="sidebar-selection-right row">
						<?php $postsidebarright = get_post_meta($post->ID, 'postsidebarright', true); $sidebaradds = get_option('mytheme_sidebaraddvalues'); ?>
						<select name="postsidebarright">
							<option value="sidebar-right" <?php if ($postsidebarright=='sidebar-right') { echo 'selected="selected"'; } ?>><?php _e('main right', 'my_framework'); ?></option>
							
							<?php $sidebaradd = explode('|', $sidebaradds); for ($i=0; $i<sizeof($sidebaradd)-1 ;$i++) { ?>
							<option value="<?php echo $sidebaradd[$i] ?>" <?php if ($postsidebarright==$sidebaradd[$i]) { echo 'selected="selected"'; } ?>><?php echo $sidebaradd[$i] ?></option>
							<?php } ?>
							
						</select>
						<div class="description"><?php _e('<br />select custom <strong>"right sidebar"</strong> for this post.', 'my_framework'); ?></div>
						</div>
						<!-- end of #postsidebarright -->
						
						<div class="sidebar-selection-left row">
						<?php $postsidebarleft = get_post_meta($post->ID, 'postsidebarleft', true); ?>
						<select name="postsidebarleft">
							<option value="sidebar-left" <?php if ($postsidebarleft=='sidebar-left') { echo 'selected="selected"'; } ?>><?php _e('main left', 'my_framework'); ?></option>
							
							<?php $sidebaradd = explode('|', $sidebaradds); for ($i=0; $i<sizeof($sidebaradd)-1 ;$i++) { ?>
							<option value="<?php echo $sidebaradd[$i] ?>" <?php if ($postsidebarleft==$sidebaradd[$i]) { echo 'selected="selected"'; } ?>><?php echo $sidebaradd[$i] ?></option>
							<?php } ?>
							
						</select>
						<div class="description"><?php _e('<br />select custom <strong>"left sidebar"</strong> for this post.', 'my_framework'); ?></div>
						</div>
						<!-- end of #postsidebarleft -->
					</div>
					
				</div>
				<!-- end of #postsidebar -->
				
				
				<div id="postauthor-on-off" class="pa-option">
					<h4><?php _e('Display author information', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $postauthoronoff = get_post_meta($post->ID, 'postauthoronoff', true); ?>
					<label for="postauthoronoff" class="postauthor-onoff"></label>
					<input type="hidden" name="postauthoronoff" value="false" />
					<input type="checkbox" name="postauthoronoff" id="postauthoronoff" value="true" <?php if ($postauthoronoff=='true' || !$postauthoronoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide post author information.', 'my_framework'); ?></div>
				</div>
				<!-- end of #postauthor -->
			
			
				<div id="postsocial-on-off" class="pa-option">
					<h4><?php _e('Display social icon', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $postsocialonoff = get_post_meta($post->ID, 'postsocialonoff', true); ?>
					<label for="postsocialonoff" class="postsocial-onoff"></label>
					<input type="hidden" name="postsocialonoff" value="false" />
					<input type="checkbox" name="postsocialonoff" id="postsocialonoff" value="true" <?php if ($postsocialonoff=='true' || !$postsocialonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide post social icon.', 'my_framework'); ?></div>
				</div>
				<!-- end of #postsocial -->
				
				
				<div id="post-titleplace" class="pa-option">
					<?php $posttitleplace = get_post_meta($post->ID, 'posttitleplace', true); ?>
					<h4><?php _e('Select title place', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="posttitleplace">
						<option value="below" <?php if ($posttitleplace=='below') { echo 'selected="selected"'; } ?>><?php _e('below image', 'my_framework'); ?></option>
						<option value="above" <?php if ($posttitleplace=='above') { echo 'selected="selected"'; } ?> ><?php _e('above image', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('<br />place title above or below thumbnail image.', 'my_framework'); ?></div>
				</div>
				<!-- end of #posttitleplace -->
				
				
				<div id="post-pagination" class="pa-option">
					<?php $postpaginateplace = get_post_meta($post->ID, 'postpaginateplace', true); ?>
					<h4><?php _e('Select paginate place', 'my_framework'); ?></h4>
					<div class="row">
					<select name="postpaginateplace">
						<option value="bottom" <?php if ($postpaginateplace=='bottom') { echo 'selected="selected"'; } ?>><?php _e('on bottom', 'my_framework'); ?></option>
						<option value="top" <?php if ($postpaginateplace=='top') { echo 'selected="selected"'; } ?>><?php _e('on top', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />place pagination on top or bottom of the postfolio.', 'my_framework'); ?></div>
					</div>
					<?php $postpaginatetitle = get_post_meta($post->ID, 'postpaginatetitle', true); ?>
					<div class="row">
					<select name="postpaginatetitle">
						<option value="post" <?php if ($postpaginatetitle=='post') { echo 'selected="selected"'; } ?>><?php _e('post name', 'my_framework'); ?></option>
						<option value="next-prev" <?php if ($postpaginatetitle=='next-prev') { echo 'selected="selected"'; } ?>><?php _e('next & previous', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />use "postfolio name" or "next & previous".', 'my_framework'); ?></div>
					</div>
					<?php $postpaginatealign = get_post_meta($post->ID, 'postpaginatealign', true); ?>
					<div class="row">
					<select name="postpaginatealign">
						<option value="default" <?php if ($postpaginatealign=='default') { echo 'selected="selected"'; } ?>><?php _e('right & left', 'my_framework'); ?></option>
						<option value="right" <?php if ($postpaginatealign=='right') { echo 'selected="selected"'; } ?>><?php _e('both right', 'my_framework'); ?></option>
						<option value="left" <?php if ($postpaginatealign=='left') { echo 'selected="selected"'; } ?>><?php _e('both left', 'my_framework'); ?></option>
					</select>
					<div class="description"><?php _e('<br />set align for pagination.', 'my_framework'); ?></div>
					</div>
				</div>
				<!-- end of #post-pagination -->
			
			
				<div id="postrelated-on-off" class="pa-option">
					<h4><?php _e('Display related posts', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $postrelatedonoff = get_post_meta($post->ID, 'postrelatedonoff', true); ?>
					<label for="postrelatedonoff" class="postrelated-onoff"></label>
					<input type="hidden" name="postrelatedonoff" value="false" />
					<input type="checkbox" name="postrelatedonoff" id="postrelatedonoff" value="true" <?php if ($postrelatedonoff=='true' || !$postrelatedonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide related posts.', 'my_framework'); ?></div>
				</div>
				<!-- end of #postrelated-on-off -->
						
								
				<div id="postthumb-type" class="pa-option">
					<?php $postthumbtype = get_post_meta($post->ID, 'postthumbtype', true); ?>
					<h4><?php _e('Select thumbnail type', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="postthumbtype">
						<option value="image" <?php if ($postthumbtype=='image') { echo 'selected="selected"'; } ?>><?php _e('image', 'my_framework'); ?></option>
						<option value="video" <?php if ($postthumbtype=='video') { echo 'selected="selected"'; } ?>><?php _e('video', 'my_framework'); ?></option>
						<option value="slider" <?php if ($postthumbtype=='slider') { echo 'selected="selected"'; } ?>><?php _e('slider', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('select type of post thumbnail. is used in blog<br />when <strong>"image"</strong> is selected, featured image used as thumbnail.', 'my_framework'); ?></div>
					
					<div>
						<div id="postthumb-image" class="row">
						</div>
						<div id="postthumb-video" class="row">
						<?php $postthumbvideo = get_post_meta($post->ID, 'postthumbvideo', true); ?>
						<input type="text" name="postthumbvideo" id="postthumbvideo" size="4" class="w500" value="<?php echo $postthumbvideo; ?>" />
						<div class="description"><?php _e('<br />place your <strong>"youtube"</strong> or <strong>"vimeo"</strong> url here.', 'my_framework'); ?></div>
						</div>
						
						<div id="postthumb-slider" class="row">
						<?php $postthumbslider = get_post_meta($post->ID, 'postthumbslider', true); ?>
						<input type="hidden" name="postthumbslider" id="postthumbslider" size="" value="<?php echo $postthumbslider; ?>" />
						<?php image_chooser($postthumbslider); ?>
						</div>
					</div>
				</div>
				<!-- end of #postthumbtype -->
				
				
				<div id="postinthumb-type" class="pa-option">
					<?php $postinthumbtype = get_post_meta($post->ID, 'postinthumbtype', true); ?>
					<h4><?php _e('Select inside thumbnail type', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="postinthumbtype">
						<option value="normal" <?php if ($postinthumbtype=='normal') { echo 'selected="selected"'; } ?>><?php _e('normal', 'my_framework'); ?></option>
						<option value="image" <?php if ($postinthumbtype=='image') { echo 'selected="selected"'; } ?>><?php _e('image', 'my_framework'); ?></option>
						<option value="video" <?php if ($postinthumbtype=='video') { echo 'selected="selected"'; } ?>><?php _e('video', 'my_framework'); ?></option>
						<option value="slider" <?php if ($postinthumbtype=='slider') { echo 'selected="selected"'; } ?>><?php _e('slider', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('select type of inside post thumbnail. is used in single post<br />when <strong>"normal"</strong> is selected, thumbnail and inside thumbnail are the same.', 'my_framework'); ?></div>
					
					<div>
						<div id="postinthumb-image" class="row">
						<?php $postinthumbimage = get_post_meta($post->ID, 'postinthumbimage', true); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($postinthumbimage, false, 200, 100); ?>		
						</div>
							<input type="text" name="postinthumbimage" id="postinthumbimage" class="upload-text" size="" value="<?php echo $postinthumbimage; ?>"/>
							<input class="upload-button image" type="button" value="" />
						<div class="description"><?php _e('<br />Choose and upload your image from here.', 'my_framework'); ?></div>
						</div>
						
						<div id="postinthumb-video" class="row">
						<?php $postinthumbvideo = get_post_meta($post->ID, 'postinthumbvideo', true); ?>
						<input type="text" name="postinthumbvideo" id="postinthumbvideo" size="4" class="w500" value="<?php echo $postinthumbvideo; ?>" />
						<div class="description"><?php _e('<br />place your <strong>"youtube"</strong> or <strong>"vimeo"</strong> url here.', 'my_framework'); ?></div>
						</div>
						
						<div id="postinthumb-slider" class="row">
						<?php $postinthumbslider = get_post_meta($post->ID, 'postinthumbslider', true); ?>
						<input type="hidden" name="postinthumbslider" id="postinthumbslider" size="" value="<?php echo $postinthumbslider; ?>" />
						<?php image_chooser($postinthumbslider); ?>
						</div>
					</div>
				</div>
				<!-- end of #postinthumbtype -->
			
			</div>
			<!-- end of #post-section -->
			
			
		</div>
		<!-- end of .custom-form -->
			

<?php
}

/* When the post is saved, saves our custom data */
function pa_save_postdata( $post_id ) {
	
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
	
	$postoptions = array(
	'postsidebar',
	'postsidebarright',
	'postsidebarleft',
	'postauthoronoff',
	'postsocialonoff',
	'posttitleplace',
	'postpaginateplace',
	'postpaginatetitle',
	'postpaginatealign',
	'postrelatedonoff',
	'postthumbtype',
	'postthumbvideo',
	'postthumbslider',
	'postinthumbtype',
	'postinthumbimage',
	'postinthumbvideo',
	'postinthumbslider');
	
	foreach ($postoptions as $postoption) {	
	if (isset($_POST[$postoption])) update_post_meta($post_id, $postoption, $_POST[$postoption]);
	}
}
?>