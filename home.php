<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'imaga'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<section>
  <div class="container">
    <div class="row">

  <?php $i = 0; ?>
  <?php while (have_posts()) : the_post(); $i++ ?>
    <?php if($i % 3 == 0): ?>
    <?php endif; ?>
      <?php get_template_part('templates/content', get_post_type() ); ?>
  <?php endwhile; ?>
</div>
</div>
</section>
