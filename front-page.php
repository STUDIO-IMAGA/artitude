<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header'); ?>

<? if( have_rows('elements') ): ?>
  <? while( have_rows('elements') ): the_row(); ?>

    <? Extras\get_element( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>

<? get_template_part('templates/footer','front-page'); ?>

<div class="shape-1"></div>
<div class="shape-2"></div>
<div class="shape-3"></div>
<div class="shape-4"></div>
<div class="shape-5"></div>
