<?php // Dit word een complex document ?>

<?php use IMAGA\Theme\Extras; ?>

<?php if( get_sub_field('image_toggle') == FALSE ): ?>

  <section class="single-content <?php the_sub_field('background_color'); ?>">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8 py-6 lead <?php the_sub_field('text_alignment'); ?> <?php the_sub_field('text_color'); ?>">
          <?php the_sub_field('title'); ?>
          <?php the_sub_field('content'); ?>
        </div>
      </div>
    </div>
  </section>

<?php else: ?>

  <?php $image = get_sub_field('image_array'); ?>
  <?php $image_alignment = get_sub_field('image_alignment'); ?>

  <section class="single-content <?php the_sub_field('background_color'); ?>">
    <div class="container">
      <div class="row">

        <?php if( $image_alignment == 'bg-left' ): ?>
          <div class="col-6"></div>
        <?php endif; ?>
        <?php if( $image_alignment == 'bg-left' ): ?>
          <?php $padding = "pl-5"; ?>
        <?php else: ?>
        <?php $padding = "pr-5"; ?>
        <?php endif; ?>

        <div class="col-6 <?php echo $padding; ?> lead <?php the_sub_field('text_alignment'); ?> <?php the_sub_field('text_color'); ?>">
            <?php echo Extras\heading_based_on_length( get_sub_field('title') ); ?>
            <?php the_sub_field('content'); ?>
          </div>
        </div>
      </div>


      <?php if( !empty($image) ): ?>

        <div class="<?php echo $image_alignment; ?>" style="background-image: url('<?php echo $image['url']; ?>');" title="<?php echo $image['alt']; ?>"></div>

      <?php endif; ?>

    </section>
  <?php endif; ?>
