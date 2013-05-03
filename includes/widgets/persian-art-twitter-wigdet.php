<?php
/* ----------------------------------------

	Plugin Name: PersianArt Twitter Widget
	Description: Show twitter messages
	Version: 1.0
	Author: PersianArt 
	Author URL: http://www.PersiTheme.com/

---------------------------------------- */

// register widget and add it
add_action( 'widgets_init', 'PersianArt_Twitter_widget' );
function PersianArt_Twitter_widget() {
	register_widget( 'PersianArt_Twitter' );
}

class PersianArt_Twitter extends WP_Widget {
	// constructor
    function PersianArt_Twitter() {
        parent::WP_Widget(false, 'PersianArt - Twitter', array('description' => __('a simple twitter widget', 'my_framework')));
    }

	// widget
    function widget($args, $instance) {
 		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Twitter Feed','my_framework') : $instance['title']);
		$twitterid = apply_filters('widget_twitterid', empty($instance['twitterid']) ? '' : $instance['twitterid']);
		$count = apply_filters('widget_count', empty($instance['count']) ? '3' : $instance['count']);

	echo $before_widget;
	if ( $title ) echo $before_title . $title . $after_title;
?>

	<div id="twitter-div">
		<ol id="twitter_update_list"><li><?php _e('Twitter feed loading', 'my_framework'); ?></li></ol>
	</div>

<?php echo $after_widget; ?>

	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="https://api.twitter.com/1/statuses/user_timeline/<?php echo $twitterid;?>.json?callback=twitterCallback2&amp;count=<?php echo $count;?>"></script>

<?php
	}

	// Update
    function update($new_instance, $old_instance) {			
        return $new_instance;
	}

	// form
	function form($instance) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$twitterid = isset($instance['twitterid']) ? esc_attr($instance['twitterid']) : '';
		$count = isset($instance['count']) ? esc_attr($instance['count']) : '';
?>
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">
		<?php _e('Title:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id('twitterid'); ?>">
		<?php _e('Your Twitter User Name:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('twitterid'); ?>" name="<?php echo $this->get_field_name('twitterid'); ?>" type="text" value="<?php echo $twitterid; ?>" />
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id('count'); ?>">
		<?php _e('Number of Tweet', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" />
	</label>
</p>
<?php
	}
}
?>