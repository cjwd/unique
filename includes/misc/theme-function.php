<?php


// the excerpt based on words
function my_string_limit_words ($string, $word_limit) {
	
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words).'... ';
}


// the excerpt based on character
function my_string_limit_char ($excerpt, $substr=0) {

	$string = strip_tags(str_replace('...', '...', $excerpt));
	if ($substr>0) {
		$string = substr($string, 0, $substr);
	}
	return $string;
}


// create static css
function generate_options_css(/*$newdata*/) {
 
	/** Define some vars **/
	/*$data = $newdata;*/ 
	$uploads = wp_upload_dir();
	$css_dir = get_template_directory(); // Shorten code, save 1 call
	
	/** Capture CSS output **/
	ob_start();
	require($css_dir.'/includes/misc/options.php');
	$css = ob_get_clean();
	
	/** Write to options.css file **/
	WP_Filesystem();
	global $wp_filesystem;
	if (!$wp_filesystem->put_contents($css_dir.'/css/options.css', $css, 0644)) {
		return true;
	}	
}


// trimmer based on "wp_trim_words" for befor 3.3
function my_trim_words( $text, $num_words = 55, $more = null ) {
	if ( null === $more )
		$more = __( '&hellip;' );
	$original_text = $text;
	$text = wp_strip_all_tags( $text );
	/* translators: If your word count is based on single characters (East Asian characters),
	   enter 'characters'. Otherwise, enter 'words'. Do not translate into your own language. */
	if ( 'characters' == _x( 'words', 'word count: words or characters?' ) && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) {
		$text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
		preg_match_all( '/./u', $text, $words_array );
		$words_array = array_slice( $words_array[0], 0, $num_words + 1 );
		$sep = '';
	} else {
		$words_array = preg_split( "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY );
		$sep = ' ';
	}
	if ( count( $words_array ) > $num_words ) {
		array_pop( $words_array );
		$text = implode( $sep, $words_array );
		$text = $text . $more;
	} else {
		$text = implode( $sep, $words_array );
	}
	return apply_filters( 'my_trim_words', $text, $num_words, $more, $original_text );
}
	

// return the category for custom type
function custom_type_category ( $category_name, $parent ) {
	
	if( $parent=='' ){ 
		$categories = get_categories( array( 'taxonomy' => $category_name ));
		foreach( $categories as $category ){
			$category_list[] = $category->cat_name;
		}
		return $category_list;
	} else {
		$parent_id = get_term_by('name', $parent, $category_name);
		$categories = get_categories( array( 'taxonomy' => $category_name, 'child_of' => $parent_id->term_id ));
		$category_list = array( '0' => $parent );
		
		foreach( $categories as $category ){
			$category_list[] = $category->cat_name;
		}
		return $category_list;
	}
}


// get the category for filter
function get_category_filter ($custom_type) {
	$item_categories = get_the_terms( get_the_ID(), $custom_type );
	$item_category_slug = " ";
	if( !empty($item_categories) ){
		foreach( $item_categories as $item_category ){
			$item_category_slug .= str_replace(' ', '_', $item_category->name) . ' ';
		}
	}
	return $item_category_slug;
}


// get the category for show
function get_category_show ($custom_type) {
	$item_categories = get_the_terms( get_the_ID(), $custom_type );
	$item_category_show = " ";
	if( !empty($item_categories) ){
		foreach( $item_categories as $item_category ){
			$item_category_show .= $item_category->name . ', ';
		}
	}
	return substr($item_category_show, 0, -2);
}


// get id from iamge source
function get_attachment_id_from_src ($image_src) {
	global $wpdb;
	$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='".trim($image_src)."'";
	$id = $wpdb->get_var($query);
	return $id;
}


// create image from attachment id
function get_custom_image_from_src ($image, $full=true, $width=null, $height=null) {
	
	$image_id = get_attachment_id_from_src ($image);
	$image_src = '';
	
	if (!empty($image_id)) {
		if ($full==true) $image_src = wp_get_attachment_image_src( $image_id, 'full' );
		else $image_src = wp_get_attachment_image_src( $image_id, $width.'x'.$height);
		$image_src = '<img src="'.$image_src[0].'" alt="" />';
	}
	return $image_src;
}


// create image inside thumbnail
function create_image_inside ($image, $width, $height) {
	
	$imagevalue = get_attachment_id_from_src ($image);
	$image_full = ''; $image_preview = ''; if (!empty($imagevalue)) { 
		$image_full = wp_get_attachment_image_src( $imagevalue, 'full' );
		$image_full = (empty($image_full)) ? '' : $image_full[0];
		$image_preview = wp_get_attachment_image_src( $imagevalue, $width.'x'.$height);
		$image_preview = (empty($image_preview)) ? '' : $image_preview[0];
	}
	
	$a = '<a class="image-wrapper" href="'.$image_full.'" data-rel="prettyPhoto[gallery]" title="'.get_the_title().'">
	<img src="'.$image_preview.'" alt="'.get_the_title().'" /><span class="zoom-icon magnify"></span></a>';
	return $a;
}


// create image thumbnail
function create_image ($image, $imageurl, $width, $height) {
	
	if ( has_post_thumbnail()) { $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); }
	$href=get_permalink(); $icon="none"; $rel="";
	
	if ($image == "post") { $href=get_permalink(); $icon="none"; $rel=""; }
	if ($image == "url") { $href=$imageurl; $icon="link"; $rel=""; }
	if ($image == "full") { $href=$large_image_url[0]; $icon="magnify"; $rel="prettyPhoto[gallery]"; } 
	if ($image == "picture") { $href=$imageurl; $icon="picture"; $rel="prettyPhoto[gallery]"; } 
	if ($image == "video") { $href=$imageurl; $icon="video"; $rel="prettyPhoto[gallery]"; }
	
	$a = '<a class="image-wrapper" href="'.$href.'" data-rel="'.$rel.'" title="'.get_the_title().'" >';
	$a .= wp_get_attachment_image(get_post_thumbnail_id(), $width.'x'.$height);
	$a .= '<span class="zoom-icon '.$icon.'"></span></a>';
	return $a;
}


