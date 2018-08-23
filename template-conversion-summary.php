<?
/**
 * Template Name: Conversion Summary
 */

use IMAGA\Theme\Assets;
use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>

  <? get_template_part('templates/header', 'jumbotron'); ?>

  <section id="conversions" class="<? the_field('conversion_bg'); ?>">
    <div class="container py-4">
      <div class="row text-center">
        <div class="col-3">
          <a href="/conversion-optimization/conversion-research#conversions">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-research-light.svg');?>" alt="Conversion Research">
            <h4 class="d-none d-md-block text-white">Conversion<br>Research</h4>
          </a>
        </div>
        <div class="col-3">
          <a href="/conversion-optimization/conversion-strategy#conversions">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-strategy-light.svg');?>" alt="Conversion Strategy">
            <h4 class="d-none d-md-block text-white">Conversion<br>Strategy</h4>
          </a>
        </div>
        <div class="col-3">
          <a href="/conversion-optimization/conversion-design#conversions">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-design-light.svg');?>" alt="Conversion Design">
            <h4 class="d-none d-md-block text-white">Conversion<br>Design</h4>
          </a>
        </div>
        <div class="col-3">
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

  <section class="bg-gray-800">
    <? get_template_part('templates/parts/conversion-footer'); ?>
  </section>

  <section>
    <? get_template_part('templates/sections/brands','banner'); ?>
  </section>

<? endwhile; ?>
