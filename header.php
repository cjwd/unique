<!DOCTYPE html>
<html <?php language_attributes(); ?>><head>
<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo('name'); echo ' , '; bloginfo('description'); ?>" />
<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo('description'); ?>" />
<meta name="author" content="" />
<meta name="viewport" content="initial-scale=1.0, width=device-width"/>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php $faviconimageonoff = get_option('mytheme_faviconimageonoff'); $favicon = get_option('mytheme_faviconimage'); ?>
<link rel="shortcut icon" href="<?php if ($faviconimageonoff=='true' && $favicon) echo $favicon; else echo get_template_directory_uri().'/favicon.ico'; ?>" type="image/x-icon" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<title><?php if ( is_tag() ) {
echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo('name');
} elseif ( is_archive() ) {
wp_title(); echo ' Archive | '; bloginfo('name');
} elseif ( is_search() ) {
echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo('name');
} elseif ( is_home() ) {
bloginfo( 'name' ); echo ' | '; bloginfo('description');
}  elseif ( is_404() ) {
echo 'Error 404 Not Found | '; bloginfo('name');
} else {
echo wp_title( ' | ', false, 'right' ); bloginfo('name');
} ?></title>

<?php
if (!is_404()) {
$pageslider = get_post_meta($post->ID, 'pageslider', true);
$pageimageonoff = get_post_meta($post->ID, 'pageimageonoff', true);
$pageimage = get_post_meta($post->ID, 'pageimage', true);
$pageimageleft = get_post_meta($post->ID, 'pageimageleft', true);
$pageimagetop = get_post_meta($post->ID, 'pageimagetop', true);
$pageimagerepeat = get_post_meta($post->ID, 'pageimagerepeat', true);
$pageimagefix = get_post_meta($post->ID, 'pageimagefix', true);
$pagesloganonoff = get_post_meta($post->ID, 'pagesloganonoff', true);
$pagebreadcrumbonoff = get_post_meta($post->ID, 'pagebreadcrumbonoff', true);
global $pagefooterstyleonoff;
$pagefooterstyleonoff = get_post_meta($post->ID, 'pagefooterstyleonoff', true);
if ($pageimageonoff && $pageimage) $pageimage = 'style="background:url('.$pageimage.') '.$pageimageleft.' '.$pageimagetop.' '.$pageimagerepeat.' '.$pageimagefix.';"';
}

$logoimageonoff = get_option('mytheme_logoimageonoff');
$logoimage = get_option('mytheme_logoimage');

global $slider;
$slider = get_option('mytheme_slider');
$showslider = get_option('mytheme_showslider');

