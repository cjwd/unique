<?php
/*
 * Template Name: Site map
 */

get_header();

$themestyle = (get_option('mytheme_themestyle'));
$pagetitleonoff = get_post_meta($post->ID, 'pagetitleonoff', true);
$pagecontentonoff = get_post_meta($post->ID, 'pagecontentonoff', true);

?>

<div id="main" class="<?php if ($themestyle == 'block') echo 'container_12'; ?>">
<div id="sub-main" class="<?php if ($themestyle != 'block') echo 'container_12'; ?>">
		
	<?php if ($pagetitleonoff=='true') { ?>
	<div class="h-wrapper h1 grid_12"><h1><?php the_title(); ?><span class="line"></span></h1></div>
	<?php } ?>
	
	<div id="content" class="sidebar">
        
        <?php if ($pagecontentonoff=='true') { ?>
		<?php the_content(); ?>         
		<div class="grid_4">
			<?php dynamic_sidebar( 'First Site Map' ); ?>
		</div>
		<div class="grid_4">
			<?php dynamic_sidebar( 'Second Site Map' ); ?>
		</div>
		<div class="grid_4">
			<?php dynamic_sidebar( 'Third Site Map' ); ?>
		</div>
		<br class="clear">
        <?php } ?>
		
	</div>
	<!-- end of #content -->
</div>
</div>
<!-- end of #main -->
<?php get_footer(); ?>
