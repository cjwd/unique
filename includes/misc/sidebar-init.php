<?php
function elegance_widgets_init() {
		
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'          => 'Right Sidebar',
		'id'            => 'sidebar-right',
		'description'   => __('Located at the left or right side of pages when you choose left or right.', 'my_framework'),
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="h-wrapper"><h3>',
		'after_title'   => '<span class="line"></span></h3></div>',
	));	
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'          => 'Left Sidebar',
		'id'            => 'sidebar-left',
		'description'   => __('Located at the left side of pages when you choose both.', 'my_framework'),
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="h-wrapper"><h3>',
		'after_title'   => '<span class="line"></span></h3></div>',
	));
	// First Footer Widget Area
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'          => 'First Footer Widget Area',
		'id'            => 'first-footer-widget-area',
		'description'   => __('Located at the bottom of pages.', 'my_framework'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));
	// Second Footer Widget Area
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'          => 'Second Footer Widget Area',
		'id'            => 'second-footer-widget-area',
		'description'   => __('Located at the bottom of pages.', 'my_framework'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));
	// Third Footer Widget Area
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'          => 'Third Footer Widget Area',
		'id'            => 'third-footer-widget-area',
		'description'   => __('Located at the bottom of pages.', 'my_framework'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));
	// Fourth Footer Widget Area
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'          => 'Fourth Footer Widget Area',
		'id'            => 'fourth-footer-widget-area',
		'description'   => __('Located at the bottom of pages.', 'my_framework'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));
	// First Site Map
	// Location: site map page
	register_sidebar(array(
		'name'          => 'First Site Map',
		'id'            => 'first-site-map',
		'description'   => __('Located at the site map page.', 'my_framework'),
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
	// Second Site Map
	// Location: site map page
	register_sidebar(array(
		'name'          => 'Second Site Map',
		'id'            => 'second-site-map',
		'description'   => __('Located at the site map page.', 'my_framework'),
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
	// Third Site Map
	// Location: site map page
	register_sidebar(array(
		'name'          => 'Third Site Map',
		'id'            => 'third-site-map',
		'description'   => __('Located at the site map page.', 'my_framework'),
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
	
	// Custom Sidebar
	// Location: the sidebar
	$sidebaradds = get_option('mytheme_sidebaraddvalues');
	$sidebaradd = explode('|', $sidebaradds);
		for ($i=0; $i<sizeof($sidebaradd)-1 ;$i++) {
			
		register_sidebar(array(
			'name'          => $sidebaradd[$i],
			'id'            => 'custom-sidebar-'.$i,
			'description'   => __('Located at the right or left side of pages.', 'my_framework'),
			'before_widget' => '<div id="%1$s" class="%2$s widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="h-wrapper"><h3>',
			'after_title'   => '<span class="line"></span></h3></div>',
		));
		
	}

}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>