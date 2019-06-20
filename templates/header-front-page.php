<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<? $images = get_field('header_images'); ?>
<? $text = get_field('header_text'); ?>

<section class="element header content-gallery">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-12 col-sm-6 order-2 order-sm-3">
          <div class="gallery-container">
            <div class="slick-slider-frontpage" data-aos="fade-right">
              <? if( $images ): ?>
                <? foreach( $images as $image ): ?>

                  <img src="<?= $image['sizes']['gallery-large']; ?>" alt="<?= $image['alt']; ?>" />

                <? endforeach; ?>
              <? endif; ?>
            </div>
            <div class="gallery-nav" data-aos="fade-left">
              <span class="gallery-prev"></span>
              <span class="gallery-paging"></span>
              <span class="gallery-next"></span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 order-1 order-sm-2 border border-white" data-aos="fade-left">
          <div class="content">
            <?= $text; ?>
          </div>
        </div>
      </div>
    </div>
</section>
