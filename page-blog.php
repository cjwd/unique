<?php
/*
 * Template Name: Blog
 */

get_header();

$themestyle = (get_option('mytheme_themestyle'));
$pagesidebar = get_post_meta($post->ID, 'pagesidebar', true);
$pagesidebarright = get_post_meta($post->ID, 'pagesidebarright', true);
$pagesidebarleft = get_post_meta($post->ID, 'pagesidebarleft', true);
$pagetitleonoff = get_post_meta($post->ID, 'pagetitleonoff', true);
$blogcat = get_post_meta($post->ID, 'blogcat', true);
$blognumfetch = get_post_meta($post->ID, 'blognumfetch', true);
$blogthumbtitleonoff = get_post_meta($post->ID, 'blogthumbtitleonoff', true);
$bloglentitle = get_post_meta($post->ID, 'bloglentitle', true);
$blogthumbexcerptonoff = get_post_meta($post->ID, 'blogthumbexcerptonoff', true);
$bloglenexcerpt = get_post_meta($post->ID, 'bloglenexcerpt', true);
$blogstyle = get_post_meta($post->ID, 'blogstyle', true);
$blogcompletecontentonoff = get_post_meta($post->ID, 'blogcompletecontentonoff', true);
$blogprettyphotoonoff = get_post_meta($post->ID, 'blogprettyphotoonoff', true);
$bloginfotagonoff = get_post_meta($post->ID, 'bloginfotagonoff', true);
$blogcontinuelinkonoff = get_post_meta($post->ID, 'blogcontinuelinkonoff', true);
$blogpaginationonoff = get_post_meta($post->ID, 'blogpaginationonoff', true);

if ($blogstyle == 'half') {
	if ($pagesidebar == 'no') { $width=570; $height=240; if ($bloglentitle == '') $bloglentitle = '60'; if ($bloglenexcerpt == '') $bloglenexcerpt = '60'; }
	elseif ($pagesidebar == 'both') { $width=270; $height=240; if ($bloglentitle == '') $bloglentitle = '30'; if ($bloglenexcerpt == '') $bloglenexcerpt = '27'; }
	else { $width=370; $height=240; if ($bloglentitle == '') $bloglentitle = '38'; if ($bloglenexcerpt == '') $bloglenexcerpt = '34'; }
} else {
	if ($pagesidebar == 'no') { $width=940; $height=240; if ($bloglentitle == '') $bloglentitle = '88'; if ($bloglenexcerpt == '') $bloglenexcerpt = '64'; }
	elseif ($pagesidebar == 'both') { $width=460; $height=240; if ($bloglentitle == '') $bloglentitle = '42'; if ($bloglenexcerpt == '') $bloglenexcerpt = '30'; }
	else { $width=620; $height=240; if ($bloglentitle == '') $bloglentitle = '56'; if ($bloglenexcerpt == '') $bloglenexcerpt = '41'; }
}
if ($blogprettyphotoonoff) $postthumbimage = 'full'; else $postthumbimage = 'post';
?>

<div id="main" class="<?php if ($themestyle == 'block') echo 'container_12'; ?>">
<div id="sub-main" class="<?php if ($themestyle != 'block') echo 'container_12'; ?>">
		
	<?php if ($pagetitleonoff=='true') { ?>
	<div class="h-wrapper h1 grid_12"><h1><?php the_title(); ?><span class="line"></span></h1></div>
	<?php } ?>
		
	<div id="content" class="<?php
		if ($pagesidebar == 'right') { echo 'grid_8'; } elseif ($pagesidebar == 'left') { echo 'grid_8 fright'; } elseif ($pagesidebar == 'both') { echo 'grid_6 bothmiddle';} else { echo 'grid_12'; } ?>">
		
		<ul class="post-item-wrapper">
		<?php $wp_query = new WP_Query('post_type=post&category_name='.$blogcat.'&posts_per_page='.$blognumfetch.'&paged='.$paged ); ?>
		<?php while ($wp_query->have_posts()) :$wp_query->the_post();
		// get variables
		$postthumbtype = get_post_meta($post->ID, 'postthumbtype', true);
		$postthumbvideo = get_post_meta($post->ID, 'postthumbvideo', true);
		$postthumbslider = get_post_meta($post->ID, 'postthumbslider', true);
		?>
		
		<li id="post-<?php the_ID(); ?>" <?php post_class('posts '.($blogstyle=='half' ? 'halfstyle' : 'fullstyle')) ?>>
			
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
			
			<?php if ($blogthumbtitleonoff!='false') { ?>
			<h2><a href="<?php the_permalink(); ?>"><?php $title = the_title('','',false); echo substr($title, 0, $bloglentitle); ?></a></h2>
			<?php } ?>
			
			<?php if ($blogthumbexcerptonoff!='false') { ?>
			<div class="excerpt">
				<?php if ($blogcompletecontentonoff!='true') { ?>
				<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$bloglenexcerpt);?>
				<?php } else the_content('Continue Reading'); ?>
				<?php wp_link_pages('before=<p class="pagelink">Pages:', 'after=</p>'); ?>
			</div>
			<?php } ?>
			
			<div class="post-info-wrapper">
				<div class="post-icon <?php if ($postthumbtype=='slider') echo 'slider'; else if ($postthumbtype=='video') echo 'video'; ?>"></div>
				<div class="post-info">
					<span class="author">
						<?php the_author_posts_link() ?>
					</span>
					<?php if ($bloginfotagonoff!='false') { ?>
					<?php the_tags( '<span class="tags">', ', ', '</span>' ); ?>
					<?php } ?>
					<span class="comment">
						<?php comments_number(__('No Comments', 'my_framework'), __('1 Comments', 'my_framework'), __('% Comments', 'my_framework')); ?>
					</span>
					
					<?php if ($blogcontinuelinkonoff!='false') { ?>
					<div class="posts-link"><a href="<?php the_permalink(); ?>"><?php _e('Continue Reading', 'my_framework'); ?></a></div>
					<?php } ?>
				</div>
			</div>
			<!-- end of .post-info-wrapper -->
		</li>
		<?php endwhile; ?>
		
		</ul>
		<?php if (($wp_query->max_num_pages > 1) && ($blogpaginationonoff!='false')) {
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