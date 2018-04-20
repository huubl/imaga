
<?php use Roots\Sage\Assets; ?>
<?php use Roots\Sage\Navigation; ?>

<header class="banner">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php echo Assets\asset_path("images/logo-full-white.png"); ?>" width="180" class="d-inline-block align-top" alt="<?php bloginfo('name'); ?>">
      </a>

      <?php echo Navigation\toggler('primary_navigation'); ?>

      <?php echo Navigation\navigation( 'primary_navigation', 'primary_navigation'); ?>

    </div>
  </nav>


  <div class="jumbotron jumbotron-fluid bg-black pb-3 mb-0">
    <div class="container">
      <div class="row">
        <div class="col-10 mb-5">
          <h1 class="display-4 mb-3">Your website leaks money</h1>
          <p class="lead">You can improve your website, convert more of your visitors to customers and tech your goals better, even with the same traffic.</p>
          <p class="lead">If you team up with us, you’ll get access to the latest conversion optimization and persuasion techniques to help your website perform better. You’ll be part of our team as we work with you. Everything we do starts with you and your customers.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">How we can help you and your team?</h1>
        </div>
      </div>
    </div>
  </div>

</header>
