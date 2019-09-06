<? get_template_part('templates/header'); ?>

<? if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <? _e('Sorry, no results were found.', 'imaga'); ?>
  </div>
  <? get_search_form(); ?>
<? endif; ?>

<? while (have_posts()) : the_post(); ?>
  <? get_template_part('templates/content', 'search'); ?>
<? endwhile; ?>

<? the_posts_navigation(); ?>
