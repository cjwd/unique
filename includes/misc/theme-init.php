<?php
	
// Add script to template
function pa_scripts(){
		wp_enqueue_script('jquery');
	
			
	if( $GLOBALS['pagenow'] != 'wp-login.php' ){
		
		if (!is_admin()) {						// Add Latest Jquery			wp_deregister_script('jquery');			wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, null);			wp_enqueue_script('jquery');
			
			// register scripts for front-end
			function custom_front_end_script() {
		
				global $slider;
				
				wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', false, '1.0');
				wp_enqueue_style('960', get_template_directory_uri().'/css/960.css', false, '1.0');
				wp_enqueue_style('superfish', get_template_directory_uri().'/css/superfish.css', false, '1.0');
				wp_enqueue_style('prettyPhoto', get_template_directory_uri().'/css/prettyPhoto.css', false, '1.0');
				wp_enqueue_style('fix', get_template_directory_uri().'/css/fix.css', false, '1.0');
				wp_enqueue_style('tipsy', get_template_directory_uri().'/css/tipsy.css', false, '1.0');
				wp_enqueue_style('style', get_stylesheet_uri(), false, '1.0');
				if (get_option('mytheme_themeskin')!='') {
				wp_enqueue_style('themeskin', get_template_directory_uri().'/css/skins/'.get_option('mytheme_themeskin').'.css', false, '1.0');
				}
				if (get_option('mytheme_responsiveonoff')=='true') {
				wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', false, '1.0');
				}
				wp_enqueue_style('options', get_template_directory_uri().'/css/options.css', false, '1.0');
				
					
				wp_enqueue_script('hoverIntent', get_template_directory_uri().'/js/jquery.hoverIntent.minified.js', array('jquery'), '1.5.1');
				wp_enqueue_script('superfish', get_template_directory_uri().'/js/superfish.js', array('jquery'), '1.4.8');
				wp_enqueue_script('supersubs', get_template_directory_uri().'/js/supersubs.js', array('jquery'), '0.2');
				wp_enqueue_script('prettyPhoto', get_template_directory_uri().'/js/jquery.prettyPhoto.js', array('jquery'), '3.1.3');
				wp_enqueue_script('nivo', get_template_directory_uri().'/js/jquery.nivo.slider.pack.js', array('jquery'), '2.7.1');
				if ($slider=='kwicks') {
				wp_enqueue_script('kwicks', get_template_directory_uri().'/js/jquery.kwicks-1.5.1.js', array('jquery'), '1.5.1');
				} elseif ($slider=='showcase') {
				wp_enqueue_script('showcase', get_template_directory_uri().'/js/jquery.aw-showcase.min.js', array('jquery'), '1.1.1');
				} elseif ($slider=='cycle') {
				wp_enqueue_script('cycle', get_template_directory_uri().'/js/jquery.cycle.all.js', array('jquery'), '2.9999.5');
				} elseif ($slider=='roundabout') {
				wp_enqueue_script('roundabout', get_template_directory_uri().'/js/jquery.roundabout.min.js', array('jquery'), '2.4.2');
				wp_enqueue_script('roundabout-shapes', get_template_directory_uri().'/js/jquery.roundabout-shapes.min.js', array('jquery'), '2.0.0');
				} elseif ($slider=='liteaccordion') {
				wp_enqueue_script('liteaccordion', get_template_directory_uri().'/js/liteaccordion.jquery.min.js', array('jquery'), '2.0.2');
				} elseif ($slider=='tm') {
				wp_enqueue_script('tm', get_template_directory_uri().'/js/tms-0.4.1.js', array('jquery'), '0.4.1');
				} elseif ($slider=='bgstretcher') {
				wp_enqueue_script('bgstretcher', get_template_directory_uri().'/js/bgstretcher.js', array('jquery'), '2.0.1');
				}
				wp_enqueue_script('masonry', get_template_directory_uri().'/js/jquery.masonry.min.js', array('jquery'), '2.1.05');
				wp_enqueue_script('easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery'), '1.3');
				wp_enqueue_script('jcarousellite', get_template_directory_uri().'/js/jcarousellite.js', array('jquery'), '1.0.1');
				wp_enqueue_script('selectnav', get_template_directory_uri().'/js/selectnav.min.js', array('jquery'), '1.0.1');
				wp_enqueue_script('tipsy', get_template_directory_uri().'/js/jquery.tipsy.js', array('jquery'), '1.0.1');
				wp_enqueue_script('custom', get_template_directory_uri().'/js/jquery.custom.js', array('jquery'), '1.0');
				if (!get_option('mytheme_topsearchonoff') || get_option('mytheme_topsearchonoff')=='autohide') {
				wp_enqueue_script('search', get_template_directory_uri().'/js/jquery.search.js', array('jquery'), '1.0');
				}
				wp_enqueue_script('cufon', get_template_directory_uri().'/js/cufon-yui.js', array('jquery'), '1.10');				
				wp_enqueue_script('jquery-csv', 'http://jquery-csv.googlecode.com/git/src/jquery.csv.js', array('jquery'), null);				
								
				wp_enqueue_script('centresettings', get_template_directory_uri().'/designware/settings.js', array(), null);
				wp_enqueue_script('jquery-waypoints', get_template_directory_uri().'/js/waypoints.min.js', array(jquery), null);
				wp_enqueue_script('waypoints-sticky', get_template_directory_uri().'/js/waypoints-sticky.min.js', array(jquery), null);
				wp_enqueue_script('sticky-nav', get_template_directory_uri().'/js/my-scripts.js', array(jquery), null);
				wp_enqueue_script('dynamic-confirm', get_template_directory_uri().'/js/dynamic-confirm.js', array(jquery), null);
	
				// Comment Script
				if (is_singular()) wp_enqueue_script("comment-reply");
			
			}
			add_action( 'wp_enqueue_scripts', 'custom_front_end_script');
			
		} else {
			
			// register scripts for post/portfolio page in admin panel
			function custom_admin_script($hook) {
				global $post_type;
				if (( $post_type=='post' || $post_type=='portfolio' ) && ( 'post.php' == $hook || 'post-new.php' == $hook )) {
				
				wp_enqueue_script('imagepicker', get_template_directory_uri().'/includes/js/imagepicker.js', array('jquery'), '1.10');
					
				}
			}
			add_action( 'admin_enqueue_scripts', 'custom_admin_script');
			
			// register scripts for all page in admin panel
			function all_admin_scripts() {
				wp_enqueue_script('media-upload');
				wp_enqueue_script('thickbox');
				wp_enqueue_script('jquery-custom', get_template_directory_uri().'/includes/js/jquery.custom.js',  array('jquery'), '1.0');
				wp_enqueue_script('jquery-confirm', get_template_directory_uri().'/includes/js/jquery.confirm.js',  array('jquery'), '1.0');
				wp_enqueue_script('jquery-colorpicker', get_template_directory_uri().'/includes/js/colorpicker.js',  array('jquery'), '1.0');
				wp_enqueue_script('cufon-yui', get_template_directory_uri().'/js/cufon-yui.js',  array('jquery'), '1.10');
			}
			add_action('admin_enqueue_scripts', 'all_admin_scripts');
			
			// register styles for all page in admin panel
			function all_admin_styles() {
				wp_enqueue_style('thickbox');
				wp_enqueue_style('themeoption-css', get_template_directory_uri().'/includes/css/themeoption.css', false, '1.0');
				wp_enqueue_style('jquery-confirm-css', get_template_directory_uri().'/includes/css/jquery.confirm.css', false, '1.0');
				wp_enqueue_style('jquery-colorpicker-css', get_template_directory_uri().'/includes/css/colorpicker.css', false, '1.0');
			}
			add_action('admin_enqueue_scripts', 'all_admin_styles');
	
		}
	}
}

