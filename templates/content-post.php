<article <?php post_class('card mb-4'); ?>>
  <div class="card-body">
    <div class="card-title">
      <header>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>

    </div>

    <div class="card-text">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
