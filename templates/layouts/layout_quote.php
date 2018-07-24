<? use IMAGA\Theme\Extras; ?>

<section class="<? the_sub_field('background_color'); ?>">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8 <? the_sub_field('text_color'); ?>">
        <blockquote class="blockquote text-center">
          <?= Extras\heading_based_on_length( get_sub_field('quote') ); ?>
          <footer class="blockquote-footer <? the_sub_field('text_color'); ?>"><cite title="<? the_sub_field('author'); ?>"><? the_sub_field('author'); ?></cite></footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>
