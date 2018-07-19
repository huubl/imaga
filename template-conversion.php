<?
/**
 * Template Name: Conversion Template
 */

use IMAGA\Theme\Assets;
use IMAGA\Theme\Extras;

?>
<? while (have_posts()) : the_post(); ?>

  <? $image_alignment = get_field('header_toggle'); ?>

  <div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0 py-0">
    <div class="container">

      <div class="row">
        <? if( $image_alignment == 'bg-left' ): ?>
          <div class="col-6"></div>
          <? $padding = "pl-md-5"; ?>
        <? else: ?>
          <? $padding = "pr-md-5"; ?>
        <? endif; ?>

        <div class="col-12 col-md-6 <?= $padding; ?>">
          <h1 class="display-1 mb-4"><? the_field('title'); ?></h1>
          <p class="lead mb-5"><? the_field('lead'); ?></p>
        </div>
        <a class="scroll-arrow bg-yellow" href="#conversions"><i class="fa fa-chevron-down"></i></a>
      </div>


      <div class="bg-container <?= $image_alignment; ?> bg-cover bg-center" style="background-image: url('<? the_post_thumbnail_url(); ?>');"></div>
    </div>
  </div>

  <section id="conversions" class="<? the_field('conversion_bg'); ?>">

    <? $rows = get_field('layouts' ); ?>
    <? $first_row = $rows[0]; ?>
    <? $color = str_replace('bg', '', $first_row['background_color']); ?>

    <div class="container">
      <div class="row text-center">
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-research' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-research#conversions">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-research-light.svg');?>" alt="Conversion Research">
            <h4 class="d-none d-md-block text-white">Conversion<br>Research</h4>
          </a>
        </div>
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-strategy' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-strategy#conversions">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-strategy-light.svg');?>" alt="Conversion Strategy">
            <h4 class="d-none d-md-block text-white">Conversion<br>Strategy</h4>
          </a>
        </div>
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-design' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-design#conversions">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-design-light.svg');?>" alt="Conversion Design">
            <h4 class="d-none d-md-block text-white">Conversion<br>Design</h4>
          </a>
        </div>
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-build' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-build#conversions">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-build-light.svg');?>" alt="Conversion Build">
            <h4 class="d-none d-md-block text-white">Conversion<br>Build</h4>
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

  <section class="bg-blue">
    <? get_template_part('templates/parts/conversion-footer'); ?>
  </section>

  <section class="bg-light">
    <? get_template_part('templates/sections/brands','banner'); ?>
  </section>

<? endwhile; ?>
