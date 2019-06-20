<? $image_left =      get_sub_field('image_left'); ?>
<? $image_right =     get_sub_field('image_right'); ?>

<section class="element content-image duo">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="text mb-5 mb-sm-0" data-aos="fade-down">
          <? the_sub_field('text'); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 mb-5 mb-sm-0 pr-md-3 pr-xl-6">
        <div class="image-container">
          <div class="bg-image" data-aos="fade-right"></div>
          <a class="lightbox" href="<?= $image_left['url']; ?>">
            <img class="img-fluid" src="<?= $image_left['sizes']['large']; ?>" alt="<?= $image_left['alt']; ?>" title="<?= $image_left['title']; ?>" data-aos="fade-up-right" />
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-5 mb-sm-0 pl-md-3 pl-xl-6 text-right">
        <div class="image-container">
          <div class="bg-image" data-aos="fade-left"></div>
          <a class="lightbox" href="<?= $image_right['url']; ?>">
            <img class="img-fluid" src="<?= $image_right['sizes']['large']; ?>" alt="<?= $image_right['alt']; ?>" title="<?= $image_right['title']; ?>" data-aos="fade-down-left" />
          </a>
        </div>
        <div class="image-meta" data-aos="fade-up">
          <? if(get_sub_field('description')): ?>
            <span class="meta-description"><? the_sub_field('description'); ?></span>
          <? endif; ?>
          <? if(get_sub_field('link')): ?>
            <a class="meta-link" href="<? the_sub_field('link'); ?>" >Bekijk Project</a>
          <? endif;?>
        </div>
      </div>
    </div>
  </div>
</section>
