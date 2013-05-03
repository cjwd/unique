<?php



get_header();



$themestyle = (get_option('mytheme_themestyle'));

$pagesidebar = get_option('mytheme_sidebararchive');

$pagesidebarleft='sidebar-left';

$pagesidebarright='sidebar-right';



?>



<div id="main" class="<?php if ($themestyle == 'block') echo 'container_12'; ?>">

<div id="sub-main" class="<?php if ($themestyle != 'block') echo 'container_12'; ?>">



	<div class="h-wrapper h1 grid_12"><h1>

		<?php if ( is_day() ) : /* if the daily archive is loaded */ ?>

		<?php printf( __('Daily Archives: <span>%s</span>', 'my_framework'), get_the_date() ); ?>

		<?php elseif ( is_month() ) : /* if the montly archive is loaded */ ?>

		<?php printf( __('Monthly Archives: <span>%s</span>', 'my_framework'), get_the_date('F Y') ); ?>

		<?php elseif ( is_year() ) : /* if the yearly archive is loaded */ ?>

		<?php printf( __('Yearly Archives: <span>%s</span>', 'my_framework'), get_the_date('Y') ); ?>

		<?php else : /* if anything else is loaded, ex. if the tags or categories template is missing this page will load */ ?>

		<?php _e('Archives', 'my_framework'); ?>

		<?php endif; ?>

	<span class="line"></span></h1></div>

		

	<div id="content" class="<?php if ($pagesidebar == 'right') { echo 'grid_8'; } elseif ($pagesidebar == 'left') { echo 'grid_8 fright'; } elseif ($pagesidebar == 'both') { echo 'grid_6 bothmiddle';} else { echo 'grid_12'; } ?>">

		<?php if (have_posts()) : while (have_posts()) : the_post();

	

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

		<div class="no-results">

			<p><strong><?php _e('There has been an error.', 'my_framework'); ?></strong></p>

			<p><?php _e('We apologize for any inconvenience, please ', 'my_framework'); ?>

			<a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>"><?php _e('return to the home page', 'my_framework'); ?></a>

			<?php _e('or use the search form below.', 'my_framework'); ?></p>

			<?php get_search_form(); ?>

			<!-- outputs the default Wordpress search form -->

		</div>

		<!-- end of .no-results -->

		<?php endif; ?>

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