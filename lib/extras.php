<?php

namespace IMAGA\Theme\Extras;

use IMAGA\Theme\Setup;
use WP_Query;

/**
* Add <body> classes
*/
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
* Clean up the_excerpt()
*/
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'imaga') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/**
* Selecting Display heading based on length of string
* TODO: find a better function name
*/
function heading_based_on_length( $string , $wrapper = "h2"){

  $count = mb_strlen( $string );

  switch ($count):
    case $count < 10: $size = "display-2"; break;
    case $count < 15: $size = "display-3"; break;
    case $count < 30: $size = "display-4"; break;
    case $count < 40: $size = "display-5"; break;
    case $count < 50: $size = "display-6"; break;
    default:
    $size = "display-7";
    break;
  endswitch;

  return '<'.$wrapper.' class="'.$size.'">'.$string.'</'.$wrapper.'>';

}

function switch_row_layout( $row_layout ){
  switch ($row_layout) {
    case 'layout_content':
    get_template_part('templates/globals/content');
    break;

    case 'layout_facts':
    get_template_part('templates/parts/facts');
    break;

    default:
    echo '<div class="alert alert-danger">De layout "'.$row_layout.'" wordt niet ondersteund.</div>';
    break;
  }
}

function recent_posts( $post_per_page = 4 ){


  $args = array('post_type' => 'post', 'posts_per_page' => $post_per_page);

  $query = new wp_query( $args );

  if($query->have_posts()):

  while( $query->have_posts() ) :

  $query->the_post();
  $seconds = strtotime("now") - strtotime(get_the_date("Y/m/d"));
  ?>

  <li class="list-item py-1">

    <a href="#article" class="text-gray-500">
      <?php the_title(); ?>
    </a>

    <?php if( $seconds < 172800 ): ?>
      <span class="badge badge-info">NEW</span>
    <?php endif; ?>

  </li>

  <?php
  endwhile;
  wp_reset_postdata();
  wp_reset_query();
  endif;
}

// BrowserSync reload on post save
add_action('save_post', function() {
  $args = ['blocking' => false];
  wp_remote_get('http://'.$_SERVER['SERVER_ADDR'].':3000/__browser_sync__?method=reload', $args);
} );