// create video thumbnail
function create_video ($video, $width, $height) {
								
	preg_match('@^(?:http://)?([^/]+)@i', $video, $matches);
						
	if ($matches[1] == "www.youtube.com" || $matches[1] == "youtube.com") {
		preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video, $id);
		$a = '<iframe src="http://www.youtube.com/embed/'.$id[1].'?wmode=transparent" width="'.$width.'" height="'.$height.'" title="">youtube</iframe>';
		}
	 
	elseif ($matches[1] == "www.vimeo.com" || $matches[1] == "vimeo.com") {
		preg_match('/http:\/\/vimeo.com\/(\d+)$/', $video, $id);
		$a = '<iframe src="http://player.vimeo.com/video/'.$id[1].'?title=0&amp;byline=0&amp;portrait=0" width="'.$width.'" height="'.$height.'" title="">vimeo</iframe>';
		}
	return $a;
}


// create slider thumbnail
function create_slider ($slider, $width, $height) {
	
	$rand = rand();
	$a = '<script type="text/javascript">
			jQuery(window).load(function() {
				// thumbslider init
				jQuery("#thumbslider-'.$rand.'.nivoSlider").nivoSlider({
					effect:"fade",
					directionNav:true,
					directionNavHide:true,
					controlNav:false,
				});
			});
		</script>';

	$a .= '<div id="thumbslider-'.$rand.'" class="nivoSlider" style="width:'.$width.'px; height:'.$height.'px;">';
	
	$sliderimageids = explode(",", substr($slider,0,-1));
	if ($sliderimageids) {
		foreach ($sliderimageids as $sliderimageid) {
		$image_src = wp_get_attachment_image_src($sliderimageid, $width.'x'.$height);
		$a .= '<img src="'.$image_src[0].'" alt="" />';
		}
	}
	
	$a .= '</div>';
	return $a;
}

	
// get image from media library for image chooser
add_action('wp_ajax_get_media_image','get_media_image');
function get_media_image(){
	
	$paged = (isset($_POST['page'])) ? $_POST['page'] : 1; 	
	if ($paged == '') $paged = 1;
	
	$statement = array('post_type' => 'attachment',
		'post_mime_type' =>'image',
		'post_status' => 'inherit', 
		'posts_per_page' => 12,
		'paged' => $paged);
	$media_query = new WP_Query($statement);

	?>
	
	<div class="media-gallery-nav" id="media-gallery-nav">
        <ul>
            <li class="nav-first" rel="1" ><a>First</a></li>
            
            <?php
            for ($i=1 ; $i<=$media_query->max_num_pages; $i++) {
                if ($i == $paged){
                    echo '<li rel="'.$i.'">'.$i.'</li>';
                } else if(($i <= $paged+2 && $i >= $paged-2) || $i%10 == 0) {
                    echo '<li rel="'.$i.'"><a>'.$i.'</a></li>';
                }
            }
            ?>
            
            <li class="nav-last" rel="<?php echo $media_query->max_num_pages ?>"><a>Last</a></li>
        </ul>
	</div>
	<ul>
	
	<?php
	foreach( $media_query->posts as $image ){
		$full_src = wp_get_attachment_image_src( $image->ID, 'full');
		$thumb_src = wp_get_attachment_image_src( $image->ID, '150x150');
		$thumb_src_preview = wp_get_attachment_image_src( $image->ID, '160x110');
		echo '<li><img src="' . $thumb_src[0] .'" attid="' . $image->ID . '" rel="' . $thumb_src_preview[0] . '"/></li>';
	}
	echo '</ul>';
	
	if (isset($_POST['page'])) { die(''); }
}


