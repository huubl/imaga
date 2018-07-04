<? use IMAGA\Theme\Extras; ?>
<? while (have_posts()) : the_post(); ?>
  <article <? post_class(); ?>>

    <header>
      <div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0">
        <div class="container">

          <div class="row py-2">
            <div class="col-6 pr-5">
              <h1 class="display-1 mb-4"><? the_title(); ?></h1>
              <div class="lead">
                <? the_field('excerpt'); ?>
              </div>
            </div>
          </div>

        </div>
        <div class="bg-right" style="background-image: url('<? the_post_thumbnail_url(); ?>');"></div>
        <a class="scroll-arrow bg-yellow" href="#post-content"><i class="fa fa-chevron-down"></i></a>
      </div>
    </header>

    <? if( have_rows('layouts') ): ?>
      <? while( have_rows('layouts') ): the_row(); ?>

        <? Extras\get_layout( get_row_layout() ); ?>

      <? endwhile; ?>
    <? endif; ?>

  </article>
<? endwhile; ?>


<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="display-1"><span class="underline-green">Related posts</span></h3>
      </div>
    </div>
    <div class="row">
      <? get_template_part('templates/parts/related-posts'); ?>
    </div>
  </div>
</section>
