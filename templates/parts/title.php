<?php use IMAGA\Theme\Extras; ?>

<?php if( get_sub_field('title') or get_sub_field('lead') ): ?>

  <div class="row">

    <div class="col-12">

      <?php if( get_sub_field('title') ): ?>

        <?php echo Extras\heading_based_on_length( get_sub_field('title') ); ?>

      <?php endif; ?>

      <?php if( get_sub_field('lead') ): ?>

        <p class="lead text-muted">
          <?php the_sub_field('lead'); ?>
        </p>

      <?php endif; ?>

    </div>

  </div>

<?php endif; ?>
