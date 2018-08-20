<?
/**
* Template Name: Contact
*/

use IMAGA\Theme\Assets;
use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>

  <? get_template_part('templates/header','jumbotron'); ?>

  <div id="content"></div>
  <? if( have_rows('layouts') ): ?>
    <? while( have_rows('layouts') ): the_row(); ?>

      <? Extras\get_layout( get_row_layout() ); ?>

    <? endwhile; ?>
  <? endif; ?>

  <!-- <section>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="display-2">See whats going in and follow us on Facebook:</h2>
        </div>
      </div>
    </div>
    <div class="container pb-5">
      <div class="row justify-content-center">
        <div class="col-10">

          <div class="row">
            <div class="col-6 text-center mb-5">
              <article class="box-shadow">
                <h1>Feed Item</h1>
                <img class="img-fluid" src="https://via.placeholder.com/512" alt="Recent Item">
              </article>
            </div>
            <div class="col-6 text-center mb-5">
              <article class="box-shadow">
                <h1>Feed Item</h1>
                <img class="img-fluid" src="https://via.placeholder.com/512" alt="Recent Item">
              </article>
            </div>
            <div class="col-6 text-center mb-5">
              <article class="box-shadow">
                <h1>Feed Item</h1>
                <img class="img-fluid" src="https://via.placeholder.com/512" alt="Recent Item">
              </article>
            </div>
            <div class="col-6 text-center mb-5">
              <article class="box-shadow">
                <h1>Feed Item</h1>
                <img class="img-fluid" src="https://via.placeholder.com/512" alt="Recent Item">
              </article>
            </div>
            <div class="col-6 text-center mb-5">
              <article class="box-shadow">
                <h1>Feed Item</h1>
                <img class="img-fluid" src="https://via.placeholder.com/512" alt="Recent Item">
              </article>
            </div>
            <div class="col-6 text-center mb-5">
              <article class="box-shadow">
                <h1>Feed Item</h1>
                <img class="img-fluid" src="https://via.placeholder.com/512" alt="Recent Item">
              </article>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center">
              <a href="#load-more" class="btn btn-link btn-lg">Load more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->


<? endwhile; ?>
