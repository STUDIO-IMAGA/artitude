<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<? $image = get_field('header_image'); ?>

<section class="element header empty">
</section>

<? if ( function_exists('yoast_breadcrumb') ): ?>
  <section class="breadcrumbs" data-aos="fade-left" data-aos-duration="900">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <? yoast_breadcrumb(); ?>
        </div>
      </div>
    </div>
  </section>
<? endif; ?>

<section class="element content-gallery">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-7 pl-md-4 mb-4 mb-sm-0 ">
        <div class="gallery-container">
          <div class="bg-gallery" data-aos="fade-up-right" data-aos-delay="200"></div>
          <img src="<?= $image['sizes']['header-image']; ?>" alt="<?= $image['alt']; ?>" data-aos="fade-down-left"/>
        </div>
      </div>
      <div class="col-12 col-sm-5 pr-md-2 pb-4">
        <div class="titel" data-aos="fade-up-left">
          <h1><? the_title(); ?></h1>
        </div>
        <div class="meta" data-aos="fade-up-left" data-aos-delay="50">
          Artnr.: <? the_field('product_number'); ?>
        </div>

        <hr data-aos="fade-left" data-aos-delay="250">

        <div class="text" data-aos="fade-up-left" data-aos-delay="100">
          <? the_field('header_text'); ?>
        </div>

        <hr data-aos="fade-left" data-aos-delay="300">

        <div class="price" data-aos="fade-up-left" data-aos-delay="150">
          <span>&euro; <? the_field('product_price'); ?> (excl. btw)</span>
        </div>

        <hr data-aos="fade-left" data-aos-delay="350" data-aos-offset="-200">

        <div class="call-to-action" data-aos="fade-up-left" data-aos-delay="200" data-aos-offset="-200">
          <button type="button" class="btn btn-black" data-toggle="modal" data-target="#reserveerformulier">Reververen</button>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="reserveerformulier" tabindex="-1" role="dialog" aria-labelledby="reserveerformulierModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-red">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="reserveerformulierModalLabel">Reserveer : <? the_title();?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-5 pt-4 text-white">
        <?= do_shortcode('[contact-form-7 id="'.get_field('form').'"]');?>
      </div>
    </div>
  </div>
</div>