// create image chooser
function image_chooser($slider){
?>
<div class="meta-body image-picker-wrapper">
	<div class="meta-input-slider">
		<div class="image-picker" id="image-picker">
			<input type='hidden' id="slider-num" name='slider-num' value=<?php echo empty($slider) ? 0 : sizeof(explode(',', substr($slider, 0, -1))); ?> />
			<div class="selected-image" id="selected-image">
				<ul>
					<li id="default" class="default">
						<div class="selected-image-wrapper">
							<img src="#" alt="" />
							<div class="selected-image-element">
								<div id="unpick-image" class="unpick-image"></div>
							</div>
						</div>
						<input type="hidden" class='slider-image-url' name='' id='' />
					</li>
			
					<?php 
					$selectedimageids = explode(',', substr($slider, 0, -1));
					if ($slider) {
						foreach ( $selectedimageids as $selectedimageid ) {
							$thumbnail = wp_get_attachment_image_src($selectedimageid, '160x110');
					?>
					
					<li class="slider-image-init">
						<div class="selected-image-wrapper">
							<img src="<?php echo $thumbnail[0]; ?>" alt="" />
							<div class="selected-image-element">
								<div id="unpick-image" class="unpick-image"></div>
							</div>
						</div>
						<input type="hidden" class='slider-image-url' name='' id='' value="<?php echo $selectedimageid; ?>" /> 
					</li>

					<?php
						}
					}
					?>	
					
				</ul>
				<div id="selected-image-none"></div>
			</div>
			<div class="media-image-gallery-wrapper">
				<div id="show-media" class="show-media">
					<div id="show-media-image"></div>
				</div>
				<div class="media-image-gallery" id="media-image-gallery">
					<?php get_media_image(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}


// create comment list
function theme_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p>
			<?php _e( 'Pingback:', 'my_framework' ); ?> 
			<?php comment_author_link(); ?>
			<?php edit_comment_link( __( 'Edit', 'my_framework' ), '<span class="edit-link">', '</span>' ); ?>
		</p>
	<?php
		break;
	default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s %2$s', 'my_framework' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'my_framework' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'my_framework' ), '<span class="edit-link">', '</span>' ); ?>
				</div>

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'my_framework' ); ?></em>
					<br />
				<?php endif; ?>

			</div>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'my_framework' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div>
		</div>

	<?php
			break;
	endswitch;
}


?>