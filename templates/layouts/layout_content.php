<? // Dit word een complex document ?>

<? use IMAGA\Theme\Extras; ?>

<? if( get_sub_field('image_toggle') == FALSE ): ?>

  <section class="single-content <? the_sub_field('background_color'); ?>">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8 lead <? the_sub_field('text_alignment'); ?> <? the_sub_field('text_color'); ?>">
          <? get_template_part('templates/parts/title'); ?>
          <? the_sub_field('content'); ?>
        </div>
      </div>
    </div>
  </section>

<? else: ?>

  <? $image = get_sub_field('image_array'); ?>
  <? $image_alignment = get_sub_field('image_alignment'); ?>

  <section class="single-content <? the_sub_field('background_color'); ?>">
    <div class="container">
      <div class="row">

        <? if( $image_alignment == 'bg-left' ): ?>
          <div class="col-6"></div>
        <? endif; ?>
        <? if( $image_alignment == 'bg-left' ): ?>
          <? $padding = "pl-5"; ?>
        <? else: ?>
        <? $padding = "pr-5"; ?>
        <? endif; ?>

        <div class="col-6 <?= $padding; ?> lead <? the_sub_field('text_alignment'); ?> <? the_sub_field('text_color'); ?>">
            <?= Extras\heading_based_on_length( get_sub_field('title') ); ?>
            <? the_sub_field('content'); ?>
          </div>
        </div>
      </div>


      <? if( !empty($image) ): ?>

        <div class="<?= $image_alignment; ?>" style="background-image: url('<?= $image['url']; ?>');" title="<?= $image['alt']; ?>"></div>

      <? endif; ?>

    </section>
  <? endif; ?>
