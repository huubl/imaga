<?
/**
 * Template Name: Conversion Template
 */

use IMAGA\Theme\Assets;
use IMAGA\Theme\Extras;

?>
<? while (have_posts()) : the_post(); ?>

  <? get_template_part('templates/header', 'jumbotron'); ?>

  <section class="<? the_field('conversion_bg'); ?>">

    <? $rows = get_field('layouts' ); ?>
    <? $first_row = $rows[0]; ?>
    <? $color = str_replace('bg', '', $first_row['background_color']); ?>

    <div class="container">
      <div class="row text-center">
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-research' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-research#content">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-research-light.svg');?>" alt="Conversion Research">
            <h4 class="d-none d-md-block text-white">Conversion<br>Research</h4>
          </a>
        </div>
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-strategy' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-strategy#content">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-strategy-light.svg');?>" alt="Conversion Strategy">
            <h4 class="d-none d-md-block text-white">Conversion<br>Strategy</h4>
          </a>
        </div>
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-design' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-design#content">
            <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-design-light.svg');?>" alt="Conversion Design">
            <h4 class="d-none d-md-block text-white">Conversion<br>Design</h4>
          </a>
        </div>
        <div class="col-3 <?= get_field('conversion_type') == 'conversion-build' ? "conversion-arrow$color" : '' ; ?>">
          <a href="/conversion-optimization/conversion-build#content">
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

  <section class="bg-light">
    <? get_template_part('templates/sections/brands','banner'); ?>
  </section>

<? endwhile; ?>
