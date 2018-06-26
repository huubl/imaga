<div class="col-4 p-4 card-deck">

<article <?php post_class('card'); ?>>
  <a href="<?php the_permalink(); ?>" class="text-body">

  <?php if( has_post_thumbnail() ): ?>
    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
  <?php endif; ?>

  <div class="card-body">
    <div class="card-title">
      <header>
        <h1 class="display-8 text-body">
            <?php the_title(); ?>
        </h1>
      </header>

    </div>
    <div class="card-text text-muted">
      <?php the_excerpt(); ?>
    </div>
  </div>
</a>
</article>
</div>
