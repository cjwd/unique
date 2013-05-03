<?php
/* ----------------------------------------

	Plugin Name: PersianArt Latest Posts Widget
	Description: Show latest posts, portfolios and testimonials
	Version: 1.0
	Author: PersianArt 
	Author URL: http://www.PersiTheme.com/

---------------------------------------- */

// register widget and add it
add_action( 'widgets_init', 'PersianArt_CyclePosts_widget' );
function PersianArt_CyclePosts_widget() {
	register_widget( 'PersianArt_CyclePosts' );
}

class PersianArt_CyclePosts extends WP_Widget {
	// constructor
    function PersianArt_CyclePosts() {
        parent::WP_Widget(false, 'PersianArt - Cycle Posts', array('description' => __('Show latest posts, portfolios and testimonials', 'my_framework')));
    }

	// widget
    function widget($args, $instance) {		
        extract($args);
        $title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts','my_framework') : $instance['title']);
		$limit = apply_filters('widget_limit', empty($instance['limit']) ? '' : $instance['limit']);
		$category = apply_filters('widget_category', empty($instance['category']) ? '' : $instance['category']);
		$numpost = apply_filters('widget_numpost', empty($instance['numpost']) ? '3' : $instance['numpost']);

	echo $before_widget;
	if ( $title ) echo $before_title . $title . $after_title;
?>

<?php if($category=="testimonial"){ ?>
<?php $rand= rand(); ?>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#testimonial-widget-<?php echo $rand; ?>").jCarouselLite({
			btnNext:"#testimonial-cycle-widget .next",
			btnPrev:"#testimonial-cycle-widget .prev",
			auto:false,
			speed:800,
			visible:1
		});
	});
</script>
<div id="testimonial-cycle-widget">
	<div class="testimonial-widget-nav">
		<div class="next"></div>
		<div class="prev"></div>
	</div>
	<div id="testimonial-widget-<?php echo $rand; ?>">
		<ul>
			<?php
			$limittext = $limit;
			global $more; $more = 0;
			query_posts('posts_per_page='.$numpost.'&post_type='.$category);
			while (have_posts()) : the_post();
			
			$testiimageonoff = get_post_meta(get_the_ID(), 'testiimageonoff', true);
			$testiauthor = get_post_meta(get_the_ID(), 'testiauthor', true);
			?>
			<li class="testimonial testi-widget<?php if (!$testiimageonoff) echo ' testi-noimage'; ?>">
				<?php if ($testiimageonoff) { ?>
				<div class="testi-pic">
					<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('90x90'); ?></a>
				</div>
				<?php } ?>
				<div>
				<?php if($limittext=="" || $limittext==0) the_excerpt(); else { $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); } ?>
				<span class="testi-name">
					<span class="testi-user">
					<?php the_title(); ?>
					</span> <br />
					<a href="<?php echo 'http://'.$testiauthor; ?>"> <?php echo $testiauthor; ?> </a>
				</span>
				</div>
			</li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
	</div>
</div>
<?php /* =============== end of Testimonial =============== */ ?>

