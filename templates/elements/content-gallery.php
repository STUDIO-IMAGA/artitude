<? $toggle = get_sub_field('toggle'); ?>
<? $order = (  $toggle == 'left' ) ? "order-1" : "order-3"; ?>

<section class="element content-gallery">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-4 pr-md-2 pr-xl-4">
        <div class="text" data-aos="fade-up">
          <? the_sub_field('text'); ?>
        </div>
      </div>
      <div class="col-8 pl-md-4 pl-xl-6">
        <div class="gallery-container">
          <div class="bg-gallery" data-aos="fade-left"></div>
          <div class="slick-slider" data-aos="fade-right">
            <? $images = get_sub_field('images'); ?>

            <? if( $images ): ?>
              <? foreach( $images as $image ): ?>

                <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />

              <? endforeach; ?>
            <? endif; ?>
          </div>
          <div class="paging-container" data-aos="fade-down">
            <span class="slick-prev"></span>
            <span class="slick-paging"></span>
            <span class="slick-next"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
