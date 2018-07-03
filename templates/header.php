
<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<header class="box-shadow bg-white fixed-top navbar-container">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">

      <?= Navigation\brand( Assets\asset_path("images/brand-full-color.png") ); ?>

      <?= Navigation\toggler( '.navbar-toggle' ); ?>

      <?= Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 1, "mr-auto nav navbar-nav"); ?>

    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <?= Navigation\navigation( 'primary_navigation', 'secondary_navigation', 1, 0, "mr-auto nav navbar-nav"); ?>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-gray-200">
    <div class="container-fluid">
      <?= Navigation\navigation( 'primary_navigation', 'tertiary_navigation', 2, 0, "mr-auto nav navbar-nav"); ?>
    </div>
  </nav>

</header>
<div class="navbar-spacing"><!-- splaceholder --></div>