<?php } elseif($category=="portfolio"){ ?>
<ol class="portfolio-cycle-widget">
	<?php
	$limittext = $limit;
	global $more; $more = 0;
	query_posts('posts_per_page='.$numpost.'&post_type='.$category);
	while (have_posts()) : the_post();
	
	$portthumbtype = get_post_meta(get_the_ID(), 'portthumbtype', true);
	$portthumbimage = get_post_meta(get_the_ID(), 'portthumbimage', true);
	$portthumbvideo = get_post_meta(get_the_ID(), 'portthumbvideo', true);
	$portthumbslider = get_post_meta(get_the_ID(), 'portthumbslider', true);
	$portthumbimageurl = get_post_meta(get_the_ID(), 'portthumbimageurl', true);
	
	$width=90; $height=60;
?>
	<li class="widget-recent-portfolio-wrapper">
		<div class="widget-recent-portfolio">
			<div class="details-wrap">
			<div class="shadow">
				<div class="date">
					<span><?php the_time('M'); ?></span>
					<span><?php the_time('j'); ?></span>
					<span><?php the_time('Y'); ?></span>
				</div>
				<?php if (($portthumbtype == "image" && has_post_thumbnail()) || ($portthumbtype == "video" && $portthumbvideo) || ($portthumbtype == "slider" && $portthumbslider)) { ?>
					<div class="featured-thumbnail">
						<div class="image-wrap">
							<?php if ($portthumbtype == "image") echo create_image ($portthumbimage, '', $width, $height); ?>
							<?php if ($portthumbtype == "video") echo create_video ($portthumbvideo, $width, $height); ?>
							<?php if ($portthumbtype == "slider") echo create_slider ($portthumbslider, $width, $height); ?>
						</div>
					</div>
					<!-- end of .featured-thumbnail -->
					<?php } ?>
				</div>
				<div class="tilte">
					<h5>
					<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
					</h5>
				</div>
			</div>
			<?php if($limittext!="" || $limittext!=0){ ?>
			<div class="excerpt">
				<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); ?>
			</div>
			<?php } ?>
		</div>
	</li>
	<!-- end of .footer-recent-portfolio-wrpper -->
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
</ol>
<?php /* =============== end of portfolio =============== */ ?>

<?php } else { ?>
<ol class="post-cycle-widget">
	<?php
	$limittext = $limit;
	global $more; $more = 0;
	query_posts('posts_per_page='.$numpost.'&post_type='.$category);
	while (have_posts()) : the_post();
	
	// get variables
	$postthumbtype = get_post_meta(get_the_ID(), 'postthumbtype', true);
	$postthumbimage = get_post_meta(get_the_ID(), 'postthumbimage', true);
	$postthumbvideo = get_post_meta(get_the_ID(), 'postthumbvideo', true);
	$postthumbslider = get_post_meta(get_the_ID(), 'postthumbslider', true);
	
	$width=80; $height=50;
?>
	<li class="post-widget-item">
		<?php if ($limittext=="") $limittext=15; ?>
		<div class="details-wrap">
			<?php if (($postthumbtype == "image" && has_post_thumbnail()) || ($postthumbtype == "video" && $postthumbvideo) || ($postthumbtype == "slider" && $postthumbslider)) { ?>
			<div class="featured-thumbnail">
				<div class="image-wrap">
					<?php if ($postthumbtype == "image") echo create_image ($postthumbimage, '', $width, $height); ?>
					<?php if ($postthumbtype == "video") echo create_video ($postthumbvideo, $width, $height); ?>
					<?php if ($postthumbtype == "slider") echo create_slider ($postthumbslider, $width, $height); ?>
				</div>
			</div>
			<!-- end of .featured-thumbnail -->
			<?php } ?>
			<div class="tilte">
				<h5>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h5>
			</div>
		</div>
		<div class="excerpt">
		<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); ?>
		</div>
	</li>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
</ol>
<?php /* =============== end of post =============== */ ?>
<?php } ?>
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
		<?php _e('Post Type:', 'my_framework'); ?>
		<select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" style="width:226px;" >
			<option value="" <?php echo ($category === '' ? ' selected="selected"' : ''); ?>>Blog</option>
			<option value="portfolio" <?php echo ($category === 'portfolio' ? ' selected="selected"' : ''); ?> >Portfolio</option>
			<option value="testimonial" <?php echo ($category === 'testimonial' ? ' selected="selected"' : ''); ?>>Testimonial</option>
		</select>
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id('numpost'); ?>">
		<?php _e('Number of posts to show:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('numpost'); ?>" name="<?php echo $this->get_field_name('numpost'); ?>" type="text" value="<?php echo $numpost; ?>" />
	</label>
</p>
<?php 
    }
}
?>
