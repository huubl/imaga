<?
/**
* Template Name: No header
*/

use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>

  <? if( have_rows('layouts') ): ?>
    <? while( have_rows('layouts') ): the_row(); ?>

      <? Extras\get_layout( get_row_layout() ); ?>

    <? endwhile; ?>
  <? endif; ?>

<? endwhile; ?>
