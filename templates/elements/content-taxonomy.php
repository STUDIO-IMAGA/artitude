<section class="element content-taxonomy">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 taxonomies">
        <div class="row justify-content-center">
          <? $taxonomies = get_sub_field('taxonomies'); ?>
          <? foreach( $taxonomies as $taxonomy ): ?>
            <? $image = get_field('afbeelding', $taxonomy['taxonomy'] ); ?>
            <div class="col-12 col-sm-6 col-md-4 taxonomy">
              <a href="<?= get_term_link($taxonomy['taxonomy']); ?>">
                <div class="text-center">
                  <img class="img-fluid" src="<?= $image['sizes']['gallery-small']; ?>" alt="<?= $image['alt']; ?>" />
                </div>
                <div class="title">
                  <?= $taxonomy['taxonomy']->name; ?>
                </div>
              </a>
            </div>
          <? endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
