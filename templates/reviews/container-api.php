<section class="reviews">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center py-4">
        <h2 class="display-7">Don’t just take our word for it. Here’s what our great clients are saying:</h2>
        <a class="lead text-muted" href="#all-reviews">View all reviews <small><i class="fa fa-chevron-circle-right"></i></small></a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row pb-6 reviews-container">

      <?

      $json = file_get_contents("https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJyRMcl4X-yEcRGNqeN-ka948&key=AIzaSyCpbX1hZA52bwjZE8KTYq7mHgdoMEndlLA");

      $json = json_decode($json);

      ?>

      <? foreach ( $json->result->reviews as $review): ?>
      <div class="col-4">
        <div class="row">
          <div class="col-3 text-right">
            <a href="<?= $review->author_url; ?>">
            <img class="img-fluid img-circle" src="<?= $review->profile_photo_url; ?>" alt="<?= $review->author_name; ?>">
            </a>
          </div>
          <div class="col-9">
            <?= $review->author_name; ?>, <?= $review->relative_time_description; ?>
            <p>
              <span class="review-stars text-orange">
                <? for($i = 0; $i < $review->rating; $i++ ): ?>
                <i class="fa fa-star"></i>
                <? endfor; ?>
              </span>
              <small>
                <?= $review->text; ?>
              </small>
            </p>
          </div>
        </div>
      </div>
      <? endforeach; ?>


    </div>
  </div>
</section>
