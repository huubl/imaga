<section class="header-document">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <h1 class="display-1 mb-0 text-center"><?php the_field('title'); ?></h1>
        <?php if( get_field('date') ): ?>
          <div class="text-center mb-4">
            <small class="text-muted"><?php the_field('date'); ?></small>
          </div>
        <?php endif; ?>
        <div class="lead"><?php the_field('lead'); ?></div>
      </div>
    </div>
  </div>
</section>
