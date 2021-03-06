<?
/**
 * Template Name: Conversion Summary
 */

use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>

  <? get_template_part('templates/header', 'jumbotron'); ?>

  <? get_template_part('templates/parts/conversion-summary'); ?>

  <? if( have_rows('layouts') ): ?>
    <? while( have_rows('layouts') ): the_row(); ?>

      <? Extras\get_layout( get_row_layout() ); ?>

    <? endwhile; ?>
  <? endif; ?>

<? endwhile; ?>