add_action('init', 'pa_scripts');


/* register portfolio post_type */
function my_post_type_portfolio() {

	$labels = array(
		'name' => _x('Products', 'Portfolio Name', 'my_framework'),
		'singular_name' => _x('Product Item', 'Portfolio Singular Name', 'my_framework'),
		'add_new' => _x('Add New', 'Add New Portfolio Name', 'my_framework'),
		'add_new_item' => __('Add New Product', 'my_framework'),
		'edit_item' => __('Edit Product', 'my_framework'),
		'new_item' => __('New Product', 'my_framework'),
		'view_item' => __('View Products', 'my_framework'),
		'search_items' => __('Search Products', 'my_framework'),
		'not_found' =>  __('Nothing found', 'my_framework'),
		'not_found_in_trash' => __('Nothing found in Trash', 'my_framework'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	  ); 
	  
	register_post_type( 'portfolio' , $args);
	
	register_taxonomy(
		"portfolio-category", array("portfolio"), array(
			"hierarchical" => true,
			"label" => "Categories", 
			"singular_label" => "Category", 
			"rewrite" => true));
	register_taxonomy_for_object_type('portfolio-category', 'portfolio');
	
	register_taxonomy(
		"portfolio-tag", array("portfolio"), array(
			"hierarchical" => false, 
			"label" => "Tags", 
			"singular_label" => "Tag", 
			"rewrite" => true));
	register_taxonomy_for_object_type('portfolio-tag', 'portfolio');
	
	flush_rewrite_rules();
		
	}
	
	add_filter("manage_edit-portfolio_columns", "portfolio_column");	
	function portfolio_column($columns){
		$columns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "Title",
			"author" => "Author",
			"portfolio-category" => "Categories",
			"portfolio-tags" => "Tags",
			"date" => "date");
		return $columns;
	}
	add_action("manage_posts_custom_column","portfolio_custom_columns");
	function portfolio_custom_columns($column){
		global $post;

		switch ($column) {
			case "portfolio-tags":
			echo get_the_term_list($post->ID, 'portfolio-tag', '', ', ','');
			break;
			
			case "portfolio-category":
			echo get_the_term_list($post->ID, 'portfolio-category', '', ', ','');
			break;
		}
	}

