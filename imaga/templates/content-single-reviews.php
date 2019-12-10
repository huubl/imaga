
<?php use IMAGA\Theme\Extras; ?>


<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>
    <?php get_template_part('templates/header','reviews'); ?>
  </article>
  
<?php endwhile; ?>

<?php get_template_part('templates/parts/related-posts'); ?>
