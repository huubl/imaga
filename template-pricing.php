<?
/**
* Template Name: Prijslijst [hardcoded]
*/

use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>

  <? get_template_part('templates/header','pricing'); ?>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h1 class="display-1">CRO Starter Pack</h1>
          <p class="lead">The CRO Starter Pack is absolutely the fastest way to find conversion and usability problems on your website. The <strong>Usability Expert Review</strong> works as an Instant Sanity Check and provides a clear set of your website’s specific pain points. (We also call it the ‘Hygiene Factor”).</p>
          <p class="lead">We’ll combine this with the <strong>SEO-Audit with Google Search Insights</strong> to find out how you’re doing in Google Search and to discover your websites problems. Finally we’ll perform a <strong>Google Analytics Quick Win</strong> to see if there are any low hanging fruits hiding in your Analytic data. </p>
        </div>
        <div class="col-12 col-md-6">
          <h2><sup class="text-red"><small><s>€2797,-</s></small></sup> &euro; 1999,-</h2>
          <p>The CRO Starter Pack is a great way to run a usability report, see how your SEO is doing and find out if your Google Analytics is hiding opportunities. (Since no website is the same the exact price might vary, depending on your website and wishes).</p>
          <ul class="list-checkmark">
            <li>Usability Expert Review</li>
            <li>SEO-Audit with Google Search Insights</li>
            <li>Google Analytics Quick Win</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h1 class="display-1">CRO Starter Pack and Digital Analytics Done Right</h1>
          <p class="lead">This package combines everything from the CRO Starter Pack and adds a proper <strong>Google Analytics Audit & Health Check</strong> to the <strong>Google Analytics Configuration</strong> to correctly measure your goals and Set-Up and track what you want and need to. </p>
        </div>
        <div class="col-12 col-md-6">
          <h2><sup class="text-red"><small><s>€3797,-</s></small></sup> &euro; 2999,-</h2>
          <p>The CRO Starter Pack and Digital Analytics Done Right  gives you the insights fast will and we'll make sure your account is set up correct, linked to Google Search and are seeing the correct numbers in Google Analytics. (Since no website is the same the exact price might vary, depending on your website and wishes). </p>
          <ul class="list-checkmark">
            <li>Usability Expert Review</li>
            <li>SEO-Audit with Google Search Insights</li>
            <li>Google Analytics Quick Win</li>
            <li>Google Analytics Audit & Health Check</li>
            <li>Google Analytics Configuration</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h1 class="display-1">CRO No Limits</h1>
          <p class="lead">The CRO No Limits Service will unleash all of our best suited CRO services. We’ll gain maximum insight into your customer’s behavior and your website. Together we’ll discuss your business goals and make a custom CRO Research, Strategy & Design Plan.</p>
        </div>
        <div class="col-12 col-md-6">
          <sup class="text-muted">Starting at</sup>
          <h2>&euro; 1500,- per month</h2>
          <sup class="text-muted">(3 months minimum)</sup>
        </div>
      </div>
    </div>
  </section>

  <? if( have_rows('layouts') ): ?>
    <? while( have_rows('layouts') ): the_row(); ?>

      <? Extras\get_layout( get_row_layout() ); ?>

    <? endwhile; ?>
  <? endif; ?>

<? endwhile; ?>