add_action('init', 'my_post_type_portfolio');



/* register testimonial post_type */
function my_post_type_testimonial() {

	$labels = array(
		'name' => _x('Testimonial', 'Testimonial Name', 'my_framework'),
		'singular_name' => _x('Testimonial Item', 'Testimonial Singular Name', 'my_framework'),
		'add_new' => _x('Add New', 'Add New Testimonial Name', 'my_framework'),
		'add_new_item' => __('Add New Testimonial', 'my_framework'),
		'edit_item' => __('Edit Testimonial', 'my_framework'),
		'new_item' => __('New Testimonial', 'my_framework'),
		'view_item' => __('View Testimonial', 'my_framework'),
		'search_items' => __('Search Testimonial', 'my_framework'),
		'not_found' =>  __('Nothing found', 'my_framework'),
		'not_found_in_trash' => __('Nothing found in Trash', 'my_framework'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'exclude_from_search' => true,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	  ); 
	  
	register_post_type( 'testimonial' , $args);
	
	register_taxonomy(
		"testimonial-category", array("testimonial"), array(
			"hierarchical" => true,
			"label" => "Categories", 
			"singular_label" => "Categories", 
			"rewrite" => true));
	register_taxonomy_for_object_type('testimonial-category', 'testimonial');
	
	flush_rewrite_rules();
		
	}
	
	add_filter("manage_edit-testimonial_columns", "testimonial_column");	
	function testimonial_column($columns){
		$columns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "Title",
			"author" => "Author",
			"testimonial-category" => "Categories",
			"date" => "date");
		return $columns;
	}
	add_action("manage_posts_custom_column","testimonial_custom_columns");
	function testimonial_custom_columns($column){
		global $post;

		switch ($column) {
			
			case "testimonial-category":
			echo get_the_term_list($post->ID, 'testimonial-category', '', ', ','');
			break;
		}
	}

add_action('init', 'my_post_type_testimonial');



/* register slider post_type */
function my_post_type_slider() {

	$labels = array(
		'name' => _x('Slider', 'Slider Name', 'my_framework'),
		'singular_name' => _x('Slider Item', 'Slider Singular Name', 'my_framework'),
		'add_new' => _x('Add New', 'Add New Slider Name', 'my_framework'),
		'add_new_item' => __('Add New Slider', 'my_framework'),
		'edit_item' => __('Edit Slider', 'my_framework'),
		'new_item' => __('New Slider', 'my_framework'),
		'view_item' => __('View Slider', 'my_framework'),
		'search_items' => __('Search Slider', 'my_framework'),
		'not_found' =>  __('Nothing found', 'my_framework'),
		'not_found_in_trash' => __('Nothing found in Trash', 'my_framework'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'exclude_from_search' => true,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	  ); 
	  
	register_post_type( 'slider' , $args);
	
	register_taxonomy(
		"slider-category", array("slider"), array(
			"hierarchical" => true,
			"label" => "Categories", 
			"singular_label" => "Categories", 
			"rewrite" => true));
	register_taxonomy_for_object_type('slider-category', 'slider');
	
	flush_rewrite_rules();
		
	}
	
	add_filter("manage_edit-slider_columns", "slider_column");	
	function slider_column($columns){
		$columns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "Title",
			"author" => "Author",
			"slider-category" => "Categories",
			"date" => "date");
		return $columns;
	}
	add_action("manage_posts_custom_column","slider_custom_columns");
	function slider_custom_columns($column){
		global $post;

		switch ($column) {
			
			case "slider-category":
			echo get_the_term_list($post->ID, 'slider-category', '', ', ','');
			break;
		}
	}

add_action('init', 'my_post_type_slider');
?>