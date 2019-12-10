
<?php use IMAGA\Theme\Extras; ?>

<?php get_template_part('templates/header','jumbotron'); ?>

<?php if( have_rows('layouts') ): ?>
  <?php while( have_rows('layouts') ): the_row(); ?>

    <?php Extras\get_layout( get_row_layout() ); ?>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_template_part('templates/parts/frontpage', 'steps'); ?>

<?php get_template_part('templates/parts/frontpage', 'certifications'); ?>
