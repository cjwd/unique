<?php 

	function shortcode_addbuttons() {
		// Don't bother doing this stuff if the current user lacks permissions
		if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') )
		return;
		
		// Add only in Rich Editor mode
		if ( get_user_option('rich_editing') == 'true') {
		add_filter('mce_external_plugins', 'add_shortcode_tinymce_plugin');
		add_filter('mce_buttons_3', 'register_shortcode_button_3');
		add_filter('mce_buttons_4', 'register_shortcode_button_4');
		}
	}
	 
	function register_shortcode_button_3($buttons) {
		array_push($buttons, "container", "column", "percent_column", "separator");
		array_push($buttons, "accordion", "toggle", "tab", "separator");
		array_push($buttons, "divider", "space", "separator");
		array_push($buttons, "button", "button_free", "separator");
		array_push($buttons, "list", "faq", "quote", "dropcap", "highlight", "separator");
		array_push($buttons, "wall", "whiteframe", "personnel", "separator");
	return $buttons;
	}
	 
	function register_shortcode_button_4($buttons) {
		array_push($buttons, "social", "progress_bar", "price_table", "contact_info", "separator");
		array_push($buttons, "testimonial", "message_box", "stunning", "twitter", "separator");
		array_push($buttons, "youtube", "vimeo", "separator");
		array_push($buttons, "frame", "slider", "separator");
		array_push($buttons, "service1", "service2", "service3", "separator");
		array_push($buttons, "portfolio", "post", "separator");
		array_push($buttons, "client", "separator");
	return $buttons;
	}
	 
	// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
	function add_shortcode_tinymce_plugin($plugin_array) {
		$plugin_array['container'] = UNIQUEPATH . '/includes/js/shortcode/container.js';
		$plugin_array['column'] = UNIQUEPATH . '/includes/js/shortcode/column.js';
		$plugin_array['percent_column'] = UNIQUEPATH . '/includes/js/shortcode/percent-column.js';
		
		$plugin_array['accordion'] = UNIQUEPATH . '/includes/js/shortcode/accordion.js';
		$plugin_array['toggle'] = UNIQUEPATH . '/includes/js/shortcode/toggle.js';
		$plugin_array['tab'] = UNIQUEPATH . '/includes/js/shortcode/tab.js';
		
		$plugin_array['divider'] = UNIQUEPATH . '/includes/js/shortcode/divider.js';
		$plugin_array['space'] = UNIQUEPATH . '/includes/js/shortcode/space.js';
		
		$plugin_array['button'] = UNIQUEPATH . '/includes/js/shortcode/button.js';
		$plugin_array['button_free'] = UNIQUEPATH . '/includes/js/shortcode/button-free.js';
		
		$plugin_array['list'] = UNIQUEPATH . '/includes/js/shortcode/list.js';
		$plugin_array['faq'] = UNIQUEPATH . '/includes/js/shortcode/faq.js';
		$plugin_array['quote'] = UNIQUEPATH . '/includes/js/shortcode/quote.js';
		$plugin_array['dropcap'] = UNIQUEPATH . '/includes/js/shortcode/dropcap.js';
		$plugin_array['highlight'] = UNIQUEPATH . '/includes/js/shortcode/highlight.js';
		
		$plugin_array['wall'] = UNIQUEPATH . '/includes/js/shortcode/wall.js';
		$plugin_array['whiteframe'] = UNIQUEPATH . '/includes/js/shortcode/whiteframe.js';
		$plugin_array['personnel'] = UNIQUEPATH . '/includes/js/shortcode/personnel.js';
		
		$plugin_array['social'] = UNIQUEPATH . '/includes/js/shortcode/social.js';
		$plugin_array['progress_bar'] = UNIQUEPATH . '/includes/js/shortcode/progress-bar.js';
		$plugin_array['price_table'] = UNIQUEPATH . '/includes/js/shortcode/price-table.js';
		$plugin_array['contact_info'] = UNIQUEPATH . '/includes/js/shortcode/contact-info.js';
		
		$plugin_array['testimonial'] = UNIQUEPATH . '/includes/js/shortcode/testimonial.js';
		$plugin_array['message_box'] = UNIQUEPATH . '/includes/js/shortcode/message-box.js';
		$plugin_array['stunning'] = UNIQUEPATH . '/includes/js/shortcode/stunning.js';
		$plugin_array['twitter'] = UNIQUEPATH . '/includes/js/shortcode/twitter.js';
		
		$plugin_array['youtube'] = UNIQUEPATH . '/includes/js/shortcode/youtube.js';
		$plugin_array['vimeo'] = UNIQUEPATH . '/includes/js/shortcode/vimeo.js';
		
		$plugin_array['frame'] = UNIQUEPATH . '/includes/js/shortcode/frame.js';
		$plugin_array['slider'] = UNIQUEPATH . '/includes/js/shortcode/slider.js';
		
		$plugin_array['service1'] = UNIQUEPATH . '/includes/js/shortcode/service1.js';
		$plugin_array['service2'] = UNIQUEPATH . '/includes/js/shortcode/service2.js';
		$plugin_array['service3'] = UNIQUEPATH . '/includes/js/shortcode/service3.js';
		
		$plugin_array['portfolio'] = UNIQUEPATH . '/includes/js/shortcode/portfolio.js';
		$plugin_array['post'] = UNIQUEPATH . '/includes/js/shortcode/post.js';
		
		$plugin_array['client'] = UNIQUEPATH . '/includes/js/shortcode/client.js';
		
	return $plugin_array;
	}
	 
	// init process for button control
	add_action('init', 'shortcode_addbuttons');



