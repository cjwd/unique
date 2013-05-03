<?php
/* ----------------------------------------

	Plugin Name: PersianArt Recent Posts Widget
	Description: Show latest posts
	Version: 1.0
	Author: PersianArt 
	Author URL: http://www.PersiTheme.com/

---------------------------------------- */

// register widget and add it
add_action( 'widgets_init', 'PersianArt_RecentPosts_widget' );
function PersianArt_RecentPosts_widget() {
	register_widget( 'PersianArt_RecentPosts' );
}

class PersianArt_RecentPosts extends WP_Widget {
	// constructor
    function PersianArt_RecentPosts() {
        parent::WP_Widget(false, 'PersianArt - Recent Posts', array('description' => __('Show latest posts', 'my_framework')));	
    }

	// widget
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts','my_framework') : $instance['title']);
        $limit = apply_filters('widget_limit', empty($instance['limit']) ? '9' : $instance['limit']);
		$category = apply_filters('widget_category', empty($instance['category']) ? '' : $instance['category']);
		$numpost = apply_filters('widget_numpost', empty($instance['numpost']) ? '3' : $instance['numpost']);
		$linktext = apply_filters('widget_linktext', empty($instance['linktext']) ? '' : $instance['linktext']);
		$linkurl = apply_filters('widget_linkurl', empty($instance['linkurl']) ? '' : $instance['linkurl']);

	echo $before_widget;
	if ( $title ) echo $before_title . $title . $after_title;
?>

<?php
	query_posts('showposts='.$numpost.'&post_type=post&category_name='.$category);
	if (have_posts()) :
?>

<ol class="widget-recent-post">
	<?php while (have_posts()) : the_post(); ?>
	<li>
		<span class="date">
			<?php the_time('F j, Y') ?>
		</span>
		<div class="details-wrap">
			<h5>
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h5>
			<div class="excerpt">
			<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt, $limit);?>
			</div>
		</div>
		<a class="morelink" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php _e('read more', 'my_framework');?></a>
	</li>
	<?php endwhile; ?>
</ol>
<?php endif; ?>
<?php if($linkurl !=""){ /* Print a link to this category */?>
<span class="text-styled">
	<a href="<?php echo $linkurl; ?>">
		<?php echo $linktext; ?>
	</a>
</span>
<?php } ?>
<?php wp_reset_query();?>
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
		$limit = isset($instance['limit']) ? esc_attr($instance['limit']) : '';
		$category = isset($instance['category']) ? esc_attr($instance['category']) : '';
		$numpost = isset($instance['numpost']) ? esc_attr($instance['numpost']) : '';
		$linktext = isset($instance['linktext']) ? esc_attr($instance['linktext']) : '';
		$linkurl = isset($instance['linkurl']) ? esc_attr($instance['linkurl']) : '';
?>
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">
		<?php _e('Title:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id('limit'); ?>">
		<?php _e('Limit Text:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" type="text" value="<?php echo $limit; ?>" />
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id('category'); ?>">
		<?php _e('Select Category:', 'my_framework'); ?>
		<select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" style="width:226px;">
			<option value="" <?php if ($category=='') { echo 'selected="selected"'; } ?> >all</option>
			<?php
			$category_ids = get_all_category_ids();
			foreach($category_ids as $cat_id) { $cat_name = get_cat_name($cat_id); ?>
			<option value="<?php echo $cat_name; ?>" <?php if ($category==$cat_name) { echo 'selected="selected"'; } ?>><?php echo $cat_name; ?></option>
			<?php } ?>
		</select>
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id('numpost'); ?>">
		<?php _e('Number of posts to show:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('numpost'); ?>" name="<?php echo $this->get_field_name('numpost'); ?>" type="text" value="<?php echo $numpost; ?>" />
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id('linktext'); ?>">
		<?php _e('Link Text:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('linktext'); ?>" name="<?php echo $this->get_field_name('linktext'); ?>" type="text" value="<?php echo $linktext; ?>" />
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id('linkurl'); ?>">
		<?php _e('Link Url:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('linkurl'); ?>" name="<?php echo $this->get_field_name('linkurl'); ?>" type="text" value="<?php echo $linkurl; ?>" />
	</label>
</p>
<?php 
    }
}
?>
