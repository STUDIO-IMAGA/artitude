<? $align_image =     ( get_sub_field('align') == 'left' ) ? "order-xl-1 left" : "order-xl-3 right"; ?>
<? $align_text =      ( get_sub_field('align') == 'left' ) ? "text-left" : "text-right"; ?>
<? $padding_image =   ( get_sub_field('align') == 'left' ) ? "pr-md-4 pr-xl-6" : "pl-md-4 pl-xl-6"; ?>
<? $padding_text =    ( get_sub_field('align') == 'left' ) ? "pl-md-2 pl-xl-4" : "pr-md-2 pr-xl-4"; ?>
<? $aos =             ( get_sub_field('align') == 'left' ) ? "fade-left" : "fade-right"; ?>
<? $image = get_sub_field('image'); ?>

<section class="element content-image">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-xl-6 order-2">
        <div class="text <?= $padding_text; ?> <?= $align_text; ?>" data-aos="fade-up">
          <? the_sub_field('text'); ?>
        </div>
      </div>
      <div class="col-12 col-xl-6 <?= $padding_image; ?> <?= $align_image; ?>">
        <div class="image-container">
          <div class="bg-image" data-aos="<?= $aos; ?>"></div>
          <img class="img-fluid" src="<?= $image['sizes']['large']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>" data-aos="fade-down" />
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
