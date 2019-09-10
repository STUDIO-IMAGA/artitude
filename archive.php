<section class="element header empty">
</section>

<? if (have_posts()) : ?>
  <section class="element content-heading">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-3">
          <div class="title text-left text-md-right">
            <? if(is_archive()): ?>
              <h2><? post_type_archive_title(); ?></h2>
            <h2><? single_term_title(); ?></h2>
            <? endif;?>
          </div>
        </div>
        <div class="col-12 col-md-7">
          <div class="text pl-md-4">
            <? $i = 0;?>
            <? while (have_posts()) : the_post(); $i++ ?>
              <? the_title(); ?>
              <span class="seperator">-</span>
            <? endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<? endif; ?>


<? if (!have_posts()) : ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Helaas,</h1>
        <p>We konden niks vinden.</p>
        <a class="btn btn-black" href="/" target="_self">Terug naar home</a>
      </div>
    </div>
  </div>
<? endif; ?>

<section class="archive content-producten">
  <div class="container">
    <div class="row producten">
      <? while (have_posts()) : the_post(); ?>
        <div class="col-12 col-sm-6 col-md-4 mb-5 product">
          <? get_template_part('templates/content', get_post_type() ); ?>
        </div>
      <? endwhile; ?>
    </div>
  </div>
</section>

<? the_posts_navigation(); ?>
