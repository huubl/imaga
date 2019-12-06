<?
/**
* Template Name: Work Summary
*/

use IMAGA\Theme\Assets;
use IMAGA\Theme\Extras;
?>

<div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0 py-0">
  <div class="container">

    <div class="row justify-content-center text-center">

      <div class="col-12 col-md-8 pb-4 pb-md-0">
        <h1 class="display-1 mb-3"><?php the_field('title'); ?></h1>
        <div class="lead mb-5"><?php the_field('lead'); ?></div>
      </div>

      <a class="scroll-arrow bg-yellow" href="#content"><i class="fa fa-chevron-down"></i></a>

    </div>

  </div>
</div>

<div id="content"></div>

<?php while (have_posts()) : the_post(); ?>

  <?php if( have_rows('layouts') ): ?>
    <?php while( have_rows('layouts') ): the_row(); ?>

      <?php Extras\get_layout( get_row_layout() ); ?>

    <?php endwhile; ?>
  <?php endif; ?>

<?php endwhile; ?>

<section>
  <div class="container-fluid">
    <div class="row px-2 px-md-4 px-lg-6 px-xl-8">
      <?php $args = array( 'post_type' => 'work', 'orderby' => 'post_date', 'order' => 'desc' ); ?>
      <?php $query = new wp_query( $args ); ?>
      <?php $i = 0;?>
      <div class="card-deck">
        <?php if($query->have_posts()): ?>
          <?php while( $query->have_posts() ) :  $query->the_post(); $i++; ?>

            <article <?php post_class('card box-shadow mb-4'); ?>>
              <a class="text-body" href="<?php the_permalink(); ?>">
                <?php if( has_post_thumbnail() ): ?>
                <div class="card-img-top">
                  <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <div class="card-title">
                    <header>
                      <h1 class="display-4 text-body">
                        <?php the_title(); ?>
                      </h1>
                    </header>
                  </div>
                  <div class="card-text text-muted">
                    <?php the_field('lead'); ?>
                  </div>
                </div>
              </a>
            </article>

            <?php if($i % 3 == 0): ?>
          </div><div class="card-deck">
            <?php endif; ?>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php wp_reset_query(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
