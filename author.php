<?php

get_header();

$themestyle = (get_option('mytheme_themestyle'));
$pagesidebar = get_option('mytheme_sidebarauthor');
$pagesidebarleft='sidebar-left';
$pagesidebarright='sidebar-right';

if(isset($_GET['author_name'])) {
	$curauth = get_userdatabylogin($author_name);
} else {
	$curauth = get_userdata(intval($author));
}

?>

<div id="main" class="<?php if ($themestyle == 'block') echo 'container_12'; ?>">
<div id="sub-main" class="<?php if ($themestyle != 'block') echo 'container_12'; ?>">

	<div class="h-wrapper h1 grid_12"><h1><?php _e('Recent Posts by ', 'my_framework'); echo $curauth->display_name; ?><span class="line"></span></h1></div>
			
	<div id="content" class="<?php if ($pagesidebar == 'right') { echo 'grid_8'; } elseif ($pagesidebar == 'left') { echo 'grid_8 fright'; } elseif ($pagesidebar == 'both') { echo 'grid_6 bothmiddle';} else { echo 'grid_12'; } ?>">
		
		<div class="author-info">
			<div class="authorDescription">
				<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('ID'), $size='75'); } /* Displays the Gravatar based on the author's email address. */ ?>
				<!-- end of .avatar -->
				<h3><?php _e('About: ', 'my_framework'); echo $curauth->display_name; ?></h3>
				<?php if($curauth->description !='') /* Displays the author's description from their Wordpress profile */
				 echo $curauth->description;
				?>
			</div>
		</div>
		<!-- end of .author-info -->
			
		<div id="recent-author-posts" class="posts">
			<?php $posts_counter = 0; ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); $posts_counter++;
	
				// get variables
				if ( get_post_type() == 'portfolio' ) {
					$postthumbtype = get_post_meta($post->ID, 'portthumbtype', true);
					$postthumbimage = get_post_meta($post->ID, 'portthumbimage', true);
					$postthumbvideo = get_post_meta($post->ID, 'portthumbvideo', true);
					$postthumbslider = get_post_meta($post->ID, 'portthumbslider', true);
				} else {
					$postthumbtype = get_post_meta($post->ID, 'postthumbtype', true);
					$postthumbimage = get_post_meta($post->ID, 'postthumbimage', true);
					$postthumbvideo = get_post_meta($post->ID, 'postthumbvideo', true);
					$postthumbslider = get_post_meta($post->ID, 'postthumbslider', true);
				}
				
				$blogstyle = 'full';
				$bloglentitle = '';
				$bloglenexcerpt = '';
				
				if ($blogstyle == 'half') {
					if ($pagesidebar == 'no') { $width=570; $height=240; if ($bloglentitle == '') $bloglentitle = '60'; if ($bloglenexcerpt == '') $bloglenexcerpt = '60'; }
					elseif ($pagesidebar == 'both') { $width=270; $height=240; if ($bloglentitle == '') $bloglentitle = '30'; if ($bloglenexcerpt == '') $bloglenexcerpt = '27'; }
					else { $width=370; $height=240; if ($bloglentitle == '') $bloglentitle = '38'; if ($bloglenexcerpt == '') $bloglenexcerpt = '34'; }
				} else {
					if ($pagesidebar == 'no') { $width=940; $height=240; if ($bloglentitle == '') $bloglentitle = '88'; if ($bloglenexcerpt == '') $bloglenexcerpt = '64'; }
					elseif ($pagesidebar == 'both') { $width=460; $height=240; if ($bloglentitle == '') $bloglentitle = '42'; if ($bloglenexcerpt == '') $bloglenexcerpt = '28'; }
					else { $width=620; $height=240; if ($bloglentitle == '') $bloglentitle = '56'; if ($bloglenexcerpt == '') $bloglenexcerpt = '39'; }
				}
		
				?>
				<div id="post-<?php the_ID(); ?>" class="posts <?php if ($blogstyle == 'half') echo 'halfstyle'; elseif ($blogstyle == 'full') echo 'fullstyle'; ?>">
					
					<?php if (($postthumbtype == 'image' && has_post_thumbnail()) || ($postthumbtype == 'video' && $postthumbvideo) || ($postthumbtype == 'slider' && $postthumbslider)) { ?>
					<div class="featured-thumbnail-wrapper <?php echo $postthumbtype; ?>">
						<div class="date-wrapper">
							<div class="date-wrap">
								<span><?php the_time('j'); ?></span>
								<span><?php the_time('M'); ?></span>
								<span><?php the_time('Y'); ?></span>
							</div>
							<span class="triangle"></span>
						</div>
						<div class="featured-thumbnail">
							<div class="image-wrap">
								<?php if ($postthumbtype == 'image') echo create_image ($postthumbimage, '', $width, $height); ?>
								<?php if ($postthumbtype == 'video') echo create_video ($postthumbvideo, $width, $height); ?>
								<?php if ($postthumbtype == 'slider') echo create_slider ($postthumbslider, $width, $height); ?>
							</div>
						</div>
						<!-- end of .featured-thumbnail -->
					</div>
					<!-- end of .featured-thumbnail-wrapper -->
					<?php } ?>
					
					<h2><a href="<?php the_permalink(); ?>"><?php $title = the_title('','',false); echo substr($title, 0, $bloglentitle); ?></a></h2>
					<div class="excerpt">
						<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$bloglenexcerpt); ?>
						<?php wp_link_pages('before=<p class="pagelink">Pages:', 'after=</p>'); ?>
					</div>
			
					<div class="post-info-wrapper">
						<div class="post-icon <?php if ($postthumbtype=='slider') echo 'slider'; else if ($postthumbtype=='video') echo 'video'; ?>"></div>
						<div class="post-info">
							<span class="author">
								<?php the_author_posts_link() ?>
							</span>
							<?php the_tags( '<span class="tags">', ', ', '</span>' ); ?>
							<span class="comment">
								<?php comments_number(__('No Comments', 'my_framework'), __('1 Comments', 'my_framework'), __('% Comments', 'my_framework')); ?>
							</span>
							
							<div class="posts-link"><a href="<?php the_permalink(); ?>"><?php _e('Continue Reading', 'my_framework'); ?></a></div>
						</div>
					</div>
					<!-- end of .post-info-wrapper -->
				</div>
			<?php endwhile; else: ?>
			<p><?php _e('No posts by ', 'my_framework'); ?><?php echo $curauth->display_name; ?><?php _e('yet.', 'my_framework'); ?></p>
			<?php endif; ?>
		</div>
		<!-- end of #recent-author-posts -->
		<?php if ($wp_query->max_num_pages > 1) {
			if (function_exists('pagination')) pagination();
		} ?>
	</div>
	<!-- end of #content -->
		<?php get_sidebar('left'); ?>
		<?php get_sidebar('right'); ?>
</div>
</div>
<!-- end of #main -->
<?php get_footer(); ?>