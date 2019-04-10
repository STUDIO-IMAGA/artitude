<section class="element content-tabs" >
  <div class="container" data-aos="fade-right">
    <div class="row">
      <div class="col-12">

        <? $tabs = get_sub_field('tabs'); ?>

        <ul class="nav nav-fill" id="tab-<?= get_row_index(); ?>" role="tablist" data-aos="fade-up">

          <? $i = 0;?>
          <? foreach($tabs as $tab): $i++; ?>

            <? $active = ( $i == 1 ) ? 'active' : '' ; ?>
            <? $aria_selected = ( $i == 1 ) ? 'aria-selected="true"' : '' ; ?>
            <? $name = mb_strtolower( $tab['title'] ); ?>
            <? $tab_name = str_replace( ' ', '', $name ); ?>

            <li class="nav-item">
              <a class="nav-link <?= $active; ?>" id="<?= $tab_name; ?>-tab" data-toggle="tab" href="#<?= $tab_name; ?>-pane" role="tab" aria-controls="<?= $tab_name; ?>-pane" <?= $aria_selected; ?>>
                <?= $name; ?>
              </a>
            </li>

          <? endforeach; ?>

        </ul>

        <div class="tab-content panes" id="tabContent-<?= get_row_index(); ?>" data-aos="fade-down">

          <? $i = 0;?>
          <? foreach($tabs as $tab): $i++; ?>

            <? $active = ( $i == 1 ) ? 'active show' : '' ; ?>
            <? $name = mb_strtolower( $tab['title'] ); ?>
            <? $tab_name = str_replace( ' ', '', $name ); ?>

            <div class="tab-pane fade <?= $active; ?>" id="<?= $tab_name; ?>-pane" role="tabpanel" aria-labelledby="<?= $tab_name; ?>-tab">
              <div class="row">
                <div class="col-12 col-lg-6 pb-3">
                  <?= $tab['text_left']; ?>
                </div>
                <div class="col-12 col-lg-6 pb-3">
                  <?= $tab['text_right']; ?>
                </div>
              </div>
            </div>

          <? endforeach; ?>

        </div>

      </div>
    </div>
  </div>
</section>
