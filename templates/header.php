<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<? $image = get_field('header_image'); ?>
<? $text = get_field('header_text'); ?>


<section class="element header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6 filler">
        <div class="header-image" data-aos="fade-left">
          <img class="img-fluid" src="<?= $image['sizes']['header-image']; ?>" />
        </div>
      </div>
      <div class="col-6 content" data-aos="fade-right">
        <?= $text; ?>
      </div>
    </div>
  </div>
</section>
