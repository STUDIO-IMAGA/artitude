<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header'); ?>

<? if( have_rows('layouts') ): ?>
  <? while( have_rows('layouts') ): the_row(); ?>

    <? Extras\get_layout( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>
