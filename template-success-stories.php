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
        <h1 class="display-1 mb-3"><? the_field('title'); ?></h1>
        <div class="lead mb-5"><? the_field('lead'); ?></div>
      </div>

      <a class="scroll-arrow bg-yellow" href="#content"><i class="fa fa-chevron-down"></i></a>

    </div>

  </div>
</div>

<div id="content"></div>

<? while (have_posts()) : the_post(); ?>

  <? if( have_rows('layouts') ): ?>
    <? while( have_rows('layouts') ): the_row(); ?>

      <? Extras\get_layout( get_row_layout() ); ?>

    <? endwhile; ?>
  <? endif; ?>

<? endwhile; ?>

<section>
  <div class="container-fluid">
    <div class="row px-xs-2 px-md-4">
      <? $args = array( 'post_type' => 'work', 'orderby' => 'post_date', 'order' => 'desc' ); ?>
      <? $query = new wp_query( $args ); ?>
      <? $i = 0;?>
      <div class="card-deck">
        <? if($query->have_posts()): ?>
          <? while( $query->have_posts() ) :  $query->the_post(); $i++; ?>

            <article <? post_class('card box-shadow mb-4'); ?>>
              <a class="text-body" href="<? the_permalink(); ?>">
                <? if( has_post_thumbnail() ): ?>
                <div class="card-img-top">
                  <img class="img-fluid" src="<? the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
                </div>
                <? endif; ?>
                <div class="card-body">
                  <div class="card-title">
                    <header>
                      <h1 class="display-4 text-body">
                        <? the_title(); ?>
                      </h1>
                    </header>
                  </div>
                  <div class="card-text text-muted">
                    <? the_field('lead'); ?>
                  </div>
                </div>
              </a>
            </article>

            <? if($i % 3 == 0): ?>
          </div><div class="card-deck">
            <? endif; ?>

          <? endwhile; ?>
          <? wp_reset_postdata(); ?>
          <? wp_reset_query(); ?>
        <? endif; ?>
      </div>
    </div>
  </div>
</section>
