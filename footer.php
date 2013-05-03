	<?php
	global $pagefooterstyleonoff;
	$footerstyle = get_option('mytheme_footerstyle');
	$footernav = get_option('mytheme_copyrightnav');
	?>
	<?php if (get_option('mytheme_footeronoff')!='false') {  ?>
	<div id="footer-wrapper">
		<?php if ($pagefooterstyleonoff!='false') { if (get_option('mytheme_footerstyleonoff')!='false') {  ?>
		<div class="footer-top-wrapper">
			<div class="container_12">
				<div class="footer-item <?php if ($footerstyle == "style1" || $footerstyle == "style3" || $footerstyle == "style4") { echo "grid_3"; } elseif ($footerstyle == "style2") { echo "grid_6"; } elseif ($footerstyle == "style5" || $footerstyle == "style7") { echo "grid_4"; } elseif ($footerstyle == "style6") { echo "grid_8"; } else { echo "grid_12"; } ?>">
				  <?php if ( ! dynamic_sidebar( 'first-footer-widget-area' ) ) : ?>
					 <!--Widgetized Footer-->
				  <?php endif ?>
				</div>
				
				<div class="footer-item <?php if ($footerstyle == "style1" || $footerstyle == "style2" || $footerstyle == "style3") { echo "grid_3"; } elseif ($footerstyle == "style4") { echo "grid_6"; } elseif ($footerstyle == "style5" || $footerstyle == "style6") { echo "grid_4"; } elseif ($footerstyle == "style7") { echo "grid_8"; } else { echo "display-none"; } ?>">
				  <?php if ( ! dynamic_sidebar( 'second-footer-widget-area' ) ) : ?>
					 <!--Widgetized Footer-->
				  <?php endif ?>
				</div>
				
				<div class="footer-item <?php if ($footerstyle == "style1" || $footerstyle == "style2" || $footerstyle == "style4") { echo "grid_3"; } elseif ($footerstyle == "style3") { echo "grid_6"; } elseif ($footerstyle == "style5") { echo "grid_4"; } else { echo "display-none"; } ?>">
				  <?php if ( ! dynamic_sidebar( 'third-footer-widget-area' ) ) : ?>
					 <!--Widgetized Footer-->
				  <?php endif ?>
				</div>
				
				<div class="footer-item <?php if ($footerstyle == "style1") { echo "grid_3"; } else { echo "display-none"; } ?>">
				  <?php if ( ! dynamic_sidebar( 'fourth-footer-widget-area' ) ) : ?>
					 <!--Widgetized Footer-->
				  <?php endif ?>
               </div>
			</div>
			<!-- end of .container_12 --> 
		</div>
		<!-- end of #footer-top-wrapper -->
		<?php } } ?>
		<?php if (get_option('mytheme_copyrightonoff')!='false') {  ?>
		<div class="footer-bot-wrapper">
			<div id="copyright" class="container_12">
			
			<?php if (get_option('mytheme_copyright')=='middle') { ?>
			<div class="copmiddle grid_12"><?php echo stripcslashes(get_option('mytheme_copyrightmiddle')); ?><?php if ($footernav == 'middle') { wp_nav_menu( array( 'menu_id' => 'footer-menu', 'before' => '<span class="divider">/</span>', 'theme_location' => 'footer_menu' )); } ?></div>
			<?php } else { ?>
			<div class="copleft"><?php echo stripcslashes(get_option('mytheme_copyrightleft')); ?><?php if ($footernav == 'left') { wp_nav_menu( array( 'menu_id' => 'footer-menu', 'before' => '<span class="divider">/</span>', 'theme_location' => 'footer_menu' )); } ?></div>
			<div class="copright"><?php echo stripcslashes(get_option('mytheme_copyrightright')); ?><?php if ($footernav == 'right') { wp_nav_menu( array( 'menu_id' => 'footer-menu', 'before' => '<span class="divider">/</span>', 'theme_location' => 'footer_menu' )); } ?></div>
			<?php } ?>
			
			</div>
		</div>
		<!-- end of #footer-bot-wrapper -->
		<?php } ?>
	</div>
	<!-- end of #footer-wrapper -->
	<?php } ?>
	<?php if (get_option('mytheme_backtotoponoff')!='false') {  ?>
	<div id="backtotop"><span><span class="triangle"></span></span></div>
	<?php } ?>
</div>
<!-- end of .body-wrapper -->
</div>
<?php wp_footer(); ?>
</body>
</html>