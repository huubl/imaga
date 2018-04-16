
<?php use Roots\Sage\Assets; ?>
<?php use Roots\Sage\Navigation; ?>

<header class="banner">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php echo Assets\asset_path("images/logo-full-color.png"); ?>" width="180" class="d-inline-block align-top" alt="<?php bloginfo('name'); ?>">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary_navigation" aria-controls="primary_navigation" aria-expanded="false" aria-label="<?php echo __('Toggle navigation','imaga'); ?>">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php
      // WordPress Boostrap 4 navbar wrapper
      // https://github.com/wp-bootstrap/wp-bootstrap-navwalker
      wp_nav_menu(
        array(
          'theme_location'    => 'primary_navigation',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'primary_navigation',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker()
        )
      );
      ?>
    </nav>
  </div>
</header>
