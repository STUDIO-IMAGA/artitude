<section class="element content-themes">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title" data-aos="fade-up">
          <? the_sub_field('title'); ?>
          <div class="title-accent"></div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="lead" data-aos="fade-down">
          <? the_sub_field('lead'); ?>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-12 themes">
        <div class="row justify-content-center">
          <? $themes = get_sub_field('themes'); $i=-2; ?>
          <? foreach( $themes as $theme ): $i++; ?>
            <div class="col-12 col-sm-6 col-md-4 <?=($i % 3)?'theme':'theme offset';?>">
              <div class="element-inline content-gallery">
                <div class="gallery-container">
                  <div class="slick-slider" data-aos="fade-down">
                    <? $images = $theme['gallery']; ?>
                    <? if( $images ): ?>
                      <? foreach( $images as $image ): ?>

                        <img src="<?= $image['sizes']['gallery-small']; ?>" alt="<?= $image['alt']; ?>" />

                      <? endforeach; ?>
                    <? endif; ?>
                  </div>
                  <div class="gallery-nav" data-aos="fade-up">
                    <span class="gallery-prev"></span>
                    <span class="gallery-paging"></span>
                    <span class="gallery-next"></span>
                  </div>
                </div>
                <div class="title">
                  <?= $theme['title']; ?>
                </div>
              </div>
            </div>
          <? endforeach; ?>

        </div>
      </div>
    </div>
  </div>
</section>
