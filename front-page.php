<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header'); ?>

<? if( have_rows('elements') ): ?>
  <? while( have_rows('elements') ): the_row(); ?>

    <? Extras\get_element( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>
