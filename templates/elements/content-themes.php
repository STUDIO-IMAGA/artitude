<section class="element content-themes">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 themes">
        <div class="row justify-content-center">
          <? $themes = get_sub_field('themes'); ?>
          <? foreach( $themes as $theme ): ?>
            <? $image = $theme['image']; ?>
            <div class="col-12 col-sm-6 col-md-4 theme">
              <a class="lightbox" href="<?= $image['url']; ?>">
                <div class="text-center">
                  <img src="<?= $image['sizes']['gallery-small']; ?>" alt="<?= $image['alt']; ?>" />
                </div>
                <div class="title">
                  <?= $theme['title']; ?>
                </div>
              </a>
            </div>
          <? endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
