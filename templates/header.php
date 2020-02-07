<?php use IMAGA\Theme\Assets; ?>
<?php use IMAGA\Theme\Navigation; ?>

<header class="box-shadow bg-white navbar-container">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">

      <?php echo Navigation\brand( Assets\asset_path("images/brand/imaga.svg"), 140 ); ?>

      <?php echo Navigation\toggler( '.navbar-toggle' ); ?>

      <?php echo Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 2, "mr-auto nav navbar-nav"); ?>

      <button id="contrast-switch" class="order-3 ml-auto mr-3" aria-label="Enable high contrast mode" tabindex="1" title="Enable high-Contrast mode">
        <small class="d-none d-sm-inline">Enable high contrast mode</small>
        <svg version="1.1" baseProfile="basic"
           xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px"
           viewBox="0 0 48 48" xml:space="preserve">
          <path transform="matrix(0.048,0,0,0.048,0,0)" stroke="none" style="fill:#000000" d="M 500 0 C 223 0 0 223 0 500 C 0 776 223 1000 500 1000 C 776 1000 1000 776 1000 500 C 1000 223 776 0 500 0 z M 500 937 L 500 62 C 741 62 937 258 937 500 C 937 741 741 937 500 937 z"/>
        </svg>
      </button>

    </div>
  </nav>

</header>
