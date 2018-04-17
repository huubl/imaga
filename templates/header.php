
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
</header>
