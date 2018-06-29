<section class="facts bg-blue">
  <div class="container">
    <div class="row text-white text-center">
      <?php if( have_rows('facts') ): ?>
        <?php while ( have_rows('facts') ) : the_row(); ?>
          <div class="col">
            <h2 class="display-4"><?php the_sub_field('change'); ?><?php the_sub_field('amount'); ?></h2>
            <p class="lead"><?php the_sub_field('subject'); ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif;?>
    </div>
  </div>
</section>
