<?php

/**

 * Template Name: Portfolio

 */



get_header();



$themestyle = (get_option('mytheme_themestyle'));

$pagesidebar= get_post_meta($post->ID, 'pagesidebar', true);

$pagesidebarright = get_post_meta($post->ID, 'pagesidebarright', true);

$pagesidebarleft = get_post_meta($post->ID, 'pagesidebarleft', true);

$pagetitleonoff = get_post_meta($post->ID, 'pagetitleonoff', true);

$portstyle = get_post_meta($post->ID, 'portstyle', true);

$portthumbdateonoff = get_post_meta($post->ID, 'portthumbdateonoff', true);

$portstylegalonoff = get_post_meta($post->ID, 'portstylegalonoff', true);

$portsize = get_post_meta($post->ID, 'portsize', true);

$portcat = get_post_meta($post->ID, 'portcat', true);

$portfilteronoff = get_post_meta($post->ID, 'portfilteronoff', true);

$portnumfetch = get_post_meta($post->ID, 'portnumfetch', true);

$portthumbtitleonoff = get_post_meta($post->ID, 'portthumbtitleonoff', true);

$portlentitle = get_post_meta($post->ID, 'portlentitle', true);

$portthumbexcerptonoff = get_post_meta($post->ID, 'portthumbexcerptonoff', true);

$portlenexcerpt = get_post_meta($post->ID, 'portlenexcerpt', true);

$portalign = get_post_meta($post->ID, 'portalign', true);

$portthumbcategoryonoff = get_post_meta($post->ID, 'portthumbcategoryonoff', true);

$portmorebuttononoff = get_post_meta($post->ID, 'portmorebuttononoff', true);

$portwebbuttononoff = get_post_meta($post->ID, 'portwebbuttononoff', true);

$portpaginationonoff = get_post_meta($post->ID, 'portpaginationonoff', true);
$pageid = get_the_ID();



if ($pagesidebar=='right' || $pagesidebar=='left') $class='grid_8'; elseif ($pagesidebar=='both') $class='grid_6'; else $class='grid_12';

if ($portstyle=='style1' && $portthumbtitleonoff!='true' && $portthumbcategoryonoff!='true' && $portthumbexcerptonoff!='true' && $portmorebuttononoff!='true' && !$portwebbuttononoff) $delclass='delall';

elseif ($portstyle=='style2' && $portthumbcategoryonoff!='true' && $portthumbexcerptonoff!='true' && $portmorebuttononoff!='true' && !$portwebbuttononoff) $delclass='delall'; else $delclass='';

?>



<div id="main" class="<?php if ($themestyle == 'block') echo 'container_12'; ?>">

