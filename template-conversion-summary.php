<?
/**
 * Template Name: Conversion Summary
 */

use IMAGA\Theme\Assets;
?>

<? while (have_posts()) : the_post(); ?>

  <div class="jumbotron jumbotron-fluid bg-red overflow-hidden mb-0 py-0">
    <div class="container text-white">

      <div class="row justify-content-center">
        <div class="col-10">
          <h1 class="display-1 mt-6 mb-5">Discover insights that matters to your bottom line<br>with our Conversion Optimization Process</h1>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-10">
          <p class="lead mb-5">Find out exactly where and when your visitors are experiencing difficulty and work towards a total 360° optimal experience for all your customers</p>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-3">
          <a href="/conversion-optimization/conversion-research">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-research-light.svg');?>" alt="Conversion Research">
            <h4 class="text-white">Conversion<br>Research</h4>
          </a>
        </div>
        <div class="col-3">
          <a href="/conversion-optimization/conversion-strategy">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-strategy-light.svg');?>" alt="Conversion Strategy">
            <h4 class="text-white">Conversion<br>Strategy</h4>
          </a>
        </div>
        <div class="col-3">
          <a href="/conversion-optimization/conversion-design">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-design-light.svg');?>" alt="Conversion Design">
            <h4 class="text-white">Conversion<br>Design</h4>
          </a>
        </div>
        <div class="col-3">
          <a href="/conversion-optimization/conversion-build">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-build-light.svg');?>" alt="Conversion Build">
            <h4 class="text-white">Conversion<br>Build</h4>
          </a>
        </div>
      </div>

    </div>
  </div>

  <section>
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-8">
          <h1 class="display-2 mb-4">Our Conversion Optimization Research offers two kinds of data: Qualitative and Quantitative</h1>
          <p class="lead">Looking for experienced and certified Optimizers that follow a rigid and proven process? Marco is Google and ConversionXL certified and uses the CXL-Model to discover what matters most to your users and your bottom line. This Model is one of the best and internationally recognized Conversion Research frameworks and helps guide the Conversion Optimization processes and testing.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center py-5">
          <img class="img-fluid" src="<?= Assets\asset_path('images/insights-diagram.png'); ?>" alt="Insights">
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-8">
          <p class="lead mb-3">Conversion Optimization Research and good, clean data is key to getting the valuable insights, making the right business decisions and moving your company forward.</p>
          <p class="lead">We view Conversion optimization work as a process. We don’t just assume what might be wrong and we certainly don’t just start ‘fixing’ and changing your website without doing the research first.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-green">
    <div class="container text-center text-white">
      <div class="row">
        <div class="col-12">
          <h1 class="display-2 mb-4">When do you need what kind of data?</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <p class="lead">Qualitative<br>Conversion data</p>
          <a href="/conversion-optimization/conversion-research/qualitative" class="lead link">Read more<i class="ml-3 fa fa-chevron-circle-right"></i></a>
        </div>
        <div class="col-4">
          <p class="lead">Quantitative<br>Conversion data</p>
          <a href="/conversion-optimization/conversion-research/quantitative" class="lead link">Learn more<i class="ml-3 fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <? get_template_part('templates/sections/brands','banner'); ?>
  </section>

<? endwhile; ?>
