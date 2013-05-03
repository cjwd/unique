<?php if (get_option('mytheme_sidebardivideronoff')=='true') $sidebarborder=' border'; else $sidebarborder=''; ?>
<?php global $pagesidebar; global $pagesidebarleft; if (($pagesidebar == "left") || ($pagesidebar == "both")) { ?>

<div id="sidebarleft" class="sidebar">
	<div class="<?php if ($pagesidebar == "right") { echo 'grid_4 indent pleft'.$sidebarborder; } elseif ($pagesidebar == "left") { echo 'grid_4 indent pright'.$sidebarborder; } elseif ($pagesidebar == "both") { echo 'grid_3 bothleft'.$sidebarborder; } ?>">

		<?php dynamic_sidebar( $pagesidebarleft ); ?>

   </div>
</div><!-- end of #sidebarleft -->

<?php } ?>