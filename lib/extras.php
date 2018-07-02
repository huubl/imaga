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

function get_layout( $row_layout ){
  if( locate_template( array('templates/layouts/'. $row_layout .'.php') ) ):
    get_template_part('templates/layouts/'. $row_layout );
  else:
    echo '<div class="alert alert-danger">De layout "'.$row_layout.'" wordt niet ondersteund.</div>';
  endif;
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

function the_employees(){
  $args = array('post_type' => 'employees','orderby' => 'post_date','order' => 'ASC');
  $query = new wp_query( $args );
  $modulus = 0;

  if($query->have_posts()):
    while( $query->have_posts() ) :
      $modulus++;
      $query->the_post();
      $terms = get_field('skills');
      if($modulus % 2 == 0):
        $switch_class = 'order-2';
        $switch_bg = 'bg-light';
      else:
        $switch_class = '';
        $switch_bg = '';
      endif;
      ?>
      <section id="<?php echo strtolower( str_replace(' ','', get_the_title() ) ); ?>" class="pt-6 <?php echo $switch_bg; ?>">
        <div class="container">
          <div class="row">
            <div class="col-6 <?php echo $switch_class; ?>">
              <div class="row">
                <div class="col-3">
                  <img class="img-fluid img-circle box-shadow" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="col-9">
                  <h1 class="display-4"><?php the_title(); ?></h1>
                  <?php if( $terms ): ?>
                    <ul class="list-group list-group-flush">
                      <?php foreach( $terms as $term ): ?>
                        <li class="list-group-item <?php echo $switch_bg; ?>"><?php echo $term->name; ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="col-6 pt-lg-8">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="row justify-content-center pt-6">
            <div class="col-8">
              <?php if( have_rows('content') ): ?>
                <?php while( have_rows('content') ): the_row(); ?>
                  <h1 class="display-5"><?php the_sub_field('title'); ?></h1>
                  <div class="mb-4">
                    <?php the_sub_field('content'); ?>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="row text-center py-4">
            <?php if( have_rows('badges') ): ?>
              <?php while( have_rows('badges') ): the_row(); ?>
                <?php $image = get_sub_field('image'); ?>
                <?php if( !empty($image) ): ?>
                  <div class="col">
                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('title'); ?>">
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </section>
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
