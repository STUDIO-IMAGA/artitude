<?
/**
* Template Name: Contact template
*/

use IMAGA\Theme\Extras;
use IMAGA\Theme\Assets;
use IMAGA\Theme\Navigation;
?>

<? while (have_posts()) : the_post(); ?>

  <section class="mt-8">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Contact</h1>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row border border-white p-4 align-items-center">
        <div class="col-6">
          <span class="h6">Zo zijn wij te bereiken</span>
          <?= Navigation\navigation( 'quaternary_navigation', 'contact_navigation' , 0, 1, "nav contact-menu light", ""); ?>
        </div>
        <div class="col-6 text-md-right">
          <span class="h6">Zo zijn wij te volgen</span>
          <div class="social-media">
            <? $socials = get_field('social_media','options'); ?>
            <? if($socials): ?>
              <? foreach($socials as $social): ?>
                <a class="social-item" href="<?= $social['url']; ?>">
                  <img class="img-fluid" src="<?= $social['icon_light']['url'] ?>" alt="<?= $social['service']; ?>"/>
                </a>
              <? endforeach; ?>
            <? endif; ?>
          </div>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-6 border-left border-bottom border-white p-4">
          <h4>Stuur ons een bericht</h4>
          <div class="text">
            <? the_content(); ?>
          </div>
        </div>
        <div class="col-6 border-left border-right border-bottom">
          <div class="row border-bottom border-white p-4">
            <div class="col-3">
              <h5>Adresgegevens</h5>
              <p>Zuiderkruisweg 12</p>
              <p>8938 AP</p>
              <p>Leeuwarden</p>
            </div>
            <div class="col-9">
              <img src="<?= Assets\asset_path('images/artitude-kaart.png'); ?>" alt="ARTITUDE">
            </div>
          </div>
          <div class="row p-4">
            <div class="col-12">
              <h5>Overige gegevens</h5>
              <p>KvK nr 1209343838</p>
              <p>Btw nr NL 102981233432</p>
              <p><a href="#" rel="nofollow">Algemene voorwaarden</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<? endwhile; ?>
