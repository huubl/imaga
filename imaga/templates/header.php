<?php use IMAGA\Theme\Assets; ?>
<?php use IMAGA\Theme\Navigation; ?>

<header class="box-shadow bg-white navbar-container">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">

      <?php echo Navigation\brand( Assets\asset_path("images/brand/imaga.svg"), 140 ); ?>

      <?php echo Navigation\toggler( '.navbar-toggle' ); ?>

      <?php echo Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 2, "mr-auto nav navbar-nav"); ?>

    </div>
  </nav>

</header>
