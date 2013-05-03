<?php
/* ----------------------------------------

	Plugin Name: PersianArt Flickr Widget
	Description: Show flickr photo
	Version: 1.0
	Author: PersianArt 
	Author URL: http://www.PersiTheme.com/

---------------------------------------- */

// register widget and add it
add_action( 'widgets_init', 'PersianArt_Flickr_widget' );
function PersianArt_Flickr_widget() {
	register_widget( 'PersianArt_Flickr' );
}

class PersianArt_Flickr extends WP_Widget {
	// constructor
    function PersianArt_Flickr() {
        parent::WP_Widget(false, 'PersianArt - Flickr', array('description' => __('a simple flickr widget to demonstrate the Widget API', 'my_framework')));
    }

	// widget
    function widget($args, $instance) {
 		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Flickr Widget','my_framework') : $instance['title']);
		$flickrid = apply_filters('widget_flickrid', empty($instance['flickrid']) ? '' : $instance['flickrid']);
		$limit = apply_filters('widget_limit', empty($instance['limit']) ? '6' : $instance['limit']);
		$dimension = apply_filters('widget_dimension', empty($instance['dimension']) ? '61' : $instance['dimension']);
		$preview = apply_filters('widget_preview', empty($instance['preview']) ? __('no','my_framework') : $instance['preview']);

	echo $before_widget;
	if ( $title ) echo $before_title . $title . $after_title;
	$rand = rand();
?>

	<div id="flickr-widget-<?php echo $rand; ?>" class="flickr-widget"></div>

	<script type="text/javascript">
	jQuery(document).ready(function($){
		jQuery.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?ids=<?php echo $flickrid; ?>&lang=en-us&format=json&jsoncallback=?", function(data){
			jQuery.each(data.items, function(index, item){
			var a = item.media.m;
			q = a.replace("_m.", "_q.");
			m = a.replace("_m.", "<?php if ($preview!='no') echo $preview; ?>.");
			jQuery("<img/>").attr("src", q).attr("width", <?php echo $dimension; ?>).attr("height", <?php echo $dimension; ?>).appendTo("#flickr-widget-<?php echo $rand; ?>")
			.wrap("<a class='flickr-image' href='" + item.link + "' alt='" + m + "'></a>");
			if ( index == <?php echo $limit-1; ?> ) return false;
			});
			<?php if ($preview!='no') { ?> imagePreview(); <?php } ?>
		});
	});
	</script>

<?php echo $after_widget; ?>

<?php
	}

	// Update
    function update($new_instance, $old_instance) {			
        return $new_instance;
	}

	// form
	function form($instance) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$flickrid = isset($instance['flickrid']) ? esc_attr($instance['flickrid']) : '';
		$limit = isset($instance['limit']) ?  esc_attr($instance['limit']) : '';
		$dimension = isset($instance['dimension']) ? esc_attr($instance['dimension']) : '';
		$preview = isset($instance['preview']) ? esc_attr($instance['preview']) : '';
?>
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">
		<?php _e('Title:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id('flickrid'); ?>">
		<?php _e('Your Flickr User ID:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('flickrid'); ?>" name="<?php echo $this->get_field_name('flickrid'); ?>" type="text" value="<?php echo $flickrid; ?>" />
	</label>
	<?php _e('<small>To find your ID go to <a href="http://idgettr.com">idgettr</a>.</small>', 'my_framework'); ?>
</p>
<p>
	<label for="<?php echo $this->get_field_id('limit'); ?>">
		<?php _e('Number of Photo', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" type="text" value="<?php echo $limit; ?>" />
	</label>
	<?php _e('<small>Maximum 20.</small>', 'my_framework'); ?>
</p>
<p>
	<label for="<?php echo $this->get_field_id('dimension'); ?>">
		<?php _e('Dimension', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('dimension'); ?>" name="<?php echo $this->get_field_name('dimension'); ?>" type="text" value="<?php echo $dimension; ?>" />
	</label>
	<?php _e('<small>Maximum 150.</small>', 'my_framework'); ?>
</p>
<p>
	<label for="<?php echo $this->get_field_id('preview'); ?>">
		<?php _e('Preview Size', 'my_framework'); ?>
		<select id="<?php echo $this->get_field_id('preview'); ?>" name="<?php echo $this->get_field_name('preview'); ?>" style="width:226px;">
			<option value="no" <?php if ($preview=='no') { echo 'selected="selected"'; } ?>>No Preview</option>
			<option value="_t" <?php if ($preview=='_t') { echo 'selected="selected"'; } ?>>Thumbnail</option>
			<option value="_m" <?php if ($preview=='_m') { echo 'selected="selected"'; } ?>>Small 240</option>
			<option value="_n" <?php if ($preview=='_n') { echo 'selected="selected"'; } ?>>Small 320</option>
			<option value="" <?php if ($preview=='') { echo 'selected="selected"'; } ?>>Medium 500</option>
			<option value="_z" <?php if ($preview=='_z') { echo 'selected="selected"'; } ?>>Medium 640</option>
			<option value="_c" <?php if ($preview=='_c') { echo 'selected="selected"'; } ?>>Medium 800</option>
			<option value="_b" <?php if ($preview=='_b') { echo 'selected="selected"'; } ?>>Large 1024</option>
		</select>
	</label>
	<?php _e('<small>These are flickr special sizes</small>', 'my_framework'); ?>
</p>
<?php
	}
}
?>