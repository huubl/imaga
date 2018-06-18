<?php
/**
 * Template Name: Conversion - Design
 */

use IMAGA\Theme\Assets;
?>

<?php while (have_posts()) : the_post(); ?>

  <div class="jumbotron jumbotron-fluid bg-green overflow-hidden mb-0">
    <div class="container text-white py-0">

      <div class="row justify-content-center">
        <div class="col-10">
          <h1 class="display-5 mt-6 mb-5">Persuasive Web Designs created for your<br>customers and their tasks</h1>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-10">
          <p class="lead mb-5">We help clients and agencies produce great persuasive designs</p>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-3">
          <a href="/conversion-optimization/conversion-research">
            <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-research-light.svg');?>" alt="Conversion Research">
          </a>
        </div>
        <div class="col-3">
          <a href="/conversion-optimization/conversion-strategy">
            <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-strategy-light.svg');?>" alt="Conversion Strategy">
          </a>
        </div>
        <div class="col-3 conversion-arrow">
          <a href="/conversion-optimization/conversion-design">
            <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-design-light.svg');?>" alt="Conversion Build">
          </a>
        </div>
        <div class="col-3">
          <a href="/conversion-optimization/conversion-build">
            <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-build-light.svg');?>" alt="Conversion Design">
          </a>
        </div>
      </div>

    </div>
  </div>

  <section class="bg-light">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-8">
          <h1 class="display-6 mb-4">Why do you need Persuasive Web Design?</h1>
          <p class="lead">We talk about Persuasive Web Design when we create designs based on the insights and data we uncovered during your Conversion Research. When we combine these with the latest persuasive techniques, the magic happens.It all starts with a focus on your customers. We’ll let that guides us when we start improving your website’s design.</p>
        </div>
      </div>

    </div>
  </section>

  <section>
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-8">
          <h2 class="display-6 mb-4">Designs that answer your customers specific questions in a heartbeat:</h2>
          <ul class="list-unstyled">
            <li><h4 class="display-6"><i class="fa fa-check"></i> Who is your customer?</h4></li>
            <li><h4 class="display-6"><i class="fa fa-check"></i> What motivates them?</h4></li>
            <li><h4 class="display-6"><i class="fa fa-check"></i> What goals are they trying to reach?</h4></li>
            <li><h4 class="display-6"><i class="fa fa-check"></i> And how can your company help them best?</h4></li>
          </ul>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-8">
          <p class="lead mt-4">Of course, none of this will work without knowing the specific questions your customers have during each step in the Customers’ Journey!</p>
        </div>
      </div>

    </div>
  </section>

  <section class="bg-flat-red">
    <div class="container">

      <div class="row">
        <div class="col-6 text-white">
          <h2 class="display-6 mb-4">Clarity Above All</h2>
          <p class="lead">We want your new designs to be very specific. The same goes for your buttons, your Call-To-Actions, photo’s and other elements. Because we know: A strong visual appearance combined with a low visual complexity matters to your customers</p>
        </div>
        <div class="col-6 text-center px-5">
          <div class="preview-cta card box-shadow py-7">
            <p class="lead">Example of Call To Actions</p>
            <p class="lead"><a href="#free-t" class="btn btn-red">Get your free t-shirt!</a></p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-8">
          <h2 class="display-6 mb-4">For our clients and agencies</h2>
          <p class="lead">Your customers aren’t looking to be wowed for the sake of being wowed. On their PC, tablet but especially on their mobile they have a task to complete. We’ll make sure your website communicates back just what they are looking for.</p>
          <p class="lead">We create web-designs (but also help agencies create persuasive designs) with a familiar layout and a clear hierarchy so moving through the website feels natural and becomes easy.</p>
          <p class="lead"><a href="#prices-and-options" class="btn btn-green">Persuasive Design prices and options<i class="fa fa-chevron-circle-right ml-3"></i></a></p>
          <p><a href="#simply-work-into-mordor">Or simply tell us about your goals<i class="fa fa-chevron-circle-right ml-3"></i></a> </p>
        </div>
      </div>

    </div>
  </section>

  <section class="bg-light">
    <?php get_template_part('templates/sections/brands','banner'); ?>
  </section>

<?php endwhile; ?>
