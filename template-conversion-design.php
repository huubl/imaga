<?php
/**
 * Template Name: Conversion - Design
 */

use IMAGA\Theme\Assets;
?>

<?php while (have_posts()) : the_post(); ?>

  <div class="jumbotron jumbotron-fluid bg-turquoise overflow-hidden mb-0">
    <div class="container text-center text-white">

      <div class="row">
        <div class="col-12">
          <h1 class="display-5 mt-6 mb-5">Persuasive Design build for Mobile and Desktop Jada jada jada</h1>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-9">
          <p class="lead mb-5">We’ll let the insights and data guide us when we start working on fixing what matters most to your customers</p>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-3">
          <a href="/conversion-optimization/conversion-research">
            <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-research-2.svg');?>" alt="Conversion Research">
          </a>
        </div>
        <div class="col-3">
          <a href="/conversion-optimization/conversion-strategy">
            <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-strategy-2.svg');?>" alt="Conversion Strategy">
          </a>
        </div>
        <div class="col-3 conversion-arrow">
          <a href="/conversion-optimization/conversion-design">
            <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-design-2.svg');?>" alt="Conversion Build">
          </a>
        </div>
        <div class="col-3">
          <a href="/conversion-optimization/conversion-build">
            <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-build-2.svg');?>" alt="Conversion Design">
          </a>
        </div>
      </div>

    </div>
  </div>

  <section>
    <div class="container py-5">

      <div class="row justify-content-center">
        <div class="col-8 text-center">
          <h1 class="display-6 mb-4">Our Conversion Optimization Research offers two kinds of data: Qualitative and Quantitative</h1>
          <p class="lead">Looking for experienced and certified Optimizers that follow a rigid and proven process? Marco is Google and ConversionXL certified and uses the CXL-Model to discover what matters most to your users and your bottom line. This Model is one of the best and internationally recognized Conversion Research frameworks and helps guide the Conversion Optimization processes and testing.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center py-5">
          <img class="img-fluid" src="<?php echo Assets\asset_path('images/insights-diagram.png'); ?>" alt="Insights">
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-8 text-center">
          <p class="lead mb-3">Conversion Optimization Research and good, clean data is key to getting the valuable insights, making the right business decisions and moving your company forward.</p>
          <p class="lead">We view Conversion optimization work as a process. We don’t just assume what might be wrong and we certainly don’t just start ‘fixing’ and changing your website without doing the research first.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gradient-dense-water">
    <div class="container text-center text-white py-5">
      <div class="row">
        <div class="col-12">
          <h1 class="display-6 mb-4">When do you need what kind of data?</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <p class="lead">Qualitative<br>Conversion data</p>
          <a href="#Learn-more" class="btn btn-orange btn-lg">Learn more</a>
        </div>
        <div class="col-4">
          <p class="lead">Quantitative<br>Conversion data</p>
          <a href="#Learn-more" class="btn btn-orange btn-lg">Learn more</a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <?php get_template_part('templates/sections/brands','banner'); ?>
  </section>

<?php endwhile; ?>
