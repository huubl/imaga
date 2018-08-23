<?
/**
 * Template Name: Conversion Category
 */

use IMAGA\Theme\Extras;

?>
<? while (have_posts()) : the_post(); ?>

  <? get_template_part('templates/header', 'conversion-category'); ?>

  <? if( have_rows('layouts') ): ?>
    <? while( have_rows('layouts') ): the_row(); ?>

      <? Extras\get_layout( get_row_layout() ); ?>

    <? endwhile; ?>
  <? endif; ?>

  <section class="bg-gray-800">
    <? get_template_part('templates/parts/conversion','footer'); ?>
  </section>

  <section class="bg-light">
    <? get_template_part('templates/sections/brands','banner'); ?>
  </section>

<? endwhile; ?>
