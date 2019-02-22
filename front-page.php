<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header'); ?>

<? $toggle = get_sub_field('toggle'); ?>
<? $order = (  $toggle == 'left' ) ? "order-1" : "order-3"; ?>

<? $image = get_sub_field('image'); ?>

<section class="element content-text">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-xl-9">
        <div class="text" data-aos="fade-up">
          <h2>Dit is een heading 2</h2>
          <p>Hier leg je uit met welk probleem de klant kwam. Welke uitdagingen jullie voorstonden als team en hoe je dat hebt aangevlogen. Alsof je onder water bent. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec tortor dui. Cras vitae mi ac ante tempus imperdiet quis vel dui. Sed dictum odio.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="element content-quote">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-xl-9">
        <div class="text" data-aos="fade-up">
          <p>Gllis. Cras dignissim scelerisque vestibulum. Mauris eget diam ut ante porttitor malesuada id et arcu. Nam sollicitudin justo ex, sed iacu mollis. Cras dignissim scelerisque vestibulum. Mauris eget diam ut ante porttitor malesuada id et arcu. Nam sollicitudin justo ex, sed iacu</p>
        </div>
        <div class="author" data-aos="fade-down">
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
        <div class="text" data-aos="fade-up">
          <h3>Dit is een heading 3</h3>
          <p>Hier leg je uit met welk probleem de klant kwam. Welke uitdagingen jullie voorstonden als Als je tekst selecteert wordt het natuurlijk rood dat hebt aangevlogen. Alsof je onder water bent. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec tortor dui. Cras vitae mi ac ante tempus imperdiet quis vel dui. <a href="#henk">En dit is een linkje in de tekst.</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="element content-oneliner">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text" data-aos="fade-up">
          Wauw. Wat een vette onliner <br>staat hier zomaar.
        </div>
      </div>
    </div>
  </div>
</section>

<section class="element content-gallery">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-4">
        <div class="text" data-aos="fade-left">
          <h3>Hier kan de titel komen van een fotogalerij</h3>
          <p>Hier leg je uit met welk probleem de klant kwam. Welke uitdagingen jullie voorstondet nec t</p>
        </div>
      </div>
      <div class="col-8">
        <div class="gallery-container" data-aos="fade-right">
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

<section class="element content-text">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-xl-9">
        <div class="text" data-aos="fade-up">
          <h4>Dit is een heading 4</h4>
          <p>Hier leg je uit met welk probleem de klant kwam. Welke uitdagingen jullie voorstonden als Als je tekst selecteert wordt het natuurlijk rood dat hebt aangevlogen. Alsof je onder water bent. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec tortor dui. Cras vitae mi ac ante tempus imperdiet quis vel dui. <a href="#henk">En dit is een linkje in de tekst.</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="element content-video">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="embed-responsive embed-responsive-16by9" data-aos="fade-up">
          <video class="embed-responsive-item" src="/wp-content/uploads/video.mp4"></video>
          <div class="btn-play"></div>
          <div class="video-progress progress">
            <div class="progress-bar bg-red" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="py-10"></div>

<? if( have_rows('elements') ): ?>
  <? while( have_rows('elements') ): the_row(); ?>

    <? Extras\get_element( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>
