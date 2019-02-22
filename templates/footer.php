<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <?= Navigation\navigation( 'tertiary_navigation', 'legal_navigation' , 0, 1, "nav", ""); ?>
      </div>
      <div class="col-6">
      </div>
    </div>
  </div>
</section>

<footer>
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
</footer>
