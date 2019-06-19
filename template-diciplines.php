<?
/**
* Template Name: Diciplines template
*/

use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>

  <? get_template_part('templates/header'); ?>

  <? if( have_rows('elements') ): ?>
    <? while( have_rows('elements') ): the_row(); ?>

      <? Extras\get_element( get_row_layout() ); ?>

    <? endwhile; ?>
  <? endif; ?>

  <? get_template_part('templates/elements/content','highlights'); ?>

<? endwhile; ?>
