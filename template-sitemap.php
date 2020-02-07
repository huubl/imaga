<?php
/**
* Template Name: Sitemap
*/

use IMAGA\Theme\Assets;
use IMAGA\Theme\Extras;
?>

<div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0 py-0">
  <div class="container">

    <div class="row justify-content-center text-center">

      <div class="col-12 col-md-8 pb-4 pb-md-0">
        <h1 class="display-1 mb-3"><?php the_field('title'); ?></h1>
        <div class="lead mb-5"><?php the_field('lead'); ?></div>
      </div>

      <a class="scroll-arrow bg-yellow" href="#content"><i class="fa fa-chevron-down"></i></a>

    </div>

  </div>
</div>

<div id="content"></div>
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
  </div>
</section>
