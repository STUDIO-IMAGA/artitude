<? $image =           get_sub_field('image'); ?>

<?
switch (get_sub_field('align')):
  case 'left':
    $image_class = 'pr-md-4 pr-xl-6 order-md-1 left';
    $text_class = 'pl-md-3 pl-xl-4 text-sm-left';
    $aos = 'fade-left';
    break;
  case 'right':
    $image_class = 'pl-md-4 pl-xl-6 order-md-3 right';
    $text_class = 'pr-md-2 pr-xl-4 text-sm-right';
    $aos = 'fade-right';
    break;
  case 'center':
    $image_class = 'pr-md-4 pr-xl-6 order-md-1 center';
    $text_class = 'pl-md-2 pl-xl-4';
    $aos = 'fade-up';
    break;
endswitch;
?>

<section class="element content-image">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 order-2 text-left <?= $text_class; ?>">
        <div class="text" data-aos="fade-up">
          <? the_sub_field('text'); ?>
        </div>
      </div>
      <? if(get_sub_field('align') == 'center'): ?>
        </div>
        <div class="row justify-content-center mt-4">
      <? endif; ?>
      <div class="col-12 col-md-6 mb-5 mb-sm-0 <?= $image_class; ?>">
        <div class="image-container">
          <div class="bg-image" data-aos="<?= $aos; ?>"></div>
          <a class="lightbox" href="<?= $image['url']; ?>">
            <img class="img-fluid" src="<?= $image['sizes']['large']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>" data-aos="fade-down" />
          </a>
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
