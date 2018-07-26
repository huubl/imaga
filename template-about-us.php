<?
/**
* Template Name: About Us
*/

use IMAGA\Theme\Assets;
use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>

  <? get_template_part('templates/header', 'jumbotron'); ?>

  <section class="bg-blue text-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <h2><i>“Thinking is to humans as swimming is to cats, we only do it when we have to”</i></h2>
          <p class="lead"><b>Marco Kramer</b></p>
        </div>
      </div>
    </div>
  </section>

  <section id="employees">
    <? Extras\the_employees(); ?>
  </section>

  <section class="reviews">
    <div class="container py-4">
      <div class="row">
        <div class="col-12 text-center py-4">
          <h2 class="display-3">Don’t just take our word for it. Here’s what our great clients are saying:</h2>
          <a class="lead text-muted link" href="#all-reviews">View all reviews <small><i class="fa fa-chevron-circle-right"></i></small></a>
        </div>
      </div>
    </div>
    <div class="container-fluid pb-5">
      <div class="row">

        <? Extras\recent_reviews(); ?>

      </div>
    </div>
  </section>

<section class="bg-red text-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h2><i>“We don't work for you, we work with you”</i></h2>
        <p class="lead"><b>Marco Kramer</b></p>
      </div>
    </div>
  </div>
</section>

<? endwhile; ?>
