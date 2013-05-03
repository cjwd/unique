<?php 

get_header();

$themestyle = (get_option('mytheme_themestyle'));

?>

<div id="main" class="<?php if ($themestyle == 'block') echo 'container_12'; ?>">
<div id="sub-main" class="<?php if ($themestyle != 'block') echo 'container_12'; ?>">
	<div id="content" class="grid_12">
		<div id="error404">
			<h1><?php _e('Error 404 Not Found', 'my_framework'); ?></h1>
			<div>
				<?php _e('<p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>', 'my_framework'); ?>
				<?php _e('<p>Please try using our search box below to look for information on the internet</p>', 'my_framework'); ?>
				<div class="searchform-wrapper">
					<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
				</div>
			</div>
		</div>
		<!-- end of #error404 -->
	</div>
	<!-- end of #content-->
</div>
</div>
<!-- end of #main -->
<?php get_footer(); ?>
