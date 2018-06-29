<?php use IMAGA\Theme\Extras; ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <header>
      <div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0">
        <div class="container">

          <div class="row py-2">
            <div class="col-6 pr-5">
              <h1 class="display-5 mb-4"><?php the_title(); ?></h1>
              <div class="lead">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>

        </div>
        <div class="bg-right bg-blue" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
        </div>
        <a class="scroll-arrow bg-yellow" href="#post-content"><i class="fa fa-chevron-down"></i></a>
      </div>
    </header>

    <section id="post-content" class="bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8 lead">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>

    <?php if( have_rows('sections') ): ?>
      <?php while( have_rows('sections') ): the_row(); ?>

        <?php Extras\switch_row_layout( get_row_layout() ); ?>

      <?php endwhile; ?>
    <?php endif; ?>

  </article>
<?php endwhile; ?>


<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="display-5"><span class="underline-green">Related posts</span></h3>
      </div>
    </div>
    <div class="row">
      <?php $args = array('post_type' => 'post','orderby' => 'post_date','order' => 'desc', 'posts_per_page' => 3); ?>
      <?php $query = new wp_query( $args ); ?>
      <?php if($query->have_posts()): ?>
        <?php while( $query->have_posts() ) : ?>
          <?php $query->the_post(); ?>
          <?php get_template_part('templates/content', get_post_type() ); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php wp_reset_query(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
