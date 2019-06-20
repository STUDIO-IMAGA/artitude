<? $image = get_sub_field('image'); ?>

<section class="element content-image wide">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="text" data-aos="fade-left">
          <? the_sub_field('text'); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 mb-5 mb-sm-0 text-right">
        <div class="image-container">
          <div class="bg-image" data-aos="fade-up"></div>
          <img class="img-fluid" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>" data-aos="fade-down" />
        </div>
        <div class="image-meta">
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
