
<?php use IMAGA\Theme\Assets; ?>
<?php use IMAGA\Theme\Navigation; ?>

<header class="navigation">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

      <?php echo Navigation\brand( Assets\asset_path("images/brand-full-color.png") ); ?>

      <?php echo Navigation\toggler( '.navbar-toggle' ); ?>

      <?php echo Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 1); ?>

    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-gray-100">
    <div class="container">
      <?php echo Navigation\navigation( 'primary_navigation', 'secondary_navigation', 1, 0, "mr-auto nav navbar-nav"); ?>
    </div>
  </nav>


</header>
