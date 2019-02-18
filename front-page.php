<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header'); ?>

<? $toggle = get_sub_field('toggle'); ?>
<? $order = (  $toggle == 'left' ) ? "order-1" : "order-3"; ?>

<? $image = get_sub_field('image'); ?>

<section class="element content-text">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Dit is een heading 2</h2>
        <p>Hier leg je uit met welk probleem de klant kwam. Welke uitdagingen jullie voorstonden als team en hoe je dat hebt aangevlogen. Alsof je onder water bent. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec tortor dui. Cras vitae mi ac ante tempus imperdiet quis vel dui. Sed dictum odio.</p>
      </div>
    </div>
  </div>
</section>

<section class="elemet quote">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text">
          <p>Gllis. Cras dignissim scelerisque vestibulum. Mauris eget diam ut ante porttitor malesuada id et arcu. Nam sollicitudin justo ex, sed iacu mollis. Cras dignissim scelerisque vestibulum. Mauris eget diam ut ante porttitor malesuada id et arcu. Nam sollicitudin justo ex, sed iacu</p>
        </div>
        <div class="author">
          <span>- Tom Moerdijk, Directeur Natuurmuseum Fryslân</span>
        </div>
      </div>
    </div>
  </div>
</section>

<? if( have_rows('layouts') ): ?>
  <? while( have_rows('layouts') ): the_row(); ?>

    <? Extras\get_layout( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>
