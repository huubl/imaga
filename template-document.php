<?
/**
* Template Name: Document
*/

use IMAGA\Theme\Extras;
?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/header','document'); ?>

  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 lead">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; ?>
