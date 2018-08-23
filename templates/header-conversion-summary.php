<?
/*
Nodig omdat door een onbekende bug get_field() van een gekloonde Button Group een Array terug geeft.
Via array[0] kan ik de waarden niet bereiken.
vardump:

C:\Users\Odilio\Documents\Ampps\www\imaga.local\wp-content\themes\IMAGA\templates\header-jumbotron.php:7:
array (size=1)
  'header_image_toggle' => string 'bg-left' (length=7)

*/
use IMAGA\Theme\Assets;

if( get_field('header_toggle') ):
  foreach ( get_field('header_toggle') as $key => $value):
    $image_alignment = $value;
  endforeach;
endif;
?>

<div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0 py-0">

  <div class="container">
    <div class="row">

      <? if( $image_alignment == 'bg-left' ): ?>
        <div class="col-6"></div>
        <? $padding = "pl-md-5"; ?>
      <? else: ?>
        <? $padding = "pr-md-5"; ?>
      <? endif; ?>

      <div class="col-12 col-md-6 <?= $padding; ?> pb-4 pb-md-0">
        <h1 class="display-1 mb-3"><? the_field('title'); ?></h1>
        <div class="lead mb-5"><? the_field('lead'); ?></div>
      </div>

      <a class="scroll-arrow bg-yellow" href="#content"><i class="fa fa-chevron-down"></i></a>

    </div>
  </div>

  <div class="bg-container <? the_field('header_toggle'); ?> bg-cover bg-center" style="background-image: url('<? the_post_thumbnail_url(); ?>');"></div>

</div>

<div id="content"></div>

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
