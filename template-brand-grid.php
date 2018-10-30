<?
/**
* Template Name: Brands Grid
*/

use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>

  <? get_template_part('templates/header','brands'); ?>

  <? $args = array('post_type' => 'brands', 'posts_per_page' => -1); ?>
  <? $query = new wp_query( $args ); ?>

  <? if($query->have_posts()): ?>
    <section class="layout-brands-grid">
      <div class="container pt-1">
        <div class="row justify-content-center">

        <? while( $query->have_posts() ) : $query->the_post(); ?>

          <div class="col-6 col-md-2-4 p-md-3">

              <? if( get_field('url' ,$post_object->ID) ):?>
                <a href="<? the_field('url', $post_object->ID); ?>" target="_blank" alt="<?= get_the_title($post_object->ID); ?>">
              <? endif;?>

              <img class="img-fluid brands-grid-img" src="<?= get_the_post_thumbnail_url($post_object->ID, 'brand-thumbnail'); ?>" title="<?= get_the_title($post_object->ID); ?>"/>

              <? if( get_field('url', $post_object->ID) ):?>
                </a>
              <? endif;?>

            </div>
          <? endwhile; ?>
        </div>
      </div>
    </section>
    <? wp_reset_postdata(); ?>
    <? wp_reset_query(); ?>
  <? endif; ?>

<? endwhile; ?>
