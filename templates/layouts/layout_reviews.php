<? use IMAGA\Theme\Extras; ?>

<section id="section-<?= get_row_index(); ?>" class="reviews">
  <div class="container py-4">
    <div class="row">
      <div class="col-12 text-center py-4">
        <h2 class="display-3"><? the_sub_field('title');?></h2>
        <a class="lead text-muted link" href="#all-reviews">View all reviews <small><i class="fa fa-chevron-circle-right"></i></small></a>
      </div>
    </div>
  </div>
  <div class="container-fluid pb-5">
    <div class="row">

      <? Extras\recent_reviews(); ?>

    </div>
  </div>
</section>
