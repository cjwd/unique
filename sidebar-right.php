<?php if (get_option('mytheme_sidebardivideronoff')=='true') $sidebarborder=' border'; else $sidebarborder=''; ?>
<?php global $pagesidebar; global $pagesidebarright; if (($pagesidebar == "right") || ($pagesidebar == "both")) { ?>
	
<div id="sidebarright" class="sidebar">
	<div class="<?php if ($pagesidebar == "right") { echo 'grid_4 indent pleft'.$sidebarborder; } elseif ($pagesidebar == "left") { echo 'grid_4 indent pright'.$sidebarborder; } elseif ($pagesidebar == "both") { echo 'grid_3 bothright'.$sidebarborder; } ?>">

		<?php dynamic_sidebar( $pagesidebarright ); ?>

   </div>
</div><!-- end of #sidebarright -->

<?php } ?>