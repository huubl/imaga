<?php if( get_sub_field('title') or get_sub_field('lead') ): ?>

  <div class="row">

    <div class="col-12">

      <?php if( get_sub_field('title') ): ?>

        <h1>
          <?php the_sub_field('title'); ?>
        </h1>

      <?php endif; ?>

      <?php if( get_sub_field('lead') ): ?>

        <p class="lead">
          <?php the_sub_field('lead'); ?>
        </p>

      <?php endif; ?>

    </div>

  </div>

<?php endif; ?>
