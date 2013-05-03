<?php 

get_header(); 

	$themestyle = (get_option('mytheme_themestyle'));
?>

<div id="main" class="<?php if ($themestyle == 'block') echo 'container_12'; ?>">
<div id="sub-main" class="<?php if ($themestyle != 'block') echo 'container_12'; ?>">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php // get variables 
	
	$sidebarsingleport = get_option('mytheme_sidebarsingleport');
	$sidebarsinglepost = get_option('mytheme_sidebarsinglepost');
	$testisidebar = get_post_meta($post->ID, 'testisidebar', true);
	$testisidebarright = get_post_meta($post->ID, 'testisidebarright', true);
	$testisidebarleft = get_post_meta($post->ID, 'testisidebarleft', true);
	$testiimageonoff = get_post_meta($post->ID, 'testiimageonoff', true);
	$testiauthor = get_post_meta($post->ID, 'testiauthor', true);
	
	$portpageonoff = get_option('mytheme_portpageonoff');
	$portsidebar = get_post_meta($post->ID, 'portsidebar', true);
	$portstyle = get_post_meta($post->ID, 'portstyle', true);
	$portsidebarright = get_post_meta($post->ID, 'portsidebarright', true);
	$portsidebarleft = get_post_meta($post->ID, 'portsidebarleft', true);
	$portclient = get_post_meta($post->ID, 'portclient', true);
	$portskills = get_post_meta($post->ID, 'portskills', true);
	$portwebsite = get_post_meta($post->ID, 'portwebsite', true);
	$portauthor = get_post_meta($post->ID, 'portauthoronoff', true);
	$portsocial = get_post_meta($post->ID, 'portsocialonoff', true);
	$portrelated = get_post_meta($post->ID, 'portrelatedonoff', true);
	$porttitleplace = get_post_meta($post->ID, 'porttitleplace', true);
	$portpaginateplace = get_post_meta($post->ID, 'portpaginateplace', true);
	$portpaginatetitle = get_post_meta($post->ID, 'portpaginatetitle', true);
	$portpaginatealign = get_post_meta($post->ID, 'portpaginatealign', true);
	$portthumbtype = get_post_meta($post->ID, 'portthumbtype', true);
	$portthumbimage = get_post_meta($post->ID, 'portthumbimage', true);
	$portthumbimageurl = get_post_meta($post->ID, 'portthumbimageurl', true);
	$portthumbvideo = get_post_meta($post->ID, 'portthumbvideo', true);
	$portthumbslider = get_post_meta($post->ID, 'portthumbslider', true);
	$portinthumbtype = get_post_meta($post->ID, 'portinthumbtype', true);
	$portinthumbimage = get_post_meta($post->ID, 'portinthumbimage', true);
	$portinthumbvideo = get_post_meta($post->ID, 'portinthumbvideo', true);
	$portinthumbslider = get_post_meta($post->ID, 'portinthumbslider', true);
	
	$postsidebar = get_post_meta($post->ID, 'postsidebar', true);
	$postsidebarright = get_post_meta($post->ID, 'postsidebarright', true);
	$postsidebarleft = get_post_meta($post->ID, 'postsidebarleft', true);
	$postauthor = get_post_meta($post->ID, 'postauthoronoff', true);
	$postsocial = get_post_meta($post->ID, 'postsocialonoff', true);
	$postrelated = get_post_meta($post->ID, 'postrelatedonoff', true);
	$posttitleplace = get_post_meta($post->ID, 'posttitleplace', true);
	$postpaginateplace = get_post_meta($post->ID, 'postpaginateplace', true);
	$postpaginatetitle = get_post_meta($post->ID, 'postpaginatetitle', true);
	$postpaginatealign = get_post_meta($post->ID, 'postpaginatealign', true);
	$postthumbtype = get_post_meta($post->ID, 'postthumbtype', true);
	$postthumbvideo = get_post_meta($post->ID, 'postthumbvideo', true);
	$postthumbslider = get_post_meta($post->ID, 'postthumbslider', true);
	$postinthumbtype = get_post_meta($post->ID, 'postinthumbtype', true);
	$postinthumbimage = get_post_meta($post->ID, 'postinthumbimage', true);
	$postinthumbvideo = get_post_meta($post->ID, 'postinthumbvideo', true);
	$postinthumbslider = get_post_meta($post->ID, 'postinthumbslider', true);
	
	if ($postinthumbtype == 'normal') {
		$postinthumbtype = $postthumbtype;
		$postinthumbimage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		$postinthumbimage = $postinthumbimage[0];
		$postinthumbvideo = $postthumbvideo;
		$postinthumbslider = $postthumbslider;
	}
	
	if ($portinthumbtype == 'normal') {
		$portinthumbtype = $portthumbtype;
		$portinthumbimage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		$portinthumbimage = $portinthumbimage[0];
		$portinthumbvideo = $portthumbvideo;
		$portinthumbslider = $portthumbslider;
	}
	
	if ( get_post_type() == 'testimonial' ) {
		$pagesidebar = $testisidebar;
		$pagesidebarleft = $testisidebarleft;
		$pagesidebarright = $testisidebarright;
		
		if ($pagesidebar == 'right') $class='grid_8';
		elseif ($pagesidebar == 'left') $class='grid_8 fright';
		elseif ($pagesidebar == 'both') $class='grid_6 bothmiddle';
		else $class='grid_12';
	}
	
	if ( get_post_type() == 'post' ) {
		if (!$postsidebar || $postsidebar == '') $pagesidebar = $sidebarsinglepost; else $pagesidebar = $postsidebar;
		$pagesidebarleft = $postsidebarleft;
		$pagesidebarright = $postsidebarright;
		
		if ($pagesidebar == 'right') { $width=620; $height=320; $class='grid_8'; $relclass='col3'; $relwidth='187'; $relheight='100'; $relnum='3'; }
		elseif ($pagesidebar == 'left') { $width=620; $height=320; $class='grid_8 fright'; $relclass='col3'; $relwidth='187'; $relheight='100'; $relnum='3'; }
		elseif ($pagesidebar == 'both') { $width=460; $height=320; $class='grid_6 bothmiddle'; $relclass='col2'; $relwidth='210'; $relheight='100'; $relnum='2'; }
		else { $width=940; $height=320; $class='grid_12'; $relclass=''; $relwidth='215'; $relheight='100'; $relnum='4'; }
	}
	
	if ( get_post_type() == 'portfolio' ) {
		
		if ($portpageonoff=='true') {
			if (!$portsidebar || $portsidebar == '') $pagesidebar = $sidebarsingleport; else $pagesidebar = $portsidebar;
			$pagesidebarleft = $portsidebarleft;
			$pagesidebarright = $portsidebarright;
			
			if ($pagesidebar == 'right') { $width=620; $height=320; $class='grid_8'; $relclass='col3'; $relwidth='187'; $relheight='100'; $relnum='3'; }
			elseif ($pagesidebar == 'left') { $width=620; $height=320; $class='grid_8 fright'; $relclass='col3'; $relwidth='187'; $relheight='100'; $relnum='3'; }
			elseif ($pagesidebar == 'both') { $width=460; $height=320; $class='grid_6 bothmiddle'; $relclass='col2'; $relwidth='210'; $relheight='100'; $relnum='2'; }
			else { $width=940; $height=320; $class='grid_12'; $relclass=''; $relwidth='215'; $relheight='100'; $relnum='4'; }
		} else { 
		
		$relclass=''; $relwidth='215'; $relheight='100'; $relnum='4';
		if ($portstyle=='full') { $width='940'; $height='370'; $class='grid_12'; }
		if ($portstyle=='half') { $width='620'; $height='370'; $class='grid_8'; }
		}
	}
	?>
	
	<?php if ( get_post_type() == 'testimonial' ) { /* if it is a testimonial ************************************************************/ ?>
	
	<div id="content" class="<?php echo $class; ?>">
		<div id="testimonialsinglepost" class="testis">
			<div class="testimonial <?php if ($testiimageonoff!='true') echo 'testi-noimage'; ?>">
				<?php if ($testiimageonoff=='true') { ?>
				<div class="testi-pic">
					<a href="#" title=""><?php the_post_thumbnail('120x120'); ?></a>
				</div>
				<?php } ?>
				<?php the_content(); ?>
				<span class="testi-name">
					<span class="testi-user">
						<?php the_title(); ?>
					</span>
					<br />
					<a href="<?php echo 'http://'.$testiauthor; ?>">
						<?php echo $testiauthor; ?>
					</a>
				</span>
			</div>
			<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
		</div>
		<!-- end of #testis -->
		<div class="older-newer">
			<div class="older"><?php previous_post_link('%link', '%title') ?></div>
			<div class="newer fright"><?php next_post_link('%link', '%title') ?></div>
		</div>
		<!-- end of .older-newer-->
		<?php comments_template( '', true ); ?>
	</div>
	<!-- end of #content-->
		<?php get_sidebar('left'); ?>
		<?php get_sidebar('right'); ?>
	<?php } elseif ( get_post_type() == 'portfolio' ) { /* if it is a portfolio ************************************************************/ ?>
	
	<div id="content" class="<?php if ($portpageonoff=='true') echo $class; ?>">
		<div id="portfoliosinglepage" class="ports">
		
			<?php if ($portpaginateplace=='top') { /* display paginate above thumbnail image */?>
			<div class="older-newer <?php if ($portpageonoff=='false') echo 'grid_12'; ?>">
				<?php if ($portpaginatealign!='right') { ?><div class="older"><?php if ($portpaginatetitle=='next-prev') previous_post_link('%link', __('Previous', 'my_framework'), TRUE); else previous_post_link('%link', '%title', TRUE); ?></div><?php } ?>
				<div class="newer <?php if ($portpaginatealign!='left') echo 'fright'; ?>"><?php if ($portpaginatetitle=='next-prev') next_post_link('%link', __('Next', 'my_framework'), TRUE); else next_post_link('%link', '%title', TRUE); ?></div>
				<?php if ($portpaginatealign=='right') { ?><div class="older fright"><?php if ($portpaginatetitle=='next-prev') previous_post_link('%link', __('Previous', 'my_framework'), TRUE); else previous_post_link('%link', '%title', TRUE); ?></div><?php } ?>
			</div>
			<!-- end of .older-newer -->
			<?php } ?>
		
			<?php if ($porttitleplace=='above') { /* display title above thumbnail image */?>
			<div class="single-port <?php if ($portpageonoff!='true') echo 'grid_12'; ?>"><h1 class="tabove"><?php the_title(); ?></h1></div>
			<!-- end of .single-port -->
			<?php } ?>
			<?php if (($portinthumbtype == 'image' && $portinthumbimage) || ($portinthumbtype == 'video' && $portinthumbvideo) || ($portinthumbtype == 'slider' && $portinthumbslider)) { ?>
			<div class="featured-thumbnail-wrapper <?php echo $portinthumbtype; ?> <?php if ($portpageonoff!='true') { if ($portstyle=='half') echo 'grid_8'; else echo 'grid_12'; } ?>">
				<div class="featured-thumbnail">
					<div class="image-wrap">
						<?php if ($portinthumbtype == 'image') echo create_image_inside ($portinthumbimage, $width, $height); ?>
						<?php if ($portinthumbtype == 'video') echo create_video ($portinthumbvideo, $width, $height); ?>
						<?php if ($portinthumbtype == 'slider') echo create_slider ($portinthumbslider, $width, $height); ?>
					</div>
				</div>
				<!-- end of .featured-thumbnail -->
			</div>
			<!-- end of .featured-thumbnail-wrapper -->
			
			<?php if ($portstyle=='half' || $portpageonoff=='true') { /* */?>
			<div id="port-details-wrapper" class="<?php if ($portpageonoff=='true') echo 'blog'; else echo 'grid_4'; ?>">
				<div class="date-wrapper half">
					<div class="post-icon <?php if ($portinthumbtype=='slider') echo 'slider'; else if ($portinthumbtype=='video') echo 'video'; ?>"></div>
					<span><?php the_time('j'); ?></span>
					<span><?php the_time('M'); ?></span>
					<span><?php the_time('Y'); ?></span>
				</div>
				<div id="port-details">
					<span><span class="sub-title"><?php _e('Skills:', 'my_framework'); ?></span> <?php echo $portskills ?></span>
					<span><span class="sub-title"><?php _e('Client:', 'my_framework'); ?></span> <?php echo $portclient ?></span>
					<span><span class="sub-title"><?php _e('Project:', 'my_framework'); ?></span> <a href="<?php echo 'http://'.$portwebsite ?>" title=""><?php echo $portwebsite ?></a></span>
					<span><span class="sub-title"><?php _e('Tags:', 'my_framework'); ?></span> <?php echo get_the_term_list( $post->ID, 'portfolio-category', '', ', ' , '' ); ?></span>
				</div>
			</div>
			<?php } ?>
			<?php } ?>
			<div id="port-content-wrapper">
				<?php if ($portstyle=='full' && $portpageonoff!='true') { /* */?>
				<!-- <div id="port-details-wrapper" class="grid_3">
					<div class="date-wrapper">
						<div class="post-icon <?php if ($portinthumbtype=='slider') echo 'slider'; else if ($portinthumbtype=='video') echo 'video'; ?>"></div>
						<span><?php the_time('j'); ?></span>
						<span><?php the_time('M'); ?></span>
						<span><?php the_time('Y'); ?></span>
					</div>
					<div id="port-details">
						<span><span class="sub-title"><?php _e('Skills:', 'my_framework'); ?></span> <?php echo $portskills ?></span>
						<span><span class="sub-title"><?php _e('Client:', 'my_framework'); ?></span> <?php echo $portclient ?></span>
						<span><span class="sub-title"><?php _e('Project:', 'my_framework'); ?></span> <a href="<?php echo 'http://'.$portwebsite ?>" title=""><?php echo $portwebsite ?></a></span>
						<span><span class="sub-title"><?php _e('Tags:', 'my_framework'); ?></span> <?php echo get_the_term_list( $post->ID, 'portfolio-category', '', ', ' , '' ); ?></span>
					</div>
				</div> -->
				<?php } ?>
				<div class="content-portstyle <?php if ($portpageonoff!='true') { if ($portstyle=='half') echo 'grid_12'; else echo 'grid_12'; } ?>">
					<div class="single-port">
						<?php if ($porttitleplace!='above') { /* display title below thumbnail image */?>
						<h1><?php the_title(); ?></h1>
						<?php } ?>
					</div>
					<div class="post-content port-content <?php if ($porttitleplace=='above') echo 'tabove'; ?>">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		
		<?php if ($portpaginateplace!='top') { /* display paginate below content */?>
		<div class="older-newer mb40 <?php if ($portpageonoff!='true') echo 'grid_12'; ?>">
			<?php if ($portpaginatealign!='right') { ?><div class="older"><?php if ($portpaginatetitle=='next-prev') previous_post_link('%link', __('Previous', 'my_framework')); else previous_post_link('%link', '%title'); ?></div><?php } ?>
			<div class="newer <?php if ($portpaginatealign!='left') echo 'fright'; ?>"><?php if ($portpaginatetitle=='next-prev') next_post_link('%link', __('Next', 'my_framework')); else next_post_link('%link', '%title'); ?></div>
			<?php if ($portpaginatealign=='right') { ?><div class="older fright"><?php if ($portpaginatetitle=='next-prev') previous_post_link('%link', __('Previous', 'my_framework')); else previous_post_link('%link', '%title'); ?></div><?php } ?>
		</div>
		<!-- end of .older-newer -->
		<?php } ?>
		
		<?php if ($portpageonoff=='true') { /* display author-info and social-shares */ ?>
			<?php if ($portauthor!='false') { ?>
			<div class="author-info">
				<div class="authorDescription">
					<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('ID'), $size='75'); } /* Displays the Gravatar based on the author's email address. */ ?>
					<!-- end of .avatar -->
					<h3><?php _e('Written by ', 'my_framework'); the_author_posts_link(); ?></h3>
					<?php the_author_meta('description') ?>
				</div>
			</div>
			<!-- end of .author-info -->
			<?php } ?>
			<?php if ($portsocial!='false') { ?>
			<div class="social-share">
				<?php include_once(TEMPLATEPATH . '/social-share.php'); ?>
			</div>
			<?php } ?>
		<?php } ?>
			
		</div>
		<!-- end of .ports -->
		
		<?php if ($portrelated!='false') { /* display related portfolio */ ?>
		<div class="related post <?php if ($portpageonoff!='true') echo 'grid_12'; ?>">
			<div class="related-title-wrapper">
			<div class="h-wrapper"><h3><?php _e('Related Products', 'my_framework'); ?><span class="line"></span></h3></div>
			</div>
			<div class="related-content">
				<div class="related-pagination-wrapper">
					<div class="related-pagination-prev"></div>
					<div class="related-pagination-next"></div>
				</div>
				<ul>
				
				<?php
				$my_query = new wp_query(array('portfolio-category' => get_the_term_list( $post->ID, 'portfolio-category', '', ', ' , '' ),'post__not_in' => array($post->ID), 'showposts' => -1));
				if ( $my_query->have_posts() && get_the_term_list( $post->ID, 'portfolio-category', '', ', ' , '' ) != '' ) {
					while ($my_query->have_posts()) { $my_query->the_post();
					
						$relportcount = $my_query->post_count;
				
						$portwebsite = get_post_meta($post->ID, 'portwebsite', true);
						$portthumbtype = get_post_meta($post->ID, 'portthumbtype', true);
						$portthumbimage = get_post_meta($post->ID, 'portthumbimage', true);
						$portthumbvideo = get_post_meta($post->ID, 'portthumbvideo', true);
						$portthumbslider = get_post_meta($post->ID, 'portthumbslider', true);
						$portthumbimageurl = get_post_meta($post->ID, 'portthumbimageurl', true);
				?>
							
					<li class="<?php if ($portpageonoff!='true') echo 'grid_12'; else echo $relclass; ?>">
						<div class="featured-thumbnail">
							<div class="image-wrap">
								<?php if ($portthumbtype == 'image') echo create_image ($portthumbimage, $portthumbimageurl, $relwidth, $relheight); ?>
								<?php if ($portthumbtype == 'video') echo create_video ($portthumbvideo, $relwidth, $relheight); ?>
								<?php if ($portthumbtype == 'slider') echo create_slider ($portthumbslider, $relwidth, $relheight); ?>
							<a href="<?php the_permalink() ?>" class="zoom-icon related-post"><span class="post-icon <?php if ($portthumbtype=='slider') echo 'slider'; else if ($portthumbtype=='video') echo 'video'; ?>"></span><h3><?php the_title(); ?></h3></a>
							</div>
						</div>
						<!-- end of .featured-thumbnail -->
					</li>		
					
				<?php
					}
				}
				wp_reset_query();
				?>
				</ul>
			</div>
		</div>
		<!-- end of .related port -->
		<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery(".related-content").jCarouselLite({
				btnNext:".related-pagination-next",
				btnPrev:".related-pagination-prev",
				auto:false,
				speed:1000,
				circular:<?php if ($relportcount >= $relnum) echo 'true'; else echo 'false'; ?>,
				visible:<?php echo $relnum; ?>
			});
		});
		</script>
		<?php } ?>
			
		<?php if ($portpageonoff=='true') comments_template( '', true ); ?>
	</div>
	<!-- end of #content-->
	<?php if ($portpageonoff=='true') { /* display sidebar as blog */?>
		<?php get_sidebar('left'); ?>
		<?php get_sidebar('right'); ?>
	<?php } /* end of display sidebar as blog */?>
	<?php } elseif ( get_post_type() == 'post' ) { /* if it is a blog ************************************************************/ ?>
	
	<div id="content" class="<?php echo $class; ?>">
		<div id="postsinglepage" class="posts">
		
			<?php if ($postpaginateplace=='top') { /* display paginate above thumbnail image */?>
			<div class="older-newer">
				<?php if ($postpaginatealign!='right') { ?><div class="older"><?php if ($postpaginatetitle=='next-prev') previous_post_link('%link', __('Previous', 'my_framework')); else previous_post_link('%link', '%title'); ?></div><?php } ?>
				<div class="newer <?php if ($postpaginatealign!='left') echo 'fright'; ?>"><?php if ($postpaginatetitle=='next-prev') next_post_link('%link', __('Next', 'my_framework')); else next_post_link('%link', '%title'); ?></div>
				<?php if ($postpaginatealign=='right') { ?><div class="older fright"><?php if ($postpaginatetitle=='next-prev') previous_post_link('%link', __('Previous', 'my_framework')); else previous_post_link('%link', '%title'); ?></div><?php } ?>
			</div>
			<!-- end of .older-newer -->
			<?php } ?>
		
			<?php if ($posttitleplace=='above') { /* display title above thumbnail image */?>
			<div class="single-post"><h1 class="tabove"><?php the_title(); ?></h1></div>
			<!-- end of .single-post -->
			<?php } ?>
			
			<?php if (($postinthumbtype == 'image' && $postinthumbimage) || ($postinthumbtype == 'video' && $postinthumbvideo) || ($postinthumbtype == 'slider' && $postinthumbslider)) { ?>
			<div class="featured-thumbnail-wrapper <?php echo $postinthumbtype; ?>">
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
						<?php if ($postinthumbtype == 'image') echo create_image_inside ($postinthumbimage, $width, $height); ?>
						<?php if ($postinthumbtype == 'video') echo create_video ($postinthumbvideo, $width, $height); ?>
						<?php if ($postinthumbtype == 'slider') echo create_slider ($postinthumbslider, $width, $height); ?>
					</div>
				</div>
				<!-- end of .featured-thumbnail -->
			</div>
			<!-- end of .featured-thumbnail-wrapper -->
			<?php } ?>
			<div class="single-post">
				<?php if ($posttitleplace!='above') { /* display title below thumbnail image */?>
				<h1><?php the_title(); ?></h1>
				<?php } ?>
				<div class="post-icon <?php if ($postthumbtype=='slider') echo 'slider'; else if ($postthumbtype=='video') echo 'video'; ?>"></div>
				<div class="post-info <?php if ($posttitleplace=='above') echo 'tabove'; ?>">
					<span class="author">
						<?php the_author_posts_link() ?>
					</span>
					<?php the_tags( '<span class="tags">', ', ', '</span>' ); ?>
					<span class="comment">
						<?php comments_number(__('No Comments', 'my_framework'), __('1 Comments', 'my_framework'), __('% Comments', 'my_framework')); ?>
					</span>
				</div>
				<!-- end of .post-info -->
				<div class="post-content">
					<?php the_content(); ?>
					<?php wp_link_pages('before=<p class="pagelink">Pages:', 'after=</p>'); ?>
				</div>
			</div>
			<!-- end of .single-post -->
			<?php if ($postsocial!='false') { ?>
			<div class="social-share">
				<?php include_once(TEMPLATEPATH . '/social-share.php'); ?>
			</div>
			<?php } ?>
			
			<?php if ($postpaginateplace!='top') { /* display paginate below content */?>
			<div class="older-newer <?php if ($postauthor=='false') echo 'mb40'; ?>">
				<?php if ($postpaginatealign!='right') { ?><div class="older"><?php if ($postpaginatetitle=='next-prev') previous_post_link('%link', __('Previous', 'my_framework')); else previous_post_link('%link', '%title'); ?></div><?php } ?>
				<div class="newer <?php if ($postpaginatealign!='left') echo 'fright'; ?>"><?php if ($postpaginatetitle=='next-prev') next_post_link('%link', __('Next', 'my_framework')); else next_post_link('%link', '%title'); ?></div>
				<?php if ($postpaginatealign=='right') { ?><div class="older fright"><?php if ($postpaginatetitle=='next-prev') previous_post_link('%link', __('Previous', 'my_framework')); else previous_post_link('%link', '%title'); ?></div><?php } ?>
			</div>
			<!-- end of .older-newer -->
			<?php } ?>
			
			<?php if ($postauthor!='false') { ?>
			<div class="author-info">
				<div class="authorDescription">
					<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('ID'), $size='75'); } /* Displays the Gravatar based on the author's email address. */ ?>
					<!-- end of .avatar -->
					<h3><?php _e('Written by ', 'my_framework'); the_author_posts_link(); ?></h3>
					<?php the_author_meta('description') ?>
				</div>
			</div>
			<!-- end of .author-info -->
			<?php } ?>
		</div>
		<!-- end of .posts -->
		
		<?php if ($postrelated=='true') { /* display related post */ ?>
		<div class="related post">
			<div class="related-title-wrapper">
			<div class="h-wrapper"><h3><?php _e('Related Post', 'my_framework'); ?><span class="line"></span></h3></div>
			</div>
			<div class="related-content">
				<div class="related-pagination-wrapper">
					<div class="related-pagination-prev"></div>
					<div class="related-pagination-next"></div>
				</div>
				<ul>
				
				<?php
				$categories = get_the_category($post->ID);
				if ($categories) {
					$category_ids = array();
					foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
				}
				$my_query = new wp_query(array('category__in' => $category_ids, 'post__not_in' => array($post->ID), 'showposts' => -1));
				if ( $my_query->have_posts() /*&& $categories != ''*/ ) {
					while ($my_query->have_posts()) { $my_query->the_post();
					
						$relpostcount = $my_query->post_count;
				
						$postthumbtype = get_post_meta($post->ID, 'postthumbtype', true);
						$postthumbimage = get_post_meta($post->ID, 'postthumbimage', true);
						$postthumbvideo = get_post_meta($post->ID, 'postthumbvideo', true);
						$postthumbslider = get_post_meta($post->ID, 'postthumbslider', true);
						$postthumbimageurl = get_post_meta($post->ID, 'postthumbimageurl', true);
				?>
							
					<li class="<?php echo $relclass; ?>">
						<div class="featured-thumbnail">
							<div class="image-wrap">
								<?php if ($postthumbtype == 'image') echo create_image ($postthumbimage, $postthumbimageurl, $relwidth, $relheight); ?>
								<?php if ($postthumbtype == 'video') echo create_video ($postthumbvideo, $relwidth, $relheight); ?>
								<?php if ($postthumbtype == 'slider') echo create_slider ($postthumbslider, $relwidth, $relheight); ?>
							<a href="<?php the_permalink() ?>" class="zoom-icon related-post"><span class="post-icon <?php if ($postthumbtype=='slider') echo 'slider'; else if ($postthumbtype=='video') echo 'video'; ?>"></span><h3><?php the_title(); ?></h3></a>
							</div>
						</div>
						<!-- end of .featured-thumbnail -->
					</li>		
					
				<?php
					}
				}
				wp_reset_query();
				?>
				
				</ul>
			</div>
		</div>
		<!-- end of .related post -->
		<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery(".related-content").jCarouselLite({
				btnNext:".related-pagination-next",
				btnPrev:".related-pagination-prev",
				auto:false,
				speed:1000,
				circular:<?php if ($relpostcount >= $relnum) echo 'true'; else echo 'false'; ?>,
				visible:<?php echo $relnum; ?>
			});
		});
		</script>
		<?php } ?>
		
		<?php comments_template( '', true ); ?>
	</div>
	<!-- end of #content -->
		<?php get_sidebar('left'); ?>
		<?php get_sidebar('right'); ?>
	<?php } /* end if it is a blog */ ?>
	<?php endwhile; /* end loop */ ?>
</div>
</div>
<!-- end of #main -->
<?php get_footer(); ?>