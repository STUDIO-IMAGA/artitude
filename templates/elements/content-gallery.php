<? $align_gallery = ( get_sub_field('align') == 'left' ) ? "pr-xl-6 order-1" : "pl-xl-6 order-3"; ?>
<? $align_text = ( get_sub_field('align') == 'left' ) ? "pl-xl-4 text-left" : "pr-xl-4 text-right"; ?>

<section class="element content-gallery">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-5 pr-md-2 <?= $align_text; ?> order-2">
        <div class="text" data-aos="fade-up">
          <? the_sub_field('text'); ?>
        </div>
      </div>
      <div class="col-7 pl-md-4 <?= $align_gallery; ?>">
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
          <div class="gallery-nav" data-aos="fade-left">
            <span class="gallery-prev"></span>
            <span class="gallery-paging"></span>
            <span class="gallery-next"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
