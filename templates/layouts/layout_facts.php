<section class="facts bg-blue">
  <div class="container">
    <div class="row text-white text-center">
      <? if( have_rows('facts') ): ?>
        <? while ( have_rows('facts') ) : the_row(); ?>
          <div class="col">
            <h2 class="display-4"><? the_sub_field('change'); ?><? the_sub_field('amount'); ?></h2>
            <p class="lead"><? the_sub_field('subject'); ?></p>
          </div>
        <? endwhile; ?>
      <? endif;?>
    </div>
  </div>
</section>
