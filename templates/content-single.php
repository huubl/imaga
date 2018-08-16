<? use IMAGA\Theme\Extras; ?>
<? while (have_posts()) : the_post(); ?>
  <article <? post_class(); ?>>

    <? get_template_part('templates/header','jumbotron'); ?>

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
