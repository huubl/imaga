<section id="section-<?= get_row_index(); ?>" class="layout-pricing <? the_sub_field('background_color'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h1 class="display-1"><? the_sub_field('title'); ?></h1>
        <div class="lead">
          <? the_sub_field('lead'); ?>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <h2><sup class="text-red"><small><s>&euro;<? the_sub_field('price_before'); ?>,-</s></small></sup> &euro; <? the_sub_field('price'); ?>,-</h2>
        <div><? the_sub_field('summary'); ?></div>
      </div>
    </div>
  </div>
</section>
