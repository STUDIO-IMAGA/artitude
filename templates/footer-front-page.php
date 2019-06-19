<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<? get_template_part('templates/elements/content','highlights'); ?>

<section class="element footer-front-page p-3 p-sm-0">
  <div class="container border border-white">
    <div class="row">
      <div class="col-12 col-md-4 border-right border-white p-3 p-md-5">
        <div class="title">
          <div>
            <span class="h4">Deze klanten hadden een idee..</span>
          </div>
          <div class="text-left text-md-right">
            <span class="h4">waar wij realiteit van maakten</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-8">
        <div class="customers">
          <? $klanten = get_field('customers','options'); ?>
          <? if($klanten): ?>
            <? foreach($klanten as $klant): ?>
              <div class="customers-item">
                <img class="img-fluid" src="<?= $klant['image']['url'] ?>" alt="<?= $klant["customer_name"]?>"/>
              </div>
            <? endforeach; ?>
          <? endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
