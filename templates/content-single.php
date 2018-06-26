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

    <section class="facts bg-blue">
      <div class="container">
        <div class="row text-white text-center">
          <div class="col-4">
            <h2 class="display-4">+60%</h2>
            <p class="lead">Increase in page visits</p>
          </div>
          <div class="col-4">
            <h2 class="display-4">+2300</h2>
            <p class="lead">More search queries</p>
          </div>
          <div class="col-4">
            <h2 class="display-4">-0.8%</h2>
            <p class="lead">Lower bounce rate</p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8 py-6">
            <p class="lead">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-6">

          </div>
          <div class="col-6 pl-5">
            <p class="lead"> Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>
          </div>
        </div>
      </div>
      <div class="bg-left" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

      </div>
    </section>

    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8 py-6">
            <p class="lead">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
          </div>
        </div>
      </div>
    </section>


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
