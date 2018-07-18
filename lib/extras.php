<?

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
    case $count < 10: $size = "display-4 mb-4"; break;
    case $count < 15: $size = "display-3 mb-4"; break;
    case $count < 30: $size = "display-2 mb-4"; break;
    case $count < 40: $size = "display-1 mb-4"; break;
    default:
    $size = "display-3 mb-4";
    break;
  endswitch;

  return '<'.$wrapper.' class="'.$size.'">'.$string.'</'.$wrapper.'>';

}

/**
 * Get the flexible layout and return template file.
 */
function get_layout( $row_layout ){
  if( locate_template( array('templates/layouts/'. $row_layout .'.php') ) ):
    get_template_part('templates/layouts/'. $row_layout );
  else:
    echo '<div class="alert alert-danger m-0">De layout "'.$row_layout.'" wordt niet ondersteund.</div>';
  endif;
}

/**
 * Shows recent posts as Bootstrap 4 list items.
 */
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
          <? the_title(); ?>
        </a>

        <? if( $seconds < 172800 ): ?>
          <span class="badge badge-info">NEW</span>
        <? endif; ?>

      </li>

      <?
    endwhile;
    wp_reset_postdata();
    wp_reset_query();
  endif;
}

/**
 * Shows all items in post type 'employees'.
 * Displayed in Bootstrap 4 styling.
 */
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
      <section id="<?= strtolower( str_replace(' ','', get_the_title() ) ); ?>" class="pt-6 <?= $switch_bg; ?>">
        <div class="container">
          <div class="row">
            <div class="col-6 <?= $switch_class; ?>">
              <div class="row">
                <div class="col-3">
                  <img class="img-fluid img-circle box-shadow" src="<? the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
                </div>
                <div class="col-9">
                  <h1 class="display-4"><? the_title(); ?></h1>
                  <? if( $terms ): ?>
                    <ul class="list-group list-group-flush">
                      <? foreach( $terms as $term ): ?>
                        <li class="list-group-item <?= $switch_bg; ?>"><?= $term->name; ?></li>
                      <? endforeach; ?>
                    </ul>
                  <? endif; ?>
                </div>
              </div>
            </div>
            <div class="col-6 pt-lg-8">
              <? the_content(); ?>
            </div>
          </div>
          <div class="row justify-content-center pt-6">
            <div class="col-8">
              <? if( have_rows('content') ): ?>
                <? while( have_rows('content') ): the_row(); ?>
                  <h1 class="display-1"><? the_sub_field('title'); ?></h1>
                  <div class="mb-4">
                    <? the_sub_field('content'); ?>
                  </div>
                <? endwhile; ?>
              <? endif; ?>
            </div>
          </div>
          <div class="row text-center py-4">
            <? if( have_rows('badges') ): ?>
              <? while( have_rows('badges') ): the_row(); ?>
                <? $image = get_sub_field('image'); ?>
                <? if( !empty($image) ): ?>
                  <div class="col">
                    <img class="img-fluid" src="<?= $image['url']; ?>" alt="<? the_sub_field('title'); ?>">
                  </div>
                <? endif; ?>
              <? endwhile; ?>
            <? endif; ?>
          </div>
        </div>
      </section>
      <?
    endwhile;
    wp_reset_postdata();
    wp_reset_query();
  endif;
}

/**
 * Displays all item in post type 'Brands'
 */
function the_brands( $post_objects ){
  $modulus = 0;

  if( $post_objects ):
    ?>
    <div class="row">
    <?
    foreach( $post_objects as $post_object):
      $modulus++;
      ?>
      <div class="col-6 col-md-2-4 p-3">

        <? if( get_field('url' ,$post_object->ID) ):?>
          <a href="<? the_field('url', $post_object->ID); ?>" target="_blank" alt="<? the_title($post_object->ID); ?>">
        <? endif;?>

            <img class="img-fluid brands-img" src="<?= get_the_post_thumbnail_url($post_object->ID); ?>" title="<? the_title($post_object->ID); ?>"/>

        <? if( get_field('url', $post_object->ID) ):?>
          </a>
        <? endif;?>

      </div>
      <?

    endforeach;
    ?>
    </div>
    <?
  endif;
}
/**
 * Fire BrowserSync reload on post save
 */
add_action('save_post', function() {
  $args = ['blocking' => false];
  wp_remote_get('http://'.$_SERVER['SERVER_ADDR'].':3000/__browser_sync__?method=reload', $args);
} );
