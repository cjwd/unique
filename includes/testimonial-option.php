<?php
/* Define the custom box */

add_action( 'add_meta_boxes', 'pa_add_custom_testi' );

// backwards compatible (before WP 3.0)
// add_action( 'admin_init', 'pa_add_custom_testimonial', 1 );

/* Do something with the data entered */
add_action( 'save_post', 'pa_save_testidata' );

/* Adds a box to the main column on the testimonial edit screens */
function pa_add_custom_testi() {
    add_meta_box( 'pa-testimonial-option', __( 'Testimonial Option', 'my_framework' ), 'pa_custom_testi_option', 'testimonial', 'normal', 'high');
}

/* Prints the box content */
function pa_custom_testi_option( $post ) {

// Use nonce for verification
wp_nonce_field( plugin_basename( __FILE__ ), 'pa_noncename' );
?>
	
	
		<div class="custom-form">
			
			
			<div id="testioption-section">
				<h2><?php _e('Testimonial Option &amp; Settings', 'my_framework'); ?></h2>
				
				<div id="testisidebar" class="pa-option all-sidebar">
					<?php $testisidebar = get_post_meta($post->ID, 'testisidebar', true); ?>
					<h4><?php _e('Select Sidebar', 'my_framework'); ?></h4>
					<div class="row w150">
					<label for="testisidebar1" class="sidebarright"></label>
					<input type="radio" name="testisidebar" id="testisidebar1" value="right" <?php if ($testisidebar=='right') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="testisidebar2" class="sidebarleft"></label>
					<input type="radio" name="testisidebar" id="testisidebar2" value="left" <?php if ($testisidebar=='left') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="testisidebar3" class="sidebarboth"></label>
					<input type="radio" name="testisidebar" id="testisidebar3" value="both" <?php if ($testisidebar=='both') { echo 'checked="checked"'; } ?> />
					</div>
					<div class="row w150">
					<label for="testisidebar4" class="sidebarno"></label>
					<input type="radio" name="testisidebar" id="testisidebar4" value="no" <?php if ($testisidebar=='no' || !$testisidebar) { echo 'checked="checked"'; } ?> />
					</div>
					
					<div class="sidebar-selection">
						<div class="sidebar-selection-right row">
						<?php $testisidebarright = get_post_meta($post->ID, 'testisidebarright', true); $sidebaradds = get_option('mytheme_sidebaraddvalues'); ?>
						<select name="testisidebarright">
							<option value="sidebar-right" <?php if ($testisidebarright=='sidebar-right') { echo 'selected="selected"'; } ?>><?php _e('main right', 'my_framework'); ?></option>
							
							<?php $sidebaradd = explode('|', $sidebaradds); for ($i=0; $i<sizeof($sidebaradd)-1 ;$i++) { ?>
							<option value="<?php echo $sidebaradd[$i] ?>" <?php if ($testisidebarright==$sidebaradd[$i]) { echo 'selected="selected"'; } ?>><?php echo $sidebaradd[$i] ?></option>
							<?php } ?>
							
						</select>
						<div class="description"><?php _e('<br />select custom <strong>"right sidebar"</strong> for this testimonial.', 'my_framework'); ?></div>
						</div>
						<!-- end of #testisidebarright -->
						
						<div class="sidebar-selection-left row">
						<?php $testisidebarleft = get_post_meta($post->ID, 'testisidebarleft', true); ?>
						<select name="testisidebarleft">
							<option value="sidebar-left" <?php if ($testisidebarleft=='sidebar-left') { echo 'selected="selected"'; } ?>><?php _e('main left', 'my_framework'); ?></option>
							
							<?php $sidebaradd = explode('|', $sidebaradds); for ($i=0; $i<sizeof($sidebaradd)-1 ;$i++) { ?>
							<option value="<?php echo $sidebaradd[$i] ?>" <?php if ($testisidebarleft==$sidebaradd[$i]) { echo 'selected="selected"'; } ?>><?php echo $sidebaradd[$i] ?></option>
							<?php } ?>
							
						</select>
						<div class="description"><?php _e('<br />select custom <strong>"left sidebar"</strong> for this testimonial.', 'my_framework'); ?></div>
						</div>
						<!-- end of #testisidebarleft -->
					</div>
					
				</div>
				<!-- end of #testisidebar -->
				
				
				<div id="testi-author" class="pa-option">
					<h4><?php _e('Author destails', 'my_framework'); ?></h4>
					
					<div class="row">
					<?php $testipost = get_post_meta($post->ID, 'testipost', true); ?>
					<input type="text" name="testipost" id="testipost" size="4" value="<?php echo $testipost; ?>" />
					<div class="description"><?php _e('<br />type <strong>"post of author"</strong> here.', 'my_framework'); ?></div>
					</div>
					
					<div class="row">
					<?php $testicompany = get_post_meta($post->ID, 'testicompany', true); ?>
					<input type="text" name="testicompany" id="testicompany" size="4" value="<?php echo $testicompany; ?>" />
					<div class="description"><?php _e('<br />type <strong>"company name"</strong> here.', 'my_framework'); ?></div>
					</div>
					
					<div class="row">
					<?php $testiurl = get_post_meta($post->ID, 'testiurl', true); ?>
					<input type="text" name="testiurl" id="testiurl" size="4" class="w500" value="<?php echo $testiurl ?>" />
					</div>
					<div class="description full"><?php _e('<br />place <strong>"website url"</strong> here. <strong>without "http://"</strong>', 'my_framework'); ?></div>
					
				</div>
				<!-- end of #testiurl -->
				
				
				<div id="testiimage-on-off" class="pa-option">
					<h4><?php _e('Display image', 'my_framework'); ?></h4>
					<div class="row w110">
					<?php $testiimageonoff = get_post_meta($post->ID, 'testiimageonoff', true); ?>
					<label for="testiimageonoff" class="testiimage-onoff"></label>
					<input type="hidden" name="testiimageonoff" value="false" />
					<input type="checkbox" name="testiimageonoff" id="testiimageonoff" value="true" <?php if ($testiimageonoff=='true' || !$testiimageonoff) { echo 'checked="checked"'; } ?> />
					</div>
					<div class="description"><?php _e('<br />use this option for show or hide author image.', 'my_framework'); ?></div>
				</div>
				<!-- end of #testiimage-on-off -->
			
			</div>
			<!-- end of #testioption-section -->
			
			
		</div>
		<!-- end of .custom-form -->
			

<?php
}

/* When the testi is saved, saves our custom data */
function pa_save_testidata( $post_id ) {
	
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
	
	$testimonialoptions = array(
	'testisidebar',
	'testisidebarright',
	'testisidebarleft',
	'testipost',
	'testicompany',
	'testiurl',
	'testiimageonoff');
	
	foreach ($testimonialoptions as $testimonialoption) {	
	if (isset($_POST[$testimonialoption])) update_post_meta($post_id, $testimonialoption, $_POST[$testimonialoption]);
	}
}
?>