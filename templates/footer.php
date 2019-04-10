<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<footer>
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 d-flex px-8">

          <div class="legal mr-auto">
            <?= Navigation\navigation( 'tertiary_navigation', 'legal_navigation' , 0, 1, "nav", ""); ?>
          </div>

          <div class="social-media">
            <? $socials = get_field('social_media','options'); ?>
            <? if($socials): ?>
              <? foreach($socials as $social): ?>
                <a class="social-item" href="<?= $social['url']; ?>">
                  <img class="img-fluid" src="<?= $social['icon']['url']; ?>"/>
                </a>
              <? endforeach; ?>
            <? endif; ?>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="bg-black">
    <div class="triangle"></div>

    <div class="brand">
      <img src="<?= Assets\asset_path("images/brand.svg"); ?>" alt="<?= bloginfo('description'); ?>">
    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-4 pr-0">
          <h6>Een keertje vrijblijvend sparren over je idee?</h6>
        </div>
        <div class="col-8 pl-0">
          <?= Navigation\navigation( 'secondary_navigation', 'footer_navigation' , 0, 1, "nav contact-menu", ""); ?>
        </div>
      </div>
    </div>
  </section>
</footer>
