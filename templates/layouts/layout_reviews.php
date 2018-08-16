<? use IMAGA\Theme\Extras; ?>

<section class="reviews">
  <div class="container py-4">
    <div class="row">
      <div class="col-12 text-center py-4">
        <h2 class="display-3">Don’t just take our word for it. Here’s what our great clients are saying:</h2>
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
