<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<? $image = get_field('header_image'); ?>
<? $text = get_field('header_text'); ?>

<? $order = ( is_front_page() ) ? "order-sm-3" : "order-sm-1"; ?>


<section class="element header">
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-12 col-sm-6 order-2 <?= $order; ?>">
        <div class="header-image">
          <div class="header-image-bg" data-aos="fade-left"></div>
          <img class="img-fluid" src="<?= $image['sizes']['header-image']; ?>" data-aos="fade-right" />
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
