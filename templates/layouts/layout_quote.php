<? use IMAGA\Theme\Extras; ?>

<section class="<? the_sub_field('background_color'); ?>">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8 <? the_sub_field('text_color'); ?>">
        <div class="quote-content">
          <?= Extras\heading_based_on_length( get_sub_field('quote') ); ?>
        </div>
        <div class="quote-author">
          ~ <? the_sub_field('author'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
