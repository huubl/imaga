<?php
/**
* Template Name: Brands Grid
*/

use IMAGA\Theme\Extras;
?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/header','brands'); ?>

  <?php $args = array('post_type' => 'brands', 'posts_per_page' => -1); ?>
  <?php $query = new wp_query( $args ); ?>

  <?php if($query->have_posts()): ?>
    <section class="layout-brands-grid">
      <div class="container pt-1">
        <div class="row justify-content-center">

        <?php while( $query->have_posts() ) : $query->the_post(); ?>

          <div class="col-6 col-md-2-4 p-md-3">

              <?php if( get_field('url' ,$post_object->ID) ):?>
                <a href="<?php the_field('url', $post_object->ID); ?>" target="_blank" alt="<?php echo get_the_title($post_object->ID); ?>">
              <?php endif;?>

              <img class="img-fluid brands-grid-img" src="<?php echo get_the_post_thumbnail_url($post_object->ID, 'brand-thumbnail'); ?>" title="<?php echo get_the_title($post_object->ID); ?>"/>

              <?php if( get_field('url', $post_object->ID) ):?>
                </a>
              <?php endif;?>

            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <?php wp_reset_postdata(); ?>
    <?php wp_reset_query(); ?>
  <?php endif; ?>

<?php endwhile; ?>
