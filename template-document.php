<?
/**
* Template Name: Document
*/

use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>

<? get_template_part('templates/header','document'); ?>

<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 lead">
        <? the_content(); ?>
      </div>
    </div>
  </div>
</section>

<? endwhile; ?>
