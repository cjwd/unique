<?php

// dimox breadcrumbs

function dimox_breadcrumbs() {

 

  $showOnHome = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show

  $delimiter = '&nbsp;-&nbsp;'; // delimiter between crumbs

  $home = 'Home'; // text for the 'Home' link

  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show

  $before = '<span class="current bold">'; // tag before the current crumb

  $after = '</span>'; // tag after the current crumb

 

  global $post;

  $homeLink = home_url();

 

  if (is_home() || is_front_page()) {

 

    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';

 

  } else {

 

    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

 

    if ( is_category() ) {

      global $wp_query;

      $cat_obj = $wp_query->get_queried_object();

      $thisCat = $cat_obj->term_id;

      $thisCat = get_category($thisCat);

      $parentCat = get_category($thisCat->parent);

      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));

      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

 

    } elseif ( is_search() ) {

      echo $before . 'Search results for "' . get_search_query() . '"' . $after;

 

    } elseif ( is_day() ) {

      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';

      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';

      echo $before . get_the_time('d') . $after;

 

    } elseif ( is_month() ) {

      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';

      echo $before . get_the_time('F') . $after;

 

    } elseif ( is_year() ) {

      echo $before . get_the_time('Y') . $after;

 

    } elseif ( is_single() && !is_attachment() ) {

      if ( get_post_type() != 'post' ) {

        $post_type = get_post_type_object(get_post_type());

		   $terms = get_the_terms( $post->ID, 'portfolio-category');
            
        if ( $terms && ! is_wp_error( $terms ) ) {

          $draught_links = array();

          foreach ( $terms as $term ) {
            $draught_links[] = $term->name;
          }
                    
          $on_draught = join( ", ", $draught_links );

        }
       

        switch($on_draught) {
          case 'Magnolia Inc Concession Stand':
          $page = 'for-rent';
          $page_name = 'For Rent';
          $slug = 'for-rent/magnolia-concession-stand';
          break;
          case 'Magnolia Inc For Rent':
          $page = 'for-rent';
          $page_name = 'For Rent';
          $slug = 'for-rent/magnolia-for-rent';
          break;
          case 'Sculptware For Rent':
          $page = 'sculptware';
          $page_name = 'Sculptware';
          $slug = 'sculptware/sculptware-rent';
          break;
          case 'Sculptware For Purchase':
          $page = 'sculptware';
          $page_name = 'Sculptware';
          $slug = 'sculptware/sculptware-purchase';
          break;
          default:
          $slug = 'products';
        }
        
        if ($page) {
        echo '<a href="' . $homeLink . '/' . $page . '/">' . $page_name . '</a>' . '  ' . $delimiter . ' ';
        echo '<a href="' . $homeLink . '/' . $slug . '/">' . $on_draught . '</a>';
        } else {

        echo '<a href="' . $homeLink . '/' . $slug . '/">' . $on_draught . '</a>';
        }

        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

      } else {

        $cat = get_the_category(); $cat = $cat[0];

        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');

        if ($showCurrent == 0) $cats = preg_replace("/^(.+)\s$delimiter\s$/", "$1", $cats);

        echo $cats;

        if ($showCurrent == 1) echo $before . get_the_title() . $after;

      }

 

    } else if ( is_tax() ) {

		$taxonomy = get_taxonomy ( get_query_var('taxonomy') );

		$term = get_query_var('term');

      echo $before . $taxonomy->label .': '. $term .  $after;



    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {

      $post_type = get_post_type_object(get_post_type());

      echo $before . $post_type->labels->/*singular_*/name . $after;

 

    } elseif ( is_attachment() ) {

      $parent = get_post($post->post_parent);

      $cat = get_the_category($parent->ID); $cat = $cat[0];

      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');

      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';

      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

 

    } elseif ( is_page() && !$post->post_parent ) {

      if ($showCurrent == 1) echo $before . get_the_title() . $after;

 

    } elseif ( is_page() && $post->post_parent ) {

      $parent_id  = $post->post_parent;

      $breadcrumbs = array();

      while ($parent_id) {

        $page = get_page($parent_id);

        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';

        $parent_id  = $page->post_parent;

      }

      $breadcrumbs = array_reverse($breadcrumbs);

      foreach ($breadcrumbs as $crumb) echo $crumb;

      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

 

    } elseif ( is_tag() ) {

      echo $before . 'Archive by tag "' . single_tag_title('', false) . '"' . $after;

 

    } elseif ( is_author() ) {

       global $author;

      $userdata = get_userdata($author);

      echo $before . 'Articles posted by ' . $userdata->display_name . $after;

 

    } elseif ( is_404() ) {

      echo $before . 'Error 404' . $after;

    }

 

    if ( get_query_var('paged') ) {

      /*if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )*/ echo ' (';

      echo __('Page', 'my_framework') . ' ' . get_query_var('paged');

      /*if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )*/ echo ')';

    }

 

    echo '</div>';

 

  }

}

?>