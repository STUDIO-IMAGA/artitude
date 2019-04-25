<?
/**
* Template Name: Contact template
*/

use IMAGA\Theme\Extras;
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
      <div class="row border">
        <div class="col-7">
          <div class="contact-menu">
            <span class="text">Zo zijn wij te bereiken</span>
            <?= Navigation\navigation( 'quaternary_navigation', 'contact_navigation' , 0, 1, "nav", ""); ?>
          </div>
        </div>
        <div class="col-5">
          <div class="social-media">
            <? $socials = get_field('social_media','options'); ?>
            <? foreach($socials as $social): ?>
              <a class="social-item" href="<?= $social['url']; ?>">
                <img class="img-fluid" src="<?= $social['icon']['url']; ?>"/>
              </a>
            <? endforeach; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6 border">
          <div class="text">
            <? the_content(); ?>
          </div>
        </div>
        <div class="col-6">
          <div class="row border">
            <div class="col-3">
              <h5>Adresgegevens</h5>
              <p>Zuiderkruisweg 12</p>
              <p>8938 AP</p>
              <p>Leeuwarden</p>
            </div>
            <div class="col-9">
              <img src="http://placehold.it/470x311" alt="">
            </div>
          </div>
          <div class="row border">
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
