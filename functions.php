<?php

	/*
	
	PersianArt
	---------------------------------------------------------------------
	Includes all of important function and features of the theme
	---------------------------------------------------------------------
	
	*/

	// constants
	define('UNIQUEPATH', get_template_directory_uri());
	$includes_path = get_template_directory() . '/includes/';
	
	// Theme Setting
	$themename = "My Framework";
	$shortname = "my_framework";
	
	// lang file
	load_theme_textdomain( 'my_framework', get_template_directory().'/languages' );
	$locale = get_locale();
	$locale_file = get_template_directory()."/languages/$locale.mo";
	
	// Admin & Additional function Options
	include_once('includes/misc/theme-function.php');
	include_once('includes/misc/theme-init.php');	// forend and backend script
	include_once('includes/misc/sidebar-init.php');	// register sidebar
	include_once('includes/misc/shortcode.php');	// generate shortcodes
	include_once('includes/misc/all-inline.php');	// add inline css and script
	include_once('includes/misc/cufon-replace.php');	// add script for cufon font
	
	// Dashboard Option init
	include_once('includes/theme-option.php');	// create option for admin panel
	include_once('includes/page-option.php');	// create option for page
	include_once('includes/post-option.php');	// create option for post
	include_once('includes/portfolio-option.php');	// create option for portfolio
	include_once('includes/testimonial-option.php');	// create option for testimonial
	include_once('includes/slider-option.php');	// create option for slider
	
	// exterior plugins
	include_once('includes/plugins/custom-image-sizes/filosofo-custom-image-sizes.php');	// custom image size
	include_once('includes/plugins/pagination/pagination.php');	// create pagination
	include_once('includes/plugins/breadcrumbs/dimox-breadcrumbs.php');	// create breadcrumb
	
	// include custom widget
	include_once ('includes/widgets/persian-art-recent-posts-widget.php');
	include_once ('includes/widgets/persian-art-contact-widget.php');
	include_once ('includes/widgets/persian-art-comments-widget.php');
	include_once ('includes/widgets/persian-art-post-cycle-widget.php');
	include_once ('includes/widgets/persian-art-flickr-wigdet.php');
	include_once ('includes/widgets/persian-art-twitter-wigdet.php');
	include_once ('includes/widgets/persian-art-side-menu-widget.php');

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	if (function_exists('add_theme_support')) {
		add_theme_support('post-thumbnails');
	}

	// Custom menu support
	if (function_exists('add_theme_support')) {
	add_theme_support( 'menus' );
	  	register_nav_menus(
	  		array(
	  		  'top_menu' => 'Top Menu',
	  		  'main_menu' => 'Main Menu',
	  		  'footer_menu' => 'Footer Menu'
	  		)
	  	);
	}

	// removes detailed login error information for security
	add_filter('login_errors',create_function('$a', "return null;"));

	// set excerpt length
	function custom_excerpt_length($length) {
		return 200;
	}
	add_filter('excerpt_length', 'custom_excerpt_length', 999);
	
	// Removes Trackbacks from the comment count
	add_filter('get_comments_number', 'comment_count', 0);
	function comment_count($count) {
		if (!is_admin()) {
			global $id;
			$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
			return count($comments_by_type['comment']);
		} else {
			return $count;
		}
	}
	
	// custom excerpt ellipses for 2.9+
	function custom_excerpt_more($more) {
		return 'Read More &raquo;';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
	
	// no more jumping for read more link
	function no_more_jumping($post) {
		return '...';
	}
	add_filter('excerpt_more', 'no_more_jumping');
	
	// Add Another theme support
	if (!isset($content_width)) $content_width = 940;

	// Add default posts and comments RSS feed links to head
	add_theme_support('automatic-feed-links');
	
	// Google Analytics
	$trackingcodeonoff = get_option('mytheme_trackingcodeonoff');
	if ($trackingcodeonoff) {
		add_action('wp_footer', 'add_trackingcode');
	}
	function add_trackingcode(){
		echo stripcslashes(get_option('mytheme_trackingcode'));
	}
	
	// ShortCode in Widget Text
	add_filter('widget_text', 'do_shortcode');
	
	// Use html tab for editor
	add_filter('wp_default_editor', create_function('', 'return "html";'));

	// remove admin bar
	/*add_filter('show_admin_bar', '__return_false');*/
	
	// category id in body and post class
	/*function category_id_class($classes) {
		global $post;
		foreach((get_the_category($post->ID)) as $category)
			$classes [] = 'cat-' . $category->cat_ID . '-id';
			return $classes;
	}
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');*/

?>