<div id="sub-main" class="<?php if ($themestyle != 'block') echo 'container_12'; ?>">

		

	<?php if ($pagetitleonoff=='true') { ?>

	<div class="h-wrapper h1 grid_12"><h1><?php the_title(); ?><span class="line"></span></h1></div>

	<?php } ?>

	

	<div id="content" class="portfolio-full<?php if ($pagesidebar == 'right') { echo ' portrightsidebar'; } elseif ($pagesidebar == 'left') { echo ' portleftsidebar'; } elseif ($pagesidebar == 'both') { echo ' portbothsidebar';} ?>">

		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); global $more; $more=0; ?>

		

		<?php if ($pagecontentonoff!='false') the_content('Continue Reading'); ?>

		

		<?php endwhile; ?>
		<?php /*global $more; $more=0;*/ ?>

		<?php $wp_query = new WP_Query('post_type=portfolio&portfolio-category='.$portcat.'&posts_per_page='.$portnumfetch.'&paged='.$paged );?>

		<div class="ports">

			<?php if ($portfilteronoff=='true') { ?>

			<div id="load-portfolio" class="<?php echo $class; ?>">

				<ul class="portfolio-filter" data-key="filter">

					<li><a href="#filter" data-value="*">All</a></li>

					<?php $categories = custom_type_category('portfolio-category', $category_val=null );
						//$rev_categories = arsort($categories);
						//arsort($categories);

						foreach($categories as $category){

							$category_slug = str_replace(' ', '_', $category);

							echo '<li><a href="#filter" data-value="' . $category_slug . '">' . $category . '</a></li>';

						}

					?>

				</ul>

			</div>

			<?php } ?>

			<ul id="portfolio-item-wrapper" class="portfolio-item-wrapper <?php echo $portstyle; ?> <?php if ($portstylegalonoff) echo 'border'; ?>">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post();

			

			$portwebsite = get_post_meta($post->ID, 'portwebsite', true);

			$portthumbtype = get_post_meta($post->ID, 'portthumbtype', true);

			$portthumbimage = get_post_meta($post->ID, 'portthumbimage', true);

			$portthumbvideo = get_post_meta($post->ID, 'portthumbvideo', true);

			$portthumbslider = get_post_meta($post->ID, 'portthumbslider', true);

			$portthumbimageurl = get_post_meta($post->ID, 'portthumbimageurl', true);

			

			if ( has_post_thumbnail()) { $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); }

			if ($portthumbimage == 'post') { $href=get_permalink(); $icon='none'; $rel=''; }

			if ($portthumbimage == 'url') { $href=$portthumbimageurl; $icon='link'; $rel=''; }

			if ($portthumbimage == 'full') { $href=$large_image_url[0]; $icon='magnify'; $rel='prettyPhoto[gallery]'; }

			if ($portthumbimage == 'picture') { $href=$portthumbimageurl; $icon='picture'; $rel='prettyPhoto[gallery]'; }

			if ($portthumbimage == 'video') { $href=$portthumbimageurl; $icon='video'; $rel='prettyPhoto[gallery]'; }

			

			if ($pagesidebar && $pagesidebar!='no') {

				if ($pagesidebar == 'both') {

					if ($portsize != '12') {

						$width=240; $height=130;

						if ($portstyle=='default') { $width=460; $height=250; };

						if ($portlentitle=='') $portlentitle=18;

						if ($portlenexcerpt=='') { if ($portstyle=='style1') $portlenexcerpt=10; else $portlenexcerpt=16; };

						$liclass='grid_12 twosidebar'; }

					elseif ($portsize == '12') {

						$width=220; $height=130;

						if ($portlentitle=='') $portlentitle=18;

						if ($portlenexcerpt=='') $portlenexcerpt=16;

						$liclass='grid_6 twosidebar'; }

				}

				else {

					if ($portsize == '11') {

						if ($portstyle=='style1') { $width=300; $height=210; } elseif ($portstyle=='default') { $width=620; $height=434; } else { $width=320; $height=180; };

						if ($portlentitle=='') $portlentitle=24;

						if ($portlenexcerpt=='') { if ($portstyle=='style1') $portlenexcerpt=12; else $portlenexcerpt=20; };

						$liclass='grid_12 onesidebar'; }

					elseif ($portsize == '12') {

						$width=300; $height=180;

						if ($portlentitle=='') $portlentitle=24;

						if ($portlenexcerpt=='') $portlenexcerpt=20;

						$liclass='grid_6 onesidebar'; }

					elseif ($portsize == '13') {

						$width=193; $height=115;

						if ($portlentitle=='') $portlentitle=17;

						if ($portlenexcerpt=='') $portlenexcerpt=16;

						$liclass='grid_4 onesidebar'; }

					elseif ($portsize == '14') {

						if ($portstyle=='gallery' && !$portstylegalonoff) { $width=140; $height=100; } else { $width=140; $height=80; };

						if ($portlentitle=='') $portlentitle=13;

						if ($portlenexcerpt=='') $portlenexcerpt=11;

						$liclass='grid_3 onesidebar'; }

					}

			} else {

				if ($portsize == '11') {

					if ($portstyle=='gallery' && $portstylegalonoff) { $width=604; $height=304; } else { $width=620; $height=300; };

					if ($portstyle=='default') { $width=940; $height=450; };

					if ($portlentitle=='') { if ($portstyle=='style1') $portlentitle=30; else $portlentitle=60; }; 

					if ($portlenexcerpt=='') { if ($portstyle=='style1') $portlenexcerpt=48; else $portlenexcerpt=58; }; 

					$liclass='grid_12'; }

				elseif ($portsize == '12') { 

					if ($portstyle=='gallery') { if ($portstylegalonoff) { $width=444; $height=274; } else { $width=460; $height=290; } } else { $width=460; $height=270; }; 

					if ($portlentitle=='') $portlentitle=40; 

					if ($portlenexcerpt=='') $portlenexcerpt=36; 

					$liclass='grid_6'; }

				elseif ($portsize == '13') { 

					if ($portstyle=='gallery') { if ($portstylegalonoff) { $width=284; $height=194; } else { $width=300; $height=210; } } else { $width=300; $height=170; }; 

					if ($portlentitle=='') $portlentitle=22; 

					if ($portlenexcerpt=='') $portlenexcerpt=12; 

					$liclass='grid_4'; }

				elseif ($portsize == '14') { 

					if ($portstyle=='gallery') { if ($portstylegalonoff) { $width=204; $height=154; } else { $width=220; $height=170; } } else { $width=220; $height=140; }; 

					if ($portlentitle=='') $portlentitle=18; 

					if ($portlenexcerpt=='') $portlenexcerpt=10; 

					$liclass='grid_3'; 

				}

			}	

			?>

				<li data-id="id-<?php echo $post->ID; ?>" class="portfolio-item <?php echo $liclass; echo get_category_filter('portfolio-category'); ?>">

					<?php if ($portstyle=='style2') { ?>

					<h2 class="portfolio-item-title <?php if ($portthumbtitleonoff!='true') echo 'notitle'; ?>">

						<?php if ($portthumbtitleonoff=='true') { ?>

						<a href="<?php the_permalink(); ?>" title="">

							<?php $title = get_the_title(); echo substr($title, 0, $portlentitle); ?>

						</a>

						<?php } ?>

						<span class="triangle"></span>

					</h2>

					<?php } ?>

					

					<?php if (($portthumbtype == 'image' && has_post_thumbnail()) || ($portthumbtype == 'video' && $portthumbvideo) || ($portthumbtype == 'slider' && $portthumbslider)) { ?>

					<div class="featured-thumbnail-wrapper <?php echo $portthumbtype; ?>">

						<?php if ($portstyle=='simple' && $portthumbdateonoff=='true') { ?>

						<div class="date-wrapper<?php if ($portthumbdateonoff!='true') echo ' nodate'; ?>">

						<?php the_time('j M Y'); ?></div>

						<?php } ?>

						<div class="featured-thumbnail">

							<div class="image-wrap">

								<?php if ($portthumbtype == 'image') echo create_image ($portthumbimage, $portthumbimageurl, $width, $height); ?>

								<?php if ($portthumbtype == 'video') echo create_video ($portthumbvideo, $width, $height); ?>

								<?php if ($portthumbtype == 'slider') echo create_slider ($portthumbslider, $width, $height); ?>

								<?php if ($portstyle == 'gallery') { ?>

								<div class="zoom-icon gallery-port <?php if ($portstylegalonoff) echo 'border'; ?>">

									<?php if (!$portstylegalonoff) echo '<span class="triangle"></span>'; ?>

									<div class="port-icon-wrapper">

										<a href="<?php the_permalink(); ?>" class="iconcontainer"><span></span></a>

										<?php if ($portthumbimage!='post') { ?><a href="<?php echo $href; ?>" data-rel="<?php echo $rel; ?>" class="iconcontainer <?php echo $icon; ?>"><span></span></a><?php } ?>

										<?php if ($portthumbtitleonoff=='true') { ?><h2><?php the_title(); ?></h2><?php } ?>

										<div><?php if ($portstylegalonoff && $portthumbcategoryonoff=='true') echo get_the_term_list( $post->ID, 'portfolio-category', '', ', ', '' ); ?></div>

									</div>

									<?php if (!$portstylegalonoff) { ?>

									<div class="port-cat"><?php if ($portthumbcategoryonoff=='true') echo get_the_term_list( $post->ID, 'portfolio-category', '', ', ', '' ); ?><span class="triangle"></span></div>

									<?php } ?>

								</div>

								<?php } ?>

							</div>

						</div>

						<!-- end of .featured-thumbnail -->

					</div>

					<!-- end of .featured-thumbnail-wrapper -->

					<?php } ?>

					

					<?php if ($portstyle!='gallery' || ($portstyle=='gallery' && $portsize == '11')) { ?>

					<div class="portfolio-item-context<?php echo ' '.$portalign; echo ' '.$delclass ?>">

						

						<?php if ($portthumbtitleonoff=='true' && $portstyle!='style2') { ?>

						<h2 class="portfolio-item-title">

							<a href="<?php the_permalink(); ?>" title="">

								<?php $title = get_the_title(); echo substr($title, 0, $portlentitle); ?>

							</a>

						</h2>

						<?php } ?>

						<?php if ($portstyle=='style1' && $portthumbtitleonoff!='true') echo '<h2 class="portfolio-item-title notitle"></h2>'; ?>

						

						<div class="portfolio-item-content-wrapper">

							<?php if ($portthumbcategoryonoff=='true') { ?>

							<div class="portfolio-item-category">

							<?php echo get_the_term_list( $post->ID, 'portfolio-category', '', ', ', '' ); ?>

							</div>

							<?php } ?>

							

							<?php if ($portthumbexcerptonoff=='true') { ?>

							<div class="portfolio-item-content">

								<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt, $portlenexcerpt);?>

							</div>

							<?php } ?>

							

							<?php if ($portmorebuttononoff=='true') { ?>

							<a class="normal-button" href="<?php the_permalink();?>?&from=<?php echo $pageid; ?>" title="">

								<?php _e('READ MORE', 'my_framework'); ?>

							</a>

							<?php } ?>

							

							<?php if ($portwebbuttononoff=='true' && $portwebsite) { ?>

							<a class="normal-button" href="<?php echo $portwebsite; ?>" title="">

								<?php _e('WEBSITE', 'my_framework'); ?>

							</a>

							<?php } ?>

						</div>

						<!-- end of .portfolio-item-content-wrapper -->

						

					</div>

					<!-- end of .portfolio-item-context -->

					<?php } ?>

					

				</li>

				<?php endwhile; ?>

			</ul>

		</div>

		<div class="<?php echo $class; ?>">

		<?php if (($wp_query->max_num_pages > 1) && ($portpaginationonoff=='true')) {

			if (function_exists('pagination')) pagination();

		} ?>

		</div>

	</div>

	<!-- end of #content -->

		<?php get_sidebar('left'); ?>

		<?php get_sidebar('right'); ?>

</div>

</div>

<!-- end of #main -->

<?php get_footer(); ?>