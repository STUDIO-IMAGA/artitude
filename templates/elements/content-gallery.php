<section class="element content-gallery">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-4">
        <div class="text" data-aos="fade-left">
          <? the_sub_field('text'); ?>
        </div>
      </div>
      <div class="col-8">
        <div class="gallery-container" data-aos="fade-right">
          <div class="slick-slider">
            <? if( have_rows('lists') ): ?>
              <? while( have_rows('lists') ): the_row(); ?>
                <? $image = get_sub_field('image'); ?>

                <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
              <? endwhile; ?>
            <? endif; ?>
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
