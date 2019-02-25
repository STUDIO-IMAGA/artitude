<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header'); ?>

<? $toggle = get_sub_field('toggle'); ?>
<? $order = (  $toggle == 'left' ) ? "order-1" : "order-3"; ?>

<? $image = get_sub_field('image'); ?>

<? if( have_rows('elements') ): ?>
  <? while( have_rows('elements') ): the_row(); ?>

    <? Extras\get_element( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>

<section class="element content-video">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="bg-video" data-aos="fade-down"></div>
        <div class="embed-responsive embed-responsive-16by9" data-aos="fade-up">
          <video class="embed-responsive-item" src="/wp-content/uploads/video.mp4"></video>
          <div class="btn-play"></div>
          <div class="video-progress progress">
            <div class="progress-bar bg-red" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="py-10"></div>
