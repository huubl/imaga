<section id="section-<?= get_row_index(); ?>" class="layout-columns <? the_sub_field('background_color'); ?> <? the_sub_field('text_color'); ?> text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="mb-4"><?= do_shortcode( get_sub_field('title') ); ?></h1>
      </div>
    </div>

    <div class="row justify-content-center">
      <? if( have_rows('columns') ): ?>
        <? while ( have_rows('columns') ) : the_row(); ?>
          <div class="col-12 col-md-8 col-lg-4">
            <div class="lead mb-3">
              <b><? the_sub_field('title'); ?></b>
            </div>
            <div class="lead">
              <?= do_shortcode( get_sub_field('content') ); ?>
            </div>
          </div>
        <? endwhile; ?>
      <? endif;?>
    </div>
  </div>
</section>
