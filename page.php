<?php
 
get_header();

$themestyle = (get_option('mytheme_themestyle'));
$pagecommentonoff = (get_option('mytheme_pagecommentonoff'));
$pagelength = get_post_meta($post->ID, 'pagelength', true);
$pagesidebar= get_post_meta($post->ID, 'pagesidebar', true);
$pagesidebarright = get_post_meta($post->ID, 'pagesidebarright', true);
$pagesidebarleft = get_post_meta($post->ID, 'pagesidebarleft', true);
$pagetitleonoff = get_post_meta($post->ID, 'pagetitleonoff', true);
$pagecontentonoff = get_post_meta($post->ID, 'pagecontentonoff', true);
$pagebgtransonoff = get_post_meta($post->ID, 'pagebgtransonoff', true);

?>

<div id="main" class="<?php if ($pagebgtransonoff=='true') echo ' main-transparent'; ?><?php if ($pagelength!='fullsize' && $themestyle=='block') echo ' container_12'; ?>">
<div id="sub-main" class="<?php if (!$pagelength || $pagelength=='normal') echo 'container_12'; ?>">
		
	<?php if ($pagetitleonoff!='false') { ?>
	<div class="h-wrapper h1 grid_12"><h1><?php the_title(); ?><span class="line"></span></h1></div>
	<?php } ?>
	
	<div id="content" <?php if ($pagelength=='normal') { 
		if ($pagesidebar=='right') echo 'class="empty_grid_8 fleft"';
		elseif ($pagesidebar=='left') echo 'class="empty_grid_8 fright"';
		elseif ($pagesidebar=='both') echo 'class="empty_grid_6 bothmiddle"';
		} elseif (!$pagelength) echo 'class="grid_12"'; ?>>
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); global $more; $more=0; ?>
		
		<?php if ($pagecontentonoff!='false') the_content('Continue Reading'); ?>
		
		<?php endwhile; ?>
		<?php if ($pagecommentonoff!='false') { ?>
		<div class="page-comment <?php if ($pagelength=='normal') { if ($pagesidebar=='right' || $pagesidebar=='left') echo 'grid_8'; elseif ($pagesidebar=='both') echo 'grid_6'; else echo 'grid_12'; } ?>" >
			<?php comments_template( '', true ); ?>
		</div>
		<?php } ?>
	</div>
	<!-- end of #content -->
		<?php get_sidebar('left'); ?>
		<?php get_sidebar('right'); ?>
</div>
</div>
<!-- end of #main -->
<?php get_footer(); ?>