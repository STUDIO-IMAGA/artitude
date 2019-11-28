<section class="element content-themes">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 themes">
        <div class="row justify-content-center">
          <?php $themes = get_sub_field('themes'); $i=0;?>
          <?php foreach( $themes as $theme ): $i++; $array = "";?>
            <?php $gallery = $theme['image']; ?>
            <?php $thumbnail_url = wp_get_attachment_image_url( $gallery[0], 'gallery-small' ); ?>
            <?php $full_url = wp_get_attachment_image_url( $gallery[0], 'full' ); ?>
            <?php foreach($gallery as $image): ?>
              <?php $array .= "'".wp_get_attachment_image_url( $image, 'full' )."',"; ?>
            <?php endforeach; ?>
            <div class="col-12 col-sm-6 col-md-4 theme lightbox-<?php echo $gallery[0]; ?>">
              <div class="gallery-container">
                <img class="img-fluid" src="<?php echo $thumbnail_url; ?>" alt="<?php echo $theme['title']; ?>" />
                <div class="gallery-paging"><?php echo count($gallery); ?></div>
              </div>
              <div class="title">
                <?php echo $theme['title']; ?>
              </div>
            </div>
              <?php
              // Very dirty inline.. oops
              wp_add_inline_script('imaga/js', "$('.lightbox-".$gallery[0]."').on('click',function(){SimpleLightbox.open({
                items: [".$array."],
                closeBtnCaption: 'Sluiten',
                 nextBtnCaption: 'Volgende',
                 prevBtnCaption: 'Vorige',
                 loadingCaption: 'Bezig met laden...',
              });
              });");
            ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
