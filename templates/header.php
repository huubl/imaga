
<?php use IMAGA\Theme\Assets; ?>
<?php use IMAGA\Theme\Navigation; ?>

<header class="navigation box-shadow">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">

      <?php echo Navigation\brand( Assets\asset_path("images/brand-full-color.png") ); ?>

      <?php echo Navigation\toggler( '.navbar-toggle' ); ?>

      <?php echo Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 1); ?>

    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <?php echo Navigation\navigation( 'primary_navigation', 'secondary_navigation', 1, 0, "mr-auto nav navbar-nav"); ?>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-gray-200">
    <div class="container-fluid">
      <?php echo Navigation\navigation( 'primary_navigation', 'tertiary_navigation', 2, 0, "mr-auto nav navbar-nav"); ?>
    </div>
  </nav>

</header>
