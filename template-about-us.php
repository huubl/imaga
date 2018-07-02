<?php
/**
* Template Name: About Us
*/

use IMAGA\Theme\Assets;
use IMAGA\Theme\Extras;
?>

<?php while (have_posts()) : the_post(); ?>

  <div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0">
    <div class="container py-0">

      <div class="row">
        <div class="col-6 pt-6 pr-5">
          <h1 class="display-6 mb-4">We help agencies and companies transform more of their visitors to real customers</h1>
          <h2 class="lead mb-5">(and will teach you exactly how we do it)</h2>
        </div>
      </div>
      <div class="bg-right" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
      <a class="scroll-arrow bg-green" href="#employees"><i class="fa fa-chevron-down"></i></a>
    </div>
  </div>

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
    <?php Extras\the_employees(); ?>
  </section>

<section>
  <?php get_template_part('templates/reviews/container'); ?>
</section>

<section class="bg-flat-red text-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h2><i>“We don't work for you, we work with you”</i></h2>
        <p class="lead"><b>Marco Kramer</b></p>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
