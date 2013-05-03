<?php
/* Define the custom box */

add_action( 'add_meta_boxes', 'pa_add_custom_slider' );

// backwards compatible (before WP 3.0)
// add_action( 'admin_init', 'pa_add_custom_slider', 1 );

/* Do something with the data entered */
add_action( 'save_post', 'pa_save_sliderdata' );

/* Adds a box to the main column on the slider edit screens */
function pa_add_custom_slider() {
    add_meta_box( 'pa-slider-option', __( 'Slider Option', 'my_framework' ), 'pa_custom_slider_option', 'slider', 'normal', 'high');
}

/* Prints the box content */
function pa_custom_slider_option( $post ) {

// Use nonce for verification
wp_nonce_field( plugin_basename( __FILE__ ), 'pa_noncename' );
?>
	
	
		<div class="custom-form">
			
			
			<div id="slideroption-section">
				<h2><?php _e('Slider Option &amp; Settings', 'my_framework'); ?></h2>
				
				<div id="sliderlink-type" class="pa-option">
					<?php $sliderlinktype = get_post_meta($post->ID, 'sliderlinktype', true); ?>
					<h4><?php _e('Select link type', 'my_framework'); ?></h4>
					<div class="row w110">
					<select name="sliderlinktype">
						<option value="no" <?php if ($sliderlinktype=='no') { echo 'selected="selected"'; } ?>><?php _e('no link', 'my_framework'); ?></option>
						<option value="image" <?php if ($sliderlinktype=='image') { echo 'selected="selected"'; } ?>><?php _e('ligtbox', 'my_framework'); ?></option>
						<option value="url" <?php if ($sliderlinktype=='url') { echo 'selected="selected"'; } ?>><?php _e('link to url', 'my_framework'); ?></option>
						<option value="video" <?php if ($sliderlinktype=='video') { echo 'selected="selected"'; } ?>><?php _e('link to video', 'my_framework'); ?></option>
					</select>
					</div>
					<div class="description"><?php _e('<br />select type of <strong>"slider link"</strong>.<br />unsupported in tm slider.', 'my_framework'); ?></div>
					<div>
						<div id="sliderlink-url" class="row">
							<?php $sliderlinkurl = get_post_meta($post->ID, 'sliderlinkurl', true); ?>
							<input type="text" name="sliderlinkurl" id="sliderlinkurl" size="4" value="<?php echo $sliderlinkurl; ?>" />
						<div class="description"><?php _e('<br />place your url here.', 'my_framework'); ?></div>
						</div>
						
						<div id="sliderlink-video" class="row">
							<?php $sliderlinkvideo = get_post_meta($post->ID, 'sliderlinkvideo', true); ?>
							<input type="text" name="sliderlinkvideo" id="sliderlinkvideo" size="4" value="<?php echo $sliderlinkvideo; ?>" />
						<div class="description"><?php _e('<br />place your <strong>"video path"</strong> here.', 'my_framework'); ?></div>
						</div>
					</div>
				</div>
				<!-- end of #sliderlinktype -->
				
				<div id="slider-secondary-pic" class="pa-option">
					<div class="row">
						<?php $slidersecondarypic_src = get_post_meta($post->ID, 'slidersecondarypic', true); ?>
						<div class="example-image">
						<?php echo get_custom_image_from_src ($slidersecondarypic_src, false, 200, 100); ?>		
						</div>
						<label for="slidersecondarypic" class="slidersecondarypic"><h4><?php _e('Upload Your Image', 'my_framework'); ?></h4></label>
						<input type="text" name="slidersecondarypic" id="slidersecondarypic" class="upload-text" size="" value="<?php echo $slidersecondarypic_src; ?>"/>
						<input class="upload-button image" type="button" value="" />
					</div>
					<div class="description full"><?php _e('Choose and upload your <strong>"secondary image"</strong> from here.<br />Currently "Cycle Slider" only.', 'my_framework'); ?></div>
				</div>
				<!-- end of #sliderlinktype -->
			
			</div>
			<!-- end of #slideroption-section -->
			
			
		</div>
		<!-- end of .custom-form -->
			

<?php
}

/* When the slider is saved, saves our custom data */
function pa_save_sliderdata( $post_id ) {
	
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
	
	$slideroptions = array(
	'sliderlinktype',
	'sliderlinkurl',
	'sliderlinkvideo',
	'slidersecondarypic');
	
	foreach ($slideroptions as $slideroption) {	
	if (isset($_POST[$slideroption])) update_post_meta($post_id, $slideroption, $_POST[$slideroption]);
	}
}
?>