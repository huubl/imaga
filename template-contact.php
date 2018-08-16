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

  <section class="reviews">
    <div class="container py-4">
      <div class="row">
        <div class="col-12 text-center py-4">
          <h2 class="display-3">Don’t just take our word for it. Here’s what our great clients are saying:</h2>
          <a class="lead text-muted link" href="#all-reviews">View all reviews <small><i class="fa fa-chevron-circle-right"></i></small></a>
        </div>
      </div>
    </div>
    <div class="container-fluid pb-5">
      <div class="row">

        <? Extras\recent_reviews(); ?>

      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12 text-md-center">
          <h2 class="display-1 mb-4">We love to do Conversion Research to:</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-7">
          <ul class="list-unstyled">
            <li>
              <div class="row">
                <div class="col-1">
                  <h4 class="display-2"><i class="fa fa-check"></i></h4>
                </div>
                <div class="col-11">
                  <h4 class="display-2">Increase relevance, clarity and trust</h4>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-1">
                  <h4 class="display-2"><i class="fa fa-check"></i></h4>
                </div>
                <div class="col-11">
                  <h4 class="display-2">Increase the usability and convenience</h4>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-1">
                  <h4 class="display-2"><i class="fa fa-check"></i></h4>
                </div>
                <div class="col-11">
                  <h4 class="display-2">Measure, optimize and re-measure</h4>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="display-1 mb-4">How can we help you and your team?</h2>
          <a href="#i-want-to-improve" class="btn btn-green btn-lg px-5">I want to implrove my (clients) website</a>
        </div>
      </div>
    </div>
  </section>

  <section>
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
  </section>


<? endwhile; ?>
