<?
/**
 * Template Name: Conversion Template
 */

use IMAGA\Theme\Assets;
use IMAGA\Theme\Extras;

?>
<? while (have_posts()) : the_post(); ?>

  <? $image_alignment = get_field('header_toggle'); ?>

  <div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0">
    <div class="container py-0">

      <div class="row">
        <? if( $image_alignment == 'bg-left' ): ?>
          <div class="col-6"></div>
          <? $padding = "pl-5"; ?>
        <? else: ?>
        <? $padding = "pr-5"; ?>
        <? endif; ?>

        <div class="col-6 pt-6 <?= $padding; ?>">
          <h1 class="display-5 mb-4"><? the_field('title'); ?></h1>
          <p class="lead mb-5"><? the_field('lead'); ?></p>
        </div>
      </div>
      <div class="<?= $image_alignment; ?>" style="background-image: url('<? the_post_thumbnail_url(); ?>');"></div>
      <a class="scroll-arrow bg-yellow" href="#conversions"><i class="fa fa-chevron-down"></i></a>
    </div>
  </div>

  <section id="conversions" class="<? the_field('conversion_bg'); ?>">

    <? $rows = get_field('layouts' ); ?>
    <? $first_row = $rows[0]; ?>
    <? $color = str_replace('bg', '', $first_row['background_color']); ?>

    <div class="container">
      <div class="row text-center">
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-research' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-research">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-research-light.svg');?>" alt="Conversion Research">
            <h4 class="text-white">Conversion<br>Research</h4>
          </a>
        </div>
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-strategy' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-strategy">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-strategy-light.svg');?>" alt="Conversion Strategy">
            <h4 class="text-white">Conversion<br>Strategy</h4>
          </a>
        </div>
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-design' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-design">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-design-light.svg');?>" alt="Conversion Design">
            <h4 class="text-white">Conversion<br>Design</h4>
          </a>
        </div>
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-build' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-build">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-build-light.svg');?>" alt="Conversion Build">
            <h4 class="text-white">Conversion<br>Build</h4>
          </a>
        </div>
      </div>
    </div>
  </section>

  <? if( have_rows('layouts') ): ?>
    <? while( have_rows('layouts') ): the_row(); ?>

      <? Extras\get_layout( get_row_layout() ); ?>

    <? endwhile; ?>
  <? endif; ?>

  <section>
    <div class="container text-center">
      <div class="row">
        <div class="col-12">
          <h1 class="display-6 mb-4">When do you need what kind of data?</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <p class="lead">Qualitative<br>Conversion data</p>
          <a href="#Learn-more" class="btn btn-orange btn-lg">Learn more</a>
        </div>
        <div class="col-4">
          <p class="lead">Quantitative<br>Conversion data</p>
          <a href="#Learn-more" class="btn btn-orange btn-lg">Learn more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <? get_template_part('templates/sections/brands','banner'); ?>
  </section>

<? endwhile; ?>
