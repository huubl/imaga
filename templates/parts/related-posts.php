
<? $args = array('post_type' => 'post','orderby' => 'post_date','order' => 'desc', 'posts_per_page' => 3); ?>
<? $query = new wp_query( $args ); ?>
<? if($query->have_posts()): ?>
  <? while( $query->have_posts() ) : ?>
    <? $query->the_post(); ?>
    <div class="col-12 col-md-6 col-lg-4 p-4 card-deck">
      <article <? post_class('card'); ?>>
        <a href="<? the_permalink(); ?>" class="text-body">

          <? if( has_post_thumbnail() ): ?>
            <img class="card-img-top" src="<? the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
          <? endif; ?>

          <div class="card-body">
            <div class="card-title">
              <header>
                <h1 class="display-4 text-body">
                  <? the_title(); ?>
                </h1>
              </header>

            </div>
            <div class="card-text text-muted">
              <? the_field('excerpt'); ?>
            </div>
          </div>
        </a>
      </article>
    </div>
  <? endwhile; ?>
  <? wp_reset_postdata(); ?>
  <? wp_reset_query(); ?>
<? endif; ?>
