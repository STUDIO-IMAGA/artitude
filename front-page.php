<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header'); ?>

<? $toggle = get_sub_field('toggle'); ?>
<? $order = (  $toggle == 'left' ) ? "order-1" : "order-3"; ?>

<? $image = get_sub_field('image'); ?>

<section class="element content-text">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-xl-9">
        <h2>Dit is een heading 2</h2>
        <p>Hier leg je uit met welk probleem de klant kwam. Welke uitdagingen jullie voorstonden als team en hoe je dat hebt aangevlogen. Alsof je onder water bent. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec tortor dui. Cras vitae mi ac ante tempus imperdiet quis vel dui. Sed dictum odio.</p>
      </div>
    </div>
  </div>
</section>

<section class="element content-quote">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-xl-9">
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

<section class="element content-text">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-xl-9">
        <h3>Dit is een heading 3</h3>
        <p>Hier leg je uit met welk probleem de klant kwam. Welke uitdagingen jullie voorstonden als Als je tekst selecteert wordt het natuurlijk rood dat hebt aangevlogen. Alsof je onder water bent. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec tortor dui. Cras vitae mi ac ante tempus imperdiet quis vel dui. <a href="#henk">En dit is een linkje in de tekst.</a></p>
      </div>
    </div>
  </div>
</section>

<section class="element content-oneliner">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text">
          Wauw. Wat een vette onliner <br>staat hier zomaar.
        </div>
      </div>
    </div>
  </div>
</section>

<section class="element content-gallery">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6">
        <div class="text">
          <h3>Hier kan de titel komen van een fotogalerij</h3>
          <p>Hier leg je uit met welk probleem de klant kwam. Welke uitdagingen jullie voorstondet nec t</p>
        </div>
      </div>
      <div class="col-6">
        <div class="gallery-container">
          <div class="slick-slider">
            <img src="https://picsum.photos/900/520/?random" alt="#1" />
            <img src="https://picsum.photos/900/520/" alt="#2" />
          </div>
          <div class="paging-container">
            <span class="slick-paging"></span>
            <span class="slick-next"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="py-10">

</div>

<? if( have_rows('layouts') ): ?>
  <? while( have_rows('layouts') ): the_row(); ?>

    <? Extras\get_layout( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>
