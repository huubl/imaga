<?
/**
* Template Name: Contact
*/

use IMAGA\Theme\Assets;
use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>
  <div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0 py-0">
    <div class="container">

      <div class="row">
        <div class="col-12 col-md-6 pr-md-5 pb-4 pb-md-0">
          <h1 class="display-2">Are you looking to improve and transform a website?</h1>
          <h1 class="lead my-4">Or having a hard time with Google Analytics and getting the right kind of data?<br>Trying to figure out what’s stopping your users from buying?<br>Or are you simply looking to create a brand new website?</h1>
          <h1 class="lead mb-4"><a href="mailto:hallo@imaga.nl" class="btn btn-red px-4">hallo@imaga.nl</a></h1>
          <p class="lead">Or call Marco: <a href="tel:+31652673086" class="text-green"><i class="fa fa-phone"></i> +31 6 52 67 30 86</a></p>
        </div>
        <a class="scroll-arrow bg-yellow" href="#headquarters"><i class="fa fa-chevron-down"></i></a>
      </div>


      <div class="bg-container bg-right bg-cover bg-center" style="background-image: url('<? the_post_thumbnail_url(); ?>');"></div>
    </div>
  </div>

  <section id="headquarters" class="bg-green text-white">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-12 col-md-4 text-md-right">
          <p class="display-3">Imaga Headquarters:</p>
        </div>
        <div class="col-12 col-md-4">
          <p class="lead">Zuiderplein 4-6<br>8911 AJ Leeuwarden<br>The Netherlands</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-12 col-md-8 text-md-center">
          <p class="lead">We help agencies and smart companies transform more of their visitors to real customers.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="container text-md-center">
      <div class="row">
        <div class="col-12">
          <h2 class="display-2 mb-4">Request a free Touch & Go for your website…</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <p class="lead">A Touch & Go is a quick technical inspection of your website</p>
        </div>
        <div class="col-12 col-md-6">
          <a href="#touch-and-go" class="btn btn-teal btn-lg">Get me a free Touch & Go</a>
        </div>
      </div>
    </div>
  </section>

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
