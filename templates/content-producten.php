<? use IMAGA\Theme\Extras; ?>

<? $image = get_field('header_image'); ?>
<a href="<? the_permalink();?>">
  <div class="text-center" data-aos="fade-up">
    <img class="img-fluid" src="<?= $image['sizes']['gallery-small']; ?>" alt="<?= $image['alt']; ?>" />
  </div>
  <div class="title" data-aos="fade-down" data-aos-offset="-100" data-aos-delay="100">
    <div>
      <? the_title(); ?>
    </div>
    <div>
      &euro; <? the_field('product_price'); ?> excl. btw
    </div>
  </div>
  <div class="description" data-aos="fade-down" data-aos-offset="-100" data-aos-delay="150">
    <?= Extras\limit_text( get_field('header_text'), 20, '...'); ?>
  </div>
</a>
<div class="text-center mt-3 mb-4" data-aos="fade-down" data-aos-offset="-100" data-aos-delay="200">
  <button type="button" class="btn btn-black" data-toggle="modal" data-target="#reserveerformulier-<? the_ID(); ?>">Reverveer</button>
</div>

<div class="modal fade" id="reserveerformulier-<? the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="reserveerformulier-<?= the_ID(); ?>" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-red">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="reserveerformulier-<? the_ID(); ?>">Reserveer: <? the_title(); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= do_shortcode('[contact-form-7 id="'.get_field('form').'"]');?>
      </div>
    </div>
  </div>
</div>
