<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?> data-aos="fade-zoom-in">

    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'imaga'); ?>
      </div>
    <![endif]-->

    <?php do_action('get_header'); ?>

    <?php get_template_part('templates/header'); ?>

    <div class="wrap" role="document">

      <main>

        <?php include Wrapper\template_path(); ?>

      </main>

    </div>

    <?php do_action('get_footer');?>

    <?php get_template_part('templates/footer'); ?>

    <?php wp_footer(); ?>

  </body>

</html>
