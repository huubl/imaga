
<?php use Roots\Sage\Assets; ?>
<?php use Roots\Sage\Navigation; ?>

<header class="navigation">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

      <?php echo Navigation\brand( Assets\asset_path("images/brand-full-color.png") ); ?>

      <?php echo Navigation\toggler( 'primary_navigation' ); ?>

      <?php echo Navigation\navigation( 'primary_navigation', 'primary_navigation'); ?>

    </div>
  </nav>

</header>