global $slideronoff;
if (is_404() || !$pageslider) $pageslider='notset';
if (($pageslider!='false' && $pageslider!='notset') || ($pageslider=='notset' && $showslider=='true')) $slideronoff=true; else $slideronoff=false;
if ($pageslider!='false' && $pageslider!='notset') $slider=$pageslider;
?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="body-background" <?php if (isset($pageimage)) echo $pageimage; ?>>
<?php if ($slideronoff==true && $slider=='bgstretcher') { ?>
<div id="stretcher"></div>
<?php if (get_option('mytheme_bgstretcherpagination')=='true') { ?>
<div class="sliderNav">
	<div class="rt-container">
		<div id="nav"></div>
	</div>
</div>
<?php } ?>
<?php } ?>
<div class="body-wrapper">
	<div id="header">
		<div class="header-up-wrapper">
			<div id="top-nav-wrapper">
				<div id="top-nav-container" class="container_12">
					<?php if (get_option('mytheme_topbaronoff')!='disable') { ?>
					<div id="top-nav" class="grid_12">
						<div id="top-nav-left"><?php if (get_option('mytheme_topbarnavonoff')=='true') wp_nav_menu( array( 'menu_id' => 'top-menu', 'before' => '<span class="divider">|</span>', 'theme_location' => 'top_menu' )); ?></div>
						<div id="top-nav-right"><?php echo get_option('mytheme_topbartext'); ?></div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div id="header-up" class="container_12">
				<div class="grid_12">
					<div id="logo-wrapper">
						<?php if($logoimageonoff & $logoimage){ ?>
						<a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_option('mytheme_logoimage'); ?>" <?php if (get_option('mytheme_logowidth')) echo 'width="'.get_option('mytheme_logowidth').'" '; if (get_option('mytheme_logoheight')) echo 'height="'.get_option('mytheme_logoheight').'"' ?> alt="<?php bloginfo( 'name' ); ?>" /></a>
						<?php } ?>
					</div>
					<div class="top-information-wrapper">
						<div class="social-wrapper">
							<ul>
							<?php
							$socials = array('delicious','deviantart','digg','facebook','flickr','google','lastfm','linkedin','picasa','rss','stumbleupon','tumblr','twitter','vimeo','youtube');
							foreach ($socials as $social) {
								if (get_option('mytheme_'.$social.'network')) echo '<li class="social-icon '.$social.'"><a class="'.get_option('mytheme_socialclass').'" href="'.get_option('mytheme_'.$social.'network').'" target="_blank"><img src="'.get_template_directory_uri().'/images/icons/network/'.get_option('mytheme_socialclass').'/'.$social.'.png" alt=""></a></li>';
							}
							?>
							</ul>
						</div>
						<?php if (get_option('mytheme_topinfoonoff')){ ?>
						<div class="top-information"><?php echo stripslashes(get_option('mytheme_topinfo')); ?></div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- end of .header-up-wrapper -->
		<div class="header-down-wrapper">
			<div id="header-down">
				<div id="menu-wrap">
					<div id="menu-wrapper" class="container_12">
						<?php wp_nav_menu( array(
							'container'       => 'ul', 
							'menu_class'      => 'sf-menu', 
							'menu_id'         => 'main-nav',
							'depth'           => 0,
							'link_before'     => '',
							'link_after'      => '',
							'theme_location'  => 'main_menu' 
							)); 
						?>
						<?php if (get_option('mytheme_topsearchonoff')!='disable') { ?>
						<form class="searchform" method="get" action="<?php echo home_url(); ?>">
						<div class="search-wrapper top <?php if (get_option('mytheme_topsearchonoff')=='enable') echo 'open'; ?>">
							<label for="s" class="display-none">search</label>
							<input class="text" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
							<input class="submit" type="submit" value="" />
						</div>
						</form>
						<?php } ?>
					</div>
					<!-- end of menu-wrapper -->
				</div>
				<!-- end of menu-wrap -->
				
				<?php if ($slideronoff==false || ($slideronoff==true && $slider=='bgstretcher')) { /* if top slider is off */?>
				<?php if (is_404() || $pagesloganonoff!='false') { /* page slogan is on */?>
				<div id="slogan-wrapper">
				<?php if (get_option('mytheme_sloganonoff')!='false') { ?>
					<div id="slogan" class="container_12">
						<?php if (get_option('mytheme_slogancontrolonoff')=='true') { ?>
						<div class="slogan-control">
							<div class="slogan-next"></div><div class="slogan-prev"></div>
						</div>
						<?php } ?>
						<div class="slogan">
							<ul>
							<?php $slgans = explode("|",get_option('mytheme_slogan'));
							if ($slgans) {
								foreach ( $slgans as $slgan ) { echo '<li>'.$slgan.'</li>'; }
							} ?>
							</ul>
						</div>
					</div>
				<?php } ?>
				</div>
				<?php } ?>
				<?php if (is_404() || $pagebreadcrumbonoff!='false') { /* page breadcrumb is on */?>
				<?php if (get_option('mytheme_breadcrumbonoff')!='false') { ?>
				<div id="breadcrumb-wrapper">
					<div id="breadcrumb" class="container_12">
					<?php
					$from = $_GET['from'];
					if (isset($_GET) && $from == 549) {
						$post_type = get_post_type_object(get_post_type());
						$homeLink = home_url();
						//echo product breadcrumb 
						echo '<a href="' . $homeLink . '/' . '">' . 'Home' . '</a> - ';
						echo '<a href="' . $homeLink . '/' . 'products' . '/">' . 'Products' . '</a> - ';
						echo '<strong>' . get_the_title() . '</strong>';
						
					} elseif (isset($_GET) && $from == 693) {
						$post_type = get_post_type_object(get_post_type());
						$homeLink = home_url();
						//echo product breadcrumb 
						echo '<a href="' . $homeLink . '/' . '">' . 'Home' . '</a> - ';
						echo '<a href="' . $homeLink . '/' . 'for-rent' .'">' . 'For Rent' . '</a> - ';
						echo '<a href="' . $homeLink . '/' . 'for-rent' . '/sculptware-for-rent'.'">' . 'Sculptware For Rent' . '</a> - ';
						echo '<strong>' . get_the_title() . '</strong>';

					} else {
						if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs();
					}
					
					 

					?>
					</div>
				</div>
				<?php } ?>
				<?php } ?>
				<?php } else { /* if slider is on */?>
				<div id="slider-wrapper">
				<?php include_once(TEMPLATEPATH . '/slider.php'); ?>
				</div>
				<?php } ?>
			</div>
		</div>
		<!-- end of .header-down-wrapper --> 
	</div>
	<!-- end of #header -->