/* Create ShortCodes
============================================================*/

	

	// add shortcode for container
	function my_container($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "class" => '',	// dark
	        "color" => '',
	        "background" => '',
			"radius" => ''
	    ), $atts));
		
		$my_container = '<div class="container_12 '.$class.'" style="background-color:'.$background.'; color:'.$color.'; border-radius:'.$radius.';">'.do_shortcode($content).'</div>';
		return $my_container;
	}
	add_shortcode("container", "my_container");

	// Remove the auto-formatters for shortcode
	function container_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('container', 'my_container');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'container_run_shortcode', 7);
	
	
	
	// add shortcode for percent column
	function my_percolumn($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "width" => '',
	        "paddingright" => '',
	        "paddingleft" => ''
	    ), $atts));
		
		if ($paddingright=="") { $width=($width-2)."%"; $paddingright="2%"; }
		
		$my_percolumn = '<div style="float:left; width:'.$width.'; padding-right:'.$paddingright.'; padding-left:'.$paddingleft.';">'.do_shortcode($content).'</div>';
		return $my_percolumn;
	}
	add_shortcode("percent-column", "my_percolumn");

	// Remove the auto-formatters for shortcode
	function percolumn_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('percent-column', 'my_percolumn');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'percolumn_run_shortcode', 7);
	
	
	
	// add shortcode for column
	function my_column($atts, $content = null) {

		extract( shortcode_atts(array("col" => '1/1'), $atts) );
		switch($col){
			case '1/6':
				return '<div class="grid_2">'.do_shortcode($content).'</div>';
			case '1/4':
				return '<div class="grid_3">'.do_shortcode($content).'</div>';
			case '1/3':
				return '<div class="grid_4">'.do_shortcode($content).'</div>';
			case '1/2':
				return '<div class="grid_6">'.do_shortcode($content).'</div>';
			case '2/3':
				return '<div class="grid_8">'.do_shortcode($content).'</div>';
			case '3/4':
				return '<div class="grid_9">'.do_shortcode($content).'</div>';
			case '5/6':
				return '<div class="grid_10">'.do_shortcode($content).'</div>';
			default : 
			case '1/1':
				return '<div class="grid_12">'.do_shortcode($content).'</div>';
		}
	}
	add_shortcode("column", "my_column");

	// Remove the auto-formatters for shortcode
	function column_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('column', 'my_column');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'column_run_shortcode', 7);
	
	
	
	// add shortcode for h1
	function my_h1($atts, $content = null) {
		return '<div class="h-wrapper"><h1>'.do_shortcode($content).'<span class="line"></span></h1></div>';
	}
	add_shortcode("h1", "my_h1");

	// Remove the auto-formatters for shortcode
	function h1_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('h1', 'my_h1');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'h1_run_shortcode', 7);
	
	// add shortcode for h2
	function my_h2($atts, $content = null) {
		return '<div class="h-wrapper"><h2>'.do_shortcode($content).'<span class="line"></span></h2></div>';
	}
	add_shortcode("h2", "my_h2");

	// Remove the auto-formatters for shortcode
	function h2_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('h2', 'my_h2');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'h2_run_shortcode', 7);
	
	// add shortcode for h3
	function my_h3($atts, $content = null) {
		return '<div class="h-wrapper"><h3>'.do_shortcode($content).'<span class="line"></span></h3></div>';
	}
	add_shortcode("h3", "my_h3");

	// Remove the auto-formatters for shortcode
	function h3_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('h3', 'my_h3');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'h3_run_shortcode', 7);
	
	// add shortcode for h4
	function my_h4($atts, $content = null) {
		return '<div class="h-wrapper"><h4>'.do_shortcode($content).'<span class="line"></span></h4></div>';
	}
	add_shortcode("h4", "my_h4");

	// Remove the auto-formatters for shortcode
	function h4_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('h4', 'my_h4');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'h4_run_shortcode', 7);
	
	// add shortcode for h5
	function my_h5($atts, $content = null) {
		return '<div class="h-wrapper"><h5>'.do_shortcode($content).'<span class="line"></span></h5></div>';
	}
	add_shortcode("h5", "my_h5");

	// Remove the auto-formatters for shortcode
	function h5_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('h5', 'my_h5');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'h5_run_shortcode', 7);
	
	// add shortcode for h6
	function my_h6($atts, $content = null) {
		return '<div class="h-wrapper"><h6>'.do_shortcode($content).'<span class="line"></span></h6></div>';
	}
	add_shortcode("h6", "my_h6");

	// Remove the auto-formatters for shortcode
	function h6_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('h6', 'my_h6');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'h6_run_shortcode', 7);
	
	
	
	// add shortcode for accordion
	function my_accordion($atts, $content = null) {
		
		$my_accordion = 
		'<div>
			<ul class="pa-accordion">'
			.do_shortcode($content).
			'</ul>
		</div>';
		return $my_accordion;
	}
	add_shortcode("accordion", "my_accordion");

	// Remove the auto-formatters for shortcode
	function accordion_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('accordion', 'my_accordion');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'accordion_run_shortcode', 7);
	
	// add shortcode for ac_item
	function my_ac_item($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "title" => '',
	        "titlecolor" => '',
	        "titlebackground" => '',
	        "signcolor" => '',
	        "signbackground" => '',
	        "contentcolor" => '',
	        "contentbackground" => ''
	    ), $atts));
		
		$my_ac_item = 
		'<li class="sub-accordion">
			<div class="accordion-head" style="color:'.$titlecolor.'; background:'.$titlebackground.';">
				<div class="accordion-head-sign" style="color:'.$signcolor.'; background-color:'.$signbackground.';"></div>'
				.$title.
			'</div>
			<div class="accordion-content" style="color:'.$contentcolor.'; background-color:'.$contentbackground.';'.($contentbackground ? ' padding-top:20px;' : '').'">'
			.do_shortcode($content).
			'</div>
		</li>';
		return $my_ac_item;
	}
	add_shortcode("ac-item", "my_ac_item");

	// Remove the auto-formatters for shortcode
	function ac_item_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('ac-item', 'my_ac_item');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'ac_item_run_shortcode', 7);
	
	
	
	// add shortcode for toggle
	function my_toggle($atts, $content = null) {
		
		$my_toggle = 
		'<div>
			<ul class="pa-toggle">'
			.do_shortcode($content).
			'</ul>
		</div>';
		return $my_toggle;
	}
	add_shortcode("toggle", "my_toggle");

	// Remove the auto-formatters for shortcode
	function toggle_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('toggle', 'my_toggle');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'toggle_run_shortcode', 7);
	
	// add shortcode for toggle_item
	function my_to_item($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "title" => '',
	        "titlecolor" => '',
	        "titlebackground" => '',
	        "signcolor" => '',
	        "signbackground" => '',
	        "contentcolor" => '',
	        "contentbackground" => '',
	        "active" => ''	// active
	    ), $atts));
		
		$my_to_item = 
		'<li class="sub-toggle">
			<div class="toggle-head" style="color:'.$titlecolor.'; background:'.$titlebackground.';">
				<div class="toggle-head-sign" style="color:'.$signcolor.'; background:'.$signbackground.';"></div>'
				.$title.
			'</div>
			<div class="toggle-content '.$active.'" style="color:'.$contentcolor.'; background-color:'.$contentbackground.';'.($contentbackground ? ' padding-top:20px;' : '').'">'
			.do_shortcode($content).
			'</div>
		</li>';
		return $my_to_item;
	}
	add_shortcode("to-item", "my_to_item");

	// Remove the auto-formatters for shortcode
	function to_item_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('to-item', 'my_to_item');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'to_item_run_shortcode', 7);
	
	
	
	// add shortcode for tab
	function my_tab($atts, $content = null) {
		extract( shortcode_atts(array(
			"bordercolor" => '',
			"contentcolor" => '',
			"contentbackground" => ''
		), $atts) );

		global $tab_array;
		$tab_array = array();
		
		do_shortcode($content);
		
		$num = sizeOf($tab_array);
		$tab = '<ul class="tabs" style="border-color:'.$bordercolor.';">';

		for($i=0; $i<$num; $i++){
			$active = ( $i == 0 )? 'active':'';
			$tab_id = str_replace(' ', '-', $tab_array[$i]["title"]);
			
		$tab .= '<li><a href="#'.$tab_id.'" class="';
		$tab .= $active . '" style="color:'.$tab_array[$i]["titlecolor"].'; background:'.$tab_array[$i]["titlebackground"].'; border-color:'.$tab_array[$i]["titlebordercolor"].';">' . $tab_array[$i]["title"] . '</a></li>';
		}				
		
		$tab .= '</ul>';
		$tab .= '<ul class="tabs-content" style="color:'.$contentcolor.'; background-color:'.$contentbackground.';">';

		for($i=0; $i<$num; $i++){
			$active = ($i==0) ? 'active' : '';
			$tab_id = str_replace(' ', '-', $tab_array[$i]["title"]);

		$tab .= '<li id="'.$tab_id.'" class="'.$active.'">' . $tab_array[$i]["content"] . '</li>';
		}
		
		$tab .= '</ul>';

		return $tab;
	}
	add_shortcode("tab", "my_tab");
	
	// add shortcode for tab_item
	function my_tab_item( $atts, $content = null ){
		extract( shortcode_atts(array(
			"title" => '',
			"titlecolor" => '',
			"titlebackground" => '',
			"titlebordercolor" => ''
		), $atts) );
		
		global $tab_array;

		$tab_array[] = array(
		"title" => $title,
	    "titlecolor" => $titlecolor,
		"titlebackground" => $titlebackground,
		"titlebordercolor" => $titlebordercolor,
		"content" => do_shortcode($content));
	
	}
	add_shortcode('tab_item', 'my_tab_item');
	
	
	// add shortcode for price table
	function my_pricetable($atts, $content = null) {
		
		$my_pricetable = 
		'<div class="pa-price-table">
			<div class="price-item-wrapper">'
			.do_shortcode($content).
			'</div>
			<div class="clear"></div>
		</div>';
		return $my_pricetable;
	}
	add_shortcode("price-table", "my_pricetable");
	
	
	
	// add shortcode for price table item
	function my_pr_item($atts, $content = null) {
	    extract(shortcode_atts(array(
			"width" => '156px',
	        "title" => '',
	        "price" => '',
			"pricetext" => '',
	        "buttontext" => 'READ MORE',
	        "href" => '',
	        "active" => ''	// active
	    ), $atts));
		
		$my_pr_item = 
		'<div class="price-item '.$active.'" style="width:'.$width.';">
			<div class="price-title-wrapper-left">
				<div class="price-title-wrapper-right">
					<div class="price-title">'.$title.'</div>
					<div class="price-price-wrapper">
						<div class="price-price">'.$price.'</div>
						<div class="price-pricetext">'.$pricetext.'</div>
					</div>
				</div>
			</div>
			<div class="price-content-wrapper">'
				.do_shortcode($content).
			'</div>
			<div class="price-button-wrapper-left">
				<div class="price-button-wrapper-right">
					<div class="price-button">
						<a class="inblock" href="'.$href.'">
							<div class="normal-button">'.$buttontext.'</div>
						</a>
					</div>
				</div>
			</div>
		</div>';
		return $my_pr_item;
	}
	add_shortcode("pr-item", "my_pr_item");

	// Remove the auto-formatters for shortcode
	function pr_item_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('pr-item', 'my_pr_item');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'pr_item_run_shortcode', 7);
	
	
	
	// add shortcode for price text
	function my_pr_item_text($atts, $content = null) {
		
		$my_pr_item_text = 
		'<div class="price-content-left">
			<div class="price-content-right">'
			.$content.
			'</div>
		</div>';
		return $my_pr_item_text;
	}
	add_shortcode("pr-text", "my_pr_item_text");
	
	// add shortcode for faq
	function my_faq($atts, $content = null) {
		
		$my_faq = 
		'<dl class="faq_list">'
			.do_shortcode($content).
		'</dl>';
		return $my_faq;
	}
	add_shortcode("faq", "my_faq");

	// Remove the auto-formatters for shortcode
	function faq_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('faq', 'my_faq');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'faq_run_shortcode', 7);
	
	
	
	// add shortcode for faq item
	function my_faq_item($atts, $content = null) {
	    extract(shortcode_atts(array(
			"q" => '' //
	    ), $atts));
		
		$my_faq_item = 
		'<dt><span class="marker">Q?</span>'.$q.'</dt>
		<dd><span class="marker">A.</span><div>'.$content.'</div></dd>';
		return $my_faq_item;
	}
	add_shortcode("fa-item", "my_faq_item");

	// Remove the auto-formatters for shortcode
	function faq_item_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('fa-item', 'my_faq_item');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'faq_item_run_shortcode', 7);
	
	
	
	// add shortcode for client
	function my_client($atts, $content = null) {
	    extract(shortcode_atts(array(
			"class" => '',	// dark
			"showcarousel" => '',	// off
			"showdivider" => '',	// off
			"background" => ''
	    ), $atts));
		
		$rand = rand();
		$my_client = '';
		
		if ($showcarousel!='off') $my_client .=
		'<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery(".clients-wrap-'.$rand.'").jCarouselLite({
				btnNext:"",
				btnPrev:"",
				auto:5000,
				speed:1000,
				visible:5
			});
		});
		</script>';
		
		$my_client .= 
		'<div class="clients-wrapper '.$class.'"'.($background!='' ? ' style="background-color:'.$background.';"' : '').'>'
			.($showdivider!='off' ? '<span'.($background!='' ? ' style="background-color:'.$background.';"' : '').'></span>' : '').
			'<div class="clients-wrap-'.$rand.'">
				<ul class="clients'.($showdivider=='off' ? ' no-border' : '').'">'
					.do_shortcode($content).
				'</ul>
			</div></div>';
		return $my_client;
	}
	add_shortcode("client", "my_client");

	// Remove the auto-formatters for shortcode
	function client_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('client', 'my_client');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'client_run_shortcode', 7);
	
	// add shortcode for client item
	function my_client_item($atts, $content = null) {
	    extract(shortcode_atts(array(
			"href" => '#',
	        "image" => ''
	    ), $atts));
		
		return '<li><a href="'.$href.'"> <img src="'.$image.'" alt=""></a></li>';
	}
	add_shortcode("cl-item", "my_client_item");

	// Remove the auto-formatters for shortcode
	function cl_item_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('cl-item', 'my_client_item');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'cl_item_run_shortcode', 7);
	
	// add shortcode for Personnel
	function my_personnel($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "name" => '',
	        "post" => '',
	        "image" => '',
			"column" => '4',	// 2, 3, 4, 6
			"class" => '',	// dark
	        "background" => ''
	    ), $atts));
		
		if (!$column || $column=='') $column='4';
		if ($column=='2') $grid='grid_6';
		if ($column=='3') $grid='grid_4';
		if ($column=='4') $grid='grid_3';
		if ($column=='6') $grid='grid_2';
		
		$my_personnel = 
		'<div class="personnel-shortcode '.$class.' '.$grid.'">';
		if ($post!='') $my_personnel .= '<div class="personnel-post">'.$post.'</div>';
		$my_personnel .= '<div class="personnel-image" style="background-color:'.$background.'">';
			
			global $wpdb;
			$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='".trim($image)."'";
			$personnel_image_id = $wpdb->get_var($query);
			
				$personnel_image_preview = '';
				if(!empty($personnel_image_id)) {
					$personnel_image_preview = wp_get_attachment_image_src( $personnel_image_id, '200x200');
					$personnel_image_preview = (empty($personnel_image_preview)) ? '' : $personnel_image_preview[0];
				}
				
			$my_personnel .= '<img src="'.$personnel_image_preview.'" alt="" />';
				
		$my_personnel .= '
			</div>
			<div class="personnel-name">'.$name.'</div>
			<div class="personnel-details">'.$content.'</div></div>';
		return $my_personnel;
	}
	add_shortcode("personnel", "my_personnel");

	// Remove the auto-formatters for shortcode
	function personnel_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('personnel', 'my_personnel');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'personnel_run_shortcode', 7);
	
	
	
	// add shortcode for testimonial
	function my_testimonial($atts) {
	    extract(shortcode_atts(array(
	        "name" => '',
	        "type" => '',	// bubble
	        "class" => '',	// dark
			"showcarousel" => '', // off
	        "showimage" => '',	// off
	        "number" => '-1',
	        "contentlength" => '40',
	        "color" => '',
	        "background" => '',
			"imagebackground" => '',
	    ), $atts));
		
		if ($name!='') $name='&name='.$name;
		if ($showcarousel != 'off' && $number != '1') {
		$rand=rand();
		$my_testimonial = '
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery("#testimonial-shortcode-'.$rand.'").jCarouselLite({
					btnNext:"#testimonial-shortcode-prev",
					btnPrev:"#testimonial-shortcode-next",
					auto:3000,
					speed:800,
					visible:1
				});
			});
		</script>
		<div id="testimonial-shortcode-'.$rand.'" class="testimonial-shortcode-wrapper '.$type.' '.$class.'">
			<ul>';
		} else {
		$my_testimonial = '<div class="testimonial-shortcode-wrapper no-carousel '.$type.' '.$class.'">
								<ul>';
		}
		
		query_posts("post_type=testimonial&post_status=publish&posts_per_page=".$number.$name);
		while ( have_posts() ) : the_post();
		$post = get_post_meta(get_the_ID(), 'testipost', true);
		$company = get_post_meta(get_the_ID(), 'testicompany', true);
		$testilink = get_post_meta(get_the_ID(), 'testiurl', true);
		$thumb = get_the_post_thumbnail(get_the_ID(), '120x120', array('style' => '{background:#000}'));
		$content = get_the_content();
		if ($contentlength=='') $contentlength='40';
		$content = my_string_limit_words($content, $contentlength);
		
		$name = get_the_title();
		$permalink = get_permalink();
		
		if ($showimage=='off') { $testitype='testi-noimage'; $thumb=''; }
		
		if ($type != 'bubble') {
		$my_testimonial .= '
		<li class="testimonial '.($showimage=='off' ? 'testi-noimage' : '').'" style="color:'.$color.'; background-color:'.$background.';">
			<div class="testi-pic"><a href="'.$permalink.'" style="background-color:'.$imagebackground.';">'.($showimage!='off' ? $thumb : '').'</a></div><p>'
			.$content.
			'<span class="testi-name" style="color:'.$color.';"><a class="testi-user '.($class!='dark' ? 'reverse' : '').'" href="'.$permalink.'" style="color:'.$color.';">'.$name.'</a><br />
				<a href="http://'.$testilink.'" style="color:'.$color.';">'.$testilink.'</a>
			</span></p>
		</li>';
		} else {
		$my_testimonial .= '
		<li class="testimonial-shortcode">
			<div class="testimonial-bubble '.$class.'" style="color:'.$color.'; background-color:'.$background.';">
				<p>&ldquo; '.$content.' &rdquo;</p>
				<div class="testimonial-bubble-arrow" '.($background!='' ? 'style="border-color:'.$background.' transparent transparent transparent;"' : '').'></div></div>
			<span class="testimonial-bubble-details"><strong class="testimonial-bubble-name">'.$name.',</strong> '.$post.'<br>'.$company.'</span>
		</li>';
		}
		
		endwhile; wp_reset_query();
		
		$my_testimonial .= '</ul>
						</div>';
		
		return $my_testimonial;
	}
	add_shortcode("testimonial", "my_testimonial");

	// Remove the auto-formatters for shortcode
	function testimonial_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('testimonial', 'my_testimonial');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'testimonial_run_shortcode', 7);
	
	
	
	// add shortcode for button free style
	function my_button_free($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "text" => 'Read More',
	        "href" => '',
	        "size" => '',
	        "font" => '',
	        "textcolor" => '',
	        "textshadow" => '',
	        "background" => '',
	        "innerborder" => '',	// ex. 2px solid blue
	        "borderwidth" => '',
	        "bordercolor" => '',
			"borderradius" => '5px',
			"bordershadow" => '',
			"outlinecolor" => ''
	    ), $atts));
		
		if ($size>20) $lineheight = ($size*1.3).'px'; else $lineheight = $size;
		if ($outlinecolor != "") $outlinecolor = "1px solid ".$outlinecolor;
		if ($textshadow != "") $textshadow = "1px 1px 0px ".$textshadow;
		
		$my_button_free = '<div class="shortcode-button-wrapper" style="background-color:'.$bordercolor.'; padding:'.$borderwidth.'; border-radius:'.$borderradius.'; -webkit-border-radius:'.$borderradius.'; -moz-border-radius:'.$borderradius.'; border:'.$outlinecolor.'; box-shadow:'.$bordershadow.'; -webkit-box-shadow:'.$bordershadow.'; -moz-box-shadow:'.$bordershadow.';">
						 <a href="'.$href.'"><span class="shortcode-button" style="font-size:'.$size.'; font-family:'.$font.'; line-height:'.$lineheight.'; color:'.$textcolor.'; text-shadow:'.$textshadow.'; background-color:'.$background.'; border-radius:'.$borderradius.'; -webkit-border-radius:'.$borderradius.'; -moz-border-radius:'.$borderradius.'; border:'.$innerborder.';"><img src="'. UNIQUEPATH .'/images/buttonlight.png" alt="button" style="border-radius:'.$borderradius.'; -webkit-border-radius:'.$borderradius.'; -moz-border-radius:'.$borderradius.';" />'
						 	 .$text.
						 '</span></a>
					  </div>';
		return $my_button_free;
	}
	add_shortcode("button-free", "my_button_free");

	// Remove the auto-formatters for shortcode
	function button_free_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('button-free', 'my_button_free');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'button_free_run_shortcode', 7);
	
	
	
	// add shortcode for button
	function my_button($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "text" => 'READ MORE',
	        "href" => '',
			"size" => '',	// small, larg, xlarg
	        "class" => ''	// reverse
	    ), $atts));
		
		$my_button = '<a class="normal-button '.$size.' '.$class.'" href="'.$href.'" title="">'.$text.'</a>';
		return $my_button;
	}
	add_shortcode("button", "my_button");
	
	
	
	// add shortcode for space
	function my_space($atts) {
	    extract(shortcode_atts(array(
	        "height" => '40px'
	    ), $atts));
		
		$my_space  = '<div class="clear'.((intval($height)<=100 && intval($height)%5==0) ? ' mb'.intval($height).'"' : '" style="height:'.intval($height).'px;"').'></div>';
		return $my_space;
	}
	add_shortcode("space", "my_space");

	// Remove the auto-formatters for shortcode
	function space_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('space', 'my_space');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'space_run_shortcode', 7);
	
	
	
	// add shortcode for divider
	function my_divider($atts) {
	    extract(shortcode_atts(array(
	        "width" => '',
	        "color" => '',
			"style" => '',
			"text" => '',
			"textalign" => 'right',	// left, right
			"textcolor" => '',
			"textsize" => ''
	    ), $atts));
		
		if ($textalign=='left') $textalign='fleft'; else $textalign='fright';
		
		$my_divider  = '<div class="divider" style="border-bottom-width:'.$width.'; border-bottom-style:'.$style.'; border-bottom-color:'.$color.';">
							<div class="divider-gotop '.$textalign.'" style="color:'.$textcolor.'; font-size:'.$textsize.';">'.$text.'</div>
						</div>';
		return $my_divider;
	}
	add_shortcode("divider", "my_divider");
	
	// add shortcode for dropcap
	function my_dropcap($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "type" => '',	// circle
	        "color" => '',
			"background" => ''
	    ), $atts));
		
		$my_dropcap = '<span class="dropcaps '.$type.'" style="color:'.$color.'; background-color:'.$background.';">'.$content.'</span>';
		return $my_dropcap;
	}
	add_shortcode("dropcap", "my_dropcap");

	// Remove the auto-formatters for shortcode
	function dropcap_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('dropcap', 'my_dropcap');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'dropcap_run_shortcode', 7);
	
	// add shortcode for blockquote
	function my_quote($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "type" => '',	// quote1, quote2, quote3, quote4
	        "color" => '',
			"background" => '',
	        "width" => '',
	        "align" => '',	// right, left
			"textshadow" => ''
	    ), $atts));
		
		$my_quote = 
		'<div class="blockquote '.$align.' '.$type.'" style="color:'.$color.'; background-color:'.$background.'; width:'.$width.'; text-shadow:'.$textshadow.';">
			<div class="'.$type.'">'
			.do_shortcode($content).
			'</div></div>';
		return $my_quote;
	}
	add_shortcode("quote", "my_quote");

	// Remove the auto-formatters for shortcode
	function quote_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('quote', 'my_quote');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'quote_run_shortcode', 7);
	
	
	
	// add shortcode for highlight
	function my_highlight($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "color" => '',
	        "background" => ''
	    ), $atts));
		
		$my_highlight = 
		'<span class="highlight" style="color:'.$color.'; background:'.$background.';">'
			.$content.
		'</span>';
		return $my_highlight;
	}
	add_shortcode("highlight", "my_highlight");
	
	// add shortcode for frame
	function my_frame($atts, $content = null) {
	    extract(shortcode_atts(array(
			"image" => '',
	        "width" => '210',
	        "height" => '130',
			"align" => 'left',	// left, center, right
			"showlightbox" => '',	// off
			"linktype" => '',	// link, picture, video
			"href" => '',
			"showborder" => 'off',	// off
			"bordercolor" => '',
			"title" => ''
	    ), $atts));
		
		if ($showborder!='off') $showborder='border';
		if ($showlightbox!='off') $rel=' data-rel="prettyPhoto[gallery]"';
		if ($showlightbox!='off' && $href=='') { $rel=' data-rel="prettyPhoto[gallery]"'; $href=$image; $linktype='magnify'; }
		
		$my_frame ='<div class="featured-thumbnail image-frame '.$align.' '.$showborder.'" style="max-width:'.$width.'px; background:'.$bordercolor.';"><div class="image-wrap">';
		if ($href!="" || $showlightbox!="off") $my_frame .= '<a class="image-wrapper" href="'.$href.'"'.$rel.' title="'.$title.'">';
			
		$frame_preview = wp_get_attachment_image_src(get_attachment_id_from_src($image), $width.'x'.$height);
		
		if(!empty($frame_preview[0])){
		$my_frame .= '<img src="'.$frame_preview[0].'" width="'.$width.'" height="'.$height.'" alt="" title="'.$title.'" />';
		} else {
		$my_frame .= '<img src="'.$image.'" width="'.$width.'" height="'.$height.'" alt="" title="'.$title.'" />';
		}
		
		if ($href!="" || $showlightbox!='off') $my_frame .= '<span class="zoom-icon '.$linktype.'"></span>';
		if ($href!="" || $showlightbox!="off") $my_frame .= '</a>';
		
		$my_frame .= '</div></div>';
		
		return $my_frame;
	}
	add_shortcode("frame", "my_frame");

	// Remove the auto-formatters for shortcode
	function frame_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('frame', 'my_frame');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'frame_run_shortcode', 7);
	
	// add shortcode for list
	function my_list($atts, $content = null) {
	    extract(shortcode_atts(array(
			"type" => 'check',	// check, check2, check3, delete, delete2, delete3, bullet, bullet2 ,bullet3, pin, pin2, pin3, arrow, arrow2, arrow3, flag, question, follow
			"class" => ''	// bgcolor
	    ), $atts));
		
		$my_list = '<div class="list '.$type.' '.$class.'"><ul>'.do_shortcode($content).'</ul></div>';
		return $my_list;
	}
	add_shortcode("list", "my_list");

	// Remove the auto-formatters for shortcode
	function list_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('list', 'my_list');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'list_run_shortcode', 7);
	
	// add shortcode for list item
	function my_list_item($atts, $content = null) {
	    extract(shortcode_atts(array(
			"href" => ''
	    ), $atts));
		
		if ($href) $href = ' style="background-image:url('.$href.')"';
		
		$my_list_item = '<li'.$href.'>'.$content.'</li>';
		return $my_list_item;
	}
	add_shortcode("li", "my_list_item");

	// Remove the auto-formatters for shortcode
	function list_item_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('li', 'my_list_item');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'list_item_run_shortcode', 7);
	
	
	
	// add shortcode for stunning text
	function my_stunning($atts, $content = null) {
	    extract(shortcode_atts(array(
			"title" => 'your title',
			"class" => '',	// dark
			"headingcolor" => '',
			"color" => '',
			"background" => '',
			"textalign" => ''	// left, center, right
	    ), $atts));
		
		$my_stunning = '
		<div class="stunningtext '.$class.' '.($textalign ? 'text'.$textalign : '').'" '.(($color || $background) ? 'style="color:'.$color.'; background:'.$background.';"' : '').'>
			<h3 class="stunningtext-title" '.($headingcolor ? ' style="color:'.$headingcolor.';"' : '').'>'.$title.'</h3>
			<div class="stunningtext-caption">'.$content.'</div></div>';
		return $my_stunning;
	}
	add_shortcode("stunning", "my_stunning");

	// Remove the auto-formatters for shortcode
	function stunning_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('stunning', 'my_stunning');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'stunning_run_shortcode', 7);
	
	
	
	// add shortcode for progress bar
	function my_progress_bar($atts, $content = null) {
	    extract(shortcode_atts(array(
			"title" => '',
			"titlecolor" => '',
			"showtitleinside" => '',	// off
			"value" => '',
			"showvalue" => '',	// off
			"barcolor" => '',
			"background" => '',
			"showgradient" => 'off',	// off
			"showradius" => 'off'	// off
	    ), $atts));
		
		if ($titlecolor!='') $titlecolor='style="color:'.$titlecolor.';"';
		if ($showtitleinside=='off') $inside=''; else $inside = 'inside';
		if ($showradius=='off') $radius=''; else $radius = 'radius';
		if ($showvalue=='off') $showvalue='display-none'; else $showvalue = '';
		
		$my_progress_bar = '
		<div class="progress-bar-wrapper '.$inside.'" '.$titlecolor.'>';
		if ($showtitleinside=='off') $my_progress_bar .= '<span class="progress-bar-title">'.$title.'</span><span class="value '.$showvalue.'">'.$value.'</span>';
			$my_progress_bar .= '<div class="progress-bar '.$inside.' '.$radius.'" style="background-color:'.$background.';">
				<div class="progress-bar-meter" style="width:'.intval($value).'%; background-color:'.$barcolor.';">';
				if ($showgradient!='off') $my_progress_bar .= '<img src="'.get_bloginfo('template_url').'/images/progress-bar.png" alt=""/>';
			if ($showtitleinside!='off') $my_progress_bar .= '<span class="progress-bar-title inside">'.$title.'</span><span class="value '.$showvalue.'">'.$value.'</span>';
			$my_progress_bar .= '</div></div>
		</div>';
		return $my_progress_bar;
	}
	add_shortcode("progress-bar", "my_progress_bar");

	// Remove the auto-formatters for shortcode
	function progress_bar_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('progress-bar', 'my_progress_bar');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'progress_bar_run_shortcode', 7);
	
	
	
	// add shortcode for contact info
	function my_contact_info($atts, $content = null) {
	    extract(shortcode_atts(array(
			"column" => '1',	// 1, 2, 3, 4
			"phone" => '',
			"fax" => '',
			"mobile" => '',
			"email" => '',
			"web" => '',
			"address" => '',
	    ), $atts));
		
		$my_contact_info = '
		<div class="contact-info">
			<div class="phone col'.$column.'">'.$phone.'</div>
			<div class="fax col'.$column.'">'.$fax.'</div>
			<div class="mobile col'.$column.'">'.$mobile.'</div>
			<div class="email col'.$column.'">'.$email.'</div>
			<div class="web col'.$column.'">'.$web.'</div>
			<div class="address col'.$column.'">'.$address.'</div>
		</div>';
		return $my_contact_info;
	}
	add_shortcode("contact-info", "my_contact_info");
	
	// add shortcode for message box
	function my_messagebox($atts, $content = null) {
	    extract(shortcode_atts(array(
			"type" => 'red',	// red, yellow, blue, green
			"title" => '',
			"class" => ''	// small-icon, no-icon
	    ), $atts));
		
		$my_messagebox = 
		'<div class="message-box '.$class.' '.$type.'">
			<div class="message-title">'.$title.'</div>'
			.do_shortcode($content).
		'</div>';
		return $my_messagebox;
	}
	add_shortcode("message-box", "my_messagebox");

	// Remove the auto-formatters for shortcode
	function messagebox_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('message-box', 'my_messagebox');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'messagebox_run_shortcode', 7);
	
	
	
	// add shortcode for socials
	function my_social($atts, $content = null) {
	    extract(shortcode_atts(array(
			"type" => '',
			"class" => 'light'	// light, dark
	    ), $atts));
		
		if ($class!='dark') $class='light';
		
		$my_social = '<div class="social-icon '.$type.'">
							<a class="'.$class.'" href="'.$content.'" title="'.$type.'"><img src="'.get_bloginfo('template_url').'/images/icons/network/'.$class.'/'.$type.'.png" alt="" /></a>
						</div>';
						
		return $my_social;
	}
	add_shortcode("social", "my_social");

	// Remove the auto-formatters for shortcode
	function social_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('social', 'my_social');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'social_run_shortcode', 7);
	
	// add shortcode for youtube
	function my_youtube($atts, $content = null) {
	    extract(shortcode_atts(array(
			"video" => '',
			"width" => '',
			"align" => 'left',	// right, left, center
			"showborder" => 'off',	// off
			"bordercolor" => ''
	    ), $atts));
		
		preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video, $id);
		
		$my_youtube = '<div class="shortcodevideo-wrapper '.$align.'" style="width:'.$width.'px;">';
		if ($showborder!='off') $my_youtube .= '<div class="shortcodevideo-border" style="background:'.$bordercolor.';">';
		$my_youtube .= '<div class="shortcodevideo">
							<iframe src="http://www.youtube.com/embed/'.$id[1].'?wmode=transparent" width="'.$width.'" title="">youtube</iframe>
						</div>';
		if ($showborder!='off') $my_youtube .= '</div>';
		$my_youtube .= '</div>';
		
		return $my_youtube;
	}
	add_shortcode("youtube", "my_youtube");

	// Remove the auto-formatters for shortcode
	function youtube_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('youtube', 'my_youtube');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'youtube_run_shortcode', 7);
	
	
	
	// add shortcode for vimeo
	function my_vimeo($atts, $content = null) {
	    extract(shortcode_atts(array(
			"video" => '',
			"width" => '',
			"align" => 'left',	// right, left, center
			"showborder" => 'off',	// off
			"bordercolor" => ''
	    ), $atts));
		
		preg_match('/http:\/\/vimeo.com\/(\d+)$/', $video, $id);
		
		$my_vimeo = '<div class="shortcodevideo-wrapper '.$align.'" style="width:'.$width.'px;">';
		if ($showborder!='off') $my_vimeo .= '<div class="shortcodevideo-border" style="background:'.$bordercolor.';">';
		$my_vimeo .= '<div class="shortcodevideo">
						<iframe src="http://player.vimeo.com/video/'.$id[1].'?title=0&amp;byline=0&amp;portrait=0" width="'.$width.'" title="">vimeo</iframe>
					</div>';
		if ($showborder!='off') $my_vimeo .= '</div>';
		$my_vimeo .= '</div>';
		
		return $my_vimeo;
	}
	add_shortcode("vimeo", "my_vimeo");

	// Remove the auto-formatters for shortcode
	function vimeo_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('vimeo', 'my_vimeo');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'vimeo_run_shortcode', 7);
	
	
	
	// add shortcode for wall
	function my_wall($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "class" => '',	// dark
	        "padding" => '',
	        "margin" => ''
	    ), $atts));
		
		$my_wall = '<div class="'.($class!='dark' ? 'lightwall' : 'darkwall').'">
							<div style="padding:'.$padding.'; margin:'.$margin.';">'
							. do_shortcode($content) .
							'</div>
						</div>';
		return $my_wall;
	}
	add_shortcode("wall", "my_wall");

	// Remove the auto-formatters for shortcode
	function wall_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('wall', 'my_wall');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'wall_run_shortcode', 7);
	
	
	
	// add shortcode for white frame
	function my_whiteframe($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "textalign" => 'left',	// left, center, right
	        "padding" => ''
	    ), $atts));
		
		$my_whiteframe = '<div class="frame-left">
							<div class="frame-top">
								<div class="frame-right">
									<div class="frame-bottom">
										<div class="'.($textalign ? 'text'.$textalign : '').'" style="padding:'.$padding.';">'
										. do_shortcode($content) .
										'</div></div></div></div></div>';
		return $my_whiteframe;
	}
	add_shortcode("whiteframe", "my_whiteframe");

	// Remove the auto-formatters for shortcode
	function whiteframe_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('whiteframe', 'my_whiteframe');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'whiteframe_run_shortcode', 7);
	
	
	
	// add shortcode for twitter
	function my_twitter($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "id" => ''
	    ), $atts));
		
		$my_twitter = '<div class="twitter-shortcode-wrapper">
							<div class="twitter-shortcode">
								<ul id="twitter_update_list">
								<li>Twitter feed loading</li>
								</ul>
								<div><a class="profileLink normal-button" href="http://twitter.com/'.$id.'">Follow Us</a></div></div>
						<p class="mb0"><script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script><script type="text/javascript" src="https://api.twitter.com/1/statuses/user_timeline/'.$id.'.json?callback=twitterCallback2&count=1"></script></p></div>';
		return $my_twitter;
	}
	add_shortcode("twitter", "my_twitter");
	
	// add shortcode for service1
	function my_service1($atts, $content = null) {
	    extract(shortcode_atts(array(
			"column" => '4',	// 1, 2, 3, 4, 6
			"class" => '',	// dark
	        "title" => '',
			"image" => '',
			"background" => '',
			"buttontitle" => 'DETAILS',
			"href" => '#'
	    ), $atts));
		
		if ($column=='') $column='4';
		if ($column=='1') $grid='grid_12';
		if ($column=='2') $grid='grid_6';
		if ($column=='3') $grid='grid_4';
		if ($column=='4') $grid='grid_3';
		if ($column=='6') $grid='grid_2'; 
		
		if ($background!='') $background = 'style="background:'.$background.';"';
		 
		$my_service1 = 
		'<div class="service-1 '.$grid.' '.$class.'" '.$background.'>
			<div class="tilte"><h2>'.$title.'</h2></div>
			<div class="icon-wrapper"><img src="'.$image.'" alt="" /></div>
			<div class="text">'.$content.'</div>
			<div class="button-wrapper"><a href="'.$href.'" title=""><span class="normal-button">'.$buttontitle.'</span></a></div></div>';
		return $my_service1;
	}
	add_shortcode("service1", "my_service1");

	// Remove the auto-formatters for shortcode
	function service1_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('service1', 'my_service1');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'service1_run_shortcode', 7);
	
	
	
	// add shortcode for service2
	function my_service2($atts, $content = null) {
	    extract(shortcode_atts(array(
			"column" => '3',	// 1, 2, 3, 4, 6
	        "title" => '',
	        "type" => '',	// type2, type3, type4
			"image" => '',
			"href" => '#'
	    ), $atts));
		
		if ($column=='') $column='3';
		if ($column=='1') { $grid='grid_12'; $width='940'; $height='470'; }
		if ($column=='2') { $grid='grid_6'; $width='460'; $height='230'; }
		if ($column=='3') { $grid='grid_4'; $width='300'; $height='150'; }
		if ($column=='4') { $grid='grid_3'; $width='220'; $height='110'; }
		if ($column=='6') { $grid='grid_2'; $width='140'; $height='70'; }
		
		if ($type=='type3') {
			$image = wp_get_attachment_image_src(get_attachment_id_from_src($image), $width.'x'.$height); $image = $image[0];
		}
		
		$my_service2 =
		'<div class="service-2 '.$type.' '.$grid.'">';
		
		if ($type=='type3') $my_service2 .= '<img src="'.$image.'" alt="" />';
		else $my_service2 .= '<div class="icon"><img src="'.$image.'" alt="" /></div>';
		
		$my_service2 .= '<div class="text">';
		
		if ($href!='') $my_service2 .= '<h2><a href="'.$href.'" title="">'.$title.'</a></h2>';
		else $my_service2 .= '<h2 class="skin-color">'.$title.'</h2>';
		
		$my_service2 .= '<div>'.$content.'</div></div></div>';
		return $my_service2;
	}
	add_shortcode("service2", "my_service2");

	// Remove the auto-formatters for shortcode
	function service2_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('service2', 'my_service2');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'service2_run_shortcode', 7);
	
	
	
	// add shortcode for service3
	function my_service3($atts, $content = null) {
	    extract(shortcode_atts(array(
			"column" => '3',	// 1, 2, 3, 4, 6
	        "title" => '',
			"image" => '',
			"href" => '#',
			"imagebackgrond" => '',
			"bordercolor" => '',
			"background" => ''
	    ), $atts));
		
		if ($column=='') $column='3';
		if ($column=='1') $grid='grid_12';
		if ($column=='2') $grid='grid_6';
		if ($column=='3') $grid='grid_4';
		if ($column=='4') $grid='grid_3';
		if ($column=='6') $grid='grid_2'; 
		
		$my_service3 = 
		'<div class="service-3 '.$grid.'" style="background-color:'.$background.'; border-color:'.$bordercolor.'">
			<div class="icon" style="background-color:'.$imagebackgrond.'; border-color:'.$bordercolor.';">
				<img src="'.$image.'" width="40" height="40" alt="" />
			</div>
			<div class="text">'
				.$content.
			'</div>
			<h2 style="background-color:'.$bordercolor.'">
				<a href="'.$href.'" title="">'.$title.'</a><span class="triangle" '.($bordercolor!='' ? 'style="border-color:transparent transparent '.$bordercolor.';"' : '').'></span></h2></div>';
		return $my_service3;
	}
	add_shortcode("service3", "my_service3");

	// Remove the auto-formatters for shortcode
	function service3_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('service3', 'my_service3');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'service3_run_shortcode', 7);
	
	
	
	// add shortcode for slider
	function my_slider($atts, $content = null) {
	    extract(shortcode_atts(array(
			"width" => '210',
			"height" => '130',
			"align" => 'left',	// right, left, center
			"effect" => 'fade',
			"showcaption" => 'off',	// off
			"showborder" => 'off',	// off
			"bordercolor" => '',
			"showdirection" => 'off',	// off
			"showcontrol" => ''	// off
	    ), $atts));
		
		$rand = rand();
		$my_slider = '<script type="text/javascript">
				jQuery(window).load(function() {
					// shortcodeslider init
					jQuery("#shortcodeslider-'.$rand.'").nivoSlider({
						effect:"'.$effect.'",
						pauseTime: 10000,
						directionNav:'.($showdirection=='off' ? 'false' : 'true').',
						directionNavHide:true,
						controlNav:'.($showcontrol=='off' ? 'false' : 'true').',
						pauseOnHover:true
					});
				});
		</script>';
		
		if ($align=='center') $my_slider .= '<div class="shortcodeslider-wrapper">';
		$my_slider .= '<div class="shortcodeslider featured-thumbnail '.$align.' '.($showborder=='off' ? 'noborder' : '').'" style="max-width:'.$width.'px;background:'.$bordercolor.';">
						   	<div class="image-wrap">
								<div id="shortcodeslider-'.$rand.'" class="nivoSlider">';
		
		$sliderimages = explode(",",$content);
		if ($sliderimages) {
				
			foreach ($sliderimages as $sliderimage) {
			
				$slider_id = get_attachment_id_from_src ($sliderimage);
				if(!empty($slider_id)) {
					$slider_preview = wp_get_attachment_image_src($slider_id, $width.'x'.$height);
					$attachment = get_post($slider_id);
				
					$my_slider .= '<img src="'.$slider_preview[0].'" alt="" title="'.($showcaption!='off' ? $attachment->post_title : '').'" />';
				}
			}
		}
		
		$my_slider .= '</div></div>
		</div>';
		if ($align=='center') $my_slider .= '</div>';
		return $my_slider;
	}
	add_shortcode("slider", "my_slider");

	// Remove the auto-formatters for shortcode
	function slider_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('slider', 'my_slider');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'slider_run_shortcode', 7);
	
	
	
	// add shortcode for postwidget
	function my_postwidget($atts, $content = null) {
	    extract(shortcode_atts(array(
			"size" => '1/3',	// 1/1, 1/2, 1/3, 1/4, 2/3, 3/4
			"column" => '1',	// 1, 2, 3, 4
			"number" => '3',
			"category" => '',
			"header" => 'recent Posts',
			"excerptlength" => '20',
			"showmorebutton" => '',	// off
			"showcarousel" => '',	// off
			"shownavigation" => '', // off
			"showautoplay" => 'off' // off, millisecond
	    ), $atts));
		
		$rand = rand();
		$my_postwidget = '';
		
		if ($showcarousel!='off') $my_postwidget .= '<div><script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery("#posts-shortcode-'.$rand.'").jCarouselLite({
					btnNext:"#posts-shortcode-prev-'.$rand.'",
					btnPrev:"#posts-shortcode-next-'.$rand.'",
					auto:'.($showautoplay=='off' ? 'false' : 'true').',
					speed:1000,
					visible:'.$column.'
				});
			});
		</script></div>';
		
		if ($size == "1/1") { $column='grid_12 cols'; $class='grid_12'; }
		if ($size == "1/2") { if ($column=='1') $column='grid_6 cols'; else $column='grid_12 cols'; $class='grid_6'; }
		if ($size == "1/3") { if ($column=='1') $column='grid_4 cols'; elseif ($column=='2') $column='grid_8 cols'; else $column='grid_12 cols'; $class='grid_4'; }
		if ($size == "1/4") { if ($column=='1') $column='grid_3 cols'; elseif ($column=='2') $column='grid_6 cols'; elseif ($column=='3') $column='grid_9 cols'; else $column='grid_12 cols'; $class='grid_3'; }
		if ($size == "2/3") { $column='grid_8 cols'; $class='grid_8'; }
		if ($size == "3/4") { $column='grid_9 cols'; $class='grid_9'; }
		
		$my_postwidget .= '<div class="posts shortcode '.$column.' '.($showcarousel!='off' ? 'carousel' : '').'">';
		
		if ($header) $my_postwidget .= '<div class="h-wrapper"><h3 class="header">'.$header.'<span class="line"></span></h3></div>';
		$my_postwidget .= '<div class="posts-shortcode-wrapper">';
		
		if ($showcarousel!='off' && $shownavigation!='off') {
		$my_postwidget .= '<div class="posts-shortcode-nav">
								<div id="posts-shortcode-prev-'.$rand.'" class="prev"></div>
								<div id="posts-shortcode-next-'.$rand.'" class="next"></div>
							</div>';
		}
		$my_postwidget .= '<div id="posts-shortcode-'.$rand.'" class="posts-shortcode">
									<ul>';
			query_posts('post_type=post&post_status=publish&category_name='.$category.'&posts_per_page='.$number.'&paged=1');
			if ( have_posts() ) while ( have_posts() ) : the_post();
			
			$width=90; $height=70;
			/*$postcomment = get_comments_number();*/
			$postwebsite = get_post_meta(get_the_ID(), 'postwebsite', true);
			$postthumbtype = get_post_meta(get_the_ID(), 'postthumbtype', true);
			$postthumbimage = get_post_meta(get_the_ID(), 'postthumbimage', true);
			$postthumbvideo = get_post_meta(get_the_ID(), 'postthumbvideo', true);
			$postthumbslider = get_post_meta(get_the_ID(), 'postthumbslider', true);
				
			$my_postwidget .= '<li class="post-shortcode-item '.$class.'">
									<div class="details-wrap">';
			/*if (($postthumbtype=='image' && has_post_thumbnail()) || ($postthumbtype=='video' && $postthumbvideo) || ($postthumbtype=='slider' && $postthumbslider))*/
			$my_postwidget .= '<div class="featured-thumbnail">
					<div class="image-wrap">';
						if ($postthumbtype == "image") $my_postwidget .= create_image ($postthumbimage, '', $width, $height);
						if ($postthumbtype == "video") $my_postwidget .= create_video ($postthumbvideo, $width, $height);
						if ($postthumbtype == "slider") $my_postwidget .= create_slider ($postthumbslider, $width, $height);
			$my_postwidget .= '</div></div>';
			$my_postwidget .= '<div class="tilte">
					<h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3></div></div>';
			
			if ($excerptlength!=0) {
			 $my_postwidget .= '<div class="excerpt">'.my_trim_words(get_the_content(), $excerptlength, '').'</div>';	
			}
			
			if ($showmorebutton!='off') { 
			$my_postwidget .= '<div class="post-item-link">
				<a class="normal-button" href="'.get_permalink().'" title="">Read More</a>
			</div>';
			}
			
			$my_postwidget .= '</li>';
				endwhile; wp_reset_query();
			$my_postwidget .= '</ul>
				</div></div></div>';
		return $my_postwidget;
	}
	add_shortcode("post", "my_postwidget");

	// Remove the auto-formatters for shortcode
	function post_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('post', 'my_postwidget');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'post_run_shortcode', 7);
	
	
	
	// add shortcode for portwidget
	function my_portwidget($atts, $content = null) {
	    extract(shortcode_atts(array(
	        "size" => '1/4',	// 1/1, 1/2, 1/3, 1/4 
	        "column" => '',	// 1, 2, 3, 4
			"number" => '4',
			"category" => '',
			"style" => 'default',	// default, simple, style1, style2, gallery
			"showcategory" => '',	// off
			"showdate" => '',	// off (for simple style)
			"showborder" => '',	// off (for gallery style)
			"header" => 'Recent Portfolios',
			"linktext" => '',
			"linkhref" => '#',
			"showtitle" => '',	// off
			"titlelength" => '',
			"showexcerpt" => '',	// off
			"excerptlength" => '',
			"showmorebutton" => '',	// off
			"showwebbutton" => 'off',	// off
			"textalign" => '',	// left, right, center
	    ), $atts));
		
		$my_portwidget = '';
				
		if ($size == "1/1") { $column='grid_12 cols'; }
		if ($size == "1/2") { if ($column=='1') $column='grid_6 cols'; else $column='grid_12 cols'; }
		if ($size == "1/3") { if ($column=='1') $column='grid_4 cols'; elseif ($column=='2') $column='grid_8 cols'; else $column='grid_12 cols'; }
		if ($size == "1/4") { if ($column=='1') $column='grid_3 cols'; elseif ($column=='2') $column='grid_6 cols'; elseif ($column=='3') $column='grid_9 cols'; else $column='grid_12 cols'; }
		if ($style=='style1' && $titlelength==0 && $showcategory=='off' && $excerptlength==0 && $showmorebutton=='off' && $showwebbutton=='off') $delclass='delall';
		if ($style=='style2' && $showcategory=='off' && $excerptlength==0 && $showmorebutton=='off' && $showwebbutton=='off') $delclass='delall';
			
		$my_portwidget .= '<div class="ports shortcode '.$column.'">';
		if ($header || $linktext) {
		$my_portwidget .= '<div class="h-wrapper"><h3 class="ports-shortcode-header '.($showborder=='off' ? ' no-border' : '').'">'.$header.'<span class="line"></span></h3></div>';
		}
		$my_portwidget .= '<div class="ports-shortcode-headerlink">';
		if ($linkhref) {
		$my_portwidget .= '<a href="'.$linkhref.'" title="">'.$linktext.'</a>';
		}
		$my_portwidget .= '</div>';
		$my_portwidget .= '
			<ul class="portfolio-item-wrapper '.$style.($showborder!='off' ? ' border' : '').'">';
			query_posts('post_type=portfolio&portfolio-category='.$category.'&posts_per_page='.$number.'&paged=1' );
			if ( have_posts() ) while ( have_posts() ) : the_post();
			
			$portwebsite = get_post_meta(get_the_ID(), 'portwebsite', true);
			$portthumbtype = get_post_meta(get_the_ID(), 'portthumbtype', true);
			$portthumbimage = get_post_meta(get_the_ID(), 'portthumbimage', true);
			$portthumbvideo = get_post_meta(get_the_ID(), 'portthumbvideo', true);
			$portthumbslider = get_post_meta(get_the_ID(), 'portthumbslider', true);
			$portthumbimageurl = get_post_meta(get_the_ID(), 'portthumbimageurl', true);
			
			if ( has_post_thumbnail()) { $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); }
			if ($portthumbimage == "post") { $href=get_permalink(); $icon="none"; $rel=""; }
			if ($portthumbimage == "url") { $href=$portthumbimageurl; $icon="link"; $rel=""; }
			if ($portthumbimage == "full") { $href=$large_image_url[0]; $icon="magnify"; $rel="prettyPhoto[gallery]"; } 
			if ($portthumbimage == "picture") { $href=$portthumbimageurl; $icon="picture"; $rel="prettyPhoto[gallery]"; } 
			if ($portthumbimage == "video") { $href=$portthumbimageurl; $icon="video"; $rel="prettyPhoto[gallery]"; }
			
			if ($size == "1/1") { 
				if ($style=='gallery' && $showborder!='off') { $width=604; $height=304; } else { $width=620; $height=300; }; 
				if ($portstyle=='default') { $width=940; $height=450; };
				if ($titlelength=="") { if ($style=='style1') $excerptlength=30; else $excerptlength=60; }; 
				if ($excerptlength=="") { if ($style=='style1') $excerptlength=48; else $excerptlength=58; };
				$liclass="grid_12"; }
			elseif ($size == "1/2") { 
				if ($style=='gallery') { if ($showborder!='off') { $width=444; $height=274; } else { $width=460; $height=290; } } else { $width=460; $height=270; }; 
				if ($titlelength=="") $titlelength=40; 
				if ($excerptlength=="") $excerptlength=36; 
				$liclass="grid_6"; }
			elseif ($size == "1/3") { 
				if ($style=='gallery') { if ($showborder!='off') { $width=284; $height=194; } else { $width=300; $height=210; } } else { $width=300; $height=170; }; 
				if ($titlelength=="") $titlelength=22; 
				if ($excerptlength=="") $excerptlength=12; 
				$liclass="grid_4"; }
			elseif ($size == "1/4") { 
				if ($style=='gallery') { if ($showborder!='off') { $width=204; $height=154; } else { $width=220; $height=170; } } else { $width=220; $height=140; }; 
				if ($titlelength=="") $titlelength=18; 
				if ($excerptlength=="") $excerptlength=10; 
				$liclass="grid_3"; 
			}
			
				$my_portwidget .= '<li data-id="id-'.get_the_ID().'" class="portfolio-item '.$liclass.' '.get_category_filter("portfolio-category").'">';
					if ($style=='style2') { 
					$my_portwidget .= '<h2 class="portfolio-item-title';
						if ($titlelength==0) $my_portwidget .= ' notitle';
						$my_portwidget .= '">';
						if ($titlelength!=0) { 
						$my_portwidget .= '<a href="'.get_permalink().'" title="">';
						$title = get_the_title(); $my_portwidget .= substr($title, 0, $titlelength); 
						$my_portwidget .= '</a>';
						}
				$my_portwidget .= '<span class="triangle"></span>
					</h2>';
					} 
					
					if (($portthumbtype == "image" && has_post_thumbnail()) || ($portthumbtype == "video" && $portthumbvideo) || ($portthumbtype == "slider" && $portthumbslider)) { 
					$my_portwidget .= '<div class="featured-thumbnail-wrapper">';
						if ($style=='simple' && $showdate!='off') { 
					$my_portwidget .= '<div class="date-wrapper">'.get_the_time('j M Y').'</div>';
						}
					$my_portwidget .= '<div class="featured-thumbnail">
							<div class="image-wrap">';
								if ($portthumbtype == "image") $my_portwidget .= create_image ($portthumbimage, $portthumbimageurl, $width, $height);
								if ($portthumbtype == "video") $my_portwidget .= create_video ($portthumbvideo, $width, $height);
								if ($portthumbtype == "slider") $my_portwidget .= create_slider ($portthumbslider, $width, $height);
								if ($style == "gallery") { 
					$my_portwidget .= '<div class="zoom-icon gallery-port '.($showborder!='off' ? 'border' : '').'">'
									.($showborder=='off' ? '<span class="triangle"></span>' : '').
									'<div class="port-icon-wrapper">
										<a href="'.get_permalink().'" class="iconcontainer"><span></span></a>';
										if ($portthumbimage!="post") $my_portwidget .= '<a href="'.$href.'" data-rel="'.$rel.'" class="iconcontainer '.$icon.'"><span></span></a>';
										if ($titlelength!=0) $my_portwidget .= '<h2>'.get_the_title().'</h2>';
										if ($showborder!='off' && $showcategory!='off') $my_portwidget .= '<div>'.get_the_term_list(get_the_ID(), 'portfolio-category', '', ', ', '').'</div>'; 
					$my_portwidget .= '</div>';
									if ($showborder=='off') { 
					$my_portwidget .= '<div class="port-cat">';
					if ($showcategory!='off') $my_portwidget .= get_the_term_list(get_the_ID(), 'portfolio-category', '', ', ', '');
					$my_portwidget .= '<span class="triangle"></span></div>';
									} 
					$my_portwidget .= '</div>';
								}
					$my_portwidget .= '</div></div></div>';
					}
					
					if ($style!='gallery' || ($style=='gallery' && $size == "1/1")) { 
					$my_portwidget .= '<div class="portfolio-item-context '.$textalign.' '.(isset($delclass) ? $delclass : '').'">';
						
					if ($titlelength!=0 && $style!='style2') { 
					$my_portwidget .= '<h2 class="portfolio-item-title">
							<a href="'.get_permalink().'" title="">';
								$title = get_the_title(); $my_portwidget .= substr($title, 0, $titlelength); 
					$my_portwidget .= '</a></h2>';
					} 
					
					if ($style=='style1' && $titlelength==0) $my_portwidget .= '<h2 class="portfolio-item-title notitle"></h2>'; 
						
					$my_portwidget .= '<div class="portfolio-item-content-wrapper">';
					
					if ($showcategory!='off') {
					$my_portwidget .= '<div class="portfolio-item-category">';
					$my_portwidget .= get_the_term_list( get_the_ID(), 'portfolio-category', '', ', ', '' ); 
					$my_portwidget .= '</div>';
					} 
							
					if ($excerptlength!=0) { 
					$my_portwidget .= '<div class="portfolio-item-content">'.my_trim_words(get_the_content(), $excerptlength, '').'</div>';
					} 
							
					if ($showmorebutton!='off') { 
					$my_portwidget .= '<div class="inblock"><a class="normal-button" href="'.get_permalink().'" title="">READ MORE</a></div>';
					} 
							
					if ($showwebbutton!='off') { 
					$my_portwidget .= '<div class="inblock"><a class="normal-button" href="'.$portwebsite.'" title="">WEBSITE</a></div>';
					}
					
					$my_portwidget .= '</div></div>';
					} 
					
				$my_portwidget .= '</li>';
				endwhile;
			$my_portwidget .= '</ul></div>';
			wp_reset_query();
		return $my_portwidget;
	}
	add_shortcode("portfolio", "my_portwidget");

	// Remove the auto-formatters for shortcode
	function portfolio_run_shortcode($content) {
		global $shortcode_tags;
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		add_shortcode('portfolio', 'my_portwidget');
		$content = do_shortcode($content);
		$shortcode_tags = $orig_shortcode_tags;
		return $content;
	}
	add_filter('the_content', 'portfolio_run_shortcode', 7);

?>