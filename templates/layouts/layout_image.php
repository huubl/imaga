<?
use IMAGA\Theme\Extras;

$image = get_sub_field('image'); ?>

<? if( !empty($image) ): ?>

  <section class="layout-image <? the_sub_field('background_color'); ?>">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <img class="img-fluid" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
        </div>
      </div>
    </div>
  </section>

<? endif; ?>
