<?php
/**
 * Template Name: Conversion Service
 */

use IMAGA\Theme\Extras;

?>
<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/header', 'conversion-service'); ?>

  <?php if( have_rows('layouts') ): ?>
    <?php while( have_rows('layouts') ): the_row(); ?>

      <?php Extras\get_layout( get_row_layout() ); ?>

    <?php endwhile; ?>
  <?php endif; ?>

  <section class="bg-light">
    <?php get_template_part('templates/sections/brands','banner'); ?>
  </section>

<?php endwhile; ?>
